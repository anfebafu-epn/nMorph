<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\ddl;

use \php\Boot;
use \nMorph\framework\orm\interfaces\IColumnDefinition;
use \nMorph\framework\orm\interfaces\ILang;
use \nMorph\framework\orm\lang\DDL;

class ConstrainPKDefinition implements IColumnDefinition {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.common.ddl.ConstrainPKDefinition\" params=\"\">\x0A\x09<implements path=\"nMorph.framework.orm.interfaces.IColumnDefinition\"/>\x0A\x09<SET public=\"1\" set=\"method\" line=\"22\" static=\"1\"><f a=\"PKName:ColumnsNames\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"Array\"><c path=\"String\"/></c>\x0A\x09<c path=\"nMorph.framework.orm.common.ddl.ConstrainPKDefinition\"/>\x0A</f></SET>\x0A\x09<PKName><c path=\"String\"/></PKName>\x0A\x09<ColumnsNames><c path=\"Array\"><c path=\"String\"/></c></ColumnsNames>\x0A\x09<CurrentDDL><c path=\"nMorph.framework.orm.lang.DDL\"/></CurrentDDL>\x0A\x09<RegisterQuery public=\"1\" set=\"method\" line=\"27\"><f a=\"CurrentDDL\">\x0A\x09<c path=\"nMorph.framework.orm.interfaces.ILang\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></RegisterQuery>\x0A\x09<SCRIPT_PART public=\"1\" set=\"method\" line=\"31\"><f a=\"?args\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></SCRIPT_PART>\x0A\x09<new public=\"1\" set=\"method\" line=\"17\"><f a=\"PKName:ColumnsNames\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"Array\"><c path=\"String\"/></c>\x0A\x09<x path=\"Void\"/>\x0A</f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var string[]|\Array_hx
	 */
	public $ColumnsNames;
	/**
	 * @var DDL
	 */
	public $CurrentDDL;
	/**
	 * @var string
	 */
	public $PKName;

	/**
	 * @param string $PKName
	 * @param string[]|\Array_hx $ColumnsNames
	 * 
	 * @return ConstrainPKDefinition
	 */
	public static function SET ($PKName, $ColumnsNames) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:23: characters 9-88
		$cd = new ConstrainPKDefinition($PKName, $ColumnsNames);
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:24: characters 9-18
		return $cd;
	}

	/**
	 * @param string $PKName
	 * @param string[]|\Array_hx $ColumnsNames
	 * 
	 * @return void
	 */
	public function __construct ($PKName, $ColumnsNames) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:18: characters 9-29
		$this->PKName = $PKName;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:19: characters 9-41
		$this->ColumnsNames = $ColumnsNames;
	}

	/**
	 * @param ILang $CurrentDDL
	 * 
	 * @return void
	 */
	public function RegisterQuery ($CurrentDDL) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:28: characters 9-48
		$this->CurrentDDL = Boot::typedCast(Boot::getClass(DDL::class), $CurrentDDL);
	}

	/**
	 * @param string $args
	 * 
	 * @return string
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:32: characters 9-23
		$Part = "";
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:33: lines 33-34
		if ($this->CurrentDDL === null) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:34: characters 13-35
			$this->CurrentDDL = new DDL();
		}
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:36: characters 16-45
		$__hx__switch = ($this->CurrentDDL->getCurrentEngine()->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:78: characters 17-72
			$Part = ($Part??'null') . " CONSTRAINT \"PK" . ($this->PKName??'null') . "\" PRIMARY KEY ( ";
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:79: lines 79-81
			$_g = 0;
			$_g1 = $this->ColumnsNames;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:79: characters 22-32
				$columnName = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:79: lines 79-81
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:80: characters 21-53
				$Part = ($Part??'null') . "\"" . ($columnName??'null') . "\" , ";
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:82: lines 82-83
			if (\mb_substr($Part, mb_strlen($Part) - 2, 2) === ", ") {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:83: characters 28-59
				$Part = \mb_substr($Part, 0, mb_strlen($Part) - 2);
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:84: characters 17-28
			$Part = ($Part??'null') . ")";
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:58: characters 17-72
			$Part = ($Part??'null') . " CONSTRAINT \"PK" . ($this->PKName??'null') . "\" PRIMARY KEY ( ";
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:59: lines 59-61
			$_g = 0;
			$_g1 = $this->ColumnsNames;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:59: characters 22-32
				$columnName = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:59: lines 59-61
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:60: characters 21-53
				$Part = ($Part??'null') . "\"" . ($columnName??'null') . "\" , ";
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:62: lines 62-63
			if (\mb_substr($Part, mb_strlen($Part) - 2, 2) === ", ") {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:63: characters 28-59
				$Part = \mb_substr($Part, 0, mb_strlen($Part) - 2);
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:64: characters 17-28
			$Part = ($Part??'null') . ")";
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:48: characters 17-72
			$Part = ($Part??'null') . " CONSTRAINT \"PK" . ($this->PKName??'null') . "\" PRIMARY KEY ( ";
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:49: lines 49-51
			$_g = 0;
			$_g1 = $this->ColumnsNames;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:49: characters 22-32
				$columnName = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:49: lines 49-51
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:50: characters 21-49
				$Part = ($Part??'null') . "" . ($columnName??'null') . " , ";
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:52: lines 52-53
			if (\mb_substr($Part, mb_strlen($Part) - 2, 2) === ", ") {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:53: characters 28-59
				$Part = \mb_substr($Part, 0, mb_strlen($Part) - 2);
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:54: characters 17-28
			$Part = ($Part??'null') . ")";
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:68: characters 17-72
			$Part = ($Part??'null') . " CONSTRAINT \"PK" . ($this->PKName??'null') . "\" PRIMARY KEY ( ";
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:69: lines 69-71
			$_g = 0;
			$_g1 = $this->ColumnsNames;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:69: characters 22-32
				$columnName = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:69: lines 69-71
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:70: characters 21-53
				$Part = ($Part??'null') . "\"" . ($columnName??'null') . "\" , ";
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:72: lines 72-73
			if (\mb_substr($Part, mb_strlen($Part) - 2, 2) === ", ") {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:73: characters 28-59
				$Part = \mb_substr($Part, 0, mb_strlen($Part) - 2);
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:74: characters 17-28
			$Part = ($Part??'null') . ")";
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:38: characters 17-72
			$Part = ($Part??'null') . " CONSTRAINT \"PK" . ($this->PKName??'null') . "\" PRIMARY KEY ( ";
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:39: lines 39-41
			$_g = 0;
			$_g1 = $this->ColumnsNames;
			while ($_g < $_g1->length) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:39: characters 22-32
				$columnName = ($_g1->arr[$_g] ?? null);
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:39: lines 39-41
				++$_g;
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:40: characters 21-53
				$Part = ($Part??'null') . "\"" . ($columnName??'null') . "\" , ";
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:42: lines 42-43
			if (\mb_substr($Part, mb_strlen($Part) - 2, 2) === ", ") {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:43: characters 28-59
				$Part = \mb_substr($Part, 0, mb_strlen($Part) - 2);
			}
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:44: characters 17-28
			$Part = ($Part??'null') . ")";
		}
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/ConstrainPKDefinition.hx:87: characters 9-20
		return $Part;
	}
}

Boot::registerClass(ConstrainPKDefinition::class, 'nMorph.framework.orm.common.ddl.ConstrainPKDefinition');
