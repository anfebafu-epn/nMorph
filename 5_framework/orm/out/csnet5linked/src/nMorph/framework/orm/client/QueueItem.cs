// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.client {
	public class QueueItem : global::haxe.lang.HxObject {
		
		public QueueItem(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public QueueItem() {
			global::nMorph.framework.orm.client.QueueItem.__hx_ctor_nMorph_framework_orm_client_QueueItem(this);
		}
		
		
		protected static void __hx_ctor_nMorph_framework_orm_client_QueueItem(global::nMorph.framework.orm.client.QueueItem __hx_this) {
		}
		
		
		public string SQL;
		
		public global::Array<object> Parameters;
		
		public virtual string set_SQL(string @value) {
			return this.SQL = @value;
		}
		
		
		public virtual string get_SQL() {
			return this.SQL;
		}
		
		
		public virtual global::Array<object> get_Parameters() {
			return this.Parameters;
		}
		
		
		public virtual global::Array<object> set_Parameters(global::Array<object> @value) {
			return this.Parameters = @value;
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1211089610:
					{
						if (handleProperties) {
							this.set_Parameters(((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) ));
							return @value;
						}
						else {
							this.Parameters = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) );
							return @value;
						}
						
					}
					
					
					case 4145646:
					{
						if (handleProperties) {
							this.set_SQL(global::haxe.lang.Runtime.toString(@value));
							return @value;
						}
						else {
							this.SQL = global::haxe.lang.Runtime.toString(@value);
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
					case 1581593479:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_Parameters", 1581593479)) );
					}
					
					
					case 1042631443:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_Parameters", 1042631443)) );
					}
					
					
					case 649333381:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_SQL", 649333381)) );
					}
					
					
					case 431332241:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_SQL", 431332241)) );
					}
					
					
					case 1211089610:
					{
						return ( (handleProperties) ? (this.get_Parameters()) : (this.Parameters) );
					}
					
					
					case 4145646:
					{
						return ( (handleProperties) ? (this.get_SQL()) : (this.SQL) );
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
					case 1581593479:
					{
						return this.set_Parameters(((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (dynargs[0]) ))) ));
					}
					
					
					case 1042631443:
					{
						return this.get_Parameters();
					}
					
					
					case 649333381:
					{
						return this.get_SQL();
					}
					
					
					case 431332241:
					{
						return this.set_SQL(global::haxe.lang.Runtime.toString(dynargs[0]));
					}
					
					
					default:
					{
						return base.__hx_invokeField(field, hash, dynargs);
					}
					
				}
				
			}
		}
		
		
		public override void __hx_getFields(global::Array<string> baseArr) {
			baseArr.push("Parameters");
			baseArr.push("SQL");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}


