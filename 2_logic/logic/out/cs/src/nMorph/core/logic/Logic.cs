// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.core.logic {
	public class Logic : global::haxe.lang.HxObject {
		
		public static void Main(){
			global::cs.Boot.init();
			{
				global::nMorph.core.logic.Logic.main();
				global::sys.thread._Thread.Thread_Impl_.processEvents();
			}
			;
		}
		public Logic(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public Logic() {
			global::nMorph.core.logic.Logic.__hx_ctor_nMorph_core_logic_Logic(this);
		}
		
		
		protected static void __hx_ctor_nMorph_core_logic_Logic(global::nMorph.core.logic.Logic __hx_this) {
		}
		
		
		public static void main() {
			global::Type.getClass<object>(((object) (typeof(global::nMorph.core.logic.category.CategoryLogic)) ));
			global::Type.getClass<object>(((object) (typeof(global::nMorph.core.logic.person.PersonLogic)) ));
			global::Type.getClass<object>(((object) (typeof(global::nMorph.core.logic.task.TaskLogic)) ));
		}
		
		
	}
}


