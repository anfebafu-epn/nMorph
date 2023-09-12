package nMorph.core.db.sw_todolist;
import nMorph.framework.common.datatypes.UUID;

import nMorph.framework.orm.client.*;
import nMorph.framework.orm.interfaces.*;
import nMorph.framework.orm.lang.*;
import nMorph.framework.orm.tools.*;
import nMorph.framework.orm.common.clauses.*;
import nMorph.framework.orm.common.conditions.*;
import nMorph.framework.orm.common.enums.*;
import nMorph.framework.orm.common.fields.*;
import nMorph.framework.orm.common.sentences.*;
import nMorph.framework.orm.common.sources.*;
/**
 * ...
 * @author Smartwork
 */
@:keepSub @:rtti
class Task_VTA extends ModelObject
{
	/**
	 * Constructor de la clase Task_VTA que tiene equivalencia con la tabla de la base de datos
	 */
	public function new()
	{
		//inicializamos la herencia
		super();
		//inicialización de arreglos de objetos internos
	}
	/**
	 * referencia a vista para consultas
	 */
	public static var view:ISource = new ViewSource("Task_VTA");
	/**
	 * Referencia a columna TaskId
	 */
		public static var col_TaskId: UUIDSentence = new UUIDSentence("Task_VTA", "TaskId", NullableEnum.NOTNULL, true);

	/**
	 * Referencia a columna PersonId
	 */
		public static var col_PersonId: UUIDSentence = new UUIDSentence("Task_VTA", "PersonId", NullableEnum.NULL, false);

	/**
	 * Referencia a columna FullName
	 */
		public static var col_FullName: VarcharSentence = new VarcharSentence("Task_VTA", "FullName", 100, NullableEnum.NOTNULL, false);

	/**
	 * Referencia a columna Email
	 */
		public static var col_Email: VarcharSentence = new VarcharSentence("Task_VTA", "Email", 100, NullableEnum.NOTNULL, false);

	/**
	 * Referencia a columna CategoryId
	 */
		public static var col_CategoryId: UUIDSentence = new UUIDSentence("Task_VTA", "CategoryId", NullableEnum.NULL, false);

	/**
	 * Referencia a columna CategoryName
	 */
		public static var col_CategoryName: VarcharSentence = new VarcharSentence("Task_VTA", "CategoryName", 50, NullableEnum.NOTNULL, false);

	/**
	 * Referencia a columna Title
	 */
		public static var col_Title: VarcharSentence = new VarcharSentence("Task_VTA", "Title", 100, NullableEnum.NOTNULL, false);

	/**
	 * Referencia a columna Description
	 */
		public static var col_Description: VarcharSentence = new VarcharSentence("Task_VTA", "Description", 500, NullableEnum.NULL, false);

	/**
	 * Referencia a columna CreatedAt
	 */
		public static var col_CreatedAt: DateTimeSentence = new DateTimeSentence("Task_VTA", "CreatedAt", NullableEnum.NOTNULL, false);

	/**
	 * Referencia a columna DueDate
	 */
		public static var col_DueDate: DateTimeSentence = new DateTimeSentence("Task_VTA", "DueDate", NullableEnum.NULL, false);

	/**
	 * Referencia a columna IsCompleted
	 */
		public static var col_IsCompleted: BooleanSentence = new BooleanSentence("Task_VTA", "IsCompleted", NullableEnum.NOTNULL, false);

	/**
	 * inicio rápido de filtro
	 * @param	Filtro
	 * @return objeto para aplicar otras condiciones o ejecutar el query
	 */
	public static function WHERE(Condition:ICondition):WhereClause
	{
		return SQL.SELECT().FROM(view).WHERE(Condition);
	}
	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 */
	public static function BYPK(val_TaskId:nMorph.framework.common.datatypes.UUID):WhereClause
	{
		return SQL.SELECT().FROM(view).WHERE(Condition.SET(col_TaskId, Op.Equal, Val.uuid(val_TaskId)));
	}
	
