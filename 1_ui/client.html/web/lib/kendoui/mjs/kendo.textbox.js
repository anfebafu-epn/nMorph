/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.core.js";import"./kendo.floatinglabel.js";import"./kendo.icons.js";var __meta__={id:"textbox",name:"TextBox",category:"web",description:"The TextBox widget enables you to style and provide a floating label functionality to input elements",depends:["core","floatinglabel","icons"]};!function(e,t){var n=window.kendo,l=n.ui.Widget,a=n.ui,i=e.isPlainObject,o=".kendoTextBox",s="change",r="disabled",d="readonly",p="k-input-inner",u="input",c="k-focus",b="k-disabled",f="k-no-click",h="aria-disabled",g=l.extend({init:function(a,i){var o=this;l.fn.init.call(o,a,i),i=e.extend(!0,{},i),o.options.value=i.value||o.element.val(),o.options.readonly=i.readonly!==t?i.readonly:Boolean(o.element.attr("readonly")),o.options.enable=i.enable!==t?i.enable:!Boolean(o.element.attr("disabled")),o.options.placeholder=i.placeholder||o.element.attr("placeholder"),o.value(o.options.value),o._wrapper(),o._label(),o._editable({readonly:o.options.readonly,disable:!o.options.enable}),o.element.addClass(p).attr("placeholder",o.options.placeholder).attr("autocomplete","off"),i.icon&&o._icon(),n.notify(o),o._applyCssClasses()},events:[s,u],options:{name:"TextBox",value:"",readonly:!1,enable:!0,placeholder:"",label:null,rounded:"medium",size:"medium",fillMode:"solid",icon:null},value:function(e){var n=this;if(e===t)return n._value;n._value=e,n.element.val(e),n.floatingLabel&&n.floatingLabel.refresh()},readonly:function(e){this._editable({readonly:e===t||e,disable:!1}),this.floatingLabel&&this.floatingLabel.readonly(e===t||e)},enable:function(e){this._editable({readonly:!1,disable:!(e=e===t||e)}),this.floatingLabel&&this.floatingLabel.enable(e=e===t||e)},focus:function(){this.element[0].focus()},destroy:function(){var e=this;e.floatingLabel&&e.floatingLabel.destroy(),e.element.off(o),e.element[0].style.width="",e.element.removeClass(p),l.fn.destroy.call(e)},setOptions:function(e){this.destroy(),this._inputLabel&&(this._inputLabel.remove(),this._inputLabel=null),this._floatingLabelContainer?(this.floatingLabel.destroy(),this.floatingLabel=null,this.element.unwrap(),this.element.unwrap(),this._floatingLabelContainer=null):this.element.unwrap(),n.deepExtend(this.options,e),this.init(this.element,this.options)},_editable:function(e){var t=this,n=t.element,l=t.wrapper,a=e.disable,i=e.readonly;n.off(o),i||a?(n.attr(r,a).attr(d,i).attr(h,a),l.toggleClass(b,a).toggleClass(f,i)):(n.prop(r,!1).prop(d,!1).attr(h,!1),l.removeClass(b).removeClass(f),n.on("focusin"+o,t._focusin.bind(t)),n.on("focusout"+o,t._focusout.bind(t)),n.on("change"+o,t._change.bind(t)),n.on(u+o,t._input.bind(t)))},_icon:function(){this.wrapper.prepend(n.ui.icon({icon:this.options.icon,iconClass:"k-input-icon"}))},_input:function(e){var t=this.element.val();this.trigger(u,{value:t,originalEvent:e})},_label:function(){var t,l,a=this,o=a.element,s=a.options,r=o.attr("id");null!==s.label&&(t=!!i(s.label)&&s.label.floating,l=i(s.label)?s.label.content:s.label,t&&(a._floatingLabelContainer=a.wrapper.wrap("<span></span>").parent(),a.floatingLabel=new n.ui.FloatingLabel(a._floatingLabelContainer,{widget:a})),n.isFunction(l)&&(l=l.call(a)),l||(l=""),r||(r=s.name+"_"+n.guid(),o.attr("id",r)),a._inputLabel=e("<label class='k-label k-input-label' for='"+r+"'>"+l+"</label>'").insertBefore(a.wrapper))},_focusin:function(){this.wrapper.addClass(c)},_focusout:function(){this.wrapper.removeClass(c)},_change:function(e){var t=this,n=t.element.val();t._value=n,t.trigger(s,{value:n,originalEvent:e})},_wrapper:function(){var e,t=this.element,n=t[0];(e=t.wrap("<span class='k-input k-textbox'></span>").parent())[0].style.cssText=n.style.cssText,n.style.width="100%",this.wrapper=e.addClass(n.className).removeClass("input-validation-error")}});n.cssProperties.registerPrefix("TextBox","k-input-"),n.cssProperties.registerValues("TextBox",[{prop:"rounded",values:n.cssProperties.roundedValues.concat([["full","full"]])}]),a.plugin(g)}(window.kendo.jQuery);
//# sourceMappingURL=kendo.textbox.js.map
