// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace haxe {
	public class SysTools : global::haxe.lang.HxObject {
		
		static SysTools() {
			unchecked{
				global::haxe.SysTools.winMetaCharacters = ((global::Array<int>) (new global::Array<int>(new int[]{32, 40, 41, 37, 33, 94, 34, 60, 62, 38, 124, 10, 13, 44, 59})) );
			}
		}
		
		
		public SysTools(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public SysTools() {
			global::haxe.SysTools.__hx_ctor_haxe_SysTools(this);
		}
		
		
		protected static void __hx_ctor_haxe_SysTools(global::haxe.SysTools __hx_this) {
		}
		
		
		public static global::Array<int> winMetaCharacters;
		
		public static string quoteUnixArg(string argument) {
			if (( argument == "" )) {
				return "\'\'";
			}
			
			if ( ! (new global::EReg(((string) ("[^a-zA-Z0-9_@%+=:,./-]") ), ((string) ("") )).match(argument)) ) {
				return argument;
			}
			
			return global::haxe.lang.Runtime.concat(global::haxe.lang.Runtime.concat("\'", global::StringTools.replace(argument, "\'", "\'\"\'\"\'")), "\'");
		}
		
		
		public static string quoteWinArg(string argument, bool escapeMetaCharacters) {
			unchecked {
				if ( ! (new global::EReg(((string) ("^[^ \t\\\\\"]+$") ), ((string) ("") )).match(argument)) ) {
					global::StringBuf result = new global::StringBuf();
					bool needquote = ( ( ( global::haxe.lang.StringExt.indexOf(argument, " ", default(global::haxe.lang.Null<int>)) != -1 ) || ( global::haxe.lang.StringExt.indexOf(argument, "\t", default(global::haxe.lang.Null<int>)) != -1 ) ) || ( argument == "" ) );
					if (needquote) {
						result.b.Append(((string) ("\"") ));
					}
					
					global::StringBuf bs_buf = new global::StringBuf();
					{
						int _g = 0;
						int _g1 = argument.Length;
						while (( _g < _g1 )) {
							int i = _g++;
							{
								global::haxe.lang.Null<int> _g2 = global::haxe.lang.StringExt.charCodeAt(argument, i);
								if ( ! (_g2.hasValue) ) {
									global::haxe.lang.Null<int> c = _g2;
									{
										if (( bs_buf.b.Length > 0 )) {
											{
												string x = bs_buf.b.ToString();
												result.b.Append(((string) (global::Std.@string(x)) ));
											}
											
											bs_buf = new global::StringBuf();
										}
										
										result.addChar((c).@value);
									}
									
								}
								else {
									switch (((_g2)).@value) {
										case 34:
										{
											string bs = bs_buf.b.ToString();
											result.b.Append(((string) (global::Std.@string(bs)) ));
											result.b.Append(((string) (global::Std.@string(bs)) ));
											bs_buf = new global::StringBuf();
											result.b.Append(((string) ("\\\"") ));
											break;
										}
										
										
										case 92:
										{
											bs_buf.b.Append(((string) ("\\") ));
											break;
										}
										
										
										default:
										{
											global::haxe.lang.Null<int> c1 = _g2;
											{
												if (( bs_buf.b.Length > 0 )) {
													{
														string x1 = bs_buf.b.ToString();
														result.b.Append(((string) (global::Std.@string(x1)) ));
													}
													
													bs_buf = new global::StringBuf();
												}
												
												result.addChar((c1).@value);
											}
											
											break;
										}
										
									}
									
								}
								
							}
							
						}
						
					}
					
					{
						string x2 = bs_buf.b.ToString();
						result.b.Append(((string) (global::Std.@string(x2)) ));
					}
					
					if (needquote) {
						{
							string x3 = bs_buf.b.ToString();
							result.b.Append(((string) (global::Std.@string(x3)) ));
						}
						
						result.b.Append(((string) ("\"") ));
					}
					
					argument = result.b.ToString();
				}
				
				if (escapeMetaCharacters) {
					global::StringBuf result1 = new global::StringBuf();
					{
						int _g3 = 0;
						int _g4 = argument.Length;
						while (( _g3 < _g4 )) {
							int i1 = _g3++;
							global::haxe.lang.Null<int> c2 = global::haxe.lang.StringExt.charCodeAt(argument, i1);
							if (( global::haxe.SysTools.winMetaCharacters.indexOf((c2).@value, default(global::haxe.lang.Null<int>)) >= 0 )) {
								result1.addChar(94);
							}
							
							result1.addChar((c2).@value);
						}
						
					}
					
					return result1.b.ToString();
				}
				else {
					return argument;
				}
				
			}
		}
		
		
	}
}


