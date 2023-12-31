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
class CT_Pais extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.CT_Pais\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;CT_Pais&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"CT_Pais\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_PaisID public=\"1\" expr=\"new UUIDSentence(&quot;CT_Pais&quot;, &quot;PaisID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"CT_Pais\", \"PaisID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PaisID</haxe_doc>\x0A\x09</col_PaisID>\x0A\x09<col_NombrePais public=\"1\" expr=\"new VarcharSentence(&quot;CT_Pais&quot;, &quot;NombrePais&quot;, 150, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"CT_Pais\", \"NombrePais\", 150, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna NombrePais</haxe_doc>\x0A\x09</col_NombrePais>\x0A\x09<col_FechaRegistro public=\"1\" expr=\"new DateTimeSentence(&quot;CT_Pais&quot;, &quot;FechaRegistro&quot;, NullableEnum.NULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"CT_Pais\", \"FechaRegistro\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FechaRegistro</haxe_doc>\x0A\x09</col_FechaRegistro>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;CT_Pais&quot;, &quot;Status&quot;, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"CT_Pais\", \"Status\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<col_Estado public=\"1\" expr=\"new BooleanSentence(&quot;CT_Pais&quot;, &quot;Estado&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new BooleanSentence(\"CT_Pais\", \"Estado\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Estado</haxe_doc>\x0A\x09</col_Estado>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"65\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"74\" static=\"1\">\x0A\x09\x09<f a=\"val_PaisID:val_FechaRegistro\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"Date\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<PaisID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PaisID>\x0A\x09<get_PaisID public=\"1\" set=\"method\" line=\"80\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PaisID>\x0A\x09<NombrePais get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</NombrePais>\x0A\x09<get_NombrePais public=\"1\" set=\"method\" line=\"87\"><f a=\"\"><c path=\"String\"/></f></get_NombrePais>\x0A\x09<set_NombrePais public=\"1\" set=\"method\" line=\"91\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_NombrePais>\x0A\x09<FechaRegistro get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FechaRegistro>\x0A\x09<get_FechaRegistro public=\"1\" set=\"method\" line=\"101\"><f a=\"\"><c path=\"Date\"/></f></get_FechaRegistro>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"108\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"112\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Status>\x0A\x09<Estado get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Estado>\x0A\x09<get_Estado public=\"1\" set=\"method\" line=\"122\"><f a=\"\"><x path=\"Null\"><x path=\"Bool\"/></x></f></get_Estado>\x0A\x09<set_Estado public=\"1\" set=\"method\" line=\"126\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Bool\"/></x>\x0A</f></set_Estado>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase CT_Pais que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var BooleanSentence
	 * Referencia a columna Estado
	 */
	static public $col_Estado;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna FechaRegistro
	 */
	static public $col_FechaRegistro;
	/**
	 * @var VarcharSentence
	 * Referencia a columna NombrePais
	 */
	static public $col_NombrePais;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PaisID
	 */
	static public $col_PaisID;
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
	 * @var bool
	 */
	public $Estado;
	/**
	 * @var \Date
	 */
	public $FechaRegistro;
	/**
	 * @var string
	 */
	public $NombrePais;
	/**
	 * @var UUID
	 */
	public $PaisID;
	/**
	 * @var int
	 */
	public $Status;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_PaisID
	 * @param \Date $val_FechaRegistro
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_PaisID, $val_FechaRegistro) {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:75: characters 3-164
		return SQL::SELECT()->FROM(CT_Pais::$table)->WHERE(Condition::SET(CT_Pais::$col_PaisID, Op::Equal(), Val::uuid($val_PaisID))->AND_Ex(CT_Pais::$col_FechaRegistro, Op::Equal(), Val::date($val_FechaRegistro)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:66: characters 3-51
		return SQL::SELECT()->FROM(CT_Pais::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase CT_Pais que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return bool
	 */
	public function get_Estado () {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:123: characters 3-16
		return $this->Estado;
	}

	/**
	 * @return \Date
	 */
	public function get_FechaRegistro () {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:102: characters 3-23
		return $this->FechaRegistro;
	}

	/**
	 * @return string
	 */
	public function get_NombrePais () {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:88: characters 3-20
		return $this->NombrePais;
	}

	/**
	 * @return UUID
	 */
	public function get_PaisID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:81: characters 3-16
		return $this->PaisID;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:109: characters 3-16
		return $this->Status;
	}

	/**
	 * @param bool $value
	 * 
	 * @return bool
	 */
	public function set_Estado ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:129: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Estado() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:129: characters 70-80
			$tmp = CT_Pais::$col_Estado;
			#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:129: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Estado(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:130: characters 3-22
		return $this->Estado = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_NombrePais ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:94: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_NombrePais() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:94: characters 74-88
			$tmp = CT_Pais::$col_NombrePais;
			#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:94: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_NombrePais(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:95: characters 3-26
		return $this->NombrePais = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:115: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:115: characters 70-80
			$tmp = CT_Pais::$col_Status;
			#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:115: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/CT_Pais.hx:116: characters 3-22
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


		self::$table = new TableSource("CT_Pais");
		self::$col_PaisID = new UUIDSentence("CT_Pais", "PaisID", NullableEnum::NOTNULL(), true);
		self::$col_NombrePais = new VarcharSentence("CT_Pais", "NombrePais", 150, NullableEnum::NULL(), false);
		self::$col_FechaRegistro = new DateTimeSentence("CT_Pais", "FechaRegistro", NullableEnum::NULL(), true);
		self::$col_Status = new SmallIntegerSentence("CT_Pais", "Status", NullableEnum::NULL(), false);
		self::$col_Estado = new BooleanSentence("CT_Pais", "Estado", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(CT_Pais::class, 'nMorph.core.db.zhungo_core.CT_Pais');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\CT_Pais', [
	'Estado' => true,
	'Status' => true,
	'FechaRegistro' => true,
	'NombrePais' => true,
	'PaisID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\CT_Pais', [
	'Estado' => true,
	'Status' => true,
	'NombrePais' => true
]);
CT_Pais::__hx__init();
