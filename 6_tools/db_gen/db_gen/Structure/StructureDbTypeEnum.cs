using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.orm.db_gen.Structure
{
    /// <summary>
    /// Definición genérica de los tipos de dato de una base de datos
    /// </summary>
    public enum StructureDBTypeEnum
    {
        SMALLINTEGER,
        INTEGER,
        BIGINTEGER,
        FLOAT,
        REAL,
        DECIMAL,
        CHAR,
        VARCHAR,
        BIGTEXT,
        NCHAR,
        NVARCHAR,
        NBIGTEXT,
        BINARY,
        DATETIME,
        BOOLEAN,
        UUID
    }
}
