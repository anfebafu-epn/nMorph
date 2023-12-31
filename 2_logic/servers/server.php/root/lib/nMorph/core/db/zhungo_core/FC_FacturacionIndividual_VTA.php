<?php
/**
 * Generated by Haxe 4.2.2
 */

namespace nMorph\core\db\zhungo_core;

use \nMorph\framework\orm\lang\SQL;
use \nMorph\framework\orm\common\fields\DecimalSentence;
use \nMorph\framework\orm\interfaces\ICondition;
use \nMorph\framework\orm\common\sentences\Val;
use \nMorph\framework\orm\client\ModelObject;
use \php\Boot;
use \nMorph\framework\orm\common\enums\Op;
use \nMorph\framework\orm\interfaces\ISource;
use \nMorph\framework\orm\common\fields\DateTimeSentence;
use \nMorph\framework\orm\common\conditions\Condition;
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
class FC_FacturacionIndividual_VTA extends ModelObject {
	/**
	 * @var string
	 */
	static public $__rtti = "<class path=\"nMorph.core.db.zhungo_core.FC_FacturacionIndividual_VTA\" params=\"\">\x0A\x09<extends path=\"nMorph.framework.orm.client.ModelObject\"/>\x0A\x09<view public=\"1\" expr=\"new ViewSource(&quot;FC_FacturacionIndividual_VTA&quot;)\" line=\"33\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.interfaces.ISource\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new ViewSource(\"FC_FacturacionIndividual_VTA\")</e></m></meta>\x0A\x09\x09<haxe_doc>* referencia a vista para consultas</haxe_doc>\x0A\x09</view>\x0A\x09<col_ID public=\"1\" expr=\"new UUIDSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;ID&quot;, NullableEnum.NULL, true)\" line=\"37\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_FacturacionIndividual_VTA\", \"ID\", NullableEnum.NULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna ID</haxe_doc>\x0A\x09</col_ID>\x0A\x09<col_SuscripcionID public=\"1\" expr=\"new UUIDSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;SuscripcionID&quot;, NullableEnum.NOTNULL, false)\" line=\"42\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_FacturacionIndividual_VTA\", \"SuscripcionID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SuscripcionID</haxe_doc>\x0A\x09</col_SuscripcionID>\x0A\x09<col_NombrePersona public=\"1\" expr=\"new VarcharSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;NombrePersona&quot;, 250, NullableEnum.NOTNULL, true)\" line=\"47\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"FC_FacturacionIndividual_VTA\", \"NombrePersona\", 250, NullableEnum.NOTNULL, true)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna NombrePersona</haxe_doc>\x0A\x09</col_NombrePersona>\x0A\x09<col_IDGrupo public=\"1\" expr=\"new UUIDSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;IDGrupo&quot;, NullableEnum.NULL, false)\" line=\"52\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_FacturacionIndividual_VTA\", \"IDGrupo\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna IDGrupo</haxe_doc>\x0A\x09</col_IDGrupo>\x0A\x09<col_FacturaID public=\"1\" expr=\"new UUIDSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;FacturaID&quot;, NullableEnum.NOTNULL, false)\" line=\"57\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_FacturacionIndividual_VTA\", \"FacturaID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FacturaID</haxe_doc>\x0A\x09</col_FacturaID>\x0A\x09<col_EmpresaID public=\"1\" expr=\"new UUIDSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;EmpresaID&quot;, NullableEnum.NOTNULL, false)\" line=\"62\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.UUIDSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new UUIDSentence(\"FC_FacturacionIndividual_VTA\", \"EmpresaID\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna EmpresaID</haxe_doc>\x0A\x09</col_EmpresaID>\x0A\x09<col_FechaLapsoDesde public=\"1\" expr=\"new DateTimeSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;FechaLapsoDesde&quot;, NullableEnum.NOTNULL, false)\" line=\"67\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"FC_FacturacionIndividual_VTA\", \"FechaLapsoDesde\", NullableEnum.NOTNULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FechaLapsoDesde</haxe_doc>\x0A\x09</col_FechaLapsoDesde>\x0A\x09<col_FechaLapsoHasta public=\"1\" expr=\"new DateTimeSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;FechaLapsoHasta&quot;, NullableEnum.NULL, false)\" line=\"72\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DateTimeSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DateTimeSentence(\"FC_FacturacionIndividual_VTA\", \"FechaLapsoHasta\", NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna FechaLapsoHasta</haxe_doc>\x0A\x09</col_FechaLapsoHasta>\x0A\x09<col_PrecioCancelar public=\"1\" expr=\"new DecimalSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;PrecioCancelar&quot;, 9, 8, NullableEnum.NULL, false)\" line=\"77\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"FC_FacturacionIndividual_VTA\", \"PrecioCancelar\", 9, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna PrecioCancelar</haxe_doc>\x0A\x09</col_PrecioCancelar>\x0A\x09<col_SaldoPositvoPlan public=\"1\" expr=\"new DecimalSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;SaldoPositvoPlan&quot;, 17, 8, NullableEnum.NULL, false)\" line=\"82\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"FC_FacturacionIndividual_VTA\", \"SaldoPositvoPlan\", 17, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SaldoPositvoPlan</haxe_doc>\x0A\x09</col_SaldoPositvoPlan>\x0A\x09<col_SaldoNegativoPlan public=\"1\" expr=\"new DecimalSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;SaldoNegativoPlan&quot;, 17, 8, NullableEnum.NULL, false)\" line=\"87\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"FC_FacturacionIndividual_VTA\", \"SaldoNegativoPlan\", 17, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SaldoNegativoPlan</haxe_doc>\x0A\x09</col_SaldoNegativoPlan>\x0A\x09<col_SaldoPositivoTotalEmpresa public=\"1\" expr=\"new DecimalSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;SaldoPositivoTotalEmpresa&quot;, 17, 8, NullableEnum.NULL, false)\" line=\"92\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"FC_FacturacionIndividual_VTA\", \"SaldoPositivoTotalEmpresa\", 17, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SaldoPositivoTotalEmpresa</haxe_doc>\x0A\x09</col_SaldoPositivoTotalEmpresa>\x0A\x09<col_SaldoNegativoTotalEmpresa public=\"1\" expr=\"new DecimalSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;SaldoNegativoTotalEmpresa&quot;, 17, 8, NullableEnum.NULL, false)\" line=\"97\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"FC_FacturacionIndividual_VTA\", \"SaldoNegativoTotalEmpresa\", 17, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SaldoNegativoTotalEmpresa</haxe_doc>\x0A\x09</col_SaldoNegativoTotalEmpresa>\x0A\x09<col_SaldoCompleto public=\"1\" expr=\"new DecimalSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;SaldoCompleto&quot;, 17, 8, NullableEnum.NULL, false)\" line=\"102\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.DecimalSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new DecimalSentence(\"FC_FacturacionIndividual_VTA\", \"SaldoCompleto\", 17, 8, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna SaldoCompleto</haxe_doc>\x0A\x09</col_SaldoCompleto>\x0A\x09<col_csv public=\"1\" expr=\"new VarcharSentence(&quot;FC_FacturacionIndividual_VTA&quot;, &quot;csv&quot;, -1, NullableEnum.NULL, false)\" line=\"107\" static=\"1\">\x0A\x09\x09<c path=\"nMorph.framework.orm.common.fields.VarcharSentence\"/>\x0A\x09\x09<meta><m n=\":value\"><e>new VarcharSentence(\"FC_FacturacionIndividual_VTA\", \"csv\", -1, NullableEnum.NULL, false)</e></m></meta>\x0A\x09\x09<haxe_doc>* Referencia a columna csv</haxe_doc>\x0A\x09</col_csv>\x0A\x09<WHERE public=\"1\" set=\"method\" line=\"115\" static=\"1\">\x0A\x09\x09<f a=\"Condition\">\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.interfaces.ICondition\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* inicio rápido de filtro\x0A\x09 * @param\x09Filtro\x0A\x09 * @return objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</WHERE>\x0A\x09<BYPK public=\"1\" set=\"method\" line=\"124\" static=\"1\">\x0A\x09\x09<f a=\"val_ID:val_NombrePersona\">\x0A\x09\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09\x09<c path=\"String\"/>\x0A\x09\x09\x09<c path=\"nMorph.framework.orm.common.clauses.WhereClause\"/>\x0A\x09\x09</f>\x0A\x09\x09<haxe_doc>* filtro por clave primaria\x0A\x09 * @param\x09valor de clave primaria\x0A\x09 * @return  objeto para aplicar otras condiciones o ejecutar el query</haxe_doc>\x0A\x09</BYPK>\x0A\x09<ID get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</ID>\x0A\x09<get_ID public=\"1\" set=\"method\" line=\"130\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_ID>\x0A\x09<SuscripcionID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SuscripcionID>\x0A\x09<get_SuscripcionID public=\"1\" set=\"method\" line=\"137\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_SuscripcionID>\x0A\x09<set_SuscripcionID public=\"1\" set=\"method\" line=\"141\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_SuscripcionID>\x0A\x09<NombrePersona get=\"accessor\" set=\"null\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</NombrePersona>\x0A\x09<get_NombrePersona public=\"1\" set=\"method\" line=\"151\"><f a=\"\"><c path=\"String\"/></f></get_NombrePersona>\x0A\x09<IDGrupo get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</IDGrupo>\x0A\x09<get_IDGrupo public=\"1\" set=\"method\" line=\"158\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_IDGrupo>\x0A\x09<set_IDGrupo public=\"1\" set=\"method\" line=\"162\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_IDGrupo>\x0A\x09<FacturaID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FacturaID>\x0A\x09<get_FacturaID public=\"1\" set=\"method\" line=\"172\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_FacturaID>\x0A\x09<set_FacturaID public=\"1\" set=\"method\" line=\"176\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_FacturaID>\x0A\x09<EmpresaID get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</EmpresaID>\x0A\x09<get_EmpresaID public=\"1\" set=\"method\" line=\"186\"><f a=\"\"><c path=\"nMorph.framework.common.datatypes.UUID\"/></f></get_EmpresaID>\x0A\x09<set_EmpresaID public=\"1\" set=\"method\" line=\"190\"><f a=\"value\">\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A\x09<c path=\"nMorph.framework.common.datatypes.UUID\"/>\x0A</f></set_EmpresaID>\x0A\x09<FechaLapsoDesde get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FechaLapsoDesde>\x0A\x09<get_FechaLapsoDesde public=\"1\" set=\"method\" line=\"200\"><f a=\"\"><c path=\"Date\"/></f></get_FechaLapsoDesde>\x0A\x09<set_FechaLapsoDesde public=\"1\" set=\"method\" line=\"204\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_FechaLapsoDesde>\x0A\x09<FechaLapsoHasta get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"Date\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</FechaLapsoHasta>\x0A\x09<get_FechaLapsoHasta public=\"1\" set=\"method\" line=\"214\"><f a=\"\"><c path=\"Date\"/></f></get_FechaLapsoHasta>\x0A\x09<set_FechaLapsoHasta public=\"1\" set=\"method\" line=\"218\"><f a=\"value\">\x0A\x09<c path=\"Date\"/>\x0A\x09<c path=\"Date\"/>\x0A</f></set_FechaLapsoHasta>\x0A\x09<PrecioCancelar get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</PrecioCancelar>\x0A\x09<get_PrecioCancelar public=\"1\" set=\"method\" line=\"228\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_PrecioCancelar>\x0A\x09<set_PrecioCancelar public=\"1\" set=\"method\" line=\"232\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_PrecioCancelar>\x0A\x09<SaldoPositvoPlan get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SaldoPositvoPlan>\x0A\x09<get_SaldoPositvoPlan public=\"1\" set=\"method\" line=\"242\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_SaldoPositvoPlan>\x0A\x09<set_SaldoPositvoPlan public=\"1\" set=\"method\" line=\"246\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_SaldoPositvoPlan>\x0A\x09<SaldoNegativoPlan get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SaldoNegativoPlan>\x0A\x09<get_SaldoNegativoPlan public=\"1\" set=\"method\" line=\"256\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_SaldoNegativoPlan>\x0A\x09<set_SaldoNegativoPlan public=\"1\" set=\"method\" line=\"260\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_SaldoNegativoPlan>\x0A\x09<SaldoPositivoTotalEmpresa get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SaldoPositivoTotalEmpresa>\x0A\x09<get_SaldoPositivoTotalEmpresa public=\"1\" set=\"method\" line=\"270\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_SaldoPositivoTotalEmpresa>\x0A\x09<set_SaldoPositivoTotalEmpresa public=\"1\" set=\"method\" line=\"274\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_SaldoPositivoTotalEmpresa>\x0A\x09<SaldoNegativoTotalEmpresa get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SaldoNegativoTotalEmpresa>\x0A\x09<get_SaldoNegativoTotalEmpresa public=\"1\" set=\"method\" line=\"284\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_SaldoNegativoTotalEmpresa>\x0A\x09<set_SaldoNegativoTotalEmpresa public=\"1\" set=\"method\" line=\"288\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_SaldoNegativoTotalEmpresa>\x0A\x09<SaldoCompleto get=\"accessor\" set=\"accessor\">\x0A\x09\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</SaldoCompleto>\x0A\x09<get_SaldoCompleto public=\"1\" set=\"method\" line=\"298\"><f a=\"\"><x path=\"Null\"><x path=\"Float\"/></x></f></get_SaldoCompleto>\x0A\x09<set_SaldoCompleto public=\"1\" set=\"method\" line=\"302\"><f a=\"value\">\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A\x09<x path=\"Null\"><x path=\"Float\"/></x>\x0A</f></set_SaldoCompleto>\x0A\x09<csv get=\"accessor\" set=\"accessor\">\x0A\x09\x09<c path=\"String\"/>\x0A\x09\x09<meta><m n=\":isVar\"/></meta>\x0A\x09</csv>\x0A\x09<get_csv public=\"1\" set=\"method\" line=\"312\"><f a=\"\"><c path=\"String\"/></f></get_csv>\x0A\x09<set_csv public=\"1\" set=\"method\" line=\"316\"><f a=\"value\">\x0A\x09<c path=\"String\"/>\x0A\x09<c path=\"String\"/>\x0A</f></set_csv>\x0A\x09<new public=\"1\" set=\"method\" line=\"25\">\x0A\x09\x09<f a=\"\"><x path=\"Void\"/></f>\x0A\x09\x09<haxe_doc>* Constructor de la clase FC_FacturacionIndividual_VTA que tiene equivalencia con la tabla de la base de datos</haxe_doc>\x0A\x09</new>\x0A\x09<haxe_doc>* ...\x0A * @author Smartwork</haxe_doc>\x0A\x09<meta>\x0A\x09\x09<m n=\":keepSub\"/>\x0A\x09\x09<m n=\":rtti\"/>\x0A\x09</meta>\x0A</class>";
	/**
	 * @var UUIDSentence
	 * Referencia a columna EmpresaID
	 */
	static public $col_EmpresaID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna FacturaID
	 */
	static public $col_FacturaID;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna FechaLapsoDesde
	 */
	static public $col_FechaLapsoDesde;
	/**
	 * @var DateTimeSentence
	 * Referencia a columna FechaLapsoHasta
	 */
	static public $col_FechaLapsoHasta;
	/**
	 * @var UUIDSentence
	 * Referencia a columna ID
	 */
	static public $col_ID;
	/**
	 * @var UUIDSentence
	 * Referencia a columna IDGrupo
	 */
	static public $col_IDGrupo;
	/**
	 * @var VarcharSentence
	 * Referencia a columna NombrePersona
	 */
	static public $col_NombrePersona;
	/**
	 * @var DecimalSentence
	 * Referencia a columna PrecioCancelar
	 */
	static public $col_PrecioCancelar;
	/**
	 * @var DecimalSentence
	 * Referencia a columna SaldoCompleto
	 */
	static public $col_SaldoCompleto;
	/**
	 * @var DecimalSentence
	 * Referencia a columna SaldoNegativoPlan
	 */
	static public $col_SaldoNegativoPlan;
	/**
	 * @var DecimalSentence
	 * Referencia a columna SaldoNegativoTotalEmpresa
	 */
	static public $col_SaldoNegativoTotalEmpresa;
	/**
	 * @var DecimalSentence
	 * Referencia a columna SaldoPositivoTotalEmpresa
	 */
	static public $col_SaldoPositivoTotalEmpresa;
	/**
	 * @var DecimalSentence
	 * Referencia a columna SaldoPositvoPlan
	 */
	static public $col_SaldoPositvoPlan;
	/**
	 * @var UUIDSentence
	 * Referencia a columna SuscripcionID
	 */
	static public $col_SuscripcionID;
	/**
	 * @var VarcharSentence
	 * Referencia a columna csv
	 */
	static public $col_csv;
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
	 * @var UUID
	 */
	public $FacturaID;
	/**
	 * @var \Date
	 */
	public $FechaLapsoDesde;
	/**
	 * @var \Date
	 */
	public $FechaLapsoHasta;
	/**
	 * @var UUID
	 */
	public $ID;
	/**
	 * @var UUID
	 */
	public $IDGrupo;
	/**
	 * @var string
	 */
	public $NombrePersona;
	/**
	 * @var float
	 */
	public $PrecioCancelar;
	/**
	 * @var float
	 */
	public $SaldoCompleto;
	/**
	 * @var float
	 */
	public $SaldoNegativoPlan;
	/**
	 * @var float
	 */
	public $SaldoNegativoTotalEmpresa;
	/**
	 * @var float
	 */
	public $SaldoPositivoTotalEmpresa;
	/**
	 * @var float
	 */
	public $SaldoPositvoPlan;
	/**
	 * @var UUID
	 */
	public $SuscripcionID;
	/**
	 * @var string
	 */
	public $csv;

