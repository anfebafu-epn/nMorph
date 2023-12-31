// Generated by Haxe 4.2.1+bf9ff69

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.io {
	public class Bytes : global::haxe.lang.HxObject {
		
		public Bytes() {
		}
		
		public Bytes(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public Bytes(int length, byte[] b) {
			#line 34 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			global::haxe.io.Bytes.__hx_ctor_haxe_io_Bytes(this, length, b);
		}
		#line default
		
		protected static void __hx_ctor_haxe_io_Bytes(global::haxe.io.Bytes __hx_this, int length, byte[] b) {
			#line 35 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			__hx_this.length = length;
			__hx_this.b = b;
		}
		#line default
		
		public static global::haxe.io.Bytes alloc(int length) {
			#line 562 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return new global::haxe.io.Bytes(((int) (length) ), ((byte[]) (new byte[length]) ));
		}
		#line default
		
		public static global::haxe.io.Bytes ofString(string s, global::haxe.io.Encoding encoding) {
			unchecked {
				#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				byte[] b = null;
				#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				if (( encoding == null )) {
					#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					b = global::System.Text.Encoding.UTF8.GetBytes(((string) (s) ));
				}
				else {
					#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					switch (encoding._hx_index) {
						case 0:
						{
							#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
							b = global::System.Text.Encoding.UTF8.GetBytes(((string) (s) ));
							#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
							break;
						}
						
						
						case 1:
						{
							#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
							b = global::System.Text.Encoding.Unicode.GetBytes(((string) (s) ));
							#line 595 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
							break;
						}
						
						
					}
					
				}
				
				#line 601 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return new global::haxe.io.Bytes(((int) (( b as global::System.Array ).Length) ), ((byte[]) (b) ));
			}
			#line default
		}
		
		
		public static global::haxe.io.Bytes ofData(byte[] b) {
			#line 662 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return new global::haxe.io.Bytes(((int) (( b as global::System.Array ).Length) ), ((byte[]) (b) ));
		}
		#line default
		
		public static global::haxe.io.Bytes ofHex(string s) {
			unchecked {
				#line 674 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int len = s.Length;
				if (( (( len & 1 )) != 0 )) {
					#line 676 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					throw ((global::System.Exception) (global::haxe.Exception.thrown("Not a hex string (odd number of digits)")) );
				}
				
				#line 677 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				global::haxe.io.Bytes ret = global::haxe.io.Bytes.alloc(( len >> 1 ));
				{
					#line 678 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int _g = 0;
					#line 678 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int _g1 = ret.length;
					#line 678 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					while (( _g < _g1 )) {
						#line 678 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						int i = _g++;
						int index = ( i * 2 );
						int high = ( (( ((uint) (index) ) < s.Length )) ? (((int) (s[index]) )) : (-1) );
						#line 680 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						int index1 = ( ( i * 2 ) + 1 );
						#line 680 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						int low = ( (( ((uint) (index1) ) < s.Length )) ? (((int) (s[index1]) )) : (-1) );
						high = ( (( high & 15 )) + ( (( (( high & 64 )) >> 6 )) * 9 ) );
						#line 682 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						low = ( (( low & 15 )) + ( (( (( low & 64 )) >> 6 )) * 9 ) );
						ret.b[i] = ((byte) (( (( ( high << 4 ) | low )) & 255 )) );
					}
					
				}
				
				#line 686 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return ret;
			}
			#line default
		}
		
		
		public static int fastGet(byte[] b, int pos) {
			#line 704 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return ((int) (b[pos]) );
		}
		#line default
		
		public int length;
		
		public byte[] b;
		
		public int @get(int pos) {
			#line 57 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return ((int) (this.b[pos]) );
		}
		#line default
		
		public void @set(int pos, int v) {
			#line 74 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			this.b[pos] = ((byte) (v) );
		}
		#line default
		
		public virtual void blit(int pos, global::haxe.io.Bytes src, int srcpos, int len) {
			#line 92 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			if (( ( ( ( ( pos < 0 ) || ( srcpos < 0 ) ) || ( len < 0 ) ) || ( ( pos + len ) > this.length ) ) || ( ( srcpos + len ) > src.length ) )) {
				#line 93 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				throw ((global::System.Exception) (global::haxe.Exception.thrown(global::haxe.io.Error.OutsideBounds)) );
			}
			
			#line 107 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			global::System.Array.Copy(((global::System.Array) (src.b) ), ((int) (srcpos) ), ((global::System.Array) (this.b) ), ((int) (pos) ), ((int) (len) ));
		}
		#line default
		
		public virtual void fill(int pos, int len, int @value) {
			#line 146 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			int _g = 0;
			#line 146 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			int _g1 = len;
			#line 146 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			while (( _g < _g1 )) {
				#line 146 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int i = _g++;
				this.b[pos++] = ((byte) (@value) );
			}
			
		}
		#line default
		
		public virtual global::haxe.io.Bytes sub(int pos, int len) {
			#line 157 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			if (( ( ( pos < 0 ) || ( len < 0 ) ) || ( ( pos + len ) > this.length ) )) {
				#line 158 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				throw ((global::System.Exception) (global::haxe.Exception.thrown(global::haxe.io.Error.OutsideBounds)) );
			}
			
			#line 172 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			byte[] newarr = new byte[len];
			global::System.Array.Copy(((global::System.Array) (this.b) ), ((int) (pos) ), ((global::System.Array) (newarr) ), ((int) (0) ), ((int) (len) ));
			#line 174 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return new global::haxe.io.Bytes(((int) (len) ), ((byte[]) (newarr) ));
		}
		#line default
		
		public virtual int compare(global::haxe.io.Bytes other) {
			#line 228 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			byte[] b1 = this.b;
			byte[] b2 = other.b;
			#line 230 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			int len = ( (( this.length < other.length )) ? (this.length) : (other.length) );
			{
				#line 231 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int _g = 0;
				#line 231 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int _g1 = len;
				#line 231 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				while (( _g < _g1 )) {
					#line 231 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int i = _g++;
					if (( b1[i] != b2[i] )) {
						#line 233 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ( b1[i] - b2[i] );
					}
					
				}
				
			}
			
			#line 234 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return ( this.length - other.length );
		}
		#line default
		
		public virtual double getDouble(int pos) {
			unchecked {
				#line 257 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int pos1 = ( pos + 4 );
				#line 257 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return global::haxe.io.FPHelper.i64ToDouble(( ( ( ((int) (this.b[pos]) ) | ( ((int) (this.b[( pos + 1 )]) ) << 8 ) ) | ( ((int) (this.b[( pos + 2 )]) ) << 16 ) ) | ( ((int) (this.b[( pos + 3 )]) ) << 24 ) ), ( ( ( ((int) (this.b[pos1]) ) | ( ((int) (this.b[( pos1 + 1 )]) ) << 8 ) ) | ( ((int) (this.b[( pos1 + 2 )]) ) << 16 ) ) | ( ((int) (this.b[( pos1 + 3 )]) ) << 24 ) ));
			}
			#line default
		}
		
		
		public virtual double getFloat(int pos) {
			unchecked {
				#line 280 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return global::haxe.io.FPHelper.i32ToFloat(( ( ( ((int) (this.b[pos]) ) | ( ((int) (this.b[( pos + 1 )]) ) << 8 ) ) | ( ((int) (this.b[( pos + 2 )]) ) << 16 ) ) | ( ((int) (this.b[( pos + 3 )]) ) << 24 ) ));
			}
			#line default
		}
		
		
		public virtual void setDouble(int pos, double v) {
			unchecked {
				#line 305 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				long i = global::haxe.io.FPHelper.doubleToI64(v);
				{
					#line 306 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int v1 = ((int) (((long) (i) )) );
					#line 306 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[pos] = ((byte) (v1) );
					#line 306 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos + 1 )] = ((byte) (( v1 >> 8 )) );
					#line 306 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos + 2 )] = ((byte) (( v1 >> 16 )) );
					#line 306 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos + 3 )] = ((byte) (((int) (( ((uint) (v1) ) >> 24 )) )) );
				}
				
				#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				{
					#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int pos1 = ( pos + 4 );
					#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int v2 = ((int) (( ((long) (i) ) >> 32 )) );
					#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[pos1] = ((byte) (v2) );
					#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos1 + 1 )] = ((byte) (( v2 >> 8 )) );
					#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos1 + 2 )] = ((byte) (( v2 >> 16 )) );
					#line 307 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos1 + 3 )] = ((byte) (((int) (( ((uint) (v2) ) >> 24 )) )) );
				}
				
			}
			#line default
		}
		
		
		public virtual void setFloat(int pos, double v) {
			unchecked {
				#line 332 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int v1 = global::haxe.io.FPHelper.floatToI32(v);
				#line 332 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[pos] = ((byte) (v1) );
				#line 332 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[( pos + 1 )] = ((byte) (( v1 >> 8 )) );
				#line 332 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[( pos + 2 )] = ((byte) (( v1 >> 16 )) );
				#line 332 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[( pos + 3 )] = ((byte) (((int) (( ((uint) (v1) ) >> 24 )) )) );
			}
			#line default
		}
		
		
		public int getUInt16(int pos) {
			unchecked {
				#line 344 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return ( ((int) (this.b[pos]) ) | ( ((int) (this.b[( pos + 1 )]) ) << 8 ) );
			}
			#line default
		}
		
		
		public void setUInt16(int pos, int v) {
			unchecked {
				#line 356 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[pos] = ((byte) (v) );
				this.b[( pos + 1 )] = ((byte) (( v >> 8 )) );
			}
			#line default
		}
		
		
		public int getInt32(int pos) {
			unchecked {
				#line 375 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return ( ( ( ((int) (this.b[pos]) ) | ( ((int) (this.b[( pos + 1 )]) ) << 8 ) ) | ( ((int) (this.b[( pos + 2 )]) ) << 16 ) ) | ( ((int) (this.b[( pos + 3 )]) ) << 24 ) );
			}
			#line default
		}
		
		
		public long getInt64(int pos) {
			unchecked {
				#line 384 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				int pos1 = ( pos + 4 );
				#line 384 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				long this1 = ( ( ((long) (((int) (( ( ( ((int) (this.b[pos1]) ) | ( ((int) (this.b[( pos1 + 1 )]) ) << 8 ) ) | ( ((int) (this.b[( pos1 + 2 )]) ) << 16 ) ) | ( ((int) (this.b[( pos1 + 3 )]) ) << 24 ) )) )) ) << 32 ) | ( ((long) (((int) (( ( ( ((int) (this.b[pos]) ) | ( ((int) (this.b[( pos + 1 )]) ) << 8 ) ) | ( ((int) (this.b[( pos + 2 )]) ) << 16 ) ) | ( ((int) (this.b[( pos + 3 )]) ) << 24 ) )) )) ) & 0xffffffffL ) );
				#line 384 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return ((long) (this1) );
			}
			#line default
		}
		
		
		public void setInt32(int pos, int v) {
			unchecked {
				#line 395 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[pos] = ((byte) (v) );
				this.b[( pos + 1 )] = ((byte) (( v >> 8 )) );
				#line 397 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				this.b[( pos + 2 )] = ((byte) (( v >> 16 )) );
				this.b[( pos + 3 )] = ((byte) (((int) (( ((uint) (v) ) >> 24 )) )) );
			}
			#line default
		}
		
		
		public void setInt64(int pos, long v) {
			unchecked {
				#line 407 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				{
					#line 407 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int v1 = ((int) (((long) (v) )) );
					#line 407 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[pos] = ((byte) (v1) );
					#line 407 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos + 1 )] = ((byte) (( v1 >> 8 )) );
					#line 407 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos + 2 )] = ((byte) (( v1 >> 16 )) );
					#line 407 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos + 3 )] = ((byte) (((int) (( ((uint) (v1) ) >> 24 )) )) );
				}
				
				#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				{
					#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int pos1 = ( pos + 4 );
					#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int v2 = ((int) (( ((long) (v) ) >> 32 )) );
					#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[pos1] = ((byte) (v2) );
					#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos1 + 1 )] = ((byte) (( v2 >> 8 )) );
					#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos1 + 2 )] = ((byte) (( v2 >> 16 )) );
					#line 408 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					this.b[( pos1 + 3 )] = ((byte) (((int) (( ((uint) (v2) ) >> 24 )) )) );
				}
				
			}
			#line default
		}
		
		
		public virtual string getString(int pos, int len, global::haxe.io.Encoding encoding) {
			unchecked {
				#line 416 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				bool tmp = ( encoding == null );
				#line 419 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				if (( ( ( pos < 0 ) || ( len < 0 ) ) || ( ( pos + len ) > this.length ) )) {
					#line 420 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					throw ((global::System.Exception) (global::haxe.Exception.thrown(global::haxe.io.Error.OutsideBounds)) );
				}
				
				#line 432 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				if (( encoding == null )) {
					#line 434 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					return global::System.Text.Encoding.UTF8.GetString(((byte[]) (this.b) ), ((int) (pos) ), ((int) (len) ));
				}
				else {
					#line 432 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					switch (encoding._hx_index) {
						case 0:
						{
							#line 434 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
							return global::System.Text.Encoding.UTF8.GetString(((byte[]) (this.b) ), ((int) (pos) ), ((int) (len) ));
						}
						
						
						case 1:
						{
							#line 436 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
							return global::System.Text.Encoding.Unicode.GetString(((byte[]) (this.b) ), ((int) (pos) ), ((int) (len) ));
						}
						
						
					}
					
				}
				
				#line 415 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return null;
			}
			#line default
		}
		
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public string readString(int pos, int len) {
			#line 496 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return this.getString(pos, len, null);
		}
		#line default
		
		public virtual string toString() {
			#line 509 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return global::System.Text.Encoding.UTF8.GetString(((byte[]) (this.b) ), ((int) (0) ), ((int) (this.length) ));
		}
		#line default
		
		public virtual string toHex() {
			unchecked {
				#line 525 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				global::StringBuf s = new global::StringBuf();
				global::Array<object> chars = new global::Array<object>(new object[]{});
				#line 527 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				string str = "0123456789abcdef";
				{
					#line 528 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int _g = 0;
					#line 528 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int _g1 = str.Length;
					#line 528 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					while (( _g < _g1 )) {
						#line 528 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						int i = _g++;
						chars.push((global::haxe.lang.StringExt.charCodeAt(str, i)).toDynamic());
					}
					
				}
				
				#line 530 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				{
					#line 530 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int _g2 = 0;
					#line 530 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					int _g3 = this.length;
					#line 530 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
					while (( _g2 < _g3 )) {
						#line 530 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						int i1 = _g2++;
						int c = ((int) (this.b[i1]) );
						#line 532 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						s.addChar(((int) (global::haxe.lang.Runtime.toInt(chars[( c >> 4 )])) ));
						s.addChar(((int) (global::haxe.lang.Runtime.toInt(chars[( c & 15 )])) ));
					}
					
				}
				
				#line 535 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return s.b.ToString();
			}
			#line default
		}
		
		
		public byte[] getData() {
			#line 542 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			return this.b;
		}
		#line default
		
		public override double __hx_setField_f(string field, int hash, double @value, bool handleProperties) {
			unchecked {
				#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				switch (hash) {
					case 520590566:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.length = ((int) (@value) );
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return @value;
					}
					
					
					default:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return base.__hx_setField_f(field, hash, @value, handleProperties);
					}
					
				}
				
			}
			#line default
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				switch (hash) {
					case 98:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.b = ((byte[]) (@value) );
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return @value;
					}
					
					
					case 520590566:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.length = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return @value;
					}
					
					
					default:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return base.__hx_setField(field, hash, @value, handleProperties);
					}
					
				}
				
			}
			#line default
		}
		
		
		public override object __hx_getField(string field, int hash, bool throwErrors, bool isCheck, bool handleProperties) {
			unchecked {
				#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				switch (hash) {
					case 350619104:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getData", 350619104)) );
					}
					
					
					case 336655392:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "toHex", 336655392)) );
					}
					
					
					case 946786476:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "toString", 946786476)) );
					}
					
					
					case 179047623:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "readString", 179047623)) );
					}
					
					
					case 226931207:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getString", 226931207)) );
					}
					
					
					case 1280638699:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setInt64", 1280638699)) );
					}
					
					
					case 1280638028:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setInt32", 1280638028)) );
					}
					
					
					case 502769015:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getInt64", 502769015)) );
					}
					
					
					case 502768344:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getInt32", 502768344)) );
					}
					
					
					case 2025238049:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setUInt16", 2025238049)) );
					}
					
					
					case 358990357:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getUInt16", 358990357)) );
					}
					
					
					case 281751194:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setFloat", 281751194)) );
					}
					
					
					case 309502035:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setDouble", 309502035)) );
					}
					
					
					case 1651365158:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getFloat", 1651365158)) );
					}
					
					
					case 790737991:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "getDouble", 790737991)) );
					}
					
					
					case 57219237:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "compare", 57219237)) );
					}
					
					
					case 5745024:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "sub", 5745024)) );
					}
					
					
					case 1136381571:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "fill", 1136381571)) );
					}
					
					
					case 1092171829:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "blit", 1092171829)) );
					}
					
					
					case 5741474:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set", 5741474)) );
					}
					
					
					case 5144726:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get", 5144726)) );
					}
					
					
					case 98:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.b;
					}
					
					
					case 520590566:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.length;
					}
					
					
					default:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return base.__hx_getField(field, hash, throwErrors, isCheck, handleProperties);
					}
					
				}
				
			}
			#line default
		}
		
		
		public override double __hx_getField_f(string field, int hash, bool throwErrors, bool handleProperties) {
			unchecked {
				#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				switch (hash) {
					case 520590566:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return ((double) (this.length) );
					}
					
					
					default:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return base.__hx_getField_f(field, hash, throwErrors, handleProperties);
					}
					
				}
				
			}
			#line default
		}
		
		
		public override object __hx_invokeField(string field, int hash, object[] dynargs) {
			unchecked {
				#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				switch (hash) {
					case 350619104:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getData();
					}
					
					
					case 336655392:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.toHex();
					}
					
					
					case 946786476:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.toString();
					}
					
					
					case 179047623:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.readString(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ));
					}
					
					
					case 226931207:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getString(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ), ((global::haxe.io.Encoding) (( (( dynargs.Length > 2 )) ? (dynargs[2]) : (null) )) ));
					}
					
					
					case 1280638699:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.setInt64(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((long) (dynargs[1]) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 1280638028:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.setInt32(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 502769015:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getInt64(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 502768344:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getInt32(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 2025238049:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.setUInt16(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 358990357:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getUInt16(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 281751194:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.setFloat(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((double) (global::haxe.lang.Runtime.toDouble(dynargs[1])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 309502035:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.setDouble(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((double) (global::haxe.lang.Runtime.toDouble(dynargs[1])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 1651365158:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getFloat(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 790737991:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.getDouble(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 57219237:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.compare(((global::haxe.io.Bytes) (dynargs[0]) ));
					}
					
					
					case 5745024:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.sub(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ));
					}
					
					
					case 1136381571:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.fill(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[2])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 1092171829:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.blit(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((global::haxe.io.Bytes) (dynargs[1]) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[2])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[3])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 5741474:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						this.@set(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ), ((int) (global::haxe.lang.Runtime.toInt(dynargs[1])) ));
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						break;
					}
					
					
					case 5144726:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return this.@get(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					default:
					{
						#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
						return base.__hx_invokeField(field, hash, dynargs);
					}
					
				}
				
				#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
				return null;
			}
			#line default
		}
		
		
		public override void __hx_getFields(global::Array<string> baseArr) {
			#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			baseArr.push("b");
			#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			baseArr.push("length");
			#line 29 "C:\\HaxeToolkit\\haxe\\std\\haxe\\io\\Bytes.hx"
			base.__hx_getFields(baseArr);
		}
		#line default
		
		public override string ToString(){
			return this.toString();
		}
		
		
	}
}


