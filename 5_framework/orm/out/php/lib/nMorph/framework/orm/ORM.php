<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\framework\orm;

use \nMorph\framework\orm\common\clauses\ValuesClause;
use \nMorph\framework\orm\common\clauses\OrderByClause;
use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\client\QueryRow;
use \nMorph\framework\orm\common\clauses\HavingClause;
use \nMorph\framework\orm\common\fields\RealSentence;
use \nMorph\framework\orm\client\QuerySet;
use \nMorph\framework\orm\common\sentences\SubQuerySentence;
use \nMorph\framework\orm\common\sentences\St;
use \nMorph\framework\orm\common\fields\DecimalSentence;
use \nMorph\framework\orm\common\enums\ObjectSourceTypeEnum;
use \nMorph\framework\orm\common\ddl\DropViewClause;
use \nMorph\framework\orm\client\ModelObject;
use \nMorph\framework\orm\common\sentences\Val;
use \nMorph\framework\orm\common\fields\FloatSentence;
use \nMorph\framework\orm\common\fields\DateTimeSentence;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\common\ddl\ColumnDefinition;
use \php\Boot;
use \nMorph\framework\orm\common\sentences\Fn_hx;
use \nMorph\framework\orm\common\clauses\JoinClause;
use \nMorph\framework\orm\client\QueryParameter;
use \nMorph\framework\orm\common\sentences\Mt;
use \nMorph\framework\orm\common\ddl\DropIndexClause;
use \nMorph\framework\orm\common\enums\DBTypeEnum;
use \nMorph\framework\orm\common\fields\BinarySentence;
use \nMorph\framework\orm\common\conditions\Condition;
use \nMorph\framework\orm\common\enums\JoinTypeEnum;
use \nMorph\framework\orm\common\fields\IntegerSentence;
use \nMorph\framework\orm\common\sources\InlineViewSource;
use \nMorph\framework\orm\common\clauses\GroupByClause;
use \nMorph\framework\orm\common\sentences\FieldSentence;
use \nMorph\framework\orm\common\sources\ViewSource;
use \nMorph\framework\orm\common\clauses\UpdateClause;
use \nMorph\framework\orm\common\fields\NVarcharSentence;
use \nMorph\framework\orm\common\clauses\WhereClause;
use \nMorph\framework\orm\tools\BulkRun;
use \nMorph\framework\orm\common\sentences\FieldAliasSentence;
use \nMorph\framework\orm\common\sentences\Assign;
use \nMorph\framework\orm\client\ChangeItem;
use \nMorph\framework\orm\common\enums\StTypeEnum;
use \nMorph\framework\orm\common\enums\ParameterDirectionEnum;
use \nMorph\framework\orm\client\ModelArray;
use \nMorph\framework\orm\common\fields\NBigTextSentence;
use \nMorph\framework\orm\common\fields\CharSentence;
use \nMorph\framework\orm\common\ddl\AlterColumnClause;
use \nMorph\framework\orm\common\clauses\InsertIntoClause;
use \nMorph\framework\orm\common\clauses\ColumnsClause;
use \nMorph\framework\orm\common\sentences\Cast;
use \nMorph\framework\orm\common\ddl\AddDefaultValueClause;
use \nMorph\framework\orm\client\QueryTable;
use \nMorph\framework\orm\common\sentences\FielIndexDefinitionSentences;
use \nMorph\framework\orm\common\enums\HaxeTypeEnum;
use \nMorph\framework\orm\common\ddl\AddPrimaryKeyClause;
use \nMorph\framework\orm\common\fields\NCharSentence;
use \nMorph\framework\orm\common\ddl\AlterViewClause;
use \nMorph\framework\orm\common\sentences\Ag;
use \nMorph\framework\orm\common\ddl\AlterTableClause;
use \nMorph\framework\orm\common\ddl\DropTableClause;
use \nMorph\framework\orm\common\ddl\AddColumnClause;
use \nMorph\framework\orm\common\clauses\UnionClause;
use \nMorph\framework\orm\client\QueryColumn;
use \nMorph\framework\orm\common\enums\LogicOperatorEnum;
use \nMorph\framework\orm\common\enums\FnTypeEnum;
use \nMorph\framework\orm\common\fields\VarcharSentence;
use \nMorph\framework\orm\common\clauses\SelectClause;
use \nMorph\framework\orm\common\enums\ChangeTypeEnum;
use \nMorph\framework\orm\common\ddl\ConstrainPKDefinition;
use \nMorph\framework\orm\client\QueueItem;
use \nMorph\framework\orm\common\fields\BigIntegerSentence;
use \nMorph\framework\orm\common\enums\DefaultTypeEnum;
use \nMorph\framework\orm\common\clauses\DeleteClause;
use \nMorph\framework\orm\common\enums\AgTypeEnum;
use \nMorph\framework\orm\common\ddl\DropColumnClause;
use \nMorph\framework\orm\common\sources\TableSource;
use \nMorph\framework\orm\common\sources\AliasSource;
use \nMorph\framework\orm\common\enums\CastTypeEnum;
use \nMorph\framework\orm\common\ddl\DropPrimaryKeyClause;
use \nMorph\framework\orm\common\ddl\AddForeignKeyClause;
use \nMorph\framework\orm\common\clauses\FromClause;
use \nMorph\framework\orm\client\Connector;
use \nMorph\framework\orm\common\enums\UnionTypeEnum;
use \nMorph\framework\orm\common\clauses\InsertSetClause;
use \nMorph\framework\orm\lang\DDL;
use \nMorph\framework\orm\common\fields\SmallIntegerSentence;
use \nMorph\framework\orm\common\fields\BooleanSentence;
use \nMorph\framework\orm\common\enums\ObjectEditTypeEnum;
use \nMorph\framework\orm\tools\Context;
use \nMorph\framework\orm\common\sources\StringSource;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\ddl\CreateViewClause;
use \nMorph\framework\orm\common\conditions\ConditionGroup;
use \nMorph\framework\orm\common\enums\MtTypeEnum;
use \nMorph\framework\orm\client\ModelItem;
use \nMorph\framework\orm\common\ddl\DropConstraintClause;
use \nMorph\framework\orm\common\fields\BigTextSentence;
use \nMorph\framework\orm\common\ddl\ExistClause;
use \nMorph\framework\orm\common\enums\ValuesTypeEnum;
use \nMorph\framework\orm\common\ddl\DefaultClause;
use \nMorph\framework\orm\common\ddl\CreateTableClause;
use \nMorph\framework\orm\common\enums\NullableEnum;
use \nMorph\framework\orm\common\ddl\CreateIndexClause;
use \nMorph\framework\orm\common\clauses\SetClause;

