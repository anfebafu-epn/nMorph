// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.tools {
	public class BulkRun : global::haxe.lang.HxObject {
		
		static BulkRun() {
			global::nMorph.framework.orm.tools.BulkRun.__rtti = "<class path=\"nMorph.framework.orm.tools.BulkRun\" params=\"\">\n\t<queue public=\"1\" get=\"accessor\" set=\"accessor\">\n\t\t<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</queue>\n\t<get_queue set=\"method\" line=\"17\"><f a=\"\"><c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c></f></get_queue>\n\t<set_queue set=\"method\" line=\"22\"><f a=\"value\">\n\t<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\n\t<c path=\"Array\"><c path=\"nMorph.framework.orm.client.QueueItem\"/></c>\n</f></set_queue>\n\t<Execute public=\"1\" set=\"method\" line=\"31\"><f a=\"\"><x path=\"Void\"/></f></Execute>\n\t<new public=\"1\" set=\"method\" line=\"27\"><f a=\"\"><x path=\"Void\"/></f></new>\n\t<haxe_doc>* Clase utilizada para encolar varias llamadas para ejecuci\u00f3n masiva unificada\n * @author Smartwork</haxe_doc>\n\t<meta>\n\t\t<m n=\":directlyUsed\"/>\n\t\t<m n=\":hxGen\"/>\n\t\t<m n=\":keep\"/>\n\t\t<m n=\":rtti\"/>\n\t</meta>\n</class>";
		}
		
		
		public BulkRun(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public BulkRun() {
			global::nMorph.framework.orm.tools.BulkRun.__hx_ctor_nMorph_framework_orm_tools_BulkRun(this);
		}
		
		
		protected static void __hx_ctor_nMorph_framework_orm_tools_BulkRun(global::nMorph.framework.orm.tools.BulkRun __hx_this) {
		}
		
		
		public static string __rtti;
		
		public global::Array<object> queue;
		
		public virtual global::Array<object> get_queue() {
			return this.queue;
		}
		
		
		public virtual global::Array<object> set_queue(global::Array<object> @value) {
			return this.queue = @value;
		}
		
		
		public virtual void Execute() {
			global::nMorph.framework.orm.client.Connector.ExecuteQueue(this.get_queue());
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1575652753:
					{
						if (handleProperties) {
							this.set_queue(((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) ));
							return @value;
						}
						else {
							this.queue = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) );
							return @value;
						}
						
					}
					
					
					default:
					{
						return base.__hx_setField(field, hash, @value, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override object __hx_getField(string field, int hash, bool throwErrors, bool isCheck, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 425603605:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "Execute", 425603605)) );
					}
					
					
					case 82105844:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_queue", 82105844)) );
					}
					
					
					case 563341800:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_queue", 563341800)) );
					}
					
					
					case 1575652753:
					{
						return ( (handleProperties) ? (this.get_queue()) : (this.queue) );
					}
					
					
					default:
					{
						return base.__hx_getField(field, hash, throwErrors, isCheck, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override object __hx_invokeField(string field, int hash, object[] dynargs) {
			unchecked {
				switch (hash) {
					case 425603605:
					{
						this.Execute();
						break;
					}
					
					
					case 82105844:
					{
						return this.set_queue(((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (dynargs[0]) ))) ));
					}
					
					
					case 563341800:
					{
						return this.get_queue();
					}
					
					
					default:
					{
						return base.__hx_invokeField(field, hash, dynargs);
					}
					
				}
				
				return null;
			}
		}
		
		
		public override void __hx_getFields(global::Array<string> baseArr) {
			baseArr.push("queue");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}


