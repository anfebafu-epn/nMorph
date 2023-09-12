<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace php\_NativeArray;

use \php\_Boot\HxAnon;
use \php\Boot;

class NativeArrayKeyValueIterator {
	/**
	 * @var int
	 */
	public $current;
	/**
	 * @var mixed[]
	 */
	public $keys;
	/**
	 * @var int
	 */
	public $length;
	/**
	 * @var mixed[]
	 */
	public $values;

	/**
	 * @param array $data
	 * 
	 * @return void
	 */
	public function __construct ($data) {
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:61: characters 20-21
		$this->current = 0;
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:66: characters 3-30
		$this->length = \count($data);
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:67: characters 3-38
		$this->keys = \array_keys($data);
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:68: characters 3-42
		$this->values = \array_values($data);
	}

	/**
	 * @return bool
	 */
	public function hasNext () {
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:72: characters 3-26
		return $this->current < $this->length;
	}

	/**
	 * @return object
	 */
	public function next () {
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:76: characters 16-29
		$tmp = $this->keys[$this->current];
		#C:\HaxeToolkit\haxe\std/php/NativeArray.hx:76: characters 3-56
		return new _HxAnon_NativeArrayKeyValueIterator0($tmp, $this->values[$this->current++]);
	}
}

class _HxAnon_NativeArrayKeyValueIterator0 extends HxAnon {
	function __construct($key, $value) {
		$this->key = $key;
		$this->value = $value;
	}
}

Boot::registerClass(NativeArrayKeyValueIterator::class, 'php._NativeArray.NativeArrayKeyValueIterator');
