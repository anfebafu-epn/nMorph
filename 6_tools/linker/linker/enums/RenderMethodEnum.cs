using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.linker.enums
{
    public enum RenderMethodEnum
    {
        Precompile = 0,
        Publish = 1,
        ORM = 2,
        UI = 3,
        Logic = 4,
        Batch = 5,
        PostBuild = 100,
    }
}
