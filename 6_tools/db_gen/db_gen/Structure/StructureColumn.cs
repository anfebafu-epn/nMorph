using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.orm.db_gen.Structure
{
    /// <summary>
    /// Estructura de una columna de la base de datos
    /// </summary>
    public class StructureColumn
    {
        /// <summary>
        /// Identificador de la columna
        /// </summary>
        public int columnid { get; set; }
        /// <summary>
        /// Nombre de la columna
        /// </summary>
        public string name { get; set; }

        /// <summary>
        /// Tipo de dato de la columna
        /// </summary>
        public StructureDBTypeEnum DbType { get; set; }

        /// <summary>
        /// Tipo de dato de la columna
        /// </summary>
        public StructureHxTypeEnum HxType { get; set; }

        /// <summary>
        /// Tamaño del campo (usado principalmente para cadenas y números)
        /// </summary>
        public int lenght { get; set; }

        /// <summary>
        /// Precisión del campo (usado principalmente en campos tipo decimal)
        /// </summary>
        public int precision { get; set; }

        /// <summary>
        /// escala del campo
        /// </summary>
        public int scale { get; set; }

        /// <summary>
        /// Indica si el campo es nullable
        /// </summary>
        public bool nullable { get; set; }

        /// <summary>
        /// Indica si el campo es clave primaria
        /// </summary>
        public bool isPrimaryKey { get; set; }
    }
}
