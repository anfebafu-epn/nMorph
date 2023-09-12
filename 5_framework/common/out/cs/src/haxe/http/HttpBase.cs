// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.http {
	public class HttpBase : global::haxe.lang.HxObject {
		
		public HttpBase(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public HttpBase(string url) {
			global::haxe.http.HttpBase.__hx_ctor_haxe_http_HttpBase(this, url);
		}
		
		
		protected static void __hx_ctor_haxe_http_HttpBase(global::haxe.http.HttpBase __hx_this, string url) {
			__hx_this.onStatus = ( (( global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun.__hx_current != null )) ? (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun.__hx_current) : (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun.__hx_current = ((global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun) (new global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun()) )) );
			__hx_this.onError = ( (( global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun.__hx_current != null )) ? (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun.__hx_current) : (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun.__hx_current = ((global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun) (new global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun()) )) );
			__hx_this.onBytes = ( (( global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun.__hx_current != null )) ? (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun.__hx_current) : (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun.__hx_current = ((global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun) (new global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun()) )) );
			__hx_this.onData = ( (( global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun.__hx_current != null )) ? (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun.__hx_current) : (global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun.__hx_current = ((global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun) (new global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun()) )) );
			{
				__hx_this.url = url;
				__hx_this.headers = new global::Array<object>(new object[]{});
				__hx_this.@params = new global::Array<object>(new object[]{});
				__hx_this.emptyOnData = __hx_this.onData;
			}
			
		}
		
		
		public string url;
		
		
		
		public global::haxe.io.Bytes responseBytes;
		
		public string responseAsString;
		
		public string postData;
		
		public global::haxe.io.Bytes postBytes;
		
		public global::Array<object> headers;
		
		public global::Array<object> @params;
		
		public global::haxe.lang.Function emptyOnData;
		
		public virtual void setHeader(string name, string @value) {
			{
				int _g = 0;
				int _g1 = this.headers.length;
				while (( _g < _g1 )) {
					int i = _g++;
					if (( global::haxe.lang.Runtime.toString(global::haxe.lang.Runtime.getField(this.headers[i], "name", 1224700491, true)) == name )) {
						this.headers[i] = new global::haxe.lang.DynamicObject(new int[]{834174833, 1224700491}, new object[]{@value, name}, new int[]{}, new double[]{});
						return;
					}
					
				}
				
			}
			
			this.headers.push(new global::haxe.lang.DynamicObject(new int[]{834174833, 1224700491}, new object[]{@value, name}, new int[]{}, new double[]{}));
		}
		
		
		public virtual void addHeader(string header, string @value) {
			this.headers.push(new global::haxe.lang.DynamicObject(new int[]{834174833, 1224700491}, new object[]{@value, header}, new int[]{}, new double[]{}));
		}
		
		
		public virtual void setParameter(string name, string @value) {
			{
				int _g = 0;
				int _g1 = this.@params.length;
				while (( _g < _g1 )) {
					int i = _g++;
					if (( global::haxe.lang.Runtime.toString(global::haxe.lang.Runtime.getField(this.@params[i], "name", 1224700491, true)) == name )) {
						this.@params[i] = new global::haxe.lang.DynamicObject(new int[]{834174833, 1224700491}, new object[]{@value, name}, new int[]{}, new double[]{});
						return;
					}
					
				}
				
			}
			
			this.@params.push(new global::haxe.lang.DynamicObject(new int[]{834174833, 1224700491}, new object[]{@value, name}, new int[]{}, new double[]{}));
		}
		
		
		public virtual void addParameter(string name, string @value) {
			this.@params.push(new global::haxe.lang.DynamicObject(new int[]{834174833, 1224700491}, new object[]{@value, name}, new int[]{}, new double[]{}));
		}
		
		
		public virtual void setPostData(string data) {
			this.postData = data;
			this.postBytes = null;
		}
		
		
		public virtual void setPostBytes(global::haxe.io.Bytes data) {
			this.postBytes = data;
			this.postData = null;
		}
		
		
		public virtual void request(global::haxe.lang.Null<bool> post) {
			unchecked {
				throw new global::haxe.exceptions.NotImplementedException(default(string), default(global::haxe.Exception), ((object) (new global::haxe.lang.DynamicObject(new int[]{302979532, 1547539107, 1648581351}, new object[]{"request", "haxe.http.HttpBase", "haxe/http/HttpBase.hx"}, new int[]{1981972957}, new double[]{((double) (186) )})) ));
			}
		}
		
		
		public global::haxe.lang.Function onData;
		
		public global::haxe.lang.Function onBytes;
		
		public global::haxe.lang.Function onError;
		
		public global::haxe.lang.Function onStatus;
		
		public virtual bool hasOnData() {
			return  ! (global::Reflect.compareMethods(this.onData, this.emptyOnData)) ;
		}
		
		
		public virtual void success(global::haxe.io.Bytes data) {
			this.responseBytes = data;
			this.responseAsString = null;
			if (this.hasOnData()) {
				this.onData.__hx_invoke1_o(default(double), this.get_responseData());
			}
			
			this.onBytes.__hx_invoke1_o(default(double), this.responseBytes);
		}
		
		
		public virtual string get_responseData() {
			if (( ( this.responseAsString == null ) && ( this.responseBytes != null ) )) {
				this.responseAsString = this.responseBytes.getString(0, this.responseBytes.length, global::haxe.io.Encoding.UTF8);
			}
			
			return this.responseAsString;
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1705565617:
					{
						this.onStatus = ((global::haxe.lang.Function) (@value) );
						return @value;
					}
					
					
					case 157772329:
					{
						this.onError = ((global::haxe.lang.Function) (@value) );
						return @value;
					}
					
					
					case 1406510796:
					{
						this.onBytes = ((global::haxe.lang.Function) (@value) );
						return @value;
					}
					
					
					case 1693277929:
					{
						this.onData = ((global::haxe.lang.Function) (@value) );
						return @value;
					}
					
					
					case 756413782:
					{
						this.emptyOnData = ((global::haxe.lang.Function) (@value) );
						return @value;
					}
					
					
					case 1836776262:
					{
						this.@params = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) );
						return @value;
					}
					
					
					case 1661489734:
					{
						this.headers = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) );
						return @value;
					}
					
					
					case 1993152491:
					{
						this.postBytes = ((global::haxe.io.Bytes) (@value) );
						return @value;
					}
					
					
					case 10663594:
					{
						this.postData = global::haxe.lang.Runtime.toString(@value);
						return @value;
					}
					
					
					case 1757972228:
					{
						this.responseAsString = global::haxe.lang.Runtime.toString(@value);
						return @value;
					}
					
					
					case 1879807530:
					{
						this.responseBytes = ((global::haxe.io.Bytes) (@value) );
						return @value;
					}
					
					
					case 5843823:
					{
						this.url = global::haxe.lang.Runtime.toString(@value);
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
					case 1233646036:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_responseData", 1233646036)) );
					}
					
					
					case 944645571:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "success", 944645571)) );
					}
					
					
					case 634786275:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "hasOnData", 634786275)) );
					}
					
					
					case 1705565617:
					{
						return this.onStatus;
					}
					
					
					case 157772329:
					{
						return this.onError;
					}
					
					
					case 1406510796:
					{
						return this.onBytes;
					}
					
					
					case 1693277929:
					{
						return this.onData;
					}
					
					
					case 1149558607:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "request", 1149558607)) );
					}
					
					
					case 454875113:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setPostBytes", 454875113)) );
					}
					
					
					case 822313068:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setPostData", 822313068)) );
					}
					
					
					case 1208244040:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "addParameter", 1208244040)) );
					}
					
					
					case 1828713895:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setParameter", 1828713895)) );
					}
					
					
					case 891567758:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "addHeader", 891567758)) );
					}
					
					
					case 1554480847:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "setHeader", 1554480847)) );
					}
					
					
					case 756413782:
					{
						return this.emptyOnData;
					}
					
					
					case 1836776262:
					{
						return this.@params;
					}
					
					
					case 1661489734:
					{
						return this.headers;
					}
					
					
					case 1993152491:
					{
						return this.postBytes;
					}
					
					
					case 10663594:
					{
						return this.postData;
					}
					
					
					case 1757972228:
					{
						return this.responseAsString;
					}
					
					
					case 1879807530:
					{
						return this.responseBytes;
					}
					
					
					case 1156121931:
					{
						return this.get_responseData();
					}
					
					
					case 5843823:
					{
						return this.url;
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
					case 1233646036:
					{
						return this.get_responseData();
					}
					
					
					case 944645571:
					{
						this.success(((global::haxe.io.Bytes) (dynargs[0]) ));
						break;
					}
					
					
					case 634786275:
					{
						return this.hasOnData();
					}
					
					
					case 1149558607:
					{
						this.request(global::haxe.lang.Null<object>.ofDynamic<bool>(( (( dynargs.Length > 0 )) ? (dynargs[0]) : (null) )));
						break;
					}
					
					
					case 454875113:
					{
						this.setPostBytes(((global::haxe.io.Bytes) (dynargs[0]) ));
						break;
					}
					
					
					case 822313068:
					{
						this.setPostData(global::haxe.lang.Runtime.toString(dynargs[0]));
						break;
					}
					
					
					case 1208244040:
					{
						this.addParameter(global::haxe.lang.Runtime.toString(dynargs[0]), global::haxe.lang.Runtime.toString(dynargs[1]));
						break;
					}
					
					
					case 1828713895:
					{
						this.setParameter(global::haxe.lang.Runtime.toString(dynargs[0]), global::haxe.lang.Runtime.toString(dynargs[1]));
						break;
					}
					
					
					case 891567758:
					{
						this.addHeader(global::haxe.lang.Runtime.toString(dynargs[0]), global::haxe.lang.Runtime.toString(dynargs[1]));
						break;
					}
					
					
					case 1554480847:
					{
						this.setHeader(global::haxe.lang.Runtime.toString(dynargs[0]), global::haxe.lang.Runtime.toString(dynargs[1]));
						break;
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
			baseArr.push("onStatus");
			baseArr.push("onError");
			baseArr.push("onBytes");
			baseArr.push("onData");
			baseArr.push("emptyOnData");
			baseArr.push("params");
			baseArr.push("headers");
			baseArr.push("postBytes");
			baseArr.push("postData");
			baseArr.push("responseAsString");
			baseArr.push("responseBytes");
			baseArr.push("responseData");
			baseArr.push("url");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.http {
	public class HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun : global::haxe.lang.Function {
		
		public HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun() : base(1, 0) {
		}
		
		
		public static global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_223__Fun __hx_current;
		
		public override object __hx_invoke1_o(double __fn_float1, object __fn_dyn1) {
			int status = ( (( __fn_dyn1 == global::haxe.lang.Runtime.undefined )) ? (((int) (__fn_float1) )) : (((int) (global::haxe.lang.Runtime.toInt(__fn_dyn1)) )) );
			return null;
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.http {
	public class HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun : global::haxe.lang.Function {
		
		public HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun() : base(1, 0) {
		}
		
		
		public static global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_214__Fun __hx_current;
		
		public override object __hx_invoke1_o(double __fn_float1, object __fn_dyn1) {
			string msg = ( (( __fn_dyn1 == global::haxe.lang.Runtime.undefined )) ? (global::haxe.lang.Runtime.toString(__fn_float1)) : (global::haxe.lang.Runtime.toString(__fn_dyn1)) );
			return null;
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.http {
	public class HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun : global::haxe.lang.Function {
		
		public HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun() : base(1, 0) {
		}
		
		
		public static global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_205__Fun __hx_current;
		
		public override object __hx_invoke1_o(double __fn_float1, object __fn_dyn1) {
			global::haxe.io.Bytes data = ( (( __fn_dyn1 == global::haxe.lang.Runtime.undefined )) ? (((global::haxe.io.Bytes) (((object) (__fn_float1) )) )) : (((global::haxe.io.Bytes) (__fn_dyn1) )) );
			return null;
		}
		
		
	}
}



#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe.http {
	public class HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun : global::haxe.lang.Function {
		
		public HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun() : base(1, 0) {
		}
		
		
		public static global::haxe.http.HttpBase___hx_ctor_haxe_http_HttpBase_196__Fun __hx_current;
		
		public override object __hx_invoke1_o(double __fn_float1, object __fn_dyn1) {
			string data = ( (( __fn_dyn1 == global::haxe.lang.Runtime.undefined )) ? (global::haxe.lang.Runtime.toString(__fn_float1)) : (global::haxe.lang.Runtime.toString(__fn_dyn1)) );
			return null;
		}
		
		
	}
}


