<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\enums;

use \php\Boot;
use \php\_Boot\HxEnum;

class HaxeTypeEnum extends HxEnum {
	/**
	 * @return HaxeTypeEnum
	 */
	static public function BOOL () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('BOOL', 6, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function BYTES () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('BYTES', 4, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function DATE () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('DATE', 5, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function FLOAT () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('FLOAT', 3, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function INT () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('INT', 1, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function INT64 () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('INT64', 2, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function STRING () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('STRING', 0, []);
		return $inst;
	}

	/**
	 * @return HaxeTypeEnum
	 */
	static public function UUID () {
		static $inst = null;
		if (!$inst) $inst = new HaxeTypeEnum('UUID', 7, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			6 => 'BOOL',
			4 => 'BYTES',
			5 => 'DATE',
			3 => 'FLOAT',
			1 => 'INT',
			2 => 'INT64',
			0 => 'STRING',
			7 => 'UUID',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'BOOL' => 0,
			'BYTES' => 0,
			'DATE' => 0,
			'FLOAT' => 0,
			'INT' => 0,
			'INT64' => 0,
			'STRING' => 0,
			'UUID' => 0,
		];
	}
}

Boot::registerClass(HaxeTypeEnum::class, 'nMorph.framework.orm.common.enums.HaxeTypeEnum');
