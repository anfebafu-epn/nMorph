// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
namespace nMorph.framework.orm.common.conditions {
	public class Condition : global::haxe.lang.HxObject, global::nMorph.framework.orm.interfaces.ICondition {
		
		static Condition() {
			global::nMorph.framework.orm.common.conditions.Condition.__rtti = "<class path=\"nMorph.framework.orm.common.conditions.Condition\" params=\"\">\n\t<implements path=\"nMorph.framework.orm.interfaces.ICondition\"/>\n\t<SET public=\"1\" set=\"method\" line=\"28\" static=\"1\"><f a=\"BaseExpression:Operator:ExpressionToCompare\">\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.Op\"/>\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></SET>\n\t<BaseExpression><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></BaseExpression>\n\t<Operator><e path=\"nMorph.framework.orm.common.enums.Op\"/></Operator>\n\t<ExpressionToCompare><c path=\"nMorph.framework.orm.interfaces.ISentence\"/></ExpressionToCompare>\n\t<LogicOperator public=\"1\" get=\"null\" set=\"accessor\">\n\t\t<e path=\"nMorph.framework.orm.common.enums.LogicOperatorEnum\"/>\n\t\t<meta><m n=\":isVar\"/></meta>\n\t</LogicOperator>\n\t<Conditions expr=\"new Array&lt;ICondition&gt;()\" line=\"18\">\n\t\t<c path=\"Array\"><c path=\"nMorph.framework.orm.interfaces.ICondition\"/></c>\n\t\t<meta><m n=\":value\"><e><![CDATA[new Array<ICondition>()]]></e></m></meta>\n\t</Conditions>\n\t<CurrentSQL><c path=\"nMorph.framework.orm.lang.SQL\"/></CurrentSQL>\n\t<RegisterQuery public=\"1\" set=\"method\" line=\"33\"><f a=\"CurrentSQL\">\n\t<c path=\"nMorph.framework.orm.interfaces.ILang\"/>\n\t<x path=\"Void\"/>\n</f></RegisterQuery>\n\t<AND_Ex public=\"1\" set=\"method\" line=\"43\"><f a=\"BaseExpression:Operator:ExpressionToCompare\">\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.Op\"/>\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></AND_Ex>\n\t<AND public=\"1\" set=\"method\" line=\"52\"><f a=\"AndCondition\">\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></AND>\n\t<OR_Ex public=\"1\" set=\"method\" line=\"61\"><f a=\"BaseExpression:Operator:ExpressionToCompare\">\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.Op\"/>\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></OR_Ex>\n\t<OR public=\"1\" set=\"method\" line=\"70\"><f a=\"OrCondition\">\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n\t<c path=\"nMorph.framework.orm.common.conditions.Condition\"/>\n</f></OR>\n\t<AddCondition public=\"1\" set=\"method\" line=\"79\"><f a=\"ConditionToAdd\">\n\t<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\n\t<x path=\"Void\"/>\n</f></AddCondition>\n\t<SCRIPT_PART public=\"1\" set=\"method\" line=\"84\"><f a=\"?args\">\n\t<c path=\"String\"/>\n\t<x path=\"Void\"/>\n</f></SCRIPT_PART>\n\t<RenderCurrentCondition set=\"method\" line=\"181\"><f a=\"\"><x path=\"Void\"/></f></RenderCurrentCondition>\n\t<set_LogicOperator public=\"1\" set=\"method\" line=\"457\"><f a=\"value\">\n\t<e path=\"nMorph.framework.orm.common.enums.LogicOperatorEnum\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.LogicOperatorEnum\"/>\n</f></set_LogicOperator>\n\t<new public=\"1\" set=\"method\" line=\"21\"><f a=\"BaseExpression:Operator:ExpressionToCompare:LogicOperator\">\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.Op\"/>\n\t<c path=\"nMorph.framework.orm.interfaces.ISentence\"/>\n\t<e path=\"nMorph.framework.orm.common.enums.LogicOperatorEnum\"/>\n\t<x path=\"Void\"/>\n</f></new>\n\t<meta>\n\t\t<m n=\":hxGen\"/>\n\t\t<m n=\":keepSub\"/>\n\t\t<m n=\":rtti\"/>\n\t</meta>\n</class>";
		}
		
		
		public Condition(global::haxe.lang.EmptyObject empty) {
		}
		
		
		public Condition(global::nMorph.framework.orm.interfaces.ISentence BaseExpression, global::nMorph.framework.orm.common.enums.Op Operator, global::nMorph.framework.orm.interfaces.ISentence ExpressionToCompare, global::nMorph.framework.orm.common.enums.LogicOperatorEnum LogicOperator) {
			global::nMorph.framework.orm.common.conditions.Condition.__hx_ctor_nMorph_framework_orm_common_conditions_Condition(this, BaseExpression, Operator, ExpressionToCompare, LogicOperator);
		}
		
		
		protected static void __hx_ctor_nMorph_framework_orm_common_conditions_Condition(global::nMorph.framework.orm.common.conditions.Condition __hx_this, global::nMorph.framework.orm.interfaces.ISentence BaseExpression, global::nMorph.framework.orm.common.enums.Op Operator, global::nMorph.framework.orm.interfaces.ISentence ExpressionToCompare, global::nMorph.framework.orm.common.enums.LogicOperatorEnum LogicOperator) {
			__hx_this.Conditions = new global::Array<object>();
			{
				__hx_this.BaseExpression = BaseExpression;
				__hx_this.Operator = Operator;
				__hx_this.ExpressionToCompare = ExpressionToCompare;
				__hx_this.set_LogicOperator(LogicOperator);
			}
			
		}
		
		
		public static string __rtti;
		
