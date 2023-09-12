/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.core.js";var __meta__={id:"appbar",name:"AppBar",category:"web",depends:["core"]},spacerTemplate=()=>"<span class='k-appbar-spacer'></span>";!function(e){var t=window.kendo,i=t.ui,s=i.Widget,n="resize",a=s.extend({init:function(t,i){var n=this;s.fn.init.call(n,t,i),n.element=e(t).addClass("k-appbar"),"none"!=n.options.position&&n.element.addClass("k-appbar-"+n.options.position),n.element.addClass("k-appbar-"+n.options.positionMode+" k-appbar-"+n.options.themeColor).attr("role","toolbar"),n._initItems(),n._attachEvents()},events:[n],options:{name:"AppBar",positionMode:"static",position:"none",themeColor:"light",items:[]},destroy:function(){this.resizeHandler&&(t.unbindResize(this.resizeHandler),this.resizeHandler=null),s.fn.destroy.call(this)},setOptions:function(e){var i=this;"none"!=i.options.position&&i.element.removeClass("k-appbar-"+i.options.position),i.element.removeClass("k-appbar-"+i.options.positionMode+" k-appbar-"+i.options.themeColor),t.deepExtend(i.options,e),this.destroy(),this.element.empty(),this.init(this.element,this.options)},_initItems:function(){for(var i,s,n=this.options.items,a="",o=0;o<n.length;o++)if("spacer"==(i=n[o]).type)s=e(t.template(spacerTemplate)({})).addClass(i.className),i.width&&(s.addClass("k-appbar-spacer-sized"),s.css("width","string"==typeof i.width?i.width:i.width+"px")),a+=s[0].outerHTML;else{if(!i.template)throw new Error("Having a template for the contentItem is mandatory");i.className?a+="<div class='k-appbar-section "+i.className+"'>":a+="<div class='k-appbar-section'>",a+=t.template(i.template)({}),a+="</div>"}this.element.html(a)},_resize:function(){this.trigger(n)},_attachEvents:function(){var e=this;e.resizeHandler=e._resize.bind(e),t.onResize(e.resizeHandler)}});i.plugin(a)}(window.kendo.jQuery);
//# sourceMappingURL=kendo.appbar.js.map