	/**
	 * filtro por clave primaria
	 * @param	valor de clave primaria
	 * @return  objeto para aplicar otras condiciones o ejecutar el query
	 * 
	 * @param UUID $val_ID
	 * @param string $val_NombrePersona
	 * 
	 * @return WhereClause
	 */
	public static function BYPK ($val_ID, $val_NombrePersona) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:125: characters 3-157
		return SQL::SELECT()->FROM(FC_FacturacionIndividual_VTA::$view)->WHERE(Condition::SET(FC_FacturacionIndividual_VTA::$col_ID, Op::Equal(), Val::uuid($val_ID))->AND_Ex(FC_FacturacionIndividual_VTA::$col_NombrePersona, Op::Equal(), Val::string($val_NombrePersona)));
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
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:116: characters 3-50
		return SQL::SELECT()->FROM(FC_FacturacionIndividual_VTA::$view)->WHERE($Condition);
	}

	/**
	 * Constructor de la clase FC_FacturacionIndividual_VTA que tiene equivalencia con la tabla de la base de datos
	 * 
	 * @return void
	 */
	public function __construct () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:27: characters 3-10
		parent::__construct();
	}

	/**
	 * @return UUID
	 */
	public function get_EmpresaID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:187: characters 3-19
		return $this->EmpresaID;
	}

	/**
	 * @return UUID
	 */
	public function get_FacturaID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:173: characters 3-19
		return $this->FacturaID;
	}

	/**
	 * @return \Date
	 */
	public function get_FechaLapsoDesde () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:201: characters 3-25
		return $this->FechaLapsoDesde;
	}

	/**
	 * @return \Date
	 */
	public function get_FechaLapsoHasta () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:215: characters 3-25
		return $this->FechaLapsoHasta;
	}

	/**
	 * @return UUID
	 */
	public function get_ID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:131: characters 3-12
		return $this->ID;
	}

	/**
	 * @return UUID
	 */
	public function get_IDGrupo () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:159: characters 3-17
		return $this->IDGrupo;
	}

	/**
	 * @return string
	 */
	public function get_NombrePersona () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:152: characters 3-23
		return $this->NombrePersona;
	}

	/**
	 * @return float
	 */
	public function get_PrecioCancelar () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:229: characters 3-24
		return $this->PrecioCancelar;
	}

	/**
	 * @return float
	 */
	public function get_SaldoCompleto () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:299: characters 3-23
		return $this->SaldoCompleto;
	}

	/**
	 * @return float
	 */
	public function get_SaldoNegativoPlan () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:257: characters 3-27
		return $this->SaldoNegativoPlan;
	}

	/**
	 * @return float
	 */
	public function get_SaldoNegativoTotalEmpresa () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:285: characters 3-35
		return $this->SaldoNegativoTotalEmpresa;
	}

	/**
	 * @return float
	 */
	public function get_SaldoPositivoTotalEmpresa () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:271: characters 3-35
		return $this->SaldoPositivoTotalEmpresa;
	}

	/**
	 * @return float
	 */
	public function get_SaldoPositvoPlan () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:243: characters 3-26
		return $this->SaldoPositvoPlan;
	}

	/**
	 * @return UUID
	 */
	public function get_SuscripcionID () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:138: characters 3-23
		return $this->SuscripcionID;
	}

	/**
	 * @return string
	 */
	public function get_csv () {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:313: characters 3-13
		return $this->csv;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_EmpresaID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:193: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_EmpresaID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:193: characters 73-86
			$tmp = FC_FacturacionIndividual_VTA::$col_EmpresaID;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:193: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_EmpresaID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:194: characters 3-25
		return $this->EmpresaID = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_FacturaID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:179: characters 3-111
		if ($this->get_TrackChanges() && ($this->get_FacturaID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:179: characters 73-86
			$tmp = FC_FacturacionIndividual_VTA::$col_FacturaID;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:179: characters 48-111
			$this->AddChange(new ChangeItem($tmp, $this->get_FacturaID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:180: characters 3-25
		return $this->FacturaID = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_FechaLapsoDesde ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:207: characters 3-129
		if ($this->get_TrackChanges() && ($this->get_FechaLapsoDesde() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:207: characters 79-98
			$tmp = FC_FacturacionIndividual_VTA::$col_FechaLapsoDesde;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:207: characters 54-129
			$this->AddChange(new ChangeItem($tmp, $this->get_FechaLapsoDesde(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:208: characters 3-31
		return $this->FechaLapsoDesde = $value;
	}

	/**
	 * @param \Date $value
	 * 
	 * @return \Date
	 */
	public function set_FechaLapsoHasta ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:221: characters 3-129
		if ($this->get_TrackChanges() && ($this->get_FechaLapsoHasta() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:221: characters 79-98
			$tmp = FC_FacturacionIndividual_VTA::$col_FechaLapsoHasta;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:221: characters 54-129
			$this->AddChange(new ChangeItem($tmp, $this->get_FechaLapsoHasta(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:222: characters 3-31
		return $this->FechaLapsoHasta = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_IDGrupo ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:165: characters 3-105
		if ($this->get_TrackChanges() && ($this->get_IDGrupo() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:165: characters 71-82
			$tmp = FC_FacturacionIndividual_VTA::$col_IDGrupo;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:165: characters 46-105
			$this->AddChange(new ChangeItem($tmp, $this->get_IDGrupo(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:166: characters 3-23
		return $this->IDGrupo = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_PrecioCancelar ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:235: characters 3-126
		if ($this->get_TrackChanges() && !Boot::equal($this->get_PrecioCancelar(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:235: characters 78-96
			$tmp = FC_FacturacionIndividual_VTA::$col_PrecioCancelar;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:235: characters 53-126
			$this->AddChange(new ChangeItem($tmp, $this->get_PrecioCancelar(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:236: characters 3-30
		return $this->PrecioCancelar = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_SaldoCompleto ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:305: characters 3-123
		if ($this->get_TrackChanges() && !Boot::equal($this->get_SaldoCompleto(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:305: characters 77-94
			$tmp = FC_FacturacionIndividual_VTA::$col_SaldoCompleto;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:305: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_SaldoCompleto(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:306: characters 3-29
		return $this->SaldoCompleto = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_SaldoNegativoPlan ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:263: characters 3-135
		if ($this->get_TrackChanges() && !Boot::equal($this->get_SaldoNegativoPlan(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:263: characters 81-102
			$tmp = FC_FacturacionIndividual_VTA::$col_SaldoNegativoPlan;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:263: characters 56-135
			$this->AddChange(new ChangeItem($tmp, $this->get_SaldoNegativoPlan(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:264: characters 3-33
		return $this->SaldoNegativoPlan = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_SaldoNegativoTotalEmpresa ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:291: characters 3-159
		if ($this->get_TrackChanges() && !Boot::equal($this->get_SaldoNegativoTotalEmpresa(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:291: characters 89-118
			$tmp = FC_FacturacionIndividual_VTA::$col_SaldoNegativoTotalEmpresa;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:291: characters 64-159
			$this->AddChange(new ChangeItem($tmp, $this->get_SaldoNegativoTotalEmpresa(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:292: characters 3-41
		return $this->SaldoNegativoTotalEmpresa = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_SaldoPositivoTotalEmpresa ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:277: characters 3-159
		if ($this->get_TrackChanges() && !Boot::equal($this->get_SaldoPositivoTotalEmpresa(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:277: characters 89-118
			$tmp = FC_FacturacionIndividual_VTA::$col_SaldoPositivoTotalEmpresa;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:277: characters 64-159
			$this->AddChange(new ChangeItem($tmp, $this->get_SaldoPositivoTotalEmpresa(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:278: characters 3-41
		return $this->SaldoPositivoTotalEmpresa = $value;
	}

	/**
	 * @param float $value
	 * 
	 * @return float
	 */
	public function set_SaldoPositvoPlan ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:249: characters 3-132
		if ($this->get_TrackChanges() && !Boot::equal($this->get_SaldoPositvoPlan(), $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:249: characters 80-100
			$tmp = FC_FacturacionIndividual_VTA::$col_SaldoPositvoPlan;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:249: characters 55-132
			$this->AddChange(new ChangeItem($tmp, $this->get_SaldoPositvoPlan(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:250: characters 3-32
		return $this->SaldoPositvoPlan = $value;
	}

	/**
	 * @param UUID $value
	 * 
	 * @return UUID
	 */
	public function set_SuscripcionID ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:144: characters 3-123
		if ($this->get_TrackChanges() && ($this->get_SuscripcionID() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:144: characters 77-94
			$tmp = FC_FacturacionIndividual_VTA::$col_SuscripcionID;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:144: characters 52-123
			$this->AddChange(new ChangeItem($tmp, $this->get_SuscripcionID(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:145: characters 3-29
		return $this->SuscripcionID = $value;
	}

	/**
	 * @param string $value
	 * 
	 * @return string
	 */
	public function set_csv ($value) {
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:319: characters 3-93
		if ($this->get_TrackChanges() && ($this->get_csv() !== $value)) {
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:319: characters 67-74
			$tmp = FC_FacturacionIndividual_VTA::$col_csv;
			#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:319: characters 42-93
			$this->AddChange(new ChangeItem($tmp, $this->get_csv(), $value));
		}
		#3_data\db\src/nMorph/core/db/zhungo_core/FC_FacturacionIndividual_VTA.hx:320: characters 3-19
		return $this->csv = $value;
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


		self::$view = new ViewSource("FC_FacturacionIndividual_VTA");
		self::$col_ID = new UUIDSentence("FC_FacturacionIndividual_VTA", "ID", NullableEnum::NULL(), true);
		self::$col_SuscripcionID = new UUIDSentence("FC_FacturacionIndividual_VTA", "SuscripcionID", NullableEnum::NOTNULL(), false);
		self::$col_NombrePersona = new VarcharSentence("FC_FacturacionIndividual_VTA", "NombrePersona", 250, NullableEnum::NOTNULL(), true);
		self::$col_IDGrupo = new UUIDSentence("FC_FacturacionIndividual_VTA", "IDGrupo", NullableEnum::NULL(), false);
		self::$col_FacturaID = new UUIDSentence("FC_FacturacionIndividual_VTA", "FacturaID", NullableEnum::NOTNULL(), false);
		self::$col_EmpresaID = new UUIDSentence("FC_FacturacionIndividual_VTA", "EmpresaID", NullableEnum::NOTNULL(), false);
		self::$col_FechaLapsoDesde = new DateTimeSentence("FC_FacturacionIndividual_VTA", "FechaLapsoDesde", NullableEnum::NOTNULL(), false);
		self::$col_FechaLapsoHasta = new DateTimeSentence("FC_FacturacionIndividual_VTA", "FechaLapsoHasta", NullableEnum::NULL(), false);
		self::$col_PrecioCancelar = new DecimalSentence("FC_FacturacionIndividual_VTA", "PrecioCancelar", 9, 8, NullableEnum::NULL(), false);
		self::$col_SaldoPositvoPlan = new DecimalSentence("FC_FacturacionIndividual_VTA", "SaldoPositvoPlan", 17, 8, NullableEnum::NULL(), false);
		self::$col_SaldoNegativoPlan = new DecimalSentence("FC_FacturacionIndividual_VTA", "SaldoNegativoPlan", 17, 8, NullableEnum::NULL(), false);
		self::$col_SaldoPositivoTotalEmpresa = new DecimalSentence("FC_FacturacionIndividual_VTA", "SaldoPositivoTotalEmpresa", 17, 8, NullableEnum::NULL(), false);
		self::$col_SaldoNegativoTotalEmpresa = new DecimalSentence("FC_FacturacionIndividual_VTA", "SaldoNegativoTotalEmpresa", 17, 8, NullableEnum::NULL(), false);
		self::$col_SaldoCompleto = new DecimalSentence("FC_FacturacionIndividual_VTA", "SaldoCompleto", 17, 8, NullableEnum::NULL(), false);
		self::$col_csv = new VarcharSentence("FC_FacturacionIndividual_VTA", "csv", -1, NullableEnum::NULL(), false);
	}
}

Boot::registerClass(FC_FacturacionIndividual_VTA::class, 'nMorph.core.db.zhungo_core.FC_FacturacionIndividual_VTA');
Boot::registerGetters('nMorph\\core\\db\\zhungo_core\\FC_FacturacionIndividual_VTA', [
	'csv' => true,
	'SaldoCompleto' => true,
	'SaldoNegativoTotalEmpresa' => true,
	'SaldoPositivoTotalEmpresa' => true,
	'SaldoNegativoPlan' => true,
	'SaldoPositvoPlan' => true,
	'PrecioCancelar' => true,
	'FechaLapsoHasta' => true,
	'FechaLapsoDesde' => true,
	'EmpresaID' => true,
	'FacturaID' => true,
	'IDGrupo' => true,
	'NombrePersona' => true,
	'SuscripcionID' => true,
	'ID' => true
]);
Boot::registerSetters('nMorph\\core\\db\\zhungo_core\\FC_FacturacionIndividual_VTA', [
	'csv' => true,
	'SaldoCompleto' => true,
	'SaldoNegativoTotalEmpresa' => true,
	'SaldoPositivoTotalEmpresa' => true,
	'SaldoNegativoPlan' => true,
	'SaldoPositvoPlan' => true,
	'PrecioCancelar' => true,
	'FechaLapsoHasta' => true,
	'FechaLapsoDesde' => true,
	'EmpresaID' => true,
	'FacturaID' => true,
	'IDGrupo' => true,
	'SuscripcionID' => true
]);
FC_FacturacionIndividual_VTA::__hx__init();
