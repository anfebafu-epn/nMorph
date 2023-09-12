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
use \nMorph\framework\orm\common\fields\BooleanSentence;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class DC_Folder extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.nmorph_core.DC_Folder\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;DC_Folder&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"DC_Folder\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_FolderID public=\"1\" expr=\"new UUIDSentence(&quot;DC_Folder&quot;, &quot;FolderID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"DC_Folder\", \"FolderID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FolderID</haxe_doc>\x0A\x09</col_FolderID>\x0A\x09<col_TenantID public=\"1\" expr=\"new UUIDSentence(&quot;DC_Folder&quot;, &quot;TenantID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"DC_Folder\", \"TenantID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna TenantID</haxe_doc>\x0A\x09</col_TenantID>\x0A\x09<col_RepositoryID public=\"1\" expr=\"new UUIDSentence(&quot;DC_Folder&quot;, &quot;RepositoryID&quot;, NullableEnum.NULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"DC_Folder\", \"RepositoryID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna RepositoryID</haxe_doc>\x0A\x09</col_RepositoryID>\x0A\x09<col_ParentFolderID public=\"1\" expr=\"new UUIDSentence(&quot;DC_Folder&quot;, &quot;ParentFolderID&quot;, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"DC_Folder\", \"ParentFolderID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ParentFolderID</haxe_doc>\x0A\x09</col_ParentFolderID>\x0A\x09<col_FolderName public=\"1\" expr=\"new VarcharSentence(&quot;DC_Folder&quot;, &quot;FolderName&quot;, 500, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"DC_Folder\", \"FolderName\", 500, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FolderName</haxe_doc>\x0A\x09</col_FolderName>\x0A\x09<col_IDsPath public=\"1\" expr=\"new VarcharSentence(&quot;DC_Folder&quot;, &quot;IDsPath&quot;, -1, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"DC_Folder\", \"IDsPath\", -1, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IDsPath</haxe_doc>\x0A\x09</col_IDsPath>\x0A\x09<col_NamesPath public=\"1\" expr=\"new VarcharSentence(&quot;DC_Folder&quot;, &quot;NamesPath&quot;, -1, NullableEnum.NULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"DC_Folder\", \"NamesPath\", -1, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna NamesPath</haxe_doc>\x0A\x09</col_NamesPath>\x0A\x09<col_Description public=\"1\" expr=\"new VarcharSentence(&quot;DC_Folder&quot;, &quot;Description&quot;, 500, NullableEnum.NULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"DC_Folder\", \"Description\", 500, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Description</haxe_doc>\x0A\x09</col_Description>\x0A\x09<col_CreationDate public=\"1\" expr=\"new DateTimeSentence(&quot;DC_Folder&quot;, &quot;CreationDate&quot;, NullableEnum.NULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"DC_Folder\", \"CreationDate\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CreationDate</haxe_doc>\x0A\x09</col_CreationDate>\x0A\x09<col_IsRoot public=\"1\" expr=\"new BooleanSentence(&quot;DC_Folder&quot;, &quot;IsRoot&quot;, NullableEnum.NULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new BooleanSentence(\"DC_Folder\", \"IsRoot\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IsRoot</haxe_doc>\x0A\x09</col_IsRoot>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;DC_Folder&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"DC_Folder\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"95\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"104\" static=\"1\">\x0A\x09\x09<f a=\"val_FolderID\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<FolderID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FolderID>\x0A\x09<get_FolderID public=\"1\" set=\"method\" line=\"110\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_FolderID>\x0A\x09<TenantID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</TenantID>\x0A\x09<get_TenantID public=\"1\" set=\"method\" line=\"117\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_TenantID>\x0A\x09<set_TenantID public=\"1\" set=\"method\" line=\"121\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_TenantID>\x0A\x09<RepositoryID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</RepositoryID>\x0A\x09<get_RepositoryID public=\"1\" set=\"method\" line=\"131\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_RepositoryID>\x0A\x09<set_RepositoryID public=\"1\" set=\"method\" line=\"135\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_RepositoryID>\x0A\x09<ParentFolderID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ParentFolderID>\x0A\x09<get_ParentFolderID public=\"1\" set=\"method\" line=\"145\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ParentFolderID>\x0A\x09<set_ParentFolderID public=\"1\" set=\"method\" line=\"149\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_ParentFolderID>\x0A\x09<FolderName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FolderName>\x0A\x09<get_FolderName public=\"1\" set=\"method\" line=\"159\"><f a=\"\"><c path=\"String\"/></f></get_FolderName>\x0A\x09<set_FolderName public=\"1\" set=\"method\" line=\"163\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_FolderName>\x0A\x09<IDsPath get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IDsPath>\x0A\x09<get_IDsPath public=\"1\" set=\"method\" line=\"173\"><f a=\"\"><c path=\"String\"/></f></get_IDsPath>\x0A\x09<set_IDsPath public=\"1\" set=\"method\" line=\"177\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_IDsPath>\x0A\x09<NamesPath get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</NamesPath>\x0A\x09<get_NamesPath public=\"1\" set=\"method\" line=\"187\"><f a=\"\"><c path=\"String\"/></f></get_NamesPath>\x0A\x09<set_NamesPath public=\"1\" set=\"method\" line=\"191\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_NamesPath>\x0A\x09<Description get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Description>\x0A\x09<get_Description public=\"1\" set=\"method\" line=\"201\"><f a=\"\"><c path=\"String\"/></f></get_Description>\x0A\x09<set_Description public=\"1\" set=\"method\" line=\"205\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_Description>\x0A\x09<CreationDate get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CreationDate>\x0A\x09<get_CreationDate public=\"1\" set=\"method\" line=\"215\"><f a=\"\"><c path=\"Date\"/></f></get_CreationDate>\x0A\x09<set_CreationDate public=\"1\" set=\"method\" line=\"219\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_CreationDate>\x0A\x09<IsRoot get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IsRoot>\x0A\x09<get_IsRoot public=\"1\" set=\"method\" line=\"229\"><f a=\"\"><x path=\"Null\"><x path=\"Bool\"/></x></f></get_IsRoot>\x0A\x09<set_IsRoot public=\"1\" set=\"method\" line=\"233\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A</f></set_IsRoot>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"243\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"247\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase DC_Folder que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var DateTimeSentence
	 * Referencia a columna CreationDate
	 */
	static public $col_CreationDate;
	/**
	 * @var VarcharSentence
	 * Referencia a columna Description
	 */
	static public $col_Description;
	/**
	 * @var UUIDSentence
	 * Referencia a columna FolderID
	 */
	static public $col_FolderID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna FolderName
	 */
	static public $col_FolderName;
	/**
	 * @var VarcharSentence
	 * Referencia a columna IDsPath
	 */
	static public $col_IDsPath;
	/**
	 * @var BooleanSentence
	 * Referencia a columna IsRoot
	 */
	static public $col_IsRoot;
	/**
	 * @var VarcharSentence
	 * Referencia a columna NamesPath
	 */
	static public $col_NamesPath;
	/**
	 * @var UUIDSentence
	 * Referencia a columna ParentFolderID
	 */
	static public $col_ParentFolderID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna RepositoryID
	 */
	static public $col_RepositoryID;
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
	public $CreationDate;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var UUID
	 */
	public $FolderID;
	/**
	 * @var string
	 */
	public $FolderName;
	/**
	 * @var string
	 */
	public $IDsPath;
	/**
	 * @var bool
	 */
	public $IsRoot;
	/**
	 * @var string
	 */
	public $NamesPath;
	/**
	 * @var UUID
	 */
	public $ParentFolderID;
	/**
	 * @var UUID
	 */
	public $RepositoryID;
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
	 * @param UUID $val_FolderID
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_FolderID) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:105: characters 3-103
		return SQL::SELECT()->FROM(DC_Folder::$table)->WHERE(Condition::SET(DC_Folder::$col_FolderID, Op::Equal(), Val::uuid($val_FolderID)));
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
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:96: characters 3-51
		return SQL::SELECT()->FROM(DC_Folder::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase DC_Folder que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return \Date
	 */
	public function get_CreationDate () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:216: characters 3-22
		return $this->CreationDate;
	}

	/**
	 * @return string
	 */
	public function get_Description () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:202: characters 3-21
		return $this->Description;
	}

	/**
	 * @return UUID
	 */
	public function get_FolderID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:111: characters 3-18
		return $this->FolderID;
	}

	/**
	 * @return string
	 */
	public function get_FolderName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:160: characters 3-20
		return $this->FolderName;
	}

	/**
	 * @return string
	 */
	public function get_IDsPath () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:174: characters 3-17
		return $this->IDsPath;
	}

	/**
	 * @return bool
	 */
	public function get_IsRoot () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:230: characters 3-16
		return $this->IsRoot;
	}

	/**
	 * @return string
	 */
	public function get_NamesPath () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:188: characters 3-19
		return $this->NamesPath;
	}

	/**
	 * @return UUID
	 */
	public function get_ParentFolderID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:146: characters 3-24
		return $this->ParentFolderID;
	}

	/**
	 * @return UUID
	 */
	public function get_RepositoryID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:132: characters 3-22
		return $this->RepositoryID;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:244: characters 3-16
		return $this->Status;
	}

	/**
	 * @return UUID
	 */
	public function get_TenantID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:118: characters 3-18
		return $this->TenantID;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_CreationDate ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:222: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_CreationDate() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:222: characters 76-92
			$tmp = DC_Folder::$col_CreationDate;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:222: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_CreationDate(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:223: characters 3-28
		return $this->CreationDate = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Description ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:208: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_Description() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:208: characters 75-90
			$tmp = DC_Folder::$col_Description;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:208: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_Description(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:209: characters 3-27
		return $this->Description = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_FolderName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:166: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_FolderName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:166: characters 74-88
			$tmp = DC_Folder::$col_FolderName;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:166: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_FolderName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:167: characters 3-26
		return $this->FolderName = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_IDsPath ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:180: characters 3-105
		if ($this->get_TrackChanges() && ($this->get_IDsPath() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:180: characters 71-82
			$tmp = DC_Folder::$col_IDsPath;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:180: characters 46-105
			$this->AddChange(new ChangeItem($tmp, $this->get_IDsPath(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:181: characters 3-23
		return $this->IDsPath = $value;
	}

	/**
	 * @param bool $value
	 * 
	 * @return bool
	 */
	public function set_IsRoot ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:236: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_IsRoot() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:236: characters 70-80
			$tmp = DC_Folder::$col_IsRoot;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:236: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_IsRoot(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:237: characters 3-22
		return $this->IsRoot = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_NamesPath ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:194: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_NamesPath() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:194: characters 73-86
			$tmp = DC_Folder::$col_NamesPath;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:194: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_NamesPath(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:195: characters 3-25
		return $this->NamesPath = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_ParentFolderID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:152: characters 3-126
		if ($this->get_TrackChanges() && ($this->get_ParentFolderID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:152: characters 78-96
			$tmp = DC_Folder::$col_ParentFolderID;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:152: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_ParentFolderID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:153: characters 3-30
		return $this->ParentFolderID = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_RepositoryID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:138: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_RepositoryID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:138: characters 76-92
			$tmp = DC_Folder::$col_RepositoryID;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:138: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_RepositoryID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:139: characters 3-28
		return $this->RepositoryID = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:250: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:250: characters 70-80
			$tmp = DC_Folder::$col_Status;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:250: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:251: characters 3-22
		return $this->Status = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_TenantID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:124: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_TenantID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:124: characters 72-84
			$tmp = DC_Folder::$col_TenantID;
			#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:124: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_TenantID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/DC_Folder.hx:125: characters 3-24
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


		self::$table = new TableSource("DC_Folder");
		self::$col_FolderID = new UUIDSentence("DC_Folder", "FolderID", NullableEnum::NOTNULL(), true);
		self::$col_TenantID = new UUIDSentence("DC_Folder", "TenantID", NullableEnum::NULL(), false);
		self::$col_RepositoryID = new UUIDSentence("DC_Folder", "RepositoryID", NullableEnum::NULL(), false);
		self::$col_ParentFolderID = new UUIDSentence("DC_Folder", "ParentFolderID", NullableEnum::NULL(), false);
		self::$col_FolderName = new VarcharSentence("DC_Folder", "FolderName", 500, NullableEnum::NULL(), false);
		self::$col_IDsPath = new VarcharSentence("DC_Folder", "IDsPath", -1, NullableEnum::NULL(), false);
		self::$col_NamesPath = new VarcharSentence("DC_Folder", "NamesPath", -1, NullableEnum::NULL(), false);
		self::$col_Description = new VarcharSentence("DC_Folder", "Description", 500, NullableEnum::NULL(), false);
		self::$col_CreationDate = new DateTimeSentence("DC_Folder", "CreationDate", NullableEnum::NULL(), false);
		self::$col_IsRoot = new BooleanSentence("DC_Folder", "IsRoot", NullableEnum::NULL(), false);
		self::$col_Status = new SmallIntegerSentence("DC_Folder", "Status", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(DC_Folder::class, 'nMorph.core.db.nmorph_core.DC_Folder');
Boot::registerGetters('nMorph\\core\\db\\nmorph_core\\DC_Folder', [
	'Status' => true,
	'IsRoot' => true,
	'CreationDate' => true,
	'Description' => true,
	'NamesPath' => true,
	'IDsPath' => true,
	'FolderName' => true,
	'ParentFolderID' => true,
	'RepositoryID' => true,
	'TenantID' => true,
	'FolderID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\nmorph_core\\DC_Folder', [
	'Status' => true,
	'IsRoot' => true,
	'CreationDate' => true,
	'Description' => true,
	'NamesPath' => true,
	'IDsPath' => true,
	'FolderName' => true,
	'ParentFolderID' => true,
	'RepositoryID' => true,
	'TenantID' => true
]);
DC_Folder::__hx__init();
