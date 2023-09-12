using nMorph.framework.linker.helpers;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.linker.generators
{
    public class HaxeGenerator
    {
        public static string InitializerHeader(Linker current, HaxeGeneratorTarget target)
        {
            StringBuilder sb = new StringBuilder();

            if (target == HaxeGeneratorTarget.Service)
            {
                sb.Append("package nMorph.core.service.configuration;"); sb.Append(Environment.NewLine);
            }

            if (target == HaxeGeneratorTarget.Batch)
            {
                sb.Append("package nMorph.core.batch.configuration;"); sb.Append(Environment.NewLine);
            }

            sb.Append("import sys.io.File;"); sb.Append(Environment.NewLine);
            sb.Append("import sys.FileSystem;"); sb.Append(Environment.NewLine);
            sb.Append("/**"); sb.Append(Environment.NewLine);
            sb.Append(" * ..."); sb.Append(Environment.NewLine);
            sb.Append(" * @author Smartwork"); sb.Append(Environment.NewLine);
            sb.Append(" */"); sb.Append(Environment.NewLine);
            sb.Append("class Initializer"); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("	public function new()"); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("	}"); sb.Append(Environment.NewLine);
            sb.Append("	public static function Application_Start(ConfigPath: String)"); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("		"); sb.Append(Environment.NewLine);

            return sb.ToString();
        }

        public static string InitializerGeneration(Linker current, HaxeGeneratorTarget target)
        {
            // obtiene el assembly y carga las dlls para reflection solamente
            if (RuntimePolicyHelper.LegacyV2RuntimeEnabledSuccessfully == true)
            {
            }

            string cslinkedFolder = current.OutFolder + "cslinked\\";
            string DLLPath = cslinkedFolder + "bin\\";

            // espera para depuracion
            //System.Threading.Thread.Sleep(30000);

            List<Type> TypesFound = new List<Type>();

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
            List<Assembly> CurrentAssemblies = new List<Assembly>();

            foreach (var file in files.OrderBy(f => f.LastWriteTime))
            {
                try
                {
                    Assembly assembly = System.Reflection.Assembly.Load(System.IO.File.ReadAllBytes(file.FullName));
                    //Assembly assembly = System.Reflection.Assembly.ReflectionOnlyLoad(System.IO.File.ReadAllBytes(dll));
                    CurrentAssemblies.Add(assembly);
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

            foreach (var asm in CurrentAssemblies)
            {
                // busca los tipos que tienen un método llamado "ReadConfiguration" (cuidado con el case)
                // son los métodos que en haxe leerían la configuración
                var LogicTypes = (from t in asm.GetTypes()
                                  from m in t.GetMethods()
                                  where t.FullName.StartsWith("nMorph") && m.Name == "ReadConfiguration"
                                  select t).Distinct();

                // si encuentra tipos en el assembly, los agrega a la lista
                if (LogicTypes.Count() > 0)
                    TypesFound.AddRange(LogicTypes);
            }

            // Para concatenación de contenido generado
            StringBuilder sb = new StringBuilder();

            // por cada tipo encontrado, se renderiza
            foreach (var t in TypesFound)
            {
                sb.Append("		if (FileSystem.exists(ConfigPath + \"" + t.FullName + ".config\"))"); sb.Append(Environment.NewLine);
                sb.Append("		{"); sb.Append(Environment.NewLine);
                sb.Append("			var " + t.FullName.Replace(".", "_") + "_Content = File.getContent(ConfigPath + \"" + t.FullName + ".config\");"); sb.Append(Environment.NewLine);
                sb.Append("			" + t.FullName + ".ReadConfiguration(" + t.FullName.Replace(".", "_") + "_Content);"); sb.Append(Environment.NewLine);
                sb.Append("		}"); sb.Append(Environment.NewLine);
                sb.Append(Environment.NewLine);
            }

            // Devuelve el contenido generado
            return sb.ToString();
        }

        public static string InitializerFooter(Linker current)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("	}"); sb.Append(Environment.NewLine);
            sb.Append("}"); sb.Append(Environment.NewLine);
            return sb.ToString();
        }

        private static Assembly CurrentDomain_AssemblyResolve(object sender, ResolveEventArgs args)
        {
            return AppDomain.CurrentDomain.GetAssemblies().FirstOrDefault(a => a.FullName == args.Name);
        }

        public static void WriteConfigFiles(Linker current, HaxeGeneratorTarget target)
        {
            // obtiene el assembly y carga las dlls para reflection solamente
            if (RuntimePolicyHelper.LegacyV2RuntimeEnabledSuccessfully == true)
            {
            }

            string cslinkedFolder = current.OutFolder + "cslinked\\";
            string DLLPath = cslinkedFolder + "bin\\";

            // espera para depuracion
            //System.Threading.Thread.Sleep(30000);

            List<Type> TypesFound = new List<Type>();

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
            List<Assembly> CurrentAssemblies = new List<Assembly>();

            foreach (var file in files.OrderBy(f => f.LastWriteTime))
            {
                try
                {
                    Assembly assembly = System.Reflection.Assembly.Load(System.IO.File.ReadAllBytes(file.FullName));
                    //Assembly assembly = System.Reflection.Assembly.ReflectionOnlyLoad(System.IO.File.ReadAllBytes(dll));
                    CurrentAssemblies.Add(assembly);
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

            foreach (var asm in CurrentAssemblies)
            {
                // busca los tipos que tienen un método llamado "ReadConfiguration" (cuidado con el case)
                // son los métodos que en haxe leerían la configuración
                var LogicTypes = (from t in asm.GetTypes()
                                  from m in t.GetMethods()
                                  where t.FullName.StartsWith("nMorph") && m.Name == "ReadConfiguration"
                                  select t).Distinct();

                // si encuentra tipos en el assembly, los agrega a la lista
                if (LogicTypes.Count() > 0)
                    TypesFound.AddRange(LogicTypes);
            }


            // Carpeta de configuraciones desplegadas
            string ConfigFolder = current.SolBasePath + "2_logic\\servers\\config\\";
            //string phpConfigFolder = current.SolBasePath + "2_logic\\servers\\server.php\\root\\config\\";
            string batchConfigFolder = current.SolBasePath + "4_batch\\batch\\out\\cslinked\\bin\\config\\";
            // y la configuración de ?

            if (!System.IO.Directory.Exists(ConfigFolder))
                System.IO.Directory.CreateDirectory(ConfigFolder);
            if (!System.IO.Directory.Exists(batchConfigFolder))
                System.IO.Directory.CreateDirectory(batchConfigFolder);


            // por cada tipo encontrado, se renderiza
            foreach (var t in TypesFound)
            {
                // Si el archivo de configuración no existe en el destino entonces debería crearlo leyendo del ejemplo base
                //"WriteExampleConfiguration"

                if (target == HaxeGeneratorTarget.Service)
                {
                    if (System.IO.File.Exists(ConfigFolder + t.FullName + ".config") == false && t.GetMethod("WriteExampleConfiguration") != null)
                    {
                        if (!System.IO.Directory.Exists(ConfigFolder)) System.IO.Directory.CreateDirectory(ConfigFolder);
                        var method = t.GetMethod("WriteExampleConfiguration");
                        System.IO.File.WriteAllText(ConfigFolder + t.FullName + ".config", method.Invoke(null, null).ToString());
                    }

                    //if (System.IO.File.Exists(phpConfigFolder + t.FullName + ".config") == false && t.GetMethod("WriteExampleConfiguration") != null)
                    //{
                    //    if (!System.IO.Directory.Exists(phpConfigFolder)) System.IO.Directory.CreateDirectory(phpConfigFolder);
                    //    var method = t.GetMethod("WriteExampleConfiguration");
                    //    System.IO.File.WriteAllText(phpConfigFolder + t.FullName + ".config", method.Invoke(null, null).ToString());
                    //}
                }

                if (target == HaxeGeneratorTarget.Batch)
                {
                    if (System.IO.File.Exists(batchConfigFolder + t.FullName + ".config") == false && t.GetMethod("WriteExampleConfiguration") != null)
                    {
                        if (!System.IO.Directory.Exists(batchConfigFolder)) System.IO.Directory.CreateDirectory(batchConfigFolder);
                        var method = t.GetMethod("WriteExampleConfiguration");
                        System.IO.File.WriteAllText(batchConfigFolder + t.FullName + ".config", method.Invoke(null, null).ToString());
                    }
                }
            }
        }
    }

    public enum HaxeGeneratorTarget
    {
        Service,
        Batch
    }
}
