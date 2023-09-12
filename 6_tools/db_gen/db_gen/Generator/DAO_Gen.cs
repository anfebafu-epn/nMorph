using System;
using System.Collections.Generic;
using System.Drawing.Imaging;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace nMorph.framework.orm.db_gen.Generator
{
    public class DAO_Gen
    {
        public static void GenerateDAO(Structure.Structure structure)
        {
            System.IO.DirectoryInfo Soldi = new System.IO.DirectoryInfo(AppDomain.CurrentDomain.BaseDirectory + "\\..\\..\\..\\..\\..\\");

            string dbFolder = Soldi.FullName + "3_Data\\db\\src\\nMorph\\core\\db\\";
            string daoFolder = dbFolder + structure.name.Replace(" ", "").ToLower() + "\\";

            // Si no existe el directorio de DAO, se lo crea
            // si ya existe, lo borra y vuelve a crear, para que se creen los archivos limpios
            // el nombre del directorio es el nombre de la base de datos
            if (System.IO.Directory.Exists(daoFolder))
                System.IO.Directory.Delete(daoFolder, true);

            System.IO.Directory.CreateDirectory(daoFolder);


            // se itera por las tablas creando el patrón HX
            foreach (var table in structure.tables)
            {
                GenerateHxTable(structure, table, daoFolder);
            }

            // se itera por las vistas creando el patrón HX
            foreach (var view in structure.views)
            {
                GenerateHxView(structure, view, daoFolder);
            }


            // archivos consolidadores
            GenerateDAOBase(structure, daoFolder);

        }

        private static void GenerateHxTable(Structure.Structure structure, Structure.StructureTable table, string daoFolder)
        {
            if (table.name.ToLower() == "sysdiagrams") return;

            StringBuilder sb = new StringBuilder();
            sb.Append("package nMorph.core.db." + structure.name.Replace(" ", "").ToLower() + ";"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.common.datatypes.UUID;"); sb.Append(Environment.NewLine);
            if (table.columns.Count(v => v.HxType == Structure.StructureHxTypeEnum.BYTES) > 0)
                sb.Append("import haxe.io.Bytes;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.client.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.interfaces.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.lang.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.tools.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.clauses.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.conditions.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.enums.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.fields.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.sentences.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.sources.*;"); sb.Append(Environment.NewLine);
            sb.Append("/**"); sb.Append(Environment.NewLine);
            sb.Append(" * ..."); sb.Append(Environment.NewLine);
            sb.Append(" * @author Smartwork"); sb.Append(Environment.NewLine);
            sb.Append(" */"); sb.Append(Environment.NewLine);
            sb.Append("@:keepSub @:rtti"); sb.Append(Environment.NewLine);
            sb.Append("class " + table.name + " extends ModelObject"); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("	/**"); sb.Append(Environment.NewLine);
            sb.Append("	 * Constructor de la clase " + table.name + " que tiene equivalencia con la tabla de la base de datos"); sb.Append(Environment.NewLine);
            sb.Append("	 */"); sb.Append(Environment.NewLine);
            sb.Append("	public function new()"); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("		//inicializamos la herencia"); sb.Append(Environment.NewLine);
            sb.Append("		super();"); sb.Append(Environment.NewLine);
            sb.Append("		//inicialización de arreglos de objetos internos"); sb.Append(Environment.NewLine);
            sb.Append("	}"); sb.Append(Environment.NewLine);
            sb.Append("	/**"); sb.Append(Environment.NewLine);
            sb.Append("	 * referencia a tabla para consultas"); sb.Append(Environment.NewLine);
            sb.Append("	 */"); sb.Append(Environment.NewLine);
            sb.Append("	public static var table:ISource = new TableSource(\"" + table.name + "\");"); sb.Append(Environment.NewLine);


            foreach (var col in table.columns)
            {
                sb.Append("	/**"); sb.Append(Environment.NewLine);
                sb.Append("	 * Referencia a columna " + col.name); sb.Append(Environment.NewLine);
                sb.Append("	 */"); sb.Append(Environment.NewLine);
                sb.Append("	" + HXStaticCol(table.name, col) + ""); sb.Append(Environment.NewLine);
            }

            sb.Append("	/**"); sb.Append(Environment.NewLine);
            sb.Append("	 * inicio rápido de filtro"); sb.Append(Environment.NewLine);
            sb.Append("	 * @param	Filtro"); sb.Append(Environment.NewLine);
            sb.Append("	 * @return objeto para aplicar otras condiciones o ejecutar el query"); sb.Append(Environment.NewLine);
            sb.Append("	 */"); sb.Append(Environment.NewLine);
            sb.Append("	public static function WHERE(Condition:ICondition):WhereClause"); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("		return SQL.SELECT().FROM(table).WHERE(Condition);"); sb.Append(Environment.NewLine);
            sb.Append("	}"); sb.Append(Environment.NewLine);


            string PkParams = "";
            string PkFilters = "";
            int counter = 0;
            foreach (var pk in table.columns.Where(c => c.isPrimaryKey == true))
            {
                PkParams += "val_" + pk.name + ":" + HxType(pk) + ",";
                PkFilters += (counter == 0 ? "Condition.SET" : ".AND_Ex") +
                    "(col_" + pk.name + ", Op.Equal, " + HxValType(pk) + "(val_" + pk.name + "))";

                counter++;
            }
            if (PkParams.EndsWith(","))
                PkParams = PkParams.Substring(0, PkParams.Length - ",".Length);

            // Si tiene clave primaria
            if (PkParams != "")
            {
                sb.Append("	/**"); sb.Append(Environment.NewLine);
                sb.Append("	 * filtro por clave primaria"); sb.Append(Environment.NewLine);
                sb.Append("	 * @param	valor de clave primaria"); sb.Append(Environment.NewLine);
                sb.Append("	 * @return  objeto para aplicar otras condiciones o ejecutar el query"); sb.Append(Environment.NewLine);
                sb.Append("	 */"); sb.Append(Environment.NewLine);

                sb.Append("	public static function BYPK(" + PkParams + "):WhereClause"); sb.Append(Environment.NewLine);
                sb.Append("	{"); sb.Append(Environment.NewLine);
                sb.Append("		return SQL.SELECT().FROM(table).WHERE(" + PkFilters + ");"); sb.Append(Environment.NewLine);
                sb.Append("	}"); sb.Append(Environment.NewLine);
            }

            foreach (var col in table.columns)
            {
                sb.Append("	"); sb.Append(Environment.NewLine);
                sb.Append("	@:isVar var " + col.name + " (get, " + (col.isPrimaryKey ? "null" : "set") + "):" + HxType(col) + ";"); sb.Append(Environment.NewLine);
                sb.Append("	public function get_" + col.name + "():" + HxType(col) + ""); sb.Append(Environment.NewLine);
                sb.Append("	{"); sb.Append(Environment.NewLine);
                sb.Append("		return " + col.name + ";"); sb.Append(Environment.NewLine);
                sb.Append("	}"); sb.Append(Environment.NewLine);
                if (col.isPrimaryKey == false)
                {
                    sb.Append("	public function set_" + col.name + "(value:" + HxType(col) + "):" + HxType(col) + ""); sb.Append(Environment.NewLine);
                    sb.Append("	{"); sb.Append(Environment.NewLine);
                    sb.Append("		//col_" + col.name + ".ValidateDBCompatibility(value);//para registro de cambios"); sb.Append(Environment.NewLine);
                    sb.Append("		"); sb.Append(Environment.NewLine);
                    sb.Append("		if (TrackChanges && this." + col.name + " != value) AddChange(new ChangeItem(col_" + col.name + ", this." + col.name + ", value));"); sb.Append(Environment.NewLine);
                    sb.Append("		return " + col.name + "=value;"); sb.Append(Environment.NewLine);
                    sb.Append("	}"); sb.Append(Environment.NewLine);
                }
                sb.Append(Environment.NewLine);
            }

            sb.Append("}"); sb.Append(Environment.NewLine);

            System.IO.File.WriteAllText(daoFolder + table.name + ".hx", sb.ToString());
        }

        private static void GenerateHxView(Structure.Structure structure, Structure.StructureView view, string daoFolder)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("package nMorph.core.db." + structure.name.Replace(" ", "").ToLower() + ";"); sb.Append(Environment.NewLine);

            sb.Append("import nMorph.framework.common.datatypes.UUID;"); sb.Append(Environment.NewLine);
            if (view.columns.Count(v => v.HxType == Structure.StructureHxTypeEnum.BYTES) > 0)
                sb.Append("import haxe.io.Bytes;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.client.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.interfaces.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.lang.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.tools.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.clauses.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.conditions.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.enums.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.fields.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.sentences.*;"); sb.Append(Environment.NewLine);
            sb.Append("import nMorph.framework.orm.common.sources.*;"); sb.Append(Environment.NewLine);
            sb.Append("/**"); sb.Append(Environment.NewLine);
            sb.Append(" * ..."); sb.Append(Environment.NewLine);
            sb.Append(" * @author Smartwork"); sb.Append(Environment.NewLine);
            sb.Append(" */"); sb.Append(Environment.NewLine);
            sb.Append("@:keepSub @:rtti"); sb.Append(Environment.NewLine);
            sb.Append("class " + view.name + " extends ModelObject"); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("	/**"); sb.Append(Environment.NewLine);
            sb.Append("	 * Constructor de la clase " + view.name + " que tiene equivalencia con la tabla de la base de datos"); sb.Append(Environment.NewLine);
            sb.Append("	 */"); sb.Append(Environment.NewLine);
            sb.Append("	public function new()"); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("		//inicializamos la herencia"); sb.Append(Environment.NewLine);
            sb.Append("		super();"); sb.Append(Environment.NewLine);
            sb.Append("		//inicialización de arreglos de objetos internos"); sb.Append(Environment.NewLine);
            sb.Append("	}"); sb.Append(Environment.NewLine);
            sb.Append("	/**"); sb.Append(Environment.NewLine);
            sb.Append("	 * referencia a vista para consultas"); sb.Append(Environment.NewLine);
            sb.Append("	 */"); sb.Append(Environment.NewLine);
            sb.Append("	public static var view:ISource = new ViewSource(\"" + view.name + "\");"); sb.Append(Environment.NewLine);


            foreach (var col in view.columns)
            {
                sb.Append("	/**"); sb.Append(Environment.NewLine);
                sb.Append("	 * Referencia a columna " + col.name); sb.Append(Environment.NewLine);
                sb.Append("	 */"); sb.Append(Environment.NewLine);
                sb.Append("	" + HXStaticCol(view.name, col) + ""); sb.Append(Environment.NewLine);
            }

            sb.Append("	/**"); sb.Append(Environment.NewLine);
            sb.Append("	 * inicio rápido de filtro"); sb.Append(Environment.NewLine);
            sb.Append("	 * @param	Filtro"); sb.Append(Environment.NewLine);
            sb.Append("	 * @return objeto para aplicar otras condiciones o ejecutar el query"); sb.Append(Environment.NewLine);
            sb.Append("	 */"); sb.Append(Environment.NewLine);
            sb.Append("	public static function WHERE(Condition:ICondition):WhereClause"); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("		return SQL.SELECT().FROM(view).WHERE(Condition);"); sb.Append(Environment.NewLine);
            sb.Append("	}"); sb.Append(Environment.NewLine);


            string PkParams = "";
            string PkFilters = "";
            int counter = 0;
            foreach (var pk in view.columns.Where(c => c.isPrimaryKey == true))
            {
                PkParams += "val_" + pk.name + ":" + HxType(pk) + ",";
                PkFilters += (counter == 0 ? "Condition.SET" : ".AND_Ex") +
                    "(col_" + pk.name + ", Op.Equal, " + HxValType(pk) + "(val_" + pk.name + "))";

                counter++;
            }
            if (PkParams.EndsWith(","))
                PkParams = PkParams.Substring(0, PkParams.Length - ",".Length);

            // Si tiene clave primaria
            if (PkFilters != "")
            {
                sb.Append("	/**"); sb.Append(Environment.NewLine);
                sb.Append("	 * filtro por clave primaria"); sb.Append(Environment.NewLine);
                sb.Append("	 * @param	valor de clave primaria"); sb.Append(Environment.NewLine);
                sb.Append("	 * @return  objeto para aplicar otras condiciones o ejecutar el query"); sb.Append(Environment.NewLine);
                sb.Append("	 */"); sb.Append(Environment.NewLine);

                sb.Append("	public static function BYPK(" + PkParams + "):WhereClause"); sb.Append(Environment.NewLine);
                sb.Append("	{"); sb.Append(Environment.NewLine);
                sb.Append("		return SQL.SELECT().FROM(view).WHERE(" + PkFilters + ");"); sb.Append(Environment.NewLine);
                sb.Append("	}"); sb.Append(Environment.NewLine);
            }

            foreach (var col in view.columns)
            {
                sb.Append("	"); sb.Append(Environment.NewLine);
                sb.Append("	@:isVar var " + col.name + " (get, " + (col.isPrimaryKey ? "null" : "set") + "):" + HxType(col) + ";"); sb.Append(Environment.NewLine);
                sb.Append("	public function get_" + col.name + "():" + HxType(col) + ""); sb.Append(Environment.NewLine);
                sb.Append("	{"); sb.Append(Environment.NewLine);
                sb.Append("		return " + col.name + ";"); sb.Append(Environment.NewLine);
                sb.Append("	}"); sb.Append(Environment.NewLine);
                if (col.isPrimaryKey == false)
                {
                    sb.Append("	public function set_" + col.name + "(value:" + HxType(col) + "):" + HxType(col) + ""); sb.Append(Environment.NewLine);
                    sb.Append("	{"); sb.Append(Environment.NewLine);
                    sb.Append("		//col_" + col.name + ".ValidateDBCompatibility(value);//para registro de cambios"); sb.Append(Environment.NewLine);
                    sb.Append("		"); sb.Append(Environment.NewLine);
                    sb.Append("		if (TrackChanges && this." + col.name + " != value) AddChange(new ChangeItem(col_" + col.name + ", this." + col.name + ", value));"); sb.Append(Environment.NewLine);
                    sb.Append("		return " + col.name + "=value;"); sb.Append(Environment.NewLine);
                    sb.Append("	}"); sb.Append(Environment.NewLine);
                }
                sb.Append(Environment.NewLine);
            }

            sb.Append("}"); sb.Append(Environment.NewLine);

            System.IO.File.WriteAllText(daoFolder + view.name + ".hx", sb.ToString());
        }

        private static string HxType(Structure.StructureColumn col)
        {
            StringBuilder sb = new StringBuilder();
            switch (col.HxType)
            {
                case Structure.StructureHxTypeEnum.STRING:
                    sb.Append("String");
                    break;
                case Structure.StructureHxTypeEnum.INT:
                    if (col.nullable)
                        sb.Append("Null<Int>");
                    else
                        sb.Append("Int");
                    break;
                case Structure.StructureHxTypeEnum.INT64:
                    if (col.nullable)
                        sb.Append("Null<Int64>");
                    else
                        sb.Append("Int64");
                    break;
                case Structure.StructureHxTypeEnum.FLOAT:
                    if (col.nullable)
                        sb.Append("Null<Float>");
                    else
                        sb.Append("Float");
                    break;
                case Structure.StructureHxTypeEnum.BYTES:
                    sb.Append("Bytes");
                    break;
                case Structure.StructureHxTypeEnum.DATE:
                    sb.Append("Date");
                    break;
                case Structure.StructureHxTypeEnum.BOOL:
                    if (col.nullable)
                        sb.Append("Null<Bool>");
                    else
                        sb.Append("Bool");
                    break;
                case Structure.StructureHxTypeEnum.UUID:
                    sb.Append("nMorph.framework.common.datatypes.UUID");
                    break;
            }
            return sb.ToString();
        }

        private static string HxValType(Structure.StructureColumn col)
        {
            StringBuilder sb = new StringBuilder();
            switch (col.HxType)
            {
                case Structure.StructureHxTypeEnum.STRING:
                    sb.Append("Val.string");
                    break;
                case Structure.StructureHxTypeEnum.INT:
                    sb.Append("Val.int");
                    break;
                case Structure.StructureHxTypeEnum.INT64:
                    sb.Append("Val.int64");
                    break;
                case Structure.StructureHxTypeEnum.FLOAT:
                    sb.Append("Val.float");
                    break;
                case Structure.StructureHxTypeEnum.BYTES:
                    sb.Append("Val.bytes");
                    break;
                case Structure.StructureHxTypeEnum.DATE:
                    sb.Append("Val.date");
                    break;
                case Structure.StructureHxTypeEnum.BOOL:
                    sb.Append("Val.bool");
                    break;
                case Structure.StructureHxTypeEnum.UUID:
                    sb.Append("Val.uuid");
                    break;
            }
            return sb.ToString();
        }

        private static string HXStaticCol(string name, Structure.StructureColumn col)
        {
            StringBuilder sb = new StringBuilder();
            switch (col.DbType)
            {
                case Structure.StructureDBTypeEnum.SMALLINTEGER:
                    sb.Append("	public static var col_" + col.name + ": SmallIntegerSentence = new SmallIntegerSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.INTEGER:
                    sb.Append("	public static var col_" + col.name + ": IntegerSentence = new IntegerSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.BIGINTEGER:
                    sb.Append("	public static var col_" + col.name + ": BigIntegerSentence = new BigIntegerSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.FLOAT:
                    sb.Append("	public static var col_" + col.name + ": FloatSentence = new FloatSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.REAL:
                    sb.Append("	public static var col_" + col.name + ": RealSentence = new RealSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.DECIMAL:
                    sb.Append("	public static var col_" + col.name + ": DecimalSentence = new DecimalSentence(\"" + name + "\", \"" + col.name + "\", " + col.lenght.ToString() + ", " + col.scale.ToString() + ", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.CHAR:
                    sb.Append("	public static var col_" + col.name + ": CharSentence = new CharSentence(\"" + name + "\", \"" + col.name + "\", " + col.lenght.ToString() + ", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.VARCHAR:
                    sb.Append("	public static var col_" + col.name + ": VarcharSentence = new VarcharSentence(\"" + name + "\", \"" + col.name + "\", " + col.lenght.ToString() + ", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.BIGTEXT:
                    sb.Append("	public static var col_" + col.name + ": BigTextSentence = new BigTextSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.NCHAR:
                    sb.Append("	public static var col_" + col.name + ": NCharSentence = new NCharSentence(\"" + name + "\", \"" + col.name + "\", " + col.lenght.ToString() + ", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.NVARCHAR:
                    sb.Append("	public static var col_" + col.name + ": NVarcharSentence = new NVarcharSentence(\"" + name + "\", \"" + col.name + "\", " + col.lenght.ToString() + ", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.NBIGTEXT:
                    sb.Append("	public static var col_" + col.name + ": NBigTextSentence = new NBigTextSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.BINARY:
                    sb.Append("	public static var col_" + col.name + ": BinarySentence = new BinarySentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.DATETIME:
                    sb.Append("	public static var col_" + col.name + ": DateTimeSentence = new DateTimeSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.BOOLEAN:
                    sb.Append("	public static var col_" + col.name + ": BooleanSentence = new BooleanSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
                case Structure.StructureDBTypeEnum.UUID:
                    sb.Append("	public static var col_" + col.name + ": UUIDSentence = new UUIDSentence(\"" + name + "\", \"" + col.name + "\", " + (col.nullable ? "NullableEnum.NULL" : "NullableEnum.NOTNULL") + ", " + (col.isPrimaryKey ? "true" : "false") + ");"); sb.Append(Environment.NewLine);
                    break;
            }
            return sb.ToString();
        }


        private static void GenerateDAOBase(Structure.Structure structure, string daoFolder)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("package nMorph.core.db." + structure.name.Replace(" ", "").ToLower() + ";"); sb.Append(Environment.NewLine);

            sb.Append("import nMorph.core.db." + structure.name.Replace(" ", "").ToLower() + ".*;"); sb.Append(Environment.NewLine);

            sb.Append("/**"); sb.Append(Environment.NewLine);
            sb.Append(" * ..."); sb.Append(Environment.NewLine);
            sb.Append(" * @author Smartwork"); sb.Append(Environment.NewLine);
            sb.Append(" */"); sb.Append(Environment.NewLine);
            sb.Append("class DAO "); sb.Append(Environment.NewLine);
            sb.Append("{"); sb.Append(Environment.NewLine);
            sb.Append("	public function new() "); sb.Append(Environment.NewLine);
            sb.Append("	{"); sb.Append(Environment.NewLine);
            sb.Append("		"); sb.Append(Environment.NewLine);
            sb.Append("	}"); sb.Append(Environment.NewLine);
            sb.Append("	"); sb.Append(Environment.NewLine);
            foreach (var table in structure.tables)
            {
                if (table.name.ToLower() == "sysdiagrams") continue;
                sb.Append("	public static var " + table.name + "_table:" + table.name + ";"); sb.Append(Environment.NewLine);
            }
            foreach (var view in structure.views)
            {
                sb.Append("	public static var " + view.name + "_view:" + view.name + ";"); sb.Append(Environment.NewLine);
            }
            sb.Append("	"); sb.Append(Environment.NewLine);
            sb.Append("}"); sb.Append(Environment.NewLine);

            //sb.ToString();
            System.IO.File.WriteAllText(daoFolder + "DAO.hx", sb.ToString());
        }
    }
}
