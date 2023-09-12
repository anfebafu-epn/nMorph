<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\common\exceptions;

use \php\Boot;
use \haxe\Exception;

/**
 * ...
 * @author Smartwork
 */
class ExceptionHelper {
	/**
	 * @param int $Code
	 * @param string $Msg
	 * 
	 * @return void
	 */
	public static function LogicException ($Code, $Msg) {
		#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:17: lines 17-22
		try {
			#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:18: characters 13-18
			throw new LogicException($Code, $Msg);
		} catch(\Throwable $_g) {
			#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:20: characters 16-17
			$e = Exception::caught($_g)->unwrap();
			#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:21: characters 13-18
			throw Exception::thrown($e);
		}
	}

	/**
	 * @param int $Code
	 * @param string $Msg
	 * 
	 * @return void
	 */
	public static function SecurityException ($Code, $Msg) {
		#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:26: lines 26-31
		try {
			#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:27: characters 13-18
			throw new SecurityException($Code, $Msg);
		} catch(\Throwable $_g) {
			#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:29: characters 16-17
			$e = Exception::caught($_g)->unwrap();
			#5_framework\common\src/nMorph/framework/common/exceptions/ExceptionHelper.hx:30: characters 13-18
			throw Exception::thrown($e);
		}
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(ExceptionHelper::class, 'nMorph.framework.common.exceptions.ExceptionHelper');
