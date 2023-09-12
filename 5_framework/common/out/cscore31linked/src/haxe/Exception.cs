// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe {
	public class Exception : global::System.Exception, global::haxe.lang.IHxObject {
		
		public Exception(global::haxe.lang.EmptyObject empty) : base(null, null) {
		}
		
		
		public Exception(string message, global::haxe.Exception previous, object native) : base(message, ( (( previous == null )) ? (null) : (previous) )) {
			unchecked {
				this.__skipStack = 0;
				{
					this.__previousException = previous;
					if (( ( native != null ) && ( native is global::System.Exception ) )) {
						this.__nativeException = ((global::System.Exception) (((object) (native) )) );
						if (( this.__nativeException.StackTrace == null )) {
							this.__nativeStack = new global::System.Diagnostics.StackTrace(((int) (1) ), ((bool) (true) ));
							this.__ownStack = true;
						}
						else {
							this.__nativeStack = new global::System.Diagnostics.StackTrace(((global::System.Exception) (this.__nativeException) ), ((bool) (true) ));
							this.__ownStack = false;
						}
						
					}
					else {
						this.__nativeException = ((global::System.Exception) (((object) (this) )) );
						this.__nativeStack = new global::System.Diagnostics.StackTrace(((int) (1) ), ((bool) (true) ));
						this.__ownStack = true;
					}
					
				}
				
			}
		}
		
		
		public static global::haxe.Exception caught(object @value) {
			if (( @value is global::haxe.Exception )) {
				return ((global::haxe.Exception) (((object) (@value) )) );
			}
			else if (( @value is global::System.Exception )) {
				return new global::haxe.Exception(((string) (((global::System.Exception) (((object) (@value) )) ).Message) ), default(global::haxe.Exception), ((object) (@value) ));
			}
			else {
				return new global::haxe.ValueException(((object) (@value) ), default(global::haxe.Exception), ((object) (@value) ));
			}
			
		}
		
		
		public static object thrown(object @value) {
			if (( @value is global::haxe.Exception )) {
				return ((global::haxe.Exception) (((object) (@value) )) ).get_native();
			}
			else if (( @value is global::System.Exception )) {
				return @value;
			}
			else {
				global::haxe.ValueException e = new global::haxe.ValueException(((object) (@value) ), default(global::haxe.Exception), default(object));
				if (e.__ownStack) {
					e.__skipStack++;
				}
				
				return ((object) (e) );
			}
			
		}
		
		
		
		
		
		
		
		
		
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public global::Array<object> __exceptionStack;
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public global::System.Diagnostics.StackTrace __nativeStack;
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public bool __ownStack;
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public int __skipStack;
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public global::System.Exception __nativeException;
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public global::haxe.Exception __previousException;
		
		public virtual object unwrap() {
			return ((object) (this.__nativeException) );
		}
		
		
		public virtual string toString() {
			return this.get_message();
		}
		
		
		public virtual string details() {
			if (( this.get_previous() == null )) {
				string tmp = global::haxe.lang.Runtime.concat("Exception: ", this.toString());
				global::Array<object> tmp1 = this.get_stack();
				return global::haxe.lang.Runtime.concat(tmp, (( (( tmp1 == null )) ? ("null") : (global::haxe._CallStack.CallStack_Impl_.toString(tmp1)) )));
			}
			else {
				string result = "";
				global::haxe.Exception e = this;
				global::haxe.Exception prev = null;
				while (( e != null )) {
					if (( prev == null )) {
						string result1 = global::haxe.lang.Runtime.concat("Exception: ", e.get_message());
						global::Array<object> tmp2 = e.get_stack();
						result = global::haxe.lang.Runtime.concat(global::haxe.lang.Runtime.concat(result1, (( (( tmp2 == null )) ? ("null") : (global::haxe._CallStack.CallStack_Impl_.toString(tmp2)) ))), result);
					}
					else {
						global::Array<object> prevStack = global::haxe._CallStack.CallStack_Impl_.subtract(e.get_stack(), prev.get_stack());
						result = global::haxe.lang.Runtime.concat(global::haxe.lang.Runtime.concat(global::haxe.lang.Runtime.concat(global::haxe.lang.Runtime.concat("Exception: ", e.get_message()), (( (( prevStack == null )) ? ("null") : (global::haxe._CallStack.CallStack_Impl_.toString(prevStack)) ))), "\n\nNext "), result);
					}
					
					prev = e;
					e = e.get_previous();
				}
				
				return result;
			}
			
		}
		
		
		[global::System.ComponentModel.EditorBrowsable(global::System.ComponentModel.EditorBrowsableState.Never)]
		public void __shiftStack() {
			if (this.__ownStack) {
				this.__skipStack++;
			}
			
		}
		
		
		public virtual string get_message() {
			return this.Message;
		}
		
		
		public virtual global::haxe.Exception get_previous() {
			return this.__previousException;
		}
		
		
		public object get_native() {
			return ((object) (this.__nativeException) );
		}
		
		
		public virtual global::Array<object> get_stack() {
			global::Array<object> _g = this.__exceptionStack;
			if (( _g == null )) {
				return this.__exceptionStack = global::haxe.NativeStackTrace.toHaxe(this.__nativeStack, new global::haxe.lang.Null<int>(this.__skipStack, true));
			}
			else {
				global::Array<object> s = _g;
				return s;
			}
			
		}
		
		
		public virtual object __hx_lookupField(string field, int hash, bool throwErrors, bool isCheck) {
			if (isCheck) {
				return global::haxe.lang.Runtime.undefined;
			}
			else if (throwErrors) {
				throw new global::System.MemberAccessException("Field not found.");
			}
			else {
				return null;
			}
			
		}
		
		
		public virtual double __hx_lookupField_f(string field, int hash, bool throwErrors) {
			if (throwErrors) {
				throw new global::System.MemberAccessException("Field not found or incompatible field type.");
			}
			else {
				return default(double);
			}
			
		}
		
		
		public virtual object __hx_lookupSetField(string field, int hash, object @value) {
			throw new global::System.MemberAccessException("Cannot access field for writing.");
		}
		
		
		public virtual double __hx_lookupSetField_f(string field, int hash, double @value) {
			throw new global::System.MemberAccessException("Cannot access field for writing or incompatible type.");
		}
		
		
		public virtual double __hx_setField_f(string field, int hash, double @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1177754921:
					{
						this.__skipStack = ((int) (@value) );
						return @value;
					}
					
					
					default:
					{
						return this.__hx_lookupSetField_f(field, hash, @value);
					}
					
				}
				
			}
		}
		
		
		public virtual object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 78945784:
					{
						this.__previousException = ((global::haxe.Exception) (@value) );
						return @value;
					}
					
					
					case 221637784:
					{
						this.__nativeException = ((global::System.Exception) (@value) );
						return @value;
					}
					
					
					case 1177754921:
					{
						this.__skipStack = ((int) (global::haxe.lang.Runtime.toInt(@value)) );
						return @value;
					}
					
					
					case 1460447810:
					{
						this.__ownStack = global::haxe.lang.Runtime.toBool(@value);
						return @value;
					}
					
					
					case 863972113:
					{
						this.__nativeStack = ((global::System.Diagnostics.StackTrace) (@value) );
						return @value;
					}
					
					
					case 1066783641:
					{
						this.__exceptionStack = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) );
						return @value;
					}
					
					
					default:
					{
						return this.__hx_lookupSetField(field, hash, @value);
					}
					
				}
				
			}
		}
		
		
		public virtual object __hx_getField(string field, int hash, bool throwErrors, bool isCheck, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1203028895:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_stack", 1203028895)) );
					}
					
					
					case 312752480:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_native", 312752480)) );
					}
					
					
					case 1489662016:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_previous", 1489662016)) );
					}
					
					
					case 537630174:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "get_message", 537630174)) );
					}
					
					
					case 1274465926:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "__shiftStack", 1274465926)) );
					}
					
					
					case 727112898:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "details", 727112898)) );
					}
					
					
					case 946786476:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "toString", 946786476)) );
					}
					
					
					case 1825849507:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "unwrap", 1825849507)) );
					}
					
					
					case 78945784:
					{
						return this.__previousException;
					}
					
					
					case 221637784:
					{
						return this.__nativeException;
					}
					
					
					case 1177754921:
					{
						return this.__skipStack;
					}
					
					
					case 1460447810:
					{
						return this.__ownStack;
					}
					
					
					case 863972113:
					{
						return this.__nativeStack;
					}
					
					
					case 1066783641:
					{
						return this.__exceptionStack;
					}
					
					
					case 572311959:
					{
						return this.get_native();
					}
					
					
					case 598785079:
					{
						return this.get_previous();
					}
					
					
					case 67856200:
					{
						return this.get_stack();
					}
					
					
					case 437335495:
					{
						return this.get_message();
					}
					
					
					default:
					{
						return this.__hx_lookupField(field, hash, throwErrors, isCheck);
					}
					
				}
				
			}
		}
		
		
		public virtual double __hx_getField_f(string field, int hash, bool throwErrors, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1177754921:
					{
						return ((double) (this.__skipStack) );
					}
					
					
					case 572311959:
					{
						return ((double) (global::haxe.lang.Runtime.toDouble(this.get_native())) );
					}
					
					
					default:
					{
						return this.__hx_lookupField_f(field, hash, throwErrors);
					}
					
				}
				
			}
		}
		
		
		public virtual object __hx_invokeField(string field, int hash, object[] dynargs) {
			unchecked {
				switch (hash) {
					case 1203028895:
					{
						return this.get_stack();
					}
					
					
					case 312752480:
					{
						return this.get_native();
					}
					
					
					case 1489662016:
					{
						return this.get_previous();
					}
					
					
					case 537630174:
					{
						return this.get_message();
					}
					
					
					case 1274465926:
					{
						this.__shiftStack();
						break;
					}
					
					
					case 727112898:
					{
						return this.details();
					}
					
					
					case 946786476:
					{
						return this.toString();
					}
					
					
					case 1825849507:
					{
						return this.unwrap();
					}
					
					
					default:
					{
						return ((global::haxe.lang.Function) (this.__hx_getField(field, hash, true, false, false)) ).__hx_invokeDynamic(dynargs);
					}
					
				}
				
				return null;
			}
		}
		
		
		public virtual void __hx_getFields(global::Array<string> baseArr) {
			baseArr.push("__previousException");
			baseArr.push("__nativeException");
			baseArr.push("__skipStack");
			baseArr.push("__ownStack");
			baseArr.push("__nativeStack");
			baseArr.push("__exceptionStack");
			baseArr.push("native");
			baseArr.push("previous");
			baseArr.push("stack");
			baseArr.push("message");
		}
		
		
		public override string ToString(){
			return this.toString();
		}
		
		
	}
}


