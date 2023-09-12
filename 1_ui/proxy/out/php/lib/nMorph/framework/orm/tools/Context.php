<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\tools;

use \nMorph\framework\orm\client\ModelObject;
use \php\Boot;
use \nMorph\framework\orm\client\QueueItem;
use \nMorph\framework\orm\client\Connector;
use \nMorph\framework\orm\common\enums\ObjectEditTypeEnum;

class Context {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.tools.Context\" params=\"\">\x0A\x09<ExecuteQueue public=\"1\" set=\"method\" line=\"66\" static=\"1\"><f a=\"queue\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A\x09<x path=\"Void\"/>\x0A</f></ExecuteQueue>\x0A\x09<Queue public=\"1\" get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Queue>\x0A\x09<Objects public=\"1\" get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.ModelObject\"/></c>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Objects>\x0A\x09<get_Queue set=\"method\" line=\"15\"><f a=\"\"><c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c></f></get_Queue>\x0A\x09<set_Queue set=\"method\" line=\"20\"><f a=\"value\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\x0A</f></set_Queue>\x0A\x09<get_Objects set=\"method\" line=\"25\"><f a=\"\"><c path=\"Array\"><c path=\"nMorph.framework.orm.client.ModelObject\"/></c></f></get_Objects>\x0A\x09<set_Objects set=\"method\" line=\"30\"><f a=\"value\">\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.ModelObject\"/></c>\x0A\x09<c path=\"Array\"><c path=\"nMorph.framework.orm.client.ModelObject\"/></c>\x0A</f></set_Objects>\x0A\x09<Attach public=\"1\" set=\"method\" line=\"41\"><f a=\"obj\">\x0A\x09<c path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></Attach>\x0A\x09<Save public=\"1\" set=\"method\" line=\"46\"><f a=\"\"><x path=\"Void\"/></f></Save>\x0A\x09<new public=\"1\" set=\"method\" line=\"35\"><f a=\"\"><x path=\"Void\"/></f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":keep\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var ModelObject[]|\Array_hx
	 */
	public $Objects;
	/**
	 * @var QueueItem[]|\Array_hx
	 */
	public $Queue;

	/**
	 * @param QueueItem[]|\Array_hx $queue
	 * 
	 * @return void
	 */
	public static function ExecuteQueue ($queue) {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:67: characters 3-32
		Connector::ExecuteQueue($queue);
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:36: characters 3-31
		$this->set_Queue(new \Array_hx());
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:37: characters 3-35
		$this->set_Objects(new \Array_hx());
	}

	/**
	 * @param ModelObject $obj
	 * 
	 * @return void
	 */
	public function Attach ($obj) {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:42: characters 3-20
		$_this = $this->get_Objects();
		$_this->arr[$_this->length++] = $obj;
	}

	/**
	 * @return void
	 */
	public function Save () {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:49: lines 49-53
		$_g = 0;
		$_g1 = $this->get_Objects();
		while ($_g < $_g1->length) {
			#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:49: characters 8-11
			$obj = ($_g1->arr[$_g] ?? null);
			#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:49: lines 49-53
			++$_g;
			#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:51: lines 51-52
			if ($obj->get_ObjectEditType() !== ObjectEditTypeEnum::NOCHANGE()) {
				#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:52: characters 5-28
				$this->set_Queue($obj->Save($this->get_Queue()));
			}
		}
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:56: characters 3-32
		Connector::ExecuteQueue($this->get_Queue());
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:59: lines 59-62
		$_g = 0;
		$_g1 = $this->get_Objects();
		while ($_g < $_g1->length) {
			#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:59: characters 8-11
			$obj = ($_g1->arr[$_g] ?? null);
			#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:59: lines 59-62
			++$_g;
			#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:61: characters 4-15
			$obj->Clear();
		}
	}

	/**
	 * @return ModelObject[]|\Array_hx
	 */
	public function get_Objects () {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:26: characters 3-17
		return $this->Objects;
	}

	/**
	 * @return QueueItem[]|\Array_hx
	 */
	public function get_Queue () {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:16: characters 3-15
		return $this->Queue;
	}

	/**
	 * @param ModelObject[]|\Array_hx $value
	 * 
	 * @return ModelObject[]|\Array_hx
	 */
	public function set_Objects ($value) {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:31: characters 3-30
		return $this->Objects = $value;
	}

	/**
	 * @param QueueItem[]|\Array_hx $value
	 * 
	 * @return QueueItem[]|\Array_hx
	 */
	public function set_Queue ($value) {
		#5_framework\orm\src/nMorph/framework/orm/tools/Context.hx:21: characters 3-28
		return $this->Queue = $value;
	}
}

Boot::registerClass(Context::class, 'nMorph.framework.orm.tools.Context');
Boot::registerGetters('nMorph\\framework\\orm\\tools\\Context', [
	'Objects' => true,
	'Queue' => true
]);
Boot::registerSetters('nMorph\\framework\\orm\\tools\\Context', [
	'Objects' => true,
	'Queue' => true
]);
