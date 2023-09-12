using nMorph.framework.linker;
using nMorph.framework.linker.enums;
using nMorph.framework.linker.helpers;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Diagnostics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMoprh.framework.linker.generators
{
    public class JavaGenerator
    {
        public static void CreateCompilationFileList(string BasePath)
        {
            List<string> lst = new List<string>();
            CompilationFileListDiscover(BasePath, lst);
            System.IO.File.WriteAllLines(BasePath + "FileList.txt", lst.ToArray());
        }

        public static void CompilationFileListDiscover(string BasePath, List<string> lst)
        {
            foreach (string file in System.IO.Directory.GetFiles(BasePath, "*.java"))
            {
                lst.Add("\"" + file.Replace(@"\", @"\\") + "\"");
            }

            foreach (string folder in System.IO.Directory.GetDirectories(BasePath))
            {
                CompilationFileListDiscover(folder, lst);
            }
        }

        public static void CompileJava(string FileListPath, string OutFolder, Linker current, Java_Frameworks framework)
        {
            List<string> lstRefs = new List<string>();

            string outjavafolder = "jdk8_0_261_linked";
            switch (framework)
            {
                case Java_Frameworks.jdk8_0_261:
                    outjavafolder = "jdk8_0_261_linked";
                    break;
                case Java_Frameworks.jdk11_0_11:
                    outjavafolder = "jdk11_0_11_linked";
                    break;
            }

            if (current.ProjectRefFolders != "" && current.ProjectRefFolders != "none")
            {
                // Referencia a otras librerías
                string[] refFolders = current.ProjectRefFolders.Split(new char[] { ',', '-', ';' }, StringSplitOptions.RemoveEmptyEntries);


                // barre por la lista de las librerías referenciadas
                foreach (string RefFolder in refFolders)
                {
                    string RefNS = "";
                    // obtiene el nombre relativo del proyecto, desde los parámetros de compilación del hxml
                    var rf = RefFolder.EndsWith("\\") == false ? RefFolder + "\\" : RefFolder;

                    // determina el nombre de la carpeta en función del modelo de tipo de compilación
                    string OutPrefix = "out";
                    switch (current.BuildEnvironment)
                    {
                        case BuildEnvironmentEnum.dev:
                            OutPrefix = "out";
                            break;
                        case BuildEnvironmentEnum.fast:
                            OutPrefix = "out";
                            break;
                        case BuildEnvironmentEnum.prod:
                            OutPrefix = "deploy";
                            break;
                    }

                    // determina la carpeta base de la referencia
                    // se supone que en la carpeta base terminará el jar compilado de otros proyectos
                    string ProjFolder = current.SolBasePath + rf + OutPrefix + "\\" + outjavafolder + "\\bin\\";

                    // busca el archivo jar compilado (debería solamente haber uno)
                    // el nombre del archivo debería reflejar el namespace completo
                    var di = new System.IO.DirectoryInfo(ProjFolder);
                    foreach (var file in di.GetFiles())
                    {
                        if (file.Extension.ToLower().EndsWith("jar"))
                        {
                            RefNS = System.IO.Path.GetFileNameWithoutExtension(file.FullName);
                            lstRefs.Add(file.FullName);
                            break;
                        }
                    }

                    // Si no encuentra la carpeta o el proyecto, puede ser un error de configuracón
                    if (RefNS == "")
                    {
                        // si no lo encuentra compilado, emite una notificación
                        current.Log("Ref Not Found " + rf);
                        continue;
                    }
                }
            }

            string RefString = lstRefs.Count() > 0 ? lstRefs.Aggregate((a, b) => a + ";" + b) : "";

            using (Process compiler = new Process())
            {
                string JDK_Path = DetectJDK(current, framework);

                compiler.StartInfo.FileName = JDK_Path + "javac.exe";
                compiler.StartInfo.WorkingDirectory = new System.IO.FileInfo(FileListPath).Directory.FullName;
                // se retira el slash final, para que el compilador de java funcione correctamente
                compiler.StartInfo.Arguments = "@FileList.txt" + (RefString != "" ? (" -classpath \"" + RefString + "\"") : "") + " -d \"" + OutFolder.Substring(0, OutFolder.Length - 1) + "\"";
                compiler.StartInfo.UseShellExecute = false;
                compiler.StartInfo.RedirectStandardOutput = true;
                compiler.StartInfo.RedirectStandardError = true;
                compiler.StartInfo.CreateNoWindow = true;
                compiler.Start();
                current.Log("Compilando Java: " + compiler.StartInfo.Arguments);
                compiler.WaitForExit();
                current.Log(compiler.StandardOutput.ReadToEnd());
                current.Log(compiler.StandardError.ReadToEnd());
                current.Log("Compilado Java - Code:" + compiler.ExitCode.ToString());
            }
        }

        private static string DetectJDK(Linker current, Java_Frameworks framework)
        {
            string JDK_Path = "";
            switch (framework)
            {
                case Java_Frameworks.jdk8_0_261:
                    JDK_Path = current.SolBasePath + "6_tools\\jdk-1.8.0_261\\bin\\";
                    break;
                case Java_Frameworks.jdk11_0_11:
                    JDK_Path = current.SolBasePath + "6_tools\\jdk-11.0.11\\bin\\";
                    break;
            }

            return JDK_Path;
        }

        public static void CompileJar(string CompiledFolder, Linker current, Java_Frameworks framework)
        {
            using (Process compiler = new Process())
            {
                string JDK_Path = DetectJDK(current, framework);

                compiler.StartInfo.FileName = JDK_Path + "jar.exe";
                compiler.StartInfo.WorkingDirectory = new System.IO.FileInfo(CompiledFolder).Directory.FullName;
                // se retira el slash final, para que el compilador de java funcione correctamente
                compiler.StartInfo.Arguments = "-cf " + current.CurrentNamespace + ".jar ./";
                compiler.StartInfo.UseShellExecute = false;
                compiler.StartInfo.RedirectStandardOutput = true;
                compiler.StartInfo.RedirectStandardError = true;
                compiler.StartInfo.CreateNoWindow = true;
                compiler.Start();
                current.Log("Compilando Jar: " + compiler.StartInfo.Arguments);
                compiler.WaitForExit();
                current.Log(compiler.StandardOutput.ReadToEnd());
                current.Log(compiler.StandardError.ReadToEnd());
                current.Log("Compilado Jar - Code:" + compiler.ExitCode.ToString());
            }
        }


        public static void DeployServlet(Linker current)
        {
            current.Log("Deploy Servlet");
            string sourceFolder = current.SolBasePath + "2_logic\\servers\\server.java\\source\\";
            string warFolder = current.SolBasePath + "2_logic\\servers\\server.java\\war\\";

            // Paso 1: creo la carpeta del server soportado y de los frameworks soportados dentro de los war
            var servers = Enum.GetValues(typeof(Java_Servers));
            foreach (var s in servers)
            {
                Java_Servers server = (Java_Servers)s;
                string serverFolder = warFolder + server.ToString() + "\\";

                if (!System.IO.Directory.Exists(serverFolder))
                    System.IO.Directory.CreateDirectory(serverFolder);

                var frameworks = Enum.GetValues(typeof(Java_Frameworks));
                foreach (var f in frameworks)
                {
                    Java_Frameworks framework = (Java_Frameworks)f;

                    string frameworkFolder = serverFolder + framework.ToString() + "\\";

                    if (!System.IO.Directory.Exists(frameworkFolder))
                        System.IO.Directory.CreateDirectory(frameworkFolder);

                    // Paso 2: Copio la carpeta web a cada tipo de despligue
                    IOHelper.DirectoryCopy(sourceFolder + "web", frameworkFolder, true, "");

                    // Paso 3: Copio los JAR de nMorph a la carpeta destino, en función del framework
                    ConsolidateJAR(current, framework, frameworkFolder);

                    // Paso 4: Preparo el archivo core.java, en función del server
                    PrepareServletVersion(current, server, sourceFolder);

                    // Paso 5: Compilo el servlet para cada framework
                    CompileServlet(current, server, framework, sourceFolder, frameworkFolder);

                    // Paso 6: Genero el archivo WAR
                    CompileWar(frameworkFolder, current, framework);
                }
            }
        }

        private static void ConsolidateJAR(Linker current, Java_Frameworks framework, string frameworkFolder)
        {
            string libFolder = frameworkFolder + "WEB-INF\\lib\\";

            string outjavafolder = "jdk8_0_261_linked";
            switch (framework)
            {
                case Java_Frameworks.jdk8_0_261:
                    outjavafolder = "jdk8_0_261_linked";
                    break;
                case Java_Frameworks.jdk11_0_11:
                    outjavafolder = "jdk11_0_11_linked";
                    break;
            }

            // determina el nombre de la carpeta en función del modelo de tipo de compilación
            string OutPrefix = "out";
            switch (current.BuildEnvironment)
            {
                case BuildEnvironmentEnum.dev:
                    OutPrefix = "out";
                    break;
                case BuildEnvironmentEnum.fast:
                    OutPrefix = "out";
                    break;
                case BuildEnvironmentEnum.prod:
                    OutPrefix = "deploy";
                    break;
            }

            System.IO.File.Copy(current.SolBasePath + "5_framework\\common\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.framework.common.jar", libFolder + "\\nMorph.framework.common.jar", true);
            System.IO.File.Copy(current.SolBasePath + "5_framework\\esb\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.framework.esb.jar", libFolder + "\\nMorph.framework.esb.jar", true);
            System.IO.File.Copy(current.SolBasePath + "5_framework\\orm\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.framework.orm.jar", libFolder + "\\nMorph.framework.orm.jar", true);
            System.IO.File.Copy(current.SolBasePath + "5_framework\\svc\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.framework.svc.jar", libFolder + "\\nMorph.framework.svc.jar", true);
            System.IO.File.Copy(current.SolBasePath + "3_Data\\db\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.core.db.jar", libFolder + "\\nMorph.core.db.jar", true);
            System.IO.File.Copy(current.SolBasePath + "2_Logic\\objects\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.core.objects.jar", libFolder + "\\nMorph.core.objects.jar", true);
            System.IO.File.Copy(current.SolBasePath + "2_Logic\\logic\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.core.logic.jar", libFolder + "\\nMorph.core.logic.jar", true);
            System.IO.File.Copy(current.SolBasePath + "2_Logic\\service\\" + OutPrefix + "\\" + outjavafolder + "\\bin\\nMorph.core.service.jar", libFolder + "\\nMorph.core.service.jar", true);
        }



        //javac src/nMorph/core/nest/glassfish61/Core.java -classpath "web\WEB-INF\lib\*;C:\Workspace_Products\nMorph - Framework\1. DEV\nMorph\2_logic\servers\server.java\glassfish-6.1.0\glassfish\modules\jakarta.servlet-api.jar" -d "C:\Workspace_Products\nMorph - Framework\1. DEV\nMorph\2_logic\servers\server.java\server.java"
        public static void CompileServlet(Linker current, Java_Servers server, Java_Frameworks framework, string sourceFolder, string frameworkFolder)
        {
            using (Process compiler = new Process())
            {
                string JDK_Path = DetectJDK(current, framework);

                compiler.StartInfo.FileName = JDK_Path + "javac.exe";

                string RefString = frameworkFolder + "WEB-INF\\lib\\*;" + DetectServletAPI(current, server);

                // Creación del directorio de clases, en caso que no exista
                if (!System.IO.Directory.Exists(frameworkFolder + "WEB-INF\\classes"))
                {
                    System.IO.Directory.CreateDirectory(frameworkFolder + "WEB-INF\\classes");
                }

                // El servlet siempre tiene una ruta fija en el código
                // se quita el \ del final del frameworkfolder para que la compilación sea adecuada.
                compiler.StartInfo.Arguments = "\"" + sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java\"" + " -classpath \"" + RefString + "\"" + " -d \"" + frameworkFolder + "WEB-INF\\classes" + "\"";
                compiler.StartInfo.UseShellExecute = false;
                compiler.StartInfo.RedirectStandardOutput = true;
                compiler.StartInfo.RedirectStandardError = true;
                compiler.StartInfo.CreateNoWindow = true;
                compiler.Start();
                current.Log("Compilando Java: \"" + JDK_Path + "javac.exe\" " + compiler.StartInfo.Arguments);
                compiler.WaitForExit();
                current.Log(compiler.StandardOutput.ReadToEnd());
                current.Log(compiler.StandardError.ReadToEnd());
                current.Log("Compilación Terminada Java - Code:" + compiler.ExitCode.ToString());
            }
        }

        private static string DetectServletAPI(Linker current, Java_Servers server)
        {
            switch (server)
            {
                case Java_Servers.apache_tomcat_10_0_8:
                    return current.SolBasePath + "2_logic\\servers\\server.java\\apache-tomcat-10.0.8\\lib\\*";
                case Java_Servers.apache_tomcat_9_0_50:
                    return current.SolBasePath + "2_logic\\servers\\server.java\\apache-tomcat-9.0.50\\lib\\*";
                case Java_Servers.apache_tomee_webprofile_9_0_0_M7:
                    return current.SolBasePath + "2_logic\\servers\\server.java\\apache-tomee-webprofile-9.0.0-M7\\lib\\*";
                case Java_Servers.glassfish_5_1_0:
                    return current.SolBasePath + "2_logic\\servers\\server.java\\glassfish-6.1.0\\glassfish\\modules\\*";
                case Java_Servers.glassfish_6_1_0:
                    return current.SolBasePath + "2_logic\\servers\\server.java\\glassfish-6.1.0\\glassfish\\modules\\*";
                case Java_Servers.weblogic:
                    return "C:\\Oracle\\Middleware\\Oracle_Home\\wlserver\\server\\lib\\*";
                case Java_Servers.websphere:
                    return "C:\\Program Files\\IBM\\WebSphere\\AppServer\\deploytool\\itp\\plugins\\*";
                case Java_Servers.wildfly_24_0_0_Final:
                    return current.SolBasePath + "2_logic\\servers\\server.java\\wildfly-24.0.0.Final\\modules\\system\\layers\\base\\javax\\servlet\\api\\main\\*";
            }
            return "";
        }

        private static string PrepareServletVersion(Linker current, Java_Servers server, string sourceFolder)
        {
            switch (server)
            {
                case Java_Servers.apache_tomcat_10_0_8:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJakarta.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.apache_tomcat_9_0_50:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJavax.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.apache_tomee_webprofile_9_0_0_M7:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJakarta.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.glassfish_5_1_0:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJakarta.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.glassfish_6_1_0:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJakarta.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.weblogic:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJavax.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.websphere:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJavax.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
                case Java_Servers.wildfly_24_0_0_Final:
                    System.IO.File.Copy(sourceFolder + "src\\CoreJavax.java", sourceFolder + "\\src\\nMorph\\core\\nest\\Core.java", true);
                    break;
            }
            return "";
        }

        public static void CompileWar(string CompiledFolder, Linker current, Java_Frameworks framework)
        {
            using (Process compiler = new Process())
            {
                string JDK_Path = DetectJDK(current, framework);

                compiler.StartInfo.FileName = JDK_Path + "jar.exe";
                compiler.StartInfo.WorkingDirectory = new System.IO.FileInfo(CompiledFolder).Directory.FullName;
                // se retira el slash final, para que el compilador de java funcione correctamente
                compiler.StartInfo.Arguments = "-cfv " + current.CurrentNamespace + ".war *";
                compiler.StartInfo.UseShellExecute = false;
                compiler.StartInfo.RedirectStandardOutput = true;
                compiler.StartInfo.RedirectStandardError = true;
                compiler.StartInfo.CreateNoWindow = true;
                compiler.Start();
                current.Log("Compilando War: " + compiler.StartInfo.Arguments);
                compiler.WaitForExit();
                current.Log(compiler.StandardOutput.ReadToEnd());
                current.Log(compiler.StandardError.ReadToEnd());
                current.Log("Compilado War - Code:" + compiler.ExitCode.ToString());
            }
        }

        public static void RttiJavaCorrection(string CompiledFolder)
        {
            // busco los archivos java compilados
            foreach (var file in System.IO.Directory.GetFiles(CompiledFolder, "*.java"))
            {
                // identifico la línea que tiene rtti
                string patternToSearch = ".__rtti = \"";

                StringBuilder sb = new StringBuilder();

                // Patrón
                //String CONSTANT = new String("first chunk")
                //+ new String("second chunk") + ... 
                //+new String("...");

                // leo el archivo por líneas
                foreach (string line in System.IO.File.ReadAllLines(file))
                {
                    string pline = line;

                    // si la línea tiene la marca rtti, es la que debe ser reemplazada
                    if (line.Contains(patternToSearch))
                    {
                        // retiro el ; final
                        pline = pline.Substring(0, pline.Length - 1);


                        //pline = pline.Replace(patternToSearch, ".__rtti = org.apache.commons.lang.StringUtils.join( new String[] { \"");
                        pline = pline.Replace(patternToSearch, ".__rtti = new String(\"");


                        // hago el reemplazo con el separador que tiene naturalmente el rtti
                        // esto divide el string en varias líneas
                        pline = pline.Replace("\\n\\t", "\\n\\t\") + " + Environment.NewLine + "new String (\"");

                        pline += ");";
                    }

                    sb.AppendLine(pline);
                }

                // reescribo el archivo con los cambios
                System.IO.File.WriteAllText(file, sb.ToString());
            }

            foreach (var folder in System.IO.Directory.GetDirectories(CompiledFolder))
            {
                RttiJavaCorrection(folder);
            }
        }
    }
}
