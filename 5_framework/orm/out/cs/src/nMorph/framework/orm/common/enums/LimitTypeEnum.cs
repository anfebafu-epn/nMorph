// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.enums {
	public class LimitTypeEnum : global::haxe.lang.Enum {
		
		protected LimitTypeEnum(int index) : base(index) {
		}
		
		
		public static readonly global::nMorph.framework.orm.common.enums.LimitTypeEnum ROWS = new global::nMorph.framework.orm.common.enums.LimitTypeEnum_ROWS();
		
		public static readonly global::nMorph.framework.orm.common.enums.LimitTypeEnum PERCENT = new global::nMorph.framework.orm.common.enums.LimitTypeEnum_PERCENT();
		
		protected static readonly string[] __hx_constructs = new string[]{"ROWS", "PERCENT"};
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.enums {
	public sealed class LimitTypeEnum_ROWS : global::nMorph.framework.orm.common.enums.LimitTypeEnum {
		
		public LimitTypeEnum_ROWS() : base(0) {
		}
		
		
		public override string getTag() {
			return "ROWS";
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.enums {
	public sealed class LimitTypeEnum_PERCENT : global::nMorph.framework.orm.common.enums.LimitTypeEnum {
		
		public LimitTypeEnum_PERCENT() : base(1) {
		}
		
		
		public override string getTag() {
			return "PERCENT";
		}
		
		
	}
}


