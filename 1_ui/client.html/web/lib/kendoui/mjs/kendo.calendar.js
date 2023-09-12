/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.core.js";import"./kendo.selectable.js";import"./kendo.icons.js";var __meta__={id:"calendar",name:"Calendar",category:"web",description:"The Calendar widget renders a graphical calendar that supports navigation and selection.",depends:["core","selectable"]};!function(e,t){var a=window.kendo,n=a.support,l=a.ui,r=l.Widget,i=a.keys,s=a.parseDate,o=a.date.adjustDST,c=a.date.weekInYear,u=a.ui.Selectable,d=a._extractFormat,f=a.template,g=a.getCulture,v=a.support.transitions,_=v?v.css+"transform-origin":"",h=f((e=>`<td class="${e.cssClass}" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-${e.ns}value="${e.dateString}">${e.value}</a></td>`)),m=f((()=>'<td role="gridcell" class="k-calendar-td k-out-of-range"><a class="k-link"></a></td>')),p=f((()=>'<td role="gridcell" class="k-calendar-td k-out-of-range">&nbsp;</td>')),b=f((e=>`<td class="k-calendar-td k-alt">${e.weekNumber}</td>`)),k=a._outerWidth,w=".kendoCalendar",D="click"+w,y="keydown"+w,C="id",x="slideIn",S="month",T="century",F="change",M="navigate",Y="value",A="k-disabled",$="k-focus",N="k-other-month",V="td:has(.k-link)",O="td:has(.k-link):not(."+A+"):not(.k-out-of-range)",R="k-selected",H="blur"+w,z="focus",E=z+w,B=n.touch?"touchstart":"mouseenter",P=n.touch?"touchstart"+w:"mouseenter"+w,I=n.touch?"touchend"+w+" touchmove"+w:"mouseleave"+w,W=864e5,j="_prevArrow",U="_nextArrow",q="aria-disabled",G="aria-selected",K="aria-label",L=e.extend,Q=Date,J={month:0,year:1,decade:2,century:3},X=".k-header, .k-calendar-header",Z=r.extend({init:function(t,n){var l,i=this;(n=n||{}).componentType=n.componentType||"classic",r.fn.init.call(i,t,n),t=i.wrapper=i.element,(n=i.options).url=a.unescape(n.url),i.options.disableDates=me(i.options.disableDates),i._templates(),i._selectable(),i._header(),i._viewWrapper(),i.options.hasFooter?i._footer(i.footer):(i._today=i.element.find(".k-calendar-nav-today"),i._toggle()),t.addClass("k-widget k-calendar "+(n.weekNumber?" k-week-number":"")).on(P+" "+I,V,de).on(y,"table.k-content",i._move.bind(i)).on(D+" touchend",V,(function(t){var a=t.currentTarget.firstChild,l=be(a);-1!=a.href.indexOf("#")&&t.preventDefault(),"month"==i._view.name&&i.options.disableDates(l)||"month"==i._view.name&&"single"!=n.selectable||i._click(e(a))})).on("mouseup"+w,"table.k-content, .k-footer",(function(){i._focusView(!1!==i.options.focusOnNav)})).attr(C),i._isMultipleSelection()&&i.options.weekNumber&&t.on(D,"td:not(:has(.k-link))",(function(t){var a=e(t.currentTarget).closest("tr").find(O).first(),n=i.selectable._lastActive=e(t.currentTarget).closest("tr").find(O).last();i.selectable.selectRange(a,n),i.selectable.trigger(F,{event:t}),i._current=i._value=be(n.find("a")),i._setCurrent(i._current)})),_e(n),l=s(n.value,n.format,n.culture),i._selectDates=[],i._index=J[n.start],i._current=new Q(+re(l,n.min,n.max)),i._addClassProxy=function(){if(i._active=!0,i._cell.hasClass(A)){var e=i._view.toDateString(le());i._cell=i._cellByDate(e)}i._cell.addClass($)},i._removeClassProxy=function(){i._active=!1,i._cell&&i._cell.removeClass($)},i.value(l),i._isMultipleSelection()&&n.selectDates.length>0&&i.selectDates(n.selectDates),a.notify(i)},options:{name:"Calendar",value:null,min:new Q(1900,0,1),max:new Q(2099,11,31),dates:[],disableDates:null,url:"",culture:"",footer:"",format:"",month:{},weekNumber:!1,selectable:"single",selectDates:[],start:S,depth:S,size:"medium",animation:{horizontal:{effects:x,reverse:!0,duration:500,divisor:2},vertical:{effects:"zoomIn",duration:400}},messages:{weekColumnHeader:"",today:"Today",navigateTo:"Navigate to ",parentViews:{month:"year view",year:"decade view",decade:"century view"}},componentType:"classic"},events:[F,M],componentTypes:{classic:{header:{template:({actionAttr:e,size:t,isRtl:n})=>`<div class="k-header k-hstack">\n            <a tabindex="-1" href="#" ${e}="prev" role="button" class="k-calendar-nav-prev k-button ${t} k-rounded-md k-button-flat k-button-flat-base k-icon-button" ${K}="Previous">${a.ui.icon({icon:"caret-alt-"+(n?"right":"left"),iconClass:"k-button-icon"})}</span></a>\n            <a tabindex="-1" href="#" ${e}="nav-up" id="`+a.guid()+`" role="button" class="k-calendar-nav-fast k-button ${t} k-rounded-md k-button-flat k-button-flat-base  k-flex"></a>\n            <a tabindex="-1" href="#" ${e}="next" role="button" class="k-calendar-nav-next k-button ${t} k-rounded-md k-button-flat k-button-flat-base  k-icon-button" ${K}="Next">${a.ui.icon({icon:"caret-alt-"+(n?"left":"right"),iconClass:"k-button-icon"})}</a>\n        </div>`},hasFooter:!0,linksSelector:".k-button",contentClasses:"k-calendar-table k-content"},modern:{header:{template:({actionAttr:e,size:t,messages:n})=>`<div class="k-calendar-header k-hstack">\n            <button ${e}="nav-up" id="`+a.guid()+`" class="k-calendar-title k-button ${t} k-button-flat k-button-flat-base k-rounded-md">\n                <span class="k-button-text"></span>\n            </button>\n            <span class="k-spacer"></span>\n            <span class="k-calendar-nav">\n                <button tabindex="-1" ${e}="prev" class="k-calendar-nav-prev k-button ${t} k-button-flat k-button-flat-base k-rounded-md k-icon-button">\n                    ${a.ui.icon({icon:"chevron-left",iconClass:"k-button-icon"})}\n                </button>\n                <button tabindex="-1" ${e}="today" class="k-calendar-nav-today k-button ${t} k-button-flat k-button-flat-primary k-rounded-md">\n                    <span class="k-button-text">${n.today}</span>\n                </button>\n                <button tabindex="-1" ${e}="next" class="k-calendar-nav-next k-button ${t} k-button-flat k-button-flat-base k-rounded-md k-icon-button">\n                    ${a.ui.icon({icon:"chevron-right",iconClass:"k-button-icon"})}\n                </button>\n            </span>\n        </div>`},hasFooter:!1,linksSelector:".k-button",contentClasses:"k-calendar-table k-content k-calendar-content"}},setOptions:function(t){var a=this;_e(t),t.disableDates=me(t.disableDates),a._destroySelectable(),t.messages&&(t.messages=e.extend({},!0,a.options.messages,t.messages)),r.fn.setOptions.call(a,t),a._templates(),a._selectable(),a._viewWrapper(),a.options.hasFooter?a._footer(a.footer):(a.element.find(".k-footer").hide(),a._toggle()),a._index=J[a.options.start],a.navigate(),t.weekNumber&&a.element.addClass("k-week-number")},destroy:function(){var e=this,t=e._today;e.element.off(w),e._title.off(w),e[j].off(w),e[U].off(w),e._destroySelectable(),a.destroy(e._table),t&&a.destroy(t.off(w)),r.fn.destroy.call(e)},current:function(){return this._current},view:function(){return this._view},focus:function(e){e=e||this._table,this._bindTable(e),e.trigger("focus")},min:function(e){return this._option("min",e)},max:function(e){return this._option("max",e)},navigateToPast:function(){this._navigate(j,-1)},navigateToFuture:function(){this._navigate(U,1)},navigateUp:function(){var e=this,t=e._index;e._title.hasClass(A)||e.navigate(e._current,++t)},navigateDown:function(e){var t=this,a=t._index,n=t.options.depth;e&&(a!==J[n]?t.navigate(e,--a):pe(t._value,t._current)&&pe(t._value,e)||(t.value(e),t.trigger(F)))},navigate:function(a,n){n=isNaN(n)?J[n]:n;var l,r,i,s,o=this,c=o.options,u=c.culture,d=c.min,f=c.max,g=o._title,v=o._table,_=o._oldTable,h=o._current,m=a&&+a>+h,p=n!==t&&n!==o._index,b=o.element.children(".k-calendar-view");if(a||(a=h),o._current=a=new Q(+re(a,d,f)),n===t?n=o._index:o._index=n,o._view=r=ee.views[n],i=r.compare,s=n===J[T],g.toggleClass(A,s).attr(q,s),s=i(a,d)<1,o[j].toggleClass(A,s).attr(q,s),s=i(a,f)>-1,o[U].toggleClass(A,s).attr(q,s),v&&_&&_.data("animating")&&(_.kendoStop(!0,!0),v.kendoStop(!0,!0)),o._oldTable=v,!v||o._changeView){g.html('<span class="k-button-text">'+r.title(a,d,f,u)+"</span>"),o.options.messages.parentViews&&o._view.name!==T?g.attr("title",o.options.messages.navigateTo+o.options.messages.parentViews[o._view.name]):g.removeAttr("title"),o._table=l=e(r.content(L({min:d,max:f,date:a,url:c.url,dates:c.dates,format:c.format,otherMonth:!0,culture:u,disableDates:c.disableDates,isWeekColumnVisible:c.weekNumber,messages:c.messages,contentClasses:o.options.contentClasses},o[r.name]))),o._aria(),he(l,r.name);var k=v&&v.data("start")===l.data("start");o._animate({from:v,to:l,vertical:p,future:m,replace:k}),b.removeClass("k-calendar-monthview k-calendar-yearview k-calendar-decadeview k-calendar-centuryview"),b.addClass("k-calendar-"+r.name+"view"),o.trigger(M),o._focus(a)}n===J[c.depth]&&o._selectDates.length>0&&o._visualizeSelectedDatesInView(),"single"===o.options.selectable&&n===J[c.depth]&&o._value&&!o.options.disableDates(o._value)&&o._selectCell(o._value),o._setCurrent(a),!v&&o._cell&&o._cell.removeClass($),o._changeView=!0},selectDates:function(a){var n,l,r=this;if(a===t)return r._selectDates;l=a.map((function(e){return e.getTime()})).filter((function(e,t,a){return a.indexOf(e)===t})).map((function(e){return new Date(e)})),n=e.grep(l,(function(e){if(e)return+r._validateValue(new Date(e.setHours(0,0,0,0)))==+e})),r._selectDates=n.length>0?n:0===l.length?l:r._selectDates,r._visualizeSelectedDatesInView()},value:function(e){var a=this,n=a._view,l=a._view;if(e===t)return a._value;if((e=a._validateValue(e))&&a._isMultipleSelection()){var r=new Date(+e);r.setHours(0,0,0,0),a._selectDates=[r],a.selectable._lastActive=null}n&&null===e&&a._cell?a._cell.removeClass(R):(a._changeView=!e||l&&0!==l.compare(e,a._current),a.navigate(e))},isRtl:function(){return a.support.isRtl(this.wrapper)},_aria:function(){var e=this._table;e.attr("aria-labelledby",this._title.attr("id")),"month"===this._view.name&&"multiple"===this.options.selectable&&e.attr("aria-multiselectable","true")},_validateValue:function(e){var a=this,n=a.options,l=n.min,r=n.max;return null===e&&(a._current=ge(a._current.getFullYear(),a._current.getMonth(),a._current.getDate())),null!==(e=s(e,n.format,n.culture))&&(ie(e=new Q(+e),l,r)||(e=null)),null!==e&&a.options.disableDates(new Date(+e))?a._value===t&&(a._value=null):a._value=e,a._value},_visualizeSelectedDatesInView:function(){var t=this,n={};e.each(t._selectDates,(function(e,t){n[a.calendar.views[0].toDateString(t)]=t})),t.selectable.clear();var l=t._table.find(V).filter((function(t,l){return n[e(l.firstChild).attr(a.attr(Y))]}));l.length>0&&t.selectable._selectElement(l,!0)},_isMultipleSelection:function(){return"multiple"===this.options.selectable},_selectable:function(){var e=this;if(e._isMultipleSelection()){var t=e.options.selectable,a=u.parseOptions(t);e.selectable=new u(e.wrapper,{aria:!0,inputSelectors:"input,textarea,.k-multiselect-wrap,select,button,.k-button>span,.k-button>img,span.k-icon.k-i-caret-alt-down,span.k-icon.k-i-caret-alt-up,span.k-svg-icon.k-svg-i-caret-alt-down,span.k-svg-icon.k-svg-i-caret-alt-up",multiple:a.multiple,filter:"table.k-month:eq(0) "+O,change:e._onSelect.bind(e),relatedTarget:e._onRelatedTarget.bind(e)})}},_onRelatedTarget:function(e){var t=this;t.selectable.options.multiple&&e.is(O)&&(t._current=be(e.find("a")),t._setCurrent(t._current))},_onSelect:function(t){var a=this,n=t;u.parseOptions(a.options.selectable).multiple?(n.event.ctrlKey||n.event.metaKey?e(n.event.currentTarget).is(O)?a._toggleSelection(e(n.event.currentTarget)):(a._cellsBySelector(O).each((function(t,n){var l=be(e(n).find("a"));a._deselect(l)})),a._addSelectedCellsToArray()):n.event.shiftKey?a._rangeSelection(a._cell):e(n.event.currentTarget).is(V)?a.value(be(e(n.event.currentTarget).find("a"))):(a._selectDates=[],a._addSelectedCellsToArray()),a.trigger(F)):e(n.event.currentTarget).is("td")&&!e(n.event.currentTarget).hasClass("k-selected")?e(n.event.currentTarget).addClass("k-selected"):a._click(e(n.event.currentTarget).find("a"))},_destroySelectable:function(){var e=this;e.selectable&&(e.selectable.destroy(),e.selectable=null)},_toggleSelection:function(e){var t=be(e.find("a"));e.hasClass("k-selected")?this._selectDates.push(t):this._deselect(t)},_rangeSelection:function(e,t){var a,n=this,l=t||be(n.selectable.value().first().find("a")),r=be(e.find("a"));n.selectable._lastActive||n._value?l=n.selectable._lastActive?be(n.selectable._lastActive.find("a")):new Date(+n._value):n.selectable._lastActive=t?n._cellByDate(n._view.toDateString(t),O):n.selectable.value().first(),n._selectDates=[],a=ce(l,r),ue(n._selectDates,a,l,n.options.disableDates),n._visualizeSelectedDatesInView()},_cellsBySelector:function(e){return this._table.find(e)},_addSelectedCellsToArray:function(){var t=this;t.selectable.value().each((function(a,n){var l=be(e(n.firstChild));t.options.disableDates(l)||t._selectDates.push(l)}))},_deselect:function(e){var t=this._selectDates.map(Number).indexOf(+e);-1!=t&&this._selectDates.splice(t,1)},_dateInView:function(e){var t=be(this._cellsBySelector(O).first().find("a"));return+e<=+be(this._cellsBySelector(O).last().find("a"))&&+e>=+t},_isNavigatable:function(e,t){var a,n=this,l=n.options.disableDates;return"month"==n._view.name?!l(e):(a=n.wrapper.find("."+$).index(),n.wrapper.find(".k-content td").eq(a+t).is(O)||!l(e))},_move:function(a){var n,l,r,s,o=this,c=o.options,u=a.keyCode,d=o._view,f=o._index,g=o.options.min,v=o.options.max,_=new Q(+o._current),h=o.isRtl(),m=o.options.disableDates;if(a.target===o._table[0]&&(o._active=!0),u==i.RIGHT&&!h||u==i.LEFT&&h?(n=1,l=!0):u==i.LEFT&&!h||u==i.RIGHT&&h?(n=-1,l=!0):u==i.UP?(n=0===f?-7:-4,l=!0):u==i.DOWN?(n=0===f?7:4,l=!0):u==i.SPACEBAR?(n=0,l=!0):u==i.HOME||u==i.END?(s=d[r=u==i.HOME?"first":"last"](_),(_=new Q(s.getFullYear(),s.getMonth(),s.getDate(),_.getHours(),_.getMinutes(),_.getSeconds(),_.getMilliseconds())).setFullYear(s.getFullYear()),l=!0):84===u&&(o._todayClick(a),l=!0),a.ctrlKey||a.metaKey){if(u==i.RIGHT&&!h||u==i.LEFT&&h)o.navigateToFuture(),l=!0;else if(u==i.LEFT&&!h||u==i.RIGHT&&h)o.navigateToPast(),l=!0;else if(u==i.UP)o.navigateUp(),l=!0;else if(u==i.DOWN)o._click(e(o._cell[0].firstChild)),l=!0;else if((u==i.ENTER||u==i.SPACEBAR)&&o._isMultipleSelection()){o._keyboardToggleSelection(a);var p=be(e(o._cell[0]).find("a"));o._setCurrent(p)}}else a.shiftKey?(n!==t||r)&&(r||d.setDate(_,n),ie(_,g,v)||(_=re(_,c.min,c.max)),m(_)&&(_=o._nextNavigatable(_,n)),g=ge(g.getFullYear(),g.getMonth(),g.getDate()),o._isMultipleSelection()?o._keyboardRangeSelection(a,_):o._focus(_)):(u==i.ENTER||u==i.SPACEBAR?("month"==d.name&&o._isMultipleSelection()?(o.value(be(e(o._cell.find("a")))),o.selectable._lastActive=e(o._cell[0]),o.trigger(F)):o._click(e(o._cell[0].firstChild)),l=!0):u==i.PAGEUP?(l=!0,o.navigateToPast()):u==i.PAGEDOWN&&(l=!0,o.navigateToFuture()),(n||r)&&(r||d.setDate(_,n),ie(_,g=ge(g.getFullYear(),g.getMonth(),g.getDate()),v)||(_=re(_,c.min,c.max)),o._isNavigatable(_,n)||(_=o._nextNavigatable(_,n)),o._isMultipleSelection()?o._dateInView(_)?(o._current=_,o._setCurrent(_)):o.navigate(_):o._focus(_)));return l&&a.preventDefault(),o._current},_keyboardRangeSelection:function(e,t){var a,n,l=this;if(!l._dateInView(t))return l._selectDates=[],n=ce(a=l.selectable._lastActive?be(l.selectable._lastActive.find("a")):t,new Date(+t)),ue(l._selectDates,n,a,l.options.disableDates),l.navigate(t),l._current=t,l.selectable._lastActive=l.selectable._lastActive||l._cellByDate(l._view.toDateString(t),O),void l.trigger(F);l.selectable.options.filter=l.wrapper.find("table").length>1&&+t>+l._current?"table.k-month:eq(1) "+O:"table.k-month:eq(0) "+O,l._setCurrent(t),l._current=t,l._rangeSelection(l._cellByDate(l._view.toDateString(t),O),t),l.trigger(F),l.selectable.options.filter="table.k-month:eq(0) "+O},_keyboardToggleSelection:function(t){var a=this;t.currentTarget=a._cell[0],a.selectable._lastActive=e(a._cell[0]),e(a._cell[0]).hasClass(R)?a.selectable._unselect(e(a._cell[0])):a.selectable.value(e(a._cell[0])),a.selectable.trigger(F,{event:t})},_nextNavigatable:function(e,t){var a=this,n=!0,l=a._view,r=a.options.min,i=a.options.max,s=a.options.disableDates,o=new Date(e.getTime());for(l.setDate(o,-t);n;){if(l.setDate(e,t),!ie(e,r,i)){e=o;break}n=s(e)}return e},_animate:function(e){var t=this,a=e.from,n=e.to,l=t._active,r=t.element.children(".k-calendar-view");a?a.parent().data("animating")?(a.off(w),a.parent().kendoStop(!0,!0).remove(),a.remove(),r.append(n),t._focusView(l)):!a.is(":visible")||!1===t.options.animation||e.replace?(n.insertAfter(a),a.off(w).remove(),t._focusView(l)):t[e.vertical?"_vertical":"_horizontal"](a,n,e.future):(r.append(n),t._bindTable(n))},_horizontal:function(e,t,a){var n=this,l=n._active,r=n.options.animation.horizontal,i=r.effects,s=k(e),o=k(e,!0)-s;i&&-1!=i.indexOf(x)&&(e.add(t).css({width:s}),e.wrap("<div/>"),n._focusView(l,e),e.parent().css({position:"relative",width:2*s+2*o,display:"flex","margin-left":a?0:-s-o}),t[a?"insertAfter":"insertBefore"](e),L(r,{effects:x+":"+(a?"right":"left"),complete:function(){e.off(w).remove(),n._oldTable=null,t.unwrap(),n._focusView(l)}}),e.parent().kendoStop(!0,!0).kendoAnimate(r))},_vertical:function(e,t){var a,n,l=this,r=l.options.animation.vertical,i=r.effects,s=l._active;i&&-1!=i.indexOf("zoom")&&(t.insertBefore(e),e.css({position:"absolute",width:t.width()}),_&&(n=(n=(a=l._cellByDate(l._view.toDateString(l._current))).position()).left+parseInt(a.width()/2,10)+"px "+(n.top+parseInt(a.height()/2,10))+"px",t.css(_,n)),e.kendoStop(!0,!0).kendoAnimate({effects:"fadeOut",duration:600,complete:function(){e.off(w).remove(),l._oldTable=null,l._focusView(s)}}),t.kendoStop(!0,!0).kendoAnimate(r))},_cellByDate:function(t,n){return this._table.find(n||"td:not(."+N+")").filter((function(){return e(this.firstChild).attr(a.attr(Y))===t}))},_selectCell:function(e){var t=this,a=t._selectedCell,n=t._view.toDateString(e);a&&a[0]&&(a[0].removeAttribute(G),a.removeClass(R)),a=t._cellByDate(n,"multiple"==t.options.selectable?V:"td:not(."+N+")"),t._selectedCell=a,a.addClass(R).attr(G,!0)},_setCurrent:function(e){var t=this,n=a.guid(),l=t._cell,r=t._view.toDateString(e);l&&l[0]&&(l.removeClass($),l[0].removeAttribute(K),l[0].removeAttribute(C)),l=t._cellByDate(r,"multiple"==t.options.selectable?V:"td:not(."+N+")"),t._cell=l,l.attr(C,n).addClass($),t._table[0]&&(t._table[0].removeAttribute("aria-activedescendant"),t._table.attr("aria-activedescendant",n))},_bindTable:function(e){e.on(E,this._addClassProxy).on(H,this._removeClassProxy)},_click:function(e){var t=this,a=t.options,n=new Date(+t._current),l=be(e);o(l,0),"month"==t._view.name&&t.options.disableDates(l)&&(l=t._value),t._view.setDate(n,l),t.navigateDown(re(n,a.min,a.max))},_focus:function(e){var t=this;0!==t._view.compare(e,t._current)?t.navigate(e):(t._current=e,t._setCurrent(e))},_focusView:function(e,t){e&&this.focus(t)},_viewWrapper:function(){var t=this.element,a=t.children(".k-calendar-view");a[0]||(a=e("<div class='k-calendar-view' />").insertAfter(t.find(X)))},_footer:function(t){var n=this,l=le(),r=n.element,i=r.find(".k-footer");if(!t)return n._toggle(!1),void i.hide();i[0]||(i=e('<div class="k-footer">\n                    <button tabindex="-1" class="k-calendar-nav-today k-flex k-button k-button-md k-button-flat k-button-flat-primary k-rounded-md">\n                        <span class="k-button-text"></span>\n                    </button>\n                </div>').appendTo(r)),n._today=i.show().find(".k-button-flat-primary").attr("title",a.toString(l,"D",n.options.culture)),i.find(".k-button-text").html(t(l)),n._toggle()},_header:function(){var t=this,n=t.element,l=t.options.linksSelector;n.find(X)[0]||n.html(a.template(t.options.header.template)(e.extend(!0,{},t.options,{actionAttr:a.attr("action"),size:a.getValidCssClass("k-button-","size",t.options.size),isRtl:t.isRtl()}))),n.find(l).on(D+" touchend"+w,(function(){return!1})),t._title=n.find("["+a.attr("action")+'="nav-up"]').on(D+" touchend"+w,(function(){t._active=!1!==t.options.focusOnNav,t.navigateUp()})),t[j]=n.find("["+a.attr("action")+'="prev"]').on(D+" touchend"+w,(function(){t._active=!1!==t.options.focusOnNav,t.navigateToPast()})),t[U]=n.find("["+a.attr("action")+'="next"]').on(D+" touchend"+w,(function(){t._active=!1!==t.options.focusOnNav,t.navigateToFuture()})),n.find("["+a.attr("action")+'="today"]').on(D+" touchend"+w,t._todayClick.bind(t))},_navigate:function(e,t){var a=this,n=a._index+1,l=new Q(+a._current);a._isMultipleSelection()&&(l=be(a._table.find("td:not(.k-other-month):not(.k-out-of-range)").has(".k-link").first().find("a")),a._current=new Date(+l));(e=a[e]).hasClass(A)||(n>3?l.setFullYear(l.getFullYear()+100*t):ee.views[n].setDate(l,t),a.navigate(l))},_option:function(e,a){var n,l=this,r=l.options,i=l._value||l._current;if(a===t)return r[e];(a=s(a,r.format,r.culture))&&(r[e]=new Q(+a),((n="min"===e?a>i:i>a)||function(e,t){if(e)return e.getFullYear()===t.getFullYear()&&e.getMonth()===t.getMonth();return!1}(i,a))&&(n&&(l._value=null),l._changeView=!0),l._changeView||(l._changeView=!(!r.month.content&&!r.month.empty)),l.navigate(l._value),l._toggle())},_toggle:function(e){var a=this,n=a.options,l=a.options.disableDates(le()),r=a._today,i=a._todayClass();e===t&&(e=ie(le(),n.min,n.max)),r&&(r.off(D),e&&!l?r.addClass(i).removeClass(A).on(D,a._todayClick.bind(a)):r.removeClass(i).addClass(A).on(D,fe))},_todayClass:function(){return"k-calendar-nav-today"},_todayClick:function(e){var t=this,a=J[t.options.depth],n=t.options.disableDates,l=le();e.preventDefault(),n(l)||(0===t._view.compare(t._current,l)&&t._index==a&&(t._changeView=!1),t._isMultipleSelection()&&(t._selectDates=[l],t.selectable._lastActive=null),t._value=l,t.navigate(l,a),t.trigger(F))},_templates:function(){var e=this,t=e.options,n=t.footer,l=t.month,r=l.content,i=l.weekNumber,s=l.empty,o=e=>`${a.toString(e,"D",t.culture)}`;e.month={content:e=>`<td class="${e.cssClass}" role="gridcell"><a tabindex="-1" class="k-link ${e.linkClass}" href="${e.url}" ${a.attr(Y)}="${e.dateString}" title="${e.title}">${ke(r,e)||e.value}</a></td>`,empty:e=>`<td role="gridcell">${ke(s,e)||"&nbsp;"}</td>`,weekNumber:e=>`<td class="k-alt">${ke(i,e)||e.weekNumber}</td>`},e.year={content:f((e=>`<td class="${e.cssClass}" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-${e.ns}value="${e.dateString}" aria-label="${e.label}">${e.value}</a></td>`))},n&&!0!==n&&(o=n),e.footer=!1!==n?f(o,{useWithBlock:!1}):null},_updateAria:function(e,t){var n,l=this,r=l._cell,i=l.view().valueType(),s=t||l.current();return n="month"===i?a.toString(s,"MMMM"):"date"===i?a.toString(s,"D"):r.text(),r.attr("aria-label",e({current:s,valueType:i,text:n})),r.attr("id")}});l.plugin(Z);var ee={firstDayOfMonth:function(e){return ge(e.getFullYear(),e.getMonth(),1)},firstVisibleDay:function(e,t){var n=(t=t||a.culture().calendar).firstDay,l=new Q(e.getFullYear(),e.getMonth(),1,e.getHours(),e.getMinutes(),e.getSeconds(),e.getMilliseconds());for(l.setFullYear(e.getFullYear());l.getDay()!=n;)ee.setTime(l,-864e5);return l},setTime:function(e,t){var a=e.getTimezoneOffset(),n=new Q(e.getTime()+t),l=n.getTimezoneOffset()-a;e.setTime(n.getTime()+6e4*l)},views:[{name:S,title:function(e,t,a,n){return ve(n).months.names[e.getMonth()]+" "+e.getFullYear()},content:function(e){var t=this,n=0,l=e.min,r=e.max,i=e.date,s=e.dates,u=e.format,d=e.culture,f=e.url,g=e.showHeader,v=e.otherMonth,_=e.isWeekColumnVisible,h=f&&s[0],m=ve(d),p=m.firstDay,b=m.days,k=se(b.names,p),w=se(b.namesShort,p),D=ee.firstVisibleDay(i,m),y=t.first(i),C=t.last(i),x=t.toDateString,S=le(),T='<table tabindex="0" role="grid" class="'+e.contentClasses+'" cellspacing="0" data-start="'+x(D)+'">';for(g&&(T+='<caption class="k-calendar-caption k-month-header">'+this.title(i,l,r,d)+"</caption>"),T+='<thead class="k-calendar-thead"><tr role="row" class="k-calendar-tr">',_&&(T+='<th scope="col" class="k-calendar-th k-alt">'+e.messages.weekColumnHeader+"</th>");n<7;n++)T+='<th scope="col" class="k-calendar-th" aria-label="'+k[n]+'">'+w[n]+"</th>";return o(S,0),S=+S,ae({cells:42,perRow:7,html:T+='</tr></thead><tbody class="k-calendar-tbody"><tr role="row" class="k-calendar-tr">',start:ge(D.getFullYear(),D.getMonth(),D.getDate()),isWeekColumnVisible:_,weekNumber:e.weekNumber,min:ge(l.getFullYear(),l.getMonth(),l.getDate()),max:ge(r.getFullYear(),r.getMonth(),r.getDate()),otherMonth:v,content:e.content,lastDayOfMonth:C,empty:e.empty,setter:t.setDate,disableDates:e.disableDates,build:function(e,t,n){var l=["k-calendar-td"],r=e.getDay(),i="",o="#";return(e<y||e>C)&&l.push(N),n(e)&&l.push(A),+e===S&&l.push("k-today"),0!==r&&6!==r||l.push("k-weekend"),h&&function(e,t){for(var a=0,n=t.length;a<n;a++)if(e===+t[a])return!0;return!1}(+e,s)&&(o=f.replace("{0}",a.toString(e,u,d)),i=" k-action-link"),{date:e,dates:s,ns:a.ns,title:a.toString(e,"D",d),value:e.getDate(),dateString:x(e),cssClass:l.join(" "),linkClass:i,url:o}},weekNumberBuild:function(e){return{weekNumber:c(e,a.culture().calendar.firstDay),currentDate:e}}})},first:function(e){return ee.firstDayOfMonth(e)},last:function(e){var t=ge(e.getFullYear(),e.getMonth()+1,0),a=ee.firstDayOfMonth(e),n=Math.abs(t.getTimezoneOffset()-a.getTimezoneOffset());return n&&t.setHours(a.getHours()+n/60),t},compare:function(e,t){var a=e.getMonth(),n=e.getFullYear(),l=t.getMonth(),r=t.getFullYear();return n>r?1:n<r?-1:a==l?0:a>l?1:-1},setDate:function(e,t){var a=e.getHours();t instanceof Q?e.setFullYear(t.getFullYear(),t.getMonth(),t.getDate()):ee.setTime(e,t*W),o(e,a)},toDateString:function(e){return e.getFullYear()+"/"+e.getMonth()+"/"+e.getDate()},valueType:function(){return"date"}},{name:"year",title:function(e){return e.getFullYear()},content:function(e){var t=ve(e.culture).months,n=t.namesAbbr,l=t.names,r=this.toDateString,i=e.min,s=e.max,o="";return e.showHeader&&(o+='<table tabindex="0" role="grid" class="k-calendar-table k-content k-meta-view" cellspacing="0">',o+='<caption class="k-calendar-caption k-meta-header">',o+=this.title(e.date),o+="</caption>",o+='<tbody class="k-calendar-tbody">',o+='<tr role="row" class="k-calendar-tr">'),ae({min:ge(i.getFullYear(),i.getMonth(),1),max:ge(s.getFullYear(),s.getMonth(),1),start:ge(e.date.getFullYear(),0,1),html:o,setter:this.setDate,content:e.content,build:function(e){return{value:n[e.getMonth()],label:l[e.getMonth()],ns:a.ns,dateString:r(e),cssClass:["k-calendar-td"].join(" ")}}})},first:function(e){return ge(e.getFullYear(),0,e.getDate())},last:function(e){return ge(e.getFullYear(),11,e.getDate())},compare:function(e,t){return ne(e,t)},setDate:function(e,t){var a,n=e.getHours();t instanceof Q?(a=t.getMonth(),e.setFullYear(t.getFullYear(),a,e.getDate()),a!==e.getMonth()&&e.setDate(0)):(a=e.getMonth()+t,e.setMonth(a),a>11&&(a-=12),a>0&&e.getMonth()!=a&&e.setDate(0)),o(e,n)},toDateString:function(e){return e.getFullYear()+"/"+e.getMonth()+"/1"},valueType:function(){return"month"}},{name:"decade",title:function(e,t,a){return te(e,t,a,10)},content:function(e){var t=e.date.getFullYear(),n=this.toDateString,l="";return e.showHeader&&(l+='<table tabindex="0" role="grid" class="k-calendar-table k-content k-meta-view" cellspacing="0">',l+='<caption class="k-meta-header">',l+=this.title(e.date,e.min,e.max),l+="</caption>",l+='<tbody class="k-calendar-thead">',l+='<tr role="row" class="k-calendar-tr">'),ae({start:ge(t-t%10-1,0,1),min:ge(e.min.getFullYear(),0,1),max:ge(e.max.getFullYear(),0,1),otherMonth:e.otherMonth,html:l,setter:this.setDate,build:function(e,t){var l=["k-calendar-td"];return 0!==t&&11!==t||l.push(N),{value:e.getFullYear(),ns:a.ns,dateString:n(e),cssClass:l.join(" ")}}})},first:function(e){var t=e.getFullYear();return ge(t-t%10,e.getMonth(),e.getDate())},last:function(e){var t=e.getFullYear();return ge(t-t%10+9,e.getMonth(),e.getDate())},compare:function(e,t){return ne(e,t,10)},setDate:function(e,t){oe(e,t,1)},toDateString:function(e){return e.getFullYear()+"/0/1"},valueType:function(){return"year"}},{name:T,title:function(e,t,a){return te(e,t,a,100)},content:function(e){var t=e.date.getFullYear(),n=e.min.getFullYear(),l=e.max.getFullYear(),r=this.toDateString,i=n,s=l,o="";return(s-=s%10)-(i-=i%10)<10&&(s=i+9),e.showHeader&&(o+='<table tabindex="0" role="grid" class="k-calendar-table k-content k-meta-view" cellspacing="0">',o+='<caption class="k-calendar-caption k-meta-header">',o+=this.title(e.date,e.min,e.max),o+="</caption>",o+='<tbody class="k-calendar-tbody">',o+='<tr role="row" class="k-calendar-tr">'),ae({start:ge(t-t%100-10,0,1),min:ge(i,0,1),max:ge(s,0,1),otherMonth:e.otherMonth,html:o,setter:this.setDate,build:function(e,t){var i=["k-calendar-td"],s=e.getFullYear(),o=s+9;return 0!==t&&11!==t||i.push(N),s<n&&(s=n),o>l&&(o=l),{ns:a.ns,value:s+" - "+o,dateString:r(e),cssClass:i.join(" ")}}})},first:function(e){var t=e.getFullYear();return ge(t-t%100,e.getMonth(),e.getDate())},last:function(e){var t=e.getFullYear();return ge(t-t%100+99,e.getMonth(),e.getDate())},compare:function(e,t){return ne(e,t,100)},setDate:function(e,t){oe(e,t,10)},toDateString:function(e){var t=e.getFullYear();return t-t%10+"/0/1"},valueType:function(){return"decade"}}]};function te(e,t,a,n){var l,r=e.getFullYear(),i=t.getFullYear(),s=a.getFullYear();return l=(r-=r%n)+(n-1),r<i&&(r=i),l>s&&(l=s),r+"-"+l}function ae(e){var t,a=0,n=e.min,l=e.max,r=e.start,i=e.setter,s=e.build,c=e.weekNumberBuild,u=e.cells||12,d=e.isWeekColumnVisible,f=e.perRow||4,g=e.otherMonth,v=e.lastDayOfMonth,_=e.weekNumber||b,k=e.content||h,w=e.empty||m,D=e.otherMonthCellTemplate||p,y=e.html||'<table tabindex="0" role="grid" class="k-calendar-table k-content k-meta-view" cellspacing="0"><tbody class="k-calendar-tbody"><tr role="row" class="k-calendar-tr">';for(d&&(y+=_(c(r)));a<u;a++)a>0&&a%f==0&&(y+='</tr><tr role="row" class="k-calendar-tr">',d&&(y+=_(g||+r<=+v?c(r):{weekNumber:"&nbsp;"}))),r=ge(r.getFullYear(),r.getMonth(),r.getDate()),o(r,0),y+=-1===(t=s(r,a,e.disableDates)).cssClass.indexOf(N)||g?ie(r,n,l)?k(t):w(t):D(t),i(r,1);return y+"</tr></tbody></table>"}function ne(e,t,a){var n=e.getFullYear(),l=t.getFullYear(),r=l,i=0;return a&&(r=(l-=l%a)-l%a+a-1),n>r?i=1:n<l&&(i=-1),i}function le(){var e=new Q;return new Q(e.getFullYear(),e.getMonth(),e.getDate())}function re(e,t,a){var n=le();return e&&(n=new Q(+e)),t>n?n=new Q(+t):a<n&&(n=new Q(+a)),n}function ie(e,t,a){return+e>=+t&&+e<=+a}function se(e,t){return e.slice(t).concat(e.slice(0,t))}function oe(e,t,a){t=t instanceof Q?t.getFullYear():e.getFullYear()+a*t,e.setFullYear(t)}function ce(e,t){if(+t<+e){var n=+e;ee.views[0].setDate(e,t),ee.views[0].setDate(t,new Date(n))}var l=Date.UTC(e.getFullYear(),e.getMonth(),e.getDate()),r=Date.UTC(t.getFullYear(),t.getMonth(),t.getDate());return Math.ceil((+r-+l)/a.date.MS_PER_DAY)}function ue(e,t,a,n){for(var l=0;l<=t;l++){var r=new Date(a.getTime());n(r=new Date(r.setDate(r.getDate()+l)))||e.push(r)}}function de(t){e(this).hasClass("k-disabled")||e(this).toggleClass("k-hover",B.indexOf(t.type)>-1||t.type==z)}function fe(e){e.preventDefault()}function ge(e,t,a){var n=new Q(e,t,a);return n.setFullYear(e,t,a),n}function ve(e){return g(e).calendars.standard}function _e(e){var a=J[e.start],n=J[e.depth],l=g(e.culture);e.format=d(e.format||l.calendars.standard.patterns.d),isNaN(a)&&(a=0,e.start=S),(n===t||n>a)&&(e.depth=S),null===e.dates&&(e.dates=[])}function he(e,t){e.addClass("k-"+t)}function me(t){return a.isFunction(t)?t:Array.isArray(t)?function(e){var t,a=[],n=["su","mo","tu","we","th","fr","sa"];e[0]instanceof Q?(a=function(e){for(var t=[],a=0;a<e.length;a++)t.push(e[a].setHours(0,0,0,0));return t}(e),t=e=>!!(e&&a.indexOf(new Date(e).setHours(0,0,0,0))>-1)):(a=e.map((e=>{e=e.slice(0,2).toLowerCase();let t=n.indexOf(e);if(t>-1)return t})),t=e=>!!(e&&a.indexOf(new Date(e).getDay())>-1));return t}(t):e.noop}function pe(e,t){return e instanceof Date&&t instanceof Date&&(e=e.getTime(),t=t.getTime()),e===t}function be(t){var n=e(t).attr(a.attr(Y)).split("/");return n=ge(n[0],n[1],n[2])}function ke(e,n){return e?a.isFunction(e)?e(n):f(e)(n):t}ee.isEqualDatePart=function(e,t){return!!e&&(e.getFullYear()===t.getFullYear()&&e.getMonth()===t.getMonth()&&e.getDate()===t.getDate())},ee.isEqualDate=pe,ee.restrictValue=re,ee.isInRange=ie,ee.addClassToViewContainer=he,ee.normalize=_e,ee.viewsEnum=J,ee.disabled=me,ee.toDateObject=be,ee.getToday=le,ee.createDate=ge,a.calendar=ee}(window.kendo.jQuery);
//# sourceMappingURL=kendo.calendar.js.map
