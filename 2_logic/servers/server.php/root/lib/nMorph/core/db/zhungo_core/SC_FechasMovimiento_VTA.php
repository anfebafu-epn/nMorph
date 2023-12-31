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
use \nMorph\framework\orm\common\sources\ViewSource;
use \nMorph\framework\orm\common\clauses\WhereClause;
use \nMorph\framework\orm\client\ChangeItem;
use \nMorph\framework\orm\common\fields\VarcharSentence;
use \nMorph\framework\common\datatypes\UUID;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class SC_FechasMovimiento_VTA extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.SC_FechasMovimiento_VTA\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<view public=\"1\" expr=\"new ViewSource(&quot;SC_FechasMovimiento_VTA&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new ViewSource(\"SC_FechasMovimiento_VTA\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a vista para consultas</haxe_doc>\x0A\x09</view>\x0A\x09<col_id public=\"1\" expr=\"new UUIDSentence(&quot;SC_FechasMovimiento_VTA&quot;, &quot;id&quot;, NullableEnum.NULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"SC_FechasMovimiento_VTA\", \"id\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna id</haxe_doc>\x0A\x09</col_id>\x0A\x09<col_PlanID public=\"1\" expr=\"new UUIDSentence(&quot;SC_FechasMovimiento_VTA&quot;, &quot;PlanID&quot;, NullableEnum.NOTNULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"SC_FechasMovimiento_VTA\", \"PlanID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PlanID</haxe_doc>\x0A\x09</col_PlanID>\x0A\x09<col_NombrePlan public=\"1\" expr=\"new VarcharSentence(&quot;SC_FechasMovimiento_VTA&quot;, &quot;NombrePlan&quot;, 150, NullableEnum.NOTNULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"SC_FechasMovimiento_VTA\", \"NombrePlan\", 150, NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna NombrePlan</haxe_doc>\x0A\x09</col_NombrePlan>\x0A\x09<col_NombreMovimiento public=\"1\" expr=\"new VarcharSentence(&quot;SC_FechasMovimiento_VTA&quot;, &quot;NombreMovimiento&quot;, 150, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"SC_FechasMovimiento_VTA\", \"NombreMovimiento\", 150, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna NombreMovimiento</haxe_doc>\x0A\x09</col_NombreMovimiento>\x0A\x09<col_fechaDesde public=\"1\" expr=\"new DateTimeSentence(&quot;SC_FechasMovimiento_VTA&quot;, &quot;fechaDesde&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"SC_FechasMovimiento_VTA\", \"fechaDesde\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna fechaDesde</haxe_doc>\x0A\x09</col_fechaDesde>\x0A\x09<col_fechaHasta public=\"1\" expr=\"new DateTimeSentence(&quot;SC_FechasMovimiento_VTA&quot;, &quot;fechaHasta&quot;, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"SC_FechasMovimiento_VTA\", \"fechaHasta\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna fechaHasta</haxe_doc>\x0A\x09</col_fechaHasta>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"70\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"79\" static=\"1\">\x0A\x09\x09<f a=\"val_id:val_NombrePlan\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"String\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<id get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</id>\x0A\x09<get_id public=\"1\" set=\"method\" line=\"85\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_id>\x0A\x09<PlanID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PlanID>\x0A\x09<get_PlanID public=\"1\" set=\"method\" line=\"92\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PlanID>\x0A\x09<set_PlanID public=\"1\" set=\"method\" line=\"96\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_PlanID>\x0A\x09<NombrePlan get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</NombrePlan>\x0A\x09<get_NombrePlan public=\"1\" set=\"method\" line=\"106\"><f a=\"\"><c path=\"String\"/></f></get_NombrePlan>\x0A\x09<NombreMovimiento get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</NombreMovimiento>\x0A\x09<get_NombreMovimiento public=\"1\" set=\"method\" line=\"113\"><f a=\"\"><c path=\"String\"/></f></get_NombreMovimiento>\x0A\x09<set_NombreMovimiento public=\"1\" set=\"method\" line=\"117\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_NombreMovimiento>\x0A\x09<fechaDesde get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</fechaDesde>\x0A\x09<get_fechaDesde public=\"1\" set=\"method\" line=\"127\"><f a=\"\"><c path=\"Date\"/></f></get_fechaDesde>\x0A\x09<set_fechaDesde public=\"1\" set=\"method\" line=\"131\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_fechaDesde>\x0A\x09<fechaHasta get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</fechaHasta>\x0A\x09<get_fechaHasta public=\"1\" set=\"method\" line=\"141\"><f a=\"\"><c path=\"Date\"/></f></get_fechaHasta>\x0A\x09<set_fechaHasta public=\"1\" set=\"method\" line=\"145\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_fechaHasta>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase SC_FechasMovimiento_VTA que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var VarcharSentence
	 * Referencia a columna NombreMovimiento
	 */
	static public $col_NombreMovimiento;
	/**
	 * @var VarcharSentence
	 * Referencia a columna NombrePlan
	 */
	static public $col_NombrePlan;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PlanID
	 */
	static public $col_PlanID;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna fechaDesde
	 */
	static public $col_fechaDesde;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna fechaHasta
	 */
	static public $col_fechaHasta;
	/**
	 * @var UUIDSentence
	 * Referencia a columna id
	 */
	static public $col_id;
	/**
	 * @var ISource
	 * referencia a vista para consultas
	 */
	static public $view;

	/**
	 * @var string
	 */
	public $NombreMovimiento;
	/**
	 * @var string
	 */
	public $NombrePlan;
	/**
	 * @var UUID
	 */
	public $PlanID;
	/**
	 * @var \Date
	 */
	public $fechaDesde;
	/**
	 * @var \Date
	 */
	public $fechaHasta;
	/**
	 * @var UUID
	 */
	public $id;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_id
	 * @param string $val_NombrePlan
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_id, $val_NombrePlan) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:80: characters 3-151
		return SQL::SELECT()->FROM(SC_FechasMovimiento_VTA::$view)->WHERE(Condition::SET(SC_FechasMovimiento_VTA::$col_id, Op::Equal(), Val::uuid($val_id))->AND_Ex(SC_FechasMovimiento_VTA::$col_NombrePlan, Op::Equal(), Val::string($val_NombrePlan)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:71: characters 3-50
		return SQL::SELECT()->FROM(SC_FechasMovimiento_VTA::$view)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase SC_FechasMovimiento_VTA que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return string
	 */
	public function get_NombreMovimiento () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:114: characters 3-26
		return $this->NombreMovimiento;
	}

	/**
	 * @return string
	 */
	public function get_NombrePlan () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:107: characters 3-20
		return $this->NombrePlan;
	}

	/**
	 * @return UUID
	 */
	public function get_PlanID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:93: characters 3-16
		return $this->PlanID;
	}

	/**
	 * @return \Date
	 */
	public function get_fechaDesde () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:128: characters 3-20
		return $this->fechaDesde;
	}

	/**
	 * @return \Date
	 */
	public function get_fechaHasta () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:142: characters 3-20
		return $this->fechaHasta;
	}

	/**
	 * @return UUID
	 */
	public function get_id () {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:86: characters 3-12
		return $this->id;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_NombreMovimiento ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:120: characters 3-132
		if ($this->get_TrackChanges() && ($this->get_NombreMovimiento() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:120: characters 80-100
			$tmp = SC_FechasMovimiento_VTA::$col_NombreMovimiento;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:120: characters 55-132
			$this->AddChange(new ChangeItem($tmp, $this->get_NombreMovimiento(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:121: characters 3-32
		return $this->NombreMovimiento = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_PlanID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:99: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_PlanID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:99: characters 70-80
			$tmp = SC_FechasMovimiento_VTA::$col_PlanID;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:99: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_PlanID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:100: characters 3-22
		return $this->PlanID = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_fechaDesde ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:134: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_fechaDesde() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:134: characters 74-88
			$tmp = SC_FechasMovimiento_VTA::$col_fechaDesde;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:134: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_fechaDesde(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:135: characters 3-26
		return $this->fechaDesde = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_fechaHasta ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:148: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_fechaHasta() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:148: characters 74-88
			$tmp = SC_FechasMovimiento_VTA::$col_fechaHasta;
			#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:148: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_fechaHasta(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/SC_FechasMovimiento_VTA.hx:149: characters 3-26
		return $this->fechaHasta = $value;
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


		self::$view = new ViewSource("SC_FechasMovimiento_VTA");
		self::$col_id = new UUIDSentence("SC_FechasMovimiento_VTA", "id", NullableEnum::NULL(), true);
		self::$col_PlanID = new UUIDSentence("SC_FechasMovimiento_VTA", "PlanID", NullableEnum::NOTNULL(), false);
		self::$col_NombrePlan = new VarcharSentence("SC_FechasMovimiento_VTA", "NombrePlan", 150, NullableEnum::NOTNULL(), true);
		self::$col_NombreMovimiento = new VarcharSentence("SC_FechasMovimiento_VTA", "NombreMovimiento", 150, NullableEnum::NULL(), false);
		self::$col_fechaDesde = new DateTimeSentence("SC_FechasMovimiento_VTA", "fechaDesde", NullableEnum::NULL(), false);
		self::$col_fechaHasta = new DateTimeSentence("SC_FechasMovimiento_VTA", "fechaHasta", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(SC_FechasMovimiento_VTA::class, 'nMorph.core.db.zhungo_core.SC_FechasMovimiento_VTA');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\SC_FechasMovimiento_VTA', [
	'fechaHasta' => true,
	'fechaDesde' => true,
	'NombreMovimiento' => true,
	'NombrePlan' => true,
	'PlanID' => true,
	'id' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\SC_FechasMovimiento_VTA', [
	'fechaHasta' => true,
	'fechaDesde' => true,
	'NombreMovimiento' => true,
	'PlanID' => true
]);
SC_FechasMovimiento_VTA::__hx__init();
