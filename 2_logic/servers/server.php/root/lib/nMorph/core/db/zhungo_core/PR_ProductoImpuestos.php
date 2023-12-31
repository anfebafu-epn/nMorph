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
class PR_ProductoImpuestos extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.PR_ProductoImpuestos\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;PR_ProductoImpuestos&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"PR_ProductoImpuestos\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_ImpuestoProductoID public=\"1\" expr=\"new UUIDSentence(&quot;PR_ProductoImpuestos&quot;, &quot;ImpuestoProductoID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PR_ProductoImpuestos\", \"ImpuestoProductoID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ImpuestoProductoID</haxe_doc>\x0A\x09</col_ImpuestoProductoID>\x0A\x09<col_ImpuestoID public=\"1\" expr=\"new UUIDSentence(&quot;PR_ProductoImpuestos&quot;, &quot;ImpuestoID&quot;, NullableEnum.NOTNULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PR_ProductoImpuestos\", \"ImpuestoID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ImpuestoID</haxe_doc>\x0A\x09</col_ImpuestoID>\x0A\x09<col_ImpuestoNombre public=\"1\" expr=\"new VarcharSentence(&quot;PR_ProductoImpuestos&quot;, &quot;ImpuestoNombre&quot;, 250, NullableEnum.NOTNULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"PR_ProductoImpuestos\", \"ImpuestoNombre\", 250, NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ImpuestoNombre</haxe_doc>\x0A\x09</col_ImpuestoNombre>\x0A\x09<col_EmpresaId public=\"1\" expr=\"new UUIDSentence(&quot;PR_ProductoImpuestos&quot;, &quot;EmpresaId&quot;, NullableEnum.NOTNULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PR_ProductoImpuestos\", \"EmpresaId\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EmpresaId</haxe_doc>\x0A\x09</col_EmpresaId>\x0A\x09<col_EmpresaNombre public=\"1\" expr=\"new VarcharSentence(&quot;PR_ProductoImpuestos&quot;, &quot;EmpresaNombre&quot;, 250, NullableEnum.NOTNULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"PR_ProductoImpuestos\", \"EmpresaNombre\", 250, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EmpresaNombre</haxe_doc>\x0A\x09</col_EmpresaNombre>\x0A\x09<col_ProductoID public=\"1\" expr=\"new UUIDSentence(&quot;PR_ProductoImpuestos&quot;, &quot;ProductoID&quot;, NullableEnum.NOTNULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"PR_ProductoImpuestos\", \"ProductoID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ProductoID</haxe_doc>\x0A\x09</col_ProductoID>\x0A\x09<col_ProductoNombre public=\"1\" expr=\"new VarcharSentence(&quot;PR_ProductoImpuestos&quot;, &quot;ProductoNombre&quot;, 250, NullableEnum.NOTNULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"PR_ProductoImpuestos\", \"ProductoNombre\", 250, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ProductoNombre</haxe_doc>\x0A\x09</col_ProductoNombre>\x0A\x09<col_Valor public=\"1\" expr=\"new DecimalSentence(&quot;PR_ProductoImpuestos&quot;, &quot;Valor&quot;, 9, 8, NullableEnum.NOTNULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"PR_ProductoImpuestos\", \"Valor\", 9, 8, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Valor</haxe_doc>\x0A\x09</col_Valor>\x0A\x09<col_EsSeleccionado public=\"1\" expr=\"new BooleanSentence(&quot;PR_ProductoImpuestos&quot;, &quot;EsSeleccionado&quot;, NullableEnum.NOTNULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new BooleanSentence(\"PR_ProductoImpuestos\", \"EsSeleccionado\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EsSeleccionado</haxe_doc>\x0A\x09</col_EsSeleccionado>\x0A\x09<col_FechaRegistro public=\"1\" expr=\"new DateTimeSentence(&quot;PR_ProductoImpuestos&quot;, &quot;FechaRegistro&quot;, NullableEnum.NOTNULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"PR_ProductoImpuestos\", \"FechaRegistro\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FechaRegistro</haxe_doc>\x0A\x09</col_FechaRegistro>\x0A\x09<col_Status public=\"1\" expr=\"new SmallIntegerSentence(&quot;PR_ProductoImpuestos&quot;, &quot;Status&quot;, NullableEnum.NOTNULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.SmallIntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new SmallIntegerSentence(\"PR_ProductoImpuestos\", \"Status\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Status</haxe_doc>\x0A\x09</col_Status>\x0A\x09<col_Estado public=\"1\" expr=\"new BooleanSentence(&quot;PR_ProductoImpuestos&quot;, &quot;Estado&quot;, NullableEnum.NOTNULL, false)\" line=\"92\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new BooleanSentence(\"PR_ProductoImpuestos\", \"Estado\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Estado</haxe_doc>\x0A\x09</col_Estado>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"100\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"109\" static=\"1\">\x0A\x09\x09<f a=\"val_ImpuestoProductoID:val_ImpuestoNombre\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"String\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<ImpuestoProductoID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ImpuestoProductoID>\x0A\x09<get_ImpuestoProductoID public=\"1\" set=\"method\" line=\"115\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ImpuestoProductoID>\x0A\x09<ImpuestoID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ImpuestoID>\x0A\x09<get_ImpuestoID public=\"1\" set=\"method\" line=\"122\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ImpuestoID>\x0A\x09<set_ImpuestoID public=\"1\" set=\"method\" line=\"126\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_ImpuestoID>\x0A\x09<ImpuestoNombre get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ImpuestoNombre>\x0A\x09<get_ImpuestoNombre public=\"1\" set=\"method\" line=\"136\"><f a=\"\"><c path=\"String\"/></f></get_ImpuestoNombre>\x0A\x09<EmpresaId get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EmpresaId>\x0A\x09<get_EmpresaId public=\"1\" set=\"method\" line=\"143\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_EmpresaId>\x0A\x09<set_EmpresaId public=\"1\" set=\"method\" line=\"147\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_EmpresaId>\x0A\x09<EmpresaNombre get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EmpresaNombre>\x0A\x09<get_EmpresaNombre public=\"1\" set=\"method\" line=\"157\"><f a=\"\"><c path=\"String\"/></f></get_EmpresaNombre>\x0A\x09<set_EmpresaNombre public=\"1\" set=\"method\" line=\"161\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_EmpresaNombre>\x0A\x09<ProductoID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ProductoID>\x0A\x09<get_ProductoID public=\"1\" set=\"method\" line=\"171\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ProductoID>\x0A\x09<set_ProductoID public=\"1\" set=\"method\" line=\"175\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_ProductoID>\x0A\x09<ProductoNombre get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ProductoNombre>\x0A\x09<get_ProductoNombre public=\"1\" set=\"method\" line=\"185\"><f a=\"\"><c path=\"String\"/></f></get_ProductoNombre>\x0A\x09<set_ProductoNombre public=\"1\" set=\"method\" line=\"189\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_ProductoNombre>\x0A\x09<Valor get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Float\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Valor>\x0A\x09<get_Valor public=\"1\" set=\"method\" line=\"199\"><f a=\"\"><x path=\"Float\"/></f></get_Valor>\x0A\x09<set_Valor public=\"1\" set=\"method\" line=\"203\"><f a=\"value\">\x0A\x09<x path=\"Float\"/>\x0A\x09<x path=\"Float\"/>\x0A</f></set_Valor>\x0A\x09<EsSeleccionado get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Bool\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EsSeleccionado>\x0A\x09<get_EsSeleccionado public=\"1\" set=\"method\" line=\"213\"><f a=\"\"><x path=\"Bool\"/></f></get_EsSeleccionado>\x0A\x09<set_EsSeleccionado public=\"1\" set=\"method\" line=\"217\"><f a=\"value\">\x0A\x09<x path=\"Bool\"/>\x0A\x09<x path=\"Bool\"/>\x0A</f></set_EsSeleccionado>\x0A\x09<FechaRegistro get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FechaRegistro>\x0A\x09<get_FechaRegistro public=\"1\" set=\"method\" line=\"227\"><f a=\"\"><c path=\"Date\"/></f></get_FechaRegistro>\x0A\x09<set_FechaRegistro public=\"1\" set=\"method\" line=\"231\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_FechaRegistro>\x0A\x09<Status get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Int\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Status>\x0A\x09<get_Status public=\"1\" set=\"method\" line=\"241\"><f a=\"\"><x path=\"Int\"/></f></get_Status>\x0A\x09<set_Status public=\"1\" set=\"method\" line=\"245\"><f a=\"value\">\x0A\x09<x path=\"Int\"/>\x0A\x09<x path=\"Int\"/>\x0A</f></set_Status>\x0A\x09<Estado get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Bool\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Estado>\x0A\x09<get_Estado public=\"1\" set=\"method\" line=\"255\"><f a=\"\"><x path=\"Bool\"/></f></get_Estado>\x0A\x09<set_Estado public=\"1\" set=\"method\" line=\"259\"><f a=\"value\">\x0A\x09<x path=\"Bool\"/>\x0A\x09<x path=\"Bool\"/>\x0A</f></set_Estado>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase PR_ProductoImpuestos que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna EmpresaId
	 */
	static public $col_EmpresaId;
	/**
	 * @var VarcharSentence
	 * Referencia a columna EmpresaNombre
	 */
	static public $col_EmpresaNombre;
	/**
	 * @var BooleanSentence
	 * Referencia a columna EsSeleccionado
	 */
	static public $col_EsSeleccionado;
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
	 * @var UUIDSentence
	 * Referencia a columna ImpuestoID
	 */
	static public $col_ImpuestoID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna ImpuestoNombre
	 */
	static public $col_ImpuestoNombre;
	/**
	 * @var UUIDSentence
	 * Referencia a columna ImpuestoProductoID
	 */
	static public $col_ImpuestoProductoID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna ProductoID
	 */
	static public $col_ProductoID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna ProductoNombre
	 */
	static public $col_ProductoNombre;
	/**
	 * @var SmallIntegerSentence
	 * Referencia a columna Status
	 */
	static public $col_Status;
	/**
	 * @var DecimalSentence
	 * Referencia a columna Valor
	 */
	static public $col_Valor;
	/**
	 * @var ISource
	 * referencia a tabla para consultas
	 */
	static public $table;

	/**
	 * @var UUID
	 */
	public $EmpresaId;
	/**
	 * @var string
	 */
	public $EmpresaNombre;
	/**
	 * @var bool
	 */
	public $EsSeleccionado;
	/**
	 * @var bool
	 */
	public $Estado;
	/**
	 * @var \Date
	 */
	public $FechaRegistro;
	/**
	 * @var UUID
	 */
	public $ImpuestoID;
	/**
	 * @var string
	 */
	public $ImpuestoNombre;
	/**
	 * @var UUID
	 */
	public $ImpuestoProductoID;
	/**
	 * @var UUID
	 */
	public $ProductoID;
	/**
	 * @var string
	 */
	public $ProductoNombre;
	/**
	 * @var int
	 */
	public $Status;
	/**
	 * @var float
	 */
	public $Valor;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_ImpuestoProductoID
	 * @param string $val_ImpuestoNombre
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_ImpuestoProductoID, $val_ImpuestoNombre) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:110: characters 3-192
		return SQL::SELECT()->FROM(PR_ProductoImpuestos::$table)->WHERE(Condition::SET(PR_ProductoImpuestos::$col_ImpuestoProductoID, Op::Equal(), Val::uuid($val_ImpuestoProductoID))->AND_Ex(PR_ProductoImpuestos::$col_ImpuestoNombre, Op::Equal(), Val::string($val_ImpuestoNombre)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:101: characters 3-51
		return SQL::SELECT()->FROM(PR_ProductoImpuestos::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase PR_ProductoImpuestos que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_EmpresaId () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:144: characters 3-19
		return $this->EmpresaId;
	}

	/**
	 * @return string
	 */
	public function get_EmpresaNombre () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:158: characters 3-23
		return $this->EmpresaNombre;
	}

	/**
	 * @return bool
	 */
	public function get_EsSeleccionado () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:214: characters 3-24
		return $this->EsSeleccionado;
	}

	/**
	 * @return bool
	 */
	public function get_Estado () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:256: characters 3-16
		return $this->Estado;
	}

	/**
	 * @return \Date
	 */
	public function get_FechaRegistro () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:228: characters 3-23
		return $this->FechaRegistro;
	}

	/**
	 * @return UUID
	 */
	public function get_ImpuestoID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:123: characters 3-20
		return $this->ImpuestoID;
	}

	/**
	 * @return string
	 */
	public function get_ImpuestoNombre () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:137: characters 3-24
		return $this->ImpuestoNombre;
	}

	/**
	 * @return UUID
	 */
	public function get_ImpuestoProductoID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:116: characters 3-28
		return $this->ImpuestoProductoID;
	}

	/**
	 * @return UUID
	 */
	public function get_ProductoID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:172: characters 3-20
		return $this->ProductoID;
	}

	/**
	 * @return string
	 */
	public function get_ProductoNombre () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:186: characters 3-24
		return $this->ProductoNombre;
	}

	/**
	 * @return int
	 */
	public function get_Status () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:242: characters 3-16
		return $this->Status;
	}

	/**
	 * @return float
	 */
	public function get_Valor () {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:200: characters 3-15
		return $this->Valor;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_EmpresaId ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:150: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_EmpresaId() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:150: characters 73-86
			$tmp = PR_ProductoImpuestos::$col_EmpresaId;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:150: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_EmpresaId(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:151: characters 3-25
		return $this->EmpresaId = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_EmpresaNombre ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:164: characters 3-123
		if ($this->get_TrackChanges() && ($this->get_EmpresaNombre() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:164: characters 77-94
			$tmp = PR_ProductoImpuestos::$col_EmpresaNombre;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:164: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_EmpresaNombre(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:165: characters 3-29
		return $this->EmpresaNombre = $value;
	}

	/**
	 * @param bool $value
	 * 
	 * @return bool
	 */
	public function set_EsSeleccionado ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:220: characters 3-126
		if ($this->get_TrackChanges() && ($this->get_EsSeleccionado() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:220: characters 78-96
			$tmp = PR_ProductoImpuestos::$col_EsSeleccionado;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:220: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_EsSeleccionado(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:221: characters 3-30
		return $this->EsSeleccionado = $value;
	}

	/**
	 * @param bool $value
	 * 
	 * @return bool
	 */
	public function set_Estado ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:262: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Estado() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:262: characters 70-80
			$tmp = PR_ProductoImpuestos::$col_Estado;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:262: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Estado(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:263: characters 3-22
		return $this->Estado = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_FechaRegistro ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:234: characters 3-123
		if ($this->get_TrackChanges() && ($this->get_FechaRegistro() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:234: characters 77-94
			$tmp = PR_ProductoImpuestos::$col_FechaRegistro;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:234: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_FechaRegistro(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:235: characters 3-29
		return $this->FechaRegistro = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_ImpuestoID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:129: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_ImpuestoID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:129: characters 74-88
			$tmp = PR_ProductoImpuestos::$col_ImpuestoID;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:129: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_ImpuestoID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:130: characters 3-26
		return $this->ImpuestoID = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_ProductoID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:178: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_ProductoID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:178: characters 74-88
			$tmp = PR_ProductoImpuestos::$col_ProductoID;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:178: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_ProductoID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:179: characters 3-26
		return $this->ProductoID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_ProductoNombre ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:192: characters 3-126
		if ($this->get_TrackChanges() && ($this->get_ProductoNombre() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:192: characters 78-96
			$tmp = PR_ProductoImpuestos::$col_ProductoNombre;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:192: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_ProductoNombre(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:193: characters 3-30
		return $this->ProductoNombre = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Status ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:248: characters 3-102
		if ($this->get_TrackChanges() && ($this->get_Status() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:248: characters 70-80
			$tmp = PR_ProductoImpuestos::$col_Status;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:248: characters 45-102
			$this->AddChange(new ChangeItem($tmp, $this->get_Status(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:249: characters 3-22
		return $this->Status = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_Valor ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:206: characters 3-99
		if ($this->get_TrackChanges() && !Boot::equal($this->get_Valor(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:206: characters 69-78
			$tmp = PR_ProductoImpuestos::$col_Valor;
			#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:206: characters 44-99
			$this->AddChange(new ChangeItem($tmp, $this->get_Valor(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/PR_ProductoImpuestos.hx:207: characters 3-21
		return $this->Valor = $value;
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


		self::$table = new TableSource("PR_ProductoImpuestos");
		self::$col_ImpuestoProductoID = new UUIDSentence("PR_ProductoImpuestos", "ImpuestoProductoID", NullableEnum::NOTNULL(), true);
		self::$col_ImpuestoID = new UUIDSentence("PR_ProductoImpuestos", "ImpuestoID", NullableEnum::NOTNULL(), false);
		self::$col_ImpuestoNombre = new VarcharSentence("PR_ProductoImpuestos", "ImpuestoNombre", 250, NullableEnum::NOTNULL(), true);
		self::$col_EmpresaId = new UUIDSentence("PR_ProductoImpuestos", "EmpresaId", NullableEnum::NOTNULL(), false);
		self::$col_EmpresaNombre = new VarcharSentence("PR_ProductoImpuestos", "EmpresaNombre", 250, NullableEnum::NOTNULL(), false);
		self::$col_ProductoID = new UUIDSentence("PR_ProductoImpuestos", "ProductoID", NullableEnum::NOTNULL(), false);
		self::$col_ProductoNombre = new VarcharSentence("PR_ProductoImpuestos", "ProductoNombre", 250, NullableEnum::NOTNULL(), false);
		self::$col_Valor = new DecimalSentence("PR_ProductoImpuestos", "Valor", 9, 8, NullableEnum::NOTNULL(), false);
		self::$col_EsSeleccionado = new BooleanSentence("PR_ProductoImpuestos", "EsSeleccionado", NullableEnum::NOTNULL(), false);
		self::$col_FechaRegistro = new DateTimeSentence("PR_ProductoImpuestos", "FechaRegistro", NullableEnum::NOTNULL(), false);
		self::$col_Status = new SmallIntegerSentence("PR_ProductoImpuestos", "Status", NullableEnum::NOTNULL(), false);
		self::$col_Estado = new BooleanSentence("PR_ProductoImpuestos", "Estado", NullableEnum::NOTNULL(), false);
	}
}

Boot::registerClass(PR_ProductoImpuestos::class, 'nMorph.core.db.zhungo_core.PR_ProductoImpuestos');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\PR_ProductoImpuestos', [
	'Estado' => true,
	'Status' => true,
	'FechaRegistro' => true,
	'EsSeleccionado' => true,
	'Valor' => true,
	'ProductoNombre' => true,
	'ProductoID' => true,
	'EmpresaNombre' => true,
	'EmpresaId' => true,
	'ImpuestoNombre' => true,
	'ImpuestoID' => true,
	'ImpuestoProductoID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\PR_ProductoImpuestos', [
	'Estado' => true,
	'Status' => true,
	'FechaRegistro' => true,
	'EsSeleccionado' => true,
	'Valor' => true,
	'ProductoNombre' => true,
	'ProductoID' => true,
	'EmpresaNombre' => true,
	'EmpresaId' => true,
	'ImpuestoID' => true
]);
PR_ProductoImpuestos::__hx__init();
