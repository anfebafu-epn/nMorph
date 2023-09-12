<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm\client;

use \php\Boot;
use \nMorph\framework\orm\common\enums\DBTypeEnum;
use \nMorph\framework\orm\common\enums\ParameterDirectionEnum;

class QueryParameter {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.framework.orm.client.QueryParameter\" params=\"\">\x0A\x09<SET public=\"1\" set=\"method\" line=\"14\" static=\"1\"><f a=\"DataType:Value\">\x0A\x09<e path=\"nMorph.framework.orm.common.enums.DBTypeEnum\"/>\x0A\x09<d/>\x0A\x09<c path=\"nMorph.framework.orm.client.QueryParameter\"/>\x0A</f></SET>\x0A\x09<DataType public=\"1\" get=\"accessor\" set=\"accessor\">\x0A\x09\x09<e path=\"nMorph.framework.orm.common.enums.DBTypeEnum\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</DataType>\x0A\x09<ParameterDirection public=\"1\" get=\"accessor\" set=\"accessor\">\x0A\x09\x09<e path=\"nMorph.framework.orm.common.enums.ParameterDirectionEnum\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ParameterDirection>\x0A\x09<ParameterName public=\"1\" get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ParameterName>\x0A\x09<Value public=\"1\" get=\"accessor\" set=\"accessor\">\x0A\x09\x09<d/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Value>\x0A\x09<get_DataType set=\"method\" line=\"28\"><f a=\"\"><e path=\"nMorph.framework.orm.common.enums.DBTypeEnum\"/></f></get_DataType>\x0A\x09<set_DataType set=\"method\" line=\"33\"><f a=\"value\">\x0A\x09<e path=\"nMorph.framework.orm.common.enums.DBTypeEnum\"/>\x0A\x09<e path=\"nMorph.framework.orm.common.enums.DBTypeEnum\"/>\x0A</f></set_DataType>\x0A\x09<set_ParameterDirection set=\"method\" line=\"38\"><f a=\"value\">\x0A\x09<e path=\"nMorph.framework.orm.common.enums.ParameterDirectionEnum\"/>\x0A\x09<e path=\"nMorph.framework.orm.common.enums.ParameterDirectionEnum\"/>\x0A</f></set_ParameterDirection>\x0A\x09<get_ParameterDirection set=\"method\" line=\"43\"><f a=\"\"><e path=\"nMorph.framework.orm.common.enums.ParameterDirectionEnum\"/></f></get_ParameterDirection>\x0A\x09<set_ParameterName set=\"method\" line=\"48\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_ParameterName>\x0A\x09<get_ParameterName set=\"method\" line=\"53\"><f a=\"\"><c path=\"String\"/></f></get_ParameterName>\x0A\x09<get_Value set=\"method\" line=\"58\"><f a=\"\"><d/></f></get_Value>\x0A\x09<set_Value set=\"method\" line=\"63\"><f a=\"value\">\x0A\x09<d/>\x0A\x09<unknown/>\x0A</f></set_Value>\x0A\x09<new public=\"1\" set=\"method\" line=\"10\"><f a=\"\"><x path=\"Void\"/></f></new>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @var DBTypeEnum
	 */
	public $DataType;
	/**
	 * @var ParameterDirectionEnum
	 */
	public $ParameterDirection;
	/**
	 * @var string
	 */
	public $ParameterName;
	/**
	 * @var mixed
	 */
	public $Value;

	/**
	 * @param DBTypeEnum $DataType
	 * @param mixed $Value
	 * 
	 * @return QueryParameter
	 */
	public static function SET ($DataType, $Value) {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:15: characters 3-33
		$p = new QueryParameter();
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:16: characters 3-18
		$p->set_Value($Value);
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:17: characters 3-24
		$p->set_DataType($DataType);
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:18: characters 3-54
		$p->set_ParameterDirection(ParameterDirectionEnum::INPUT());
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:19: characters 3-11
		return $p;
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return DBTypeEnum
	 */
	public function get_DataType () {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:29: characters 3-18
		return $this->DataType;
	}

	/**
	 * @return ParameterDirectionEnum
	 */
	public function get_ParameterDirection () {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:44: characters 3-28
		return $this->ParameterDirection;
	}

	/**
	 * @return string
	 */
	public function get_ParameterName () {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:54: characters 3-23
		return $this->ParameterName;
	}

	/**
	 * @return mixed
	 */
	public function get_Value () {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:59: characters 3-15
		return $this->Value;
	}

	/**
	 * @param DBTypeEnum $value
	 * 
	 * @return DBTypeEnum
	 */
	public function set_DataType ($value) {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:34: characters 3-31
		return $this->DataType = $value;
	}

	/**
	 * @param ParameterDirectionEnum $value
	 * 
	 * @return ParameterDirectionEnum
	 */
	public function set_ParameterDirection ($value) {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:39: characters 3-41
		return $this->ParameterDirection = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_ParameterName ($value) {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:49: characters 3-36
		return $this->ParameterName = $value;
	}

	/**
	 * @param mixed $value
	 * 
	 * @return mixed
	 */
	public function set_Value ($value) {
		#5_framework\orm\src/nMorph/framework/orm/client/QueryParameter.hx:64: characters 3-28
		return $this->Value = $value;
	}
}

Boot::registerClass(QueryParameter::class, 'nMorph.framework.orm.client.QueryParameter');
Boot::registerGetters('nMorph\\framework\\orm\\client\\QueryParameter', [
	'Value' => true,
	'ParameterName' => true,
	'ParameterDirection' => true,
	'DataType' => true
]);
Boot::registerSetters('nMorph\\framework\\orm\\client\\QueryParameter', [
	'Value' => true,
	'ParameterName' => true,
	'ParameterDirection' => true,
	'DataType' => true
]);
