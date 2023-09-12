/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.core.js";import"./kendo.buttongroup.js";import"./kendo.icons.js";var __meta__={id:"filter",name:"Filter",category:"web",depends:["core","buttongroup","icons"]},defaultValues={number:0,boolean:!1,string:"",date:""},operatorsTemplate=({ns:e,operatorsLabel:t,operators:o})=>`<select data-${e}bind='value: operator' title='${t}' data-${e}role='dropdownlist'>${Object.keys(o||{}).map((e=>"<option value='"+e+"'>"+(o[e].text||o[e])+"</option>")).join("")}</select>`,logicTemplate=({ns:e,operators:t})=>`<div data-${e}bind='value: logic' data-${e}role='filterbuttongroup'>${Object.keys(t||{}).map((e=>"<span value='"+e+"'>"+t[e]+"</span>")).join("")}</div>`,mainContainer="<ul class='k-filter-container'><li class='k-filter-group-main'></li></ul>",mainLogicTemplate=({mainFilterLogicLabel:e,uid:t,addExpression:o,addGroup:i,close:s,ns:a,operators:l})=>`<div class='k-filter-toolbar'><div role='toolbar' aria-label='${e}' class='k-toolbar k-toolbar-md' id='${t}'><div class='k-filter-toolbar-item'>`+logicTemplate({ns:a,operators:l})+"</div><div class='k-filter-toolbar-item'>"+`<button data-role='button' data-command='expression' class='k-button k-button-md k-rounded-md k-button-solid k-button-solid-base k-icon-button' role='button' aria-disabled='false' title='${o}' aria-label='${o}' tabindex='0'>`+kendo.ui.icon({icon:"filter-add-expression",iconClass:"k-button-icon"})+"</span></button></div><div class='k-filter-toolbar-item'>"+`<button data-role='button' data-command='group' class='k-button k-button-md k-rounded-md k-button-solid k-button-solid-base k-icon-button' role='button' aria-disabled='false' title='${i}' aria-label='${i}' tabindex='0'>`+kendo.ui.icon({icon:"filter-add-group",iconClass:"k-button-icon"})+"</span></button></div><div class='k-filter-toolbar-item'>"+`<button data-role='button' data-command='x' class='k-button k-button-md k-rounded-md k-button-flat k-button-flat-base k-icon-button' role='button' title='${s}' aria-label='${s}' aria-disabled='false' tabindex='0'>`+kendo.ui.icon({icon:"x",iconClass:"k-button-icon"})+"</button></div></div></div>",logicItemTemplate=({filterLogicLabel:e,addExpression:t,addGroup:o,close:i,ns:s,operators:a})=>`<li class='k-filter-item'><div class='k-filter-toolbar'><div role='toolbar' aria-label='${e}' class='k-toolbar k-toolbar-md'><div class='k-filter-toolbar-item'>`+logicTemplate({ns:s,operators:a})+"</div><div class='k-filter-toolbar-item'>"+`<button data-role='button' data-command='expression' class='k-button k-button-md k-rounded-md k-button-solid k-button-solid-base k-icon-button' role='button' title='${t}' aria-label='${t}' aria-disabled='false' tabindex='0'>`+kendo.ui.icon({icon:"filter-add-expression",iconClass:"k-button-icon"})+"</button></div><div class='k-filter-toolbar-item'>"+`<button data-role='button' data-command='group' class='k-button k-button-md k-rounded-md k-button-solid k-button-solid-base k-icon-button' role='button' title='${o}' aria-label='${o}' aria-disabled='false' tabindex='0'>`+kendo.ui.icon({icon:"filter-add-group",iconClass:"k-button-icon"})+"</button></div><div class='k-filter-toolbar-item'>"+`<button data-role='button' data-command='x' class='k-button k-button-md k-rounded-md k-button-flat k-button-flat-base k-icon-button' role='button' title='${i}' aria-label='${i}' aria-disabled='false' tabindex='0'>`+kendo.ui.icon({icon:"x",iconClass:"k-button-icon"})+"</button></div></div></div></li>",expressionItemTemplate=({filterExpressionLabel:e,ns:t,uid:o,fieldsLabel:i,fields:s,close:a})=>`<li class='k-filter-item'><div class='k-filter-toolbar'><div role='group' aria-label='${e}' class='k-toolbar k-toolbar-md' id='${o}'><div class='k-filter-toolbar-item k-filter-field'><select data-${t}bind='value: field' title='${i}' class='k-filter-dropdown' data-auto-width='true' data-${t}role='dropdownlist'>${Object.keys(s||{}).map((e=>"<option value='"+s[e].name+"'>"+s[e].label+"</option>")).join("")}</select></div><div class='k-filter-toolbar-item k-filter-operator'></div><div class='k-filter-toolbar-item k-filter-value'></div><div class='k-filter-toolbar-item'><button data-role='button' data-command='x' class='k-button k-button-md k-rounded-md k-button-flat k-button-flat-base k-icon-button' role='button' title='${a}' aria-label='${a}' aria-disabled='false' tabindex='0'>`+kendo.ui.icon({icon:"x",iconClass:"k-button-icon"})+"</button></div></div></div></li>";!function(e){var t=window.kendo,o=t.ui,i=t.guid,s=t.ns,a=o.Widget,l=o.ButtonGroup,n="change",r=".kendoFilter",d="Is equal to",p="Is not equal to",u={number:function(t,{field:o}){e(`<input id='${i()}' type='text' aria-label='${o}' title='${o}' data-${s}role='numerictextbox' data-${s}bind='value: value'/>`).appendTo(t)},string:function(o,{field:s}){e(`<span class='k-textbox k-input k-input-md k-rounded-md k-input-solid'><input id='${i()}' type='text' aria-label='${s}' title='${s}' class='k-input-inner' data-${t.ns}bind='value: value'/></span>`).appendTo(o)},boolean:function(t,{field:o}){e(`<input id='${i()}' class='k-checkbox k-checkbox-md k-rounded-md' aria-label='${o}' data-${s}role='checkbox' data-${s}bind='checked: value' type='checkbox'>`).appendTo(t)},date:function(t,{field:o}){e(`<input id='${i()}' type='text' aria-label='${o}' title='${o}' data-${s}role='datepicker' data-${s}bind='value: value'/>`).appendTo(t)}},f=l.extend({init:function(e,t){l.fn.init.call(this,e,t)},options:{name:"FilterButtonGroup"},value:function(e){if(void 0===e)return this._value;this._value=e,l.fn._select.call(this,this.wrapper.find("[value='"+e+"']")),this.trigger(n)},_select:function(t){-1!==t&&this.value(e(t).attr("value"))}}),c=a.extend({init:function(t,o){var i,s=this;a.fn.init.call(s,t,o),s.element=e(t).addClass("k-widget k-filter"),s.dataSource=o.dataSource,s.operators=e.extend(s.options.operators,o.operators),s._getFieldsInfo(),s._modelChangeHandler=s._modelChange.bind(s),s._renderMain(),o.expression&&s._addExpressionTree(s.filterModel),s._renderApplyButton(),s.options.expressionPreview&&(s._previewContainer||(s._previewContainer=e('<div class="k-filter-preview"></div>').insertAfter(s.element.children().eq(0))),i=s._createPreview(s.filterModel.toJSON()),s._previewContainer.html(i)),s._attachEvents(),s.hasCustomOperators()},events:[n],options:{name:"Filter",dataSource:null,expression:null,applyButton:!1,fields:[],mainLogic:"and",messages:{and:"And",or:"Or",apply:"Apply",close:"Close",addExpression:"Add Expression",fields:"Fields",filterExpressionLabel:"filter expression",filterLogicLabel:"filter logic",mainFilterLogicLabel:"main filter logic",operators:"Operators",addGroup:"Add Group"},operators:{string:{eq:d,neq:p,startswith:"Starts with",contains:"Contains",doesnotcontain:"Does not contain",endswith:"Ends with",isnull:"Is null",isnotnull:"Is not null",isempty:"Is empty",isnotempty:"Is not empty",isnullorempty:"Has no value",isnotnullorempty:"Has value"},number:{eq:d,neq:p,gte:"Is greater than or equal to",gt:"Is greater than",lte:"Is less than or equal to",lt:"Is less than",isnull:"Is null",isnotnull:"Is not null"},date:{eq:d,neq:p,gte:"Is after or equal to",gt:"Is after",lte:"Is before or equal to",lt:"Is before",isnull:"Is null",isnotnull:"Is not null"},boolean:{eq:d,neq:p}}},applyFilter:function(){var e=this.filterModel.toJSON();this._hasCustomOperators&&this._mapOperators(e),this._hasFieldsFilter(e.filters||[])?(this._removeEmptyGroups(e.filters),this.dataSource.filter(e)):this.dataSource.filter({})},destroy:function(){this.element.off(r),t.destroy(this.element.find(".k-filter-group-main")),this._previewContainer=null,this._applyButton=null,this._modelChangeHandler=null,a.fn.destroy.call(this)},setOptions:function(e){t.deepExtend(this.options,e),this.destroy(),this.element.empty(),this.init(this.element,this.options)},getOptions:function(){var t=e.extend(!0,{},this.options);return delete t.dataSource,t.expression=this.filterModel.toJSON(),t},_addExpressionTree:function(e){if(e.filters)for(var t=this.element.find("[id="+e.uid+"]"),o=0;o<e.filters.length;o++)e.filters[o].logic?this._addGroup(t,e.filters[o]):this._addExpression(t,e.filters[o]),e.filters[o].filters&&this._addExpressionTree(e.filters[o])},_attachEvents:function(){var t=this;t.element.on("click"+r,"button.k-button",(function(o){o.preventDefault();var i=e(o.currentTarget),s=i.data("command");"x"==s?t._removeExpression(i.closest(".k-toolbar")):"expression"==s?t._addExpression(i.closest(".k-toolbar")):"group"==s?t._addGroup(i.closest(".k-toolbar")):"apply"==s&&t.applyFilter()}))},_addExpression:function(o,i){var s,a=this,l=o.attr("id"),n=o.closest(".k-filter-toolbar").next("ul.k-filter-lines"),r=i?a._fields[i.field]:a._defaultField,d="";i?s=i:((s=m(a.filterModel,l)).filters||s.set("filters",[]),s=a._addNewModel(s.filters,r)),n.length||(n=e("<ul class='k-filter-lines'></ul>").appendTo(o.closest("li"))),d=e(t.template(expressionItemTemplate)({fields:a._fields,operators:a.operators[r.type],close:a.options.messages.close,fieldsLabel:a.options.messages.fields,uid:s.uid,ns:t.ns,filterExpressionLabel:a.options.messages.filterExpressionLabel})).appendTo(n),a._addExpressionControls(d.find(".k-toolbar"),r,s),i||a._expressionChange()},_addExpressionControls:function(e,o,i){var s=e.find(".k-filter-toolbar-item"),a=s.eq(1),l=s.eq(2);t.destroy(a),t.destroy(l),a.empty(),l.empty(),this._appendOperators(a,o),this._appendEditor(l,o),this._bindModel(e,i),this._showHideEditor(e,i)},_appendOperators:function(o,i){e(t.template(operatorsTemplate)({operators:i.operators&&i.operators[i.type]?i.operators[i.type]:this.operators[i.type],operatorsLabel:this.options.messages.operators,ns:t.ns})).appendTo(o)},_appendEditor:function(o,i){t.isFunction(i.editor)?i.editor(o,e.extend(!0,{},{field:i.name})):e(t.template(i.editor)({ns:t.ns,field:i.name,id:t.guid()})).appendTo(o)},_addNewModel:function(e,t){var o,i,s=t.type,a=t.operators;return a||(a=this.options.operators),i=Object.keys(a[s])[0],e.push({field:t.name}),(o=e[e.length-1]).set("value",t.defaultValue),o.set("operator",i),o},_addGroup:function(o,i){var s,a=this,l=a.filterModel,n=o.attr("id"),r=o.closest(".k-filter-toolbar").next("ul.k-filter-lines");i?l=i:((l=m(l,n)).filters||l.set("filters",[]),l.filters.push({logic:a.options.mainLogic}),l=l.filters[l.filters.length-1]),r.length||(r=e("<ul class='k-filter-lines'></ul>").appendTo(o.closest("li"))),s=e(t.template(logicItemTemplate)({operators:{and:a.options.messages.and,or:a.options.messages.or},addExpression:a.options.messages.addExpression,addGroup:a.options.messages.addGroup,close:a.options.messages.close,ns:t.ns,filterLogicLabel:a.options.messages.filterLogicLabel})).appendTo(r),a._bindModel(s.find(".k-toolbar"),l),i||a._expressionChange()},_bindModel:function(e,o){e.attr("id",o.uid),o.bind("change",this._modelChangeHandler),t.bind(e,o),e.parent().attr(t.attr("stop"),!0)},_createPreview:function(e){var o,i,s="",a=!1,l=this._hasFieldsFilter(e.filters||[]),n="";if(!e.filters||!e.filters.length||!l)return"";s+='<span class="k-filter-preview-bracket">(</span>';for(var r=0;r<e.filters.length;r++)(o=e.filters[r]).filters&&((n=this._createPreview(o))&&(a&&(s+='<span class="k-filter-preview-operator"> '+e.logic.toLocaleUpperCase()+" </span>"),a=!0),s+=n),o.field&&(i=this._fields[o.field],a&&(s+='<span class="k-filter-preview-operator"> '+e.logic.toLocaleUpperCase()+" </span>"),a=!0,s+='<span class="k-filter-preview-field">'+i.label+"</span>",s+='<span class="k-filter-preview-criteria"> '+this._getOperatorText(o.field,o.operator),o.operator.indexOf("is")<0?(s+=" </span>",s+="<span class='k-filter-preview-value'>'"+t.htmlEncode(i.previewFormat?t.toString(o.value,i.previewFormat):o.value)+"'</span>"):s+="</span>");return s+='<span class="k-filter-preview-bracket">)</span>'},_expressionChange:function(){var e=this,t=e.filterModel.toJSON(),o="";e.options.expressionPreview&&(o=e._createPreview(t),e._previewContainer.html(o)),e.trigger(n,{expression:t})},_getOperatorText:function(e,t){var o=this._fields[e].type,i=this._fields[e].operators;return i||(i=this.options.operators),i[o][t].text||i[o][t]},_addField:function(t,o){var i=this;t=e.extend(!0,{},{name:t.name||o,editor:t.editorTemplate||u[t.type||"string"],defaultValue:t.defaultValue||!1===t.defaultValue||0===t.defaultValue?t.defaultValue:defaultValues[t.type||"string"],type:t.type||"string",label:t.label||t.name||o,operators:t.operators,previewFormat:t.previewFormat}),i._fields[t.name]=t,i._defaultField||(i._defaultField=t)},_getFieldsInfo:function(){var e,t=this,o=t.options.fields.length?t.options.fields:(t.options.dataSource.options.schema.model||{}).fields;if(t._fields={},Array.isArray(o))for(var i=0;i<o.length;i++)e=o[i],t._addField(e);else for(var s in o)e=o[s],t._addField(e,s)},_hasFieldsFilter:function(e,t){t=!!t;for(var o=0;o<e.length;o++)if(e[o].filters&&(t=this._hasFieldsFilter(e[o].filters,t)),e[o].field)return!0;return t},_removeEmptyGroups:function(e){if(e)for(var t=e.length-1;t>=0;t--)e[t].logic&&!e[t].filters||e[t].filters&&!this._hasFieldsFilter(e[t].filters)?e.splice(t,1):e[t].filters&&this._removeEmptyGroups(e[t].filters)},_modelChange:function(e){var t=this,o=t.element.find("[id="+e.sender.uid+"]");if(t._showHideEditor(o,e.sender),"field"===e.field){var i=e.sender.field,s=e.sender.parent(),a=t._fields[i],l=t._addNewModel(s,a);e.sender.unbind("change",t._modelChangeHandler),s.remove(e.sender),t._addExpressionControls(o,a,l),t._expressionChange()}else"filters"!==e.field&&t._expressionChange()},_renderMain:function(){var o=this;e(mainContainer).appendTo(o.element),o.options.expression?o.filterModel=t.observable(o.options.expression):o.filterModel=t.observable({logic:o.options.mainLogic}),e(t.template(mainLogicTemplate)({operators:{and:o.options.messages.and,or:o.options.messages.or},addExpression:o.options.messages.addExpression,addGroup:o.options.messages.addGroup,close:o.options.messages.close,uid:o.filterModel.uid,ns:t.ns,mainFilterLogicLabel:o.options.messages.mainFilterLogicLabel})).appendTo(o.element.find("li").first()),o._bindModel(o.element.find(".k-toolbar").first(),o.filterModel)},_removeExpression:function(e){var o,i,s=this,a=e.attr("id"),l=e.closest("li");l.hasClass("k-filter-group-main")?(l=l.find(".k-filter-lines"),s.filterModel.filters&&(s.filterModel.filters.empty(),delete s.filterModel.filters)):(o=(i=m(s.filterModel,a)).parent(),i.unbind("change",s._modelChangeHandler),o.remove(i),o.length||delete o.parent().filters,l.siblings().length||(l=l.parent())),t.destroy(l),l.remove(),s._expressionChange()},_renderApplyButton:function(){var o=this;o.options.applyButton&&(o._applyButton||(o._applyButton=e(t.format('<button type="button" data-command="apply" aria-label="{0}" title="{0}" class="k-button k-button-md k-rounded-md k-button-solid k-button-solid-base k-filter-apply">{0}</button>',o.options.messages.apply)).appendTo(o.element)))},_showHideEditor:function(e,t){if(!t.logic){var o=t.operator,i=e.find(".k-filter-toolbar-item").eq(2);"isnull"==o||"isnotnull"==o||"isempty"==o||"isnotempty"==o||"isnullorempty"==o||"isnotnullorempty"==o?i.hide():i.show()}},_mapOperators:function(e){var t=this;e.filters&&e.filters.forEach((function(e){if(e.filters)t._mapOperators(e);else{var o,i=t._fields[e.field],s=i.type;(o=i.operators&&i.operators[s][e.operator]?i.operators[s][e.operator]:t.operators[s][e.operator])&&(e.operator=o.handler||e.operator)}}))},hasCustomOperators:function(){var t=e.extend(!0,{},this.operators);for(var o in this._fields)t=e.extend(!0,{},t,this._fields[o].operators);this._hasCustomOperators=b(t)}});function b(e){for(var t in e){var o=e[t];if(o.handler&&"function"==typeof o.handler||"object"==typeof o&&null!==o&&b(o))return!0}return!1}function m(e,t){if(e.uid===t)return e;if(e.filters)for(var o=0;o<e.filters.length;o++){var i=m(e.filters[o],t);if(i)return i}}o.plugin(c),o.plugin(f)}(window.kendo.jQuery);
//# sourceMappingURL=kendo.filter.js.map
