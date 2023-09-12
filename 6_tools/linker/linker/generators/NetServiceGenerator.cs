using nMorph.framework.linker.helpers;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection;
using System.Text;
using System.Xml.Linq;

namespace nMorph.framework.linker.generators
{
    public class NetServiceGenerator
    {
        #region ASMX
        public static string ServiceAsmxGenerator(Linker current)
        {
            StringBuilder sb = new StringBuilder();

            // Header
            sb.Append("using System;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Collections.Generic;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Linq;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Web;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Web.Services;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Xml.Serialization;"); sb.Append(Environment.NewLine);

            sb.Append("namespace nMorph.core.nest.net4.asmx"); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("    /// <summary>"); sb.Append(Environment.NewLine);
            sb.Append("    /// nMorph services"); sb.Append(Environment.NewLine);
            sb.Append("    /// </summary>"); sb.Append(Environment.NewLine);
            sb.Append("    [WebService(Namespace = \"http://nMorph.core/\")]"); sb.Append(Environment.NewLine);
            sb.Append("    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]"); sb.Append(Environment.NewLine);
            sb.Append("    [System.ComponentModel.ToolboxItem(false)]"); sb.Append(Environment.NewLine);
            sb.Append("    [System.Web.Script.Services.ScriptService]"); sb.Append(Environment.NewLine);
            sb.Append("    public class Core : System.Web.Services.WebService"); sb.Append(Environment.NewLine);
            sb.Append("    {"); sb.Append(Environment.NewLine);

            //current.Log("Depurar");
            //System.Threading.Thread.Sleep(25000);

            sb.Append(RenderAsmxMethod(current));

            // Footer
            sb.Append("    }"); sb.Append(Environment.NewLine);
            sb.Append("}"); sb.Append(Environment.NewLine);

            return sb.ToString();
        }