/**
 * ...
 * @author ...
 */
class ORM {
	/**
	 * @return void
	 */
	public static function main () {
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:53: characters 3-31
		\Type::getClass(Boot::getClass(ColumnsClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:54: characters 3-30
		\Type::getClass(Boot::getClass(DeleteClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:55: characters 3-29
		\Type::getClass(Boot::getClass(ExistClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:56: characters 3-28
		\Type::getClass(Boot::getClass(FromClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:57: characters 3-31
		\Type::getClass(Boot::getClass(GroupByClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:58: characters 3-30
		\Type::getClass(Boot::getClass(HavingClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:59: characters 3-34
		\Type::getClass(Boot::getClass(InsertIntoClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:60: characters 3-33
		\Type::getClass(Boot::getClass(InsertSetClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:61: characters 3-28
		\Type::getClass(Boot::getClass(JoinClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:62: characters 3-31
		\Type::getClass(Boot::getClass(OrderByClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:63: characters 3-30
		\Type::getClass(Boot::getClass(SelectClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:64: characters 3-27
		\Type::getClass(Boot::getClass(SetClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:65: characters 3-29
		\Type::getClass(Boot::getClass(UnionClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:66: characters 3-30
		\Type::getClass(Boot::getClass(UpdateClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:67: characters 3-30
		\Type::getClass(Boot::getClass(ValuesClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:68: characters 3-29
		\Type::getClass(Boot::getClass(WhereClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:71: characters 3-27
		\Type::getClass(Boot::getClass(Condition::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:72: characters 3-32
		\Type::getClass(Boot::getClass(ConditionGroup::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:75: characters 3-33
		\Type::getClass(Boot::getClass(AddColumnClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:76: characters 3-39
		\Type::getClass(Boot::getClass(AddDefaultValueClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:77: characters 3-37
		\Type::getClass(Boot::getClass(AddForeignKeyClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:78: characters 3-37
		\Type::getClass(Boot::getClass(AddPrimaryKeyClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:79: characters 3-35
		\Type::getClass(Boot::getClass(AlterColumnClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:80: characters 3-34
		\Type::getClass(Boot::getClass(AlterTableClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:81: characters 3-33
		\Type::getClass(Boot::getClass(AlterViewClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:82: characters 3-34
		\Type::getClass(Boot::getClass(ColumnDefinition::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:83: characters 3-39
		\Type::getClass(Boot::getClass(ConstrainPKDefinition::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:84: characters 3-35
		\Type::getClass(Boot::getClass(CreateIndexClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:85: characters 3-35
		\Type::getClass(Boot::getClass(CreateTableClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:86: characters 3-34
		\Type::getClass(Boot::getClass(CreateViewClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:87: characters 3-31
		\Type::getClass(Boot::getClass(DefaultClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:88: characters 3-34
		\Type::getClass(Boot::getClass(DropColumnClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:89: characters 3-38
		\Type::getClass(Boot::getClass(DropConstraintClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:90: characters 3-33
		\Type::getClass(Boot::getClass(DropIndexClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:91: characters 3-38
		\Type::getClass(Boot::getClass(DropPrimaryKeyClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:92: characters 3-33
		\Type::getClass(Boot::getClass(DropTableClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:93: characters 3-32
		\Type::getClass(Boot::getClass(DropViewClause::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:96: characters 3-28
		\Type::getClass(Boot::getClass(AgTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:97: characters 3-30
		\Type::getClass(Boot::getClass(CastTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:98: characters 3-32
		\Type::getClass(Boot::getClass(ChangeTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:99: characters 3-28
		\Type::getClass(Boot::getClass(DBTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:100: characters 3-33
		\Type::getClass(Boot::getClass(DefaultTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:101: characters 3-28
		\Type::getClass(Boot::getClass(FnTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:102: characters 3-30
		\Type::getClass(Boot::getClass(HaxeTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:103: characters 3-30
		\Type::getClass(Boot::getClass(JoinTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:104: characters 3-35
		\Type::getClass(Boot::getClass(LogicOperatorEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:105: characters 3-28
		\Type::getClass(Boot::getClass(MtTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:106: characters 3-30
		\Type::getClass(Boot::getClass(NullableEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:107: characters 3-36
		\Type::getClass(Boot::getClass(ObjectEditTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:108: characters 3-38
		\Type::getClass(Boot::getClass(ObjectSourceTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:109: characters 3-20
		\Type::getClass(Boot::getClass(Op::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:110: characters 3-40
		\Type::getClass(Boot::getClass(ParameterDirectionEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:111: characters 3-28
		\Type::getClass(Boot::getClass(StTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:112: characters 3-31
		\Type::getClass(Boot::getClass(UnionTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:113: characters 3-32
		\Type::getClass(Boot::getClass(ValuesTypeEnum::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:116: characters 3-36
		\Type::getClass(Boot::getClass(BigIntegerSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:117: characters 3-33
		\Type::getClass(Boot::getClass(BigTextSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:118: characters 3-32
		\Type::getClass(Boot::getClass(BinarySentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:119: characters 3-33
		\Type::getClass(Boot::getClass(BooleanSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:120: characters 3-30
		\Type::getClass(Boot::getClass(CharSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:121: characters 3-34
		\Type::getClass(Boot::getClass(DateTimeSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:122: characters 3-33
		\Type::getClass(Boot::getClass(DecimalSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:123: characters 3-31
		\Type::getClass(Boot::getClass(FloatSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:124: characters 3-33
		\Type::getClass(Boot::getClass(IntegerSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:125: characters 3-34
		\Type::getClass(Boot::getClass(NBigTextSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:126: characters 3-31
		\Type::getClass(Boot::getClass(NCharSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:127: characters 3-34
		\Type::getClass(Boot::getClass(NVarcharSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:128: characters 3-30
		\Type::getClass(Boot::getClass(RealSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:129: characters 3-38
		\Type::getClass(Boot::getClass(SmallIntegerSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:130: characters 3-30
		\Type::getClass(Boot::getClass(UUIDSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:131: characters 3-33
		\Type::getClass(Boot::getClass(VarcharSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:134: characters 3-20
		\Type::getClass(Boot::getClass(Ag::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:135: characters 3-24
		\Type::getClass(Boot::getClass(Assign::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:136: characters 3-22
		\Type::getClass(Boot::getClass(Cast::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:137: characters 3-36
		\Type::getClass(Boot::getClass(FieldAliasSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:138: characters 3-31
		\Type::getClass(Boot::getClass(FieldSentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:139: characters 3-46
		\Type::getClass(Boot::getClass(FielIndexDefinitionSentences::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:140: characters 3-20
		\Type::getClass(Boot::getClass(Fn_hx::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:141: characters 3-20
		\Type::getClass(Boot::getClass(Mt::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:142: characters 3-20
		\Type::getClass(Boot::getClass(St::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:143: characters 3-34
		\Type::getClass(Boot::getClass(SubQuerySentence::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:144: characters 3-21
		\Type::getClass(Boot::getClass(Val::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:147: characters 3-29
		\Type::getClass(Boot::getClass(AliasSource::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:148: characters 3-34
		\Type::getClass(Boot::getClass(InlineViewSource::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:149: characters 3-30
		\Type::getClass(Boot::getClass(StringSource::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:150: characters 3-29
		\Type::getClass(Boot::getClass(TableSource::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:151: characters 3-28
		\Type::getClass(Boot::getClass(ViewSource::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:154: characters 3-28
		\Type::getClass(Boot::getClass(ChangeItem::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:155: characters 3-27
		\Type::getClass(Boot::getClass(Connector::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:156: characters 3-29
		\Type::getClass(Boot::getClass(QueryColumn::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:157: characters 3-26
		\Type::getClass(Boot::getClass(QueryRow::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:158: characters 3-26
		\Type::getClass(Boot::getClass(QuerySet::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:159: characters 3-28
		\Type::getClass(Boot::getClass(QueryTable::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:160: characters 3-28
		\Type::getClass(Boot::getClass(ModelArray::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:161: characters 3-27
		\Type::getClass(Boot::getClass(ModelItem::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:162: characters 3-29
		\Type::getClass(Boot::getClass(ModelObject::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:163: characters 3-32
		\Type::getClass(Boot::getClass(QueryParameter::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:164: characters 3-27
		\Type::getClass(Boot::getClass(QueueItem::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:167: characters 3-21
		\Type::getClass(Boot::getClass(DDL::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:168: characters 3-21
		\Type::getClass(Boot::getClass(SQL::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:169: characters 3-25
		\Type::getClass(Boot::getClass(Context::class));
		#5_framework\orm\src/nMorph/framework/orm/ORM.hx:170: characters 3-25
		\Type::getClass(Boot::getClass(BulkRun::class));
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(ORM::class, 'nMorph.framework.orm.ORM');
