using nMorph.framework.orm.db_gen.Structure;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace nMorph.framework.orm.db_gen.Generator
{
    public class DB_Reader
    {
        public static Structure.Structure ReadStructure(DatabaseEngineEnum DatabaseEngine, string ConnectionString)
        {
            Structure.Structure structure = null;

            switch (DatabaseEngine)
            {
                case DatabaseEngineEnum.SQLServer:

                    structure = DiscoverStructure(ConnectionString);

                    break;
                default:
                    // NO IMPLEMENTADO
                    break;
            }

            return structure;
        }

        private static Structure.Structure DiscoverStructure(string connectionString)
        {
            // objeto para reflejar la estructura de la base de datos
            Structure.Structure structure = new Structure.Structure();

            // Descubrimiento de tablas
            using (SqlConnection conn = new SqlConnection(connectionString))
            {
                SqlCommand cmd = new SqlCommand();
                cmd.CommandText = "select * from sys.tables; select * from sys.views;select *, isnull((select top 1 1 from sys.indexes ix inner join sys.index_columns ixc on ixc.object_id = ix.object_id and ixc.index_id = ix.index_id where ix.is_primary_key = 1 and ixc.column_id = c.column_id), 0) as isPK from sys.columns c;";
                cmd.CommandType = System.Data.CommandType.Text;
                cmd.Connection = conn;
                conn.Open();
                SqlDataReader reader = cmd.ExecuteReader();

                //Nombre de la base de datos
                structure.name = conn.Database;

                int rs = 1;
                while (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        if (rs == 1) // tablas
                        {
                            if (structure.tables == null) structure.tables = new List<StructureTable>();

                            StructureTable table = new StructureTable();
                            table.name = reader.GetString(reader.GetOrdinal("name"));
                            table.objectid = reader.GetInt32(reader.GetOrdinal("object_id"));
                            structure.tables.Add(table);
                        }
                        else if (rs == 2) // vistas
                        {
                            if (structure.views == null) structure.views = new List<StructureView>();

                            StructureView view = new StructureView();
                            view.name = reader.GetString(reader.GetOrdinal("name"));
                            view.objectid = reader.GetInt32(reader.GetOrdinal("object_id"));
                            structure.views.Add(view);
                        }
                        else if (rs == 3) // columnas
                        {
                            int table_objid = reader.GetInt32(reader.GetOrdinal("object_id"));

                            StructureTable table = structure.tables.FirstOrDefault(t => t.objectid == table_objid);

                            if (table != null)
                            {
                                if (table.columns == null) table.columns = new List<StructureColumn>();
                                StructureColumn column = ReadColumns(reader);
                                table.columns.Add(column);
                            }
                            else
                            {
                                StructureView view = structure.views.FirstOrDefault(t => t.objectid == table_objid);

                                // si la columna no está ni en una tabla ni en una vista
                                if (view == null) continue;

                                if (view.columns == null) view.columns = new List<StructureColumn>();
                                StructureColumn column = ReadColumns(reader);
                                view.columns.Add(column);
                            }
                        }
                    }
                    reader.NextResult();
                    rs++;
                }

                conn.Close();
            }

            return structure;
        }

        private static StructureColumn ReadColumns(SqlDataReader reader)
        {
            StructureColumn column = new StructureColumn();
            column.name = reader.GetString(reader.GetOrdinal("name"));
            column.columnid = reader.GetInt32(reader.GetOrdinal("column_id"));
            column.DbType = MapDbType(reader.GetInt32(reader.GetOrdinal("user_type_id")));
            column.HxType = MapHxType(reader.GetInt32(reader.GetOrdinal("user_type_id")));
            column.isPrimaryKey = reader.GetInt32(reader.GetOrdinal("isPK")) == 1;
            column.lenght = reader.GetInt16(reader.GetOrdinal("max_length"));
            column.precision = reader.GetByte(reader.GetOrdinal("precision"));
            column.scale = reader.GetByte(reader.GetOrdinal("scale"));
            column.nullable = reader.GetBoolean(reader.GetOrdinal("is_nullable"));
            return column;
        }

        private static StructureDBTypeEnum MapDbType(int userTypeID)
        {
            if (userTypeID == 34) return StructureDBTypeEnum.BINARY;
            if (userTypeID == 35) return StructureDBTypeEnum.BIGTEXT;
            if (userTypeID == 36) return StructureDBTypeEnum.UUID;
            if (userTypeID == 40) return StructureDBTypeEnum.DATETIME;
            if (userTypeID == 41) return StructureDBTypeEnum.DATETIME;
            if (userTypeID == 42) return StructureDBTypeEnum.DATETIME;
            //if (userTypeID == 43) return StructureDBTypeEnum.datetimeoffset;
            if (userTypeID == 48) return StructureDBTypeEnum.SMALLINTEGER;
            if (userTypeID == 52) return StructureDBTypeEnum.SMALLINTEGER;
            if (userTypeID == 56) return StructureDBTypeEnum.INTEGER;
            if (userTypeID == 58) return StructureDBTypeEnum.DATETIME;
            if (userTypeID == 59) return StructureDBTypeEnum.FLOAT;
            if (userTypeID == 60) return StructureDBTypeEnum.DECIMAL;
            if (userTypeID == 61) return StructureDBTypeEnum.DATETIME;
            if (userTypeID == 62) return StructureDBTypeEnum.FLOAT;
            //if (userTypeID == 98) return StructureDBTypeEnum.BINARY;
            if (userTypeID == 99) return StructureDBTypeEnum.NBIGTEXT;
            if (userTypeID == 104) return StructureDBTypeEnum.BOOLEAN;
            if (userTypeID == 106) return StructureDBTypeEnum.DECIMAL;
            if (userTypeID == 108) return StructureDBTypeEnum.DECIMAL;
            if (userTypeID == 122) return StructureDBTypeEnum.DECIMAL;
            if (userTypeID == 127) return StructureDBTypeEnum.BIGINTEGER;
            //if (userTypeID == 128) return StructureDBTypeEnum.hierarchyid;
            //if (userTypeID == 129) return StructureDBTypeEnum.geometry;
            //if (userTypeID == 130) return StructureDBTypeEnum.geography;
            if (userTypeID == 165) return StructureDBTypeEnum.BINARY;
            if (userTypeID == 167) return StructureDBTypeEnum.VARCHAR;
            if (userTypeID == 173) return StructureDBTypeEnum.BINARY;
            if (userTypeID == 175) return StructureDBTypeEnum.CHAR;
            //if (userTypeID == 189) return StructureDBTypeEnum.timestamp;
            if (userTypeID == 231) return StructureDBTypeEnum.NVARCHAR;
            if (userTypeID == 239) return StructureDBTypeEnum.NCHAR;
            if (userTypeID == 241) return StructureDBTypeEnum.VARCHAR;
            if (userTypeID == 256) return StructureDBTypeEnum.VARCHAR;

            return StructureDBTypeEnum.VARCHAR;
        }

        private static StructureHxTypeEnum MapHxType(int userTypeID)
        {
            if (userTypeID == 34) return StructureHxTypeEnum.BYTES;
            if (userTypeID == 35) return StructureHxTypeEnum.STRING;
            if (userTypeID == 36) return StructureHxTypeEnum.UUID;
            if (userTypeID == 40) return StructureHxTypeEnum.DATE;
            if (userTypeID == 41) return StructureHxTypeEnum.DATE;
            if (userTypeID == 42) return StructureHxTypeEnum.DATE;
            //if (userTypeID == 43) return StructureHxTypeEnum.datetimeoffset;
            if (userTypeID == 48) return StructureHxTypeEnum.INT;
            if (userTypeID == 52) return StructureHxTypeEnum.INT;
            if (userTypeID == 56) return StructureHxTypeEnum.INT;
            if (userTypeID == 58) return StructureHxTypeEnum.DATE;
            if (userTypeID == 59) return StructureHxTypeEnum.FLOAT;
            if (userTypeID == 60) return StructureHxTypeEnum.FLOAT;
            if (userTypeID == 61) return StructureHxTypeEnum.DATE;
            if (userTypeID == 62) return StructureHxTypeEnum.FLOAT;
            //if (userTypeID == 98) return StructureHxTypeEnum.BINARY;
            if (userTypeID == 99) return StructureHxTypeEnum.STRING;
            if (userTypeID == 104) return StructureHxTypeEnum.BOOL;
            if (userTypeID == 106) return StructureHxTypeEnum.FLOAT;
            if (userTypeID == 108) return StructureHxTypeEnum.FLOAT;
            if (userTypeID == 122) return StructureHxTypeEnum.FLOAT;
            if (userTypeID == 127) return StructureHxTypeEnum.INT64;
            //if (userTypeID == 128) return StructureHxTypeEnum.hierarchyid;
            //if (userTypeID == 129) return StructureHxTypeEnum.geometry;
            //if (userTypeID == 130) return StructureHxTypeEnum.geography;
            if (userTypeID == 165) return StructureHxTypeEnum.BYTES;
            if (userTypeID == 167) return StructureHxTypeEnum.STRING;
            if (userTypeID == 173) return StructureHxTypeEnum.BYTES;
            if (userTypeID == 175) return StructureHxTypeEnum.STRING;
            //if (userTypeID == 189) return StructureHxTypeEnum.timestamp;
            if (userTypeID == 231) return StructureHxTypeEnum.STRING;
            if (userTypeID == 239) return StructureHxTypeEnum.STRING;
            if (userTypeID == 241) return StructureHxTypeEnum.STRING;
            if (userTypeID == 256) return StructureHxTypeEnum.STRING;

            return StructureHxTypeEnum.STRING;
        }
    }
}
