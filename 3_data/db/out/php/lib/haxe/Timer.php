<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace haxe;

use \php\Boot;
use \php\_Boot\HxClosure;

/**
 * The `Timer` class allows you to create asynchronous timers on platforms that
 * support events.
 * The intended usage is to create an instance of the `Timer` class with a given
 * interval, set its `run()` method to a custom function to be invoked and
 * eventually call `stop()` to stop the `Timer`.
 * Note that a running `Timer` may or may not prevent the program to exit
 * automatically when `main()` returns.
 * It is also possible to extend this class and override its `run()` method in
 * the child class.
 */
class Timer {
	/**
	 * @var MainEvent
	 */
	public $event;
	/**
	 * @var \Closure
	 * This method is invoked repeatedly on `this` Timer.
	 * It can be overridden in a subclass, or rebound directly to a custom
	 * function:
	 * ```haxe
	 * var timer = new haxe.Timer(1000); // 1000ms delay
	 * timer.run = function() { ... }
	 * ```
	 * Once bound, it can still be rebound to different functions until `this`
	 * Timer is stopped through a call to `this.stop`.
	 */
	public $run;

	/**
	 * Invokes `f` after `time_ms` milliseconds.
	 * This is a convenience function for creating a new Timer instance with
	 * `time_ms` as argument, binding its `run()` method to `f` and then stopping
	 * `this` Timer upon the first invocation.
	 * If `f` is `null`, the result is unspecified.
	 * 
	 * @param \Closure $f
	 * @param int $time_ms
	 * 
	 * @return Timer
	 */
	public static function delay ($f, $time_ms) {
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:141: characters 3-35
		$t = new Timer($time_ms);
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:142: lines 142-145
		$t->run = function () use (&$f, &$t) {
			#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:143: characters 4-12
			$t->stop();
			#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:144: characters 4-7
			$f();
		};
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:146: characters 3-11
		return $t;
	}

	/**
	 * Measures the time it takes to execute `f`, in seconds with fractions.
	 * This is a convenience function for calculating the difference between
	 * `Timer.stamp()` before and after the invocation of `f`.
	 * The difference is passed as argument to `Log.trace()`, with `"s"` appended
	 * to denote the unit. The optional `pos` argument is passed through.
	 * If `f` is `null`, the result is unspecified.
	 * 
	 * @param \Closure $f
	 * @param object $pos
	 * 
	 * @return mixed
	 */
	public static function measure ($f, $pos = null) {
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:161: characters 3-20
		$t0 = \microtime(true);
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:162: characters 3-15
		$r = $f();
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:163: characters 3-39
		(Log::$trace)((\microtime(true) - $t0) . "s", $pos);
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:164: characters 3-11
		return $r;
	}

	/**
	 * Returns a timestamp, in seconds with fractions.
	 * The value itself might differ depending on platforms, only differences
	 * between two values make sense.
	 * 
	 * @return float
	 */
	public static function stamp () {
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:188: characters 3-20
		return \microtime(true);
	}

	/**
	 * Creates a new timer that will run every `time_ms` milliseconds.
	 * After creating the Timer instance, it calls `this.run` repeatedly,
	 * with delays of `time_ms` milliseconds, until `this.stop` is called.
	 * The first invocation occurs after `time_ms` milliseconds, not
	 * immediately.
	 * The accuracy of this may be platform-dependent.
	 * 
	 * @param int $time_ms
	 * 
	 * @return void
	 */
	public function __construct ($time_ms) {
		if (!$this->__hx__default__run) {
			$this->__hx__default__run = new HxClosure($this, 'run');
			if ($this->run === null) $this->run = $this->__hx__default__run;
		}
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:65: lines 65-85
		$_gthis = $this;
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:78: characters 3-27
		$dt = $time_ms / 1000;
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:79: lines 79-82
		$this->event = MainLoop::add(function () use (&$dt, &$_gthis) {
			#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:80: characters 20-39
			$_gthis->event->nextRun += $dt;
			#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:81: characters 4-9
			$_gthis->run();
		});
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:83: characters 3-18
		$this->event->delay($dt);
	}

	/**
	 * This method is invoked repeatedly on `this` Timer.
	 * It can be overridden in a subclass, or rebound directly to a custom
	 * function:
	 * ```haxe
	 * var timer = new haxe.Timer(1000); // 1000ms delay
	 * timer.run = function() { ... }
	 * ```
	 * Once bound, it can still be rebound to different functions until `this`
	 * Timer is stopped through a call to `this.stop`.
	 * 
	 * @return void
	 */
	public function run ()
	{
		if ($this->run !== $this->__hx__default__run) return call_user_func_array($this->run, func_get_args());
	}
	protected $__hx__default__run;

	/**
	 * Stops `this` Timer.
	 * After calling this method, no additional invocations of `this.run`
	 * will occur.
	 * It is not possible to restart `this` Timer once stopped.
	 * 
	 * @return void
	 */
	public function stop () {
		#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:108: lines 108-111
		if ($this->event !== null) {
			#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:109: characters 4-16
			$this->event->stop();
			#C:\HaxeToolkit\haxe\std/haxe/Timer.hx:110: characters 4-16
			$this->event = null;
		}
	}
}

Boot::registerClass(Timer::class, 'haxe.Timer');
