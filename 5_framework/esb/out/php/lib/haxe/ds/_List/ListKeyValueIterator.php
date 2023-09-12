<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace haxe\ds\_List;

use \php\_Boot\HxAnon;
use \php\Boot;

class ListKeyValueIterator {
	/**
	 * @var ListNode
	 */
	public $head;
	/**
	 * @var int
	 */
	public $idx;

	/**
	 * @param ListNode $head
	 * 
	 * @return void
	 */
	public function __construct ($head) {
		#C:\HaxeToolkit\haxe\std/haxe/ds/List.hx:300: characters 3-19
		$this->head = $head;
		#C:\HaxeToolkit\haxe\std/haxe/ds/List.hx:301: characters 3-15
		$this->idx = 0;
	}

	/**
	 * @return bool
	 */
	public function hasNext () {
		#C:\HaxeToolkit\haxe\std/haxe/ds/List.hx:305: characters 3-22
		return $this->head !== null;
	}

	/**
	 * @return object
	 */
	public function next () {
		#C:\HaxeToolkit\haxe\std/haxe/ds/List.hx:309: characters 3-23
		$val = $this->head->item;
		#C:\HaxeToolkit\haxe\std/haxe/ds/List.hx:310: characters 3-19
		$this->head = $this->head->next;
		#C:\HaxeToolkit\haxe\std/haxe/ds/List.hx:311: characters 3-34
		return new _HxAnon_ListKeyValueIterator0($val, $this->idx++);
	}
}

class _HxAnon_ListKeyValueIterator0 extends HxAnon {
	function __construct($value, $key) {
		$this->value = $value;
		$this->key = $key;
	}
}

Boot::registerClass(ListKeyValueIterator::class, 'haxe.ds._List.ListKeyValueIterator');
