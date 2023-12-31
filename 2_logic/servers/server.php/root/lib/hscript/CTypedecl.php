<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace hscript;

use \php\Boot;
use \php\_Boot\HxEnum;

class CTypedecl extends HxEnum {
	/**
	 * @param object $a
	 * 
	 * @return CTypedecl
	 */
	static public function CTAbstract ($a) {
		return new CTypedecl('CTAbstract', 4, [$a]);
	}

	/**
	 * @param TType $t
	 * 
	 * @return CTypedecl
	 */
	static public function CTAlias ($t) {
		return new CTypedecl('CTAlias', 3, [$t]);
	}

	/**
	 * @param object $c
	 * 
	 * @return CTypedecl
	 */
	static public function CTClass ($c) {
		return new CTypedecl('CTClass', 0, [$c]);
	}

	/**
	 * @param object $e
	 * 
	 * @return CTypedecl
	 */
	static public function CTEnum ($e) {
		return new CTypedecl('CTEnum', 1, [$e]);
	}

	/**
	 * @param object $t
	 * 
	 * @return CTypedecl
	 */
	static public function CTTypedef ($t) {
		return new CTypedecl('CTTypedef', 2, [$t]);
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			4 => 'CTAbstract',
			3 => 'CTAlias',
			0 => 'CTClass',
			1 => 'CTEnum',
			2 => 'CTTypedef',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'CTAbstract' => 1,
			'CTAlias' => 1,
			'CTClass' => 1,
			'CTEnum' => 1,
			'CTTypedef' => 1,
		];
	}
}

Boot::registerClass(CTypedecl::class, 'hscript.CTypedecl');