		public static global::nMorph.framework.orm.common.conditions.Condition SET(global::nMorph.framework.orm.interfaces.ISentence BaseExpression, global::nMorph.framework.orm.common.enums.Op Operator, global::nMorph.framework.orm.interfaces.ISentence ExpressionToCompare) {
			global::nMorph.framework.orm.common.conditions.Condition c = new global::nMorph.framework.orm.common.conditions.Condition(((global::nMorph.framework.orm.interfaces.ISentence) (BaseExpression) ), ((global::nMorph.framework.orm.common.enums.Op) (Operator) ), ((global::nMorph.framework.orm.interfaces.ISentence) (ExpressionToCompare) ), ((global::nMorph.framework.orm.common.enums.LogicOperatorEnum) (global::nMorph.framework.orm.common.enums.LogicOperatorEnum.START) ));
			return c;
		}
		
		
		public global::nMorph.framework.orm.interfaces.ISentence BaseExpression;
		
		public global::nMorph.framework.orm.common.enums.Op Operator;
		
		public global::nMorph.framework.orm.interfaces.ISentence ExpressionToCompare;
		
		public global::nMorph.framework.orm.common.enums.LogicOperatorEnum LogicOperator;
		
		public global::Array<object> Conditions;
		
		public global::nMorph.framework.orm.lang.SQL CurrentSQL;
		
