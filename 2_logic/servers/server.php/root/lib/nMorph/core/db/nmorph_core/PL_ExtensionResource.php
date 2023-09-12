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
class PL_ExtensionResource extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.nmorph_core.PL_ExtensionResource\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;PL_ExtensionResource&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"PL_ExtensionResource\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_ResourceID public=\"1\" expr=\"new UUIDSentence(&quot;PL_ExtensionResource&quot;, &quot;ResourceID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_ExtensionResource\", \"ResourceID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ResourceID</haxe_doc>\x0A\x09</col_ResourceID>\x0A\x09<col_ExtensionID public=\"1\" expr=\"new UUIDSentence(&quot;PL_ExtensionResource&quot;, &quot;ExtensionID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_ExtensionResource\", \"ExtensionID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ExtensionID</haxe_doc>\x0A\x09</col_ExtensionID>\x0A\x09<col_ResourceName public=\"1\" expr=\"new VarcharSentence(&quot;PL_ExtensionResource&quot;, &quot;ResourceName&quot;, 250, NullableEnum.NULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"PL_ExtensionResource\", \"ResourceName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ResourceName</haxe_doc>\x0A\x09</col_ResourceName>\x0A\x09<col_InternalName public=\"1\" expr=\"new VarcharSentence(&quot;PL_ExtensionResource&quot;, &quot;InternalName&quot;, 250, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"PL_ExtensionResource\", \"InternalName\", 250, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna InternalName</haxe_doc>\x0A\x09</col_InternalName>\x0A\x09<col_ResourceType public=\"1\" expr=\"new SmallIntegerSentence(&quot;PL_ExtensionResource&quot;, &quot;ResourceType&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"PL_ExtensionResource\", \"ResourceType\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ResourceType</haxe_doc>\x0A\x09</col_ResourceType>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;PL_ExtensionResource&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"PL_ExtensionResource\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"70\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"79\" static=\"1\">\x0A\x09\x09<f a=\"val_ResourceID\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<ResourceID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ResourceID>\x0A\x09<get_ResourceID public=\"1\" set=\"method\" line=\"85\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ResourceID>\x0A\x09<ExtensionID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ExtensionID>\x0A\x09<get_ExtensionID public=\"1\" set=\"method\" line=\"92\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ExtensionID>\x0A\x09<set_ExtensionID public=\"1\" set=\"method\" line=\"96\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_ExtensionID>\x0A\x09<ResourceName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ResourceName>\x0A\x09<get_ResourceName public=\"1\" set=\"method\" line=\"106\"><f a=\"\"><c path=\"String\"/></f></get_ResourceName>\x0A\x09<set_ResourceName public=\"1\" set=\"method\" line=\"110\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_ResourceName>\x0A\x09<InternalName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</InternalName>\x0A\x09<get_InternalName public=\"1\" set=\"method\" line=\"120\"><f a=\"\"><c path=\"String\"/></f></get_InternalName>\x0A\x09<set_InternalName public=\"1\" set=\"method\" line=\"124\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_InternalName>\x0A\x09<ResourceType get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ResourceType>\x0A\x09<get_ResourceType public=\"1\" set=\"method\" line=\"134\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_ResourceType>\x0A\x09<set_ResourceType public=\"1\" set=\"method\" line=\"138\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_ResourceType>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"148\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"152\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase PL_ExtensionResource que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna ExtensionID
	 */
	static public $col_ExtensionID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna InternalName
	 */
	static public $col_InternalName;
	/**
	 * @var UUIDSentence
	 * Referencia a columna ResourceID
	 */
	static public $col_ResourceID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna ResourceName
	 */
	static public $col_ResourceName;
	/**
	 * @var SmallIntegerSentence
	 * Referencia a columna ResourceType
	 */
	static public $col_ResourceType;
	/**
	 * @var SmallIntegerSentence
	 * Referencia a columna Status
	 */
	static public $col_Status;
	/**
	 * @var ISource
	 * referencia a tabla para consultas
	 */
	static public $table;

	/**
	 * @var UUID
	 */
	public $ExtensionID;
	/**
	 * @var string
	 */
	public $InternalName;
	/**
	 * @var UUID
	 */
	public $ResourceID;
	/**
	 * @var string
	 */
	public $ResourceName;
	/**
	 * @var int
	 */
	public $ResourceType;
	/**
	 * @var int
	 */
	public $Status;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_ResourceID
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_ResourceID) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:80: characters 3-107
		return SQL::SELECT()->FROM(PL_ExtensionResource::$table)->WHERE(Condition::SET(PL_ExtensionResource::$col_ResourceID, Op::Equal(), Val::uuid($val_ResourceID)));
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
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:71: characters 3-51
		return SQL::SELECT()->FROM(PL_ExtensionResource::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase PL_ExtensionResource que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_ExtensionID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:93: characters 3-21
		return $this->ExtensionID;
	}

	/**
	 * @return string
	 */
	public function get_InternalName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:121: characters 3-22
		return $this->InternalName;
	}

	/**
	 * @return UUID
	 */
	public function get_ResourceID () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:86: characters 3-20
		return $this->ResourceID;
	}

	/**
	 * @return string
	 */
	public function get_ResourceName () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:107: characters 3-22
		return $this->ResourceName;
	}

	/**
	 * @return int
	 */
	public function get_ResourceType () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:135: characters 3-22
		return $this->ResourceType;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:149: characters 3-16
		return $this->Status;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_ExtensionID ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:99: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_ExtensionID() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:99: characters 75-90
			$tmp = PL_ExtensionResource::$col_ExtensionID;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:99: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_ExtensionID(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:100: characters 3-27
		return $this->ExtensionID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_InternalName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:127: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_InternalName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:127: characters 76-92
			$tmp = PL_ExtensionResource::$col_InternalName;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:127: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_InternalName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:128: characters 3-28
		return $this->InternalName = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_ResourceName ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:113: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_ResourceName() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:113: characters 76-92
			$tmp = PL_ExtensionResource::$col_ResourceName;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:113: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_ResourceName(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:114: characters 3-28
		return $this->ResourceName = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_ResourceType ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:141: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_ResourceType() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:141: characters 76-92
			$tmp = PL_ExtensionResource::$col_ResourceType;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:141: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_ResourceType(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:142: characters 3-28
		return $this->ResourceType = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:155: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:155: characters 70-80
			$tmp = PL_ExtensionResource::$col_Status;
			#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:155: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/nmorph_core/PL_ExtensionResource.hx:156: characters 3-22
		return $this->Status = $value;
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


		self::$table = new TableSource("PL_ExtensionResource");
		self::$col_ResourceID = new UUIDSentence("PL_ExtensionResource", "ResourceID", NullableEnum::NOTNULL(), true);
		self::$col_ExtensionID = new UUIDSentence("PL_ExtensionResource", "ExtensionID", NullableEnum::NULL(), false);
		self::$col_ResourceName = new VarcharSentence("PL_ExtensionResource", "ResourceName", 250, NullableEnum::NULL(), false);
		self::$col_InternalName = new VarcharSentence("PL_ExtensionResource", "InternalName", 250, NullableEnum::NULL(), false);
		self::$col_ResourceType = new SmallIntegerSentence("PL_ExtensionResource", "ResourceType", NullableEnum::NULL(), false);
		self::$col_Status = new SmallIntegerSentence("PL_ExtensionResource", "Status", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(PL_ExtensionResource::class, 'nMorph.core.db.nmorph_core.PL_ExtensionResource');
Boot::registerGetters('nMorph\\core\\db\\nmorph_core\\PL_ExtensionResource', [
	'Status' => true,
	'ResourceType' => true,
	'InternalName' => true,
	'ResourceName' => true,
	'ExtensionID' => true,
	'ResourceID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\nmorph_core\\PL_ExtensionResource', [
	'Status' => true,
	'ResourceType' => true,
	'InternalName' => true,
	'ResourceName' => true,
	'ExtensionID' => true
]);
PL_ExtensionResource::__hx__init();
