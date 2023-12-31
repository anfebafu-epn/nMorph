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
class TR_Member extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.nmorph_core.TR_Member\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;TR_Member&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"TR_Member\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_MemberID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;MemberID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"MemberID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna MemberID</haxe_doc>\x0A\x09</col_MemberID>\x0A\x09<col_TenantID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;TenantID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"TenantID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna TenantID</haxe_doc>\x0A\x09</col_TenantID>\x0A\x09<col_RecordID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;RecordID&quot;, NullableEnum.NULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"RecordID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RecordID</haxe_doc>\x0A\x09</col_RecordID>\x0A\x09<col_MemberTypeID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;MemberTypeID&quot;, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"MemberTypeID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna MemberTypeID</haxe_doc>\x0A\x09</col_MemberTypeID>\x0A\x09<col_MemberTypeName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Member&quot;, &quot;MemberTypeName&quot;, 250, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Member\", \"MemberTypeName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna MemberTypeName</haxe_doc>\x0A\x09</col_MemberTypeName>\x0A\x09<col_PositionID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;PositionID&quot;, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"PositionID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PositionID</haxe_doc>\x0A\x09</col_PositionID>\x0A\x09<col_PositionName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Member&quot;, &quot;PositionName&quot;, 250, NullableEnum.NULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Member\", \"PositionName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PositionName</haxe_doc>\x0A\x09</col_PositionName>\x0A\x09<col_PersonID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;PersonID&quot;, NullableEnum.NULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"PersonID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PersonID</haxe_doc>\x0A\x09</col_PersonID>\x0A\x09<col_PersonName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Member&quot;, &quot;PersonName&quot;, 500, NullableEnum.NULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Member\", \"PersonName\", 500, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PersonName</haxe_doc>\x0A\x09</col_PersonName>\x0A\x09<col_OrganizationID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;OrganizationID&quot;, NullableEnum.NULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"OrganizationID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna OrganizationID</haxe_doc>\x0A\x09</col_OrganizationID>\x0A\x09<col_OrganizationName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Member&quot;, &quot;OrganizationName&quot;, 250, NullableEnum.NULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Member\", \"OrganizationName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna OrganizationName</haxe_doc>\x0A\x09</col_OrganizationName>\x0A\x09<col_RoleID public=\"1\" expr=\"new UUIDSentence(&quot;TR_Member&quot;, &quot;RoleID&quot;, NullableEnum.NULL, false)\" line=\"92\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"TR_Member\", \"RoleID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RoleID</haxe_doc>\x0A\x09</col_RoleID>\x0A\x09<col_RoleName public=\"1\" expr=\"new VarcharSentence(&quot;TR_Member&quot;, &quot;RoleName&quot;, 250, NullableEnum.NULL, false)\" line=\"97\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"TR_Member\", \"RoleName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RoleName</haxe_doc>\x0A\x09</col_RoleName>\x0A\x09<col_StartDate public=\"1\" expr=\"new DateTimeSentence(&quot;TR_Member&quot;, &quot;StartDate&quot;, NullableEnum.NULL, false)\" line=\"102\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"TR_Member\", \"StartDate\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna StartDate</haxe_doc>\x0A\x09</col_StartDate>\x0A\x09<col_EndDate public=\"1\" expr=\"new DateTimeSentence(&quot;TR_Member&quot;, &quot;EndDate&quot;, NullableEnum.NULL, false)\" line=\"107\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"TR_Member\", \"EndDate\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EndDate</haxe_doc>\x0A\x09</col_EndDate>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;TR_Member&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"112\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"TR_Member\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"120\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"129\" static=\"1\">\x0A\x09\x09<f a=\"val_MemberID\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<MemberID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</MemberID>\x0A\x09<get_MemberID public=\"1\" set=\"method\" line=\"135\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_MemberID>\x0A\x09<TenantID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</TenantID>\x0A\x09<get_TenantID public=\"1\" set=\"method\" line=\"142\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_TenantID>\x0A\x09<set_TenantID public=\"1\" set=\"method\" line=\"146\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_TenantID>\x0A\x09<RecordID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RecordID>\x0A\x09<get_RecordID public=\"1\" set=\"method\" line=\"156\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_RecordID>\x0A\x09<set_RecordID public=\"1\" set=\"method\" line=\"160\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_RecordID>\x0A\x09<MemberTypeID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</MemberTypeID>\x0A\x09<get_MemberTypeID public=\"1\" set=\"method\" line=\"170\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_MemberTypeID>\x0A\x09<set_MemberTypeID public=\"1\" set=\"method\" line=\"174\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_MemberTypeID>\x0A\x09<MemberTypeName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</MemberTypeName>\x0A\x09<get_MemberTypeName public=\"1\" set=\"method\" line=\"184\"><f a=\"\"><c path=\"String\"/></f></get_MemberTypeName>\x0A\x09<set_MemberTypeName public=\"1\" set=\"method\" line=\"188\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_MemberTypeName>\x0A\x09<PositionID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PositionID>\x0A\x09<get_PositionID public=\"1\" set=\"method\" line=\"198\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PositionID>\x0A\x09<set_PositionID public=\"1\" set=\"method\" line=\"202\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_PositionID>\x0A\x09<PositionName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PositionName>\x0A\x09<get_PositionName public=\"1\" set=\"method\" line=\"212\"><f a=\"\"><c path=\"String\"/></f></get_PositionName>\x0A\x09<set_PositionName public=\"1\" set=\"method\" line=\"216\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_PositionName>\x0A\x09<PersonID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PersonID>\x0A\x09<get_PersonID public=\"1\" set=\"method\" line=\"226\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PersonID>\x0A\x09<set_PersonID public=\"1\" set=\"method\" line=\"230\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_PersonID>\x0A\x09<PersonName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PersonName>\x0A\x09<get_PersonName public=\"1\" set=\"method\" line=\"240\"><f a=\"\"><c path=\"String\"/></f></get_PersonName>\x0A\x09<set_PersonName public=\"1\" set=\"method\" line=\"244\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_PersonName>\x0A\x09<OrganizationID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</OrganizationID>\x0A\x09<get_OrganizationID public=\"1\" set=\"method\" line=\"254\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_OrganizationID>\x0A\x09<set_OrganizationID public=\"1\" set=\"method\" line=\"258\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_OrganizationID>\x0A\x09<OrganizationName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</OrganizationName>\x0A\x09<get_OrganizationName public=\"1\" set=\"method\" line=\"268\"><f a=\"\"><c path=\"String\"/></f></get_OrganizationName>\x0A\x09<set_OrganizationName public=\"1\" set=\"method\" line=\"272\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_OrganizationName>\x0A\x09<RoleID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RoleID>\x0A\x09<get_RoleID public=\"1\" set=\"method\" line=\"282\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_RoleID>\x0A\x09<set_RoleID public=\"1\" set=\"method\" line=\"286\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_RoleID>\x0A\x09<RoleName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RoleName>\x0A\x09<get_RoleName public=\"1\" set=\"method\" line=\"296\"><f a=\"\"><c path=\"String\"/></f></get_RoleName>\x0A\x09<set_RoleName public=\"1\" set=\"method\" line=\"300\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_RoleName>\x0A\x09<StartDate get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</StartDate>\x0A\x09<get_StartDate public=\"1\" set=\"method\" line=\"310\"><f a=\"\"><c path=\"Date\"/></f></get_StartDate>\x0A\x09<set_StartDate public=\"1\" set=\"method\" line=\"314\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_StartDate>\x0A\x09<EndDate get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EndDate>\x0A\x09<get_EndDate public=\"1\" set=\"method\" line=\"324\"><f a=\"\"><c path=\"Date\"/></f></get_EndDate>\x0A\x09<set_EndDate public=\"1\" set=\"method\" line=\"328\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_EndDate>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"338\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"342\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase TR_Member que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var DateTimeSentence
	 * Referencia a columna EndDate
	 */
	static public $col_EndDate;
	/**
	 * @var UUIDSentence
	 * Referencia a columna MemberID
	 */
	static public $col_MemberID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna MemberTypeID
	 */
	static public $col_MemberTypeID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna MemberTypeName
	 */
	static public $col_MemberTypeName;
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
	 * Referencia a columna RecordID
	 */
	static public $col_RecordID;
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
	public $MemberID;
	/**
	 * @var UUID
	 */
	public $MemberTypeID;
	/**
	 * @var string
	 */
	public $MemberTypeName;
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
	public $RecordID;
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
	 * @param UUID $val_MemberID
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_MemberID) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:130: characters 3-103
		return SQL::SELECT()->FROM(TR_Member::$table)->WHERE(Condition::SET(TR_Member::$col_MemberID, Op::Equal(), Val::uuid($val_MemberID)));
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
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:121: characters 3-51
		return SQL::SELECT()->FROM(TR_Member::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase TR_Member que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return \Date
	 */
	public function get_EndDate () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:325: characters 3-17
		return $this->EndDate;
	}

	/**
	 * @return UUID
	 */
	public function get_MemberID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:136: characters 3-18
		return $this->MemberID;
	}

	/**
	 * @return UUID
	 */
	public function get_MemberTypeID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:171: characters 3-22
		return $this->MemberTypeID;
	}

	/**
	 * @return string
	 */
	public function get_MemberTypeName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:185: characters 3-24
		return $this->MemberTypeName;
	}

	/**
	 * @return UUID
	 */
	public function get_OrganizationID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:255: characters 3-24
		return $this->OrganizationID;
	}

	/**
	 * @return string
	 */
	public function get_OrganizationName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:269: characters 3-26
		return $this->OrganizationName;
	}

	/**
	 * @return UUID
	 */
	public function get_PersonID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:227: characters 3-18
		return $this->PersonID;
	}

	/**
	 * @return string
	 */
	public function get_PersonName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:241: characters 3-20
		return $this->PersonName;
	}

	/**
	 * @return UUID
	 */
	public function get_PositionID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:199: characters 3-20
		return $this->PositionID;
	}

	/**
	 * @return string
	 */
	public function get_PositionName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:213: characters 3-22
		return $this->PositionName;
	}

	/**
	 * @return UUID
	 */
	public function get_RecordID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:157: characters 3-18
		return $this->RecordID;
	}

	/**
	 * @return UUID
	 */
	public function get_RoleID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:283: characters 3-16
		return $this->RoleID;
	}

	/**
	 * @return string
	 */
	public function get_RoleName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:297: characters 3-18
		return $this->RoleName;
	}

	/**
	 * @return \Date
	 */
	public function get_StartDate () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:311: characters 3-19
		return $this->StartDate;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:339: characters 3-16
		return $this->Status;
	}

	/**
	 * @return UUID
	 */
	public function get_TenantID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:143: characters 3-18
		return $this->TenantID;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_EndDate ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:331: characters 3-105
		if ($this->get_TrackChanges() && ($this->get_EndDate() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:331: characters 71-82
			$tmp = TR_Member::$col_EndDate;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:331: characters 46-105
			$this->AddChange(new ChangeItem($tmp, $this->get_EndDate(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:332: characters 3-23
		return $this->EndDate = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_MemberTypeID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:177: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_MemberTypeID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:177: characters 76-92
			$tmp = TR_Member::$col_MemberTypeID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:177: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_MemberTypeID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:178: characters 3-28
		return $this->MemberTypeID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_MemberTypeName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:191: characters 3-126
		if ($this->get_TrackChanges() && ($this->get_MemberTypeName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:191: characters 78-96
			$tmp = TR_Member::$col_MemberTypeName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:191: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_MemberTypeName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:192: characters 3-30
		return $this->MemberTypeName = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_OrganizationID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:261: characters 3-126
		if ($this->get_TrackChanges() && ($this->get_OrganizationID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:261: characters 78-96
			$tmp = TR_Member::$col_OrganizationID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:261: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_OrganizationID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:262: characters 3-30
		return $this->OrganizationID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_OrganizationName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:275: characters 3-132
		if ($this->get_TrackChanges() && ($this->get_OrganizationName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:275: characters 80-100
			$tmp = TR_Member::$col_OrganizationName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:275: characters 55-132
			$this->AddChange(new ChangeItem($tmp, $this->get_OrganizationName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:276: characters 3-32
		return $this->OrganizationName = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_PersonID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:233: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_PersonID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:233: characters 72-84
			$tmp = TR_Member::$col_PersonID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:233: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_PersonID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:234: characters 3-24
		return $this->PersonID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_PersonName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:247: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_PersonName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:247: characters 74-88
			$tmp = TR_Member::$col_PersonName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:247: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_PersonName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:248: characters 3-26
		return $this->PersonName = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_PositionID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:205: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_PositionID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:205: characters 74-88
			$tmp = TR_Member::$col_PositionID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:205: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_PositionID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:206: characters 3-26
		return $this->PositionID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_PositionName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:219: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_PositionName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:219: characters 76-92
			$tmp = TR_Member::$col_PositionName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:219: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_PositionName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:220: characters 3-28
		return $this->PositionName = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_RecordID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:163: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_RecordID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:163: characters 72-84
			$tmp = TR_Member::$col_RecordID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:163: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_RecordID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:164: characters 3-24
		return $this->RecordID = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_RoleID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:289: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_RoleID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:289: characters 70-80
			$tmp = TR_Member::$col_RoleID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:289: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_RoleID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:290: characters 3-22
		return $this->RoleID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_RoleName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:303: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_RoleName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:303: characters 72-84
			$tmp = TR_Member::$col_RoleName;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:303: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_RoleName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:304: characters 3-24
		return $this->RoleName = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_StartDate ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:317: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_StartDate() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:317: characters 73-86
			$tmp = TR_Member::$col_StartDate;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:317: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_StartDate(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:318: characters 3-25
		return $this->StartDate = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:345: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:345: characters 70-80
			$tmp = TR_Member::$col_Status;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:345: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:346: characters 3-22
		return $this->Status = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_TenantID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:149: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_TenantID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:149: characters 72-84
			$tmp = TR_Member::$col_TenantID;
			#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:149: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_TenantID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/TR_Member.hx:150: characters 3-24
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


		self::$table = new TableSource("TR_Member");
		self::$col_MemberID = new UUIDSentence("TR_Member", "MemberID", NullableEnum::NOTNULL(), true);
		self::$col_TenantID = new UUIDSentence("TR_Member", "TenantID", NullableEnum::NULL(), false);
		self::$col_RecordID = new UUIDSentence("TR_Member", "RecordID", NullableEnum::NULL(), false);
		self::$col_MemberTypeID = new UUIDSentence("TR_Member", "MemberTypeID", NullableEnum::NULL(), false);
		self::$col_MemberTypeName = new VarcharSentence("TR_Member", "MemberTypeName", 250, NullableEnum::NULL(), false);
		self::$col_PositionID = new UUIDSentence("TR_Member", "PositionID", NullableEnum::NULL(), false);
		self::$col_PositionName = new VarcharSentence("TR_Member", "PositionName", 250, NullableEnum::NULL(), false);
		self::$col_PersonID = new UUIDSentence("TR_Member", "PersonID", NullableEnum::NULL(), false);
		self::$col_PersonName = new VarcharSentence("TR_Member", "PersonName", 500, NullableEnum::NULL(), false);
		self::$col_OrganizationID = new UUIDSentence("TR_Member", "OrganizationID", NullableEnum::NULL(), false);
		self::$col_OrganizationName = new VarcharSentence("TR_Member", "OrganizationName", 250, NullableEnum::NULL(), false);
		self::$col_RoleID = new UUIDSentence("TR_Member", "RoleID", NullableEnum::NULL(), false);
		self::$col_RoleName = new VarcharSentence("TR_Member", "RoleName", 250, NullableEnum::NULL(), false);
		self::$col_StartDate = new DateTimeSentence("TR_Member", "StartDate", NullableEnum::NULL(), false);
		self::$col_EndDate = new DateTimeSentence("TR_Member", "EndDate", NullableEnum::NULL(), false);
		self::$col_Status = new SmallIntegerSentence("TR_Member", "Status", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(TR_Member::class, 'nMorph.core.db.nmorph_core.TR_Member');
Boot::registerGetters('nMorph\\core\\db\\nmorph_core\\TR_Member', [
	'Status' => true,
	'EndDate' => true,
	'StartDate' => true,
	'RoleName' => true,
	'RoleID' => true,
	'OrganizationName' => true,
	'OrganizationID' => true,
	'PersonName' => true,
	'PersonID' => true,
	'PositionName' => true,
	'PositionID' => true,
	'MemberTypeName' => true,
	'MemberTypeID' => true,
	'RecordID' => true,
	'TenantID' => true,
	'MemberID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\nmorph_core\\TR_Member', [
	'Status' => true,
	'EndDate' => true,
	'StartDate' => true,
	'RoleName' => true,
	'RoleID' => true,
	'OrganizationName' => true,
	'OrganizationID' => true,
	'PersonName' => true,
	'PersonID' => true,
	'PositionName' => true,
	'PositionID' => true,
	'MemberTypeName' => true,
	'MemberTypeID' => true,
	'RecordID' => true,
	'TenantID' => true
]);
TR_Member::__hx__init();
