using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Http;
using System.Web.Routing;
using System.Web.Mvc;
using System.Web.Optimization;

namespace nMorph.core.integration.net4
{
    /// <summary>
    /// Clase base de configuración global
    /// </summary>
    public class WebApiApplication : System.Web.HttpApplication
    {
        /// <summary>
        /// Método de inicio de aplicación
        /// </summary>
        protected void Application_Start()
        {
            GlobalConfiguration.Configure(WebApiConfig.Register);
            AreaRegistration.RegisterAllAreas();
            RouteConfig.RegisterRoutes(RouteTable.Routes);
            //FilterConfig.RegisterGlobalFilters(GlobalFilters.Filters);
            //BundleConfig.RegisterBundles(BundleTable.Bundles);

            // Lectura de configuraciones
            nMorph.core.service.configuration.Initializer.Application_Start(Server.MapPath("~") + "..\\..\\..\\config\\");
        }
    }
}
