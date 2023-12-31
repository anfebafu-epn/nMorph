// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.fields {
	public class IntegerSentence : global::nMorph.framework.orm.common.sentences.FieldSentence {
		
		static IntegerSentence() {
			global::nMorph.framework.orm.common.fields.IntegerSentence.__rtti = "<class path=\"nMorph.framework.orm.common.fields.IntegerSentence\" params=\"\">\n\t<extends path=\"nMorph.framework.orm.common.sentences.FieldSentence\"/>\n\t<ValidateDBCompatibility public=\"1\" set=\"method\" line=\"19\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<x path=\"Void\"/>\n</f></ValidateDBCompatibility>\n\t<Equals public=\"1\" set=\"method\" line=\"23\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></Equals>\n\t<Different public=\"1\" set=\"method\" line=\"28\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></Different>\n\t<LessThan public=\"1\" set=\"method\" line=\"33\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></LessThan>\n\t<LessThanAndEquals public=\"1\" set=\"method\" line=\"38\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></LessThanAndEquals>\n\t<MoreThan public=\"1\" set=\"method\" line=\"43\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></MoreThan>\n\t<MoreThanAndEquals public=\"1\" set=\"method\" line=\"48\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></MoreThanAndEquals>\n\t<IsNull public=\"1\" set=\"method\" line=\"53\"><f a=\"\"><c path=\"nMorph.framework.orm.common.conditions.Condition\"/></f></IsNull>\n\t<IsNotNull public=\"1\" set=\"method\" line=\"57\"><f a=\"\"><c path=\"nMorph.framework.orm.common.conditions.Condition\"/></f></IsNotNull>\n\t<SET public=\"1\" set=\"method\" line=\"61\"><f a=\"IntValue\">\n\t<x path=\"Int\"/>\n\t<c path=\"nMorph.framework.orm.interfaces.ISet\"/>\n</f></SET>\n\t<new public=\"1\" set=\"method\" line=\"15\"><f a=\"FieldTable:FieldName:Nullable:IsPrimaryKey\">\n\t<c path=\"String\"/>\n\t<c path=\"String\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.NullableEnum\"/>\n\t<x path=\"Bool\"/>\n\t<x path=\"Void\"/>\n</f></new>\n\t<meta>\n\t\t<m n=\":directlyUsed\"/>\n\t\t<m n=\":hxGen\"/>\n\t\t<m n=\":keep\"/>\n\t</meta>\n</class>";
		}
		
		
		public IntegerSentence(global::haxe.lang.EmptyObject empty) : base(global::haxe.lang.EmptyObject.EMPTY) {
		}
		
		
		public IntegerSentence(string FieldTable, string FieldName, global::nMorph.framework.orm.common.enums.NullableEnum Nullable, bool IsPrimaryKey) : base(global::haxe.lang.EmptyObject.EMPTY) {
			global::nMorph.framework.orm.common.fields.IntegerSentence.__hx_ctor_nMorph_framework_orm_common_fields_IntegerSentence(this, FieldTable, FieldName, Nullable, IsPrimaryKey);
		}
		
		
		protected static void __hx_ctor_nMorph_framework_orm_common_fields_IntegerSentence(global::nMorph.framework.orm.common.fields.IntegerSentence __hx_this, string FieldTable, string FieldName, global::nMorph.framework.orm.common.enums.NullableEnum Nullable, bool IsPrimaryKey) {
			global::nMorph.framework.orm.common.sentences.FieldSentence.__hx_ctor_nMorph_framework_orm_common_sentences_FieldSentence(__hx_this, FieldTable, FieldName, global::nMorph.framework.orm.common.enums.DBTypeEnum.INTEGER, global::nMorph.framework.orm.common.enums.HaxeTypeEnum.INT, default(global::haxe.lang.Null<int>), default(global::haxe.lang.Null<int>), Nullable, IsPrimaryKey);
		}
		
		
		public static new string __rtti;
		
		public virtual void ValidateDBCompatibility(int IntValue) {
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition Equals(int IntValue) {
			this.ValidateDBCompatibility(IntValue);
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.Equal, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition Different(int IntValue) {
			this.ValidateDBCompatibility(IntValue);
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.Different, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition LessThan(int IntValue) {
			this.ValidateDBCompatibility(IntValue);
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.LessThan, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition LessThanAndEquals(int IntValue) {
			this.ValidateDBCompatibility(IntValue);
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.LessThanAndEquals, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition MoreThan(int IntValue) {
			this.ValidateDBCompatibility(IntValue);
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.MoreThan, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition MoreThanAndEquals(int IntValue) {
			this.ValidateDBCompatibility(IntValue);
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.MoreThanAndEquals, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition IsNull() {
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.Equal, global::nMorph.framework.orm.common.sentences.Val.@int(default(global::haxe.lang.Null<int>)));
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition IsNotNull() {
			return global::nMorph.framework.orm.common.conditions.Condition.SET(this, global::nMorph.framework.orm.common.enums.Op.Different, global::nMorph.framework.orm.common.sentences.Val.@int(default(global::haxe.lang.Null<int>)));
		}
		
		
		public virtual global::nMorph.framework.orm.interfaces.ISet SET(int IntValue) {
			global::nMorph.framework.orm.interfaces.ISet asg = global::nMorph.framework.orm.common.sentences.Assign.SET(this, global::nMorph.framework.orm.common.sentences.Val.@int(new global::haxe.lang.Null<int>(IntValue, true)));
			return asg;
		}
		
		
		public override object __hx_getField(string field, int hash, bool throwErrors, bool isCheck, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 4142978:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "SET", 4142978)) );
					}
					
					
					case 1678411344:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "IsNotNull", 1678411344)) );
					}
					
					
					case 453629873:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "IsNull", 453629873)) );
					}
					
					
					case 1253923808:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "MoreThanAndEquals", 1253923808)) );
					}
					
					
					case 804763062:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "MoreThan", 804763062)) );
					}
					
					
					case 979246492:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "LessThanAndEquals", 979246492)) );
					}
					
					
					case 1290148730:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "LessThan", 1290148730)) );
					}
					
					
					case 1256505177:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "Different", 1256505177)) );
					}
					
					
					case 1955029599:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "Equals", 1955029599)) );
					}
					
					
					case 475410908:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "ValidateDBCompatibility", 475410908)) );
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
					case 4142978:
					{
						return this.SET(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 1678411344:
					{
						return this.IsNotNull();
					}
					
					
					case 453629873:
					{
						return this.IsNull();
					}
					
					
					case 1253923808:
					{
						return this.MoreThanAndEquals(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 804763062:
					{
						return this.MoreThan(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 979246492:
					{
						return this.LessThanAndEquals(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 1290148730:
					{
						return this.LessThan(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 1256505177:
					{
						return this.Different(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 1955029599:
					{
						return this.Equals(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
					}
					
					
					case 475410908:
					{
						this.ValidateDBCompatibility(((int) (global::haxe.lang.Runtime.toInt(dynargs[0])) ));
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
		
		
	}
}


