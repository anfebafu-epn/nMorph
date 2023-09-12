<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\zhungo_core;

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
class SC_HistorialMovimientos extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.SC_HistorialMovimientos\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;SC_HistorialMovimientos&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"SC_HistorialMovimientos\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_HistorialID public=\"1\" expr=\"new UUIDSentence(&quot;SC_HistorialMovimientos&quot;, &quot;HistorialID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"SC_HistorialMovimientos\", \"HistorialID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna HistorialID</haxe_doc>\x0A\x09</col_HistorialID>\x0A\x09<col_SuscripcionID public=\"1\" expr=\"new UUIDSentence(&quot;SC_HistorialMovimientos&quot;, &quot;SuscripcionID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"SC_HistorialMovimientos\", \"SuscripcionID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SuscripcionID</haxe_doc>\x0A\x09</col_SuscripcionID>\x0A\x09<col_DescriopcionMovimiento public=\"1\" expr=\"new VarcharSentence(&quot;SC_HistorialMovimientos&quot;, &quot;DescriopcionMovimiento&quot;, 200, NullableEnum.NULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"SC_HistorialMovimientos\", \"DescriopcionMovimiento\", 200, NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna DescriopcionMovimiento</haxe_doc>\x0A\x09</col_DescriopcionMovimiento>\x0A\x09<col_FechaMovimiento public=\"1\" expr=\"new DateTimeSentence(&quot;SC_HistorialMovimientos&quot;, &quot;FechaMovimiento&quot;, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"SC_HistorialMovimientos\", \"FechaMovimiento\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FechaMovimiento</haxe_doc>\x0A\x09</col_FechaMovimiento>\x0A\x09<col_FechaCreacion public=\"1\" expr=\"new DateTimeSentence(&quot;SC_HistorialMovimientos&quot;, &quot;FechaCreacion&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"SC_HistorialMovimientos\", \"FechaCreacion\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FechaCreacion</haxe_doc>\x0A\x09</col_FechaCreacion>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;SC_HistorialMovimientos&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"SC_HistorialMovimientos\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<col_Estado public=\"1\" expr=\"new BooleanSentence(&quot;SC_HistorialMovimientos&quot;, &quot;Estado&quot;, NullableEnum.NULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new BooleanSentence(\"SC_HistorialMovimientos\", \"Estado\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Estado</haxe_doc>\x0A\x09</col_Estado>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"75\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"84\" static=\"1\">\x0A\x09\x09<f a=\"val_HistorialID:val_DescriopcionMovimiento\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"String\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<HistorialID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</HistorialID>\x0A\x09<get_HistorialID public=\"1\" set=\"method\" line=\"90\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_HistorialID>\x0A\x09<SuscripcionID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SuscripcionID>\x0A\x09<get_SuscripcionID public=\"1\" set=\"method\" line=\"97\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_SuscripcionID>\x0A\x09<set_SuscripcionID public=\"1\" set=\"method\" line=\"101\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_SuscripcionID>\x0A\x09<DescriopcionMovimiento get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</DescriopcionMovimiento>\x0A\x09<get_DescriopcionMovimiento public=\"1\" set=\"method\" line=\"111\"><f a=\"\"><c path=\"String\"/></f></get_DescriopcionMovimiento>\x0A\x09<FechaMovimiento get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FechaMovimiento>\x0A\x09<get_FechaMovimiento public=\"1\" set=\"method\" line=\"118\"><f a=\"\"><c path=\"Date\"/></f></get_FechaMovimiento>\x0A\x09<set_FechaMovimiento public=\"1\" set=\"method\" line=\"122\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_FechaMovimiento>\x0A\x09<FechaCreacion get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FechaCreacion>\x0A\x09<get_FechaCreacion public=\"1\" set=\"method\" line=\"132\"><f a=\"\"><c path=\"Date\"/></f></get_FechaCreacion>\x0A\x09<set_FechaCreacion public=\"1\" set=\"method\" line=\"136\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_FechaCreacion>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"146\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"150\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<Estado get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Estado>\x0A\x09<get_Estado public=\"1\" set=\"method\" line=\"160\"><f a=\"\"><x path=\"Null\"><x path=\"Bool\"/></x></f></get_Estado>\x0A\x09<set_Estado public=\"1\" set=\"method\" line=\"164\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A</f></set_Estado>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase SC_HistorialMovimientos que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var VarcharSentence
	 * Referencia a columna DescriopcionMovimiento
	 */
	static public $col_DescriopcionMovimiento;
	/**
	 * @var BooleanSentence
	 * Referencia a columna Estado
	 */
	static public $col_Estado;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna FechaCreacion
	 */
	static public $col_FechaCreacion;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna FechaMovimiento
	 */
	static public $col_FechaMovimiento;
	/**
	 * @var UUIDSentence
	 * Referencia a columna HistorialID
	 */
	static public $col_HistorialID;
	/**
	 * @var SmallIntegerSentence
	 * Referencia a columna Status
	 */
	static public $col_Status;
	/**
	 * @var UUIDSentence
	 * Referencia a columna SuscripcionID
	 */
	static public $col_SuscripcionID;
	/**
	 * @var ISource
	 * referencia a tabla para consultas
	 */
	static public $table;

	/**
	 * @var string
	 */
	public $DescriopcionMovimiento;
	/**
	 * @var bool
	 */
	public $Estado;
	/**
	 * @var \Date
	 */
	public $FechaCreacion;
	/**
	 * @var \Date
	 */
	public $FechaMovimiento;
	/**
	 * @var UUID
	 */
	public $HistorialID;
	/**
	 * @var int
	 */
	public $Status;
	/**
	 * @var UUID
	 */
	public $SuscripcionID;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_HistorialID
	 * @param string $val_DescriopcionMovimiento
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_HistorialID, $val_DescriopcionMovimiento) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:85: characters 3-194
		return SQL::SELECT()->FROM(SC_HistorialMovimientos::$table)->WHERE(Condition::SET(SC_HistorialMovimientos::$col_HistorialID, Op::Equal(), Val::uuid($val_HistorialID))->AND_Ex(SC_HistorialMovimientos::$col_DescriopcionMovimiento, Op::Equal(), Val::string($val_DescriopcionMovimiento)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:76: characters 3-51
		return SQL::SELECT()->FROM(SC_HistorialMovimientos::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase SC_HistorialMovimientos que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return string
	 */
	public function get_DescriopcionMovimiento () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:112: characters 3-32
		return $this->DescriopcionMovimiento;
	}

	/**
	 * @return bool
	 */
	public function get_Estado () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:161: characters 3-16
		return $this->Estado;
	}

	/**
	 * @return \Date
	 */
	public function get_FechaCreacion () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:133: characters 3-23
		return $this->FechaCreacion;
	}

	/**
	 * @return \Date
	 */
	public function get_FechaMovimiento () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:119: characters 3-25
		return $this->FechaMovimiento;
	}

	/**
	 * @return UUID
	 */
	public function get_HistorialID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:91: characters 3-21
		return $this->HistorialID;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:147: characters 3-16
		return $this->Status;
	}

	/**
	 * @return UUID
	 */
	public function get_SuscripcionID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:98: characters 3-23
		return $this->SuscripcionID;
	}

	/**
	 * @param bool $value
	 * 
	 * @return bool
	 */
	public function set_Estado ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:167: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Estado() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:167: characters 70-80
			$tmp = SC_HistorialMovimientos::$col_Estado;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:167: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Estado(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:168: characters 3-22
		return $this->Estado = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_FechaCreacion ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:139: characters 3-123
		if ($this->get_TrackChanges() && ($this->get_FechaCreacion() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:139: characters 77-94
			$tmp = SC_HistorialMovimientos::$col_FechaCreacion;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:139: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_FechaCreacion(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:140: characters 3-29
		return $this->FechaCreacion = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_FechaMovimiento ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:125: characters 3-129
		if ($this->get_TrackChanges() && ($this->get_FechaMovimiento() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:125: characters 79-98
			$tmp = SC_HistorialMovimientos::$col_FechaMovimiento;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:125: characters 54-129
			$this->AddChange(new ChangeItem($tmp, $this->get_FechaMovimiento(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:126: characters 3-31
		return $this->FechaMovimiento = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:153: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:153: characters 70-80
			$tmp = SC_HistorialMovimientos::$col_Status;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:153: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:154: characters 3-22
		return $this->Status = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_SuscripcionID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:104: characters 3-123
		if ($this->get_TrackChanges() && ($this->get_SuscripcionID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:104: characters 77-94
			$tmp = SC_HistorialMovimientos::$col_SuscripcionID;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:104: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_SuscripcionID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_HistorialMovimientos.hx:105: characters 3-29
		return $this->SuscripcionID = $value;
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


		self::$table = new TableSource("SC_HistorialMovimientos");
		self::$col_HistorialID = new UUIDSentence("SC_HistorialMovimientos", "HistorialID", NullableEnum::NOTNULL(), true);
		self::$col_SuscripcionID = new UUIDSentence("SC_HistorialMovimientos", "SuscripcionID", NullableEnum::NULL(), false);
		self::$col_DescriopcionMovimiento = new VarcharSentence("SC_HistorialMovimientos", "DescriopcionMovimiento", 200, NullableEnum::NULL(), true);
		self::$col_FechaMovimiento = new DateTimeSentence("SC_HistorialMovimientos", "FechaMovimiento", NullableEnum::NULL(), false);
		self::$col_FechaCreacion = new DateTimeSentence("SC_HistorialMovimientos", "FechaCreacion", NullableEnum::NULL(), false);
		self::$col_Status = new SmallIntegerSentence("SC_HistorialMovimientos", "Status", NullableEnum::NULL(), false);
		self::$col_Estado = new BooleanSentence("SC_HistorialMovimientos", "Estado", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(SC_HistorialMovimientos::class, 'nMorph.core.db.zhungo_core.SC_HistorialMovimientos');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\SC_HistorialMovimientos', [
	'Estado' => true,
	'Status' => true,
	'FechaCreacion' => true,
	'FechaMovimiento' => true,
	'DescriopcionMovimiento' => true,
	'SuscripcionID' => true,
	'HistorialID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\SC_HistorialMovimientos', [
	'Estado' => true,
	'Status' => true,
	'FechaCreacion' => true,
	'FechaMovimiento' => true,
	'SuscripcionID' => true
]);
SC_HistorialMovimientos::__hx__init();
