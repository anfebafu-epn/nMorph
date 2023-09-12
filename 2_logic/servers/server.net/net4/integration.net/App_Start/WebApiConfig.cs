using System;
using System.Collections.Generic;
using System.Linq;
using System.Web.Http;

namespace nMorph.core.integration.net4
{
    /// <summary>
    /// Clase de configuración del web API
    /// </summary>
    public static class WebApiConfig
    {
        /// <summary>
        /// Método de registro del web api
        /// Configuración serialización JSON
        /// </summary>
        /// <param name="config"></param>
        public static void Register(HttpConfiguration config)
        {
            // Web API configuration and services

            // Web API routes
            config.MapHttpAttributeRoutes();

            config.Routes.MapHttpRoute(
                name: "DefaultApi",
                routeTemplate: "api/{controller}/{id}",
                defaults: new { id = RouteParameter.Optional }
            );

            var appXmlType = config.Formatters.XmlFormatter.SupportedMediaTypes.FirstOrDefault(t => t.MediaType == "application/xml");
            config.Formatters.XmlFormatter.SupportedMediaTypes.Remove(appXmlType);
        }
    }
}
