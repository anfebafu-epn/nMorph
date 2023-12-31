<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\clauses;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ISentence;
use \nMorph\framework\orm\interfaces\ICondition;
use \php\Boot;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\common\enums\JoinTypeEnum;
use \nMorph\framework\orm\interfaces\IClause;
use \nMorph\framework\orm\tools\BulkRun;
use \nMorph\framework\orm\client\QueryTable;
use \nMorph\framework\orm\client\QueueItem;
use \nMorph\framework\orm\common\enums\UnionTypeEnum;
use \nMorph\framework\orm\tools\Context;

class FromClause implements IClause {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.common.clauses.FromClause\" params=\"\">\x0A\x09<implements path=\"nMorph.framework.orm.interfaces.IClause\"/>\x0A\x09<CurrentSQL><c path=\"nMorph.framework.orm.lang.SQL\"/></CurrentSQL>\x0A\x09<Source><c path=\"nMorph.framework.orm.interfaces.ISource\"/></Source>\x0A\x09<INNERJOIN public=\"1\" set=\"method\" line=\"33\"><f a=\"Source:OnCondition\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.JoinClause\"/>\x0A</f></INNERJOIN>\x0A\x09<LEFTJOIN public=\"1\" set=\"method\" line=\"40\"><f a=\"Source:OnCondition\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.JoinClause\"/>\x0A</f></LEFTJOIN>\x0A\x09<RIGHTJOIN public=\"1\" set=\"method\" line=\"46\"><f a=\"Source:OnCondition\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.JoinClause\"/>\x0A</f></RIGHTJOIN>\x0A\x09<UNION public=\"1\" set=\"method\" line=\"52\"><f a=\"UnionType:Clause\">\x0A\x09<e path=\"nMorph.framework.orm.common.enums.UnionTypeEnum\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.IClause\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.UnionClause\"/>\x0A</f></UNION>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"58\"><f a=\"Condition\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A</f></WHERE>\x0A\x09<GROUPBY public=\"1\" set=\"method\" line=\"64\"><f a=\"GroupSentences\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></c>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.GroupByClause\"/>\x0A</f></GROUPBY>\x0A\x09<ORDERBY public=\"1\" set=\"method\" line=\"70\"><f a=\"OrderBySentences\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></c>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.OrderByClause\"/>\x0A</f></ORDERBY>\x0A\x09<SCRIPT public=\"1\" set=\"method\" line=\"76\"><f a=\"\"><c path=\"String\"/></f></SCRIPT>\x0A\x09<SCRIPT_PART public=\"1\" set=\"method\" line=\"80\"><f a=\"?args\">\x0A\x09<c path=\"String\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></SCRIPT_PART>\x0A\x09<Execute public=\"1\" set=\"method\" line=\"98\"><f a=\"\"><d/></f></Execute>\x0A\x09<Register public=\"1\" set=\"method\" line=\"102\"><f a=\"context\">\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></Register>\x0A\x09<Queue public=\"1\" set=\"method\" line=\"106\"><f a=\"queue\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A</f></Queue>\x0A\x09<Bulk public=\"1\" set=\"method\" line=\"110\"><f a=\"bulk\">\x0A\x09<c path=\"nMorph.framework.orm.tools.BulkRun\"/>\x0A\x09<c path=\"nMorph.framework.orm.tools.BulkRun\"/>\x0A</f></Bulk>\x0A\x09<ReadValue public=\"1\" set=\"method\" line=\"115\"><f a=\"\"><d/></f></ReadValue>\x0A\x09<ReadTable public=\"1\" set=\"method\" line=\"119\"><f a=\"\"><c path=\"nMorph.framework.orm.client.QueryTable\"/></f></ReadTable>\x0A\x09<Read public=\"1\" params=\"T\" set=\"method\" line=\"123\"><f a=\"cl:?context\">\x0A\x09<x path=\"Class\"><c path=\"Read.T\"/></x>\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<c path=\"Array\"><c path=\"Read.T\"/></c>\x0A</f></Read>\x0A\x09<ReadOne public=\"1\" params=\"T\" set=\"method\" line=\"127\"><f a=\"cl:?context\">\x0A\x09<x path=\"Class\"><c path=\"ReadOne.T\"/></x>\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<c path=\"ReadOne.T\"/>\x0A</f></ReadOne>\x0A\x09<new public=\"1\" set=\"method\" line=\"27\"><f a=\"CurrentSQL:Source\">\x0A\x09<c path=\"nMorph.framework.orm.lang.SQL\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var SQL
	 */
	public $CurrentSQL;
	/**
	 * @var ISource
	 */
	public $Source;

