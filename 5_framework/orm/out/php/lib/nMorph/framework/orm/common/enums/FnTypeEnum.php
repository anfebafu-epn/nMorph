<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\common\enums;

use \php\Boot;
use \php\_Boot\HxEnum;

class FnTypeEnum extends HxEnum {
	/**
	 * @return FnTypeEnum
	 */
	static public function FDIV () {
		static $inst = null;
		if (!$inst) $inst = new FnTypeEnum('FDIV', 3, []);
		return $inst;
	}

	/**
	 * @return FnTypeEnum
	 */
	static public function FMULT () {
		static $inst = null;
		if (!$inst) $inst = new FnTypeEnum('FMULT', 2, []);
		return $inst;
	}

	/**
	 * @return FnTypeEnum
	 */
	static public function FSUB () {
		static $inst = null;
		if (!$inst) $inst = new FnTypeEnum('FSUB', 1, []);
		return $inst;
	}

	/**
	 * @return FnTypeEnum
	 */
	static public function FSUM () {
		static $inst = null;
		if (!$inst) $inst = new FnTypeEnum('FSUM', 0, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			3 => 'FDIV',
			2 => 'FMULT',
			1 => 'FSUB',
			0 => 'FSUM',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'FDIV' => 0,
			'FMULT' => 0,
			'FSUB' => 0,
			'FSUM' => 0,
		];
	}
}

Boot::registerClass(FnTypeEnum::class, 'nMorph.framework.orm.common.enums.FnTypeEnum');
