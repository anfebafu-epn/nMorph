<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\logic;

use \nMorph\core\logic\category\CategoryLogic;
use \php\Boot;
use \nMorph\core\logic\person\PersonLogic;
use \nMorph\core\logic\task\TaskLogic;

/**
 * ...
 * @author Smartwork
 */
class Logic {
	/**
	 * @return void
	 */
	public static function main () {
		#2_logic\logic\src/nMorph/core/logic/Logic.hx:21: characters 3-31
		\Type::getClass(Boot::getClass(CategoryLogic::class));
		#2_logic\logic\src/nMorph/core/logic/Logic.hx:22: characters 3-29
		\Type::getClass(Boot::getClass(PersonLogic::class));
		#2_logic\logic\src/nMorph/core/logic/Logic.hx:23: characters 3-27
		\Type::getClass(Boot::getClass(TaskLogic::class));
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(Logic::class, 'nMorph.core.logic.Logic');