	/**
	 * @param SQL $CurrentSQL
	 * @param ISource $Source
	 * 
	 * @return void
	 */
	public function __construct ($CurrentSQL, $Source) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:28: characters 9-37
		$this->CurrentSQL = $CurrentSQL;
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:29: characters 9-29
		$this->Source = $Source;
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:30: characters 9-46
		$this->Source->RegisterQuery($CurrentSQL);
	}

	/**
	 * @param BulkRun $bulk
	 * 
	 * @return BulkRun
	 */
	public function Bulk ($bulk) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:111: characters 9-50
		$bulk->set_queue($this->CurrentSQL->Queue($bulk->get_queue()));
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:112: characters 9-20
		return $bulk;
	}

	/**
	 * @return mixed
	 */
	public function Execute () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:99: characters 9-36
		return $this->CurrentSQL->Execute();
	}

	/**
	 * @param ISentence[]|\Array_hx $GroupSentences
	 * 
	 * @return GroupByClause
	 */
	public function GROUPBY ($GroupSentences) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:65: characters 9-79
		$gbc = new GroupByClause($this->CurrentSQL, $GroupSentences);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:66: characters 9-34
		$this->CurrentSQL->AddClause($gbc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:67: characters 9-19
		return $gbc;
	}

	/**
	 * @param ISource $Source
	 * @param ICondition $OnCondition
	 * 
	 * @return JoinClause
	 */
	public function INNERJOIN ($Source, $OnCondition) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:34: characters 9-90
		$jc = new JoinClause($this->CurrentSQL, $Source, $OnCondition, JoinTypeEnum::INNERJOIN());
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:35: characters 9-46
		$OnCondition->RegisterQuery($this->CurrentSQL);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:36: characters 9-33
		$this->CurrentSQL->AddClause($jc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:37: characters 9-18
		return $jc;
	}

	/**
	 * @param ISource $Source
	 * @param ICondition $OnCondition
	 * 
	 * @return JoinClause
	 */
	public function LEFTJOIN ($Source, $OnCondition) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:41: characters 9-89
		$jc = new JoinClause($this->CurrentSQL, $Source, $OnCondition, JoinTypeEnum::LEFTJOIN());
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:42: characters 9-33
		$this->CurrentSQL->AddClause($jc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:43: characters 9-18
		return $jc;
	}

	/**
	 * @param ISentence[]|\Array_hx $OrderBySentences
	 * 
	 * @return OrderByClause
	 */
	public function ORDERBY ($OrderBySentences) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:71: characters 9-81
		$obc = new OrderByClause($this->CurrentSQL, $OrderBySentences);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:72: characters 9-34
		$this->CurrentSQL->AddClause($obc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:73: characters 9-19
		return $obc;
	}

	/**
	 * @param QueueItem[]|\Array_hx $queue
	 * 
	 * @return QueueItem[]|\Array_hx
	 */
	public function Queue ($queue) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:107: characters 9-39
		return $this->CurrentSQL->Queue($queue);
	}

	/**
	 * @param ISource $Source
	 * @param ICondition $OnCondition
	 * 
	 * @return JoinClause
	 */
	public function RIGHTJOIN ($Source, $OnCondition) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:47: characters 9-90
		$jc = new JoinClause($this->CurrentSQL, $Source, $OnCondition, JoinTypeEnum::RIGHTJOIN());
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:48: characters 9-33
		$this->CurrentSQL->AddClause($jc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:49: characters 9-18
		return $jc;
	}

	/**
	 * @param Class $cl
	 * @param Context $context
	 * 
	 * @return mixed[]|\Array_hx
	 */
	public function Read ($cl, $context = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:124: characters 9-44
		return $this->CurrentSQL->Read($cl, $context);
	}

	/**
	 * @param Class $cl
	 * @param Context $context
	 * 
	 * @return mixed
	 */
	public function ReadOne ($cl, $context = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:128: characters 9-47
		return $this->CurrentSQL->ReadOne($cl, $context);
	}

	/**
	 * @return QueryTable
	 */
	public function ReadTable () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:120: characters 9-38
		return $this->CurrentSQL->ReadTable();
	}

	/**
	 * @return mixed
	 */
	public function ReadValue () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:116: characters 9-38
		return $this->CurrentSQL->ReadValue();
	}

	/**
	 * @param Context $context
	 * 
	 * @return void
	 */
	public function Register ($context) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:103: characters 9-56
		$context->set_Queue($this->CurrentSQL->Queue($context->get_Queue()));
	}

	/**
	 * @return string
	 */
	public function SCRIPT () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:77: characters 9-40
		return $this->CurrentSQL->GenerateAll();
	}

	/**
	 * @param string $args
	 * 
	 * @return void
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:81: characters 9-37
		$this->CurrentSQL->AddBlock("FROM ");
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:83: characters 16-45
		$__hx__switch = ($this->CurrentSQL->getCurrentEngine()->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:94: characters 17-37
			$this->Source->SCRIPT_PART();
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:90: characters 17-37
			$this->Source->SCRIPT_PART();
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:88: characters 17-37
			$this->Source->SCRIPT_PART();
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:92: characters 17-37
			$this->Source->SCRIPT_PART();
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:86: characters 17-37
			$this->Source->SCRIPT_PART();
		}
	}

	/**
	 * @param UnionTypeEnum $UnionType
	 * @param IClause $Clause
	 * 
	 * @return UnionClause
	 */
	public function UNION ($UnionType, $Clause) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:53: characters 9-77
		$uc = new UnionClause($this->CurrentSQL, $UnionType, $Clause);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:54: characters 9-33
		$this->CurrentSQL->AddClause($uc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:55: characters 9-18
		return $uc;
	}

	/**
	 * @param ICondition $Condition
	 * 
	 * @return WhereClause
	 */
	public function WHERE ($Condition) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:59: characters 9-69
		$wc = new WhereClause($this->CurrentSQL, $Condition);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:60: characters 9-33
		$this->CurrentSQL->AddClause($wc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/FromClause.hx:61: characters 9-18
		return $wc;
	}
}

Boot::registerClass(FromClause::class, 'nMorph.framework.orm.common.clauses.FromClause');
