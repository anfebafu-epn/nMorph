// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.common.configuration {
	public class DeployEnvironmentEnum : global::haxe.lang.Enum {
		
		protected DeployEnvironmentEnum(int index) : base(index) {
		}
		
		
		public static readonly global::nMorph.framework.common.configuration.DeployEnvironmentEnum DEVELOPMENT = new global::nMorph.framework.common.configuration.DeployEnvironmentEnum_DEVELOPMENT();
		
		public static readonly global::nMorph.framework.common.configuration.DeployEnvironmentEnum TEST = new global::nMorph.framework.common.configuration.DeployEnvironmentEnum_TEST();
		
		public static readonly global::nMorph.framework.common.configuration.DeployEnvironmentEnum PRODUCTION = new global::nMorph.framework.common.configuration.DeployEnvironmentEnum_PRODUCTION();
		
		protected static readonly string[] __hx_constructs = new string[]{"DEVELOPMENT", "TEST", "PRODUCTION"};
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.common.configuration {
	public sealed class DeployEnvironmentEnum_DEVELOPMENT : global::nMorph.framework.common.configuration.DeployEnvironmentEnum {
		
		public DeployEnvironmentEnum_DEVELOPMENT() : base(0) {
		}
		
		
		public override string getTag() {
			return "DEVELOPMENT";
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.common.configuration {
	public sealed class DeployEnvironmentEnum_TEST : global::nMorph.framework.common.configuration.DeployEnvironmentEnum {
		
		public DeployEnvironmentEnum_TEST() : base(1) {
		}
		
		
		public override string getTag() {
			return "TEST";
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.common.configuration {
	public sealed class DeployEnvironmentEnum_PRODUCTION : global::nMorph.framework.common.configuration.DeployEnvironmentEnum {
		
		public DeployEnvironmentEnum_PRODUCTION() : base(2) {
		}
		
		
		public override string getTag() {
			return "PRODUCTION";
		}
		
		
	}
}


