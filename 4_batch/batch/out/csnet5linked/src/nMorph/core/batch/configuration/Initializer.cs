// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.core.batch.configuration {
	public class Initializer : global::haxe.lang.HxObject {
		
		public Initializer(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public Initializer() {
			global::nMorph.core.batch.configuration.Initializer.__hx_ctor_nMorph_core_batch_configuration_Initializer(this);
		}
		
		
		protected static void __hx_ctor_nMorph_core_batch_configuration_Initializer(global::nMorph.core.batch.configuration.Initializer __hx_this) {
		}
		
		
		public static void Application_Start(string ConfigPath) {
			if (global::sys.FileSystem.exists(global::haxe.lang.Runtime.concat(ConfigPath, "nMorph.framework.common.configuration.Configuration.config"))) {
				string nMorph_framework_common_configuration_Configuration_Content = global::sys.io.File.getContent(global::haxe.lang.Runtime.concat(ConfigPath, "nMorph.framework.common.configuration.Configuration.config"));
				global::nMorph.framework.common.configuration.Configuration.ReadConfiguration(nMorph_framework_common_configuration_Configuration_Content);
			}
			
			if (global::sys.FileSystem.exists(global::haxe.lang.Runtime.concat(ConfigPath, "nMorph.framework.orm.configuration.Configuration.config"))) {
				string nMorph_framework_orm_configuration_Configuration_Content = global::sys.io.File.getContent(global::haxe.lang.Runtime.concat(ConfigPath, "nMorph.framework.orm.configuration.Configuration.config"));
				global::nMorph.framework.orm.configuration.Configuration.ReadConfiguration(nMorph_framework_orm_configuration_Configuration_Content);
			}
			
		}
		
		
	}
}


