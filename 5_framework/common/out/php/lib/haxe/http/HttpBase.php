<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace haxe\http;

use \php\_Boot\HxAnon;
use \php\Boot;
use \haxe\Exception;
use \haxe\io\Error;
use \php\_Boot\HxClosure;
use \haxe\exceptions\NotImplementedException;
use \haxe\io\Bytes;

/**
 * This class can be used to handle Http requests consistently across
 * platforms. There are two intended usages:
 * - call `haxe.Http.requestUrl(url)` and receive the result as a `String`
 * (only available on `sys` targets)
 * - create a `new haxe.Http(url)`, register your callbacks for `onData`,
 * `onError` and `onStatus`, then call `request()`.
 */
class HttpBase {
	/**
	 * @var \Closure
	 */
	public $emptyOnData;
	/**
	 * @var object[]|\Array_hx
	 */
	public $headers;
	/**
	 * @var \Closure
	 * This method is called upon a successful request, with `data` containing
	 * the result String.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onBytes = function(data) { // handle result }`
	 */
	public $onBytes;
	/**
	 * @var \Closure
	 * This method is called upon a successful request, with `data` containing
	 * the result String.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onData = function(data) { // handle result }`
	 */
	public $onData;
	/**
	 * @var \Closure
	 * This method is called upon a request error, with `msg` containing the
	 * error description.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onError = function(msg) { // handle error }`
	 */
	public $onError;
	/**
	 * @var \Closure
	 * This method is called upon a Http status change, with `status` being the
	 * new status.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onStatus = function(status) { // handle status }`
	 */
	public $onStatus;
	/**
	 * @var object[]|\Array_hx
	 */
	public $params;
	/**
	 * @var Bytes
	 */
	public $postBytes;
	/**
	 * @var string
	 */
	public $postData;
	/**
	 * @var string
	 */
	public $responseAsString;
	/**
	 * @var Bytes
	 */
	public $responseBytes;
	/**
	 * @var string
	 * The url of `this` request. It is used only by the `request()` method and
	 * can be changed in order to send the same request to different target
	 * Urls.
	 */
	public $url;

	/**
	 * Creates a new Http instance with `url` as parameter.
	 * This does not do a request until `request()` is called.
	 * If `url` is null, the field url must be set to a value before making the
	 * call to `request()`, or the result is unspecified.
	 * (Php) Https (SSL) connections are allowed only if the OpenSSL extension
	 * is enabled.
	 * 
	 * @param string $url
	 * 
	 * @return void
	 */
	public function __construct ($url) {
		if (!$this->__hx__default__onData) {
			$this->__hx__default__onData = new HxClosure($this, 'onData');
			if ($this->onData === null) $this->onData = $this->__hx__default__onData;
		}
		if (!$this->__hx__default__onBytes) {
			$this->__hx__default__onBytes = new HxClosure($this, 'onBytes');
			if ($this->onBytes === null) $this->onBytes = $this->__hx__default__onBytes;
		}
		if (!$this->__hx__default__onError) {
			$this->__hx__default__onError = new HxClosure($this, 'onError');
			if ($this->onError === null) $this->onError = $this->__hx__default__onError;
		}
		if (!$this->__hx__default__onStatus) {
			$this->__hx__default__onStatus = new HxClosure($this, 'onStatus');
			if ($this->onStatus === null) $this->onStatus = $this->__hx__default__onStatus;
		}
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:72: characters 3-17
		$this->url = $url;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:73: characters 3-15
		$this->headers = new \Array_hx();
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:74: characters 3-14
		$this->params = new \Array_hx();
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:75: characters 3-23
		$this->emptyOnData = $this->onData;
	}

