<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\logic\person;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\common\sentences\Val;
use \php\Boot;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\common\conditions\Condition;
use \nMorph\framework\orm\common\sentences\Assign;
use \nMorph\framework\common\exceptions\ExceptionHelper;
use \nMorph\framework\orm\common\sentences\Ag;
use \nMorph\core\db\sw_todolist\Person;
use \nMorph\framework\common\datatypes\UUID;
use \nMorph\core\db\sw_todolist\Task;

/**
 * ...
 * @author Smartwork
 */
final class PersonLogic {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.logic.person.PersonLogic\" params=\"\" final=\"1\">\x0A\x09<Person_Login public=\"1\" set=\"method\" line=\"31\"><f a=\"Email:password\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"nMorph.core.db.sw_todolist.Person\"/>\x0A</f></Person_Login>\x0A\x09<Person_Search public=\"1\" set=\"method\" line=\"43\"><f a=\"SearchTerm\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"Array\"><c path=\"nMorph.core.db.sw_todolist.Person\"/></c>\x0A</f></Person_Search>\x0A\x09<Person_GetByID public=\"1\" set=\"method\" line=\"54\"><f a=\"ID\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.core.db.sw_todolist.Person\"/>\x0A</f></Person_GetByID>\x0A\x09<Person_Save public=\"1\" set=\"method\" line=\"60\"><f a=\"UpdatedObj\">\x0A\x09<c path=\"nMorph.core.db.sw_todolist.Person\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></Person_Save>\x0A\x09<Person_Delete public=\"1\" set=\"method\" line=\"96\"><f a=\"ID\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<x path=\"Void\"/>\x0A</f></Person_Delete>\x0A\x09<new public=\"1\" set=\"method\" line=\"27\"><f a=\"\"><x path=\"Void\"/></f></new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":directlyUsed\"/>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":final\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @param UUID $ID
	 * 
	 * @return void
	 */
	public function Person_Delete ($ID) {
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:98: lines 98-102
		$Exists = SQL::SELECT(\Array_hx::wrap([Ag::COUNTALL()]))->FROM(Task::$table)->WHERE(Task::$col_PersonId->eq($ID))->ReadValue();
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:105: lines 105-108
		if ($Exists > 0) {
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:106: characters 4-96
			ExceptionHelper::LogicException(1001, "Unable to delete Person. There are associated tasks.");
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:107: characters 4-10
			return;
		}
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:111: lines 111-114
		SQL::DELETE()->FROM(Person::$table)->WHERE(Condition::SET(Person::$col_PersonId, Op::Equal(), Val::uuid($ID)))->Execute();
	}

	/**
	 * @param UUID $ID
	 * 
	 * @return Person
	 */
	public function Person_GetByID ($ID) {
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:55: characters 3-52
		$cat = Person::BYPK($ID)->ReadOne(Boot::getClass(Person::class));
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:56: characters 3-13
		return $cat;
	}

	/**
	 * @param string $Email
	 * @param string $password
	 * 
	 * @return Person
	 */
	public function Person_Login ($Email, $password) {
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:33: characters 3-125
		$p = Person::WHERE(Person::$col_Email->Equals($Email)->AND(Person::$col_PasswordHash->Equals($password)))->ReadOne(Boot::getClass(Person::class));
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:35: lines 35-37
		if ($p !== null) {
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:36: characters 4-26
			$p->set_PasswordHash("");
		}
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:39: characters 3-11
		return $p;
	}

	/**
	 * @param Person $UpdatedObj
	 * 
	 * @return void
	 */
	public function Person_Save ($UpdatedObj) {
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:62: lines 62-66
		$Exists = SQL::SELECT(\Array_hx::wrap([Ag::COUNTALL()]))->FROM(Person::$table)->WHERE(Condition::SET(Person::$col_PersonId, Op::Equal(), Val::uuid($UpdatedObj->get_PersonId())))->ReadValue();
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:69: lines 69-93
		if ($Exists === 0) {
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:71: characters 4-28
			$tmp = SQL::INSERT(Person::$table);
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:73: characters 5-40
			$tmp1 = Val::uuid($UpdatedObj->get_PersonId());
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:74: characters 5-39
			$tmp2 = Val::str($UpdatedObj->get_FullName());
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:75: characters 5-36
			$tmp3 = Val::str($UpdatedObj->get_Email());
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:76: characters 5-43
			$tmp4 = Val::str($UpdatedObj->get_PasswordHash());
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:71: lines 71-79
			$tmp->VALUES(\Array_hx::wrap([
				$tmp1,
				$tmp2,
				$tmp3,
				$tmp4,
				Val::int($UpdatedObj->get_Role()),
			]))->Execute();
		} else {
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:84: characters 4-28
			$tmp = SQL::UPDATE(Person::$table);
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:86: characters 5-72
			$tmp1 = Assign::SET(Person::$col_FullName, Val::str($UpdatedObj->get_FullName()));
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:87: characters 5-66
			$tmp2 = Assign::SET(Person::$col_Email, Val::str($UpdatedObj->get_Email()));
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:88: characters 5-80
			$tmp3 = Assign::SET(Person::$col_PasswordHash, Val::str($UpdatedObj->get_PasswordHash()));
			#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:84: lines 84-92
			$tmp->SET(\Array_hx::wrap([
				$tmp1,
				$tmp2,
				$tmp3,
				Assign::SET(Person::$col_Role, Val::int($UpdatedObj->get_Role())),
			]))->WHERE(Condition::SET(Person::$col_PersonId, Op::Equal(), Val::uuid($UpdatedObj->get_PersonId())))->Execute();
		}
	}

	/**
	 * @param string $SearchTerm
	 * 
	 * @return Person[]|\Array_hx
	 */
	public function Person_Search ($SearchTerm) {
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:45: lines 45-48
		$lst = Person::WHERE(Person::$col_FullName->LIKE("%" . ($SearchTerm??'null') . "%")->OR(Person::$col_Email->LIKE("%" . ($SearchTerm??'null') . "%")))->ORDERBY(\Array_hx::wrap([Person::$col_FullName]))->Read(Boot::getClass(Person::class));
		#2_logic\logic\src/nMorph/core/logic/person/PersonLogic.hx:50: characters 3-13
		return $lst;
	}
}

Boot::registerClass(PersonLogic::class, 'nMorph.core.logic.person.PersonLogic');
