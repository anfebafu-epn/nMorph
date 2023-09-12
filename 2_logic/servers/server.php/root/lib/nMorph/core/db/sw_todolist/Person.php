<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\sw_todolist;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ICondition;
use \nMorph\framework\orm\common\sentences\Val;
use \nMorph\framework\orm\client\ModelObject;
use \php\Boot;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\common\conditions\Condition;
use \nMorph\framework\orm\common\fields\IntegerSentence;
use \nMorph\framework\orm\common\clauses\WhereClause;
use \nMorph\framework\orm\client\ChangeItem;
use \nMorph\framework\orm\common\fields\VarcharSentence;
use \nMorph\framework\common\datatypes\UUID;
use \nMorph\framework\orm\common\sources\TableSource;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class Person extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.sw_todolist.Person\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<table public=\"1\" expr=\"new TableSource(&quot;Person&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new TableSource(\"Person\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a tabla para consultas</haxe_doc>\x0A\x09</table>\x0A\x09<col_PersonId public=\"1\" expr=\"new UUIDSentence(&quot;Person&quot;, &quot;PersonId&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"Person\", \"PersonId\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PersonId</haxe_doc>\x0A\x09</col_PersonId>\x0A\x09<col_FullName public=\"1\" expr=\"new VarcharSentence(&quot;Person&quot;, &quot;FullName&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Person\", \"FullName\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FullName</haxe_doc>\x0A\x09</col_FullName>\x0A\x09<col_Email public=\"1\" expr=\"new VarcharSentence(&quot;Person&quot;, &quot;Email&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Person\", \"Email\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Email</haxe_doc>\x0A\x09</col_Email>\x0A\x09<col_PasswordHash public=\"1\" expr=\"new VarcharSentence(&quot;Person&quot;, &quot;PasswordHash&quot;, 100, NullableEnum.NOTNULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"Person\", \"PasswordHash\", 100, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PasswordHash</haxe_doc>\x0A\x09</col_PasswordHash>\x0A\x09<col_Role public=\"1\" expr=\"new IntegerSentence(&quot;Person&quot;, &quot;Role&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"Person\", \"Role\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna Role</haxe_doc>\x0A\x09</col_Role>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"65\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"74\" static=\"1\">\x0A\x09\x09<f a=\"val_PersonId\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<PersonId get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PersonId>\x0A\x09<get_PersonId public=\"1\" set=\"method\" line=\"80\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_PersonId>\x0A\x09<FullName get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FullName>\x0A\x09<get_FullName public=\"1\" set=\"method\" line=\"87\"><f a=\"\"><c path=\"String\"/></f></get_FullName>\x0A\x09<set_FullName public=\"1\" set=\"method\" line=\"91\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_FullName>\x0A\x09<Email get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Email>\x0A\x09<get_Email public=\"1\" set=\"method\" line=\"101\"><f a=\"\"><c path=\"String\"/></f></get_Email>\x0A\x09<set_Email public=\"1\" set=\"method\" line=\"105\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_Email>\x0A\x09<PasswordHash get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PasswordHash>\x0A\x09<get_PasswordHash public=\"1\" set=\"method\" line=\"115\"><f a=\"\"><c path=\"String\"/></f></get_PasswordHash>\x0A\x09<set_PasswordHash public=\"1\" set=\"method\" line=\"119\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_PasswordHash>\x0A\x09<Role get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</Role>\x0A\x09<get_Role public=\"1\" set=\"method\" line=\"129\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_Role>\x0A\x09<set_Role public=\"1\" set=\"method\" line=\"133\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_Role>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase Person que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var VarcharSentence
	 * Referencia a columna Email
	 */
	static public $col_Email;
	/**
	 * @var VarcharSentence
	 * Referencia a columna FullName
	 */
	static public $col_FullName;
	/**
	 * @var VarcharSentence
	 * Referencia a columna PasswordHash
	 */
	static public $col_PasswordHash;
	/**
	 * @var UUIDSentence
	 * Referencia a columna PersonId
	 */
	static public $col_PersonId;
	/**
	 * @var IntegerSentence
	 * Referencia a columna Role
	 */
	static public $col_Role;
	/**
	 * @var ISource
	 * referencia a tabla para consultas
	 */
	static public $table;

	/**
	 * @var string
	 */
	public $Email;
	/**
	 * @var string
	 */
	public $FullName;
	/**
	 * @var string
	 */
	public $PasswordHash;
	/**
	 * @var UUID
	 */
	public $PersonId;
	/**
	 * @var int
	 */
	public $Role;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_PersonId
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_PersonId) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:75: characters 3-103
		return SQL::SELECT()->FROM(Person::$table)->WHERE(Condition::SET(Person::$col_PersonId, Op::Equal(), Val::uuid($val_PersonId)));
	}

	/**
	 * inicio rápido de filtro
	 * @param	Filtro
	 * @return objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param ICondition $Condition
	 * 
	 * @return WhereClause
	 */
	public static function WHERE ($Condition) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:66: characters 3-51
		return SQL::SELECT()->FROM(Person::$table)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase Person que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return string
	 */
	public function get_Email () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:102: characters 3-15
		return $this->Email;
	}

	/**
	 * @return string
	 */
	public function get_FullName () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:88: characters 3-18
		return $this->FullName;
	}

	/**
	 * @return string
	 */
	public function get_PasswordHash () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:116: characters 3-22
		return $this->PasswordHash;
	}

	/**
	 * @return UUID
	 */
	public function get_PersonId () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:81: characters 3-18
		return $this->PersonId;
	}

	/**
	 * @return int
	 */
	public function get_Role () {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:130: characters 3-14
		return $this->Role;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_Email ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:108: characters 3-99
		if ($this->get_TrackChanges() && ($this->get_Email() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:108: characters 69-78
			$tmp = Person::$col_Email;
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:108: characters 44-99
			$this->AddChange(new ChangeItem($tmp, $this->get_Email(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:109: characters 3-21
		return $this->Email = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_FullName ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:94: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_FullName() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:94: characters 72-84
			$tmp = Person::$col_FullName;
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:94: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_FullName(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:95: characters 3-24
		return $this->FullName = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_PasswordHash ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:122: characters 3-120
		if ($this->get_TrackChanges() && ($this->get_PasswordHash() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:122: characters 76-92
			$tmp = Person::$col_PasswordHash;
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:122: characters 51-120
			$this->AddChange(new ChangeItem($tmp, $this->get_PasswordHash(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:123: characters 3-28
		return $this->PasswordHash = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_Role ($value) {
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:136: characters 3-96
		if ($this->get_TrackChanges() && ($this->get_Role() !== $value)) {
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:136: characters 68-76
			$tmp = Person::$col_Role;
			#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:136: characters 43-96
			$this->AddChange(new ChangeItem($tmp, $this->get_Role(), $value));
		}
		#3_data\db\src/nMorph/core/db/sw_todolist/Person.hx:137: characters 3-20
		return $this->Role = $value;
	}

	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


		self::$table = new TableSource("Person");
		self::$col_PersonId = new UUIDSentence("Person", "PersonId", NullableEnum::NOTNULL(), true);
		self::$col_FullName = new VarcharSentence("Person", "FullName", 100, NullableEnum::NOTNULL(), false);
		self::$col_Email = new VarcharSentence("Person", "Email", 100, NullableEnum::NOTNULL(), false);
		self::$col_PasswordHash = new VarcharSentence("Person", "PasswordHash", 100, NullableEnum::NOTNULL(), false);
		self::$col_Role = new IntegerSentence("Person", "Role", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(Person::class, 'nMorph.core.db.sw_todolist.Person');
Boot::registerGetters('nMorph\\core\\db\\sw_todolist\\Person', [
	'Role' => true,
	'PasswordHash' => true,
	'Email' => true,
	'FullName' => true,
	'PersonId' => true
]);
Boot::registerSetters('nMorph\\core\\db\\sw_todolist\\Person', [
	'Role' => true,
	'PasswordHash' => true,
	'Email' => true,
	'FullName' => true
]);
Person::__hx__init();
