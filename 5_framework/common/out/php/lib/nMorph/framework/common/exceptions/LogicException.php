<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\common\exceptions;

use \php\Boot;
use \haxe\Exception;

class LogicException extends Exception {
	/**
	 * @var int
	 */
	public $Code;

	/**
	 * @param int $Code
	 * @param string $Msg
	 * 
	 * @return void
	 */
	public function __construct ($Code, $Msg) {
		#5_framework\common\src/nMorph/framework/common/exceptions/LogicException.hx:8: characters 3-13
		parent::__construct($Msg);
		#5_framework\common\src/nMorph/framework/common/exceptions/LogicException.hx:9: characters 9-25
		$this->set_Code($Code);
	}

	/**
	 * @return int
	 */
	public function get_Code () {
		#5_framework\common\src/nMorph/framework/common/exceptions/LogicException.hx:20: characters 9-20
		return $this->Code;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Code ($value) {
		#5_framework\common\src/nMorph/framework/common/exceptions/LogicException.hx:16: characters 9-33
		return $this->Code = $value;
	}
}

Boot::registerClass(LogicException::class, 'nMorph.framework.common.exceptions.LogicException');
Boot::registerGetters('nMorph\\framework\\common\\exceptions\\LogicException', [
	'Code' => true
]);
Boot::registerSetters('nMorph\\framework\\common\\exceptions\\LogicException', [
	'Code' => true
]);