	@:isVar var TaskId (get, null):nMorph.framework.common.datatypes.UUID;
	public function get_TaskId():nMorph.framework.common.datatypes.UUID
	{
		return TaskId;
	}

	
	@:isVar var PersonId (get, set):nMorph.framework.common.datatypes.UUID;
	public function get_PersonId():nMorph.framework.common.datatypes.UUID
	{
		return PersonId;
	}
	public function set_PersonId(value:nMorph.framework.common.datatypes.UUID):nMorph.framework.common.datatypes.UUID
	{
		//col_PersonId.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.PersonId != value) AddChange(new ChangeItem(col_PersonId, this.PersonId, value));
		return PersonId=value;
	}

	
	@:isVar var FullName (get, set):String;
	public function get_FullName():String
	{
		return FullName;
	}
	public function set_FullName(value:String):String
	{
		//col_FullName.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.FullName != value) AddChange(new ChangeItem(col_FullName, this.FullName, value));
		return FullName=value;
	}

	
	@:isVar var Email (get, set):String;
	public function get_Email():String
	{
		return Email;
	}
	public function set_Email(value:String):String
	{
		//col_Email.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.Email != value) AddChange(new ChangeItem(col_Email, this.Email, value));
		return Email=value;
	}

	
	@:isVar var CategoryId (get, set):nMorph.framework.common.datatypes.UUID;
	public function get_CategoryId():nMorph.framework.common.datatypes.UUID
	{
		return CategoryId;
	}
	public function set_CategoryId(value:nMorph.framework.common.datatypes.UUID):nMorph.framework.common.datatypes.UUID
	{
		//col_CategoryId.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.CategoryId != value) AddChange(new ChangeItem(col_CategoryId, this.CategoryId, value));
		return CategoryId=value;
	}

	
	@:isVar var CategoryName (get, set):String;
	public function get_CategoryName():String
	{
		return CategoryName;
	}
	public function set_CategoryName(value:String):String
	{
		//col_CategoryName.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.CategoryName != value) AddChange(new ChangeItem(col_CategoryName, this.CategoryName, value));
		return CategoryName=value;
	}

	
	@:isVar var Title (get, set):String;
	public function get_Title():String
	{
		return Title;
	}
	public function set_Title(value:String):String
	{
		//col_Title.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.Title != value) AddChange(new ChangeItem(col_Title, this.Title, value));
		return Title=value;
	}

	
	@:isVar var Description (get, set):String;
	public function get_Description():String
	{
		return Description;
	}
	public function set_Description(value:String):String
	{
		//col_Description.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.Description != value) AddChange(new ChangeItem(col_Description, this.Description, value));
		return Description=value;
	}

	
	@:isVar var CreatedAt (get, set):Date;
	public function get_CreatedAt():Date
	{
		return CreatedAt;
	}
	public function set_CreatedAt(value:Date):Date
	{
		//col_CreatedAt.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.CreatedAt != value) AddChange(new ChangeItem(col_CreatedAt, this.CreatedAt, value));
		return CreatedAt=value;
	}

	
	@:isVar var DueDate (get, set):Date;
	public function get_DueDate():Date
	{
		return DueDate;
	}
	public function set_DueDate(value:Date):Date
	{
		//col_DueDate.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.DueDate != value) AddChange(new ChangeItem(col_DueDate, this.DueDate, value));
		return DueDate=value;
	}

	
	@:isVar var IsCompleted (get, set):Bool;
	public function get_IsCompleted():Bool
	{
		return IsCompleted;
	}
	public function set_IsCompleted(value:Bool):Bool
	{
		//col_IsCompleted.ValidateDBCompatibility(value);//para registro de cambios
		
		if (TrackChanges && this.IsCompleted != value) AddChange(new ChangeItem(col_IsCompleted, this.IsCompleted, value));
		return IsCompleted=value;
	}

}
