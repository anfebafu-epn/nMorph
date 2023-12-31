<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\sentences;

use \nMorph\framework\orm\interfaces\ISentence;
use \php\Boot;
use \nMorph\framework\orm\interfaces\ILang;
use \nMorph\framework\orm\lang\DDL;

class FielIndexDefinitionSentences implements ISentence {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.common.sentences.FielIndexDefinitionSentences\" params=\"\">\x0A\x09<implements path=\"nMorph.framework.orm.interfaces.ISentence\"/>\x0A\x09<FieldName public=\"1\" get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FieldName>\x0A\x09<FieldTable public=\"1\" get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FieldTable>\x0A\x09<CurrentDDL public=\"1\" get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.orm.lang.DDL\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</CurrentDDL>\x0A\x09<RegisterQuery public=\"1\" set=\"method\" line=\"23\"><f a=\"CurrentDDL\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ILang\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></RegisterQuery>\x0A\x09<IsNullValue public=\"1\" set=\"method\" line=\"28\"><f a=\"\"><x path=\"Bool\"/></f></IsNullValue>\x0A\x09<get_FieldName set=\"method\" line=\"33\"><f a=\"\"><c path=\"String\"/></f></get_FieldName>\x0A\x09<get_FieldTable set=\"method\" line=\"38\"><f a=\"\"><c path=\"String\"/></f></get_FieldTable>\x0A\x09<get_CurrentDDL set=\"method\" line=\"43\"><f a=\"\"><c path=\"nMorph.framework.orm.lang.DDL\"/></f></get_CurrentDDL>\x0A\x09<SCRIPT_PART public=\"1\" set=\"method\" line=\"47\"><f a=\"?args\">\x0A\x09<c path=\"String\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></SCRIPT_PART>\x0A\x09<new public=\"1\" set=\"method\" line=\"17\"><f a=\"FieldTable:FieldName\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var DDL
	 */
	public $CurrentDDL;
	/**
	 * @var string
	 */
	public $FieldName;
	/**
	 * @var string
	 */
	public $FieldTable;

	/**
	 * @param string $FieldTable
	 * @param string $FieldName
	 * 
	 * @return void
	 */
	public function __construct ($FieldTable, $FieldName) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:18: characters 3-39
		$this->FieldName = "\"" . ($FieldName??'null') . "\"";
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:19: characters 3-41
		$this->FieldTable = "\"" . ($FieldTable??'null') . "\"";
	}

	/**
	 * @return bool
	 */
	public function IsNullValue () {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:29: characters 3-15
		return false;
	}

	/**
	 * @param ILang $CurrentDDL
	 * 
	 * @return void
	 */
	public function RegisterQuery ($CurrentDDL) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:24: characters 3-42
		$this->CurrentDDL = Boot::typedCast(Boot::getClass(DDL::class), $CurrentDDL);
	}

	/**
	 * @param string $args
	 * 
	 * @return void
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:48: characters 11-40
		$__hx__switch = ($this->get_CurrentDDL()->getCurrentEngine()->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:131: lines 131-149
			if ($args !== null) {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:133: lines 133-144
				if ($args === "ONLYNAME") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:135: characters 7-37
					$this->get_CurrentDDL()->AddBlock($this->get_FieldName());
				} else if ($args === "WITHTABLE") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:139: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				} else {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:143: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				}
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:148: characters 6-59
				$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
			}
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:91: lines 91-109
			if ($args !== null) {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:93: lines 93-104
				if ($args === "ONLYNAME") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:95: characters 7-37
					$this->get_CurrentDDL()->AddBlock($this->get_FieldName());
				} else if ($args === "WITHTABLE") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:99: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				} else {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:103: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				}
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:108: characters 6-59
				$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
			}
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:71: lines 71-89
			if ($args !== null) {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:73: lines 73-84
				if ($args === "ONLYNAME") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:75: characters 7-37
					$this->get_CurrentDDL()->AddBlock($this->get_FieldName());
				} else if ($args === "WITHTABLE") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:79: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				} else {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:83: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				}
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:88: characters 6-59
				$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
			}
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:111: lines 111-129
			if ($args !== null) {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:113: lines 113-124
				if ($args === "ONLYNAME") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:115: characters 7-37
					$this->get_CurrentDDL()->AddBlock($this->get_FieldName());
				} else if ($args === "WITHTABLE") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:119: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				} else {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:123: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				}
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:128: characters 6-59
				$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
			}
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:51: lines 51-69
			if ($args !== null) {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:53: lines 53-64
				if ($args === "ONLYNAME") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:55: characters 7-37
					$this->get_CurrentDDL()->AddBlock($this->get_FieldName());
				} else if ($args === "WITHTABLE") {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:59: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				} else {
					#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:63: characters 7-60
					$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
				}
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:68: characters 6-59
				$this->get_CurrentDDL()->AddBlock(($this->get_FieldTable()??'null') . "(" . ($this->get_FieldName()??'null') . ")");
			}
		}
	}

	/**
	 * @return DDL
	 */
	public function get_CurrentDDL () {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:44: characters 3-20
		return $this->CurrentDDL;
	}

	/**
	 * @return string
	 */
	public function get_FieldName () {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:34: characters 3-19
		return $this->FieldName;
	}

	/**
	 * @return string
	 */
	public function get_FieldTable () {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/FielIndexDefinitionSentences.hx:39: characters 3-20
		return $this->FieldTable;
	}
}

Boot::registerClass(FielIndexDefinitionSentences::class, 'nMorph.framework.orm.common.sentences.FielIndexDefinitionSentences');
Boot::registerGetters('nMorph\\framework\\orm\\common\\sentences\\FielIndexDefinitionSentences', [
	'CurrentDDL' => true,
	'FieldTable' => true,
	'FieldName' => true
]);
