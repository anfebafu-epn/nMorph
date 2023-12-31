<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\clauses;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ISentence;
use \php\Boot;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\interfaces\IClause;
use \nMorph\framework\orm\tools\BulkRun;
use \nMorph\framework\orm\client\QueryTable;
use \nMorph\framework\orm\client\QueueItem;
use \nMorph\framework\orm\tools\Context;

class SelectClause implements IClause {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.common.clauses.SelectClause\" params=\"\">\x0A\x09<implements path=\"nMorph.framework.orm.interfaces.IClause\"/>\x0A\x09<CurrentSQL><c path=\"nMorph.framework.orm.lang.SQL\"/></CurrentSQL>\x0A\x09<Sentences expr=\"new Array&lt;ISentence&gt;()\" line=\"19\">\x0A\x09\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></c>\x0A\x09\x09<meta><m n=\":value\"><e><![CDATA[new Array<ISentence>()]]></e></m></meta>\x0A\x09</Sentences>\x0A\x09<FROM public=\"1\" set=\"method\" line=\"30\"><f a=\"Source\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09<c path=\"nMorph.framework.orm.common.clauses.FromClause\"/>\x0A</f></FROM>\x0A\x09<SCRIPT public=\"1\" set=\"method\" line=\"36\"><f a=\"\"><c path=\"String\"/></f></SCRIPT>\x0A\x09<SCRIPT_PART public=\"1\" set=\"method\" line=\"40\"><f a=\"?args\">\x0A\x09<c path=\"String\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></SCRIPT_PART>\x0A\x09<Execute public=\"1\" set=\"method\" line=\"138\"><f a=\"\"><d/></f></Execute>\x0A\x09<Register public=\"1\" set=\"method\" line=\"142\"><f a=\"context\">\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></Register>\x0A\x09<Queue public=\"1\" set=\"method\" line=\"146\"><f a=\"queue\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A</f></Queue>\x0A\x09<Bulk public=\"1\" set=\"method\" line=\"150\"><f a=\"bulk\">\x0A\x09<c path=\"nMorph.framework.orm.tools.BulkRun\"/>\x0A\x09<c path=\"nMorph.framework.orm.tools.BulkRun\"/>\x0A</f></Bulk>\x0A\x09<ReadValue public=\"1\" set=\"method\" line=\"155\"><f a=\"\"><d/></f></ReadValue>\x0A\x09<ReadTable public=\"1\" set=\"method\" line=\"159\"><f a=\"\"><c path=\"nMorph.framework.orm.client.QueryTable\"/></f></ReadTable>\x0A\x09<Read public=\"1\" params=\"T\" set=\"method\" line=\"163\"><f a=\"cl:?context\">\x0A\x09<x path=\"Class\"><c path=\"Read.T\"/></x>\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<c path=\"Array\"><c path=\"Read.T\"/></c>\x0A</f></Read>\x0A\x09<ReadOne public=\"1\" params=\"T\" set=\"method\" line=\"167\"><f a=\"cl:?context\">\x0A\x09<x path=\"Class\"><c path=\"ReadOne.T\"/></x>\x0A\x09<c path=\"nMorph.framework.orm.tools.Context\"/>\x0A\x09<c path=\"ReadOne.T\"/>\x0A</f></ReadOne>\x0A\x09<new public=\"1\" set=\"method\" line=\"21\"><f a=\"CurrentSQL:Sentences\">\x0A\x09<c path=\"nMorph.framework.orm.lang.SQL\"/>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></c>\x0A\x09<x path=\"Void\"/>\x0A</f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var SQL
	 */
	public $CurrentSQL;
	/**
	 * @var ISentence[]|\Array_hx
	 */
	public $Sentences;

