<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace haxe\crypto;

use \haxe\io\_BytesData\Container;
use \php\Boot;
use \haxe\io\Bytes;

class Base64 {
	/**
	 * @var Bytes
	 */
	static public $BYTES;
	/**
	 * @var string
	 */
	static public $CHARS = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
	/**
	 * @var array
	 */
	static public $NORMAL_62_63;
	/**
	 * @var array
	 */
	static public $URL_62_63;
	/**
	 * @var Bytes
	 */
	static public $URL_BYTES;
	/**
	 * @var string
	 */
	static public $URL_CHARS = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_";

	/**
	 * @param string $str
	 * @param bool $complement
	 * 
	 * @return Bytes
	 */
	public static function decode ($str, $complement = true) {
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:45: lines 45-56
		if ($complement === null) {
			$complement = true;
		}
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:46: lines 46-54
		if (!$complement) {
			#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:47: characters 12-27
			$__hx__switch = (\strlen($str) % 3);
			if ($__hx__switch === 1) {
				#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:49: characters 6-17
				$str = ($str??'null') . "==";
			} else if ($__hx__switch === 2) {
				#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:51: characters 6-16
				$str = ($str??'null') . "=";
			} else {
			}
		}
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:55: characters 10-50
		$s = \base64_decode($str, true);
		$tmp = \strlen($s);
		return new Bytes($tmp, new Container($s));
	}

	/**
	 * @param Bytes $bytes
	 * @param bool $complement
	 * 
	 * @return string
	 */
	public static function encode ($bytes, $complement = true) {
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:40: lines 40-43
		if ($complement === null) {
			$complement = true;
		}
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:41: characters 3-48
		$result = \base64_encode($bytes->toString());
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:42: characters 10-52
		if ($complement) {
			#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:42: characters 24-30
			return $result;
		} else {
			#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:42: characters 33-51
			return \rtrim($result, "=");
		}
	}

	/**
	 * @param string $str
	 * @param bool $complement
	 * 
	 * @return Bytes
	 */
	public static function urlDecode ($str, $complement = false) {
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:63: lines 63-74
		if ($complement === null) {
			$complement = false;
		}
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:64: lines 64-72
		if ($complement) {
			#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:65: characters 12-27
			$__hx__switch = (\strlen($str) % 3);
			if ($__hx__switch === 1) {
				#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:67: characters 6-17
				$str = ($str??'null') . "==";
			} else if ($__hx__switch === 2) {
				#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:69: characters 6-16
				$str = ($str??'null') . "=";
			} else {
			}
		}
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:73: characters 10-88
		$s = \base64_decode(\str_replace(Base64::$URL_62_63, Base64::$NORMAL_62_63, $str), true);
		$tmp = \strlen($s);
		return new Bytes($tmp, new Container($s));
	}

	/**
	 * @param Bytes $bytes
	 * @param bool $complement
	 * 
	 * @return string
	 */
	public static function urlEncode ($bytes, $complement = false) {
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:58: lines 58-61
		if ($complement === null) {
			$complement = false;
		}
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:59: characters 3-86
		$result = \str_replace(Base64::$NORMAL_62_63, Base64::$URL_62_63, \base64_encode($bytes->toString()));
		#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:60: characters 10-52
		if ($complement) {
			#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:60: characters 24-30
			return $result;
		} else {
			#C:\HaxeToolkit\haxe\std/php/_std/haxe/crypto/Base64.hx:60: characters 33-51
			return \rtrim($result, "=");
		}
	}

	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


		$s = Base64::$CHARS;
		$tmp = \strlen($s);
		self::$BYTES = new Bytes($tmp, new Container($s));
		$s = Base64::$URL_CHARS;
		$tmp = \strlen($s);
		self::$URL_BYTES = new Bytes($tmp, new Container($s));
		self::$NORMAL_62_63 = ["+", "/"];
		self::$URL_62_63 = ["-", "_"];
	}
}

Boot::registerClass(Base64::class, 'haxe.crypto.Base64');
Base64::__hx__init();
