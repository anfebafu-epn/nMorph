// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.io {
	public class BytesInput : global::haxe.io.Input {
		
		public BytesInput(global::haxe.lang.EmptyObject empty) : base(global::haxe.lang.EmptyObject.EMPTY) {
		}
		
		
		public BytesInput(global::haxe.io.Bytes b, global::haxe.lang.Null<int> pos, global::haxe.lang.Null<int> len) {
			global::haxe.io.BytesInput.__hx_ctor_haxe_io_BytesInput(this, b, pos, len);
		}
		
		
		protected static void __hx_ctor_haxe_io_BytesInput(global::haxe.io.BytesInput __hx_this, global::haxe.io.Bytes b, global::haxe.lang.Null<int> pos, global::haxe.lang.Null<int> len) {
			if ( ! (pos.hasValue) ) {
				pos = new global::haxe.lang.Null<int>(0, true);
			}
			
			if ( ! (len.hasValue) ) {
				len = new global::haxe.lang.Null<int>(( b.length - (pos).@value ), true);
			}
			
			if (( ( ( (pos).@value < 0 ) || ( (len).@value < 0 ) ) || ( ( (pos).@value + (len).@value ) > b.length ) )) {
				throw ((global::System.Exception) (global::haxe.Exception.thrown(global::haxe.io.Error.OutsideBounds)) );
			}
			
			__hx_this.b = b.b;
			__hx_this.pos = (pos).@value;
			__hx_this.len = (len).@value;
			__hx_this.totlen = (len).@value;
		}
		
		
		public byte[] b;
		
		public int pos;
		
		public int len;
		
		public int totlen;
		
		
		
		
		
		public int get_position() {
			return this.pos;
		}
		
		
		public int get_length() {
			return this.totlen;
		}
		
		
		public virtual int set_position(int p) {
			if (( p < 0 )) {
				p = 0;
			}
			else if (( p > this.totlen )) {
				p = this.totlen;
			}
			
			this.len = ( this.totlen - p );
			return this.pos = p;
		}
		
		
		public override int readByte() {
			if (( this.len == 0 )) {
				throw ((global::System.Exception) (global::haxe.Exception.thrown(new global::haxe.io.Eof())) );
			}
			
			this.len--;
			return ((int) (this.b[this.pos++]) );
		}
		
		
		public override int readBytes(global::haxe.io.Bytes buf, int pos, int len) {
			if (( ( ( pos < 0 ) || ( len < 0 ) ) || ( ( pos + len ) > buf.length ) )) {
				throw ((global::System.Exception) (global::haxe.Exception.thrown(global::haxe.io.Error.OutsideBounds)) );
			}
			
			int avail = this.len;
			if (( len > avail )) {
				len = avail;
			}
			
			if (( len == 0 )) {
				throw ((global::System.Exception) (global::haxe.Exception.thrown(new global::haxe.io.Eof())) );
			}
			
			global::System.Array.Copy(((global::System.Array) (this.b) ), ((int) (this.pos) ), ((global::System.Array) (buf.b) ), ((int) (pos) ), ((int) (len) ));
			this.pos += len;
			this.len -= len;
			return len;
		}
		
		
		public override double __hx_setField_f(string field, int hash, double @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1257939113:
					{
						this.set_position(((int) (@value) ));
						return @value;
					}
					
					
					case 400509660:
					{
						this.totlen = ((int) (@value) );
						return @value;
					}
					
					
					case 5393365:
					{
						this.len = ((int) (@value) );
						return @value;
					}
					
					
					case 5594516:
					{
						this.pos = ((int) (@value) );
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
					case 1257939113:
					{
						this.set_position(((int) (global::haxe.lang.Runtime.toInt(@value)) ));
						return @value;
					}
					
					
					case 400509660:
					{
						this.totlen = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						return @value;
					}
					
					
					case 5393365:
					{
						this.len = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						return @value;
					}
					
					
					case 5594516:
					{
						this.pos = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						return @value;
					}
					
					
					case 98:
					{
						this.b = ((byte[]) (@value) );
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
					case 243225909:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "readBytes", 243225909)) );
					}
					
					
					case 1763375486:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "readByte", 1763375486)) );
					}
					
					
					case 353204262:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_position", 353204262)) );
					}
					
					
					case 261031087:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_length", 261031087)) );
					}
					
					
					case 1332402:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_position", 1332402)) );
					}
					
					
					case 520590566:
					{
						return this.get_length();
					}
					
					
					case 1257939113:
					{
						return this.get_position();
					}
					
					
					case 400509660:
					{
						return this.totlen;
					}
					
					
					case 5393365:
					{
						return this.len;
					}
					
					
					case 5594516:
					{
						return this.pos;
					}
					
					
					case 98:
					{
						return this.b;
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
					case 520590566:
					{
						return ((double) (this.get_length()) );
					}
					
					
					case 1257939113:
					{
						return ((double) (this.get_position()) );
					}
					
					
					case 400509660:
					{
						return ((double) (this.totlen) );
					}
					
					
					case 5393365:
					{
						return ((double) (this.len) );
					}
					
					
					case 5594516:
					{
						return ((double) (this.pos) );
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
					case 1763375486:
					case 243225909:
					{
						return global::haxe.lang.Runtime.slowCallField(this, field, dynargs);
					}
					
					
					case 353204262:
					{
						return this.set_position(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 261031087:
					{
						return this.get_length();
					}
					
					
					case 1332402:
					{
						return this.get_position();
					}
					
					
					default:
					{
						return base.__hx_invokeField(field, hash, dynargs);
					}
					
				}
				
			}
		}
		
		
		public override void __hx_getFields(global::Array<string> baseArr) {
			baseArr.push("length");
			baseArr.push("position");
			baseArr.push("totlen");
			baseArr.push("len");
			baseArr.push("pos");
			baseArr.push("b");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}