	/**
	 * @param SQL $CurrentSQL
	 * @param ISentence[]|\Array_hx $Sentences
	 * 
	 * @return void
	 */
	public function __construct ($CurrentSQL, $Sentences) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:19: characters 46-68
		$this->Sentences = new \Array_hx();
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:22: characters 9-37
		$this->CurrentSQL = $CurrentSQL;
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:23: characters 9-35
		$this->Sentences = $Sentences;
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:25: lines 25-27
		$_g = 0;
		while ($_g < $Sentences->length) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:25: characters 14-15
			$s = ($Sentences->arr[$_g] ?? null);
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:25: lines 25-27
			++$_g;
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:26: characters 13-40
			$s->RegisterQuery($CurrentSQL);
		}
	}

	/**
	 * @param BulkRun $bulk
	 * 
	 * @return BulkRun
	 */
	public function Bulk ($bulk) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:151: characters 9-50
		$bulk->set_queue($this->CurrentSQL->Queue($bulk->get_queue()));
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:152: characters 9-20
		return $bulk;
	}

	/**
	 * @return mixed
	 */
	public function Execute () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:139: characters 9-36
		return $this->CurrentSQL->Execute();
	}

	/**
	 * @param ISource $Source
	 * 
	 * @return FromClause
	 */
	public function FROM ($Source) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:31: characters 9-53
		$fc = new FromClause($this->CurrentSQL, $Source);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:32: characters 9-33
		$this->CurrentSQL->AddClause($fc);
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:33: characters 9-18
		return $fc;
	}

	/**
	 * @param QueueItem[]|\Array_hx $queue
	 * 
	 * @return QueueItem[]|\Array_hx
	 */
	public function Queue ($queue) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:147: characters 9-39
		return $this->CurrentSQL->Queue($queue);
	}

	/**
	 * @param Class $cl
	 * @param Context $context
	 * 
	 * @return mixed[]|\Array_hx
	 */
	public function Read ($cl, $context = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:164: characters 9-44
		return $this->CurrentSQL->Read($cl, $context);
	}

	/**
	 * @param Class $cl
	 * @param Context $context
	 * 
	 * @return mixed
	 */
	public function ReadOne ($cl, $context = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:168: characters 9-47
		return $this->CurrentSQL->ReadOne($cl, $context);
	}

	/**
	 * @return QueryTable
	 */
	public function ReadTable () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:160: characters 9-38
		return $this->CurrentSQL->ReadTable();
	}

	/**
	 * @return mixed
	 */
	public function ReadValue () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:156: characters 9-38
		return $this->CurrentSQL->ReadValue();
	}

	/**
	 * @param Context $context
	 * 
	 * @return void
	 */
	public function Register ($context) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:143: characters 9-56
		$context->set_Queue($this->CurrentSQL->Queue($context->get_Queue()));
	}

	/**
	 * @return string
	 */
	public function SCRIPT () {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:37: characters 9-40
		return $this->CurrentSQL->GenerateAll();
	}

	/**
	 * @param string $args
	 * 
	 * @return void
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:43: characters 16-45
		$__hx__switch = ($this->CurrentSQL->getCurrentEngine()->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:118: characters 17-47
			$this->CurrentSQL->AddBlock("SELECT ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:119: characters 5-40
			$this->CurrentSQL->AddBlock("{{TopBlock}}");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:121: lines 121-134
			if ($this->Sentences->length === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:122: characters 21-46
				$this->CurrentSQL->AddBlock("* ");
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:125: lines 125-128
				$_g = 0;
				$_g1 = $this->Sentences;
				while ($_g < $_g1->length) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:125: characters 26-34
					$sentence = ($_g1->arr[$_g] ?? null);
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:125: lines 125-128
					++$_g;
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:126: characters 25-47
					$sentence->SCRIPT_PART();
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:127: characters 25-50
					$this->CurrentSQL->AddBlock(", ");
				}
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:130: lines 130-131
				if ($this->Sentences->length > 0) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:131: characters 7-35
					$this->CurrentSQL->RemoveLastBlock();
				}
			}
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:82: characters 17-47
			$this->CurrentSQL->AddBlock("SELECT ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:83: characters 5-40
			$this->CurrentSQL->AddBlock("{{TopBlock}}");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:85: lines 85-98
			if ($this->Sentences->length === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:86: characters 21-46
				$this->CurrentSQL->AddBlock("* ");
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:89: lines 89-92
				$_g = 0;
				$_g1 = $this->Sentences;
				while ($_g < $_g1->length) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:89: characters 26-34
					$sentence = ($_g1->arr[$_g] ?? null);
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:89: lines 89-92
					++$_g;
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:90: characters 25-47
					$sentence->SCRIPT_PART();
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:91: characters 25-50
					$this->CurrentSQL->AddBlock(", ");
				}
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:94: lines 94-95
				if ($this->Sentences->length > 0) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:95: characters 7-35
					$this->CurrentSQL->RemoveLastBlock();
				}
			}
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:64: characters 17-47
			$this->CurrentSQL->AddBlock("SELECT ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:65: characters 5-40
			$this->CurrentSQL->AddBlock("{{TopBlock}}");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:67: lines 67-80
			if ($this->Sentences->length === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:68: characters 21-46
				$this->CurrentSQL->AddBlock("* ");
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:71: lines 71-74
				$_g = 0;
				$_g1 = $this->Sentences;
				while ($_g < $_g1->length) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:71: characters 26-34
					$sentence = ($_g1->arr[$_g] ?? null);
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:71: lines 71-74
					++$_g;
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:72: characters 25-47
					$sentence->SCRIPT_PART();
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:73: characters 25-50
					$this->CurrentSQL->AddBlock(", ");
				}
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:76: lines 76-77
				if ($this->Sentences->length > 0) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:77: characters 7-35
					$this->CurrentSQL->RemoveLastBlock();
				}
			}
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:100: characters 17-47
			$this->CurrentSQL->AddBlock("SELECT ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:101: characters 5-40
			$this->CurrentSQL->AddBlock("{{TopBlock}}");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:103: lines 103-116
			if ($this->Sentences->length === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:104: characters 21-46
				$this->CurrentSQL->AddBlock("* ");
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:107: lines 107-110
				$_g = 0;
				$_g1 = $this->Sentences;
				while ($_g < $_g1->length) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:107: characters 26-34
					$sentence = ($_g1->arr[$_g] ?? null);
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:107: lines 107-110
					++$_g;
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:108: characters 25-47
					$sentence->SCRIPT_PART();
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:109: characters 25-50
					$this->CurrentSQL->AddBlock(", ");
				}
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:112: lines 112-113
				if ($this->Sentences->length > 0) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:113: characters 7-35
					$this->CurrentSQL->RemoveLastBlock();
				}
			}
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:45: characters 17-47
			$this->CurrentSQL->AddBlock("SELECT ");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:46: characters 5-40
			$this->CurrentSQL->AddBlock("{{TopBlock}}");
			#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:48: lines 48-61
			if ($this->Sentences->length === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:49: characters 21-46
				$this->CurrentSQL->AddBlock("* ");
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:52: lines 52-55
				$_g = 0;
				$_g1 = $this->Sentences;
				while ($_g < $_g1->length) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:52: characters 26-34
					$sentence = ($_g1->arr[$_g] ?? null);
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:52: lines 52-55
					++$_g;
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:53: characters 25-47
					$sentence->SCRIPT_PART();
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:54: characters 25-50
					$this->CurrentSQL->AddBlock(", ");
				}
				#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:57: lines 57-58
				if ($this->Sentences->length > 0) {
					#5_framework\orm\src/nMorph/framework/orm/common/clauses/SelectClause.hx:58: characters 7-35
					$this->CurrentSQL->RemoveLastBlock();
				}
			}
		}
	}
}

Boot::registerClass(SelectClause::class, 'nMorph.framework.orm.common.clauses.SelectClause');
