<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\zhungo_core;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\common\fields\DecimalSentence;
use \nMorph\framework\orm\interfaces\ICondition;
use \nMorph\framework\orm\common\sentences\Val;
use \nMorph\framework\orm\client\ModelObject;
use \php\Boot;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\common\conditions\Condition;
use \nMorph\framework\orm\common\fields\IntegerSentence;
use \nMorph\framework\orm\common\sources\ViewSource;
use \nMorph\framework\orm\common\clauses\WhereClause;
use \nMorph\framework\orm\client\ChangeItem;
use \nMorph\framework\common\datatypes\UUID;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class PL_Cuota_VTA extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.PL_Cuota_VTA\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<view public=\"1\" expr=\"new ViewSource(&quot;PL_Cuota_VTA&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new ViewSource(\"PL_Cuota_VTA\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a vista para consultas</haxe_doc>\x0A\x09</view>\x0A\x09<col_SuscripcionID public=\"1\" expr=\"new UUIDSentence(&quot;PL_Cuota_VTA&quot;, &quot;SuscripcionID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_Cuota_VTA\", \"SuscripcionID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SuscripcionID</haxe_doc>\x0A\x09</col_SuscripcionID>\x0A\x09<col_PlanID public=\"1\" expr=\"new UUIDSentence(&quot;PL_Cuota_VTA&quot;, &quot;PlanID&quot;, NullableEnum.NOTNULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_Cuota_VTA\", \"PlanID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PlanID</haxe_doc>\x0A\x09</col_PlanID>\x0A\x09<col_Couta public=\"1\" expr=\"new IntegerSentence(&quot;PL_Cuota_VTA&quot;, &quot;Couta&quot;, NullableEnum.NULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"PL_Cuota_VTA\", \"Couta\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Couta</haxe_doc>\x0A\x09</col_Couta>\x0A\x09<col_lapsoid public=\"1\" expr=\"new UUIDSentence(&quot;PL_Cuota_VTA&quot;, &quot;lapsoid&quot;, NullableEnum.NOTNULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PL_Cuota_VTA\", \"lapsoid\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna lapsoid</haxe_doc>\x0A\x09</col_lapsoid>\x0A\x09<col_IdentificadorLapsos public=\"1\" expr=\"new IntegerSentence(&quot;PL_Cuota_VTA&quot;, &quot;IdentificadorLapsos&quot;, NullableEnum.NOTNULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"PL_Cuota_VTA\", \"IdentificadorLapsos\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IdentificadorLapsos</haxe_doc>\x0A\x09</col_IdentificadorLapsos>\x0A\x09<col_total public=\"1\" expr=\"new DecimalSentence(&quot;PL_Cuota_VTA&quot;, &quot;total&quot;, 17, 8, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"PL_Cuota_VTA\", \"total\", 17, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna total</haxe_doc>\x0A\x09</col_total>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"70\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"79\" static=\"1\">\x0A\x09\x09<f a=\"val_SuscripcionID:val_Couta\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<SuscripcionID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SuscripcionID>\x0A\x09<get_SuscripcionID public=\"1\" set=\"method\" line=\"85\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_SuscripcionID>\x0A\x09<PlanID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PlanID>\x0A\x09<get_PlanID public=\"1\" set=\"method\" line=\"92\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PlanID>\x0A\x09<set_PlanID public=\"1\" set=\"method\" line=\"96\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_PlanID>\x0A\x09<Couta get=\"accessor\" set=\"null\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Couta>\x0A\x09<get_Couta public=\"1\" set=\"method\" line=\"106\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Couta>\x0A\x09<lapsoid get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</lapsoid>\x0A\x09<get_lapsoid public=\"1\" set=\"method\" line=\"113\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_lapsoid>\x0A\x09<set_lapsoid public=\"1\" set=\"method\" line=\"117\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_lapsoid>\x0A\x09<IdentificadorLapsos get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Int\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IdentificadorLapsos>\x0A\x09<get_IdentificadorLapsos public=\"1\" set=\"method\" line=\"127\"><f a=\"\"><x path=\"Int\"/></f></get_IdentificadorLapsos>\x0A\x09<set_IdentificadorLapsos public=\"1\" set=\"method\" line=\"131\"><f a=\"value\">\x0A\x09<x path=\"Int\"/>\x0A\x09<x path=\"Int\"/>\x0A</f></set_IdentificadorLapsos>\x0A\x09<total get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</total>\x0A\x09<get_total public=\"1\" set=\"method\" line=\"141\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_total>\x0A\x09<set_total public=\"1\" set=\"method\" line=\"145\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_total>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase PL_Cuota_VTA que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var IntegerSentence
	 * Referencia a columna Couta
	 */
	static public $col_Couta;
	/**
	 * @var IntegerSentence
	 * Referencia a columna IdentificadorLapsos
	 */
	static public $col_IdentificadorLapsos;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PlanID
	 */
	static public $col_PlanID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna SuscripcionID
	 */
	static public $col_SuscripcionID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna lapsoid
	 */
	static public $col_lapsoid;
	/**
	 * @var DecimalSentence
	 * Referencia a columna total
	 */
	static public $col_total;
	/**
	 * @var ISource
	 * referencia a vista para consultas
	 */
	static public $view;

	/**
	 * @var int
	 */
	public $Couta;
	/**
	 * @var int
	 */
	public $IdentificadorLapsos;
	/**
	 * @var UUID
	 */
	public $PlanID;
	/**
	 * @var UUID
	 */
	public $SuscripcionID;
	/**
	 * @var UUID
	 */
	public $lapsoid;
	/**
	 * @var float
	 */
	public $total;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_SuscripcionID
	 * @param int $val_Couta
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_SuscripcionID, $val_Couta) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:80: characters 3-160
		return SQL::SELECT()->FROM(PL_Cuota_VTA::$view)->WHERE(Condition::SET(PL_Cuota_VTA::$col_SuscripcionID, Op::Equal(), Val::uuid($val_SuscripcionID))->AND_Ex(PL_Cuota_VTA::$col_Couta, Op::Equal(), Val::int($val_Couta)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:71: characters 3-50
		return SQL::SELECT()->FROM(PL_Cuota_VTA::$view)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase PL_Cuota_VTA que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return int
	 */
	public function get_Couta () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:107: characters 3-15
		return $this->Couta;
	}

	/**
	 * @return int
	 */
	public function get_IdentificadorLapsos () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:128: characters 3-29
		return $this->IdentificadorLapsos;
	}

	/**
	 * @return UUID
	 */
	public function get_PlanID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:93: characters 3-16
		return $this->PlanID;
	}

	/**
	 * @return UUID
	 */
	public function get_SuscripcionID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:86: characters 3-23
		return $this->SuscripcionID;
	}

	/**
	 * @return UUID
	 */
	public function get_lapsoid () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:114: characters 3-17
		return $this->lapsoid;
	}

	/**
	 * @return float
	 */
	public function get_total () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:142: characters 3-15
		return $this->total;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_IdentificadorLapsos ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:134: characters 3-141
		if ($this->get_TrackChanges() && ($this->get_IdentificadorLapsos() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:134: characters 83-106
			$tmp = PL_Cuota_VTA::$col_IdentificadorLapsos;
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:134: characters 58-141
			$this->AddChange(new ChangeItem($tmp, $this->get_IdentificadorLapsos(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:135: characters 3-35
		return $this->IdentificadorLapsos = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_PlanID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:99: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_PlanID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:99: characters 70-80
			$tmp = PL_Cuota_VTA::$col_PlanID;
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:99: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_PlanID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:100: characters 3-22
		return $this->PlanID = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_lapsoid ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:120: characters 3-105
		if ($this->get_TrackChanges() && ($this->get_lapsoid() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:120: characters 71-82
			$tmp = PL_Cuota_VTA::$col_lapsoid;
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:120: characters 46-105
			$this->AddChange(new ChangeItem($tmp, $this->get_lapsoid(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:121: characters 3-23
		return $this->lapsoid = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_total ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:148: characters 3-99
		if ($this->get_TrackChanges() && !Boot::equal($this->get_total(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:148: characters 69-78
			$tmp = PL_Cuota_VTA::$col_total;
			#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:148: characters 44-99
			$this->AddChange(new ChangeItem($tmp, $this->get_total(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PL_Cuota_VTA.hx:149: characters 3-21
		return $this->total = $value;
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


		self::$view = new ViewSource("PL_Cuota_VTA");
		self::$col_SuscripcionID = new UUIDSentence("PL_Cuota_VTA", "SuscripcionID", NullableEnum::NOTNULL(), true);
		self::$col_PlanID = new UUIDSentence("PL_Cuota_VTA", "PlanID", NullableEnum::NOTNULL(), false);
		self::$col_Couta = new IntegerSentence("PL_Cuota_VTA", "Couta", NullableEnum::NULL(), true);
		self::$col_lapsoid = new UUIDSentence("PL_Cuota_VTA", "lapsoid", NullableEnum::NOTNULL(), false);
		self::$col_IdentificadorLapsos = new IntegerSentence("PL_Cuota_VTA", "IdentificadorLapsos", NullableEnum::NOTNULL(), false);
		self::$col_total = new DecimalSentence("PL_Cuota_VTA", "total", 17, 8, NullableEnum::NULL(), false);
	}
}

Boot::registerClass(PL_Cuota_VTA::class, 'nMorph.core.db.zhungo_core.PL_Cuota_VTA');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\PL_Cuota_VTA', [
	'total' => true,
	'IdentificadorLapsos' => true,
	'lapsoid' => true,
	'Couta' => true,
	'PlanID' => true,
	'SuscripcionID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\PL_Cuota_VTA', [
	'total' => true,
	'IdentificadorLapsos' => true,
	'lapsoid' => true,
	'PlanID' => true
]);
PL_Cuota_VTA::__hx__init();
