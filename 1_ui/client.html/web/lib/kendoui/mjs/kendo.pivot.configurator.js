/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.dom.js";import"./kendo.html.chip.js";import"./kendo.html.chiplist.js";import"./kendo.pivot.common.js";import"./kendo.icons.js";var __meta__={id:"pivot.configurator",name:"PivotConfigurator",category:"web",depends:["dropdownlist","treeview","treeview.draganddrop","pivot.fieldmenu","html.chip","html.chiplist","pivot.common","icons"],hidden:!0};!function(e,t){var s=window.kendo,a=s.ui,i=s.htmlEncode,r=a.Widget,n=window.kendo.pivotgrid.common,o=n.fetchDiscover,c=n.configuratorReducer,l=n.PIVOT_CONFIGURATOR_ACTION,d=".kendoPivotConfigurator",u="mouseenter"+d+" mouseleave"+d,h=({name:e})=>`<div class="k-pivotgrid-target k-pivotgrid-configurator-section"><strong>${e}</strong><div class="k-pivotgrid-target-wrap"></div>`;function m(e){for(var t,s=0,a=e.length;s<a;s++)if(2==e[s].type){t=!0;break}t&&e.splice(s+1,0,{caption:"KPIs",defaultHierarchy:"[KPIs]",name:"KPIs",uniqueName:"[KPIs]"})}function p(e){return{name:e.uniqueName,type:e.type}}function f(e){for(var t=0,s=e.length;t<s;t++)e[t].uniqueName=e[t].name,e[t].type="kpi";return e}function g(t){var s=e(t).closest(".k-pivot-setting");return s.length?s.data("kendoPivotSettingTarget"):null}var v=r.extend({init:function(e,t){r.fn.init.call(this,e,t),this.element.addClass("k-widget k-pivotgrid-configurator k-pos-relative"),this._dataSource(),this._layout(),this.refresh(),t.height&&this.element.height(t.height),s.notify(this)},events:[],options:{name:"PivotConfiguratorV2",orientation:"vertical",filterable:!1,sortable:!1,messages:{title:"Settings",cancelButtonText:"Cancel",applyButtonText:"Apply",measures:"Select some fields to begin setup",columns:"Select some fields to begin setup",rows:"Select some fields to begin setup"}},setDataSource:function(e){this.options.dataSource=e,this._dataSource(),this.measures&&this.measures.setDataSource(e),this.rows&&this.rows.setDataSource(e),this.columns&&this.columns.setDataSource(e),this.refresh()},_dataSource:function(){var e=this;e.dataSource&&e._refreshHandler?e.dataSource.unbind("change",e._refreshHandler).unbind("error",e._errorHandler).unbind("progress",e._progressHandler):(e._errorHandler=e._error.bind(e),e._refreshHandler=e.refresh.bind(e),e._progressHandler=e._requestStart.bind(e)),e.dataSource=s.data.PivotDataSourceV2.create(e.options.dataSource),e.dataSource.bind("change",e._refreshHandler).bind("error",e._errorHandler).bind("progress",e._progressHandler)},_layout:function(){var t=this,a=t.options,r=a.messages,n="horizontal"==a.orientation,o=e("<div class='k-pivotgrid-configurator-panel k-pivotgrid-configurator-push'></div>");o.addClass(n?"k-pivotgrid-configurator-horizontal":"k-pivotgrid-configurator-vertical"),t.element.append(o),t.panel=o,e((({title:e})=>`<div class="k-pivotgrid-configurator-header"><div class="k-pivotgrid-configurator-header-text">${i(e)}</div></div>`)({title:this.options.messages.title})).appendTo(t.panel),e((({formClass:e,horizontal:t})=>`<div class="k-pivotgrid-configurator-content"><form class="${i(e)}">`+(t?'<div class="k-form-field-wrapper">':"")+'<div class="k-form-field"><label class="k-label">Fields</label></div><div class="k-form-field"><div class="k-fields-list-wrapper"></div></div>'+(t?'</div><div class="k-form-field-wrapper">':"")+'<div class="k-form-field"><label class="k-label">Columns</label></div><div class="k-chip-list k-column-fields"></div><div class="k-form-field"><label class="k-label">Rows</label></div><div class="k-chip-list k-row-fields"></div>'+(t?'</div><div class="k-form-field-wrapper">':"")+'<div class="k-form-field"><label class="k-label">Values</label></div><div class="k-chip-list k-column-fields"></div>'+(t?"</div>":"")+"</form></div>")({formClass:n?"k-form k-form-horizontal":"k-form",filterable:a.filterable,horizontal:n})).appendTo(t.panel).find(".k-chip-list").each((function(t,i){s.html.renderChipList(i,e.extend({},a))})),t._fields(),e((({cancelText:e,applyText:t})=>`<div class="k-pivotgrid-configurator-actions k-actions k-hstack k-justify-content-end"><button class="k-button k-button-md k-rounded-md k-button-solid k-button-solid-base"><span class="k-button-text">${i(e)}</span></button><button class="k-button k-button-md k-rounded-md k-button-solid k-button-solid-primary"><span class="k-button-text">${i(t)}</span></button></div>`)({cancelText:r.cancelButtonText,applyText:r.applyButtonText})).appendTo(t.panel),t._targets(),t.element.on("click"+d,".k-pivotgrid-configurator-actions > button",t._actions.bind(t))},_actions:function(t){t.preventDefault(),e(t.currentTarget).closest(":not(path,svg)").index()?(this.columns._applyState(),this.rows._applyState(),this.measures._applyState(),this.dataSource.read()):(this.columns._cancelChanges(),this.rows._cancelChanges(),this.measures._cancelChanges(),this.treeView.dataSource.read())},_targets:function(){var t=this,a=t.panel.find(".k-column-fields").first(),r=t.panel.find(".k-row-fields"),n=t.panel.find(".k-chip-list").last(),o=this.options,c=({name:t,menuenabled:a})=>s.html.renderChip((({name:e,menuenabled:t})=>`<span><span class="k-chip-label">${i(e)}</span>${t?s.ui.icon("more-vertical"):""}</span>`)({name:t,menuenabled:a}),e.extend({},o,{fillMode:"solid",themeColor:"base",rounded:"full",removable:!0,removeIcon:"x-circle"}));this.columns=this._createTarget(a,{filterable:o.filterable,sortable:o.sortable,template:c,connectWith:r,messages:{empty:o.messages.columns}}),this.rows=this._createTarget(r,{filterable:o.filterable,sortable:o.sortable,template:c,setting:"rows",connectWith:a,messages:{empty:this.options.messages.rows}}),this.measures=this._createTarget(n,{setting:"measures",template:c,messages:{empty:o.messages.measures}})},_createTarget:function(t,a){var i=this;return new s.ui.PivotSettingTargetV2(t,e.extend({dataSource:this.dataSource,hint:function(e){return e.clone()},remove:function(e){var t=i.treeView.wrapper.find("[data-name='"+e.name+"']").closest("li"),a=t.attr(s.attr("uid")),r=i.treeView.dataSource.getByUid(a);r&&(r.checked=!1,t.find("input").attr("checked",!1))},template:a.template},a))},_fields:function(){var t=this,s=t.element.find(".k-fields-list-wrapper");this.treeView=e("<div/>").appendTo(s).kendoTreeView({checkboxes:{checkChildren:!0,template:({item:e})=>{var t="";return(e.hasChildren||e.aggregator||e.local)&&"[KPIs]"!==e.uniqueName&&"[Measures]"!==e.uniqueName&&"Measures"!==e.uniqueName&&(t+=`<input type="checkbox" data-name="${i(e.uniqueName)}" ${e.checked?"checked":""} class="k-checkbox k-checkbox-md k-rounded-md" id="${i(e.uid)}" tabindex="-1">`),t}},dataTextField:"caption",autoBind:!1,check:function(e){var s=e.sender.dataItem(e.node),a={type:l.toggleSelection,payload:s},i={columnAxes:t.columns._state(),rowAxes:t.rows._state(),measureAxes:t.measures._state()},r=c(i,a);t.dataSource.cubeSchema&&r.measureAxes&&r.measureAxes.length&&r.measureAxes.length>i.measureAxes.length&&t.dataSource.cubeSchema.restoreMeasure(r.measureAxes,s),s.defaultHierarchy&&s.items&&s.items.length&&(t._checkMembers([{name:s.defaultHierarchy}],s.items),s.items.trigger("change")),r.columnAxes&&(t.columns._state(r.columnAxes),t.columns._redraw()),r.rowAxes&&(t.rows._state(r.rowAxes),t.rows._redraw()),r.measureAxes&&(t.measures._state(r.measureAxes),t.measures._redraw())},dataSource:this._treeViewDataSource()}).data("kendoTreeView"),this.treeView.wrapper.off("click",this.treeView._clickHandler)},_treeViewDataSource:function(){var t=this;return s.data.HierarchicalDataSource.create({schema:{model:{id:"uniqueName",hasChildren:function(e){return t.dataSource.cubeSchema&&"Measures"!==e.uniqueName?(e.local=!0,!1):!("hierarchyUniqueName"in e)&&!("aggregator"in e)}}},transport:{read:function(s){var a,i,r,n=t.dataSource.transport,c=n.catalog(),l=n.cube(),d={url:n.options.read},u=t.columns._state(),h=t.rows._state(),p=t.measures._state(),g=u.concat(h).concat(p);e.isEmptyObject(s.data)?t.dataSource.cubeSchema?(i=t.dataSource.cubeSchema.dimensions(),t._checkMembers(g,i),s.success(i)):o(d,{connection:{catalog:c,cube:l},restrictions:{catalogName:c,cubeName:l},command:"schemaDimensions"}).then((function(e){t._checkMembers(g,e),m(e),s.success(e)})):(a=t.treeView.dataSource.get(s.data.uniqueName),t.dataSource.cubeSchema?(r=t.dataSource.measures(),t._checkMembers(g,r),s.success(r)):"[KPIs]"===a.uniqueName?o(d,t._getKPIOptions(c,l)).then((function(e){s.success(f(e))})):"kpi"==a.type?s.success(_(a)):o(d,t._loadFieldsCommand(a,c,l)).then((function(e){t._checkMembers(g,e),s.success(e)})))}}})},_checkMembers:function(e,t){var s={},a=0;for(a=0;a<e.length;a++)s[e[a].name]=!0;for(a=0;a<t.length;a++)s[t[a].uniqueName]&&(t[a].checked=!0)},_getKPIOptions:function(e,t){return{connection:{catalog:e,cube:t},restrictions:{catalogName:e,cubeName:t},command:"schemaKPIs"}},_loadFieldsCommand:function(e,t,s){var a,i,r;return 2===e.type?a="schemaMeasures":e.dimensionUniqueName?(a="schemaLevels",r=e.uniqueName):(a="schemaHierarchies",i=e.uniqueName),{connection:{catalog:t,cube:s},restrictions:{catalogName:t,cubeName:s,hierarchyUniqueName:r,dimensionUniqueName:i},command:a}},_progress:function(e){s.ui.progress(this.element,e)},_error:function(){this._progress(!1)},_requestStart:function(){this._progress(!0)},destroy:function(){r.fn.destroy.call(this),this.dataSource.unbind("change",this._refreshHandler),this.element.off(d),this.rows.destroy(),this.columns.destroy(),this.measures.destroy(),this.treeView.destroy(),this.element=null,this._refreshHandler=null},refresh:function(){this.treeView&&this.treeView.dataSource.fetch(),this._progress(!1)}});a.plugin(v);var k=r.extend({init:function(e,t){r.fn.init.call(this,e,t),this.element.addClass("k-pivotgrid-configurator-panel kendo-jquery"),this.options.height&&this.element.outerHeight(this.options.height),this._dataSource(),this._layout(),this.refresh(),s.notify(this)},events:[],options:{name:"PivotConfigurator",filterable:!1,sortable:!1,messages:{measures:"Drop Data Fields Here",columns:"Drop Column Fields Here",rows:"Drop Rows Fields Here",measuresLabel:"Measures",columnsLabel:"Columns",rowsLabel:"Rows",fieldsLabel:"Fields"}},_dataSource:function(){var e=this;e.dataSource&&e._refreshHandler?e.dataSource.unbind("change",e._refreshHandler).unbind("error",e._errorHandler).unbind("progress",e._progressHandler):(e._errorHandler=e._error.bind(e),e._refreshHandler=e.refresh.bind(e),e._progressHandler=e._requestStart.bind(e)),e.dataSource=s.data.PivotDataSource.create(e.options.dataSource),e.dataSource.bind("change",e._refreshHandler).bind("error",e._errorHandler).bind("progress",e._progressHandler)},setDataSource:function(e){this.options.dataSource=e,this._dataSource(),this.measures&&this.measures.setDataSource(e),this.rows&&this.rows.setDataSource(e),this.columns&&this.columns.setDataSource(e),this.refresh()},_treeViewDataSource:function(){var t=this;return s.data.HierarchicalDataSource.create({schema:{model:{id:"uniqueName",hasChildren:function(e){return!("hierarchyUniqueName"in e)&&!("aggregator"in e)}}},transport:{read:function(s){var a,i;e.isEmptyObject(s.data)?t.dataSource.schemaDimensions().done((function(e){t.dataSource.cubeBuilder||m(e),s.success(e)})).fail(s.error):("[KPIs]"===(a=t.treeView.dataSource.get(s.data.uniqueName)).uniqueName?(i=!0,t.dataSource.schemaKPIs().done((function(e){s.success(f(e))})).fail(s.error)):"kpi"==a.type&&(i=!0,s.success(_(a))),i||(2==a.type?t.dataSource.schemaMeasures():a.dimensionUniqueName?t.dataSource.schemaLevels(s.data.uniqueName):t.dataSource.schemaHierarchies(s.data.uniqueName)).done(s.success).fail(s.error))}}})},_progress:function(e){s.ui.progress(this.element,e)},_error:function(){this._progress(!1)},_requestStart:function(){this._progress(!0)},_layout:function(){e('<div class="k-pivotgrid-configurator"><div class="k-pivotgrid-configurator-content"></div></div>').appendTo(this.element),this.form=this.element.find(".k-pivotgrid-configurator-content"),this._fields(),this._targets()},_fields:function(){var t=e('<div class="k-pivotgrid-fields k-pivotgrid-configurator-section"><strong>'+this.options.messages.fieldsLabel+'</strong><div class="k-fields-list-wrapper"></div></div>').appendTo(this.form);this.treeView=e("<div/>").appendTo(t.find(".k-fields-list-wrapper")).kendoTreeView({template:({item:e})=>{var t="";return 2==e.type||"[KPIs]"==e.uniqueName?t+=s.ui.icon(2==e.type?"sum":"caret-alt-expand"):e.type&&"kpi"!==e.type&&(t+=s.ui.icon("arrows-axes")),t+=`${i(e.caption||e.name)}`},dataTextField:"caption",dragAndDrop:!0,autoBind:!1,dataSource:this._treeViewDataSource(),dragstart:function(e){var t=this.dataItem(e.sourceNode);(t.hasChildren||t.aggregator||t.measure)&&2!=t.type&&"[KPIs]"!==t.uniqueName||e.preventDefault()},drag:function(e){var t="cancel",s=g(e.dropTarget);s&&s.validate(this.dataItem(e.sourceNode))&&(t="plus"),e.setStatusClass(t)},drop:function(e){e.preventDefault();var t,s,a,i,r=g(e.dropTarget),n=this.dataItem(e.sourceNode);if(r&&r.validate(n)){if(i=n.defaultHierarchy||n.uniqueName,"kpi"===n.type)for(s=(a=_(n)).length,i=[],t=0;t<s;t++)i.push(p(a[t]));else n.kpi&&(i=[p(n)]);r.add(i)}}}).data("kendoTreeView")},_createTarget:function(t,a){var i;return i=({name:e,sortIcon:t})=>`<div class="k-chip k-chip-md k-rounded-full k-chip-solid k-chip-solid-base" data-${s.ns}name="${e}"><span class="k-chip-content"><span class="k-chip-label">${e}</span></span><span class="k-chip-actions k-field-actions">`+function(e,t){var a=t.sortable,i="";return a&&(i+=e?`<span class="k-chip-action">${s.ui.icon(e+"-sm")}</span>`:""),(t.filterable||a)&&(i+=`<span class="k-setting-fieldmenu k-chip-action">${s.ui.icon("more-vertical")}</span>`),i+`<span class="k-setting-delete k-chip-action">${s.ui.icon("x")}</span>`}(t,a)+"</span></div>",new s.ui.PivotSettingTarget(t,e.extend({dataSource:this.dataSource,template:i,emptyTemplate:e=>`<span class="k-empty">${e}</span>`},a))},_targets:function(){var t=e('<div class="k-pivotgrid-targets"/>').appendTo(this.form),s=e(h({name:this.options.messages.columnsLabel,icon:"columns"})).appendTo(t),a=e('<div class="k-column-fields k-chip-list" />').appendTo(s.find(".k-pivotgrid-target-wrap")),i=e(h({name:this.options.messages.rowsLabel,icon:"rows"})).appendTo(t),r=e('<div class="k-column-fields k-chip-list" />').appendTo(i.find(".k-pivotgrid-target-wrap")),n=e(h({name:this.options.messages.measuresLabel,icon:"sum"})).appendTo(t),o=e('<div class="k-column-fields k-chip-list" />').appendTo(n.find(".k-pivotgrid-target-wrap")),c=this.options;this.columns=this._createTarget(a,{filterable:c.filterable,sortable:c.sortable,connectWith:r,messages:{empty:c.messages.columns,fieldMenu:c.messages.fieldMenu}}),this.rows=this._createTarget(r,{filterable:c.filterable,sortable:c.sortable,setting:"rows",connectWith:a,messages:{empty:this.options.messages.rows,fieldMenu:this.options.messages.fieldMenu}}),this.measures=this._createTarget(o,{setting:"measures",messages:{empty:c.messages.measures}}),a.add(r).add(o).on(u,".k-item:not(.k-empty)",this._toggleHover)},_toggleHover:function(t){e(t.currentTarget).closest(":not(path,svg)").toggleClass("k-hover","mouseenter"===t.type)},_resize:function(){var e=this.element,t=this.options.height;t&&e.outerHeight(t)},refresh:function(){var e=this.dataSource;(e.cubeBuilder||this._cube!==e.cube()||this._catalog!==e.catalog())&&this.treeView.dataSource.fetch(),this._catalog=this.dataSource.catalog(),this._cube=this.dataSource.cube(),this._resize(),this._progress(!1)},destroy:function(){r.fn.destroy.call(this),this.dataSource.unbind("change",this._refreshHandler),this.form.find(".k-pivot-setting").off(d),this.rows.destroy(),this.columns.destroy(),this.measures.destroy(),this.treeView.destroy(),this.element=null,this._refreshHandler=null}});function b(e,t,s){return{hierarchyUniqueName:e,uniqueName:t,caption:t,measure:t,name:t,type:s,kpi:!0}}function _(e){var t=e.name;return[b(t,e.value,"value"),b(t,e.goal,"goal"),b(t,e.status,"status"),b(t,e.trend,"trend")]}s.cssProperties.registerPrefix("HTMLChip","k-chip-"),s.cssProperties.registerValues("HTMLChip",[{prop:"rounded",values:s.cssProperties.roundedValues.concat([["full","full"]])}]),a.plugin(k)}(window.kendo.jQuery);
//# sourceMappingURL=kendo.pivot.configurator.js.map
