<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace haxe\iterators;

use \php\Boot;

/**
 * This iterator can be used to iterate over char codes in a string.
 * Note that char codes may differ across platforms because of different
 * internal encoding of strings in different of runtimes.
 */
class StringIterator {
	/**
	 * @var int
	 */
	public $offset;
	/**
	 * @var string
	 */
	public $s;

	/**
	 * Create a new `StringIterator` over String `s`.
	 * 
	 * @param string $s
	 * 
	 * @return void
	 */
	public function __construct ($s) {
		#C:\HaxeToolkit\haxe\std/haxe/iterators/StringIterator.hx:32: characters 15-16
		$this->offset = 0;
		#C:\HaxeToolkit\haxe\std/haxe/iterators/StringIterator.hx:39: characters 3-13
		$this->s = $s;
	}

	/**
	 * See `Iterator.hasNext`
	 * 
	 * @return bool
	 */
	public function hasNext () {
		#C:\HaxeToolkit\haxe\std/haxe/iterators/StringIterator.hx:46: characters 3-27
		return $this->offset < mb_strlen($this->s);
	}

	/**
	 * See `Iterator.next`
	 * 
	 * @return int
	 */
	public function next () {
		#C:\HaxeToolkit\haxe\std/haxe/iterators/StringIterator.hx:53: characters 3-47
		return \StringTools::unsafeCodeAt($this->s, $this->offset++);
	}
}

Boot::registerClass(StringIterator::class, 'haxe.iterators.StringIterator');