        /// <summary>
        /// Método que genera el código fuente del proxy en función de los métodos de lógica
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string RenderAsmxMethod(Linker current)
        {
            var discovered = RttiHelper.Discover(current);
            StringBuilder sb = new StringBuilder();

            foreach (var method in discovered.discoveredMethods)
            {
                string ParameterList = "";
                string ParameterListWithTypes = "";
                foreach (var parameter in method.Parameters)
                {
                    // mapeo de arreglos para entrada a los métodos renderizados directos desde Haxe
                    if (parameter.Xtype.Attribute("path").Value == "List" || parameter.Xtype.Attribute("path").Value == "Array")
                        ParameterList += "new Array<object>() { __a = " + parameter.Name + ".ToArray() }, ";
                    else if (parameter.Xtype.Attribute("path").Value == "Null")
                        ParameterList += "new haxe.lang.Null<" + RenderParamforCS(parameter.Xtype.Elements().First()) + ">(" + parameter.Name + ".Value, " + parameter.Name + ".HasValue), ";
                    else if (parameter.Xtype.Attribute("path").Value == "Date")
                        ParameterList += "new Date(" + parameter.Name + "), ";
                    else if (parameter.Xtype.Attribute("path").Value == "Float")
                        ParameterList += "Convert.ToDouble(" + parameter.Name + "), ";
                    else
                        ParameterList += parameter.Name + ", ";

                    ParameterListWithTypes += RenderParamforCS(parameter.Xtype) + " " + parameter.Name + ", ";
                }
                if (ParameterList.EndsWith(", "))
                    ParameterList = ParameterList.Substring(0, ParameterList.Length - ", ".Length);
                if (ParameterListWithTypes.EndsWith(", "))
                    ParameterListWithTypes = ParameterListWithTypes.Substring(0, ParameterListWithTypes.Length - ", ".Length);

                // Requiere conversión de listas
                string ArrayConversion = "";
                if (method.ReturnParameter.Xtype.Attributes().Count(a => a.Name == "path") > 0
                    && method.ReturnParameter.Xtype.Attribute("path").Value == "Array")
                {
                    ArrayConversion = ".__a.Cast<" + method.ReturnParameter.Xtype.Elements().First().Attribute("path").Value + ">().ToList()";
                }

                // Renderización del servicio
                sb.Append("        /// <summary>"); sb.Append(Environment.NewLine);
                sb.Append("        /// Método " + method.Name + " " + Newtonsoft.Json.JsonConvert.SerializeObject(method)); sb.Append(Environment.NewLine);
                sb.Append("        /// </summary>"); sb.Append(Environment.NewLine);
                sb.Append("        /// <returns></returns>"); sb.Append(Environment.NewLine);
                sb.Append("        [WebMethod]"); sb.Append(Environment.NewLine);
                sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_CREATE))]"); sb.Append(Environment.NewLine);
                sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_DELETE))]"); sb.Append(Environment.NewLine);
                sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_EDIT))]"); sb.Append(Environment.NewLine);
                sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_NOCHANGE))]"); sb.Append(Environment.NewLine);
                sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectSourceTypeEnum_LOGIC))]"); sb.Append(Environment.NewLine);
                sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectSourceTypeEnum_DB))]"); sb.Append(Environment.NewLine);


                sb.Append("        public " + RenderParamforCS(method.ReturnParameter.Xtype) + " " + method.Name + "(" + ParameterListWithTypes + ")"); sb.Append(Environment.NewLine);
                sb.Append("        {"); sb.Append(Environment.NewLine);

                sb.Append("            " + method.LogicType.FullName + " lx = new " + method.LogicType.FullName + "();"); sb.Append(Environment.NewLine);
                sb.Append("            " + (method.ReturnParameter.Xtype.Attribute("path").Value == "Void" ? "" : "return ") +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Float" ? "Convert.ToSingle(" : "") +
                    "lx." + method.Name + "(" + ParameterList + ")" + ArrayConversion +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Float" ? ")" : "") +
                    ";"); sb.Append(Environment.NewLine);

                sb.Append("        }"); sb.Append(Environment.NewLine);
                sb.AppendLine();
            }

            return sb.ToString();
        }

        #endregion

        #region SVC

        public static string ServiceSvcGenerator(Linker current)
        {
            StringBuilder sb = new StringBuilder();

            sb.Append("using System;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Collections.Generic;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Linq;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Runtime.Serialization;"); sb.Append(Environment.NewLine);
            sb.Append("using System.ServiceModel;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Text;"); sb.Append(Environment.NewLine);
            sb.Append("namespace nMorph.core.nest.net4.wcf"); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("    /// <summary>"); sb.Append(Environment.NewLine);
            sb.Append("    /// Clase base del servicio Core en WCF"); sb.Append(Environment.NewLine);
            sb.Append("    /// </summary>"); sb.Append(Environment.NewLine);
            sb.Append("    [ServiceContract]"); sb.Append(Environment.NewLine);
            sb.Append("    public class Core"); sb.Append(Environment.NewLine);
            sb.Append("    {"); sb.Append(Environment.NewLine);


            //current.Log("Depurar");
            //System.Threading.Thread.Sleep(25000);

            sb.Append(RenderSvcMethod(current));

            // Footer
            sb.Append("    }"); sb.Append(Environment.NewLine);
            sb.Append("}"); sb.Append(Environment.NewLine);

            return sb.ToString();
        }

        /// <summary>
        /// Método que genera el código fuente del proxy en función de los métodos de lógica
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string RenderSvcMethod(Linker current)
        {
            var discovered = RttiHelper.Discover(current);
            StringBuilder sb = new StringBuilder();

            foreach (var method in discovered.discoveredMethods)
            {
                string ParameterList = "";
                string ParameterListWithTypes = "";
                foreach (var parameter in method.Parameters)
                {
                    // mapeo de arreglos para entrada a los métodos renderizados directos desde Haxe
                    if (parameter.Xtype.Attribute("path").Value == "List" || parameter.Xtype.Attribute("path").Value == "Array")
                        ParameterList += "new Array<object>() { __a = " + parameter.Name + ".ToArray() }, ";
                    else if (parameter.Xtype.Attribute("path").Value == "Null")
                        ParameterList += "new haxe.lang.Null<" + RenderParamforCS(parameter.Xtype.Elements().First()) + ">(" + parameter.Name + ".Value, " + parameter.Name + ".HasValue), ";
                    else if (parameter.Xtype.Attribute("path").Value == "Date")
                        ParameterList += "new Date(" + parameter.Name + "), ";
                    else if (parameter.Xtype.Attribute("path").Value == "Float")
                        ParameterList += "Convert.ToDouble(" + parameter.Name + "), ";
                    else
                        ParameterList += parameter.Name + ", ";

                    ParameterListWithTypes += RenderParamforCS(parameter.Xtype) + " " + parameter.Name + ", ";
                }
                if (ParameterList.EndsWith(", "))
                    ParameterList = ParameterList.Substring(0, ParameterList.Length - ", ".Length);
                if (ParameterListWithTypes.EndsWith(", "))
                    ParameterListWithTypes = ParameterListWithTypes.Substring(0, ParameterListWithTypes.Length - ", ".Length);

                // Requiere conversión de listas
                string ArrayConversion = "";
                if (method.ReturnParameter.Xtype.Attributes().Count(a => a.Name == "path") > 0
                    && method.ReturnParameter.Xtype.Attribute("path").Value == "Array")
                {
                    ArrayConversion = ".__a.Cast<" + method.ReturnParameter.Xtype.Elements().First().Attribute("path").Value + ">().ToList()";
                }

                // Renderización del servicio
                sb.Append("        /// <summary>"); sb.Append(Environment.NewLine);
                sb.Append("        /// Método " + method.Name + " " + Newtonsoft.Json.JsonConvert.SerializeObject(method)); sb.Append(Environment.NewLine);
                sb.Append("        /// </summary>"); sb.Append(Environment.NewLine);
                sb.Append("        /// <returns></returns>"); sb.Append(Environment.NewLine);
                sb.Append("        [OperationContract]"); sb.Append(Environment.NewLine);
                //sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_CREATE))]"); sb.Append(Environment.NewLine);
                //sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_DELETE))]"); sb.Append(Environment.NewLine);
                //sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_EDIT))]"); sb.Append(Environment.NewLine);
                //sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectEditTypeEnum_NOCHANGE))]"); sb.Append(Environment.NewLine);
                //sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectSourceTypeEnum_LOGIC))]"); sb.Append(Environment.NewLine);
                //sb.Append("        [XmlInclude(typeof(nMorph.framework.orm.common.enums.ObjectSourceTypeEnum_DB))]"); sb.Append(Environment.NewLine);


                sb.Append("        public " + RenderParamforCS(method.ReturnParameter.Xtype) + " " + method.Name + "(" + ParameterListWithTypes + ")"); sb.Append(Environment.NewLine);
                sb.Append("        {"); sb.Append(Environment.NewLine);

                sb.Append("            " + method.LogicType.FullName + " lx = new " + method.LogicType.FullName + "();"); sb.Append(Environment.NewLine);
                sb.Append("            " + (method.ReturnParameter.Xtype.Attribute("path").Value == "Void" ? "" : "return ") +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Float" ? "Convert.ToSingle(" : "") +
                    "lx." + method.Name + "(" + ParameterList + ")" + ArrayConversion +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Float" ? ")" : "") +
                    ";"); sb.Append(Environment.NewLine);

                sb.Append("        }"); sb.Append(Environment.NewLine);
                sb.AppendLine();
            }

            return sb.ToString();
        }

        #endregion

        #region API


        public static string ServiceApiGenerator(Linker current)
        {
            StringBuilder sb = new StringBuilder();

            sb.Append("using nMorph.core.nest.net4.Controllers;"); sb.Append(Environment.NewLine);
            sb.Append("using System;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Collections.Generic;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Linq;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Net;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Net.Http;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Web;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Web.Http;"); sb.Append(Environment.NewLine);
            sb.Append("namespace nMorph.core.nest.net4.Controllers"); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("    /// <summary>"); sb.Append(Environment.NewLine);
            sb.Append("    /// Core Api"); sb.Append(Environment.NewLine);
            sb.Append("    /// </summary>"); sb.Append(Environment.NewLine);
            sb.Append("    [RoutePrefix(\"api/core\")]"); sb.Append(Environment.NewLine);
            sb.Append("    public class CoreController : ApiController"); sb.Append(Environment.NewLine);
            sb.Append("    {"); sb.Append(Environment.NewLine);

            // renderización de métodos de Api
            sb.Append(RenderApiMethod(current));

            // Footer
            sb.Append("    }"); sb.Append(Environment.NewLine);
            sb.Append("}"); sb.Append(Environment.NewLine);

            return sb.ToString();
        }

        /// <summary>
        /// Método que genera el código fuente del proxy en función de los métodos de lógica
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string RenderApiMethod(Linker current)
        {
            var discovered = RttiHelper.Discover(current);
            StringBuilder sb = new StringBuilder();

            foreach (var method in discovered.discoveredMethods)
            {
                string ParameterList = "";
                string ParameterListWithTypes = "";
                foreach (var parameter in method.Parameters)
                {
                    // mapeo de arreglos para entrada a los métodos renderizados directos desde Haxe
                    if (parameter.Xtype.Attribute("path").Value == "List" || parameter.Xtype.Attribute("path").Value == "Array")
                        ParameterList += "new Array<object>() { __a = " + "requestObj." + parameter.Name + ".ToArray() }, ";
                    else if (parameter.Xtype.Attribute("path").Value == "Null")
                        ParameterList += "new haxe.lang.Null<" + RenderParamforCS(parameter.Xtype.Elements().First()) + ">(requestObj." + parameter.Name + ".Value, requestObj." + parameter.Name + ".HasValue), ";
                    else if (parameter.Xtype.Attribute("path").Value == "Date")
                        ParameterList += "new Date(" + "requestObj." + parameter.Name + "), ";
                    else if (parameter.Xtype.Attribute("path").Value == "Float")
                        ParameterList += "Convert.ToDouble(" + "requestObj." + parameter.Name + "), ";
                    else
                        ParameterList += "requestObj." + parameter.Name + ", ";

                    ParameterListWithTypes += "            public " + RenderParamforCS(parameter.Xtype) + " " + parameter.Name + "{ get; set; }" + Environment.NewLine;
                }
                if (ParameterList.EndsWith(", "))
                    ParameterList = ParameterList.Substring(0, ParameterList.Length - ", ".Length);
                //if (ParameterListWithTypes.EndsWith(", "))
                //    ParameterListWithTypes = ParameterListWithTypes.Substring(0, ParameterListWithTypes.Length - ", ".Length);

                // Requiere conversión de listas
                string ArrayConversion = "";
                if (method.ReturnParameter.Xtype.Attributes().Count(a => a.Name == "path") > 0
                    && method.ReturnParameter.Xtype.Attribute("path").Value == "Array")
                {
                    ArrayConversion = ".__a.Cast<" + method.ReturnParameter.Xtype.Elements().First().Attribute("path").Value + ">().ToList()";
                }

                // Renderización de la clase de parámetros
                sb.Append("        public class " + method.Name + "_Request_Obj"); sb.Append(Environment.NewLine);
                sb.Append("        {"); sb.Append(Environment.NewLine);
                sb.Append(ParameterListWithTypes);
                sb.Append("        }"); sb.Append(Environment.NewLine);
                sb.AppendLine();


                // Renderización del método
                sb.Append("        /// <summary>"); sb.Append(Environment.NewLine);
                sb.Append("        /// Método " + method.Name + " " + Newtonsoft.Json.JsonConvert.SerializeObject(method)); sb.Append(Environment.NewLine);
                sb.Append("        /// </summary>"); sb.Append(Environment.NewLine);
                sb.Append("        [HttpPost]"); sb.Append(Environment.NewLine);
                sb.Append("        [Route(\"" + method.Name + "\")]"); sb.Append(Environment.NewLine);

                sb.Append("        public IHttpActionResult " + method.Name + "([FromBody]" + method.Name + "_Request_Obj requestObj)"); sb.Append(Environment.NewLine);
                sb.Append("        {"); sb.Append(Environment.NewLine);
                sb.Append("            " + method.LogicType.FullName + " lx = new " + method.LogicType.FullName + "();"); sb.Append(Environment.NewLine);

                sb.Append("            " + (method.ReturnParameter.Xtype.Attribute("path").Value == "Void" ? "" : "return Ok(") +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Float" ? "Convert.ToSingle(" : "") +
                    "lx." + method.Name + "(" + ParameterList + ")" + ArrayConversion +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Float" ? ")" : "") +
                    (method.ReturnParameter.Xtype.Attribute("path").Value == "Void" ? "" : ")") +
                    ";"); sb.Append(Environment.NewLine);

                if (method.ReturnParameter.Xtype.Attribute("path").Value == "Void")
                {
                    sb.Append("            return Ok();"); sb.Append(Environment.NewLine);
                }

                sb.Append("        }"); sb.Append(Environment.NewLine);
                sb.AppendLine();
            }

            return sb.ToString();
        }


        #endregion

        private static Assembly CurrentDomain_AssemblyResolve(object sender, ResolveEventArgs args)
        {
            return AppDomain.CurrentDomain.GetAssemblies().FirstOrDefault(a => a.FullName == args.Name);
        }

        public static string ServiceWebConfigGenerator(Linker current)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<?xml version=\"1.0\" encoding=\"utf-8\" ?>"); sb.Append(Environment.NewLine);
            sb.Append("<configuration>"); sb.Append(Environment.NewLine);
            sb.Append("    <startup> "); sb.Append(Environment.NewLine);
            sb.Append("        <supportedRuntime version=\"v4.0\" sku=\".NETFramework,Version=v4.7.2\" />"); sb.Append(Environment.NewLine);
            sb.Append("    </startup>"); sb.Append(Environment.NewLine);
            sb.Append("</configuration>"); sb.Append(Environment.NewLine);
            return sb.ToString();
        }

        /// <summary>
        /// Método que permite traducir el tipo de dato que viene en el rtti a un tipo de dato typescript
        /// </summary>
        /// <param name="xElement"></param>
        /// <returns></returns>
        public static string RenderParamforCS(XElement xElement)
        {
            if (xElement.Attributes().Count(a => a.Name == "path") == 0) return "object";

            string Path = xElement.Attribute("path").Value;

            switch (Path)
            {
                case "String":
                    return "string";
                case "Int":
                    return "int";
                case "Float":
                    return "double";
                case "Bool":
                    return "bool";
                case "haxe.io.UInt8Array":
                case "haxe.io.Bytes":
                    return "byte[]";
                case "Date":
                    return "DateTime";
                case "haxe.Int64":
                    return "long";
                case "Map":
                    if (xElement.Elements().First().Attribute("path").Value == "Int")
                        return "Dictionary<string,int>";
                    else
                        return "Dictionary<string,string>";
                case "List":
                    return "List<" + RenderParamforCS(xElement.Elements().First()) + ">";
                case "Null":
                    return "System.Nullable<" + RenderParamforCS(xElement.Elements().First()) + ">";
                case "Array":
                    if (xElement.Elements().First().Name == "d")
                        return "List<object>";
                    else
                        return "List<" + RenderParamforCS(xElement.Elements().First()) + ">";
                //case "nMorph.framework.common.datatypes.UUID":
                //    return "string"; // en Typescript los UUID se manejan como string
                case "Void":
                    return "void";
                default:
                    return Path;

            }
        }


    }
}
