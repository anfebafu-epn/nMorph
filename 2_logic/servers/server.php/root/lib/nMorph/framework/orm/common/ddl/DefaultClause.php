<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\ddl;

use \php\Boot;
use \nMorph\framework\orm\interfaces\IColumnDefinition;
use \nMorph\framework\orm\configuration\DatabaseEngineEnum;
use \nMorph\framework\orm\configuration\Configuration;
use \nMorph\framework\orm\interfaces\ILang;
use \nMorph\framework\orm\common\enums\DefaultTypeEnum;

class DefaultClause implements IColumnDefinition {
	/**
	 * @var string
	 */
	public $ColumnConstraint;
	/**
	 * @var DatabaseEngineEnum
	 */
	public $DatabaseEngineEnum;
	/**
	 * @var DefaultTypeEnum
	 */
	public $DefaultTypeEnum;
	/**
	 * @var string
	 */
	public $Value;
	/**
	 * @var bool
	 */
	public $ValueBool;
	/**
	 * @var float
	 */
	public $ValueDouble;
	/**
	 * @var int
	 */
	public $ValueInt;

	/**
	 * @param string $ColumnConstraint
	 * @param bool $Value
	 * 
	 * @return DefaultClause
	 */
	public static function DefaulBool ($ColumnConstraint, $Value) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:57: characters 3-118
		$DefaultClause = new DefaultClause($ColumnConstraint, DefaultTypeEnum::DEFBOOL(), null, null, null, $Value);
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:58: characters 3-23
		return $DefaultClause;
	}

	/**
	 * @param string $ColumnConstraint
	 * 
	 * @return DefaultClause
	 */
	public static function DefaulDate ($ColumnConstraint) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:51: characters 3-117
		$DefaultClause = new DefaultClause($ColumnConstraint, DefaultTypeEnum::DEFDATE(), null, null, null, null);
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:52: characters 3-23
		return $DefaultClause;
	}

	/**
	 * @param string $ColumnConstraint
	 * @param float $Value
	 * 
	 * @return DefaultClause
	 */
	public static function DefaulDouble ($ColumnConstraint, $Value) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:45: characters 3-120
		$DefaultClause = new DefaultClause($ColumnConstraint, DefaultTypeEnum::DEFDOUBLE(), null, null, $Value, null);
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:46: characters 3-23
		return $DefaultClause;
	}

	/**
	 * @param string $ColumnConstraint
	 * @param int $Value
	 * 
	 * @return DefaultClause
	 */
	public static function DefaulInt ($ColumnConstraint, $Value) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:39: characters 3-117
		$DefaultClause = new DefaultClause($ColumnConstraint, DefaultTypeEnum::DEFINT(), null, $Value, null, null);
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:40: characters 3-23
		return $DefaultClause;
	}

	/**
	 * @param string $ColumnConstraint
	 * @param string $Value
	 * 
	 * @return DefaultClause
	 */
	public static function DefaulVarChar ($ColumnConstraint, $Value) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:33: characters 3-122
		$DefaultClause = new DefaultClause($ColumnConstraint, DefaultTypeEnum::DEFVARCHAR(), $Value, null, null, null);
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:34: characters 3-23
		return $DefaultClause;
	}

	/**
	 * @param string $ColumnConstraint
	 * @param DefaultTypeEnum $DefaultTypeEnum
	 * @param string $Value
	 * @param int $ValueInt
	 * @param float $ValueDouble
	 * @param bool $ValueBool
	 * 
	 * @return void
	 */
	public function __construct ($ColumnConstraint, $DefaultTypeEnum, $Value = null, $ValueInt = null, $ValueDouble = null, $ValueBool = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:22: characters 3-41
		$this->DefaultTypeEnum = $DefaultTypeEnum;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:23: characters 3-43
		$this->ColumnConstraint = $ColumnConstraint;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:24: characters 3-21
		$this->Value = $Value;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:25: characters 3-25
		$this->ValueInt = $ValueInt;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:26: characters 3-31
		$this->ValueDouble = $ValueDouble;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:27: characters 3-27
		$this->ValueBool = $ValueBool;
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:28: characters 3-94
		$this->DatabaseEngineEnum = Configuration::$Data->get_CurrentDatabaseConnection()->get_DatabaseEngine();
	}

	/**
	 * @param ILang $CurrentDDL
	 * 
	 * @return void
	 */
	public function RegisterQuery ($CurrentDDL) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:63: characters 3-96
		$this->DatabaseEngineEnum = Configuration::$Data->get_CurrentDatabaseConnection()->get_DatabaseEngine();
	}

	/**
	 * @param string $args
	 * 
	 * @return string
	 */
	public function SCRIPT_PART ($args = null) {
		#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:68: characters 11-29
		$__hx__switch = ($this->DatabaseEngineEnum->index);
		if ($__hx__switch === 0) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:128: characters 13-28
			$__hx__switch = ($this->DefaultTypeEnum->index);
			if ($__hx__switch === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:131: characters 7-75
				return " CONSTRAINT \"" . ($this->ColumnConstraint??'null') . "\" DEFAULT '" . ($this->Value??'null') . "'  ";
			} else if ($__hx__switch === 1) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:133: characters 7-74
				return " CONSTRAINT \"" . ($this->ColumnConstraint??'null') . "\" DEFAULT " . ($this->ValueInt??'null') . " ";
			} else if ($__hx__switch === 2) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:135: characters 7-77
				return " CONSTRAINT \"" . ($this->ColumnConstraint??'null') . "\" DEFAULT " . ($this->ValueDouble??'null') . " ";
			} else if ($__hx__switch === 3) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:137: characters 7-78
				return " CONSTRAINT \"" . ($this->ColumnConstraint??'null') . "\" DEFAULT CURRENT_TIMESTAMP";
			} else if ($__hx__switch === 4) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:139: characters 7-77
				return " CONSTRAINT \"" . ($this->ColumnConstraint??'null') . "\" DEFAULT '" . \Std::string($this->ValueBool) . "' ";
			}
		} else if ($__hx__switch === 1) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:100: characters 13-28
			$__hx__switch = ($this->DefaultTypeEnum->index);
			if ($__hx__switch === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:103: characters 7-39
				return " DEFAULT '" . ($this->Value??'null') . "'  ";
			} else if ($__hx__switch === 1) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:105: characters 7-38
				return " DEFAULT " . ($this->ValueInt??'null') . " ";
			} else if ($__hx__switch === 2) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:107: characters 7-41
				return " DEFAULT " . ($this->ValueDouble??'null') . " ";
			} else if ($__hx__switch === 3) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:109: characters 7-43
				return " DEFAULT CURRENT_TIMESTAMP ";
			} else if ($__hx__switch === 4) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:111: characters 7-39
				return " DEFAULT " . \Std::string($this->ValueBool) . " ";
			}
		} else if ($__hx__switch === 2) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:86: characters 13-28
			$__hx__switch = ($this->DefaultTypeEnum->index);
			if ($__hx__switch === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:89: characters 7-39
				return " DEFAULT '" . ($this->Value??'null') . "'  ";
			} else if ($__hx__switch === 1) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:91: characters 7-38
				return " DEFAULT " . ($this->ValueInt??'null') . " ";
			} else if ($__hx__switch === 2) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:93: characters 7-41
				return " DEFAULT " . ($this->ValueDouble??'null') . " ";
			} else if ($__hx__switch === 3) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:95: characters 7-42
				return " DEFAULT CURRENT_TIMESTAMP";
			} else if ($__hx__switch === 4) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:97: characters 7-39
				return " DEFAULT " . \Std::string($this->ValueBool) . " ";
			}
		} else if ($__hx__switch === 3) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:114: characters 13-28
			$__hx__switch = ($this->DefaultTypeEnum->index);
			if ($__hx__switch === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:117: characters 7-39
				return " DEFAULT '" . ($this->Value??'null') . "'  ";
			} else if ($__hx__switch === 1) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:119: characters 7-38
				return " DEFAULT " . ($this->ValueInt??'null') . " ";
			} else if ($__hx__switch === 2) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:121: characters 7-41
				return " DEFAULT " . ($this->ValueDouble??'null') . " ";
			} else if ($__hx__switch === 3) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:123: characters 7-52
				return " default (now() at time zone 'utc') ";
			} else if ($__hx__switch === 4) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:125: characters 7-39
				return " DEFAULT " . \Std::string($this->ValueBool) . " ";
			}
		} else if ($__hx__switch === 4) {
			#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:72: characters 13-28
			$__hx__switch = ($this->DefaultTypeEnum->index);
			if ($__hx__switch === 0) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:75: characters 7-43
				return " SET DEFAULT '" . ($this->Value??'null') . "'  ";
			} else if ($__hx__switch === 1) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:77: characters 7-42
				return " SET DEFAULT " . ($this->ValueInt??'null') . " ";
			} else if ($__hx__switch === 2) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:79: characters 7-45
				return " SET DEFAULT " . ($this->ValueDouble??'null') . " ";
			} else if ($__hx__switch === 3) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:81: characters 7-46
				return " SET DEFAULT CURRENT_TIMESTAMP";
			} else if ($__hx__switch === 4) {
				#5_framework\orm\src/nMorph/framework/orm/common/ddl/DefaultClause.hx:83: characters 7-45
				return " SET DEFAULT '" . \Std::string($this->ValueBool) . "' ";
			}
		}
	}
}

Boot::registerClass(DefaultClause::class, 'nMorph.framework.orm.common.ddl.DefaultClause');
