using nMorph.framework.linker.generators;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace nMorph.framework.linker.helpers
{
    public class RttiHelper
    {
        private static DiscoverResult cache = null;

        /// <summary>
        /// Descubre los métodos de lógica de usuario 
        /// Devuelve su información en un objeto consolidado
        /// preparado para generación de código
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static DiscoverResult Discover(Linker current)
        {
            //System.Threading.Thread.Sleep(25000);

            if (cache != null)
                return cache;

            DiscoverResult result = new DiscoverResult();
            result.discoveredClasses = new List<RenderClass>();
            result.discoveredMethods = new List<RenderMethod>();

            try
            {
                #region Carga DLLs
                // obtiene el assembly y carga las dlls para reflection solamente
                if (RuntimePolicyHelper.LegacyV2RuntimeEnabledSuccessfully == true)
                {
                }

                string compilationFolder = "out";
                if (current.BuildEnvironment == enums.BuildEnvironmentEnum.prod)
                    compilationFolder = "deploy";

                // rutas
                string csServerFolder = current.SolBasePath + "2_logic\\logic\\" + compilationFolder + "\\cslinked\\";
                string DLLPath = csServerFolder + "bin\\";

                // se asume que la ruta base del namespace será igual para todos los componentes
                // se asume que vendrá siempre en dos partes solamente, ej: nMorph.core.*
                string[] nsparts = current.CurrentNamespace.Split(new char[] { '.' });
                string logicDLLname = nsparts[0] + "." + nsparts[1] + ".logic.dll";
                string logicNS = nsparts[0] + "." + nsparts[1] + ".logic";


                // espera para depuracion
                //System.Threading.Thread.Sleep(30000);


                Assembly principal = null;

                //Cargo las referencias principales del framework
                foreach (string dll in Directory.GetFiles(AppDomain.CurrentDomain.BaseDirectory + @"\res\", "*.dll"))
                {
                    try
                    {
                        System.Reflection.Assembly.Load(System.IO.File.ReadAllBytes(dll));
                    }
                    catch (FileLoadException loadEx)
                    {
                        Console.Write(loadEx.Message);
                    } // The Assembly has already been loaded.
                    catch (BadImageFormatException imgEx)
                    {
                        Console.Write(imgEx.Message);
                    } // If a BadImageFormatException exception is thrown, the file is not an assembly.
                    catch (Exception ex)
                    {
                        Console.Write(ex.Message);
                    }
                }

                AppDomain.CurrentDomain.AssemblyResolve += CurrentDomain_AssemblyResolve;

                DirectoryInfo di = new DirectoryInfo(DLLPath);
                var files = di.GetFiles("*.dll");
                foreach (var file in files.OrderBy(f => f.LastWriteTime))
                {

                    try
                    {
                        Assembly assembly = System.Reflection.Assembly.Load(System.IO.File.ReadAllBytes(file.FullName));
                        //Assembly assembly = System.Reflection.Assembly.ReflectionOnlyLoad(System.IO.File.ReadAllBytes(dll));


                        if (file.FullName.EndsWith(logicDLLname))
                        {
                            principal = assembly;
                        }
                    }
                    catch (FileLoadException loadEx)
                    {
                        Console.Write(loadEx.Message);
                    } // The Assembly has already been loaded.
                    catch (BadImageFormatException imgEx)
                    {
                        Console.Write(imgEx.Message);
                    } // If a BadImageFormatException exception is thrown, the file is not an assembly.
                    catch (Exception ex)
                    {
                        Console.Write(ex.Message);
                    }
                }

                if (principal == null)
                {
                    current.Log("No se ha encontrado el assembly esperado");
                    //return "";
                }

                #endregion

                // se itera por los tipos que sean de clases selladas y que estén dentro del namespace específico de lógica
                var LogicTypes = (from t in principal.GetTypes()
                                  from m in t.GetMethods()
                                  where t.IsSealed == true && (t.FullName.Contains(logicNS))
                                  //&& m.Name.ToString().StartsWith(initFunctionParameter)
                                  select t).Distinct();

                // itero por todos los tipos encontrados
                foreach (var LogicType in LogicTypes)
                {
                    var fieldn = LogicType.GetField("__rtti");

                    // si no tiene rtti, se asume que no es una clase publicada
                    if (fieldn != null)
                    {
                        // leo el xml del rtti
                        var xml = fieldn.GetValue(null).ToString();

                        // lo parseo para leerlo con Linq
                        XDocument doc = XDocument.Parse(xml);

                        // obtengo los métodos declarados en el XML
                        var methods = (from nclass in doc.Elements("class")
                                       from nmethod in nclass.Elements()
                                       where nmethod.Name != "meta" &&
                                             nmethod.Name != "implements" &&
                                             nmethod.Name != "new" &&
                                             nmethod.Name != "haxe_doc" &&
                                             nmethod.Attribute("set").Value == "method"
                                       //&& nmethod.Name.ToString().StartsWith(initFunctionParameter)
                                       select nmethod).ToList();

                        #region Classes Discovery

                        // obtención de la lista de clases que serán renderizadas
                        foreach (var method in methods)
                        {
                            // barro los parámetros
                            foreach (var par in method.Element("f").Elements())
                            {
                                string strType = par.Attribute("path").Value;
                                if (IsCustomClass(par))
                                {
                                    if (strType == "List" || strType == "Array" || strType == "Null")
                                    {
                                        foreach (var t in par.Elements().Where(e => e.Attributes().Count(a => a.Name == "path") > 0 && IsCustomClass(e)))
                                        {
                                            if (IsCustomClass(t))
                                            {
                                                if (result.discoveredClasses.Count(c => c.Name == t.Attribute("path").Value) == 0)
                                                {
                                                    result.discoveredClasses.Add(new RenderClass() { Name = t.Attribute("path").Value, RenderType = ClassTypeEnum.LogicClass, principal = principal });
                                                    SubTypeCheck(current, t.Attribute("path").Value, principal, result.discoveredClasses);
                                                }
                                            }
                                        }
                                    }
                                    else
                                    {
                                        if (result.discoveredClasses.Count(c => c.Name == par.Attribute("path").Value) == 0)
                                        {
                                            result.discoveredClasses.Add(new RenderClass() { Name = par.Attribute("path").Value, RenderType = ClassTypeEnum.LogicClass, principal = principal });
                                            SubTypeCheck(current, par.Attribute("path").Value, principal, result.discoveredClasses);
                                        }
                                    }
                                }
                            }
                        }

                        #endregion

                        #region Methods Discovery

                        //System.Threading.Thread.Sleep(25000);

                        // Obtención de métodos para generación
                        foreach (var method in methods)
                        {
                            // no renderiza los métodos estáticos como métodos de lógica
                            if (method.Attribute("static") != null && method.Attribute("static").Value == "1") continue;

                            // objeto a devolver
                            RenderMethod rMethod = new RenderMethod();
                            rMethod.Parameters = new List<RenderParameter>();
                            rMethod.LogicType = LogicType;
                            rMethod.logicNS = logicNS;

                            // Nombre del método
                            rMethod.Name = method.Name.ToString();

                            // obtengo la lista de nombres de parámetros
                            string[] nparams = method.Element("f").Attribute("a").Value.Split(':');
                            XElement[] xparams = method.Element("f").Elements().ToArray();

                            // lista de parámetros con comas y con tipos
                            for (int i = 0; i < nparams.Length; i++)
                            {
                                if (nparams[i] == "") continue;
                                RenderParameter rParameter = new RenderParameter();
                                rParameter.Name = nparams[i];
                                rParameter.Xtype = xparams[i];
                                rMethod.Parameters.Add(rParameter);
                            }

                            // descubrimiento del tipo de dato de retorno
                            RenderParameter retParameter = new RenderParameter();
                            retParameter.Name = "";
                            retParameter.Xtype = xparams.Last();
                            rMethod.ReturnParameter = retParameter;

                            result.discoveredMethods.Add(rMethod);
                        }

                        #endregion
                    }
                }

            }
            catch (System.Reflection.ReflectionTypeLoadException ex)
            {
                foreach (Exception i in ex.LoaderExceptions)
                    current.Log(i.Message);
            }
            catch (Exception ex)
            {
                current.Log(ex.Message);
            }

            cache = result;
            return result;
        }

        private static Assembly CurrentDomain_AssemblyResolve(object sender, ResolveEventArgs args)
        {
            return AppDomain.CurrentDomain.GetAssemblies().FirstOrDefault(a => a.FullName == args.Name);
        }

        /// <summary>
        /// Método para determinar si es un tipo de dato básico o una clase que debe ser descubierta internamente
        /// </summary>
        /// <param name="xElement"></param>
        /// <returns></returns>
        public static bool IsCustomClass(XElement xElement)
        {
            if (xElement.Attributes().Count(a => a.Name == "path") == 0) return false;

            string Path = xElement.Attribute("path").Value;

            switch (Path)
            {
                case "Void":
                    return false;
                case "String":
                    return false;
                case "Int":
                    return false;
                case "Float":
                    return false;
                case "Bool":
                    return false;
                case "haxe.io.UInt8Array":
                    return false;
                case "haxe.io.Bytes":
                    return false;
                case "Date":
                    return false;
                case "haxe.Int64":
                    return false;
                case "Map":
                    return false;
                case "List":
                    return IsCustomClass(xElement.Elements().First());
                case "Array":
                    return IsCustomClass(xElement.Elements().First());
                default:
                    return true;
            }
        }

        /// <summary>
        /// Método que permite buscar iterativamente hacia adentro las clases que pueden estar involucradas
        /// para que se generen como parte del proxy
        /// </summary>
        /// <param name="strType"></param>
        /// <param name="asm"></param>
        /// <param name="ClassesToRender"></param>
        public static void SubTypeCheck(Linker current, string strType, System.Reflection.Assembly principal, List<RenderClass> discoveredClasses)
        {
            List<Type> HxObject = (from ax in AppDomain.CurrentDomain.GetAssemblies().Where(a => a.FullName.StartsWith("nMorph"))
                                   from tp in ax.GetTypes()
                                   where ax.FullName.StartsWith("nMorph") && tp.FullName == "haxe.lang.HxObject"
                                   select tp).ToList();

            if (HxObject.Count == 0)
            {
                current.Log("No se encuentra referencia nMorph.framework.common");
                return;
            }

            List<Type> CurType = (from ax in AppDomain.CurrentDomain.GetAssemblies().Where(a => a.FullName.StartsWith("nMorph"))
                                  from tp in ax.GetTypes()
                                  where ax.FullName.StartsWith("nMorph") && tp.FullName == strType
                                  select tp).ToList();

            if (CurType.Count == 0)
            {
                current.Log("No se encuentra referencia a la clase " + strType);
                return;
            }

            List<Type> HxEnum = (from ax in AppDomain.CurrentDomain.GetAssemblies().Where(a => a.FullName.StartsWith("nMorph"))
                                 from tp in ax.GetTypes()
                                 where ax.FullName.StartsWith("nMorph") && tp.FullName == "haxe.lang.Enum"
                                 select tp).ToList();

            if (HxEnum.Count == 0)
            {
                current.Log("No se encuentra referencia haxe.lang.Enum");
                return;
            }

            if (CurType.First().IsSubclassOf(HxObject.First()))
            {
                object obj = CurType.First().Assembly.CreateInstance(strType);

                if (obj.GetType().GetField("__rtti") != null)
                {
                    // obtengo el XML
                    var xml = obj.GetType().GetField("__rtti").GetValue(obj).ToString();

                    // lo parseo para leerlo con Linq
                    XDocument doc = XDocument.Parse(xml);

                    // obtengo los métodos declarados en el XML
                    var fields = from nclass in doc.Elements("class")
                                 from nfields in nclass.Elements()
                                 where nfields.Attributes().Count(a => a.Name == "get") > 0 &&
                                    nfields.Attribute("get").Value == "accessor"
                                 select nfields;

                    // obtención de la lista de propiedades (deben estar declaradas como propiedades)
                    foreach (var field in fields)
                    {
                        var subTypes = from tt in field.Descendants()
                                       where tt.Attributes().Count(a => a.Name == "path") > 0
                                       select tt;

                        // barro todos los nodos que tiene un path (tipo de dato)
                        foreach (var subType in subTypes)
                        {
                            if (IsCustomClass(subType) && subType.Attributes().Count(a => a.Name == "path") > 0)
                            {
                                if (subType.Attribute("path").Value == "List" || subType.Attribute("path").Value == "Array" || subType.Attribute("path").Value == "Null")
                                {
                                    foreach (var t in subType.Elements().Where(e => e.Attributes().Count(a => a.Name == "path") > 0 && IsCustomClass(e)))
                                    {
                                        if (IsCustomClass(t))
                                        {
                                            if (discoveredClasses.Count(c => c.Name == t.Attribute("path").Value) == 0)
                                            {
                                                discoveredClasses.Add(new RenderClass() { Name = t.Attribute("path").Value, RenderType = ClassTypeEnum.LogicClass, principal = principal });
                                                SubTypeCheck(current, t.Attribute("path").Value, principal, discoveredClasses);
                                            }
                                        }
                                    }
                                }
                                else
                                {
                                    if (discoveredClasses.Count(c => c.Name == subType.Attribute("path").Value) == 0)
                                    {
                                        discoveredClasses.Add(new RenderClass() { Name = subType.Attribute("path").Value, RenderType = ClassTypeEnum.LogicClass, principal = principal });
                                        SubTypeCheck(current, subType.Attribute("path").Value, principal, discoveredClasses);
                                    }
                                }
                            }
                        }

                    }
                }
            }
            else if (CurType.First().IsSubclassOf(HxEnum.First()))
            {
                if (discoveredClasses.Count(c => c.Name == strType) == 0)
                    discoveredClasses.Add(new RenderClass() { Name = strType, RenderType = ClassTypeEnum.EnumClass });
            }
        }
    }

    /// <summary>
    /// Clase resultante del descubrimiento de métodos
    /// </summary>
    public class DiscoverResult
    {
        /// <summary>
        /// Métodos descubiertos
        /// </summary>
        public List<RenderMethod> discoveredMethods { get; set; }

        /// <summary>
        /// Clases descubiertas
        /// </summary>
        public List<RenderClass> discoveredClasses { get; set; }
    }

    /// <summary>
    /// Clase contenedora de información de método de lógica descubierto
    /// </summary>
    public class RenderMethod
    {
        /// <summary>
        /// Nombre del método descubierto
        /// </summary>
        public string Name { get; set; }

        /// <summary>
        /// Lista de parámetros para invocación del método
        /// </summary>
        public List<RenderParameter> Parameters { get; set; }

        /// <summary>
        /// Definición del tipo de dato de retorno. El nombre vendrá vacío
        /// </summary>
        public RenderParameter ReturnParameter { get; set; }

        /// <summary>
        /// Tipo de dato que contiene el método
        /// </summary>
        public Type LogicType { get; set; }

        /// <summary>
        /// Namespace del tipo de dato
        /// </summary>
        public string logicNS { get; set; }
    }

    /// <summary>
    /// Clase contenedora de información de parámetro de método de lógica descubierto
    /// </summary>
    public class RenderParameter
    {
        /// <summary>
        /// Nombre del parámetro descubierto
        /// </summary>
        public string Name { get; set; }

        /// <summary>
        /// Denominación del tipo de Haxe según Rtti
        /// </summary>
        public XElement Xtype { get; set; }
    }

    /// <summary>
    /// Clase contenedora de información de clase que contiene lógica descubierto
    /// </summary>
    public class RenderClass
    {
        /// <summary>
        /// Nombre de la clase descubiertga
        /// </summary>
        public string Name { get; set; }

        /// <summary>
        /// Tipo de clase descubierta
        /// </summary>
        public ClassTypeEnum RenderType { get; set; }

        /// <summary>
        /// Assembly principal en donde se encuentra la clase
        /// </summary>
        public Assembly principal { get; set; }
    }

    /// <summary>
    /// Enumeración de tipo de clase descubierta
    /// </summary>
    public enum ClassTypeEnum
    {
        LogicClass,
        EnumClass
    }
}
