<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\sw_todolist;

use \php\Boot;

/**
 * ...
 * @author Smartwork
 */
class DAO {
	/**
	 * @var Category_VTA
	 */
	static public $Category_VTA_view;
	/**
	 * @var Category
	 */
	static public $Category_table;
	/**
	 * @var Person_VTA
	 */
	static public $Person_VTA_view;
	/**
	 * @var Person
	 */
	static public $Person_table;
	/**
	 * @var Task_VTA
	 */
	static public $Task_VTA_view;
	/**
	 * @var Task
	 */
	static public $Task_table;

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(DAO::class, 'nMorph.core.db.sw_todolist.DAO');
