using System.Web;
using System.Web.Mvc;

namespace nMorph.core.integration.net4
{
    /// <summary>
    /// Configuración de filtros globales
    /// </summary>
    public class FilterConfig
    {
        /// <summary>
        ///  Registro de filtros globales
        /// </summary>
        /// <param name="filters"></param>
        public static void RegisterGlobalFilters(GlobalFilterCollection filters)
        {
            filters.Add(new HandleErrorAttribute());
        }
    }
}
