using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.orm.db_gen.Structure
{
    public class StructureTable
    {
        public int objectid { get; set; }

        public string name { get; set; }

        public List<StructureColumn> columns { get; set; }

    }
}
