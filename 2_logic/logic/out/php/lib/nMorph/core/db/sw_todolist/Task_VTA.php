<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\sw_todolist;

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
use \nMorph\framework\orm\common\fields\BooleanSentence;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class Task_VTA extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.sw_todolist.Task_VTA\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<view public=\"1\" expr=\"new ViewSource(&quot;Task_VTA&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new ViewSource(\"Task_VTA\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a vista para consultas</haxe_doc>\x0A\x09</view>\x0A\x09<col_TaskId public=\"1\" expr=\"new UUIDSentence(&quot;Task_VTA&quot;, &quot;TaskId&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"Task_VTA\", \"TaskId\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna TaskId</haxe_doc>\x0A\x09</col_TaskId>\x0A\x09<col_PersonId public=\"1\" expr=\"new UUIDSentence(&quot;Task_VTA&quot;, &quot;PersonId&quot;, NullableEnum.NULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"Task_VTA\", \"PersonId\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PersonId</haxe_doc>\x0A\x09</col_PersonId>\x0A\x09<col_FullName public=\"1\" expr=\"new VarcharSentence(&quot;Task_VTA&quot;, &quot;FullName&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Task_VTA\", \"FullName\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FullName</haxe_doc>\x0A\x09</col_FullName>\x0A\x09<col_Email public=\"1\" expr=\"new VarcharSentence(&quot;Task_VTA&quot;, &quot;Email&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Task_VTA\", \"Email\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Email</haxe_doc>\x0A\x09</col_Email>\x0A\x09<col_CategoryId public=\"1\" expr=\"new UUIDSentence(&quot;Task_VTA&quot;, &quot;CategoryId&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"Task_VTA\", \"CategoryId\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CategoryId</haxe_doc>\x0A\x09</col_CategoryId>\x0A\x09<col_CategoryName public=\"1\" expr=\"new VarcharSentence(&quot;Task_VTA&quot;, &quot;CategoryName&quot;, 50, NullableEnum.NOTNULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Task_VTA\", \"CategoryName\", 50, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CategoryName</haxe_doc>\x0A\x09</col_CategoryName>\x0A\x09<col_Title public=\"1\" expr=\"new VarcharSentence(&quot;Task_VTA&quot;, &quot;Title&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Task_VTA\", \"Title\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Title</haxe_doc>\x0A\x09</col_Title>\x0A\x09<col_Description public=\"1\" expr=\"new VarcharSentence(&quot;Task_VTA&quot;, &quot;Description&quot;, 500, NullableEnum.NULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Task_VTA\", \"Description\", 500, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Description</haxe_doc>\x0A\x09</col_Description>\x0A\x09<col_CreatedAt public=\"1\" expr=\"new DateTimeSentence(&quot;Task_VTA&quot;, &quot;CreatedAt&quot;, NullableEnum.NOTNULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"Task_VTA\", \"CreatedAt\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna CreatedAt</haxe_doc>\x0A\x09</col_CreatedAt>\x0A\x09<col_DueDate public=\"1\" expr=\"new DateTimeSentence(&quot;Task_VTA&quot;, &quot;DueDate&quot;, NullableEnum.NULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"Task_VTA\", \"DueDate\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna DueDate</haxe_doc>\x0A\x09</col_DueDate>\x0A\x09<col_IsCompleted public=\"1\" expr=\"new BooleanSentence(&quot;Task_VTA&quot;, &quot;IsCompleted&quot;, NullableEnum.NOTNULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.BooleanSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new BooleanSentence(\"Task_VTA\", \"IsCompleted\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IsCompleted</haxe_doc>\x0A\x09</col_IsCompleted>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"95\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"104\" static=\"1\">\x0A\x09\x09<f a=\"val_TaskId\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<TaskId get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</TaskId>\x0A\x09<get_TaskId public=\"1\" set=\"method\" line=\"110\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_TaskId>\x0A\x09<PersonId get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PersonId>\x0A\x09<get_PersonId public=\"1\" set=\"method\" line=\"117\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PersonId>\x0A\x09<set_PersonId public=\"1\" set=\"method\" line=\"121\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_PersonId>\x0A\x09<FullName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FullName>\x0A\x09<get_FullName public=\"1\" set=\"method\" line=\"131\"><f a=\"\"><c path=\"String\"/></f></get_FullName>\x0A\x09<set_FullName public=\"1\" set=\"method\" line=\"135\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_FullName>\x0A\x09<Email get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Email>\x0A\x09<get_Email public=\"1\" set=\"method\" line=\"145\"><f a=\"\"><c path=\"String\"/></f></get_Email>\x0A\x09<set_Email public=\"1\" set=\"method\" line=\"149\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_Email>\x0A\x09<CategoryId get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CategoryId>\x0A\x09<get_CategoryId public=\"1\" set=\"method\" line=\"159\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_CategoryId>\x0A\x09<set_CategoryId public=\"1\" set=\"method\" line=\"163\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_CategoryId>\x0A\x09<CategoryName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CategoryName>\x0A\x09<get_CategoryName public=\"1\" set=\"method\" line=\"173\"><f a=\"\"><c path=\"String\"/></f></get_CategoryName>\x0A\x09<set_CategoryName public=\"1\" set=\"method\" line=\"177\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_CategoryName>\x0A\x09<Title get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Title>\x0A\x09<get_Title public=\"1\" set=\"method\" line=\"187\"><f a=\"\"><c path=\"String\"/></f></get_Title>\x0A\x09<set_Title public=\"1\" set=\"method\" line=\"191\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_Title>\x0A\x09<Description get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Description>\x0A\x09<get_Description public=\"1\" set=\"method\" line=\"201\"><f a=\"\"><c path=\"String\"/></f></get_Description>\x0A\x09<set_Description public=\"1\" set=\"method\" line=\"205\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_Description>\x0A\x09<CreatedAt get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CreatedAt>\x0A\x09<get_CreatedAt public=\"1\" set=\"method\" line=\"215\"><f a=\"\"><c path=\"Date\"/></f></get_CreatedAt>\x0A\x09<set_CreatedAt public=\"1\" set=\"method\" line=\"219\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_CreatedAt>\x0A\x09<DueDate get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</DueDate>\x0A\x09<get_DueDate public=\"1\" set=\"method\" line=\"229\"><f a=\"\"><c path=\"Date\"/></f></get_DueDate>\x0A\x09<set_DueDate public=\"1\" set=\"method\" line=\"233\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_DueDate>\x0A\x09<IsCompleted get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Bool\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IsCompleted>\x0A\x09<get_IsCompleted public=\"1\" set=\"method\" line=\"243\"><f a=\"\"><x path=\"Bool\"/></f></get_IsCompleted>\x0A\x09<set_IsCompleted public=\"1\" set=\"method\" line=\"247\"><f a=\"value\">\x0A\x09<x path=\"Bool\"/>\x0A\x09<x path=\"Bool\"/>\x0A</f></set_IsCompleted>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase Task_VTA que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna CategoryId
	 */
	static public $col_CategoryId;
	/**
	 * @var VarcharSentence
	 * Referencia a columna CategoryName
	 */
	static public $col_CategoryName;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna CreatedAt
	 */
	static public $col_CreatedAt;
	/**
	 * @var VarcharSentence
	 * Referencia a columna Description
	 */
	static public $col_Description;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna DueDate
	 */
	static public $col_DueDate;
	/**
	 * @var VarcharSentence
	 * Referencia a columna Email
	 */
	static public $col_Email;
	/**
	 * @var VarcharSentence
	 * Referencia a columna FullName
	 */
	static public $col_FullName;
	/**
	 * @var BooleanSentence
	 * Referencia a columna IsCompleted
	 */
	static public $col_IsCompleted;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PersonId
	 */
	static public $col_PersonId;
	/**
	 * @var UUIDSentence
	 * Referencia a columna TaskId
	 */
	static public $col_TaskId;
	/**
	 * @var VarcharSentence
	 * Referencia a columna Title
	 */
	static public $col_Title;
	/**
	 * @var ISource
	 * referencia a vista para consultas
	 */
	static public $view;

	/**
	 * @var UUID
	 */
	public $CategoryId;
	/**
	 * @var string
	 */
	public $CategoryName;
	/**
	 * @var \Date
	 */
	public $CreatedAt;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var \Date
	 */
	public $DueDate;
	/**
	 * @var string
	 */
	public $Email;
	/**
	 * @var string
	 */
	public $FullName;
	/**
	 * @var bool
	 */
	public $IsCompleted;
	/**
	 * @var UUID
	 */
	public $PersonId;
	/**
	 * @var UUID
	 */
	public $TaskId;
	/**
	 * @var string
	 */
	public $Title;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_TaskId
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_TaskId) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:105: characters 3-98
		return SQL::SELECT()->FROM(Task_VTA::$view)->WHERE(Condition::SET(Task_VTA::$col_TaskId, Op::Equal(), Val::uuid($val_TaskId)));
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
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:96: characters 3-50
		return SQL::SELECT()->FROM(Task_VTA::$view)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase Task_VTA que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_CategoryId () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:160: characters 3-20
		return $this->CategoryId;
	}

	/**
	 * @return string
	 */
	public function get_CategoryName () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:174: characters 3-22
		return $this->CategoryName;
	}

	/**
	 * @return \Date
	 */
	public function get_CreatedAt () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:216: characters 3-19
		return $this->CreatedAt;
	}

	/**
	 * @return string
	 */
	public function get_Description () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:202: characters 3-21
		return $this->Description;
	}

	/**
	 * @return \Date
	 */
	public function get_DueDate () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:230: characters 3-17
		return $this->DueDate;
	}

	/**
	 * @return string
	 */
	public function get_Email () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:146: characters 3-15
		return $this->Email;
	}

	/**
	 * @return string
	 */
	public function get_FullName () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:132: characters 3-18
		return $this->FullName;
	}

	/**
	 * @return bool
	 */
	public function get_IsCompleted () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:244: characters 3-21
		return $this->IsCompleted;
	}

	/**
	 * @return UUID
	 */
	public function get_PersonId () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:118: characters 3-18
		return $this->PersonId;
	}

	/**
	 * @return UUID
	 */
	public function get_TaskId () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:111: characters 3-16
		return $this->TaskId;
	}

	/**
	 * @return string
	 */
	public function get_Title () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:188: characters 3-15
		return $this->Title;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_CategoryId ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:166: characters 3-114
		if ($this->get_TrackChanges() && ($this->get_CategoryId() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:166: characters 74-88
			$tmp = Task_VTA::$col_CategoryId;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:166: characters 49-114
			$this->AddChange(new ChangeItem($tmp, $this->get_CategoryId(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:167: characters 3-26
		return $this->CategoryId = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_CategoryName ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:180: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_CategoryName() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:180: characters 76-92
			$tmp = Task_VTA::$col_CategoryName;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:180: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_CategoryName(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:181: characters 3-28
		return $this->CategoryName = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_CreatedAt ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:222: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_CreatedAt() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:222: characters 73-86
			$tmp = Task_VTA::$col_CreatedAt;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:222: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_CreatedAt(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:223: characters 3-25
		return $this->CreatedAt = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Description ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:208: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_Description() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:208: characters 75-90
			$tmp = Task_VTA::$col_Description;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:208: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_Description(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:209: characters 3-27
		return $this->Description = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_DueDate ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:236: characters 3-105
		if ($this->get_TrackChanges() && ($this->get_DueDate() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:236: characters 71-82
			$tmp = Task_VTA::$col_DueDate;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:236: characters 46-105
			$this->AddChange(new ChangeItem($tmp, $this->get_DueDate(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:237: characters 3-23
		return $this->DueDate = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Email ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:152: characters 3-99
		if ($this->get_TrackChanges() && ($this->get_Email() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:152: characters 69-78
			$tmp = Task_VTA::$col_Email;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:152: characters 44-99
			$this->AddChange(new ChangeItem($tmp, $this->get_Email(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:153: characters 3-21
		return $this->Email = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_FullName ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:138: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_FullName() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:138: characters 72-84
			$tmp = Task_VTA::$col_FullName;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:138: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_FullName(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:139: characters 3-24
		return $this->FullName = $value;
	}

	/**
	 * @param bool $value
	 * 
	 * @return bool
	 */
	public function set_IsCompleted ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:250: characters 3-117
		if ($this->get_TrackChanges() && ($this->get_IsCompleted() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:250: characters 75-90
			$tmp = Task_VTA::$col_IsCompleted;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:250: characters 50-117
			$this->AddChange(new ChangeItem($tmp, $this->get_IsCompleted(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:251: characters 3-27
		return $this->IsCompleted = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_PersonId ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:124: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_PersonId() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:124: characters 72-84
			$tmp = Task_VTA::$col_PersonId;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:124: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_PersonId(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:125: characters 3-24
		return $this->PersonId = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Title ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:194: characters 3-99
		if ($this->get_TrackChanges() && ($this->get_Title() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:194: characters 69-78
			$tmp = Task_VTA::$col_Title;
			#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:194: characters 44-99
			$this->AddChange(new ChangeItem($tmp, $this->get_Title(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Task_VTA.hx:195: characters 3-21
		return $this->Title = $value;
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


		self::$view = new ViewSource("Task_VTA");
		self::$col_TaskId = new UUIDSentence("Task_VTA", "TaskId", NullableEnum::NOTNULL(), true);
		self::$col_PersonId = new UUIDSentence("Task_VTA", "PersonId", NullableEnum::NULL(), false);
		self::$col_FullName = new VarcharSentence("Task_VTA", "FullName", 100, NullableEnum::NOTNULL(), false);
		self::$col_Email = new VarcharSentence("Task_VTA", "Email", 100, NullableEnum::NOTNULL(), false);
		self::$col_CategoryId = new UUIDSentence("Task_VTA", "CategoryId", NullableEnum::NULL(), false);
		self::$col_CategoryName = new VarcharSentence("Task_VTA", "CategoryName", 50, NullableEnum::NOTNULL(), false);
		self::$col_Title = new VarcharSentence("Task_VTA", "Title", 100, NullableEnum::NOTNULL(), false);
		self::$col_Description = new VarcharSentence("Task_VTA", "Description", 500, NullableEnum::NULL(), false);
		self::$col_CreatedAt = new DateTimeSentence("Task_VTA", "CreatedAt", NullableEnum::NOTNULL(), false);
		self::$col_DueDate = new DateTimeSentence("Task_VTA", "DueDate", NullableEnum::NULL(), false);
		self::$col_IsCompleted = new BooleanSentence("Task_VTA", "IsCompleted", NullableEnum::NOTNULL(), false);
	}
}

Boot::registerClass(Task_VTA::class, 'nMorph.core.db.sw_todolist.Task_VTA');
Boot::registerGetters('nMorph\\core\\db\\sw_todolist\\Task_VTA', [
	'IsCompleted' => true,
	'DueDate' => true,
	'CreatedAt' => true,
	'Description' => true,
	'Title' => true,
	'CategoryName' => true,
	'CategoryId' => true,
	'Email' => true,
	'FullName' => true,
	'PersonId' => true,
	'TaskId' => true
]);
Boot::registerSetters('nMorph\\core\\db\\sw_todolist\\Task_VTA', [
	'IsCompleted' => true,
	'DueDate' => true,
	'CreatedAt' => true,
	'Description' => true,
	'Title' => true,
	'CategoryName' => true,
	'CategoryId' => true,
	'Email' => true,
	'FullName' => true,
	'PersonId' => true
]);
Task_VTA::__hx__init();