	/**
	 * @param string $header
	 * @param string $value
	 * 
	 * @return void
	 */
	public function addHeader ($header, $value) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:99: characters 3-45
		$_this = $this->headers;
		$_this->arr[$_this->length++] = new _HxAnon_HttpBase0($header, $value);
	}

	/**
	 * @param string $name
	 * @param string $value
	 * 
	 * @return void
	 */
	public function addParameter ($name, $value) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:126: characters 3-42
		$_this = $this->params;
		$_this->arr[$_this->length++] = new _HxAnon_HttpBase0($name, $value);
	}

	/**
	 * @return string
	 */
	public function get_responseData () {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:242: lines 242-248
		if (($this->responseAsString === null) && ($this->responseBytes !== null)) {
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:246: characters 23-77
			$_this = $this->responseBytes;
			$len = $this->responseBytes->length;
			$tmp = null;
			if (($len < 0) || ($len > $_this->length)) {
				throw Exception::thrown(Error::OutsideBounds());
			} else {
				$tmp = \substr($_this->b->s, 0, $len);
			}
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:246: characters 4-77
			$this->responseAsString = $tmp;
		}
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:249: characters 3-26
		return $this->responseAsString;
	}

	/**
	 * Override this if extending `haxe.Http` with overriding `onData`
	 * 
	 * @return bool
	 */
	public function hasOnData () {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:229: characters 3-54
		return !\Reflect::compareMethods($this->onData, $this->emptyOnData);
	}

	/**
	 * This method is called upon a successful request, with `data` containing
	 * the result String.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onBytes = function(data) { // handle result }`
	 * 
	 * @param Bytes $data
	 * 
	 * @return void
	 */
	public function onBytes ($data)
	{
		if ($this->onBytes !== $this->__hx__default__onBytes) return call_user_func_array($this->onBytes, func_get_args());
	}
	protected $__hx__default__onBytes;

	/**
	 * This method is called upon a successful request, with `data` containing
	 * the result String.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onData = function(data) { // handle result }`
	 * 
	 * @param string $data
	 * 
	 * @return void
	 */
	public function onData ($data)
	{
		if ($this->onData !== $this->__hx__default__onData) return call_user_func_array($this->onData, func_get_args());
	}
	protected $__hx__default__onData;

	/**
	 * This method is called upon a request error, with `msg` containing the
	 * error description.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onError = function(msg) { // handle error }`
	 * 
	 * @param string $msg
	 * 
	 * @return void
	 */
	public function onError ($msg)
	{
		if ($this->onError !== $this->__hx__default__onError) return call_user_func_array($this->onError, func_get_args());
	}
	protected $__hx__default__onError;

	/**
	 * This method is called upon a Http status change, with `status` being the
	 * new status.
	 * The intended usage is to bind it to a custom function:
	 * `httpInstance.onStatus = function(status) { // handle status }`
	 * 
	 * @param int $status
	 * 
	 * @return void
	 */
	public function onStatus ($status)
	{
		if ($this->onStatus !== $this->__hx__default__onStatus) return call_user_func_array($this->onStatus, func_get_args());
	}
	protected $__hx__default__onStatus;

	/**
	 * Sends `this` Http request to the Url specified by `this.url`.
	 * If `post` is true, the request is sent as POST request, otherwise it is
	 * sent as GET request.
	 * Depending on the outcome of the request, this method calls the
	 * `onStatus()`, `onError()`, `onData()` or `onBytes()` callback functions.
	 * If `this.url` is null, the result is unspecified.
	 * If `this.url` is an invalid or inaccessible Url, the `onError()` callback
	 * function is called.
	 * [js] If `this.async` is false, the callback functions are called before
	 * this method returns.
	 * 
	 * @param bool $post
	 * 
	 * @return void
	 */
	public function request ($post = null) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:186: characters 3-8
		throw new NotImplementedException(null, null, new _HxAnon_HttpBase1("haxe/http/HttpBase.hx", 186, "haxe.http.HttpBase", "request"));
	}

	/**
	 * Sets the header identified as `name` to value `value`.
	 * If `name` or `value` are null, the result is unspecified.
	 * This method provides a fluent interface.
	 * 
	 * @param string $name
	 * @param string $value
	 * 
	 * @return void
	 */
	public function setHeader ($name, $value) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:86: characters 13-17
		$_g = 0;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:86: characters 17-31
		$_g1 = $this->headers->length;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:86: lines 86-91
		while ($_g < $_g1) {
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:86: characters 13-31
			$i = $_g++;
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:87: lines 87-90
			if (($this->headers->arr[$i] ?? null)->name === $name) {
				#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:88: characters 5-44
				$this->headers->offsetSet($i, new _HxAnon_HttpBase0($name, $value));
				#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:89: characters 5-11
				return;
			}
		}
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:92: characters 3-43
		$_this = $this->headers;
		$_this->arr[$_this->length++] = new _HxAnon_HttpBase0($name, $value);
	}

	/**
	 * Sets the parameter identified as `name` to value `value`.
	 * If `name` or `value` are null, the result is unspecified.
	 * This method provides a fluent interface.
	 * 
	 * @param string $name
	 * @param string $value
	 * 
	 * @return void
	 */
	public function setParameter ($name, $value) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:113: characters 13-17
		$_g = 0;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:113: characters 17-30
		$_g1 = $this->params->length;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:113: lines 113-118
		while ($_g < $_g1) {
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:113: characters 13-30
			$i = $_g++;
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:114: lines 114-117
			if (($this->params->arr[$i] ?? null)->name === $name) {
				#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:115: characters 5-43
				$this->params->offsetSet($i, new _HxAnon_HttpBase0($name, $value));
				#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:116: characters 5-11
				return;
			}
		}
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:119: characters 3-42
		$_this = $this->params;
		$_this->arr[$_this->length++] = new _HxAnon_HttpBase0($name, $value);
	}

	/**
	 * Sets the post data of `this` Http request to `data` bytes.
	 * There can only be one post data per request. Subsequent calls to
	 * this method or to `setPostData()` overwrite the previously set value.
	 * If `data` is null, the post data is considered to be absent.
	 * This method provides a fluent interface.
	 * 
	 * @param Bytes $data
	 * 
	 * @return void
	 */
	public function setPostBytes ($data) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:161: characters 3-19
		$this->postBytes = $data;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:162: characters 3-18
		$this->postData = null;
	}

	/**
	 * Sets the post data of `this` Http request to `data` string.
	 * There can only be one post data per request. Subsequent calls to
	 * this method or to `setPostBytes()` overwrite the previously set value.
	 * If `data` is null, the post data is considered to be absent.
	 * This method provides a fluent interface.
	 * 
	 * @param string $data
	 * 
	 * @return void
	 */
	public function setPostData ($data) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:143: characters 3-18
		$this->postData = $data;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:144: characters 3-19
		$this->postBytes = null;
	}

	/**
	 * @param Bytes $data
	 * 
	 * @return void
	 */
	public function success ($data) {
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:233: characters 3-23
		$this->responseBytes = $data;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:234: characters 3-26
		$this->responseAsString = null;
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:235: lines 235-237
		if ($this->hasOnData()) {
			#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:236: characters 4-24
			$this->onData($this->get_responseData());
		}
		#C:\HaxeToolkit\haxe\std/haxe/http/HttpBase.hx:238: characters 3-25
		$this->onBytes($this->responseBytes);
	}
}

class _HxAnon_HttpBase0 extends HxAnon {
	function __construct($name, $value) {
		$this->name = $name;
		$this->value = $value;
	}
}

class _HxAnon_HttpBase1 extends HxAnon {
	function __construct($fileName, $lineNumber, $className, $methodName) {
		$this->fileName = $fileName;
		$this->lineNumber = $lineNumber;
		$this->className = $className;
		$this->methodName = $methodName;
	}
}

Boot::registerClass(HttpBase::class, 'haxe.http.HttpBase');
Boot::registerGetters('haxe\\http\\HttpBase', [
	'responseData' => true
]);
