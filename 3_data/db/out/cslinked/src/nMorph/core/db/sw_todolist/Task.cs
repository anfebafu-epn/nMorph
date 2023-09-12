// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.core.db.sw_todolist {
	public class Task : global::nMorph.framework.orm.client.ModelObject {
		
		static Task() {
			unchecked{
				global::nMorph.core.db.sw_todolist.Task.__rtti = "<class path=\"nMorph.core.db.sw_todolist.Task\" params=\"\">\n\t<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\n\t<table public=\"1\" expr=\"new TableSource(&quot;Task&quot;)\" line=\"33\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\n\t\t<meta><m n=\":value\"><e>new TableSource(\"Task\")</e></m></meta>\n\t\t<haxe_doc>* referencia a tabla para consultas</haxe_doc>\n\t</table>\n\t<col_TaskId public=\"1\" expr=\"new UUIDSentence(&quot;Task&quot;, &quot;TaskId&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\n\t\t<meta><m n=\":value\"><e>new UUIDSentence(\"Task\", \"TaskId\", NullableEnum.NOTNULL, true)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna TaskId</haxe_doc>\n\t</col_TaskId>\n\t<col_PersonId public=\"1\" expr=\"new UUIDSentence(&quot;Task&quot;, &quot;PersonId&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\n\t\t<meta><m n=\":value\"><e>new UUIDSentence(\"Task\", \"PersonId\", NullableEnum.NULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna PersonId</haxe_doc>\n\t</col_PersonId>\n\t<col_CategoryId public=\"1\" expr=\"new UUIDSentence(&quot;Task&quot;, &quot;CategoryId&quot;, NullableEnum.NULL, false)\" line=\"47\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\n\t\t<meta><m n=\":value\"><e>new UUIDSentence(\"Task\", \"CategoryId\", NullableEnum.NULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna CategoryId</haxe_doc>\n\t</col_CategoryId>\n\t<col_Title public=\"1\" expr=\"new VarcharSentence(&quot;Task&quot;, &quot;Title&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"52\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\n\t\t<meta><m n=\":value\"><e>new VarcharSentence(\"Task\", \"Title\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna Title</haxe_doc>\n\t</col_Title>\n\t<col_Description public=\"1\" expr=\"new VarcharSentence(&quot;Task&quot;, &quot;Description&quot;, 500, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\n\t\t<meta><m n=\":value\"><e>new VarcharSentence(\"Task\", \"Description\", 500, NullableEnum.NULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna Description</haxe_doc>\n\t</col_Description>\n\t<col_CreatedAt public=\"1\" expr=\"new DateTimeSentence(&quot;Task&quot;, &quot;CreatedAt&quot;, NullableEnum.NOTNULL, false)\" line=\"62\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\n\t\t<meta><m n=\":value\"><e>new DateTimeSentence(\"Task\", \"CreatedAt\", NullableEnum.NOTNULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna CreatedAt</haxe_doc>\n\t</col_CreatedAt>\n\t<col_DueDate public=\"1\" expr=\"new DateTimeSentence(&quot;Task&quot;, &quot;DueDate&quot;, NullableEnum.NULL, false)\" line=\"67\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\n\t\t<meta><m n=\":value\"><e>new DateTimeSentence(\"Task\", \"DueDate\", NullableEnum.NULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna DueDate</haxe_doc>\n\t</col_DueDate>\n\t<col_IsCompleted public=\"1\" expr=\"new BooleanSentence(&quot;Task&quot;, &quot;IsCompleted&quot;, NullableEnum.NOTNULL, false)\" line=\"72\" static=\"1\">\n\t\t<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\n\t\t<meta><m n=\":value\"><e>new BooleanSentence(\"Task\", \"IsCompleted\", NullableEnum.NOTNULL, false)</e></m></meta>\n\t\t<haxe_doc>* Referencia a columna IsCompleted</haxe_doc>\n\t</col_IsCompleted>\n\t<WHERE public=\"1\" set=\"method\" line=\"80\" static=\"1\">\n\t\t<f a=\"Condition\">\n\t\t\t<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\n\t\t\t<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\n\t\t</f>\n\t\t<haxe_doc>* inicio r\u00e1pido de filtro\n\t * @param\tFiltro\n\t * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\n\t</WHERE>\n\t<BYPK public=\"1\" set=\"method\" line=\"89\" static=\"1\">\n\t\t<f a=\"val_TaskId\">\n\t\t\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n\t\t\t<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\n\t\t</f>\n\t\t<haxe_doc>* filtro por clave primaria\n\t * @param\tvalor de clave primaria\n\t * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\n\t</BYPK>\n\t<TaskId get=\"accessor\" set=\"null\">\n\t\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</TaskId>\n\t<get_TaskId public=\"1\" set=\"method\" line=\"95\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_TaskId>\n\t<PersonId get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</PersonId>\n\t<get_PersonId public=\"1\" set=\"method\" line=\"102\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PersonId>\n\t<set_PersonId public=\"1\" set=\"method\" line=\"106\"><f a=\"value\">\n\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n</f></set_PersonId>\n\t<CategoryId get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</CategoryId>\n\t<get_CategoryId public=\"1\" set=\"method\" line=\"116\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_CategoryId>\n\t<set_CategoryId public=\"1\" set=\"method\" line=\"120\"><f a=\"value\">\n\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n\t<c path=\"nMorph.framework.common.datatypes.UUID\"/>\n</f></set_CategoryId>\n\t<Title get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"String\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</Title>\n\t<get_Title public=\"1\" set=\"method\" line=\"130\"><f a=\"\"><c path=\"String\"/></f></get_Title>\n\t<set_Title public=\"1\" set=\"method\" line=\"134\"><f a=\"value\">\n\t<c path=\"String\"/>\n\t<c path=\"String\"/>\n</f></set_Title>\n\t<Description get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"String\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</Description>\n\t<get_Description public=\"1\" set=\"method\" line=\"144\"><f a=\"\"><c path=\"String\"/></f></get_Description>\n\t<set_Description public=\"1\" set=\"method\" line=\"148\"><f a=\"value\">\n\t<c path=\"String\"/>\n\t<c path=\"String\"/>\n</f></set_Description>\n\t<CreatedAt get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"Date\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</CreatedAt>\n\t<get_CreatedAt public=\"1\" set=\"method\" line=\"158\"><f a=\"\"><c path=\"Date\"/></f></get_CreatedAt>\n\t<set_CreatedAt public=\"1\" set=\"method\" line=\"162\"><f a=\"value\">\n\t<c path=\"Date\"/>\n\t<c path=\"Date\"/>\n</f></set_CreatedAt>\n\t<DueDate get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"Date\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</DueDate>\n\t<get_DueDate public=\"1\" set=\"method\" line=\"172\"><f a=\"\"><c path=\"Date\"/></f></get_DueDate>\n\t<set_DueDate public=\"1\" set=\"method\" line=\"176\"><f a=\"value\">\n\t<c path=\"Date\"/>\n\t<c path=\"Date\"/>\n</f></set_DueDate>\n\t<IsCompleted get=\"accessor\" set=\"accessor\">\n\t\t<x path=\"Bool\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</IsCompleted>\n\t<get_IsCompleted public=\"1\" set=\"method\" line=\"186\"><f a=\"\"><x path=\"Bool\"/></f></get_IsCompleted>\n\t<set_IsCompleted public=\"1\" set=\"method\" line=\"190\"><f a=\"value\">\n\t<x path=\"Bool\"/>\n\t<x path=\"Bool\"/>\n</f></set_IsCompleted>\n\t<new public=\"1\" set=\"method\" line=\"25\">\n\t\t<f a=\"\"><x path=\"Void\"/></f>\n\t\t<haxe_doc>* Constructor de la clase Task que tiene equivalencia con la tabla de la base de datos</haxe_doc>\n\t</new>\n\t<haxe_doc>* ...\n * @author Smartwork</haxe_doc>\n\t<meta>\n\t\t<m n=\":hxGen\"/>\n\t\t<m n=\":keepSub\"/>\n\t\t<m n=\":rtti\"/>\n\t</meta>\n</class>";
				global::nMorph.core.db.sw_todolist.Task.table = ((global::nMorph.framework.orm.interfaces.ISource) (new global::nMorph.framework.orm.common.sources.TableSource(((string) ("Task") ))) );
				global::nMorph.core.db.sw_todolist.Task.col_TaskId = new global::nMorph.framework.orm.common.fields.UUIDSentence(((string) ("Task") ), ((string) ("TaskId") ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NOTNULL) ), ((bool) (true) ));
				global::nMorph.core.db.sw_todolist.Task.col_PersonId = new global::nMorph.framework.orm.common.fields.UUIDSentence(((string) ("Task") ), ((string) ("PersonId") ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NULL) ), ((bool) (false) ));
				global::nMorph.core.db.sw_todolist.Task.col_CategoryId = new global::nMorph.framework.orm.common.fields.UUIDSentence(((string) ("Task") ), ((string) ("CategoryId") ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NULL) ), ((bool) (false) ));
				global::nMorph.core.db.sw_todolist.Task.col_Title = new global::nMorph.framework.orm.common.fields.VarcharSentence(((string) ("Task") ), ((string) ("Title") ), ((int) (100) ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NOTNULL) ), ((bool) (false) ));
				global::nMorph.core.db.sw_todolist.Task.col_Description = new global::nMorph.framework.orm.common.fields.VarcharSentence(((string) ("Task") ), ((string) ("Description") ), ((int) (500) ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NULL) ), ((bool) (false) ));
				global::nMorph.core.db.sw_todolist.Task.col_CreatedAt = new global::nMorph.framework.orm.common.fields.DateTimeSentence(((string) ("Task") ), ((string) ("CreatedAt") ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NOTNULL) ), ((bool) (false) ));
				global::nMorph.core.db.sw_todolist.Task.col_DueDate = new global::nMorph.framework.orm.common.fields.DateTimeSentence(((string) ("Task") ), ((string) ("DueDate") ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NULL) ), ((bool) (false) ));
				global::nMorph.core.db.sw_todolist.Task.col_IsCompleted = new global::nMorph.framework.orm.common.fields.BooleanSentence(((string) ("Task") ), ((string) ("IsCompleted") ), ((global::nMorph.framework.orm.common.enums.NullableEnum) (global::nMorph.framework.orm.common.enums.NullableEnum.NOTNULL) ), ((bool) (false) ));
			}
		}
		
		
		public Task(global::haxe.lang.EmptyObject empty) : base(global::haxe.lang.EmptyObject.EMPTY) {
		}
		
		
		public Task() : base(global::haxe.lang.EmptyObject.EMPTY) {
			global::nMorph.core.db.sw_todolist.Task.__hx_ctor_nMorph_core_db_sw_todolist_Task(this);
		}
		
		
		protected static void __hx_ctor_nMorph_core_db_sw_todolist_Task(global::nMorph.core.db.sw_todolist.Task __hx_this) {
			global::nMorph.framework.orm.client.ModelObject.__hx_ctor_nMorph_framework_orm_client_ModelObject(__hx_this);
		}
		
		
		public static new string __rtti;
		
		public static global::nMorph.framework.orm.interfaces.ISource table;
		
		public static global::nMorph.framework.orm.common.fields.UUIDSentence col_TaskId;
		
		public static global::nMorph.framework.orm.common.fields.UUIDSentence col_PersonId;
		
		public static global::nMorph.framework.orm.common.fields.UUIDSentence col_CategoryId;
		
		public static global::nMorph.framework.orm.common.fields.VarcharSentence col_Title;
		
		public static global::nMorph.framework.orm.common.fields.VarcharSentence col_Description;
		
		public static global::nMorph.framework.orm.common.fields.DateTimeSentence col_CreatedAt;
		
		public static global::nMorph.framework.orm.common.fields.DateTimeSentence col_DueDate;
		
		public static global::nMorph.framework.orm.common.fields.BooleanSentence col_IsCompleted;
		
		public static global::nMorph.framework.orm.common.clauses.WhereClause WHERE(global::nMorph.framework.orm.interfaces.ICondition Condition) {
			return global::nMorph.framework.orm.lang.SQL.SELECT(null, null).FROM(global::nMorph.core.db.sw_todolist.Task.table).WHERE(Condition);
		}
		
		
		public static global::nMorph.framework.orm.common.clauses.WhereClause BYPK(global::nMorph.framework.common.datatypes.UUID val_TaskId) {
			return global::nMorph.framework.orm.lang.SQL.SELECT(null, null).FROM(global::nMorph.core.db.sw_todolist.Task.table).WHERE(global::nMorph.framework.orm.common.conditions.Condition.SET(global::nMorph.core.db.sw_todolist.Task.col_TaskId, global::nMorph.framework.orm.common.enums.Op.Equal, global::nMorph.framework.orm.common.sentences.Val.uuid(val_TaskId)));
		}
		
		
		public global::nMorph.framework.common.datatypes.UUID TaskId;
		
		public virtual global::nMorph.framework.common.datatypes.UUID get_TaskId() {
			return this.TaskId;
		}
		
		
		public global::nMorph.framework.common.datatypes.UUID PersonId;
		
		public virtual global::nMorph.framework.common.datatypes.UUID get_PersonId() {
			return this.PersonId;
		}
		
		
		public virtual global::nMorph.framework.common.datatypes.UUID set_PersonId(global::nMorph.framework.common.datatypes.UUID @value) {
			if (( this.get_TrackChanges() && ( this.get_PersonId() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_PersonId) ), ((object) (this.get_PersonId()) ), ((object) (@value) )));
			}
			
			return this.PersonId = @value;
		}
		
		
		public global::nMorph.framework.common.datatypes.UUID CategoryId;
		
		public virtual global::nMorph.framework.common.datatypes.UUID get_CategoryId() {
			return this.CategoryId;
		}
		
		
		public virtual global::nMorph.framework.common.datatypes.UUID set_CategoryId(global::nMorph.framework.common.datatypes.UUID @value) {
			if (( this.get_TrackChanges() && ( this.get_CategoryId() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_CategoryId) ), ((object) (this.get_CategoryId()) ), ((object) (@value) )));
			}
			
			return this.CategoryId = @value;
		}
		
		
		public string Title;
		
		public virtual string get_Title() {
			return this.Title;
		}
		
		
		public virtual string set_Title(string @value) {
			if (( this.get_TrackChanges() && ( this.get_Title() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_Title) ), ((object) (this.get_Title()) ), ((object) (@value) )));
			}
			
			return this.Title = @value;
		}
		
		
		public string Description;
		
		public virtual string get_Description() {
			return this.Description;
		}
		
		
		public virtual string set_Description(string @value) {
			if (( this.get_TrackChanges() && ( this.get_Description() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_Description) ), ((object) (this.get_Description()) ), ((object) (@value) )));
			}
			
			return this.Description = @value;
		}
		
		
		public global::Date CreatedAt;
		
		public virtual global::Date get_CreatedAt() {
			return this.CreatedAt;
		}
		
		
		public virtual global::Date set_CreatedAt(global::Date @value) {
			if (( this.get_TrackChanges() && ( this.get_CreatedAt() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_CreatedAt) ), ((object) (this.get_CreatedAt()) ), ((object) (@value) )));
			}
			
			return this.CreatedAt = @value;
		}
		
		
		public global::Date DueDate;
		
		public virtual global::Date get_DueDate() {
			return this.DueDate;
		}
		
		
		public virtual global::Date set_DueDate(global::Date @value) {
			if (( this.get_TrackChanges() && ( this.get_DueDate() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_DueDate) ), ((object) (this.get_DueDate()) ), ((object) (@value) )));
			}
			
			return this.DueDate = @value;
		}
		
		
		public bool IsCompleted;
		
		public virtual bool get_IsCompleted() {
			return this.IsCompleted;
		}
		
		
		public virtual bool set_IsCompleted(bool @value) {
			if (( this.get_TrackChanges() && ( this.get_IsCompleted() != @value ) )) {
				this.AddChange(new global::nMorph.framework.orm.client.ChangeItem(((global::nMorph.framework.orm.common.sentences.FieldSentence) (global::nMorph.core.db.sw_todolist.Task.col_IsCompleted) ), ((object) (this.get_IsCompleted()) ), ((object) (@value) )));
			}
			
			return this.IsCompleted = @value;
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 300675105:
					{
						if (handleProperties) {
							this.set_IsCompleted(global::haxe.lang.Runtime.toBool(@value));
							return @value;
						}
						else {
							this.IsCompleted = global::haxe.lang.Runtime.toBool(@value);
							return @value;
						}
						
					}
					
					
					case 673831906:
					{
						if (handleProperties) {
							this.set_DueDate(((global::Date) (@value) ));
							return @value;
						}
						else {
							this.DueDate = ((global::Date) (@value) );
							return @value;
						}
						
					}
					
					
					case 1808079067:
					{
						if (handleProperties) {
							this.set_CreatedAt(((global::Date) (@value) ));
							return @value;
						}
						else {
							this.CreatedAt = ((global::Date) (@value) );
							return @value;
						}
						
					}
					
					
					case 1129291996:
					{
						if (handleProperties) {
							this.set_Description(global::haxe.lang.Runtime.toString(@value));
							return @value;
						}
						else {
							this.Description = global::haxe.lang.Runtime.toString(@value);
							return @value;
						}
						
					}
					
					
					case 594052472:
					{
						if (handleProperties) {
							this.set_Title(global::haxe.lang.Runtime.toString(@value));
							return @value;
						}
						else {
							this.Title = global::haxe.lang.Runtime.toString(@value);
							return @value;
						}
						
					}
					
					
					case 2008853145:
					{
						if (handleProperties) {
							this.set_CategoryId(((global::nMorph.framework.common.datatypes.UUID) (@value) ));
							return @value;
						}
						else {
							this.CategoryId = ((global::nMorph.framework.common.datatypes.UUID) (@value) );
							return @value;
						}
						
					}
					
					
					case 1563542256:
					{
						if (handleProperties) {
							this.set_PersonId(((global::nMorph.framework.common.datatypes.UUID) (@value) ));
							return @value;
						}
						else {
							this.PersonId = ((global::nMorph.framework.common.datatypes.UUID) (@value) );
							return @value;
						}
						
					}
					
					
					case 1009618592:
					{
						this.TaskId = ((global::nMorph.framework.common.datatypes.UUID) (@value) );
						return @value;
					}
					
					
					default:
					{
						return base.__hx_setField(field, hash, @value, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override object __hx_getField(string field, int hash, bool throwErrors, bool isCheck, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1318659268:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_IsCompleted", 1318659268)) );
					}
					
					
					case 1389209528:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_IsCompleted", 1389209528)) );
					}
					
					
					case 300675105:
					{
						return ( (handleProperties) ? (this.get_IsCompleted()) : (this.IsCompleted) );
					}
					
					
					case 949043973:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_DueDate", 949043973)) );
					}
					
					
					case 774126585:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_DueDate", 774126585)) );
					}
					
					
					case 673831906:
					{
						return ( (handleProperties) ? (this.get_DueDate()) : (this.DueDate) );
					}
					
					
					case 1915670206:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_CreatedAt", 1915670206)) );
					}
					
					
					case 757656754:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_CreatedAt", 757656754)) );
					}
					
					
					case 1808079067:
					{
						return ( (handleProperties) ? (this.get_CreatedAt()) : (this.CreatedAt) );
					}
					
					
					case 2147276159:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_Description", 2147276159)) );
					}
					
					
					case 70342771:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_Description", 70342771)) );
					}
					
					
					case 1129291996:
					{
						return ( (handleProperties) ? (this.get_Description()) : (this.Description) );
					}
					
					
					case 1247989211:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_Title", 1247989211)) );
					}
					
					
					case 1729225167:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_Title", 1729225167)) );
					}
					
					
					case 594052472:
					{
						return ( (handleProperties) ? (this.get_Title()) : (this.Title) );
					}
					
					
					case 231873366:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_CategoryId", 231873366)) );
					}
					
					
					case 1840394978:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_CategoryId", 1840394978)) );
					}
					
					
					case 2008853145:
					{
						return ( (handleProperties) ? (this.get_CategoryId()) : (this.CategoryId) );
					}
					
					
					case 658807405:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_PersonId", 658807405)) );
					}
					
					
					case 306935545:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_PersonId", 306935545)) );
					}
					
					
					case 1563542256:
					{
						return ( (handleProperties) ? (this.get_PersonId()) : (this.PersonId) );
					}
					
					
					case 750059113:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_TaskId", 750059113)) );
					}
					
					
					case 1009618592:
					{
						return ( (handleProperties) ? (this.get_TaskId()) : (this.TaskId) );
					}
					
					
					default:
					{
						return base.__hx_getField(field, hash, throwErrors, isCheck, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override object __hx_invokeField(string field, int hash, object[] dynargs) {
			unchecked {
				switch (hash) {
					case 1318659268:
					{
						return this.set_IsCompleted(global::haxe.lang.Runtime.toBool(dynargs[0]));
					}
					
					
					case 1389209528:
					{
						return this.get_IsCompleted();
					}
					
					
					case 949043973:
					{
						return this.set_DueDate(((global::Date) (dynargs[0]) ));
					}
					
					
					case 774126585:
					{
						return this.get_DueDate();
					}
					
					
					case 1915670206:
					{
						return this.set_CreatedAt(((global::Date) (dynargs[0]) ));
					}
					
					
					case 757656754:
					{
						return this.get_CreatedAt();
					}
					
					
					case 2147276159:
					{
						return this.set_Description(global::haxe.lang.Runtime.toString(dynargs[0]));
					}
					
					
					case 70342771:
					{
						return this.get_Description();
					}
					
					
					case 1247989211:
					{
						return this.set_Title(global::haxe.lang.Runtime.toString(dynargs[0]));
					}
					
					
					case 1729225167:
					{
						return this.get_Title();
					}
					
					
					case 231873366:
					{
						return this.set_CategoryId(((global::nMorph.framework.common.datatypes.UUID) (dynargs[0]) ));
					}
					
					
					case 1840394978:
					{
						return this.get_CategoryId();
					}
					
					
					case 658807405:
					{
						return this.set_PersonId(((global::nMorph.framework.common.datatypes.UUID) (dynargs[0]) ));
					}
					
					
					case 306935545:
					{
						return this.get_PersonId();
					}
					
					
					case 750059113:
					{
						return this.get_TaskId();
					}
					
					
					default:
					{
						return base.__hx_invokeField(field, hash, dynargs);
					}
					
				}
				
			}
		}
		
		
		public override void __hx_getFields(global::Array<string> baseArr) {
			baseArr.push("IsCompleted");
			baseArr.push("DueDate");
			baseArr.push("CreatedAt");
			baseArr.push("Description");
			baseArr.push("Title");
			baseArr.push("CategoryId");
			baseArr.push("PersonId");
			baseArr.push("TaskId");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}


