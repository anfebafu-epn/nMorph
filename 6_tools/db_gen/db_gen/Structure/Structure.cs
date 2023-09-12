using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.orm.db_gen.Structure
{
    /// <summary>
    /// Representación de la base de datos en el generador
    /// </summary>
    public class Structure
    {
        /// <summary>
        /// Nombre de la base de datos
        /// </summary>
        public string name { get; set; }

        /// <summary>
        /// Representación de las tablas en el generador
        /// </summary>
        public List<StructureTable> tables { get;set; }

        /// <summary>
        /// Representación de las vistas en el generador
        /// </summary>
        public List<StructureView> views { get; set; }
    }
}
