// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.enums {
	public class ValuesTypeEnum : global::haxe.lang.Enum {
		public ValuesTypeEnum() : base(0) { }

		
		protected ValuesTypeEnum(int index) : base(index) {
		}
		
		
		public static readonly global::nMorph.framework.orm.common.enums.ValuesTypeEnum STARTVALUES = new global::nMorph.framework.orm.common.enums.ValuesTypeEnum_STARTVALUES();
		
		public static readonly global::nMorph.framework.orm.common.enums.ValuesTypeEnum ADDITIONALVALUES = new global::nMorph.framework.orm.common.enums.ValuesTypeEnum_ADDITIONALVALUES();
		
		protected static readonly string[] __hx_constructs = new string[]{"STARTVALUES", "ADDITIONALVALUES"};
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.enums {
	public sealed class ValuesTypeEnum_STARTVALUES : global::nMorph.framework.orm.common.enums.ValuesTypeEnum {
		
		public ValuesTypeEnum_STARTVALUES() : base(0) {
		}
		
		
		public override string getTag() {
			return "STARTVALUES";
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.enums {
	public sealed class ValuesTypeEnum_ADDITIONALVALUES : global::nMorph.framework.orm.common.enums.ValuesTypeEnum {
		
		public ValuesTypeEnum_ADDITIONALVALUES() : base(1) {
		}
		
		
		public override string getTag() {
			return "ADDITIONALVALUES";
		}
		
		
	}
}


