<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\batch\configuration;

use \nMorph\framework\orm\configuration\Configuration as ConfigurationConfiguration;
use \php\Boot;
use \nMorph\framework\common\configuration\Configuration;
use \sys\io\File;

/**
 * ...
 * @author Smartwork
 */
class Initializer {
	/**
	 * @param string $ConfigPath
	 * 
	 * @return void
	 */
	public static function Application_Start ($ConfigPath) {
		#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:16: characters 7-99
		$path = ($ConfigPath??'null') . "nMorph.framework.common.configuration.Configuration.config";
		\clearstatcache(true, $path);
		#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:16: lines 16-20
		if (\file_exists($path)) {
			#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:18: characters 4-161
			$nMorph_framework_common_configuration_Configuration_Content = File::getContent(($ConfigPath??'null') . "nMorph.framework.common.configuration.Configuration.config");
			#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:19: characters 4-134
			Configuration::ReadConfiguration($nMorph_framework_common_configuration_Configuration_Content);
		}
		#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:22: characters 7-96
		$path = ($ConfigPath??'null') . "nMorph.framework.orm.configuration.Configuration.config";
		\clearstatcache(true, $path);
		#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:22: lines 22-26
		if (\file_exists($path)) {
			#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:24: characters 4-155
			$nMorph_framework_orm_configuration_Configuration_Content = File::getContent(($ConfigPath??'null') . "nMorph.framework.orm.configuration.Configuration.config");
			#4_batch\batch\src/nMorph/core/batch/configuration/Initializer.hx:25: characters 4-128
			ConfigurationConfiguration::ReadConfiguration($nMorph_framework_orm_configuration_Configuration_Content);
		}
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(Initializer::class, 'nMorph.core.batch.configuration.Initializer');
