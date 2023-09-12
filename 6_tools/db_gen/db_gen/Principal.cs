using nMorph.framework.orm.db_gen.Generator;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace nMorph.framework.orm.db_gen
{
    public partial class Principal : Form
    {
        public Principal()
        {
            InitializeComponent();
        }

        private void btn_Generate_Click(object sender, EventArgs e)
        {
            // se lee la estructura, lógica diferenciada entre los diferentes motores de base de datos
            Structure.Structure structure = DB_Reader.ReadStructure(DatabaseEngineEnum.SQLServer, txt_ConnString.Text);

            // genera el DAO en función de la estructura leída
            DAO_Gen.GenerateDAO(structure);

            // genera DDL de la base de datos
            DDL_Gen.GenerateDDL(structure);

            // Mensaje de éxito en generación
            MessageBox.Show("Generación Completa");
        }
    }
}
