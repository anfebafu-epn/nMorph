<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\zhungo_core;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\interfaces\ICondition;
use \nMorph\framework\orm\common\sentences\Val;
use \nMorph\framework\orm\client\ModelObject;
use \php\Boot;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\common\conditions\Condition;
use \nMorph\framework\orm\common\fields\IntegerSentence;
use \nMorph\framework\orm\common\sources\ViewSource;
use \nMorph\framework\orm\common\clauses\WhereClause;
use \nMorph\framework\orm\client\ChangeItem;
use \nMorph\framework\orm\common\fields\VarcharSentence;
use \nMorph\framework\common\datatypes\UUID;
use \nMorph\framework\orm\common\fields\UUIDSentence;
use \nMorph\framework\orm\common\enums\NullableEnum;

/**
 * ...
 * @author Smartwork
 */
class EP_Dashboard_VTA extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.EP_Dashboard_VTA\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<view public=\"1\" expr=\"new ViewSource(&quot;EP_Dashboard_VTA&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new ViewSource(\"EP_Dashboard_VTA\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a vista para consultas</haxe_doc>\x0A\x09</view>\x0A\x09<col_EmpresaID public=\"1\" expr=\"new UUIDSentence(&quot;EP_Dashboard_VTA&quot;, &quot;EmpresaID&quot;, NullableEnum.NOTNULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"EP_Dashboard_VTA\", \"EmpresaID\", NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EmpresaID</haxe_doc>\x0A\x09</col_EmpresaID>\x0A\x09<col_NombreEmpresa public=\"1\" expr=\"new VarcharSentence(&quot;EP_Dashboard_VTA&quot;, &quot;NombreEmpresa&quot;, 250, NullableEnum.NOTNULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"EP_Dashboard_VTA\", \"NombreEmpresa\", 250, NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna NombreEmpresa</haxe_doc>\x0A\x09</col_NombreEmpresa>\x0A\x09<col_planes public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;planes&quot;, NullableEnum.NULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"planes\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna planes</haxe_doc>\x0A\x09</col_planes>\x0A\x09<col_producto public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;producto&quot;, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"producto\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna producto</haxe_doc>\x0A\x09</col_producto>\x0A\x09<col_ene public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;ene&quot;, NullableEnum.NULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"ene\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ene</haxe_doc>\x0A\x09</col_ene>\x0A\x09<col_feb public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;feb&quot;, NullableEnum.NULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"feb\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna feb</haxe_doc>\x0A\x09</col_feb>\x0A\x09<col_mar public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;mar&quot;, NullableEnum.NULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"mar\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna mar</haxe_doc>\x0A\x09</col_mar>\x0A\x09<col_abr public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;abr&quot;, NullableEnum.NULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"abr\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna abr</haxe_doc>\x0A\x09</col_abr>\x0A\x09<col_may public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;may&quot;, NullableEnum.NULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"may\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna may</haxe_doc>\x0A\x09</col_may>\x0A\x09<col_jun public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;jun&quot;, NullableEnum.NULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"jun\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna jun</haxe_doc>\x0A\x09</col_jun>\x0A\x09<col_jul public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;jul&quot;, NullableEnum.NULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"jul\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna jul</haxe_doc>\x0A\x09</col_jul>\x0A\x09<col_ago public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;ago&quot;, NullableEnum.NULL, false)\" line=\"92\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"ago\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ago</haxe_doc>\x0A\x09</col_ago>\x0A\x09<col_sep public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;sep&quot;, NullableEnum.NULL, false)\" line=\"97\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"sep\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna sep</haxe_doc>\x0A\x09</col_sep>\x0A\x09<col_opt public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;opt&quot;, NullableEnum.NULL, false)\" line=\"102\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"opt\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna opt</haxe_doc>\x0A\x09</col_opt>\x0A\x09<col_nov public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;nov&quot;, NullableEnum.NULL, false)\" line=\"107\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"nov\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna nov</haxe_doc>\x0A\x09</col_nov>\x0A\x09<col_dic public=\"1\" expr=\"new IntegerSentence(&quot;EP_Dashboard_VTA&quot;, &quot;dic&quot;, NullableEnum.NULL, false)\" line=\"112\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.IntegerSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new IntegerSentence(\"EP_Dashboard_VTA\", \"dic\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna dic</haxe_doc>\x0A\x09</col_dic>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"120\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"129\" static=\"1\">\x0A\x09\x09<f a=\"val_EmpresaID:val_planes\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<EmpresaID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EmpresaID>\x0A\x09<get_EmpresaID public=\"1\" set=\"method\" line=\"135\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_EmpresaID>\x0A\x09<NombreEmpresa get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</NombreEmpresa>\x0A\x09<get_NombreEmpresa public=\"1\" set=\"method\" line=\"142\"><f a=\"\"><c path=\"String\"/></f></get_NombreEmpresa>\x0A\x09<set_NombreEmpresa public=\"1\" set=\"method\" line=\"146\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_NombreEmpresa>\x0A\x09<planes get=\"accessor\" set=\"null\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</planes>\x0A\x09<get_planes public=\"1\" set=\"method\" line=\"156\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_planes>\x0A\x09<producto get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</producto>\x0A\x09<get_producto public=\"1\" set=\"method\" line=\"163\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_producto>\x0A\x09<set_producto public=\"1\" set=\"method\" line=\"167\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_producto>\x0A\x09<ene get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ene>\x0A\x09<get_ene public=\"1\" set=\"method\" line=\"177\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_ene>\x0A\x09<set_ene public=\"1\" set=\"method\" line=\"181\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_ene>\x0A\x09<feb get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</feb>\x0A\x09<get_feb public=\"1\" set=\"method\" line=\"191\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_feb>\x0A\x09<set_feb public=\"1\" set=\"method\" line=\"195\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_feb>\x0A\x09<mar get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</mar>\x0A\x09<get_mar public=\"1\" set=\"method\" line=\"205\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_mar>\x0A\x09<set_mar public=\"1\" set=\"method\" line=\"209\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_mar>\x0A\x09<abr get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</abr>\x0A\x09<get_abr public=\"1\" set=\"method\" line=\"219\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_abr>\x0A\x09<set_abr public=\"1\" set=\"method\" line=\"223\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_abr>\x0A\x09<may get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</may>\x0A\x09<get_may public=\"1\" set=\"method\" line=\"233\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_may>\x0A\x09<set_may public=\"1\" set=\"method\" line=\"237\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_may>\x0A\x09<jun get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</jun>\x0A\x09<get_jun public=\"1\" set=\"method\" line=\"247\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_jun>\x0A\x09<set_jun public=\"1\" set=\"method\" line=\"251\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_jun>\x0A\x09<jul get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</jul>\x0A\x09<get_jul public=\"1\" set=\"method\" line=\"261\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_jul>\x0A\x09<set_jul public=\"1\" set=\"method\" line=\"265\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_jul>\x0A\x09<ago get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ago>\x0A\x09<get_ago public=\"1\" set=\"method\" line=\"275\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_ago>\x0A\x09<set_ago public=\"1\" set=\"method\" line=\"279\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_ago>\x0A\x09<sep get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</sep>\x0A\x09<get_sep public=\"1\" set=\"method\" line=\"289\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_sep>\x0A\x09<set_sep public=\"1\" set=\"method\" line=\"293\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_sep>\x0A\x09<opt get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</opt>\x0A\x09<get_opt public=\"1\" set=\"method\" line=\"303\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_opt>\x0A\x09<set_opt public=\"1\" set=\"method\" line=\"307\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_opt>\x0A\x09<nov get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</nov>\x0A\x09<get_nov public=\"1\" set=\"method\" line=\"317\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_nov>\x0A\x09<set_nov public=\"1\" set=\"method\" line=\"321\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_nov>\x0A\x09<dic get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</dic>\x0A\x09<get_dic public=\"1\" set=\"method\" line=\"331\"><f a=\"\"><x path=\"Null\"><x path=\"Int\"/></x></f></get_dic>\x0A\x09<set_dic public=\"1\" set=\"method\" line=\"335\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Int\"/></x>\x0A</f></set_dic>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase EP_Dashboard_VTA que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna EmpresaID
	 */
	static public $col_EmpresaID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna NombreEmpresa
	 */
	static public $col_NombreEmpresa;
	/**
	 * @var IntegerSentence
	 * Referencia a columna abr
	 */
	static public $col_abr;
	/**
	 * @var IntegerSentence
	 * Referencia a columna ago
	 */
	static public $col_ago;
	/**
	 * @var IntegerSentence
	 * Referencia a columna dic
	 */
	static public $col_dic;
	/**
	 * @var IntegerSentence
	 * Referencia a columna ene
	 */
	static public $col_ene;
	/**
	 * @var IntegerSentence
	 * Referencia a columna feb
	 */
	static public $col_feb;
	/**
	 * @var IntegerSentence
	 * Referencia a columna jul
	 */
	static public $col_jul;
	/**
	 * @var IntegerSentence
	 * Referencia a columna jun
	 */
	static public $col_jun;
	/**
	 * @var IntegerSentence
	 * Referencia a columna mar
	 */
	static public $col_mar;
	/**
	 * @var IntegerSentence
	 * Referencia a columna may
	 */
	static public $col_may;
	/**
	 * @var IntegerSentence
	 * Referencia a columna nov
	 */
	static public $col_nov;
	/**
	 * @var IntegerSentence
	 * Referencia a columna opt
	 */
	static public $col_opt;
	/**
	 * @var IntegerSentence
	 * Referencia a columna planes
	 */
	static public $col_planes;
	/**
	 * @var IntegerSentence
	 * Referencia a columna producto
	 */
	static public $col_producto;
	/**
	 * @var IntegerSentence
	 * Referencia a columna sep
	 */
	static public $col_sep;
	/**
	 * @var ISource
	 * referencia a vista para consultas
	 */
	static public $view;

	/**
	 * @var UUID
	 */
	public $EmpresaID;
	/**
	 * @var string
	 */
	public $NombreEmpresa;
	/**
	 * @var int
	 */
	public $abr;
	/**
	 * @var int
	 */
	public $ago;
	/**
	 * @var int
	 */
	public $dic;
	/**
	 * @var int
	 */
	public $ene;
	/**
	 * @var int
	 */
	public $feb;
	/**
	 * @var int
	 */
	public $jul;
	/**
	 * @var int
	 */
	public $jun;
	/**
	 * @var int
	 */
	public $mar;
	/**
	 * @var int
	 */
	public $may;
	/**
	 * @var int
	 */
	public $nov;
	/**
	 * @var int
	 */
	public $opt;
	/**
	 * @var int
	 */
	public $planes;
	/**
	 * @var int
	 */
	public $producto;
	/**
	 * @var int
	 */
	public $sep;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_EmpresaID
	 * @param int $val_planes
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_EmpresaID, $val_planes) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:130: characters 3-154
		return SQL::SELECT()->FROM(EP_Dashboard_VTA::$view)->WHERE(Condition::SET(EP_Dashboard_VTA::$col_EmpresaID, Op::Equal(), Val::uuid($val_EmpresaID))->AND_Ex(EP_Dashboard_VTA::$col_planes, Op::Equal(), Val::int($val_planes)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:121: characters 3-50
		return SQL::SELECT()->FROM(EP_Dashboard_VTA::$view)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase EP_Dashboard_VTA que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_EmpresaID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:136: characters 3-19
		return $this->EmpresaID;
	}

	/**
	 * @return string
	 */
	public function get_NombreEmpresa () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:143: characters 3-23
		return $this->NombreEmpresa;
	}

	/**
	 * @return int
	 */
	public function get_abr () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:220: characters 3-13
		return $this->abr;
	}

	/**
	 * @return int
	 */
	public function get_ago () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:276: characters 3-13
		return $this->ago;
	}

	/**
	 * @return int
	 */
	public function get_dic () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:332: characters 3-13
		return $this->dic;
	}

	/**
	 * @return int
	 */
	public function get_ene () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:178: characters 3-13
		return $this->ene;
	}

	/**
	 * @return int
	 */
	public function get_feb () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:192: characters 3-13
		return $this->feb;
	}

	/**
	 * @return int
	 */
	public function get_jul () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:262: characters 3-13
		return $this->jul;
	}

	/**
	 * @return int
	 */
	public function get_jun () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:248: characters 3-13
		return $this->jun;
	}

	/**
	 * @return int
	 */
	public function get_mar () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:206: characters 3-13
		return $this->mar;
	}

	/**
	 * @return int
	 */
	public function get_may () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:234: characters 3-13
		return $this->may;
	}

	/**
	 * @return int
	 */
	public function get_nov () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:318: characters 3-13
		return $this->nov;
	}

	/**
	 * @return int
	 */
	public function get_opt () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:304: characters 3-13
		return $this->opt;
	}

	/**
	 * @return int
	 */
	public function get_planes () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:157: characters 3-16
		return $this->planes;
	}

	/**
	 * @return int
	 */
	public function get_producto () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:164: characters 3-18
		return $this->producto;
	}

	/**
	 * @return int
	 */
	public function get_sep () {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:290: characters 3-13
		return $this->sep;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_NombreEmpresa ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:149: characters 3-123
		if ($this->get_TrackChanges() && ($this->get_NombreEmpresa() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:149: characters 77-94
			$tmp = EP_Dashboard_VTA::$col_NombreEmpresa;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:149: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_NombreEmpresa(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:150: characters 3-29
		return $this->NombreEmpresa = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_abr ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:226: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_abr() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:226: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_abr;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:226: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_abr(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:227: characters 3-19
		return $this->abr = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_ago ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:282: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_ago() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:282: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_ago;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:282: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_ago(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:283: characters 3-19
		return $this->ago = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_dic ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:338: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_dic() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:338: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_dic;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:338: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_dic(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:339: characters 3-19
		return $this->dic = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_ene ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:184: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_ene() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:184: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_ene;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:184: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_ene(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:185: characters 3-19
		return $this->ene = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_feb ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:198: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_feb() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:198: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_feb;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:198: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_feb(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:199: characters 3-19
		return $this->feb = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_jul ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:268: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_jul() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:268: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_jul;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:268: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_jul(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:269: characters 3-19
		return $this->jul = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_jun ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:254: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_jun() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:254: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_jun;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:254: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_jun(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:255: characters 3-19
		return $this->jun = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_mar ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:212: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_mar() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:212: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_mar;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:212: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_mar(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:213: characters 3-19
		return $this->mar = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_may ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:240: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_may() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:240: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_may;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:240: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_may(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:241: characters 3-19
		return $this->may = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_nov ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:324: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_nov() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:324: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_nov;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:324: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_nov(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:325: characters 3-19
		return $this->nov = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_opt ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:310: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_opt() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:310: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_opt;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:310: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_opt(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:311: characters 3-19
		return $this->opt = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_producto ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:170: characters 3-108
		if ($this->get_TrackChanges() && ($this->get_producto() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:170: characters 72-84
			$tmp = EP_Dashboard_VTA::$col_producto;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:170: characters 47-108
			$this->AddChange(new ChangeItem($tmp, $this->get_producto(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:171: characters 3-24
		return $this->producto = $value;
	}

	/**
	 * @param int $value
	 * 
	 * @return int
	 */
	public function set_sep ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:296: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_sep() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:296: characters 67-74
			$tmp = EP_Dashboard_VTA::$col_sep;
			#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:296: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_sep(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/EP_Dashboard_VTA.hx:297: characters 3-19
		return $this->sep = $value;
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


		self::$view = new ViewSource("EP_Dashboard_VTA");
		self::$col_EmpresaID = new UUIDSentence("EP_Dashboard_VTA", "EmpresaID", NullableEnum::NOTNULL(), true);
		self::$col_NombreEmpresa = new VarcharSentence("EP_Dashboard_VTA", "NombreEmpresa", 250, NullableEnum::NOTNULL(), false);
		self::$col_planes = new IntegerSentence("EP_Dashboard_VTA", "planes", NullableEnum::NULL(), true);
		self::$col_producto = new IntegerSentence("EP_Dashboard_VTA", "producto", NullableEnum::NULL(), false);
		self::$col_ene = new IntegerSentence("EP_Dashboard_VTA", "ene", NullableEnum::NULL(), false);
		self::$col_feb = new IntegerSentence("EP_Dashboard_VTA", "feb", NullableEnum::NULL(), false);
		self::$col_mar = new IntegerSentence("EP_Dashboard_VTA", "mar", NullableEnum::NULL(), false);
		self::$col_abr = new IntegerSentence("EP_Dashboard_VTA", "abr", NullableEnum::NULL(), false);
		self::$col_may = new IntegerSentence("EP_Dashboard_VTA", "may", NullableEnum::NULL(), false);
		self::$col_jun = new IntegerSentence("EP_Dashboard_VTA", "jun", NullableEnum::NULL(), false);
		self::$col_jul = new IntegerSentence("EP_Dashboard_VTA", "jul", NullableEnum::NULL(), false);
		self::$col_ago = new IntegerSentence("EP_Dashboard_VTA", "ago", NullableEnum::NULL(), false);
		self::$col_sep = new IntegerSentence("EP_Dashboard_VTA", "sep", NullableEnum::NULL(), false);
		self::$col_opt = new IntegerSentence("EP_Dashboard_VTA", "opt", NullableEnum::NULL(), false);
		self::$col_nov = new IntegerSentence("EP_Dashboard_VTA", "nov", NullableEnum::NULL(), false);
		self::$col_dic = new IntegerSentence("EP_Dashboard_VTA", "dic", NullableEnum::NULL(), false);
	}
}

Boot::registerClass(EP_Dashboard_VTA::class, 'nMorph.core.db.zhungo_core.EP_Dashboard_VTA');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\EP_Dashboard_VTA', [
	'dic' => true,
	'nov' => true,
	'opt' => true,
	'sep' => true,
	'ago' => true,
	'jul' => true,
	'jun' => true,
	'may' => true,
	'abr' => true,
	'mar' => true,
	'feb' => true,
	'ene' => true,
	'producto' => true,
	'planes' => true,
	'NombreEmpresa' => true,
	'EmpresaID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\EP_Dashboard_VTA', [
	'dic' => true,
	'nov' => true,
	'opt' => true,
	'sep' => true,
	'ago' => true,
	'jul' => true,
	'jun' => true,
	'may' => true,
	'abr' => true,
	'mar' => true,
	'feb' => true,
	'ene' => true,
	'producto' => true,
	'NombreEmpresa' => true
]);
EP_Dashboard_VTA::__hx__init();
