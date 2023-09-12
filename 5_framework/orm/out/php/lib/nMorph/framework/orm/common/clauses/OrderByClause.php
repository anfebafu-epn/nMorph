<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\clauses;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ISentence;
use \php\Boot;
use \nMorph\framework\orm\interfaces\IClause;
use \nMorph\framework\orm\tools\BulkRun;
use \nMorph\framework\orm\client\QueryTable;
use \nMorph\framework\orm\client\QueueItem;
use \nMorph\framework\orm\common\enums\UnionTypeEnum;
use \nMorph\framework\orm\tools\Context;

class OrderByClause implements IClause {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.common.clauses.OrderByClause\" params=\"\">\x0A\x09<implements path=\"nMorph.framework.orm.interfaces.IClause\"/>\x0A\x09<CurrentSQL><c path=\"nMorph.framework.orm.lang.SQL\"/></CurrentSQL>\x0A\x09<OrderBySentences><c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></c></OrderBySentences>\x0A\x09<UNION public=\"1\" set=\"method\" line=\"28\"><f a=\"UnionType:Clause\">\x0A\x09<e path=\"nMorph.framework.orm.common.enums.UnionTypeEnum\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.IClause\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.UnionClause\"/>\x0A</f></UNION>\x0A\x09<SCRIPT public=\"1\" set=\"method\" line=\"34\"><f a=\"\"><c path=\"String\"/></f></SCRIPT>\x0A\x09<SCRIPT_PART public=\"1\" set=\"method\" line=\"38\"><f a=\"?args\">\x0A\x09<c path=\"String\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></SCRIPT_PART>\x0A\x09<Execute public=\"1\" set=\"method\" line=\"124\"><f a=\"\"><d/></f></Execute>\x0A\x09<Register public=\"1\" set=\"method\" line=\"128\"><f a=\"context\">\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></Register>\x0A\x09<Queue public=\"1\" set=\"method\" line=\"132\"><f a=\"queue\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A</f></Queue>\x0A\x09<Bulk public=\"1\" set=\"method\" line=\"136\"><f a=\"bulk\">\x0A\x09<c path=\"nMorph.framework.orm.tools.BulkRun\"/>\x0A\x09<c path=\"nMorph.framework.orm.tools.BulkRun\"/>\x0A</f></Bulk>\x0A\x09<ReadValue public=\"1\" set=\"method\" line=\"141\"><f a=\"\"><d/></f></ReadValue>\x0A\x09<ReadTable public=\"1\" set=\"method\" line=\"145\"><f a=\"\"><c path=\"nMorph.framework.orm.client.QueryTable\"/></f></ReadTable>\x0A\x09<Read public=\"1\" params=\"T\" set=\"method\" line=\"149\"><f a=\"cl:?context\">\x0A\x09<x path=\"Class\"><c path=\"Read.T\"/></x>\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<c path=\"Array\"><c path=\"Read.T\"/></c>\x0A</f></Read>\x0A\x09<ReadOne public=\"1\" params=\"T\" set=\"method\" line=\"153\"><f a=\"cl:?context\">\x0A\x09<x path=\"Class\"><c path=\"ReadOne.T\"/></x>\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<c path=\"ReadOne.T\"/>\x0A</f></ReadOne>\x0A\x09<new public=\"1\" set=\"method\" line=\"20\"><f a=\"CurrentSQL:OrderBySentences\">\x0A\x09<c path=\"nMorph.framework.orm.lang.SQL\"/>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></c>\x0A\x09<x path=\"Void\"/>\x0A</f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var SQL
	 */
	public $CurrentSQL;
	/**
	 * @var ISentence[]|\Array_hx
	 */
	public $OrderBySentences;

