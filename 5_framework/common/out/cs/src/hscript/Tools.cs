// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace hscript {
	public class Tools : global::haxe.lang.HxObject {
		
		public Tools(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public Tools() {
			global::hscript.Tools.__hx_ctor_hscript_Tools(this);
		}
		
		
		protected static void __hx_ctor_hscript_Tools(global::hscript.Tools __hx_this) {
		}
		
		
		public static void iter(object e, global::haxe.lang.Function f) {
			unchecked {
				global::hscript.ExprDef _g = ((global::hscript.ExprDef) (global::haxe.lang.Runtime.getField(e, "e", 101, true)) );
				switch (_g._hx_index) {
					case 0:
					{
						global::hscript.Const _g1 = ( _g as global::hscript.ExprDef_EConst ).c;
						break;
					}
					
					
					case 1:
					{
						string _g2 = ( _g as global::hscript.ExprDef_EIdent ).v;
						break;
					}
					
					
					case 2:
					{
						string _g3 = ( _g as global::hscript.ExprDef_EVar ).n;
						global::hscript.CType _g4 = ( _g as global::hscript.ExprDef_EVar ).t;
						{
							object e1 = ( _g as global::hscript.ExprDef_EVar ).e;
							if (( e1 != null )) {
								f.__hx_invoke1_o(default(double), e1);
							}
							
						}
						
						break;
					}
					
					
					case 3:
					{
						object e2 = ( _g as global::hscript.ExprDef_EParent ).e;
						f.__hx_invoke1_o(default(double), e2);
						break;
					}
					
					
					case 4:
					{
						global::Array<object> el = ( _g as global::hscript.ExprDef_EBlock ).e;
						{
							int _g5 = 0;
							while (( _g5 < el.length )) {
								object e3 = el[_g5];
								 ++ _g5;
								f.__hx_invoke1_o(default(double), e3);
							}
							
						}
						
						break;
					}
					
					
					case 5:
					{
						string _g6 = ( _g as global::hscript.ExprDef_EField ).f;
						{
							object e4 = ( _g as global::hscript.ExprDef_EField ).e;
							f.__hx_invoke1_o(default(double), e4);
						}
						
						break;
					}
					
					
					case 6:
					{
						string _g7 = ( _g as global::hscript.ExprDef_EBinop ).op;
						{
							object e11 = ( _g as global::hscript.ExprDef_EBinop ).e1;
							object e21 = ( _g as global::hscript.ExprDef_EBinop ).e2;
							{
								f.__hx_invoke1_o(default(double), e11);
								f.__hx_invoke1_o(default(double), e21);
							}
							
						}
						
						break;
					}
					
					
					case 7:
					{
						string _g8 = ( _g as global::hscript.ExprDef_EUnop ).op;
						bool _g9 = ( _g as global::hscript.ExprDef_EUnop ).prefix;
						{
							object e5 = ( _g as global::hscript.ExprDef_EUnop ).e;
							f.__hx_invoke1_o(default(double), e5);
						}
						
						break;
					}
					
					
					case 8:
					{
						object e6 = ( _g as global::hscript.ExprDef_ECall ).e;
						global::Array<object> args = ( _g as global::hscript.ExprDef_ECall ).@params;
						{
							f.__hx_invoke1_o(default(double), e6);
							{
								int _g10 = 0;
								while (( _g10 < args.length )) {
									object a = args[_g10];
									 ++ _g10;
									f.__hx_invoke1_o(default(double), a);
								}
								
							}
							
						}
						
						break;
					}
					
					
					case 9:
					{
						object c = ( _g as global::hscript.ExprDef_EIf ).cond;
						object e12 = ( _g as global::hscript.ExprDef_EIf ).e1;
						object e22 = ( _g as global::hscript.ExprDef_EIf ).e2;
						{
							f.__hx_invoke1_o(default(double), c);
							f.__hx_invoke1_o(default(double), e12);
							if (( e22 != null )) {
								f.__hx_invoke1_o(default(double), e22);
							}
							
						}
						
						break;
					}
					
					
					case 10:
					{
						object c1 = ( _g as global::hscript.ExprDef_EWhile ).cond;
						object e7 = ( _g as global::hscript.ExprDef_EWhile ).e;
						{
							f.__hx_invoke1_o(default(double), c1);
							f.__hx_invoke1_o(default(double), e7);
						}
						
						break;
					}
					
					
					case 11:
					{
						string _g11 = ( _g as global::hscript.ExprDef_EFor ).v;
						{
							object it = ( _g as global::hscript.ExprDef_EFor ).it;
							object e8 = ( _g as global::hscript.ExprDef_EFor ).e;
							{
								f.__hx_invoke1_o(default(double), it);
								f.__hx_invoke1_o(default(double), e8);
							}
							
						}
						
						break;
					}
					
					
					case 12:
					case 13:
					{
						break;
					}
					
					
					case 14:
					{
						global::Array<object> _g12 = ( _g as global::hscript.ExprDef_EFunction ).args;
						string _g13 = ( _g as global::hscript.ExprDef_EFunction ).name;
						global::hscript.CType _g14 = ( _g as global::hscript.ExprDef_EFunction ).ret;
						{
							object e9 = ( _g as global::hscript.ExprDef_EFunction ).e;
							f.__hx_invoke1_o(default(double), e9);
						}
						
						break;
					}
					
					
					case 15:
					{
						object e10 = ( _g as global::hscript.ExprDef_EReturn ).e;
						if (( e10 != null )) {
							f.__hx_invoke1_o(default(double), e10);
						}
						
						break;
					}
					
					
					case 16:
					{
						object e13 = ( _g as global::hscript.ExprDef_EArray ).e;
						object i = ( _g as global::hscript.ExprDef_EArray ).index;
						{
							f.__hx_invoke1_o(default(double), e13);
							f.__hx_invoke1_o(default(double), i);
						}
						
						break;
					}
					
					
					case 17:
					{
						global::Array<object> el1 = ( _g as global::hscript.ExprDef_EArrayDecl ).e;
						{
							int _g15 = 0;
							while (( _g15 < el1.length )) {
								object e14 = el1[_g15];
								 ++ _g15;
								f.__hx_invoke1_o(default(double), e14);
							}
							
						}
						
						break;
					}
					
					
					case 18:
					{
						string _g16 = ( _g as global::hscript.ExprDef_ENew ).cl;
						{
							global::Array<object> el2 = ( _g as global::hscript.ExprDef_ENew ).@params;
							{
								int _g17 = 0;
								while (( _g17 < el2.length )) {
									object e15 = el2[_g17];
									 ++ _g17;
									f.__hx_invoke1_o(default(double), e15);
								}
								
							}
							
						}
						
						break;
					}
					
					
					case 19:
					{
						object e16 = ( _g as global::hscript.ExprDef_EThrow ).e;
						f.__hx_invoke1_o(default(double), e16);
						break;
					}
					
					
					case 20:
					{
						string _g18 = ( _g as global::hscript.ExprDef_ETry ).v;
						global::hscript.CType _g19 = ( _g as global::hscript.ExprDef_ETry ).t;
						{
							object e17 = ( _g as global::hscript.ExprDef_ETry ).e;
							object c2 = ( _g as global::hscript.ExprDef_ETry ).ecatch;
							{
								f.__hx_invoke1_o(default(double), e17);
								f.__hx_invoke1_o(default(double), c2);
							}
							
						}
						
						break;
					}
					
					
					case 21:
					{
						global::Array<object> fl = ( _g as global::hscript.ExprDef_EObject ).fl;
						{
							int _g20 = 0;
							while (( _g20 < fl.length )) {
								object fi = fl[_g20];
								 ++ _g20;
								f.__hx_invoke1_o(default(double), global::haxe.lang.Runtime.getField(fi, "e", 101, true));
							}
							
						}
						
						break;
					}
					
					
					case 22:
					{
						object c3 = ( _g as global::hscript.ExprDef_ETernary ).cond;
						object e18 = ( _g as global::hscript.ExprDef_ETernary ).e1;
						object e23 = ( _g as global::hscript.ExprDef_ETernary ).e2;
						{
							f.__hx_invoke1_o(default(double), c3);
							f.__hx_invoke1_o(default(double), e18);
							f.__hx_invoke1_o(default(double), e23);
						}
						
						break;
					}
					
					
					case 23:
					{
						object e19 = ( _g as global::hscript.ExprDef_ESwitch ).e;
						global::Array<object> cases = ( _g as global::hscript.ExprDef_ESwitch ).cases;
						object def = ( _g as global::hscript.ExprDef_ESwitch ).defaultExpr;
						{
							f.__hx_invoke1_o(default(double), e19);
							{
								int _g21 = 0;
								while (( _g21 < cases.length )) {
									object c4 = cases[_g21];
									 ++ _g21;
									{
										int _g22 = 0;
										global::Array<object> _g23 = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (global::haxe.lang.Runtime.getField(c4, "values", 1337394146, true)) ))) );
										while (( _g22 < _g23.length )) {
											object v = _g23[_g22];
											 ++ _g22;
											f.__hx_invoke1_o(default(double), v);
										}
										
									}
									
									f.__hx_invoke1_o(default(double), global::haxe.lang.Runtime.getField(c4, "expr", 1126038837, true));
								}
								
							}
							
							if (( def != null )) {
								f.__hx_invoke1_o(default(double), def);
							}
							
						}
						
						break;
					}
					
					
					case 24:
					{
						object c5 = ( _g as global::hscript.ExprDef_EDoWhile ).cond;
						object e20 = ( _g as global::hscript.ExprDef_EDoWhile ).e;
						{
							f.__hx_invoke1_o(default(double), c5);
							f.__hx_invoke1_o(default(double), e20);
						}
						
						break;
					}
					
					
					case 25:
					{
						string name = ( _g as global::hscript.ExprDef_EMeta ).name;
						global::Array<object> args1 = ( _g as global::hscript.ExprDef_EMeta ).args;
						object e24 = ( _g as global::hscript.ExprDef_EMeta ).e;
						{
							if (( args1 != null )) {
								int _g24 = 0;
								while (( _g24 < args1.length )) {
									object a1 = args1[_g24];
									 ++ _g24;
									f.__hx_invoke1_o(default(double), a1);
								}
								
							}
							
							f.__hx_invoke1_o(default(double), e24);
						}
						
						break;
					}
					
					
					case 26:
					{
						global::hscript.CType _g25 = ( _g as global::hscript.ExprDef_ECheckType ).t;
						{
							object e25 = ( _g as global::hscript.ExprDef_ECheckType ).e;
							f.__hx_invoke1_o(default(double), e25);
						}
						
						break;
					}
					
					
				}
				
			}
		}
		
		
		public static object map(object e, global::haxe.lang.Function f) {
			unchecked {
				global::hscript.ExprDef edef = null;
				global::hscript.ExprDef _g = ((global::hscript.ExprDef) (global::haxe.lang.Runtime.getField(e, "e", 101, true)) );
				switch (_g._hx_index) {
					case 0:
					{
						global::hscript.Const _g1 = ( _g as global::hscript.ExprDef_EConst ).c;
						edef = ((global::hscript.ExprDef) (global::haxe.lang.Runtime.getField(e, "e", 101, true)) );
						break;
					}
					
					
					case 1:
					{
						string _g2 = ( _g as global::hscript.ExprDef_EIdent ).v;
						edef = ((global::hscript.ExprDef) (global::haxe.lang.Runtime.getField(e, "e", 101, true)) );
						break;
					}
					
					
					case 2:
					{
						string n = ( _g as global::hscript.ExprDef_EVar ).n;
						global::hscript.CType t = ( _g as global::hscript.ExprDef_EVar ).t;
						object e1 = ( _g as global::hscript.ExprDef_EVar ).e;
						edef = global::hscript.ExprDef.EVar(n, t, ( (( e1 != null )) ? (((object) (f.__hx_invoke1_o(default(double), e1)) )) : (null) ));
						break;
					}
					
					
					case 3:
					{
						object e2 = ( _g as global::hscript.ExprDef_EParent ).e;
						edef = global::hscript.ExprDef.EParent(((object) (f.__hx_invoke1_o(default(double), e2)) ));
						break;
					}
					
					
					case 4:
					{
						global::Array<object> el = ( _g as global::hscript.ExprDef_EBlock ).e;
						global::Array<object> _g3 = new global::Array<object>(new object[]{});
						{
							int _g4 = 0;
							while (( _g4 < el.length )) {
								object e3 = el[_g4];
								 ++ _g4;
								_g3.push(((object) (f.__hx_invoke1_o(default(double), e3)) ));
							}
							
						}
						
						edef = global::hscript.ExprDef.EBlock(_g3);
						break;
					}
					
					
					case 5:
					{
						object e4 = ( _g as global::hscript.ExprDef_EField ).e;
						string fi = ( _g as global::hscript.ExprDef_EField ).f;
						edef = global::hscript.ExprDef.EField(((object) (f.__hx_invoke1_o(default(double), e4)) ), fi);
						break;
					}
					
					
					case 6:
					{
						string op = ( _g as global::hscript.ExprDef_EBinop ).op;
						object e11 = ( _g as global::hscript.ExprDef_EBinop ).e1;
						object e21 = ( _g as global::hscript.ExprDef_EBinop ).e2;
						edef = global::hscript.ExprDef.EBinop(op, ((object) (f.__hx_invoke1_o(default(double), e11)) ), ((object) (f.__hx_invoke1_o(default(double), e21)) ));
						break;
					}
					
					
					case 7:
					{
						string op1 = ( _g as global::hscript.ExprDef_EUnop ).op;
						bool pre = ( _g as global::hscript.ExprDef_EUnop ).prefix;
						object e5 = ( _g as global::hscript.ExprDef_EUnop ).e;
						edef = global::hscript.ExprDef.EUnop(op1, pre, ((object) (f.__hx_invoke1_o(default(double), e5)) ));
						break;
					}
					
					
					case 8:
					{
						object e6 = ( _g as global::hscript.ExprDef_ECall ).e;
						global::Array<object> args = ( _g as global::hscript.ExprDef_ECall ).@params;
						object edef1 = ((object) (f.__hx_invoke1_o(default(double), e6)) );
						global::Array<object> _g5 = new global::Array<object>(new object[]{});
						{
							int _g6 = 0;
							while (( _g6 < args.length )) {
								object a = args[_g6];
								 ++ _g6;
								_g5.push(((object) (f.__hx_invoke1_o(default(double), a)) ));
							}
							
						}
						
						edef = global::hscript.ExprDef.ECall(edef1, _g5);
						break;
					}
					
					
					case 9:
					{
						object c = ( _g as global::hscript.ExprDef_EIf ).cond;
						object e12 = ( _g as global::hscript.ExprDef_EIf ).e1;
						object e22 = ( _g as global::hscript.ExprDef_EIf ).e2;
						edef = global::hscript.ExprDef.EIf(((object) (f.__hx_invoke1_o(default(double), c)) ), ((object) (f.__hx_invoke1_o(default(double), e12)) ), ( (( e22 != null )) ? (((object) (f.__hx_invoke1_o(default(double), e22)) )) : (null) ));
						break;
					}
					
					
					case 10:
					{
						object c1 = ( _g as global::hscript.ExprDef_EWhile ).cond;
						object e7 = ( _g as global::hscript.ExprDef_EWhile ).e;
						edef = global::hscript.ExprDef.EWhile(((object) (f.__hx_invoke1_o(default(double), c1)) ), ((object) (f.__hx_invoke1_o(default(double), e7)) ));
						break;
					}
					
					
					case 11:
					{
						string v = ( _g as global::hscript.ExprDef_EFor ).v;
						object it = ( _g as global::hscript.ExprDef_EFor ).it;
						object e8 = ( _g as global::hscript.ExprDef_EFor ).e;
						edef = global::hscript.ExprDef.EFor(v, ((object) (f.__hx_invoke1_o(default(double), it)) ), ((object) (f.__hx_invoke1_o(default(double), e8)) ));
						break;
					}
					
					
					case 12:
					case 13:
					{
						edef = ((global::hscript.ExprDef) (global::haxe.lang.Runtime.getField(e, "e", 101, true)) );
						break;
					}
					
					
					case 14:
					{
						global::Array<object> args1 = ( _g as global::hscript.ExprDef_EFunction ).args;
						object e9 = ( _g as global::hscript.ExprDef_EFunction ).e;
						string name = ( _g as global::hscript.ExprDef_EFunction ).name;
						global::hscript.CType t1 = ( _g as global::hscript.ExprDef_EFunction ).ret;
						edef = global::hscript.ExprDef.EFunction(args1, ((object) (f.__hx_invoke1_o(default(double), e9)) ), name, t1);
						break;
					}
					
					
					case 15:
					{
						object e10 = ( _g as global::hscript.ExprDef_EReturn ).e;
						edef = global::hscript.ExprDef.EReturn(( (( e10 != null )) ? (((object) (f.__hx_invoke1_o(default(double), e10)) )) : (null) ));
						break;
					}
					
					
					case 16:
					{
						object e13 = ( _g as global::hscript.ExprDef_EArray ).e;
						object i = ( _g as global::hscript.ExprDef_EArray ).index;
						edef = global::hscript.ExprDef.EArray(((object) (f.__hx_invoke1_o(default(double), e13)) ), ((object) (f.__hx_invoke1_o(default(double), i)) ));
						break;
					}
					
					
					case 17:
					{
						global::Array<object> el1 = ( _g as global::hscript.ExprDef_EArrayDecl ).e;
						global::Array<object> _g7 = new global::Array<object>(new object[]{});
						{
							int _g8 = 0;
							while (( _g8 < el1.length )) {
								object e14 = el1[_g8];
								 ++ _g8;
								_g7.push(((object) (f.__hx_invoke1_o(default(double), e14)) ));
							}
							
						}
						
						edef = global::hscript.ExprDef.EArrayDecl(_g7);
						break;
					}
					
					
					case 18:
					{
						string cl = ( _g as global::hscript.ExprDef_ENew ).cl;
						global::Array<object> el2 = ( _g as global::hscript.ExprDef_ENew ).@params;
						global::Array<object> _g9 = new global::Array<object>(new object[]{});
						{
							int _g10 = 0;
							while (( _g10 < el2.length )) {
								object e15 = el2[_g10];
								 ++ _g10;
								_g9.push(((object) (f.__hx_invoke1_o(default(double), e15)) ));
							}
							
						}
						
						edef = global::hscript.ExprDef.ENew(cl, _g9);
						break;
					}
					
					
					case 19:
					{
						object e16 = ( _g as global::hscript.ExprDef_EThrow ).e;
						edef = global::hscript.ExprDef.EThrow(((object) (f.__hx_invoke1_o(default(double), e16)) ));
						break;
					}
					
					
					case 20:
					{
						object e17 = ( _g as global::hscript.ExprDef_ETry ).e;
						string v1 = ( _g as global::hscript.ExprDef_ETry ).v;
						global::hscript.CType t2 = ( _g as global::hscript.ExprDef_ETry ).t;
						object c2 = ( _g as global::hscript.ExprDef_ETry ).ecatch;
						edef = global::hscript.ExprDef.ETry(((object) (f.__hx_invoke1_o(default(double), e17)) ), v1, t2, ((object) (f.__hx_invoke1_o(default(double), c2)) ));
						break;
					}
					
					
					case 21:
					{
						global::Array<object> fl = ( _g as global::hscript.ExprDef_EObject ).fl;
						global::Array<object> _g11 = new global::Array<object>(new object[]{});
						{
							int _g12 = 0;
							while (( _g12 < fl.length )) {
								object fi1 = fl[_g12];
								 ++ _g12;
								string fi2 = global::haxe.lang.Runtime.toString(global::haxe.lang.Runtime.getField(fi1, "name", 1224700491, true));
								object __temp_stmt7 = null;
								{
									object __temp_odecl1 = ((object) (f.__hx_invoke1_o(default(double), global::haxe.lang.Runtime.getField(fi1, "e", 101, true))) );
									__temp_stmt7 = new global::haxe.lang.DynamicObject(new int[]{101, 1224700491}, new object[]{__temp_odecl1, fi2}, new int[]{}, new double[]{});
								}
								
								_g11.push(__temp_stmt7);
							}
							
						}
						
						edef = global::hscript.ExprDef.EObject(_g11);
						break;
					}
					
					
					case 22:
					{
						object c3 = ( _g as global::hscript.ExprDef_ETernary ).cond;
						object e18 = ( _g as global::hscript.ExprDef_ETernary ).e1;
						object e23 = ( _g as global::hscript.ExprDef_ETernary ).e2;
						edef = global::hscript.ExprDef.ETernary(((object) (f.__hx_invoke1_o(default(double), c3)) ), ((object) (f.__hx_invoke1_o(default(double), e18)) ), ((object) (f.__hx_invoke1_o(default(double), e23)) ));
						break;
					}
					
					
					case 23:
					{
						object e19 = ( _g as global::hscript.ExprDef_ESwitch ).e;
						global::Array<object> cases = ( _g as global::hscript.ExprDef_ESwitch ).cases;
						object def = ( _g as global::hscript.ExprDef_ESwitch ).defaultExpr;
						object edef2 = ((object) (f.__hx_invoke1_o(default(double), e19)) );
						global::Array<object> _g13 = new global::Array<object>(new object[]{});
						{
							int _g14 = 0;
							while (( _g14 < cases.length )) {
								object c4 = cases[_g14];
								 ++ _g14;
								global::Array<object> _g15 = new global::Array<object>(new object[]{});
								{
									int _g16 = 0;
									global::Array<object> _g17 = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (global::haxe.lang.Runtime.getField(c4, "values", 1337394146, true)) ))) );
									while (( _g16 < _g17.length )) {
										object v2 = _g17[_g16];
										 ++ _g16;
										_g15.push(((object) (f.__hx_invoke1_o(default(double), v2)) ));
									}
									
								}
								
								object __temp_stmt8 = null;
								{
									object __temp_odecl2 = ((object) (f.__hx_invoke1_o(default(double), global::haxe.lang.Runtime.getField(c4, "expr", 1126038837, true))) );
									__temp_stmt8 = new global::haxe.lang.DynamicObject(new int[]{1126038837, 1337394146}, new object[]{__temp_odecl2, _g15}, new int[]{}, new double[]{});
								}
								
								_g13.push(__temp_stmt8);
							}
							
						}
						
						edef = global::hscript.ExprDef.ESwitch(edef2, _g13, ( (( def == null )) ? (null) : (((object) (f.__hx_invoke1_o(default(double), def)) )) ));
						break;
					}
					
					
					case 24:
					{
						object c5 = ( _g as global::hscript.ExprDef_EDoWhile ).cond;
						object e20 = ( _g as global::hscript.ExprDef_EDoWhile ).e;
						edef = global::hscript.ExprDef.EDoWhile(((object) (f.__hx_invoke1_o(default(double), c5)) ), ((object) (f.__hx_invoke1_o(default(double), e20)) ));
						break;
					}
					
					
					case 25:
					{
						string name1 = ( _g as global::hscript.ExprDef_EMeta ).name;
						global::Array<object> args2 = ( _g as global::hscript.ExprDef_EMeta ).args;
						object e24 = ( _g as global::hscript.ExprDef_EMeta ).e;
						global::Array<object> edef3 = null;
						if (( args2 == null )) {
							edef3 = null;
						}
						else {
							global::Array<object> _g18 = new global::Array<object>(new object[]{});
							{
								int _g19 = 0;
								while (( _g19 < args2.length )) {
									object a1 = args2[_g19];
									 ++ _g19;
									_g18.push(((object) (f.__hx_invoke1_o(default(double), a1)) ));
								}
								
							}
							
							edef3 = _g18;
						}
						
						edef = global::hscript.ExprDef.EMeta(name1, edef3, ((object) (f.__hx_invoke1_o(default(double), e24)) ));
						break;
					}
					
					
					case 26:
					{
						object e25 = ( _g as global::hscript.ExprDef_ECheckType ).e;
						global::hscript.CType t3 = ( _g as global::hscript.ExprDef_ECheckType ).t;
						edef = global::hscript.ExprDef.ECheckType(((object) (f.__hx_invoke1_o(default(double), e25)) ), t3);
						break;
					}
					
					
				}
				
				{
					int __temp_odecl3 = ((int) (global::haxe.lang.Runtime.getField_f(e, "pmin", 1247475490, true)) );
					int __temp_odecl4 = ((int) (global::haxe.lang.Runtime.getField_f(e, "pmax", 1247473716, true)) );
					string __temp_odecl5 = global::haxe.lang.Runtime.toString(global::haxe.lang.Runtime.getField(e, "origin", 1258363366, true));
					int __temp_odecl6 = ((int) (global::haxe.lang.Runtime.getField_f(e, "line", 1202919412, true)) );
					return new global::haxe.lang.DynamicObject(new int[]{101, 1258363366}, new object[]{edef, __temp_odecl5}, new int[]{1202919412, 1247473716, 1247475490}, new double[]{((double) (__temp_odecl6) ), ((double) (__temp_odecl4) ), ((double) (__temp_odecl3) )});
				}
				
			}
		}
		
		
		public static global::hscript.ExprDef expr(object e) {
			return ((global::hscript.ExprDef) (global::haxe.lang.Runtime.getField(e, "e", 101, true)) );
		}
		
		
		public static object mk(global::hscript.ExprDef e, object p) {
			{
				int __temp_odecl1 = ((int) (global::haxe.lang.Runtime.getField_f(p, "pmin", 1247475490, true)) );
				int __temp_odecl2 = ((int) (global::haxe.lang.Runtime.getField_f(p, "pmax", 1247473716, true)) );
				string __temp_odecl3 = global::haxe.lang.Runtime.toString(global::haxe.lang.Runtime.getField(p, "origin", 1258363366, true));
				int __temp_odecl4 = ((int) (global::haxe.lang.Runtime.getField_f(p, "line", 1202919412, true)) );
				return new global::haxe.lang.DynamicObject(new int[]{101, 1258363366}, new object[]{e, __temp_odecl3}, new int[]{1202919412, 1247473716, 1247475490}, new double[]{((double) (__temp_odecl4) ), ((double) (__temp_odecl2) ), ((double) (__temp_odecl1) )});
			}
			
		}
		
		
	}
}


