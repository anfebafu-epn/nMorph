<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\nmorph_core;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ICondition;
use \nMorph\framework\orm\common\sentences\Val;
use \nMorph\framework\orm\client\ModelObject;
use \php\Boot;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\common\fields\DateTimeSentence;
use \nMorph\framework\orm\common\conditions\Condition;
use \nMorph\framework\orm\common\clauses\WhereClause;
use \nMorph\framework\orm\client\ChangeItem;
use \nMorph\framework\orm\common\fields\VarcharSentence;
use \nMorph\framework\common\datatypes\UUID;
use \nMorph\framework\orm\common\sources\TableSource;
use \nMorph\framework\orm\common\fields\SmallIntegerSentence;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class TR_Position extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.nmorph_core.TR_Position\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;TR_Position&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"TR_Position\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_PositionID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Position&quot;, &quot;PositionID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Position\", \"PositionID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PositionID</haxe_doc>\x0A\x09</col_PositionID>\x0A\x09<col_TenantID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Position&quot;, &quot;TenantID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Position\", \"TenantID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna TenantID</haxe_doc>\x0A\x09</col_TenantID>\x0A\x09<col_PersonID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Position&quot;, &quot;PersonID&quot;, NullableEnum.NULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Position\", \"PersonID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PersonID</haxe_doc>\x0A\x09</col_PersonID>\x0A\x09<col_PersonName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Position&quot;, &quot;PersonName&quot;, 500, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Position\", \"PersonName\", 500, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PersonName</haxe_doc>\x0A\x09</col_PersonName>\x0A\x09<col_OrganizationID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Position&quot;, &quot;OrganizationID&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Position\", \"OrganizationID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna OrganizationID</haxe_doc>\x0A\x09</col_OrganizationID>\x0A\x09<col_OrganizationName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Position&quot;, &quot;OrganizationName&quot;, 500, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Position\", \"OrganizationName\", 500, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna OrganizationName</haxe_doc>\x0A\x09</col_OrganizationName>\x0A\x09<col_RoleID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Position&quot;, &quot;RoleID&quot;, NullableEnum.NULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Position\", \"RoleID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RoleID</haxe_doc>\x0A\x09</col_RoleID>\x0A\x09<col_RoleName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Position&quot;, &quot;RoleName&quot;, 250, NullableEnum.NULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Position\", \"RoleName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RoleName</haxe_doc>\x0A\x09</col_RoleName>\x0A\x09<col_PositionName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Position&quot;, &quot;PositionName&quot;, 250, NullableEnum.NULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Position\", \"PositionName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PositionName</haxe_doc>\x0A\x09</col_PositionName>\x0A\x09<col_StartDate public=\"1\" expr=\"new DateTimeSentence(&quot;TR_Position&quot;, &quot;StartDate&quot;, NullableEnum.NULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"TR_Position\", \"StartDate\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna StartDate</haxe_doc>\x0A\x09</col_StartDate>\x0A\x09<col_EndDate public=\"1\" expr=\"new DateTimeSentence(&quot;TR_Position&quot;, &quot;EndDate&quot;, NullableEnum.NULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"TR_Position\", \"EndDate\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EndDate</haxe_doc>\x0A\x09</col_EndDate>\x0A\x09<col_RelatedPositionID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Position&quot;, &quot;RelatedPositionID&quot;, NullableEnum.NULL, false)\" line=\"92\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Position\", \"RelatedPositionID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RelatedPositionID</haxe_doc>\x0A\x09</col_RelatedPositionID>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;TR_Position&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"97\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"TR_Position\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"105\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"114\" static=\"1\">\x0A\x09\x09<f a=\"val_PositionID\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<PositionID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PositionID>\x0A\x09<get_PositionID public=\"1\" set=\"method\" line=\"120\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PositionID>\x0A\x09<TenantID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</TenantID>\x0A\x09<get_TenantID public=\"1\" set=\"method\" line=\"127\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_TenantID>\x0A\x09<set_TenantID public=\"1\" set=\"method\" line=\"131\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_TenantID>\x0A\x09<PersonID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PersonID>\x0A\x09<get_PersonID public=\"1\" set=\"method\" line=\"141\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PersonID>\x0A\x09<set_PersonID public=\"1\" set=\"method\" line=\"145\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_PersonID>\x0A\x09<PersonName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PersonName>\x0A\x09<get_PersonName public=\"1\" set=\"method\" line=\"155\"><f a=\"\"><c path=\"String\"/></f></get_PersonName>\x0A\x09<set_PersonName public=\"1\" set=\"method\" line=\"159\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_PersonName>\x0A\x09<OrganizationID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</OrganizationID>\x0A\x09<get_OrganizationID public=\"1\" set=\"method\" line=\"169\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_OrganizationID>\x0A\x09<set_OrganizationID public=\"1\" set=\"method\" line=\"173\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_OrganizationID>\x0A\x09<OrganizationName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</OrganizationName>\x0A\x09<get_OrganizationName public=\"1\" set=\"method\" line=\"183\"><f a=\"\"><c path=\"String\"/></f></get_OrganizationName>\x0A\x09<set_OrganizationName public=\"1\" set=\"method\" line=\"187\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_OrganizationName>\x0A\x09<RoleID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RoleID>\x0A\x09<get_RoleID public=\"1\" set=\"method\" line=\"197\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_RoleID>\x0A\x09<set_RoleID public=\"1\" set=\"method\" line=\"201\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_RoleID>\x0A\x09<RoleName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RoleName>\x0A\x09<get_RoleName public=\"1\" set=\"method\" line=\"211\"><f a=\"\"><c path=\"String\"/></f></get_RoleName>\x0A\x09<set_RoleName public=\"1\" set=\"method\" line=\"215\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_RoleName>\x0A\x09<PositionName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PositionName>\x0A\x09<get_PositionName public=\"1\" set=\"method\" line=\"225\"><f a=\"\"><c path=\"String\"/></f></get_PositionName>\x0A\x09<set_PositionName public=\"1\" set=\"method\" line=\"229\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_PositionName>\x0A\x09<StartDate get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</StartDate>\x0A\x09<get_StartDate public=\"1\" set=\"method\" line=\"239\"><f a=\"\"><c path=\"Date\"/></f></get_StartDate>\x0A\x09<set_StartDate public=\"1\" set=\"method\" line=\"243\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_StartDate>\x0A\x09<EndDate get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EndDate>\x0A\x09<get_EndDate public=\"1\" set=\"method\" line=\"253\"><f a=\"\"><c path=\"Date\"/></f></get_EndDate>\x0A\x09<set_EndDate public=\"1\" set=\"method\" line=\"257\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_EndDate>\x0A\x09<RelatedPositionID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RelatedPositionID>\x0A\x09<get_RelatedPositionID public=\"1\" set=\"method\" line=\"267\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_RelatedPositionID>\x0A\x09<set_RelatedPositionID public=\"1\" set=\"method\" line=\"271\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_RelatedPositionID>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"281\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"285\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase TR_Position que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var DateTimeSentence
	 * Referencia a columna EndDate
	 */
	static public $col_EndDate;
	/**
	 * @var UUIDSentence
	 * Referencia a columna OrganizationID
	 */
	static public $col_OrganizationID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna OrganizationName
	 */
	static public $col_OrganizationName;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PersonID
	 */
	static public $col_PersonID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna PersonName
	 */
	static public $col_PersonName;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PositionID
	 */
	static public $col_PositionID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna PositionName
	 */
	static public $col_PositionName;
	/**
	 * @var UUIDSentence
	 * Referencia a columna RelatedPositionID
	 */
	static public $col_RelatedPositionID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna RoleID
	 */
	static public $col_RoleID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna RoleName
	 */
	static public $col_RoleName;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna StartDate
	 */
	static public $col_StartDate;
	/**
	 * @var SmallIntegerSentence
	 * Referencia a columna Status
	 */
	static public $col_Status;
	/**
	 * @var UUIDSentence
	 * Referencia a columna TenantID
	 */
	static public $col_TenantID;
	/**
	 * @var ISource
	 * referencia a tabla para consultas
	 */
	static public $table;

	/**
	 * @var \Date
	 */
	public $EndDate;
	/**
	 * @var UUID
	 */
	public $OrganizationID;
	/**
	 * @var string
	 */
	public $OrganizationName;
	/**
	 * @var UUID
	 */
	public $PersonID;
	/**
	 * @var string
	 */
	public $PersonName;
	/**
	 * @var UUID
	 */
	public $PositionID;
	/**
	 * @var string
	 */
	public $PositionName;
	/**
	 * @var UUID
	 */
	public $RelatedPositionID;
	/**
	 * @var UUID
	 */
	public $RoleID;
	/**
	 * @var string
	 */
	public $RoleName;
	/**
	 * @var \Date
	 */
	public $StartDate;
	/**
	 * @var int
	 */
	public $Status;
	/**
	 * @var UUID
	 */
	public $TenantID;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_PositionID
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_PositionID) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:115: characters 3-107
		return SQL::SELECT()->FROM(TR_Position::$table)->WHERE(Condition::SET(TR_Position::$col_PositionID, Op::Equal(), Val::uuid($val_PositionID)));
	}

	/**
	 * inicio rápido de filtro
	 * @param	Filtro
	 * @return objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param ICondition $Condition
	 * 
	 * @return WhereClause
	 */
	public static function WHERE ($Condition) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:106: characters 3-51
		return SQL::SELECT()->FROM(TR_Position::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase TR_Position que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return \Date
	 */
	public function get_EndDate () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:254: characters 3-17
		return $this->EndDate;
	}

	/**
	 * @return UUID
	 */
	public function get_OrganizationID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:170: characters 3-24
		return $this->OrganizationID;
	}

	/**
	 * @return string
	 */
	public function get_OrganizationName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:184: characters 3-26
		return $this->OrganizationName;
	}

	/**
	 * @return UUID
	 */
	public function get_PersonID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:142: characters 3-18
		return $this->PersonID;
	}

	/**
	 * @return string
	 */
	public function get_PersonName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:156: characters 3-20
		return $this->PersonName;
	}

	/**
	 * @return UUID
	 */
	public function get_PositionID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:121: characters 3-20
		return $this->PositionID;
	}

	/**
	 * @return string
	 */
	public function get_PositionName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:226: characters 3-22
		return $this->PositionName;
	}

	/**
	 * @return UUID
	 */
	public function get_RelatedPositionID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:268: characters 3-27
		return $this->RelatedPositionID;
	}

	/**
	 * @return UUID
	 */
	public function get_RoleID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:198: characters 3-16
		return $this->RoleID;
	}

	/**
	 * @return string
	 */
	public function get_RoleName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:212: characters 3-18
		return $this->RoleName;
	}

	/**
	 * @return \Date
	 */
	public function get_StartDate () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:240: characters 3-19
		return $this->StartDate;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:282: characters 3-16
		return $this->Status;
	}

	/**
	 * @return UUID
	 */
	public function get_TenantID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:128: characters 3-18
		return $this->TenantID;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_EndDate ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:260: characters 3-105
		if ($this->get_TrackChanges() && ($this->get_EndDate() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:260: characters 71-82
			$tmp = TR_Position::$col_EndDate;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:260: characters 46-105
			$this->AddChange(new ChangeItem($tmp, $this->get_EndDate(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:261: characters 3-23
		return $this->EndDate = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_OrganizationID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:176: characters 3-126
		if ($this->get_TrackChanges() && ($this->get_OrganizationID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:176: characters 78-96
			$tmp = TR_Position::$col_OrganizationID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:176: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_OrganizationID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:177: characters 3-30
		return $this->OrganizationID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_OrganizationName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:190: characters 3-132
		if ($this->get_TrackChanges() && ($this->get_OrganizationName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:190: characters 80-100
			$tmp = TR_Position::$col_OrganizationName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:190: characters 55-132
			$this->AddChange(new ChangeItem($tmp, $this->get_OrganizationName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:191: characters 3-32
		return $this->OrganizationName = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_PersonID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:148: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_PersonID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:148: characters 72-84
			$tmp = TR_Position::$col_PersonID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:148: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_PersonID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:149: characters 3-24
		return $this->PersonID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_PersonName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:162: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_PersonName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:162: characters 74-88
			$tmp = TR_Position::$col_PersonName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:162: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_PersonName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:163: characters 3-26
		return $this->PersonName = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_PositionName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:232: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_PositionName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:232: characters 76-92
			$tmp = TR_Position::$col_PositionName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:232: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_PositionName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:233: characters 3-28
		return $this->PositionName = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_RelatedPositionID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:274: characters 3-135
		if ($this->get_TrackChanges() && ($this->get_RelatedPositionID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:274: characters 81-102
			$tmp = TR_Position::$col_RelatedPositionID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:274: characters 56-135
			$this->AddChange(new ChangeItem($tmp, $this->get_RelatedPositionID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:275: characters 3-33
		return $this->RelatedPositionID = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_RoleID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:204: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_RoleID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:204: characters 70-80
			$tmp = TR_Position::$col_RoleID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:204: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_RoleID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:205: characters 3-22
		return $this->RoleID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_RoleName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:218: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_RoleName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:218: characters 72-84
			$tmp = TR_Position::$col_RoleName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:218: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_RoleName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:219: characters 3-24
		return $this->RoleName = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_StartDate ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:246: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_StartDate() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:246: characters 73-86
			$tmp = TR_Position::$col_StartDate;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:246: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_StartDate(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:247: characters 3-25
		return $this->StartDate = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:288: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:288: characters 70-80
			$tmp = TR_Position::$col_Status;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:288: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:289: characters 3-22
		return $this->Status = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_TenantID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:134: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_TenantID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:134: characters 72-84
			$tmp = TR_Position::$col_TenantID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:134: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_TenantID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Position.hx:135: characters 3-24
		return $this->TenantID = $value;
	}

	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


		self::$table = new TableSource("TR_Position");
		self::$col_PositionID = new UUIDSentence("TR_Position", "PositionID", NullableEnum::NOTNULL(), true);
		self::$col_TenantID = new UUIDSentence("TR_Position", "TenantID", NullableEnum::NULL(), false);
		self::$col_PersonID = new UUIDSentence("TR_Position", "PersonID", NullableEnum::NULL(), false);
		self::$col_PersonName = new VarcharSentence("TR_Position", "PersonName", 500, NullableEnum::NULL(), false);
		self::$col_OrganizationID = new UUIDSentence("TR_Position", "OrganizationID", NullableEnum::NULL(), false);
		self::$col_OrganizationName = new VarcharSentence("TR_Position", "OrganizationName", 500, NullableEnum::NULL(), false);
		self::$col_RoleID = new UUIDSentence("TR_Position", "RoleID", NullableEnum::NULL(), false);
		self::$col_RoleName = new VarcharSentence("TR_Position", "RoleName", 250, NullableEnum::NULL(), false);
		self::$col_PositionName = new VarcharSentence("TR_Position", "PositionName", 250, NullableEnum::NULL(), false);
		self::$col_StartDate = new DateTimeSentence("TR_Position", "StartDate", NullableEnum::NULL(), false);
		self::$col_EndDate = new DateTimeSentence("TR_Position", "EndDate", NullableEnum::NULL(), false);
		self::$col_RelatedPositionID = new UUIDSentence("TR_Position", "RelatedPositionID", NullableEnum::NULL(), false);
		self::$col_Status = new SmallIntegerSentence("TR_Position", "Status", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(TR_Position::class, 'nMorph.core.db.nmorph_core.TR_Position');
Boot::registerGetters('nMorph\\core\\db\\nmorph_core\\TR_Position', [
	'Status' => true,
	'RelatedPositionID' => true,
	'EndDate' => true,
	'StartDate' => true,
	'PositionName' => true,
	'RoleName' => true,
	'RoleID' => true,
	'OrganizationName' => true,
	'OrganizationID' => true,
	'PersonName' => true,
	'PersonID' => true,
	'TenantID' => true,
	'PositionID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\nmorph_core\\TR_Position', [
	'Status' => true,
	'RelatedPositionID' => true,
	'EndDate' => true,
	'StartDate' => true,
	'PositionName' => true,
	'RoleName' => true,
	'RoleID' => true,
	'OrganizationName' => true,
	'OrganizationID' => true,
	'PersonName' => true,
	'PersonID' => true,
	'TenantID' => true
]);
TR_Position::__hx__init();
