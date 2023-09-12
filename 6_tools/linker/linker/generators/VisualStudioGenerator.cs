using Microsoft.Build.Evaluation;
using Microsoft.Build.Execution;
using nMorph.framework.linker.enums;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Diagnostics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.linker.generators
{
    public class VisualStudioGenerator
    {
        /// <summary>
        /// Genera el archivo csproj para el archivo linkeado
        /// </summary>
        /// <param name="current">Referencia al linker</param>
        /// <returns></returns>
        public static string CSProj_Generator(Linker current, Cs_Frameworks framework)
        {
            StringBuilder sb = new StringBuilder();

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


            if (framework == Cs_Frameworks.netframework4)
            {
                sb.Append("<?xml version=\"1.0\" encoding=\"utf-8\"?>"); sb.Append(Environment.NewLine);
                sb.Append("<Project ToolsVersion=\"15.0\" xmlns=\"http://schemas.microsoft.com/developer/msbuild/2003\">"); sb.Append(Environment.NewLine);
                sb.Append("  <Import Project=\"$(MSBuildExtensionsPath)\\$(MSBuildToolsVersion)\\Microsoft.Common.props\" Condition=\"Exists('$(MSBuildExtensionsPath)\\$(MSBuildToolsVersion)\\Microsoft.Common.props')\" />"); sb.Append(Environment.NewLine);
                sb.Append("  <PropertyGroup>"); sb.Append(Environment.NewLine);
                sb.Append("    <Configuration Condition=\" '$(Configuration)' == '' \">" + (current.BuildEnvironment == BuildEnvironmentEnum.dev ? "Debug" : "Release") + "</Configuration>"); sb.Append(Environment.NewLine);
                sb.Append("    <Platform Condition=\" '$(Platform)' == '' \">AnyCPU</Platform>"); sb.Append(Environment.NewLine);
                sb.Append("    <ProjectGuid>{" + Guid.NewGuid().ToString() + "}</ProjectGuid>"); sb.Append(Environment.NewLine);
                sb.Append("    <OutputType>" + (current.RenderMethod == RenderMethodEnum.Batch ? "Exe" : "Library") + "</OutputType>"); sb.Append(Environment.NewLine);
                sb.Append("    <AppDesignerFolder>Properties</AppDesignerFolder>"); sb.Append(Environment.NewLine);
                sb.Append("    <RootNamespace>" + current.CurrentNamespace + "</RootNamespace>"); sb.Append(Environment.NewLine);
                sb.Append("    <AssemblyName>" + current.CurrentNamespace + "</AssemblyName>"); sb.Append(Environment.NewLine);
                sb.Append("    <TargetFrameworkVersion>v4.7.2</TargetFrameworkVersion>"); sb.Append(Environment.NewLine);
                sb.Append("    <FileAlignment>512</FileAlignment>"); sb.Append(Environment.NewLine);
                sb.Append("    <Deterministic>true</Deterministic>"); sb.Append(Environment.NewLine);
                sb.Append("  </PropertyGroup>"); sb.Append(Environment.NewLine);
                sb.Append("  <PropertyGroup Condition=\" '$(Configuration)|$(Platform)' == 'Debug|AnyCPU' \">"); sb.Append(Environment.NewLine);
                sb.Append("    <DebugSymbols>true</DebugSymbols>"); sb.Append(Environment.NewLine);
                sb.Append("    <DebugType>full</DebugType>"); sb.Append(Environment.NewLine);
                sb.Append("    <Optimize>false</Optimize>"); sb.Append(Environment.NewLine);
                sb.Append("    <OutputPath>bin\\</OutputPath>"); sb.Append(Environment.NewLine);
                sb.Append("    <DefineConstants>DEBUG;TRACE</DefineConstants>"); sb.Append(Environment.NewLine);
                sb.Append("    <ErrorReport>prompt</ErrorReport>"); sb.Append(Environment.NewLine);
                sb.Append("    <WarningLevel>0</WarningLevel>"); sb.Append(Environment.NewLine);
                sb.Append("  </PropertyGroup>"); sb.Append(Environment.NewLine);
                sb.Append("  <PropertyGroup Condition=\" '$(Configuration)|$(Platform)' == 'Release|AnyCPU' \">"); sb.Append(Environment.NewLine);
                sb.Append("    <DebugType>pdbonly</DebugType>"); sb.Append(Environment.NewLine);
                sb.Append("    <Optimize>true</Optimize>"); sb.Append(Environment.NewLine);
                sb.Append("    <OutputPath>bin\\</OutputPath>"); sb.Append(Environment.NewLine);
                sb.Append("    <DefineConstants>TRACE</DefineConstants>"); sb.Append(Environment.NewLine);
                sb.Append("    <ErrorReport>prompt</ErrorReport>"); sb.Append(Environment.NewLine);
                sb.Append("    <WarningLevel>4</WarningLevel>"); sb.Append(Environment.NewLine);
                sb.Append("  </PropertyGroup>"); sb.Append(Environment.NewLine);

                // Librerías
                sb.Append("  <ItemGroup>"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Core\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Xml.Linq\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Data.DataSetExtensions\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"Microsoft.CSharp\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Data\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Net.Http\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Xml\" />"); sb.Append(Environment.NewLine);
                sb.Append("    <Reference Include=\"System.Transactions\" />"); sb.Append(Environment.NewLine);

                if (current.ProjectRefFolders != "" && current.ProjectRefFolders != "none")
                {

                    // Referencia a otras librerías
                    string[] refFolders = current.ProjectRefFolders.Split(new char[] { ',', '-', ';' }, StringSplitOptions.RemoveEmptyEntries);


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

                    foreach (string RefFolder in refFolders)
                    {
                        string RefNS = "";
                        var rf = RefFolder.EndsWith("\\") == false ? RefFolder + "\\" : RefFolder;

                        string ProjFolder = current.SolBasePath + rf + OutPrefix + "\\" + csoutputfolder + "\\";
                        var di = new System.IO.DirectoryInfo(ProjFolder);
                        foreach (var file in di.GetFiles())
                        {
                            if (file.Extension.ToLower().EndsWith("csproj"))
                            {
                                RefNS = System.IO.Path.GetFileNameWithoutExtension(file.FullName);
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

                        string BinFolder = current.SolBasePath + rf + OutPrefix + "\\" + csoutputfolder + "\\bin\\";


                        // Se busca la DLL compilada
                        // solamente agrega la referencia si lo encuentra compilado
                        //if (System.IO.File.Exists(BinFolder + RefNS + ".dll"))
                        //{
                        // incorporo las referencias al proyecto
                        sb.Append("    <Reference Include=\"" + RefNS + "\">"); sb.Append(Environment.NewLine);
                        sb.Append("      <HintPath>..\\..\\..\\..\\" + rf + OutPrefix + "\\" + csoutputfolder + "\\bin\\" + RefNS + ".dll</HintPath>"); sb.Append(Environment.NewLine);
                        sb.Append("    </Reference>"); sb.Append(Environment.NewLine);
                        //}
                        //else
                        //{
                        //    // si no lo encuentra compilado, emite una notificación
                        //    current.Log("DLL not found " + RefNS);
                        //}
                    }
                }

                sb.Append("  </ItemGroup>"); sb.Append(Environment.NewLine);

                // Archivos Incorporados en el proyecto
                sb.Append("  <ItemGroup>"); sb.Append(Environment.NewLine);
                sb.Append("    <Compile Include=\"Properties\\AssemblyInfo.cs\" />"); sb.Append(Environment.NewLine);

                //Incorpora todos los archivos que se encuentran en la carpeta en ese momento al proyecto
                GenerateCompileItems(current, sb, current.OutFolder + csoutputfolder + "\\src\\", csoutputfolder);

                sb.Append("  </ItemGroup>"); sb.Append(Environment.NewLine);
                sb.Append("  <Import Project=\"$(MSBuildToolsPath)\\Microsoft.CSharp.targets\" />"); sb.Append(Environment.NewLine);
                sb.Append("</Project>"); sb.Append(Environment.NewLine);
            }
            else if (framework == Cs_Frameworks.netcore31 || framework == Cs_Frameworks.net5)
            {
                sb.Append("<Project Sdk=\"Microsoft.NET.Sdk\">"); sb.Append(Environment.NewLine);
                sb.Append("  <PropertyGroup>"); sb.Append(Environment.NewLine);

                if (framework == Cs_Frameworks.netcore31)
                {
                    sb.Append("    <TargetFramework>netcoreapp3.1</TargetFramework>"); sb.Append(Environment.NewLine);
                }
                else if (framework == Cs_Frameworks.net5)
                {
                    sb.Append("    <TargetFramework>net5.0</TargetFramework>"); sb.Append(Environment.NewLine);
                }

                sb.Append("    <GenerateAssemblyInfo>false</GenerateAssemblyInfo>"); sb.Append(Environment.NewLine);
                sb.Append("    <AppendTargetFrameworkToOutputPath>false</AppendTargetFrameworkToOutputPath>"); sb.Append(Environment.NewLine);
                sb.Append("    <AppendRuntimeIdentifierToOutputPath>false</AppendRuntimeIdentifierToOutputPath>"); sb.Append(Environment.NewLine);
                sb.Append("    <OutputType>" + (current.RenderMethod == RenderMethodEnum.Batch ? "Exe" : "Library") + "</OutputType>"); sb.Append(Environment.NewLine);
                sb.Append("  </PropertyGroup>"); sb.Append(Environment.NewLine);
                sb.Append("  <PropertyGroup Condition=\"'$(Configuration)|$(Platform)' == 'Debug|AnyCPU'\">"); sb.Append(Environment.NewLine);
                sb.Append("     <OutputPath>bin\\</OutputPath>"); sb.Append(Environment.NewLine);
                sb.Append("  </PropertyGroup>"); sb.Append(Environment.NewLine);

                // Paquetes
                sb.Append("  <ItemGroup>"); sb.Append(Environment.NewLine);
                sb.Append("  <PackageReference Include=\"System.Data.SqlClient\" Version=\"4.8.2\" />"); sb.Append(Environment.NewLine);
                sb.Append("  </ItemGroup>"); sb.Append(Environment.NewLine);

                // Librerías nMorph
                sb.Append("  <ItemGroup>"); sb.Append(Environment.NewLine);

                if (current.ProjectRefFolders != "" && current.ProjectRefFolders != "none")
                {
                    // Referencia a otras librerías
                    string[] refFolders = current.ProjectRefFolders.Split(new char[] { ',', '-', ';' }, StringSplitOptions.RemoveEmptyEntries);

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

                    foreach (string RefFolder in refFolders)
                    {
                        string RefNS = "";
                        var rf = RefFolder.EndsWith("\\") == false ? RefFolder + "\\" : RefFolder;

                        string ProjFolder = current.SolBasePath + rf + OutPrefix + "\\" + csoutputfolder + "\\";
                        var di = new System.IO.DirectoryInfo(ProjFolder);
                        foreach (var file in di.GetFiles())
                        {
                            if (file.Extension.ToLower().EndsWith("csproj"))
                            {
                                RefNS = System.IO.Path.GetFileNameWithoutExtension(file.FullName);
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

                        string BinFolder = current.SolBasePath + rf + OutPrefix + "\\" + csoutputfolder + "\\bin\\";


                        // Se busca la DLL compilada
                        // solamente agrega la referencia si lo encuentra compilado
                        if (System.IO.File.Exists(BinFolder + RefNS + ".dll"))
                        {
                            // incorporo las referencias al proyecto
                            sb.Append("    <Reference Include=\"" + RefNS + "\">"); sb.Append(Environment.NewLine);
                            sb.Append("      <HintPath>..\\..\\..\\..\\" + rf + OutPrefix + "\\" + csoutputfolder + "\\bin\\" + RefNS + ".dll</HintPath>"); sb.Append(Environment.NewLine);
                            sb.Append("    </Reference>"); sb.Append(Environment.NewLine);
                        }
                        else
                        {
                            // si no lo encuentra compilado, emite una notificación
                            current.Log("DLL not found " + RefNS);
                        }
                    }
                }

                sb.Append("  </ItemGroup>"); sb.Append(Environment.NewLine);
                sb.Append("</Project>"); sb.Append(Environment.NewLine);
            }

            return sb.ToString();
        }


        /// <summary>
        /// Genera los archivos de compilación para incorporar en el formato csproj
        /// </summary>
        /// <param name="current">Referencia al Linker</param>
        /// <param name="sb">String Builder de la generación</param>
        /// <param name="currentFolder">Carpeta actual recursiva</param>
        private static void GenerateCompileItems(Linker current, StringBuilder sb, string currentFolder, string csoutputfolder)
        {
            foreach (string file in System.IO.Directory.GetFiles(currentFolder))
            {
                sb.Append("    <Compile Include=\"" + file.Replace(current.OutFolder + csoutputfolder + "\\", "") + "\" />"); sb.Append(Environment.NewLine);
            }

            foreach (string dir in System.IO.Directory.GetDirectories(currentFolder))
            {
                GenerateCompileItems(current, sb, dir + "\\", csoutputfolder);
            }
        }

        /// <summary>
        /// Genera el formato AssemblyInfo, para que se incorpore dentro del csproj del proyecto linkeado
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static string AssemblyInfo_Generator(Linker current)
        {
            StringBuilder sb = new StringBuilder();

            sb.Append("using System.Reflection;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Runtime.CompilerServices;"); sb.Append(Environment.NewLine);
            sb.Append("using System.Runtime.InteropServices;"); sb.Append(Environment.NewLine);
            sb.Append("// General Information about an assembly is controlled through the following"); sb.Append(Environment.NewLine);
            sb.Append("// set of attributes. Change these attribute values to modify the information"); sb.Append(Environment.NewLine);
            sb.Append("// associated with an assembly."); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyTitle(\"" + current.CurrentNamespace + "\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyDescription(\"\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyConfiguration(\"\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyCompany(\"Smartwork\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyProduct(\"Smartwork Multiplatform Framework\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyCopyright(\"Copyright ©  " + DateTime.Now.Year.ToString() + "\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyTrademark(\"Smartwork S.A. - Ecuador\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyCulture(\"\")]"); sb.Append(Environment.NewLine);
            sb.Append("// Setting ComVisible to false makes the types in this assembly not visible"); sb.Append(Environment.NewLine);
            sb.Append("// to COM components.  If you need to access a type in this assembly from"); sb.Append(Environment.NewLine);
            sb.Append("// COM, set the ComVisible attribute to true on that type."); sb.Append(Environment.NewLine);
            sb.Append("[assembly: ComVisible(false)]"); sb.Append(Environment.NewLine);
            sb.Append("// The following GUID is for the ID of the typelib if this project is exposed to COM"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: Guid(\"" + Guid.NewGuid().ToString() + "\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyVersion(\"" + current.FrameworkVersionMajor.ToString() + "." + current.FrameworkVersionMinor.ToString() + "." + DateTime.Now.Year.ToString() + "." + DateTime.Now.DayOfYear.ToString() + "\")]"); sb.Append(Environment.NewLine);
            sb.Append("[assembly: AssemblyFileVersion(\"" + current.FrameworkVersionMajor.ToString() + "." + current.FrameworkVersionMinor.ToString() + "." + DateTime.Now.Year.ToString() + "." + DateTime.Now.DayOfYear.ToString() + "\")]"); sb.Append(Environment.NewLine);

            return sb.ToString();
        }

        /// <summary>
        /// 
        /// </summary>
        /// <param name="current"></param>
        /// <param name="projectFileName"></param>
        public static void CompileProject(Linker current, string projectFileName)
        {
            current.Log("Compile Task :" + projectFileName);
            ProjectCollection pc = new ProjectCollection();
            BasicLogger Logger = new BasicLogger();
            var buildParamters = new BuildParameters(pc);
            buildParamters.Loggers = new List<Microsoft.Build.Framework.ILogger>() { Logger };

            Dictionary<string, string> GlobalProperty = new Dictionary<string, string>();
            if (current.BuildEnvironment == BuildEnvironmentEnum.dev)
            {
                GlobalProperty.Add("Configuration", "Debug");
                GlobalProperty.Add("Platform", "AnyCPU");
            }
            if (current.BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                GlobalProperty.Add("Configuration", "Release");
                GlobalProperty.Add("Platform", "AnyCPU");
            }
            BuildManager.DefaultBuildManager.ResetCaches();

            var buildRequest = new BuildRequestData(projectFileName, GlobalProperty, null, new String[] { "Build" }, null);
            var buildResult = BuildManager.DefaultBuildManager.Build(buildParamters, buildRequest);


            current.Log(buildResult.OverallResult == BuildResultCode.Success ? "Success" : ">> Failure <<");

            // Si hay error de compilación desglosa los errores en un json
            if (buildResult.OverallResult == BuildResultCode.Failure)
            {
                current.Log(Newtonsoft.Json.JsonConvert.SerializeObject(buildResult));
                current.Log(Logger.GetLogString());
            }

        }

        /// <summary>
        /// Restaura las referencias de nuget de un proyecto
        /// Se aprovecha el ejecutable nuget.exe para la restauración
        /// </summary>
        /// <param name="current"></param>
        /// <param name="projectFileName"></param>
        public static void NugetRestore(Linker current, string projectFileName)
        {
            using (Process nuget = new Process())
            {
                //ruta de devenv
                string nuget_Path = current.SolBasePath + "6_tools\\nuget\\nuget.exe";

                nuget.StartInfo.FileName = nuget_Path;
                nuget.StartInfo.WorkingDirectory = new System.IO.FileInfo(nuget_Path).Directory.FullName;
                nuget.StartInfo.Arguments = "restore \"" + projectFileName + "\"";
                nuget.StartInfo.UseShellExecute = false;
                nuget.StartInfo.RedirectStandardOutput = true;
                nuget.StartInfo.RedirectStandardError = true;
                //nuget.StartInfo.CreateNoWindow = true;
                nuget.OutputDataReceived += Nuget_OutputDataReceived;
                nuget.Start();
                nuget.BeginOutputReadLine();
                current.Log("Resturando nuget: " + projectFileName + " : " + nuget.StartInfo.Arguments);
                nuget.WaitForExit();
                //current.Log(nuget.StandardOutput.ReadToEnd());
                //current.Log(nuget.StandardError.ReadToEnd());
                current.Log("Restaurado nuget - Code:" + nuget.ExitCode.ToString());

                nuget.Close();
            }
        }

        /// <summary>
        /// Evento que recibe información del avance de la compilación mientras se ejecuta la restauración de nuget
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private static void Nuget_OutputDataReceived(object sender, DataReceivedEventArgs e)
        {
            Console.WriteLine(e.Data);
        }

        /// <summary>
        /// Llama al utilitario vswhere para identificar la ruta exacta del ejecutable devenv.com
        /// </summary>
        /// <param name="current"></param>
        /// <returns></returns>
        public static void DetectDevenvPath(Linker current)
        {
            using (Process detect = new Process())
            {
                //ruta de devenv
                string nuget_Path = current.SolBasePath + "6_tools\\vswhere\\cppexec.exe";

                detect.StartInfo.FileName = nuget_Path;
                detect.StartInfo.WorkingDirectory = new System.IO.FileInfo(nuget_Path).Directory.FullName;
                detect.StartInfo.Arguments = "-location -vs 2019";
                detect.StartInfo.UseShellExecute = false;
                detect.StartInfo.RedirectStandardOutput = true;
                detect.StartInfo.RedirectStandardError = true;
                detect.StartInfo.CreateNoWindow = true;
                detect.Start();
                detect.WaitForExit();
                string discovered_devenv = detect.StandardOutput.ReadToEnd();
                detect.Close();

                if (string.IsNullOrEmpty(discovered_devenv))
                    //return ConfigurationManager.AppSettings["devenv_Path"];
                    current.DevEnvPath = ConfigurationManager.AppSettings["devenv_Path"];
                else
                {
                    var devEnvCom = discovered_devenv.Replace(Environment.NewLine, "") + "\\Common7\\IDE\\devenv.com";
                    if (System.IO.File.Exists(devEnvCom))
                        current.DevEnvPath = devEnvCom ;

                    var devEnvComPro = discovered_devenv.Replace(Environment.NewLine, "").Replace("BuildTools", "Professional") + "\\Common7\\IDE\\devenv.com";
                    if (System.IO.File.Exists(devEnvComPro))
                        current.DevEnvPath = devEnvComPro;

                    var devEnvComEnt = discovered_devenv.Replace(Environment.NewLine, "").Replace("BuildTools", "Enterprise") + "\\Common7\\IDE\\devenv.com";
                    if (System.IO.File.Exists(devEnvComEnt))
                        current.DevEnvPath = devEnvComEnt;
                }
            }
        }

        /// <summary>
        /// Hace la llamada al ejecutable devenv para compilar sin interfaz el proyecto
        /// utilizando todas las herramientas internas de generación de visual studio
        /// </summary>
        /// <param name="current"></param>
        /// <param name="projectFileName"></param>
        public static void CompileDevenv(Linker current, string projectFileName)
        {
            if (current.BuildEnvironment == BuildEnvironmentEnum.dev || current.BuildEnvironment == BuildEnvironmentEnum.prod)
            {
                // primero restaura nuget antes de compilar.
                // si es una compilación rápida, no hace restauración de Nuget
                NugetRestore(current, projectFileName);
            }

            // Ejecuta el procedimiento de compilación
            using (Process compiler = new Process())
            {
                compiler.StartInfo.FileName = current.DevEnvPath;
                compiler.StartInfo.WorkingDirectory = new System.IO.FileInfo(current.DevEnvPath).Directory.FullName;

                if (current.BuildEnvironment == BuildEnvironmentEnum.dev || current.BuildEnvironment == BuildEnvironmentEnum.prod)
                    compiler.StartInfo.Arguments = "\"" + projectFileName + "\" /Rebuild";
                else
                    compiler.StartInfo.Arguments = "\"" + projectFileName + "\" /Build";

                compiler.StartInfo.UseShellExecute = false;
                compiler.StartInfo.RedirectStandardOutput = true;
                compiler.StartInfo.RedirectStandardError = true;
                compiler.StartInfo.CreateNoWindow = true;
                compiler.OutputDataReceived += Compiler_OutputDataReceived;
                compiler.Start();
                compiler.BeginOutputReadLine();
                current.Log("Compilando Devenv: " + projectFileName + " : " + compiler.StartInfo.Arguments);
                compiler.WaitForExit();
                //current.Log(compiler.StandardOutput.ReadToEnd());
                //current.Log(compiler.StandardError.ReadToEnd());
                current.Log("Compilado - Code:" + compiler.ExitCode.ToString());

                compiler.Close();
            }
        }

        /// <summary>
        /// Método que obtiene el log de la compilación mientras va ejecutando la compilación usando devenv.com
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private static void Compiler_OutputDataReceived(object sender, DataReceivedEventArgs e)
        {
            Console.WriteLine(e.Data);
        }
    }
}
