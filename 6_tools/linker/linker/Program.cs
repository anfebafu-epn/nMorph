using nMorph.framework.linker;
using nMorph.framework.linker.config;
using nMorph.framework.linker.enums;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace linker
{
    class Program
    {
        /// <summary>
        /// Programa principal
        /// </summary>
        /// <param name="args"></param>
        static void Main(string[] args)
        {
            // instancia del procesador de ejecución
            Linker current = new Linker();
            
            try
            {
                // Llenado de variables de parámetros a linker
                //current.Log(Newtonsoft.Json.JsonConvert.SerializeObject(args));

                // si no tiene los suficientes argumentos, no ejecuta el proceso
                if (args.Length < 5)
                {
                    // Error en consola cuando no tiene todos los parámetros
                    current.Log("Not enoguh args");
                    return;
                }

                //# Linker Argumentos esperados
                //# posición 0: Path relativo de la carpeta del proyecto // 1_ui/proxy/
                //# posición 1: Path relativo de las carpetas que el presente proyecto hace referencia, separados por comas
                //# posición 2: Nombre del Namespace actual nMorph.core.xxxx, nMorph.framework.xxx // debe coincidir con la ruta de las carpetas
                //# posición 3: Entorno de compilación Dev=0, Prod = 1
                //# posicion 4: Método de logueo Consola = 0, Archivo = 1, Ambos = 2
                //--cmd 6_tools\linker\linker\bin\Debug\nMorph.framework.linker.exe 5_framework\common\ none nMorph.framework.common 0 0 2 0

                current.SolBasePath = System.IO.Directory.GetCurrentDirectory() + "\\";
                current.ProjectFolder = args[0];
                current.ProjectRefFolders = args[1];
                current.CurrentNamespace = args[2];
                current.BuildEnvironment = (BuildEnvironmentEnum)int.Parse(args[3]);
                current.LogMethod = (LogMethodEnum)int.Parse(args[4]);
                current.RenderMethod = (RenderMethodEnum)int.Parse(args[5]);

                if (!System.IO.File.Exists(current.SolBasePath + "compilation.json"))
                {
                    // Error en consola cuando no tiene todos los parámetros
                    current.Log("compilation.json missed");
                    return;
                }


                CompilationConfig config = Newtonsoft.Json.JsonConvert.DeserializeObject<CompilationConfig>(System.IO.File.ReadAllText(current.SolBasePath + "compilation.json"));

                current.FrameworkVersionMajor = config.MajorVersion;
                current.FrameworkVersionMinor = config.MinorVersion;

                // notificación de inicio de proceso
                //current.Log("Linker Process - Start");
                //current.Log(DateTime.Now.ToString());

                // notificación de variables de procesamiento
                current.Log("SolBasePath: " + current.SolBasePath);
                current.Log("ProjectFolder: " + current.ProjectFolder);
                current.Log("ProjectRefFolders: " + current.ProjectRefFolders);
                current.Log("BuildEnvironment: " + current.BuildEnvironment.ToString());
                current.Log("LogMethod: " + current.LogMethod.ToString());
                current.Log("Namespace: " + current.CurrentNamespace);
                current.Log(">>>>>>>>>>>>>>>");

                // inicialización del procesador
                current.Init();

                // Ejecución del procesamiento
                current.Process();

                current.Log(">>>>>>>>>>>>>>>");
                // Notificación de fin de proceso
                current.Log("Linker Process - End");
                current.Log(DateTime.Now.ToString());
                current.Log(Environment.NewLine);
                current.Log(">>>>>>>>>>>>>>>");
            }
            catch (Exception ex)
            {
                // presentación en pantalla del error
                current.Log("Excepción General:" + ex.Message + Environment.NewLine + ex.StackTrace);
            }
        }
    }
}
