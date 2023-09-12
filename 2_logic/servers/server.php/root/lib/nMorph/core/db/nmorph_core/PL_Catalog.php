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
class PL_Catalog extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.nmorph_core.PL_Catalog\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;PL_Catalog&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"PL_Catalog\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_CatalogID public=\"1\" expr=\"new UUIDSentence(&quot;PL_Catalog&quot;, &quot;CatalogID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_Catalog\", \"CatalogID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CatalogID</haxe_doc>\x0A\x09</col_CatalogID>\x0A\x09<col_TenantID public=\"1\" expr=\"new UUIDSentence(&quot;PL_Catalog&quot;, &quot;TenantID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_Catalog\", \"TenantID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna TenantID</haxe_doc>\x0A\x09</col_TenantID>\x0A\x09<col_ExtensionID public=\"1\" expr=\"new UUIDSentence(&quot;PL_Catalog&quot;, &quot;ExtensionID&quot;, NullableEnum.NULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_Catalog\", \"ExtensionID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ExtensionID</haxe_doc>\x0A\x09</col_ExtensionID>\x0A\x09<col_CatalogName public=\"1\" expr=\"new VarcharSentence(&quot;PL_Catalog&quot;, &quot;CatalogName&quot;, 250, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"PL_Catalog\", \"CatalogName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CatalogName</haxe_doc>\x0A\x09</col_CatalogName>\x0A\x09<col_CatalogType public=\"1\" expr=\"new SmallIntegerSentence(&quot;PL_Catalog&quot;, &quot;CatalogType&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"PL_Catalog\", \"CatalogType\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CatalogType</haxe_doc>\x0A\x09</col_CatalogType>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;PL_Catalog&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"PL_Catalog\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"70\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"79\" static=\"1\">\x0A\x09\x09<f a=\"val_CatalogID\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<CatalogID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CatalogID>\x0A\x09<get_CatalogID public=\"1\" set=\"method\" line=\"85\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_CatalogID>\x0A\x09<TenantID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</TenantID>\x0A\x09<get_TenantID public=\"1\" set=\"method\" line=\"92\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_TenantID>\x0A\x09<set_TenantID public=\"1\" set=\"method\" line=\"96\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_TenantID>\x0A\x09<ExtensionID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ExtensionID>\x0A\x09<get_ExtensionID public=\"1\" set=\"method\" line=\"106\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ExtensionID>\x0A\x09<set_ExtensionID public=\"1\" set=\"method\" line=\"110\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_ExtensionID>\x0A\x09<CatalogName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CatalogName>\x0A\x09<get_CatalogName public=\"1\" set=\"method\" line=\"120\"><f a=\"\"><c path=\"String\"/></f></get_CatalogName>\x0A\x09<set_CatalogName public=\"1\" set=\"method\" line=\"124\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_CatalogName>\x0A\x09<CatalogType get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CatalogType>\x0A\x09<get_CatalogType public=\"1\" set=\"method\" line=\"134\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_CatalogType>\x0A\x09<set_CatalogType public=\"1\" set=\"method\" line=\"138\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_CatalogType>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"148\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"152\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase PL_Catalog que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna CatalogID
	 */
	static public $col_CatalogID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna CatalogName
	 */
	static public $col_CatalogName;
	/**
	 * @var SmallIntegerSentence
	 * Referencia a columna CatalogType
	 */
	static public $col_CatalogType;
	/**
	 * @var UUIDSentence
	 * Referencia a columna ExtensionID
	 */
	static public $col_ExtensionID;
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
	 * @var UUID
	 */
	public $CatalogID;
	/**
	 * @var string
	 */
	public $CatalogName;
	/**
	 * @var int
	 */
	public $CatalogType;
	/**
	 * @var UUID
	 */
	public $ExtensionID;
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
	 * @param UUID $val_CatalogID
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_CatalogID) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:80: characters 3-105
		return SQL::SELECT()->FROM(PL_Catalog::$table)->WHERE(Condition::SET(PL_Catalog::$col_CatalogID, Op::Equal(), Val::uuid($val_CatalogID)));
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
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:71: characters 3-51
		return SQL::SELECT()->FROM(PL_Catalog::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase PL_Catalog que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_CatalogID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:86: characters 3-19
		return $this->CatalogID;
	}

	/**
	 * @return string
	 */
	public function get_CatalogName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:121: characters 3-21
		return $this->CatalogName;
	}

	/**
	 * @return int
	 */
	public function get_CatalogType () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:135: characters 3-21
		return $this->CatalogType;
	}

	/**
	 * @return UUID
	 */
	public function get_ExtensionID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:107: characters 3-21
		return $this->ExtensionID;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:149: characters 3-16
		return $this->Status;
	}

	/**
	 * @return UUID
	 */
	public function get_TenantID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:93: characters 3-18
		return $this->TenantID;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_CatalogName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:127: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_CatalogName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:127: characters 75-90
			$tmp = PL_Catalog::$col_CatalogName;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:127: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_CatalogName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:128: characters 3-27
		return $this->CatalogName = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_CatalogType ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:141: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_CatalogType() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:141: characters 75-90
			$tmp = PL_Catalog::$col_CatalogType;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:141: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_CatalogType(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:142: characters 3-27
		return $this->CatalogType = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_ExtensionID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:113: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_ExtensionID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:113: characters 75-90
			$tmp = PL_Catalog::$col_ExtensionID;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:113: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_ExtensionID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:114: characters 3-27
		return $this->ExtensionID = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:155: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:155: characters 70-80
			$tmp = PL_Catalog::$col_Status;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:155: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:156: characters 3-22
		return $this->Status = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_TenantID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:99: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_TenantID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:99: characters 72-84
			$tmp = PL_Catalog::$col_TenantID;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:99: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_TenantID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_Catalog.hx:100: characters 3-24
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


		self::$table = new TableSource("PL_Catalog");
		self::$col_CatalogID = new UUIDSentence("PL_Catalog", "CatalogID", NullableEnum::NOTNULL(), true);
		self::$col_TenantID = new UUIDSentence("PL_Catalog", "TenantID", NullableEnum::NULL(), false);
		self::$col_ExtensionID = new UUIDSentence("PL_Catalog", "ExtensionID", NullableEnum::NULL(), false);
		self::$col_CatalogName = new VarcharSentence("PL_Catalog", "CatalogName", 250, NullableEnum::NULL(), false);
		self::$col_CatalogType = new SmallIntegerSentence("PL_Catalog", "CatalogType", NullableEnum::NULL(), false);
		self::$col_Status = new SmallIntegerSentence("PL_Catalog", "Status", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(PL_Catalog::class, 'nMorph.core.db.nmorph_core.PL_Catalog');
Boot::registerGetters('nMorph\\core\\db\\nmorph_core\\PL_Catalog', [
	'Status' => true,
	'CatalogType' => true,
	'CatalogName' => true,
	'ExtensionID' => true,
	'TenantID' => true,
	'CatalogID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\nmorph_core\\PL_Catalog', [
	'Status' => true,
	'CatalogType' => true,
	'CatalogName' => true,
	'ExtensionID' => true,
	'TenantID' => true
]);
PL_Catalog::__hx__init();
