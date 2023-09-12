package nMorph.framework.orm.configuration;
import nMorph.framework.common.exceptions.ExceptionHelper;
import nMorph.framework.common.configuration.DeployEnvironmentEnum;
import nMorph.framework.common.helpers.SerializationHelper;

/**
 * ...
 * @author Smartwork
 */
class Configuration
{
	public static var Data: ConfigurationData;

	public function new()
	{

	}

	public static function ReadConfiguration(ConfigContent: String): Void
	{
		Configuration.Data = SerializationHelper.Unserialize(ConfigContent);
	}

	public static function WriteExampleConfiguration(): String
	{
		var cd = new ConfigurationData();
		cd.DatabaseConnections = new Array<DatabaseConnectionData>();
		//cd.Schemes="";

		

		return SerializationHelper.Serialize(cd);
	}
}
