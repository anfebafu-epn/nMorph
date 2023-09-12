<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\sentences;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ISet;
use \nMorph\framework\orm\interfaces\ISentence;
use \php\Boot;
use \nMorph\framework\orm\interfaces\ILang;

class Assign implements ISet {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.common.sentences.Assign\" params=\"\">\x0A\x09<implements path=\"nMorph.framework.orm.interfaces.ISet\"/>\x0A\x09<SET public=\"1\" set=\"method\" line=\"22\" static=\"1\"><f a=\"UpdateField:SetExpression\">\x0A\x09<c path=\"nMorph.framework.orm.common.sentences.FieldSentence\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISet\"/>\x0A</f></SET>\x0A\x09<UpdateField><c path=\"nMorph.framework.orm.common.sentences.FieldSentence\"/></UpdateField>\x0A\x09<SetExpression><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></SetExpression>\x0A\x09<CurrentSQL><c path=\"nMorph.framework.orm.lang.SQL\"/></CurrentSQL>\x0A\x09<RegisterQuery public=\"1\" set=\"method\" line=\"28\"><f a=\"CurrentSQL\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ILang\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></RegisterQuery>\x0A\x09<SCRIPT_PART public=\"1\" set=\"method\" line=\"35\"><f a=\"?args\">\x0A\x09<c path=\"String\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></SCRIPT_PART>\x0A\x09<new public=\"1\" set=\"method\" line=\"16\"><f a=\"UpdateField:SetExpression\">\x0A\x09<c path=\"nMorph.framework.orm.common.sentences.FieldSentence\"/>\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var SQL
	 */
	public $CurrentSQL;
	/**
	 * @var ISentence
	 */
	public $SetExpression;
	/**
	 * @var FieldSentence
	 */
	public $UpdateField;

	/**
	 * @param FieldSentence $UpdateField
	 * @param ISentence $SetExpression
	 * 
	 * @return ISet
	 */
	public static function SET ($UpdateField, $SetExpression) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:23: characters 3-58
		$as = new Assign($UpdateField, $SetExpression);
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:24: characters 3-12
		return $as;
	}

	/**
	 * @param FieldSentence $UpdateField
	 * @param ISentence $SetExpression
	 * 
	 * @return void
	 */
	public function __construct ($UpdateField, $SetExpression) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:17: characters 3-33
		$this->UpdateField = $UpdateField;
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:18: characters 3-37
		$this->SetExpression = $SetExpression;
	}

	/**
	 * @param ILang $CurrentSQL
	 * 
	 * @return void
	 */
	public function RegisterQuery ($CurrentSQL) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:29: characters 3-42
		$this->CurrentSQL = Boot::typedCast(Boot::getClass(SQL::class), $CurrentSQL);
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:30: characters 3-40
		$this->UpdateField->RegisterQuery($CurrentSQL);
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:31: characters 3-42
		$this->SetExpression->RegisterQuery($CurrentSQL);
	}

	/**
	 * @param string $args
	 * 
	 * @return void
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:36: characters 11-40
		$__hx__switch = ($this->CurrentSQL->getCurrentEngine()->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:111: lines 111-127
			if ($args === "ONLYFIELD") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:114: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
			} else if ($args === "ONLYVALUE") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:119: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:124: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:125: characters 6-32
				$this->CurrentSQL->AddBlock(" = ");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:126: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			}
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:75: lines 75-91
			if ($args === "ONLYFIELD") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:78: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
			} else if ($args === "ONLYVALUE") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:83: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:88: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:89: characters 6-32
				$this->CurrentSQL->AddBlock(" = ");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:90: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			}
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:57: lines 57-73
			if ($args === "ONLYFIELD") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:60: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
			} else if ($args === "ONLYVALUE") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:65: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:70: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:71: characters 6-32
				$this->CurrentSQL->AddBlock(" = ");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:72: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			}
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:93: lines 93-109
			if ($args === "ONLYFIELD") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:96: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
			} else if ($args === "ONLYVALUE") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:101: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:106: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:107: characters 6-32
				$this->CurrentSQL->AddBlock(" = ");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:108: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			}
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:39: lines 39-55
			if ($args === "ONLYFIELD") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:42: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
			} else if ($args === "ONLYVALUE") {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:47: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			} else {
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:52: characters 6-41
				$this->UpdateField->SCRIPT_PART("ONLYNAME");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:53: characters 6-32
				$this->CurrentSQL->AddBlock(" = ");
				#5_framework\orm\src/nMorph/framework/orm/common/sentences/Assign.hx:54: characters 6-33
				$this->SetExpression->SCRIPT_PART();
			}
		}
	}
}

Boot::registerClass(Assign::class, 'nMorph.framework.orm.common.sentences.Assign');
