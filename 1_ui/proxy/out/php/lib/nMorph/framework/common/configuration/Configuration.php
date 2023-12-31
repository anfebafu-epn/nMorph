<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\common\configuration;

use \php\Boot;
use \nMorph\framework\common\helpers\SerializationHelper;

class Configuration {
	/**
	 * @var ConfigurationData
	 */
	static public $Data;

	/**
	 * @param string $ConfigContent
	 * 
	 * @return void
	 */
	public static function ReadConfiguration ($ConfigContent) {
		#5_framework\common\src/nMorph/framework/common/configuration/Configuration.hx:11: characters 3-56
		Configuration::$Data = SerializationHelper::Unserialize($ConfigContent);
	}

	/**
	 * @return string
	 */
	public static function WriteExampleConfiguration () {
		#5_framework\common\src/nMorph/framework/common/configuration/Configuration.hx:17: characters 3-57
		$conf = new ConfigurationData();
		#5_framework\common\src/nMorph/framework/common/configuration/Configuration.hx:20: characters 3-31
		$conf->set_LogFolder("C:\\log\\");
		#5_framework\common\src/nMorph/framework/common/configuration/Configuration.hx:21: characters 3-68
		$conf->set_CurrentDeployEnvironment(DeployEnvironmentEnum::DEVELOPMENT());
		#5_framework\common\src/nMorph/framework/common/configuration/Configuration.hx:27: characters 3-45
		return SerializationHelper::Serialize($conf);
	}
}

Boot::registerClass(Configuration::class, 'nMorph.framework.common.configuration.Configuration');
