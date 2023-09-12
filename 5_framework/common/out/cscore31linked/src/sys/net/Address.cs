// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace sys.net {
	public class Address : global::haxe.lang.HxObject {
		
		public Address(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public Address() {
			global::sys.net.Address.__hx_ctor_sys_net_Address(this);
		}
		
		
		protected static void __hx_ctor_sys_net_Address(global::sys.net.Address __hx_this) {
			__hx_this.host = 0;
			__hx_this.port = 0;
		}
		
		
		public int host;
		
		public int port;
		
		public virtual global::sys.net.Host getHost() {
			global::sys.net.Host h = new global::sys.net.Host(((string) ("127.0.0.1") ));
			h.ip = this.host;
			return h;
		}
		
		
		public virtual int compare(global::sys.net.Address a) {
			int dh = ( a.host - this.host );
			if (( dh != 0 )) {
				return dh;
			}
			
			int dp = ( a.port - this.port );
			if (( dp != 0 )) {
				return dp;
			}
			
			return 0;
		}
		
		
		public virtual global::sys.net.Address clone() {
			global::sys.net.Address c = new global::sys.net.Address();
			c.host = this.host;
			c.port = this.port;
			return c;
		}
		
		
		public override double __hx_setField_f(string field, int hash, double @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1247576961:
					{
						this.port = ((int) (@value) );
						return @value;
					}
					
					
					case 1158860648:
					{
						this.host = ((int) (@value) );
						return @value;
					}
					
					
					default:
					{
						return base.__hx_setField_f(field, hash, @value, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1247576961:
					{
						this.port = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						return @value;
					}
					
					
					case 1158860648:
					{
						this.host = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						return @value;
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
					case 1214452573:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "clone", 1214452573)) );
					}
					
					
					case 57219237:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "compare", 57219237)) );
					}
					
					
					case 395673374:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getHost", 395673374)) );
					}
					
					
					case 1247576961:
					{
						return this.port;
					}
					
					
					case 1158860648:
					{
						return this.host;
					}
					
					
					default:
					{
						return base.__hx_getField(field, hash, throwErrors, isCheck, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override double __hx_getField_f(string field, int hash, bool throwErrors, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1247576961:
					{
						return ((double) (this.port) );
					}
					
					
					case 1158860648:
					{
						return ((double) (this.host) );
					}
					
					
					default:
					{
						return base.__hx_getField_f(field, hash, throwErrors, handleProperties);
					}
					
				}
				
			}
		}
		
		
		public override object __hx_invokeField(string field, int hash, object[] dynargs) {
			unchecked {
				switch (hash) {
					case 1214452573:
					{
						return this.clone();
					}
					
					
					case 57219237:
					{
						return this.compare(((global::sys.net.Address) (dynargs[0]) ));
					}
					
					
					case 395673374:
					{
						return this.getHost();
					}
					
					
					default:
					{
						return base.__hx_invokeField(field, hash, dynargs);
					}
					
				}
				
			}
		}
		
		
		public override void __hx_getFields(global::Array<string> baseArr) {
			baseArr.push("port");
			baseArr.push("host");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}


