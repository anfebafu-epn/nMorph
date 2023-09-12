using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nMorph.framework.linker.helpers
{
    public class EnumPrepareHelper
    {
        public static void Prepare(string SourceCodePath)
        {
            // busca en los archivos de código cs
            foreach (string file in System.IO.Directory.GetFiles(SourceCodePath, "*.cs"))
            {
                string fileContent = System.IO.File.ReadAllText(file);

                // si se trata que la clase implementa una enumeración de haxe
                string SearchString = " : global::haxe.lang.Enum {";
                int pos = fileContent.IndexOf(SearchString);
                if (pos > 0)
                {
                    int start = fileContent.LastIndexOf(" ", pos-1);
                    string Name = fileContent.Substring(start + 1, pos - start - 1);
                    fileContent = fileContent.Insert(pos + SearchString.Length, Environment.NewLine +
                        "		public " + Name + "() : base(0) { }" + Environment.NewLine);
                }
                System.IO.File.WriteAllText(file, fileContent);
            }

            foreach (string dir in System.IO.Directory.GetDirectories(SourceCodePath))
            {
                Prepare(dir);
            }
        }
    }
}
