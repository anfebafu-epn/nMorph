/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.calendar.js";import"./kendo.popup.js";import"./kendo.dateinput.js";import"./kendo.html.button.js";import"./kendo.label.js";import"./kendo.actionsheet.js";var __meta__={id:"datepicker",name:"DatePicker",category:"web",description:"The DatePicker widget allows the user to select a date from a calendar or by direct input.",depends:["calendar","popup","html.button","label","actionsheet"]};!function(e,t){var a=window.kendo,n=a.ui,i=a.html,l=a.mediaQuery,o=n.Widget,r=a.parseDate,s=a.keys,d=a.support,u=a.template,p=a._activeElement,c="<div />",m=".kendoDatePicker",_="click"+m,f=d.mouseAndTouchPresent?a.applyEventMap("up",m.slice(1)):_,v="open",h="close",b="change",g="disabled",y="readonly",w="k-focus",k="k-selected",D="k-disabled",x="mouseenter"+m+" mouseleave"+m,I="mousedown"+m,C="navigate",V="id",A="month",L="aria-disabled",M="aria-readonly",T="aria-expanded",P="aria-hidden",S="aria-activedescendant",Q=a.calendar,O=Q.isInRange,R=Q.restrictValue,E=Q.isEqualDatePart,H=e.extend,F=Date;function z(t){var a=t.parseFormats,n=t.format;Q.normalize(t),(a=Array.isArray(a)?a:[a]).length||a.push("yyyy-MM-dd"),-1===e.inArray(n,a)&&a.splice(0,0,t.format),t.parseFormats=a}function N(e){e.preventDefault()}var j=function(t){var i,o=this,r=document.body,s=e(c).attr(P,"true").addClass("k-calendar-container");o.options=t=t||{},i=t.id,o.bigScreenMQL=l("large"),o.smallScreenMQL=l("small"),"auto"==t.adaptiveMode&&o.smallScreenMQL.onChange((function(){o.popup&&a.isFunction(o.popup.fullscreen)&&o.popup.fullscreen(o.smallScreenMQL.mediaQueryList.matches)})),t.omitPopup?s=t.dateDiv:(s.appendTo(r),"auto"!=t.adaptiveMode||o.bigScreenMQL.mediaQueryList.matches?o.popup=new n.Popup(s,H(t.popup,t,{name:"Popup",isRtl:a.support.isRtl(t.anchor)})):o.popup=new n.ActionSheet(s,{adaptive:!0,title:"Set dates",subtitle:"DD / MM / YY",closeButton:!0,focusOnActivate:!1,fullscreen:o.smallScreenMQL.mediaQueryList.matches,popup:H(t.popup,t,{name:"Popup",isRtl:a.support.isRtl(t.anchor)})})),i&&(i+="_dateview",s.attr(V,i),o._dateViewID=i),o.div=s,o.value(t.value)};j.prototype={_calendar:function(){var t,i=this,l=i.calendar,o=i.options;if(!l){var r="auto"!=o.adaptiveMode||this.bigScreenMQL.mediaQueryList.matches?this.options.size:"large";t=e(c).attr(V,a.guid()).appendTo(o.omitPopup?o.dateDiv:i.popup._content||i.popup.element).on(I,N).on(_,"td:has(.k-link)",i._click.bind(i)),i.calendar=l=new n.Calendar(t,{componentType:o.componentType,size:r,messages:o.messages}),i._setOptions(o),t.addClass(a.getValidCssClass("k-calendar-","size",r)),l.navigate(i._value||i._current,o.start),i.value(i._value)}},_setOptions:function(e){this.calendar.setOptions({focusOnNav:!1,change:e.change,culture:e.culture,dates:e.dates,depth:e.depth,footer:e.footer,format:e.format,max:e.max,min:e.min,month:e.month,weekNumber:e.weekNumber,start:e.start,messages:e.messages,disableDates:e.disableDates})},setOptions:function(e){var t=this,a=t.options,n=e.disableDates;n&&(e.disableDates=Q.disabled(n)),t.options=H(a,e,{change:a.change,close:a.close,open:a.open}),t.calendar&&t._setOptions(t.options)},destroy:function(){var e=this;this.popup&&this.popup.destroy(),e.bigScreenMQL&&(e.bigScreenMQL.destroy(),e.bigScreenMQL=null),e.smallScreenMQL&&(e.smallScreenMQL.destroy(),e.smallScreenMQL=null)},open:function(){var e,t=this;t._calendar(),e=t.popup._hovered,t.popup._hovered=!0,t.popup.open(),setTimeout((function(){t.popup._hovered=e}),1)},close:function(){this.popup&&this.popup.close()},min:function(e){this._option("min",e)},max:function(e){this._option("max",e)},toggle:function(){this[this.popup.visible()?h:v]()},move:function(e){var t=this,a=e.keyCode,n=t.calendar,i=e.ctrlKey&&a==s.DOWN||a==s.ENTER,l=!1;if(e.altKey)a==s.DOWN?(t.open(),e.preventDefault(),l=!0):a==s.UP&&(t.close(),e.preventDefault(),l=!0);else if(t.popup&&t.popup.visible()){if(a==s.ESC||i&&n._cell.hasClass(k))return t.close(),e.preventDefault(),!0;a!=s.SPACEBAR&&(t._current=n._move(e)),l=!0}return l},current:function(e){this._current=e,this.calendar&&this.calendar._focus(e)},value:function(e){var t=this,a=t.calendar,n=t.options,i=n.disableDates;i&&i(e)&&(e=null),t._value=e,t._current=new F(+R(e,n.min,n.max)),a&&a.value(e)},_click:function(e){-1!==e.currentTarget.className.indexOf(k)&&(this.calendar.trigger("change"),this.close())},_option:function(e,t){var a=this.calendar;this.options[e]=t,a&&a[e](t)}},j.normalize=z,a.DateView=j;var B=o.extend({init:function(n,i){var s,d=this;o.fn.init.call(d,n,i),n=d.element,(i=d.options).disableDates=a.calendar.disabled(i.disableDates),i.min=r(n.attr("min"))||r(i.min),i.max=r(n.attr("max"))||r(i.max),d.options.readonly=i.readonly!==t?i.readonly:Boolean(d.element.attr("readonly")),d.options.enable=i.enable!==t?i.enable:!Boolean(n.is("[disabled]")||e(n).parents("fieldset").is(":disabled")),z(i),d._initialOptions=H({},i),d._wrapper(),d._createDateView(),d._createDateViewProxy=d._createDateView.bind(d),d.bigScreenMQL=l("large"),"auto"==d.options.adaptiveMode&&d.bigScreenMQL.onChange((()=>{d._createDateViewProxy(),d.dateView.value(d._value)})),d._icon();try{n[0].setAttribute("type","text")}catch(e){n[0].type="text"}n.addClass("k-input-inner").attr({role:"combobox","aria-expanded":!1,"aria-haspopup":"grid","aria-controls":d.dateView._dateViewID,autocomplete:"off"}),d._reset(),d._template(),!d.options.enable?d.enable(!1):d.readonly(n.is("[readonly]")),s=r(i.value||d.element.val(),i.parseFormats,i.culture),d._createDateInput(i),d._old=d._update(s||d.element.val()),d._oldText=n.val(),d._applyCssClasses(),i.label&&d._label(),a.notify(d)},events:[v,h,b],options:{name:"DatePicker",value:null,footer:"",format:"",culture:"",parseFormats:[],min:new Date(1900,0,1),max:new Date(2099,11,31),start:A,depth:A,animation:{},month:{},dates:[],disableDates:null,ARIATemplate:({valueType:e,text:t})=>`Current focused ${e} is ${t}`,dateInput:!1,weekNumber:!1,messages:{weekColumnHeader:""},componentType:"classic",adaptiveMode:"none",size:"medium",fillMode:"solid",rounded:"medium",label:null},_createDateView:function(){var e,t=this,a=t.options,n=t.element;t.dateView&&(t.dateView.destroy(),t.dateView=null),t.dateView=new j(H({},a,{id:n.attr(V),anchor:t.wrapper,change:function(){t._change(this.value()),t.close()},close:function(a){t.trigger(h)?a.preventDefault():(n.attr(T,!1),e.attr(P,!0),setTimeout((function(){n.removeAttr("aria-activedescendant")})))},open:function(a){var i,l=t.options;t.trigger(v)?a.preventDefault():(t.element.val()!==t._oldText&&(i=r(n.val(),l.parseFormats,l.culture),t.dateView[i?"current":"value"](i)),n.attr(T,!0),e.attr(P,!1),t._updateARIA(i))}})),e=t.dateView.div},setOptions:function(e){var n=this,i=n._value;o.fn.setOptions.call(n,e),(e=n.options).min=r(e.min),e.max=r(e.max),z(e),n._dateIcon.off(m),n._dateIcon.remove(),n.dateView.setOptions(e),n._icon(),n._editable({readonly:e.readonly===t?n.options.readonly:e.readonly,disable:!(e.enable===t?n.options.enable:e.enable)}),n._createDateInput(e),n._dateInput||n.element.val(a.toString(i,e.format,e.culture)),i&&n._updateARIA(i),e.label&&n._inputLabel?n.label.setOptions(e.label):!1===e.label?(n.label._unwrapFloating(),n._inputLabel.remove(),delete n._inputLabel):e.label&&n._label()},_editable:function(e){var t=this,a=t._dateIcon.off(m),n=t.element.off(m),i=t.wrapper.off(m),l=e.readonly,o=e.disable;l||o?(i.addClass(o?D:"").removeClass(o?"":D),n.attr(g,o).attr(y,l).attr(L,o).attr(M,l)):(i.removeClass(D).on(x,t._toggleHover),n&&n.length&&(n[0].removeAttribute(g),n[0].removeAttribute(y)),n.attr(L,!1).attr(M,!1).on("keydown"+m,t._keydown.bind(t)).on("focusout"+m,t._blur.bind(t)).on("focus"+m,(function(){t.wrapper.addClass(w)})),a.on(f,t._click.bind(t)).on(I,N))},readonly:function(e){this._editable({readonly:e===t||e,disable:!1}),this._dateInput&&this._dateInput._editable({readonly:e===t||e,disable:!1}),this.label&&this.label.floatingLabel&&this.label.floatingLabel.readonly(e===t||e)},enable:function(e){this._editable({readonly:!1,disable:!(e=e===t||e)}),this._dateInput&&this._dateInput._editable({readonly:!1,disable:!(e=e===t||e)}),this.label&&this.label.floatingLabel&&this.label.floatingLabel.enable(e=e===t||e)},_label:function(){var t=this,n=t.options,i=e.isPlainObject(n.label)?n.label:{content:n.label};t._dateInput&&(i.floatCheck=()=>!t.value()&&!t._dateInput._hasDateInput()&&document.activeElement!==t.element[0]&&(t.element.val(""),!0)),t.label=new a.ui.Label(null,e.extend({},i,{widget:t})),t._inputLabel=t.label.element},destroy:function(){var e=this;e.label&&e.label.destroy(),o.fn.destroy.call(e),e.dateView.calendar&&e._navigateCalendarHandler&&(e.dateView.calendar.unbind(C,e._navigateCalendarHandler),e._navigateCalendarHandler=null),e.dateView.destroy(),e.element.off(m),e._dateIcon.off(m),e._form&&e._form.off("reset",e._resetHandler),e.bigScreenMQL&&e.bigScreenMQL.destroy(),e._createDateViewProxy=null},open:function(){this.dateView.open(),this._navigateCalendar()},close:function(){this.dateView.close()},min:function(e){return this._option("min",e)},max:function(e){return this._option("max",e)},value:function(e){var a=this;if(e===t)return a._value;a._old=a._update(e),null===a._old&&(a._dateInput?a._dateInput.value(a._old):a.element.val("")),a._oldText=a.element.val(),a.label&&a.label.floatingLabel&&a.label.floatingLabel.refresh()},_toggleHover:function(t){e(t.currentTarget).toggleClass("k-hover","mouseenter"===t.type)},_blur:function(){var e=this,t=e.element.val();e.close(),t!==e._oldText&&(e._change(t),t||e.dateView.current(a.calendar.getToday())),e.wrapper.removeClass(w)},_click:function(e){var t=this;t.dateView.toggle(),t._navigateCalendar(),t._focusElement(e.type)},_focusElement:function(e){var t=this.element;d.touch&&(!d.mouseAndTouchPresent||(e||"").match(/touch/i))||t[0]===p()||t.trigger("focus")},_change:function(e){var t,n=this,i=n.element.val();e=n._update(e);var l=(t=!a.calendar.isEqualDate(n._old,e))&&!n._typing,o=i!==n.element.val();(l||o)&&n.element.trigger(b),t&&(n._old=e,n._oldText=n.element.val(),n.trigger(b)),n._typing=!1},_keydown:function(e){var t=this,a=t.dateView,n=t.element.val(),i=!1;a.popup.visible()||e.keyCode!=s.ENTER||n===t._oldText?(i=a.move(e),t._updateARIA(a._current),i?t._dateInput&&e.stopImmediatePropagation&&e.stopImmediatePropagation():t._typing=!0):t._change(n)},_icon:function(){var t,a=this,n=a.element,l=a.options;(t=n.next("button.k-input-button"))[0]||(t=e(i.renderButton('<button aria-label="select" tabindex="-1" class="k-input-button k-button k-icon-button"></button>',{icon:"calendar",size:l.size,fillMode:l.fillMode,shape:"none",rounded:"none"})).insertAfter(n)),a._dateIcon=t.attr({role:"button"})},_setCalendarAttribute:function(){var e=this;setTimeout((function(){e.element.attr(S,e.dateView.calendar._table.attr(S))}))},_navigateCalendar:function(){var e=this;e._navigateCalendarHandler||(e._navigateCalendarHandler=e._setCalendarAttribute.bind(e)),e.dateView.calendar&&e.dateView.calendar.unbind(C,e._navigateCalendarHandler).bind(C,e._navigateCalendarHandler)},_option:function(e,a){var n=this.options;if(a===t)return n[e];(a=r(a,n.parseFormats,n.culture))&&(n[e]=new F(+a),this.dateView[e](a))},_update:function(e){var t,n=this,i=n.options,l=i.min,o=i.max,s=n._value,d=r(e,i.parseFormats,i.culture),u=null===d&&null===s||d instanceof Date&&s instanceof Date;return i.disableDates(d)&&(d=null,n._old||n.element.val()||(e=null)),+d==+s&&u?((t=a.toString(d,i.format,i.culture))===e||n._dateInput&&!d||n.element.val(null===d?e:t),d):(null!==d&&E(d,l)?d=R(d,l,o):O(d,l,o)||(d=null),n._value=d,n.dateView.value(d),n._dateInput&&d?n._dateInput.value(d||e):n.element.val(a.toString(d||e,i.format,i.culture)),n._updateARIA(d),d)},_wrapper:function(){var e,t=this.element;(e=t.parents(".k-datepicker"))[0]||(e=t.wrap("<span />").parent()),e[0].style.cssText=t[0].style.cssText,t.css({height:t[0].style.height}),this.wrapper=e.addClass("k-datepicker k-input").addClass(t[0].className).removeClass("input-validation-error")},_reset:function(){var t=this,n=t.element,i=n.attr("form"),l=t.options,o=l.disableDates,r=l.parseFormats.length?l.parseFormats:null,s=t._initialOptions.value,d=i?e("#"+i):n.closest("form"),u=n[0].defaultValue;s&&o&&o(s)&&(s=null),u&&a.parseDate(u,r,l.culture)||!s||n.attr("value",a.toString(s,l.format,l.culture)),d[0]&&(t._resetHandler=function(){t.value(s||n[0].defaultValue),t.max(t._initialOptions.max),t.min(t._initialOptions.min)},t._form=d.on("reset",t._resetHandler))},_template:function(){this._ariaTemplate=u(this.options.ARIATemplate).bind(this)},_createDateInput:function(e){this._dateInput&&(this._dateInput.destroy(),this._dateInput=null),e.dateInput&&(this._dateInput=new n.DateInput(this.element,{culture:e.culture,format:e.format,size:e.size,fillMode:e.fillMode,rounded:e.rounded,min:e.min,max:e.max,messages:e.messages.dateInput}))},_updateARIA:function(e){var t=this,a=t.dateView.calendar;t.element&&t.element.length&&t.element[0].removeAttribute(S),a&&t.element.attr(S,a._updateAria(t._ariaTemplate,e))}});a.cssProperties.registerPrefix("DatePicker","k-input-"),a.cssProperties.registerValues("DatePicker",[{prop:"rounded",values:a.cssProperties.roundedValues.concat([["full","full"]])}]),n.plugin(B)}(window.kendo.jQuery);
//# sourceMappingURL=kendo.datepicker.js.map