		public virtual void RegisterQuery(global::nMorph.framework.orm.interfaces.ILang CurrentSQL) {
			this.CurrentSQL = ((global::nMorph.framework.orm.lang.SQL) (CurrentSQL) );
			this.BaseExpression.RegisterQuery(CurrentSQL);
			this.ExpressionToCompare.RegisterQuery(CurrentSQL);
			{
				int _g = 0;
				global::Array<object> _g1 = this.Conditions;
				while (( _g < _g1.length )) {
					global::nMorph.framework.orm.interfaces.ICondition cond = ((global::nMorph.framework.orm.interfaces.ICondition) (_g1[_g]) );
					 ++ _g;
					cond.RegisterQuery(CurrentSQL);
				}
				
			}
			
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition AND_Ex(global::nMorph.framework.orm.interfaces.ISentence BaseExpression, global::nMorph.framework.orm.common.enums.Op Operator, global::nMorph.framework.orm.interfaces.ISentence ExpressionToCompare) {
			global::nMorph.framework.orm.common.conditions.Condition c = new global::nMorph.framework.orm.common.conditions.Condition(((global::nMorph.framework.orm.interfaces.ISentence) (BaseExpression) ), ((global::nMorph.framework.orm.common.enums.Op) (Operator) ), ((global::nMorph.framework.orm.interfaces.ISentence) (ExpressionToCompare) ), ((global::nMorph.framework.orm.common.enums.LogicOperatorEnum) (global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND) ));
			BaseExpression.RegisterQuery(this.CurrentSQL);
			ExpressionToCompare.RegisterQuery(this.CurrentSQL);
			c.RegisterQuery(this.CurrentSQL);
			this.Conditions.push(c);
			return this;
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition AND(global::nMorph.framework.orm.common.conditions.Condition AndCondition) {
			AndCondition.set_LogicOperator(global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND);
			this.BaseExpression.RegisterQuery(this.CurrentSQL);
			this.ExpressionToCompare.RegisterQuery(this.CurrentSQL);
			AndCondition.RegisterQuery(this.CurrentSQL);
			this.Conditions.push(AndCondition);
			return this;
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition OR_Ex(global::nMorph.framework.orm.interfaces.ISentence BaseExpression, global::nMorph.framework.orm.common.enums.Op Operator, global::nMorph.framework.orm.interfaces.ISentence ExpressionToCompare) {
			global::nMorph.framework.orm.common.conditions.Condition c = new global::nMorph.framework.orm.common.conditions.Condition(((global::nMorph.framework.orm.interfaces.ISentence) (BaseExpression) ), ((global::nMorph.framework.orm.common.enums.Op) (Operator) ), ((global::nMorph.framework.orm.interfaces.ISentence) (ExpressionToCompare) ), ((global::nMorph.framework.orm.common.enums.LogicOperatorEnum) (global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR) ));
			BaseExpression.RegisterQuery(this.CurrentSQL);
			ExpressionToCompare.RegisterQuery(this.CurrentSQL);
			c.RegisterQuery(this.CurrentSQL);
			this.Conditions.push(c);
			return this;
		}
		
		
		public virtual global::nMorph.framework.orm.common.conditions.Condition OR(global::nMorph.framework.orm.common.conditions.Condition OrCondition) {
			OrCondition.set_LogicOperator(global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR);
			this.BaseExpression.RegisterQuery(this.CurrentSQL);
			this.ExpressionToCompare.RegisterQuery(this.CurrentSQL);
			OrCondition.RegisterQuery(this.CurrentSQL);
			this.Conditions.push(OrCondition);
			return this;
		}
		
		
		public virtual void AddCondition(global::nMorph.framework.orm.interfaces.ICondition ConditionToAdd) {
			ConditionToAdd.RegisterQuery(this.CurrentSQL);
			this.Conditions.push(ConditionToAdd);
		}
		
		
		public virtual void SCRIPT_PART(string args) {
			unchecked {
				switch (this.CurrentSQL.getCurrentEngine()._hx_index) {
					case 0:
					{
						if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.START )) {
							this.RenderCurrentCondition();
							{
								int _g = 0;
								global::Array<object> _g1 = this.Conditions;
								while (( _g < _g1.length )) {
									global::nMorph.framework.orm.interfaces.ICondition condition = ((global::nMorph.framework.orm.interfaces.ICondition) (_g1[_g]) );
									 ++ _g;
									condition.SCRIPT_PART(null);
								}
								
							}
							
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND )) {
							this.CurrentSQL.AddBlock(" AND ");
							this.RenderCurrentCondition();
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR )) {
							this.CurrentSQL.AddBlock(" OR ");
							this.RenderCurrentCondition();
						}
						
						break;
					}
					
					
					case 1:
					{
						if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.START )) {
							this.RenderCurrentCondition();
							{
								int _g2 = 0;
								global::Array<object> _g3 = this.Conditions;
								while (( _g2 < _g3.length )) {
									global::nMorph.framework.orm.interfaces.ICondition condition1 = ((global::nMorph.framework.orm.interfaces.ICondition) (_g3[_g2]) );
									 ++ _g2;
									condition1.SCRIPT_PART(null);
								}
								
							}
							
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND )) {
							this.CurrentSQL.AddBlock(" AND ");
							this.RenderCurrentCondition();
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR )) {
							this.CurrentSQL.AddBlock(" OR ");
							this.RenderCurrentCondition();
						}
						
