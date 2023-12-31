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
class FC_ActualizarSolicitudes_VTA extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.FC_ActualizarSolicitudes_VTA\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<view public=\"1\" expr=\"new ViewSource(&quot;FC_ActualizarSolicitudes_VTA&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new ViewSource(\"FC_ActualizarSolicitudes_VTA\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a vista para consultas</haxe_doc>\x0A\x09</view>\x0A\x09<col_IDProceso public=\"1\" expr=\"new UUIDSentence(&quot;FC_ActualizarSolicitudes_VTA&quot;, &quot;IDProceso&quot;, NullableEnum.NULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_ActualizarSolicitudes_VTA\", \"IDProceso\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IDProceso</haxe_doc>\x0A\x09</col_IDProceso>\x0A\x09<col_EmpresaID public=\"1\" expr=\"new UUIDSentence(&quot;FC_ActualizarSolicitudes_VTA&quot;, &quot;EmpresaID&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_ActualizarSolicitudes_VTA\", \"EmpresaID\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EmpresaID</haxe_doc>\x0A\x09</col_EmpresaID>\x0A\x09<col_IDGrupo public=\"1\" expr=\"new UUIDSentence(&quot;FC_ActualizarSolicitudes_VTA&quot;, &quot;IDGrupo&quot;, NullableEnum.NULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_ActualizarSolicitudes_VTA\", \"IDGrupo\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IDGrupo</haxe_doc>\x0A\x09</col_IDGrupo>\x0A\x09<col_Tipo public=\"1\" expr=\"new VarcharSentence(&quot;FC_ActualizarSolicitudes_VTA&quot;, &quot;Tipo&quot;, 150, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"FC_ActualizarSolicitudes_VTA\", \"Tipo\", 150, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Tipo</haxe_doc>\x0A\x09</col_Tipo>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"60\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"69\" static=\"1\">\x0A\x09\x09<f a=\"val_IDProceso:val_IDGrupo\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<IDProceso get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IDProceso>\x0A\x09<get_IDProceso public=\"1\" set=\"method\" line=\"75\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_IDProceso>\x0A\x09<EmpresaID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EmpresaID>\x0A\x09<get_EmpresaID public=\"1\" set=\"method\" line=\"82\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_EmpresaID>\x0A\x09<set_EmpresaID public=\"1\" set=\"method\" line=\"86\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_EmpresaID>\x0A\x09<IDGrupo get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IDGrupo>\x0A\x09<get_IDGrupo public=\"1\" set=\"method\" line=\"96\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_IDGrupo>\x0A\x09<Tipo get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Tipo>\x0A\x09<get_Tipo public=\"1\" set=\"method\" line=\"103\"><f a=\"\"><c path=\"String\"/></f></get_Tipo>\x0A\x09<set_Tipo public=\"1\" set=\"method\" line=\"107\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_Tipo>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase FC_ActualizarSolicitudes_VTA que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna EmpresaID
	 */
	static public $col_EmpresaID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna IDGrupo
	 */
	static public $col_IDGrupo;
	/**
	 * @var UUIDSentence
	 * Referencia a columna IDProceso
	 */
	static public $col_IDProceso;
	/**
	 * @var VarcharSentence
	 * Referencia a columna Tipo
	 */
	static public $col_Tipo;
	/**
	 * @var ISource
	 * referencia a vista para consultas
	 */
	static public $view;

	/**
	 * @var UUID
	 */
	public $EmpresaID;
	/**
	 * @var UUID
	 */
	public $IDGrupo;
	/**
	 * @var UUID
	 */
	public $IDProceso;
	/**
	 * @var string
	 */
	public $Tipo;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_IDProceso
	 * @param UUID $val_IDGrupo
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_IDProceso, $val_IDGrupo) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:70: characters 3-157
		return SQL::SELECT()->FROM(FC_ActualizarSolicitudes_VTA::$view)->WHERE(Condition::SET(FC_ActualizarSolicitudes_VTA::$col_IDProceso, Op::Equal(), Val::uuid($val_IDProceso))->AND_Ex(FC_ActualizarSolicitudes_VTA::$col_IDGrupo, Op::Equal(), Val::uuid($val_IDGrupo)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:61: characters 3-50
		return SQL::SELECT()->FROM(FC_ActualizarSolicitudes_VTA::$view)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase FC_ActualizarSolicitudes_VTA que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_EmpresaID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:83: characters 3-19
		return $this->EmpresaID;
	}

	/**
	 * @return UUID
	 */
	public function get_IDGrupo () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:97: characters 3-17
		return $this->IDGrupo;
	}

	/**
	 * @return UUID
	 */
	public function get_IDProceso () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:76: characters 3-19
		return $this->IDProceso;
	}

	/**
	 * @return string
	 */
	public function get_Tipo () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:104: characters 3-14
		return $this->Tipo;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_EmpresaID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:89: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_EmpresaID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:89: characters 73-86
			$tmp = FC_ActualizarSolicitudes_VTA::$col_EmpresaID;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:89: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_EmpresaID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:90: characters 3-25
		return $this->EmpresaID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Tipo ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:110: characters 3-96
		if ($this->get_TrackChanges() && ($this->get_Tipo() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:110: characters 68-76
			$tmp = FC_ActualizarSolicitudes_VTA::$col_Tipo;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:110: characters 43-96
			$this->AddChange(new ChangeItem($tmp, $this->get_Tipo(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_ActualizarSolicitudes_VTA.hx:111: characters 3-20
		return $this->Tipo = $value;
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


		self::$view = new ViewSource("FC_ActualizarSolicitudes_VTA");
		self::$col_IDProceso = new UUIDSentence("FC_ActualizarSolicitudes_VTA", "IDProceso", NullableEnum::NULL(), true);
		self::$col_EmpresaID = new UUIDSentence("FC_ActualizarSolicitudes_VTA", "EmpresaID", NullableEnum::NULL(), false);
		self::$col_IDGrupo = new UUIDSentence("FC_ActualizarSolicitudes_VTA", "IDGrupo", NullableEnum::NULL(), true);
		self::$col_Tipo = new VarcharSentence("FC_ActualizarSolicitudes_VTA", "Tipo", 150, NullableEnum::NULL(), false);
	}
}

Boot::registerClass(FC_ActualizarSolicitudes_VTA::class, 'nMorph.core.db.zhungo_core.FC_ActualizarSolicitudes_VTA');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\FC_ActualizarSolicitudes_VTA', [
	'Tipo' => true,
	'IDGrupo' => true,
	'EmpresaID' => true,
	'IDProceso' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\FC_ActualizarSolicitudes_VTA', [
	'Tipo' => true,
	'EmpresaID' => true
]);
FC_ActualizarSolicitudes_VTA::__hx__init();
