using nMorph.framework.linker.helpers;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace nMorph.framework.linker.generators
{
    public class TypescriptGenerator
    {
        /// <summary>
        /// Método que genera el código fuente del proxy en función de los métodos de lógica
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string RenderProxy(Linker current)
        {
            var discovered = RttiHelper.Discover(current);
            StringBuilder sbMethods = new StringBuilder();
            StringBuilder sbClasses = new StringBuilder();

            foreach (var method in discovered.discoveredMethods)
            {
                string ListOfParams = "";
                string ListOfParamsWithTypes = "";
                string ReturnType;

                // lista de parámetros con comas y con tipos
                foreach (var parameter in method.Parameters)
                {
                    if (parameter.Name == "") continue;
                    ListOfParams += parameter.Name + ", ";
                    ListOfParamsWithTypes += parameter.Name + ":" + generators.TypescriptGenerator.RenderParamforTS(parameter.Xtype) + ", ";
                }

                // renderización del tipo de dato de retorno
                ReturnType = generators.TypescriptGenerator.RenderParamforTS(method.ReturnParameter.Xtype);

                // Genera el método del proxy
                generators.TypescriptGenerator.TSRenderProxyMethod(sbMethods, method, ListOfParams, ListOfParamsWithTypes, ReturnType);
            }

            // Generación de las clases de base para el proxy
            foreach (var ClasstoRender in discovered.discoveredClasses)
            {
                generators.TypescriptGenerator.TSRenderProxyClasses(current, ClasstoRender.Name, sbClasses);
            }

            StringBuilder GeneratedProxy = new StringBuilder();
            GeneratedProxy.AppendLine(generators.TypescriptGenerator.GenerateProxyHeader(current));
            GeneratedProxy.AppendLine(sbMethods.ToString());


            // métodos de llamada
            GeneratedProxy.AppendLine("static ConnectionURL(): string {");
            GeneratedProxy.AppendLine("            return Services[0];");
            GeneratedProxy.AppendLine("        }");
            GeneratedProxy.AppendLine("static ServiceCall(Call: nMorph.framework.svc.transport.MethodCall, callback, fail?: () => void): void {");
            GeneratedProxy.AppendLine("            var req = new nMorph.framework.svc.msg.RequestMessage();");
            GeneratedProxy.AppendLine("            req.set_RequestSeq(100);");
            GeneratedProxy.AppendLine("            req.set_SessionID(\"\");");
            GeneratedProxy.AppendLine("            req.set_Calls([]);");
            GeneratedProxy.AppendLine("            req.get_Calls().push(Call);");
            GeneratedProxy.AppendLine("            // Serializo objetos utilizando serialización nativa");
            GeneratedProxy.AppendLine("            var PostSend = nMorph.core.proxy.tools.Packager.Serialize(req);");
            GeneratedProxy.AppendLine("            // hago la llamada al servicio y obtengo el encriptado de retorno");
            GeneratedProxy.AppendLine("            $.ajax({");
            GeneratedProxy.AppendLine("                url: this.ConnectionURL(),");
            GeneratedProxy.AppendLine("                type: 'POST',");
            GeneratedProxy.AppendLine("                dataType: 'text',");
            GeneratedProxy.AppendLine("                data: PostSend,");
            GeneratedProxy.AppendLine("                contentType: 'text/plain; charset=UTF-8',");
            GeneratedProxy.AppendLine("                mimeType: 'text/plain',");
            GeneratedProxy.AppendLine("                crossDomain: true,");
            GeneratedProxy.AppendLine("                cache: false,");
            GeneratedProxy.AppendLine("            })");
            GeneratedProxy.AppendLine("                .done(function (PostReturn) {");
            GeneratedProxy.AppendLine("                    if (!PostReturn || PostReturn == \"\") {");
            GeneratedProxy.AppendLine("                        alert(\"No se ha recibido respuesta del servidor.\");");
            GeneratedProxy.AppendLine("                        if (fail != null) fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    var res = new nMorph.framework.svc.msg.ResponseMessage();");
            GeneratedProxy.AppendLine("                    // Deserializa respuesta utilizando serializador Nativo");
            GeneratedProxy.AppendLine("                    res = nMorph.core.proxy.tools.Packager.Unserialize(PostReturn);");
            GeneratedProxy.AppendLine("                    // Si es una excepción de infraestructura");
            GeneratedProxy.AppendLine("                    if (res.get_RequestSeq() == -3) {");
            GeneratedProxy.AppendLine("                        alert(\"Ha ocurrido un error en el procesamiento de su pedido. Por favor tome contacto con el administrador del sistema y proporciónele el siguiente código de error: \" + res.get_AttentionCode());");
            GeneratedProxy.AppendLine("                        if (fail != null) fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    // Si es una excepción de logica");
            GeneratedProxy.AppendLine("                    if (res.get_RequestSeq() == -1) {");
            GeneratedProxy.AppendLine("                        alert(res.get_Message() + ' (#: ' + res.get_AttentionCode() + ')');");
            GeneratedProxy.AppendLine("                        if (fail != null) fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    // Si es una excepción de seguridad");
            GeneratedProxy.AppendLine("                    if (res.get_RequestSeq() == -2) {");
            GeneratedProxy.AppendLine("                        alert(res.get_Message() + ' (#: ' + res.get_AttentionCode() + ')');");
            GeneratedProxy.AppendLine("                        if (fail != null) fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    // devuelvo el objeto de respuesta");
            GeneratedProxy.AppendLine("                    if (typeof callback === \"function\") {");
            GeneratedProxy.AppendLine("                        if (res.get_Results().length == 1) {");
            GeneratedProxy.AppendLine("                            callback(res.get_Results()[0].get_ReturnObject());");
            GeneratedProxy.AppendLine("                        }");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                })");
            GeneratedProxy.AppendLine("                .fail(function (jqXHR, textStatus, errorThrown) {");
            GeneratedProxy.AppendLine("                    alert('No se ha podido establecer comunicación con el servidor, #: ' + jqXHR.status);");
            GeneratedProxy.AppendLine("                    if (fail != null) fail();");
            GeneratedProxy.AppendLine("                    return;");
            GeneratedProxy.AppendLine("                    //throw (errorThrown);");
            GeneratedProxy.AppendLine("                    // registro y búsqueda de servidor alternativo");
            GeneratedProxy.AppendLine("                })");
            GeneratedProxy.AppendLine("                .always(function () {");
            GeneratedProxy.AppendLine("                });");
            GeneratedProxy.AppendLine("        }");
            GeneratedProxy.AppendLine("        static ServiceMultiCall(Calls: Array<nMorph.framework.svc.transport.MethodCall>, callback?, fail?: () => void): void {");
            GeneratedProxy.AppendLine("            var req = new nMorph.framework.svc.msg.RequestMessage();");
            GeneratedProxy.AppendLine("            req.set_RequestSeq(100);");
            GeneratedProxy.AppendLine("            req.set_SessionID(\"\");");
            GeneratedProxy.AppendLine("            req.set_Calls(Calls);");
            GeneratedProxy.AppendLine("            // Serializo objetos utilizando serialización nativa");
            GeneratedProxy.AppendLine("            var PostSend = nMorph.core.proxy.tools.Packager.Serialize(req);");
            GeneratedProxy.AppendLine("            // hago la llamada al servicio y obtengo el encriptado de retorno");
            GeneratedProxy.AppendLine("            $.ajax({");
            GeneratedProxy.AppendLine("                url: this.ConnectionURL(),");
            GeneratedProxy.AppendLine("                type: 'POST',");
            GeneratedProxy.AppendLine("                dataType: 'text',");
            GeneratedProxy.AppendLine("                data: PostSend,");
            GeneratedProxy.AppendLine("                contentType: 'text/plain; charset=UTF-8',");
            GeneratedProxy.AppendLine("                mimeType: 'text/plain',");
            GeneratedProxy.AppendLine("                crossDomain: true,");
            GeneratedProxy.AppendLine("                cache: false,");
            GeneratedProxy.AppendLine("            })");
            GeneratedProxy.AppendLine("                .done(function (PostReturn) {");
            GeneratedProxy.AppendLine("                    if (!PostReturn || PostReturn == \"\") {");
            GeneratedProxy.AppendLine("                        alert(\"No se ha recibido respuesta del servidor.\");");
            GeneratedProxy.AppendLine("                        fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    var res = new nMorph.framework.svc.msg.ResponseMessage();");
            GeneratedProxy.AppendLine("                    // Deserializa respuesta utilizando serializador Nativo");
            GeneratedProxy.AppendLine("                    res = nMorph.core.proxy.tools.Packager.Unserialize(PostReturn);");
            GeneratedProxy.AppendLine("                    // Si es una excepción de infraestructura");
            GeneratedProxy.AppendLine("                    if (res.get_RequestSeq() == -3) {");
            GeneratedProxy.AppendLine("                        alert(\"Ha ocurrido un error en el procesamiento de su pedido. Por favor tome contacto con el administrador del sistema y proporciónele el siguiente código de error: \" + res.get_AttentionCode());");
            GeneratedProxy.AppendLine("                        fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    // Si es una excepción de logica");
            GeneratedProxy.AppendLine("                    if (res.get_RequestSeq() == -1) {");
            GeneratedProxy.AppendLine("                        alert(res.get_Message() + ' (#: ' + res.get_AttentionCode() + ')');");
            GeneratedProxy.AppendLine("                        fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    // Si es una excepción de seguridad");
            GeneratedProxy.AppendLine("                    if (res.get_RequestSeq() == -2) {");
            GeneratedProxy.AppendLine("                        alert(res.get_Message() + ' (#: ' + res.get_AttentionCode() + ')');");
            GeneratedProxy.AppendLine("                        fail();");
            GeneratedProxy.AppendLine("                        return;");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                    // devuelvo el objeto de respuesta");
            GeneratedProxy.AppendLine("                    if (typeof callback === \"function\") {");
            GeneratedProxy.AppendLine("                        for (var i = 0; i <= res.get_Results().length - 1; i++) {");
            GeneratedProxy.AppendLine("                            callback(res.get_Results()[i].get_ReturnObject(), res.get_Results()[i].get_Name());");
            GeneratedProxy.AppendLine("                        }");
            GeneratedProxy.AppendLine("                    }");
            GeneratedProxy.AppendLine("                })");
            GeneratedProxy.AppendLine("                .fail(function (jqXHR, textStatus, errorThrown) {");
            GeneratedProxy.AppendLine("                    alert('No se ha podido establecer comunicación con el servidor, #: ' + jqXHR.status);");
            GeneratedProxy.AppendLine("                    fail();");
            GeneratedProxy.AppendLine("                    return;");
            GeneratedProxy.AppendLine("                })");
            GeneratedProxy.AppendLine("                .always(function () {");
            GeneratedProxy.AppendLine("                });");
            GeneratedProxy.AppendLine("        }");

            GeneratedProxy.AppendLine(generators.TypescriptGenerator.GenerateProxyFooter(current));
            GeneratedProxy.AppendLine(sbClasses.ToString());

            return GeneratedProxy.ToString();
        }

        /// <summary>
        /// Genera la cabecera del proxy
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string GenerateProxyHeader(Linker current)
        {
            string[] nsparts = current.CurrentNamespace.Split(new char[] { '.' });
            string libNS = nsparts[0].ToLower() + "." + nsparts[1].ToLower() + ".lib";

            StringBuilder sb = new StringBuilder();
            //sb.Append("/// <reference path=\"../../../lib/nMorph.core/Utils.ts\" />"); sb.Append(Environment.NewLine);
            sb.Append("/// <reference path=\"../../../web/assets/js/web.ts\" />"); sb.Append(Environment.NewLine);
            sb.Append("declare let $hxc: any;"); sb.Append(Environment.NewLine);
            //sb.Append("declare let $hx_exports: any;"); sb.Append(Environment.NewLine);

            //sb.Append("namespace " + libNS + " {"); sb.Append(Environment.NewLine);
            sb.Append("namespace ui.assets.js {"); sb.Append(Environment.NewLine);
            sb.Append("    export class Proxy {"); sb.Append(Environment.NewLine);
            return sb.ToString();
        }

        /// <summary>
        /// Genera el pie del proxy
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string GenerateProxyFooter(Linker current)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("    }"); sb.Append(Environment.NewLine);
            sb.Append("}"); sb.Append(Environment.NewLine);
            return sb.ToString();
        }

        /// <summary>
        /// Plantilla de generación de un método de proxy
        /// </summary>
        /// <param name="sbMethods"></param>
        /// <param name="LogicType"></param>
        /// <param name="method"></param>
        /// <param name="ListOfParams"></param>
        /// <param name="ListOfParamsWithTypes"></param>
        /// <param name="ReturnType"></param>
        /// <param name="logicNS"></param>
        public static void TSRenderProxyMethod(StringBuilder sbMethods, RenderMethod method, string ListOfParams, string ListOfParamsWithTypes, string ReturnType)
        {
            //string initFunctionParameter = "";
            //string MethodName = method.Name.ToString(); //.Replace(initFunctionParameter, "");

            sbMethods.Append("          static Call_" + method.Name + "(" + ListOfParamsWithTypes + "name) {"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            var mcc = new nMorph.framework.svc.transport.MethodCall();"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            mcc.set_LogicModule(\"" + method.logicNS + "\");"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            mcc.set_LogicClass(\"" + method.LogicType.Namespace + "." + method.LogicType.Name + "\");"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            mcc.set_LogicMethod(\"" + method.Name + "\");"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            mcc.set_LogicParams([" + (ListOfParams.Length > 2 ? ListOfParams.Substring(0, ListOfParams.Length - 2) : "") + "]);"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            mcc.set_Name(name);"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            return mcc; "); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("        }"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("        static " + method.Name + "(" + ListOfParamsWithTypes + (ReturnType == "Void" ? "callback? : () => void" : "callback? : (n : " + ReturnType + ") => void") + ") {"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("            return this.ServiceCall(Proxy.Call_" + method.Name + "(" + ListOfParams + "'N'), " + (ReturnType == "Void" ? "callback" : "callback") + ");"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append("        }"); sbMethods.Append(Environment.NewLine);
            sbMethods.Append(Environment.NewLine);
        }

        /// <summary>
        /// Generación de una clase para el proxy
        /// </summary>
        /// <param name="ClasstoRender"></param>
        /// <param name="asm"></param>
        /// <param name="sbClasses"></param>
        public static void TSRenderProxyClasses(Linker current, string ClasstoRender, StringBuilder sbClasses)
        {
            // referencia al objeto principal HxObject renderizado en Common
            List<Type> HxObject = (from ax in AppDomain.CurrentDomain.GetAssemblies().Where(a => a.FullName.StartsWith("nMorph"))
                                   from tp in ax.GetTypes()
                                   where tp.FullName == "haxe.lang.HxObject"
                                   select tp).ToList();

            if (HxObject.Count == 0)
            {
                current.Log("No se encuentra referencia nMorph.framework.common");
                return;
            }

            List<Type> CurType = (from ax in AppDomain.CurrentDomain.GetAssemblies().Where(a => a.FullName.StartsWith("nMorph"))
                                  from tp in ax.GetTypes()
                                  where ax.FullName.StartsWith("nMorph") && tp.FullName == ClasstoRender
                                  select tp).ToList();

            if (CurType.Count == 0)
            {
                current.Log("No se encuentra referencia de " + ClasstoRender);
                return;
            }

            // referencia al objeto principal HxEnum renderizado en Common
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
                object obj = CurType.First().Assembly.CreateInstance(ClasstoRender);

                if (obj.GetType().GetField("__rtti") != null)
                {
                    // obtengo el XML
                    var xml = obj.GetType().GetField("__rtti").GetValue(obj).ToString();

                    // lo parseo para leerlo con Linq
                    XDocument doc = XDocument.Parse(xml);

                    // obtengo los métodos declarados en el XML
                    var fields = from nclass in doc.Elements("class")
                                 from nfields in nclass.Elements()
                                 where
                                    nfields.Attributes().Count(a => a.Name == "get") > 0 &&
                                    nfields.Attribute("get").Value == "accessor" // propiedad
                                 select nfields;

                    sbClasses.AppendLine("namespace " + obj.GetType().Namespace + " {");
                    sbClasses.AppendLine("    export class " + obj.GetType().Name + " {");


                    // obtención de la lista de propiedades (deben estar declaradas como propiedades en haxe)
                    foreach (var field in fields)
                    {
                        var inType = from n in field.Elements()
                                     where n.Attributes().Count(a => a.Name == "path") > 0
                                     select n;
                        sbClasses.AppendLine("        " + field.Name + ":" + RenderParamforTS(inType.First()) + ";");
                    }
                    sbClasses.AppendLine("        static __name__: string;");
                    sbClasses.AppendLine("        __class__: typeof " + obj.GetType().Name + ";");
                    sbClasses.AppendLine("    }");
                    sbClasses.Append("}"); sbClasses.Append(Environment.NewLine);

                    string[] nsparts = obj.GetType().FullName.Split(new char[] { '.' }, StringSplitOptions.RemoveEmptyEntries);
                    sbClasses.Append("$hx_exports" + nsparts.Select(p => ("[\"" + p + "\"]")).Aggregate((p, q) => p + q) + " = " + obj.GetType().FullName + ";"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("var " + obj.GetType().FullName.Replace(".", "_") + " = $hx_exports" + nsparts.Select(p => ("[\"" + p + "\"]")).Aggregate((p, q) => p + q) + " = function () {};"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("$hx_exports[\"" + obj.GetType().FullName + "\"] = " + obj.GetType().FullName + ";"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("$hxc[\"" + obj.GetType().FullName + "\"] = " + obj.GetType().FullName + ";"); sbClasses.Append(Environment.NewLine);
                    //sbClasses.Append("" + obj.GetType().FullName + ".__name__ = [\"" + obj.GetType().Namespace.Split('.').Aggregate((a, b) => a + "\",\"" + b) + "\", \"" + obj.GetType().Name + "\"];"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("" + obj.GetType().FullName + ".__name__ = \"" + obj.GetType().FullName + "\";"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("" + obj.GetType().FullName + ".prototype = {"); sbClasses.Append(Environment.NewLine);
                    foreach (var field in fields)
                    {
                        sbClasses.AppendLine("    " + field.Name + ": null,");
                    }
                    sbClasses.Append("    __class__: " + obj.GetType().FullName + ""); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("};"); sbClasses.Append(Environment.NewLine);
                }
            }
            else if (CurType.First().IsSubclassOf(HxEnum.First()))
            {
                var Options = from field in CurType.First().GetFields()
                              where field.IsStatic == true && field.Name != "__hx_constructs"
                              select field;

                sbClasses.Append("class " + CurType.First().FullName + " {"); sbClasses.Append(Environment.NewLine);
                sbClasses.Append("    static __ename__: Array<any> = [\"" + CurType.First().Namespace + "." + CurType.First().Name + "\"];"); sbClasses.Append(Environment.NewLine);
                sbClasses.Append("    static __constructs__: Array<string> = [\"" + (Options.Select(a => a.Name).Aggregate((a, b) => a + "\",\"" + b)) + "\"];"); sbClasses.Append(Environment.NewLine);
                foreach (var option in Options)
                {
                    sbClasses.Append("    static " + option.Name + ": any;"); sbClasses.Append(Environment.NewLine);
                }
                sbClasses.Append("}"); sbClasses.Append(Environment.NewLine);
                sbClasses.Append("$hxClasses[\"" + CurType.First().Namespace + "." + CurType.First().Name + "\"] = " + CurType.First().Namespace + "_" + CurType.First().Name + ";"); sbClasses.Append(Environment.NewLine);

                int enumcount = 0;
                foreach (var option in Options)
                {
                    sbClasses.Append("" + CurType.First().FullName + "." + option.Name + " = [\"" + option.Name + "\", " + enumcount.ToString() + "];"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("" + CurType.First().FullName + "." + option.Name + ".toString = $estr;"); sbClasses.Append(Environment.NewLine);
                    sbClasses.Append("" + CurType.First().FullName + "." + option.Name + ".__enum__ = " + CurType.First().Namespace + "_" + CurType.First().Name + ";"); sbClasses.Append(Environment.NewLine);
                    enumcount++;
                }
                sbClasses.Append(Environment.NewLine);
            }

        }

        /// <summary>
        /// Método que permite traducir el tipo de dato que viene en el rtti a un tipo de dato typescript
        /// </summary>
        /// <param name="xElement"></param>
        /// <returns></returns>
        public static string RenderParamforTS(XElement xElement)
        {
            if (xElement.Attributes().Count(a => a.Name == "path") == 0) return "any";

            string Path = xElement.Attribute("path").Value;

            switch (Path)
            {
                case "String":
                    return "string";
                case "Int":
                    return "number";
                case "Float":
                    return "number";
                case "Bool":
                    return "boolean";
                case "haxe.io.UInt8Array":
                case "haxe.io.Bytes":
                    return "Uint8Array";
                case "Date":
                    return "Date";
                case "haxe.Int64":
                    return "haxe__$Int64__$_$_$Int64";
                case "Map":
                    if (xElement.Elements().First().Attribute("path").Value == "Int")
                        return "haxe_ds_IntMap";
                    else
                        return "haxe_ds_StringMap";
                case "List":
                    return "Array<" + RenderParamforTS(xElement.Elements().First()) + ">";
                case "Null":
                    return RenderParamforTS(xElement.Elements().First());
                case "Array":
                    if (xElement.Elements().First().Name == "d")
                        return "Array<any>";
                    else
                        return "Array<" + RenderParamforTS(xElement.Elements().First()) + ">";
                //case "nMorph.framework.common.datatypes.UUID":
                //    return "string"; // en Typescript los UUID se manejan como string
                default:
                    return Path;
            }
        }
    }
}
