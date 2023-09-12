using nMoprh.framework.linker.generators;
using nMorph.framework.linker.enums;
using nMorph.framework.linker.generators;
using nMorph.framework.linker.helpers;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.linker
{
    /// <summary>
    /// clase que dispone de la lógica de generación de linkeado
    /// </summary>
    public class Linker
    {
        #region Properties

        /// <summary>
        /// ID de la compilación actual
        /// </summary>
        public Guid BuildID { get; set; }

        /// <summary>
        /// Carpeta base de la solución
        /// </summary>
        public string SolBasePath { get; set; }

        /// <summary>
        /// Carpeta del proyecto en compilación
        /// </summary>
        public string ProjectFolder { get; set; }

        /// <summary>
        /// Carpetas de los proyectos de referencia
        /// </summary>
        public string ProjectRefFolders { get; set; }

        /// <summary>
        /// Namespace de base del proyecto en compilación
        /// </summary>
        public string CurrentNamespace { get; set; }

        /// <summary>
        /// Variable para conocer el ambiente de compilación
        /// Si el destino de la compilación es de desarrollo o de producción
        /// </summary>
        public BuildEnvironmentEnum BuildEnvironment { get; set; }

        /// <summary>
        /// Variable para conocer el método de logging del proceso linker
        /// Se puede loguear en consola, en archivo, en ambos
        /// </summary>
        public LogMethodEnum LogMethod { get; set; }

        /// <summary>
        /// Variable para conocer el el tipo de renderización que hará el linker
        /// La renderización básica es solo compilación
        /// Pero hay otras renderizaciones que hacen cosas adicionales, por ejemplo montar servicios o integrar librerías externas
        /// </summary>
        public RenderMethodEnum RenderMethod { get; set; }

        /// <summary>
        /// Ruta base de compilación. out si es Dev, prod si es Prod en el esquema de compilación
        /// </summary>
        public string OutFolder { get; set; }

        /// <summary>
        /// Versión del framework. Número mayor
        /// </summary>
        public int FrameworkVersionMajor { get; set; }

        /// <summary>
        /// Versión del framework. Número menor
        /// </summary>
        public int FrameworkVersionMinor { get; set; }

        /// <summary>
        /// Determina la ruta del ejecutable donde está instalado Visual Studio
        /// </summary>
        public string DevEnvPath { get; set; }

        #endregion

        /// <summary>
        /// Método que inicializa las variables iniciales
        /// Se supone que todas las propiedades deben ser llenas antes de invocar el método Init
        /// </summary>
        public void Init()
        {
            BuildID = Guid.NewGuid();
            string OutPrefix = "out";
            switch (BuildEnvironment)
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

            OutFolder = SolBasePath + ProjectFolder + OutPrefix + "\\";
        }

        /// <summary>
        /// Método de ejecución del procesamiento de linking
        /// </summary>
        public void Process()
        {
            #region Abstract

            // ==================
            // Indice de Procedimientos
            // ==================
            // Paso 1. Recompilación de la librería cs => cslinked (OK)
            // Prerequisito: compilación Haxe
            // 1.1 Creación del proyecto VS base (vs2017, debug, referencias, nombre de compilado igual a nombre proyecto con ns) (validar si las referencias están ya compiladas, sino error de orden de compilación)
            // 1.2 Traslado de archivos generados Haxe solamente los específicos del proyecto
            // 1.2.1 En el caso de tratarse del proyecto common, se traslada todos los archivos generados
            // 1.3 Se invoca la compilación MSBuild

            // 2. Recompilación de la librería java => javalinked
            // 2.1 Creación de carpeta base de compilación (referencias JAR)
            // 2.2 Traslado de archivos generados Haxe solamente los específicos del proyecto
            // 2.2.1 En el caso de tratarse del proyecto common, se traslada todos los archivos generados
            // 2.3 Se invoca la compilación javac

            // php no necesita linkeado, solo integración

            // 3. Generación de código (en caso el proyecto sea el de lógica)
            // 3.1 Generación de proxy TS
            // 3.2 Generación de proxy Haxe + Compilación Haxe
            // 3.3 Generación de Servicio HTTP Haxe
            // 3.3 Generación de Servicio REST (net, java, php)
            // 3.4 Generación de Servicio SOAP
            // 3.5 Generación de Métodos Azure

            // 4. Integración de servicios (en caso que el proyecto actual sea de servicios) Se hace específicamente en la compilación de los servicios
            // 4.1 copiado de DLLs linkeadas a carpeta del proyecto (referencias)
            // 4.2 copiado de JARs linkeados a carpeta del proyecto (referencias)
            // 4.3 copiado de PHPs a carpeta del proyecto (referencias)
            // 4.4 copiado de archivos a servidores para ejecución (si se requiere automatización)


            #endregion

            // ==================
            // EJECUCIÓN
            // ==================
            VisualStudioGenerator.DetectDevenvPath(this);

            // Linkeado de net4
            Cs_Linking(Cs_Frameworks.netframework4);

            // cuando es compilación fast, no se genera
            if (BuildEnvironment == BuildEnvironmentEnum.dev || BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                string csFolder = OutFolder + "cs\\";

                if (System.IO.Directory.Exists(csFolder))
                {
                    // Linkeado de netcore31
                    Cs_Linking(Cs_Frameworks.netcore31);

                    // Linkeado de net5
                    Cs_Linking(Cs_Frameworks.net5);
                }
            }

            // Linkeado de Java
            if (BuildEnvironment == BuildEnvironmentEnum.dev || BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                // valida si es que java fue compilado por Haxe, sino no lo procesa
                string javaFolder = OutFolder + "java\\";
                if (System.IO.Directory.Exists(javaFolder))
                {
                    Java_Linking(Java_Frameworks.jdk8_0_261);
                    //Java_Linking(Java_Frameworks.jdk11_0_11);
                }
            }

            // Se publica PHP en todas las compilaciones
            if (BuildEnvironment == BuildEnvironmentEnum.dev || BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                // valida si es que java fue compilado por Haxe, sino no lo procesa
                string phpFolder = OutFolder + "php\\";
                if (System.IO.Directory.Exists(phpFolder))
                {
                    Php_Publish();
                }
            }

            // Ensamblado de base de publicación de servicios
            if (RenderMethod == RenderMethodEnum.Publish)
            {
                Cs_Publish(Cs_Frameworks.netframework4);

                // cuando es compilación fast, no se genera
                if (BuildEnvironment == BuildEnvironmentEnum.dev || BuildEnvironment == BuildEnvironmentEnum.prod)
                {
                    Cs_Publish(Cs_Frameworks.netcore31);
                    Cs_Publish(Cs_Frameworks.net5);

                    // compilación de archivo War en proyecto de publicación
                    JavaGenerator.DeployServlet(this);
                }
            }

            // Compilación Solución Servicios
            // Armado de Proxys
            if (RenderMethod == RenderMethodEnum.UI)
            {
                UI_Publish();
            }

            // Una vez compilada la logica, se puede generar los inicializadores.
            if (RenderMethod == RenderMethodEnum.Logic)
            {
                // Generación de archivo Initializer para configuraciones
                // se lo invoca en el proyecto de lógica debido a que en este punto
                // luego de haberse compilado 
                this.Config_Initializer(HaxeGeneratorTarget.Service);
                this.Config_Initializer(HaxeGeneratorTarget.Batch);
            }

            // Escritura de los archivos de configuración de ejemplo, si no están disponibles
            if (RenderMethod == RenderMethodEnum.Batch)
            {
                // El método batch es el último de la compilación. Esto se escribe al final del proceso

                // Escritura de archivos de configuración, luego de que todo ya está compilado
                this.Config_Write();

                // No hace el procedimiento de procesamiento normal
                return;
            }
        }

        /// <summary>
        /// Paso 1
        /// </summary>
        private void Cs_Linking(Cs_Frameworks framework)
        {
            // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            // PASO 1. Recompilación de la librería cs => cslinked
            // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            // Prerequisito: compilación Haxe
            // 1.1 Creación del proyecto VS base (vs2017, debug, referencias, nombre de compilado igual a nombre proyecto con ns) (validar si las referencias están ya compiladas, sino error de orden de compilación)
            // 1.2 Traslado de archivos generados Haxe solamente los específicos del proyecto
            // 1.2.1 En el caso de tratarse del proyecto common, se traslada todos los archivos generados para que sirva de base de referencia
            // 1.3 Se invoca la compilación MSBuild desde Framework

            // diferenciación de nombres de carpeta en función de frameworks base
            string csoutputfolder = "cslinked";
            switch (framework)
            {
                case Cs_Frameworks.netframework4:
                    csoutputfolder = "cslinked";
                    break;
                case Cs_Frameworks.netcore31:
                    csoutputfolder = "cscore31linked";
                    break;
                case Cs_Frameworks.net5:
                    csoutputfolder = "csnet5linked";
                    break;
            }

            string csFolder = OutFolder + "cs\\";
            string cslinkedFolder = OutFolder + csoutputfolder + "\\";

            // sin importar el contenido que tenga adentro, se borra completa
            // esto permite que cambios en código no se vean afectados por compiladas anteriores
            if (System.IO.Directory.Exists(cslinkedFolder))
                System.IO.Directory.Delete(cslinkedFolder, true);

            // creación de la carpeta cslinked
            if (!System.IO.Directory.Exists(cslinkedFolder))
                System.IO.Directory.CreateDirectory(cslinkedFolder);

            // creación de la carpeta cslinked src
            if (!System.IO.Directory.Exists(cslinkedFolder + "src\\"))
                System.IO.Directory.CreateDirectory(cslinkedFolder + "src\\");

            // creación de la carpeta cslinked Properties
            if (!System.IO.Directory.Exists(cslinkedFolder + "Properties\\"))
                System.IO.Directory.CreateDirectory(cslinkedFolder + "Properties\\");

            // creación del archivo AssemblyInfo.cs dentro de la carpeta Properties
            System.IO.File.WriteAllText(cslinkedFolder + "Properties\\AssemblyInfo.cs",
                VisualStudioGenerator.AssemblyInfo_Generator(this));

            // copiado de archivos específicos de la compilación actual
            IOHelper.DirectoryCopy(csFolder + "src\\",
                cslinkedFolder + "src\\", true,
                CurrentNamespace == "nMorph.framework.common" ? "" : CurrentNamespace.Replace(".", "\\")); // si se trata del proyecto common, no se limpia la librería

            // Incorporación de constructores sin parámetros a las enumeraciones
            // necesario para que el objeto sea serializable
            EnumPrepareHelper.Prepare(cslinkedFolder + "src\\");

            // casos especiales

            // Si es ORM, reemplaza el código incrustando los conectores de las bases de datos
            if (CurrentNamespace.EndsWith("common"))
            {
                // Se copia el archivo que tiene la lógica de conector específica para CS
                string PrebuildFolder = SolBasePath + "5_framework\\common\\prebuild\\";
                System.IO.File.Copy(PrebuildFolder + "Serializer.cs", cslinkedFolder + "src\\haxe\\Serializer.cs", true);
                System.IO.File.Copy(PrebuildFolder + "Unserializer.cs", cslinkedFolder + "src\\haxe\\Unserializer.cs", true);
                System.IO.File.Copy(PrebuildFolder + "Date.cs", cslinkedFolder + "src\\Date.cs", true);
                System.IO.File.Copy(PrebuildFolder + "Bytes.cs", cslinkedFolder + "src\\haxe\\io\\Bytes.cs", true);
            }

            // Si es ORM, reemplaza el código incrustando los conectores de las bases de datos
            if (RenderMethod == RenderMethodEnum.ORM)
            {
                // Se copia el archivo que tiene la lógica de conector específica para CS
                string ConnectorFolder = SolBasePath + "5_framework\\orm\\connectors\\";
                System.IO.File.Copy(ConnectorFolder + "Connector.cs", cslinkedFolder + "src\\nMorph\\framework\\orm\\client\\Connector.cs", true);
            }

            // generación de la solución de Visual Studio (CSProj)
            System.IO.File.WriteAllText(cslinkedFolder + CurrentNamespace + ".csproj",
                VisualStudioGenerator.CSProj_Generator(this, framework));

            // compilo el nuevo csproj generado
            string projectFileName = cslinkedFolder + CurrentNamespace + ".csproj";

            //VisualStudioGenerator.CompileProject(this, projectFileName);

            if (this.BuildEnvironment == BuildEnvironmentEnum.dev || this.BuildEnvironment == BuildEnvironmentEnum.prod ||
                this.RenderMethod == RenderMethodEnum.Batch)
                VisualStudioGenerator.CompileDevenv(this, projectFileName);
        }

        private void Java_Linking(Java_Frameworks framework)
        {
            string javaFolder = OutFolder + "java\\";

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

            string javalinkedFolder = OutFolder + outjavafolder + "\\";

            // creación de java linked
            if (!System.IO.Directory.Exists(javalinkedFolder))
                System.IO.Directory.CreateDirectory(javalinkedFolder);
            if (!System.IO.Directory.Exists(javalinkedFolder + "src\\"))
                System.IO.Directory.CreateDirectory(javalinkedFolder + "src\\");
            if (!System.IO.Directory.Exists(javalinkedFolder + "bin\\"))
                System.IO.Directory.CreateDirectory(javalinkedFolder + "bin\\");

            // copiado de archivos específicos de la compilación actual
            IOHelper.DirectoryCopy(javaFolder + "src\\",
                javalinkedFolder + "src\\", true,
                CurrentNamespace == "nMorph.framework.common" ? "" : CurrentNamespace.Replace(".", "\\")); // si se trata del proyecto common, no se limpia la librería


            // ajuste archivos java con rtti
            // en java no se aceptan cadenas constantes mayores a 64K.
            JavaGenerator.RttiJavaCorrection(javalinkedFolder + "src\\");

            // Si es ORM, reemplaza el código incrustando los conectores de las bases de datos
            if (RenderMethod == RenderMethodEnum.ORM)
            {
                // Se copia el archivo que tiene la lógica de conector específica para CS
                string ConnectorFolder = SolBasePath + "5_framework\\orm\\connectors\\";
                System.IO.File.Copy(ConnectorFolder + "Connector.java", javalinkedFolder + "src\\nMorph\\framework\\orm\\client\\Connector.java", true);
            }

            // creación del archivo de compilación
            JavaGenerator.CreateCompilationFileList(javalinkedFolder + "src\\");

            // ejecución de compilación
            JavaGenerator.CompileJava(javalinkedFolder + "src\\FileList.txt", javalinkedFolder + "bin\\", this, framework);

            // generación de archivo jar en las versiones de jdk soportadas
            JavaGenerator.CompileJar(javalinkedFolder + "bin\\", this, framework);

        }

        /// <summary>
        /// Linkeado de PHP no es necesario como compilación
        /// sino ya como publicació
        /// </summary>
        private void Php_Publish()
        {
            string phpFolder = OutFolder + "php\\";
            string serverphpFolder = SolBasePath + "2_logic\\servers\\server.php\\root\\";

            // copiado de archivos específicos de la compilación actual
            IOHelper.DirectoryCopy(phpFolder,
                serverphpFolder, true,
                CurrentNamespace == "nMorph.framework.common" ? "" : CurrentNamespace.Replace(".", "\\")); // si se trata del proyecto common, no se limpia la librería

        }

        /// <summary>
        /// 4. Integración de servicios (en caso que el proyecto actual sea de servicios) Se hace específicamente en la compilación de los servicios
        /// 4.1 copiado de DLLs linkeadas a carpeta del proyecto (referencias)
        /// 4.2 copiado de JARs linkeados a carpeta del proyecto (referencias)
        /// 4.3 copiado de PHPs a carpeta del proyecto (referencias)
        /// 4.4 copiado de archivos a servidores para ejecución (si se requiere automatización)
        /// </summary>
        private void Cs_Publish(Cs_Frameworks framework)
        {
            string cslinkedFolder = OutFolder + "cslinked\\";
            string csoutputfolder = "net4";
            string slnName = "server.net4.dev.sln";

            // selección de datos en función del framework soportado
            switch (framework)
            {
                case Cs_Frameworks.netframework4:
                    csoutputfolder = "net4";

                    if (this.BuildEnvironment == BuildEnvironmentEnum.dev || this.BuildEnvironment == BuildEnvironmentEnum.fast)
                        slnName = "server.net4.dev.sln";
                    if (this.BuildEnvironment == BuildEnvironmentEnum.prod)
                        slnName = "server.net4.prod.sln";

                    break;
                case Cs_Frameworks.netcore31:
                    csoutputfolder = "netcore31";
                    if (this.BuildEnvironment == BuildEnvironmentEnum.dev || this.BuildEnvironment == BuildEnvironmentEnum.fast)
                        slnName = "server.netcore31.dev.sln";
                    if (this.BuildEnvironment == BuildEnvironmentEnum.prod)
                        slnName = "server.netcore31.prod.sln";

                    break;
                case Cs_Frameworks.net5:
                    csoutputfolder = "net5";
                    
                    if (this.BuildEnvironment == BuildEnvironmentEnum.dev || this.BuildEnvironment == BuildEnvironmentEnum.fast)
                        slnName = "server.net5.dev.sln";
                    if (this.BuildEnvironment == BuildEnvironmentEnum.prod)
                        slnName = "server.net5.prod.sln";
                    break;
            }

            string servernetFolder = SolBasePath + "2_logic\\servers\\server.net\\" + csoutputfolder + "\\";

            // no hace falta copiar las DLLs, porque la solución de servicios referencia directo a cslinked
            // de los proyectos de las otras capas para su compilación
            // copia las DLLs compiladas hacia la carpeta de publicación (incluye los pdbs)
            //System.IO.DirectoryInfo di = new System.IO.DirectoryInfo(cslinkedFolder + "\\bin\\");

            //foreach (FileInfo file in di.GetFiles())
            //{
            //    System.IO.File.Copy(file.FullName, servernetFolder + "bin\\" + file.Name);
            //}

            // compila la solución de publicación del servicio ya integrado con las DLLs
            //VisualStudioGenerator.CompileProject(this, servernetFolder + "server.net.sln");
            VisualStudioGenerator.CompileDevenv(this, servernetFolder + slnName);

            // luego de compilar, se debería desplegar

            // Genero el código fuente del Proxy, luego de compilada la solución
            string webFolder = SolBasePath + "1_ui\\client.html\\web\\";
            System.IO.File.WriteAllText(webFolder + "assets\\js\\proxy.ts", TypescriptGenerator.RenderProxy(this));

            //if (this.BuildEnvironment == BuildEnvironmentEnum.dev || this.BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                // generación de servicios Net (asmx, svc, rest controllers)
                NetService_Generation();
            }
        }


        private void UI_Publish()
        {
            // Ruta de destino final de la publicación JS
            string webFolder = SolBasePath + "1_ui\\client.html\\web\\";

            if (this.BuildEnvironment == BuildEnvironmentEnum.dev || this.BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                // Ruta origen de compilación del proxy
                // se asume que la compilación del proxy se ejecuta antes de la publicación
                string jsFolder = OutFolder + "js\\";

                // Crea las carpetas de destino si no existen
                if (!System.IO.Directory.Exists(webFolder + "assets\\js\\"))
                    System.IO.Directory.CreateDirectory(webFolder + "assets\\js\\");

                // Copia los archivos Proxy generados
                // se asume que la estructura de los objetos de comunicación van a quedar estables
                // por lo que el d.ts a nivel de Base no será generado, será fijo
                // si requieren cambio, se deberá hacer a nivel de estructura
                // de la misma manera ocurre con el archivo Core, que sirve para inicializar todos los componentes
                System.IO.File.Copy(jsFolder + "Base.js", webFolder + "assets\\js\\Base.js", true);

                // Generación de proxy
                //string coreFolder = webFolder + "\\assets\\js\\";

                // Preparación Inicialización JS
                System.IO.File.WriteAllText(webFolder + "assets\\js\\Base.js", PrepareBase(webFolder + "assets\\js\\Base.js"));


            }

            // ruta del proyecto cliente
            string clienthtmlFolder = SolBasePath + "1_ui\\client.html\\";

            // compila la solución de publicación del servicio ya integrado con los Typescripts 
            // (no haría falta compilar los typescripts por aparte, se configuraría para minificarlos)
            //VisualStudioGenerator.CompileProject(this, clienthtmlFolder + "\\web\\web.csproj");
            VisualStudioGenerator.CompileDevenv(this, clienthtmlFolder + "\\client.html.sln");

            // luego de compilar, se debería desplegar (Integración continua)

        }


        private string PrepareBase(string Path)
        {
            // lee el contenido del javascript base completo
            string jsContent = "var $hxc = {};" + Environment.NewLine + System.IO.File.ReadAllText(Path);

            // reemplaza el token de inicialización
            jsContent = jsContent.Replace("return \"XXXXYYYYZZZZXXXXYYYYZZZZ\";", "$hxc = $hxClasses; return \"XXXXYYYYZZZZXXXXYYYYZZZZ\";");

            // devuelve el contenido
            return jsContent;
        }

        /// <summary>
        /// Genera el código de referencia en los servicios de Haxe
        /// </summary>
        private void Config_Initializer(HaxeGeneratorTarget target)
        {
            // Archivo a ser generado
            string InitializerFile = "";

            if (target == HaxeGeneratorTarget.Service)
                InitializerFile = SolBasePath + "2_logic\\service\\src\\nMorph\\core\\service\\configuration\\Initializer.hx";

            if (target == HaxeGeneratorTarget.Batch)
                InitializerFile = SolBasePath + "4_batch\\batch\\src\\nMorph\\core\\batch\\configuration\\Initializer.hx";

            // Se escribe el archivo de Haxe de inicialización 
            System.IO.File.WriteAllText(InitializerFile,
                HaxeGenerator.InitializerHeader(this, target) +
                HaxeGenerator.InitializerGeneration(this, target) +
                HaxeGenerator.InitializerFooter(this)
                );
        }

        /// <summary>
        /// Método que escribe los archivos de configuración si es que están faltando
        /// </summary>
        public void Config_Write()
        {
            HaxeGenerator.WriteConfigFiles(this, HaxeGeneratorTarget.Service);
            HaxeGenerator.WriteConfigFiles(this, HaxeGeneratorTarget.Batch);
        }

        public void NetService_Generation()
        {
            // generación de los servicios ASMX
            string AsmxPath = this.SolBasePath + "2_logic\\servers\\server.net\\net4\\integration.net\\asmx\\Core.asmx.cs";
            System.IO.File.WriteAllText(AsmxPath, NetServiceGenerator.ServiceAsmxGenerator(this));

            // generación de los servicios SVC
            string SvcPath = this.SolBasePath + "2_logic\\servers\\server.net\\net4\\integration.net\\wcf\\Core.svc.cs";
            System.IO.File.WriteAllText(SvcPath, NetServiceGenerator.ServiceSvcGenerator(this));


            // generación de los servicios WebApi
            string ApiPath = this.SolBasePath + "2_logic\\servers\\server.net\\net4\\integration.net\\Controllers\\CoreController.cs";
            System.IO.File.WriteAllText(ApiPath, NetServiceGenerator.ServiceApiGenerator(this));
        }

        /// <summary>
        /// Método que unifica los mensajes presentados en pantalla
        /// </summary>
        /// <param name="msg"></param>
        public void Log(string msg)
        {
            if (LogMethod == LogMethodEnum.Console || LogMethod == LogMethodEnum.Both)
                Console.WriteLine(msg);

            if (LogMethod == LogMethodEnum.File || LogMethod == LogMethodEnum.Both)
            {

                try
                {
                    // si el componente no está inicializado, no tiene las rutas para escribir en el archivo
                    // en este caso a cambio, presenta un mensaje en consola
                    if (string.IsNullOrEmpty(SolBasePath) ||
                        string.IsNullOrEmpty(ProjectFolder))
                    {
                        // si no puede escribir el log por alguna razón, por lo menos escribe en consola la información
                        Console.WriteLine("Componente no inicializado: " + msg + Environment.NewLine);
                    }
                    else
                    {
                        // creación de la carpeta de log de compilación
                        if (!System.IO.Directory.Exists(SolBasePath + ProjectFolder + "\\Log\\"))
                            System.IO.Directory.CreateDirectory(SolBasePath + ProjectFolder + "\\Log\\");
                        // Agregar la línea de log al archivo
                        System.IO.File.AppendAllText(SolBasePath + ProjectFolder + "\\Log\\" + BuildID.ToString().Replace("-", "") + ".txt", msg + Environment.NewLine);
                    }
                }
                catch (Exception ex)
                {
                    // si no puede escribir el log por alguna razón, por lo menos escribe en consola la información
                    Console.WriteLine("Error escritura log archivo: " + msg + Environment.NewLine + ex.Message + Environment.NewLine + ex.StackTrace);
                }
            }
        }
    }
}
