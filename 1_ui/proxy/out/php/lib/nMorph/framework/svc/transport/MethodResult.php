<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\svc\transport;

use \php\Boot;

class MethodResult {
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var mixed
	 */
	public $ReturnObject;

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return string
	 */
	public function get_Name () {
		#5_framework\svc\src/nMorph/framework/svc/transport/MethodResult.hx:21: characters 9-20
		return $this->Name;
	}

	/**
	 * @return mixed
	 */
	public function get_ReturnObject () {
		#5_framework\svc\src/nMorph/framework/svc/transport/MethodResult.hx:13: characters 9-28
		return $this->ReturnObject;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Name ($value) {
		#5_framework\svc\src/nMorph/framework/svc/transport/MethodResult.hx:25: characters 9-33
		return $this->Name = $value;
	}

	/**
	 * @param mixed $value
	 * 
	 * @return mixed
	 */
	public function set_ReturnObject ($value) {
		#5_framework\svc\src/nMorph/framework/svc/transport/MethodResult.hx:17: characters 9-41
		return $this->ReturnObject = $value;
	}
}

Boot::registerClass(MethodResult::class, 'nMorph.framework.svc.transport.MethodResult');
Boot::registerGetters('nMorph\\framework\\svc\\transport\\MethodResult', [
	'Name' => true,
	'ReturnObject' => true
]);
Boot::registerSetters('nMorph\\framework\\svc\\transport\\MethodResult', [
	'Name' => true,
	'ReturnObject' => true
]);