	/**
	 * @param SQL $CurrentSQL
	 * @param ISentence[]|\Array_hx $OrderBySentences
	 * 
	 * @return void
	 */
	public function __construct ($CurrentSQL, $OrderBySentences) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:21: characters 9-37
		$this->CurrentSQL = $CurrentSQL;
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:22: lines 22-24
		if ($CurrentSQL === null) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:23: characters 13-40
			$this->CurrentSQL = new SQL();
		}
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:25: characters 9-49
		$this->OrderBySentences = $OrderBySentences;
	}

	/**
	 * @param BulkRun $bulk
	 * 
	 * @return BulkRun
	 */
	public function Bulk ($bulk) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:137: characters 9-50
		$bulk->set_queue($this->CurrentSQL->Queue($bulk->get_queue()));
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:138: characters 9-20
		return $bulk;
	}

	/**
	 * @return mixed
	 */
	public function Execute () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:125: characters 9-36
		return $this->CurrentSQL->Execute();
	}

	/**
	 * @param QueueItem[]|\Array_hx $queue
	 * 
	 * @return QueueItem[]|\Array_hx
	 */
	public function Queue ($queue) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:133: characters 9-39
		return $this->CurrentSQL->Queue($queue);
	}

	/**
	 * @param Class $cl
	 * @param Context $context
	 * 
	 * @return mixed[]|\Array_hx
	 */
	public function Read ($cl, $context = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:150: characters 9-44
		return $this->CurrentSQL->Read($cl, $context);
	}

	/**
	 * @param Class $cl
	 * @param Context $context
	 * 
	 * @return mixed
	 */
	public function ReadOne ($cl, $context = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:154: characters 9-47
		return $this->CurrentSQL->ReadOne($cl, $context);
	}

	/**
	 * @return QueryTable
	 */
	public function ReadTable () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:146: characters 9-38
		return $this->CurrentSQL->ReadTable();
	}

	/**
	 * @return mixed
	 */
	public function ReadValue () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:142: characters 9-38
		return $this->CurrentSQL->ReadValue();
	}

	/**
	 * @param Context $context
	 * 
	 * @return void
	 */
	public function Register ($context) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:129: characters 9-56
		$context->set_Queue($this->CurrentSQL->Queue($context->get_Queue()));
	}

	/**
	 * @return string
	 */
	public function SCRIPT () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:35: characters 9-40
		return $this->CurrentSQL->GenerateAll();
	}

	/**
	 * @param string $args
	 * 
	 * @return void
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:40: characters 9-45
		if ($this->OrderBySentences === null) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:40: characters 39-45
			return;
		}
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:42: characters 16-45
		$__hx__switch = ($this->CurrentSQL->getCurrentEngine()->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:108: characters 17-49
			$this->CurrentSQL->AddBlock("ORDER BY ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:111: lines 111-114
			$_g = 0;
			$_g1 = $this->OrderBySentences;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:111: characters 22-30
				$sentence = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:111: lines 111-114
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:112: characters 21-43
				$sentence->SCRIPT_PART();
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:113: characters 21-46
				$this->CurrentSQL->AddBlock(", ");
			}
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:117: lines 117-118
			if ($this->OrderBySentences->length > 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:118: characters 6-34
				$this->CurrentSQL->RemoveLastBlock();
			}
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:76: characters 17-49
			$this->CurrentSQL->AddBlock("ORDER BY ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:79: lines 79-82
			$_g = 0;
			$_g1 = $this->OrderBySentences;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:79: characters 22-30
				$sentence = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:79: lines 79-82
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:80: characters 21-43
				$sentence->SCRIPT_PART();
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:81: characters 21-46
				$this->CurrentSQL->AddBlock(", ");
			}
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:85: lines 85-86
			if ($this->OrderBySentences->length > 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:86: characters 6-34
				$this->CurrentSQL->RemoveLastBlock();
			}
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:60: characters 17-49
			$this->CurrentSQL->AddBlock("ORDER BY ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:63: lines 63-66
			$_g = 0;
			$_g1 = $this->OrderBySentences;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:63: characters 22-30
				$sentence = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:63: lines 63-66
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:64: characters 21-43
				$sentence->SCRIPT_PART();
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:65: characters 21-46
				$this->CurrentSQL->AddBlock(", ");
			}
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:69: lines 69-70
			if ($this->OrderBySentences->length > 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:70: characters 6-34
				$this->CurrentSQL->RemoveLastBlock();
			}
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:92: characters 17-49
			$this->CurrentSQL->AddBlock("ORDER BY ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:95: lines 95-98
			$_g = 0;
			$_g1 = $this->OrderBySentences;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:95: characters 22-30
				$sentence = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:95: lines 95-98
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:96: characters 21-43
				$sentence->SCRIPT_PART();
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:97: characters 21-46
				$this->CurrentSQL->AddBlock(", ");
			}
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:101: lines 101-102
			if ($this->OrderBySentences->length > 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:102: characters 6-34
				$this->CurrentSQL->RemoveLastBlock();
			}
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:44: characters 17-49
			$this->CurrentSQL->AddBlock("ORDER BY ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:47: lines 47-50
			$_g = 0;
			$_g1 = $this->OrderBySentences;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:47: characters 22-30
				$sentence = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:47: lines 47-50
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:48: characters 21-43
				$sentence->SCRIPT_PART();
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:49: characters 21-46
				$this->CurrentSQL->AddBlock(", ");
			}
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:53: lines 53-54
			if ($this->OrderBySentences->length > 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:54: characters 6-34
				$this->CurrentSQL->RemoveLastBlock();
			}
		}
	}

	/**
	 * @param UnionTypeEnum $UnionType
	 * @param IClause $Clause
	 * 
	 * @return UnionClause
	 */
	public function UNION ($UnionType, $Clause) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:29: characters 9-77
		$uc = new UnionClause($this->CurrentSQL, $UnionType, $Clause);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:30: characters 9-33
		$this->CurrentSQL->AddClause($uc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/OrderByClause.hx:31: characters 9-18
		return $uc;
	}
}

Boot::registerClass(OrderByClause::class, 'nMorph.framework.orm.common.clauses.OrderByClause');
