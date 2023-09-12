<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace hscript;

use \php\Boot;
use \php\_Boot\HxEnum;

class FieldAccess extends HxEnum {
	/**
	 * @return FieldAccess
	 */
	static public function AInline () {
		static $inst = null;
		if (!$inst) $inst = new FieldAccess('AInline', 2, []);
		return $inst;
	}

	/**
	 * @return FieldAccess
	 */
	static public function AMacro () {
		static $inst = null;
		if (!$inst) $inst = new FieldAccess('AMacro', 5, []);
		return $inst;
	}

	/**
	 * @return FieldAccess
	 */
	static public function AOverride () {
		static $inst = null;
		if (!$inst) $inst = new FieldAccess('AOverride', 3, []);
		return $inst;
	}

	/**
	 * @return FieldAccess
	 */
	static public function APrivate () {
		static $inst = null;
		if (!$inst) $inst = new FieldAccess('APrivate', 1, []);
		return $inst;
	}

	/**
	 * @return FieldAccess
	 */
	static public function APublic () {
		static $inst = null;
		if (!$inst) $inst = new FieldAccess('APublic', 0, []);
		return $inst;
	}

	/**
	 * @return FieldAccess
	 */
	static public function AStatic () {
		static $inst = null;
		if (!$inst) $inst = new FieldAccess('AStatic', 4, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			2 => 'AInline',
			5 => 'AMacro',
			3 => 'AOverride',
			1 => 'APrivate',
			0 => 'APublic',
			4 => 'AStatic',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'AInline' => 0,
			'AMacro' => 0,
			'AOverride' => 0,
			'APrivate' => 0,
			'APublic' => 0,
			'AStatic' => 0,
		];
	}
}

Boot::registerClass(FieldAccess::class, 'hscript.FieldAccess');