						break;
					}
					
					
					case 2:
					{
						if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.START )) {
							this.RenderCurrentCondition();
							{
								int _g4 = 0;
								global::Array<object> _g5 = this.Conditions;
								while (( _g4 < _g5.length )) {
									global::nMorph.framework.orm.interfaces.ICondition condition2 = ((global::nMorph.framework.orm.interfaces.ICondition) (_g5[_g4]) );
									 ++ _g4;
									condition2.SCRIPT_PART(null);
								}
								
							}
							
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND )) {
							this.CurrentSQL.AddBlock(" AND ");
							this.RenderCurrentCondition();
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR )) {
							this.CurrentSQL.AddBlock(" OR ");
							this.RenderCurrentCondition();
						}
						
						break;
					}
					
					
					case 3:
					{
						if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.START )) {
							this.RenderCurrentCondition();
							{
								int _g6 = 0;
								global::Array<object> _g7 = this.Conditions;
								while (( _g6 < _g7.length )) {
									global::nMorph.framework.orm.interfaces.ICondition condition3 = ((global::nMorph.framework.orm.interfaces.ICondition) (_g7[_g6]) );
									 ++ _g6;
									condition3.SCRIPT_PART(null);
								}
								
							}
							
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND )) {
							this.CurrentSQL.AddBlock(" AND ");
							this.RenderCurrentCondition();
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR )) {
							this.CurrentSQL.AddBlock(" OR ");
							this.RenderCurrentCondition();
						}
						
						break;
					}
					
					
					case 4:
					{
						if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.START )) {
							this.RenderCurrentCondition();
							{
								int _g8 = 0;
								global::Array<object> _g9 = this.Conditions;
								while (( _g8 < _g9.length )) {
									global::nMorph.framework.orm.interfaces.ICondition condition4 = ((global::nMorph.framework.orm.interfaces.ICondition) (_g9[_g8]) );
									 ++ _g8;
									condition4.SCRIPT_PART(null);
								}
								
							}
							
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.AND )) {
							this.CurrentSQL.AddBlock(" AND ");
							this.RenderCurrentCondition();
						}
						else if (( this.LogicOperator == global::nMorph.framework.orm.common.enums.LogicOperatorEnum.OR )) {
							this.CurrentSQL.AddBlock(" OR ");
							this.RenderCurrentCondition();
						}
						
						break;
					}
					
					
				}
				
			}
		}
		
		
		public virtual void RenderCurrentCondition() {
			unchecked {
				switch (this.CurrentSQL.getCurrentEngine()._hx_index) {
					case 0:
					{
						this.BaseExpression.SCRIPT_PART(null);
						if (this.ExpressionToCompare.IsNullValue()) {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" is not NULL ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
							}
							
						}
						else {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" > ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" < ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" >= ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" <= ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" <> ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" = ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" in ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" not in ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" like ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" not like ");
									break;
								}
								
								
							}
							
							this.ExpressionToCompare.SCRIPT_PART(null);
						}
						
						break;
					}
					
					
					case 1:
					{
						this.BaseExpression.SCRIPT_PART(null);
						if (this.ExpressionToCompare.IsNullValue()) {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" is not NULL ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
							}
							
						}
						else {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" > ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" < ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" >= ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" <= ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" <> ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" = ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" in ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" not in ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" like ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" not like ");
									break;
								}
								
								
							}
							
							this.ExpressionToCompare.SCRIPT_PART(null);
						}
						
						break;
					}
					
					
					case 2:
					{
						this.BaseExpression.SCRIPT_PART(null);
						if (this.ExpressionToCompare.IsNullValue()) {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" is not NULL ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
							}
							
						}
						else {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" > ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" < ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" >= ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" <= ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" <> ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" = ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" in ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" not in ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" like ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" not like ");
									break;
								}
								
								
							}
							
							this.ExpressionToCompare.SCRIPT_PART(null);
						}
						
						break;
					}
					
					
					case 3:
					{
						this.BaseExpression.SCRIPT_PART(null);
						if (this.ExpressionToCompare.IsNullValue()) {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" is not NULL ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
							}
							
						}
						else {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" > ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" < ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" >= ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" <= ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" <> ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" = ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" in ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" not in ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" like ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" not like ");
									break;
								}
								
								
							}
							
							this.ExpressionToCompare.SCRIPT_PART(null);
						}
						
						break;
					}
					
					
					case 4:
					{
						this.BaseExpression.SCRIPT_PART(null);
						if (this.ExpressionToCompare.IsNullValue()) {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" is not NULL ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" is NULL ");
									break;
								}
								
								
							}
							
						}
						else {
							switch (this.Operator._hx_index) {
								case 0:
								{
									this.CurrentSQL.AddBlock(" > ");
									break;
								}
								
								
								case 1:
								{
									this.CurrentSQL.AddBlock(" < ");
									break;
								}
								
								
								case 2:
								{
									this.CurrentSQL.AddBlock(" >= ");
									break;
								}
								
								
								case 3:
								{
									this.CurrentSQL.AddBlock(" <= ");
									break;
								}
								
								
								case 4:
								{
									this.CurrentSQL.AddBlock(" <> ");
									break;
								}
								
								
								case 5:
								{
									this.CurrentSQL.AddBlock(" = ");
									break;
								}
								
								
								case 6:
								{
									this.CurrentSQL.AddBlock(" in ");
									break;
								}
								
								
								case 7:
								{
									this.CurrentSQL.AddBlock(" not in ");
									break;
								}
								
								
								case 8:
								{
									this.CurrentSQL.AddBlock(" like ");
									break;
								}
								
								
								case 9:
								{
									this.CurrentSQL.AddBlock(" not like ");
									break;
								}
								
								
							}
							
							this.ExpressionToCompare.SCRIPT_PART(null);
						}
						
						break;
					}
					
					
				}
				
			}
		}
		
		
		public virtual global::nMorph.framework.orm.common.enums.LogicOperatorEnum set_LogicOperator(global::nMorph.framework.orm.common.enums.LogicOperatorEnum @value) {
			return this.LogicOperator = @value;
		}
		
		
		public override object __hx_setField(string field, int hash, object @value, bool handleProperties) {
			unchecked {
				switch (hash) {
					case 1038308213:
					{
						this.CurrentSQL = ((global::nMorph.framework.orm.lang.SQL) (@value) );
						return @value;
					}
					
					
					case 669614744:
					{
						this.Conditions = ((global::Array<object>) (global::Array<object>.__hx_cast<object>(((global::Array) (@value) ))) );
						return @value;
					}
					
					
					case 548310786:
					{
						if (handleProperties) {
							this.set_LogicOperator(((global::nMorph.framework.orm.common.enums.LogicOperatorEnum) (@value) ));
							return @value;
						}
						else {
							this.LogicOperator = ((global::nMorph.framework.orm.common.enums.LogicOperatorEnum) (@value) );
							return @value;
						}
						
					}
					
					
					case 1457234834:
					{
						this.ExpressionToCompare = ((global::nMorph.framework.orm.interfaces.ISentence) (@value) );
						return @value;
					}
					
					
					case 505731012:
					{
						this.Operator = ((global::nMorph.framework.orm.common.enums.Op) (@value) );
						return @value;
					}
					
					
					case 615362857:
					{
						this.BaseExpression = ((global::nMorph.framework.orm.interfaces.ISentence) (@value) );
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
					case 1250718309:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "set_LogicOperator", 1250718309)) );
					}
					
					
					case 225306040:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "RenderCurrentCondition", 225306040)) );
					}
					
					
					case 2032371175:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "SCRIPT_PART", 2032371175)) );
					}
					
					
					case 1134188378:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "AddCondition", 1134188378)) );
					}
					
					
					case 17699:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "OR", 17699)) );
					}
					
					
					case 857974127:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "OR_Ex", 857974127)) );
					}
					
					
					case 3249847:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "AND", 3249847)) );
					}
					
					
					case 330205275:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "AND_Ex", 330205275)) );
					}
					
					
					case 457416069:
					{
						return ((global::haxe.lang.Function) (new global::haxe.lang.Closure(this, "RegisterQuery", 457416069)) );
					}
					
					
					case 1038308213:
					{
						return this.CurrentSQL;
					}
					
					
					case 669614744:
					{
						return this.Conditions;
					}
					
					
					case 548310786:
					{
						return this.LogicOperator;
					}
					
					
					case 1457234834:
					{
						return this.ExpressionToCompare;
					}
					
					
					case 505731012:
					{
						return this.Operator;
					}
					
					
					case 615362857:
					{
						return this.BaseExpression;
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
					case 1250718309:
					{
						return this.set_LogicOperator(((global::nMorph.framework.orm.common.enums.LogicOperatorEnum) (dynargs[0]) ));
					}
					
					
					case 225306040:
					{
						this.RenderCurrentCondition();
						break;
					}
					
					
					case 2032371175:
					{
						this.SCRIPT_PART(global::haxe.lang.Runtime.toString(( (( dynargs.Length > 0 )) ? (dynargs[0]) : (null) )));
						break;
					}
					
					
					case 1134188378:
					{
						this.AddCondition(((global::nMorph.framework.orm.interfaces.ICondition) (dynargs[0]) ));
						break;
					}
					
					
					case 17699:
					{
						return this.OR(((global::nMorph.framework.orm.common.conditions.Condition) (dynargs[0]) ));
					}
					
					
					case 857974127:
					{
						return this.OR_Ex(((global::nMorph.framework.orm.interfaces.ISentence) (dynargs[0]) ), ((global::nMorph.framework.orm.common.enums.Op) (dynargs[1]) ), ((global::nMorph.framework.orm.interfaces.ISentence) (dynargs[2]) ));
					}
					
					
					case 3249847:
					{
						return this.AND(((global::nMorph.framework.orm.common.conditions.Condition) (dynargs[0]) ));
					}
					
					
					case 330205275:
					{
						return this.AND_Ex(((global::nMorph.framework.orm.interfaces.ISentence) (dynargs[0]) ), ((global::nMorph.framework.orm.common.enums.Op) (dynargs[1]) ), ((global::nMorph.framework.orm.interfaces.ISentence) (dynargs[2]) ));
					}
					
					
					case 457416069:
					{
						this.RegisterQuery(((global::nMorph.framework.orm.interfaces.ILang) (dynargs[0]) ));
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
			baseArr.push("CurrentSQL");
			baseArr.push("Conditions");
			baseArr.push("LogicOperator");
			baseArr.push("ExpressionToCompare");
			baseArr.push("Operator");
			baseArr.push("BaseExpression");
			base.__hx_getFields(baseArr);
		}
		
		
	}
}


