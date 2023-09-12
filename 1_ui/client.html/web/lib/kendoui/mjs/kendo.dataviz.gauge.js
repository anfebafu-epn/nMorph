/**
 * Kendo UI v2023.2.606 (http://www.telerik.com/kendo-ui)
 * Copyright 2023 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.
 *
 * Kendo UI commercial licenses may be obtained at
 * http://www.telerik.com/purchase/license-agreement/kendo-ui-complete
 * If you do not own a commercial license, this file shall be governed by the trial license terms.
 */
import"./kendo.core.js";import"./kendo.color.js";import"./kendo.drawing.js";import"./kendo.dataviz.core.js";import"./kendo.dataviz.themes.js";!function(t){window.kendo.dataviz=window.kendo.dataviz||{};var e=kendo.dataviz,i=e.getSpacing,n=e.defined,r=e.constants,o=r.BLACK,s=r.COORD_PRECISION,a=e.services,l=e.deepExtend,h=e.isArray,c=e.setDefaultOptions,u=e.NumericAxis,p=e.limitValue,d=e.Box,g=e.interpolateValue,f=e.round,v=kendo.drawing,m=v.Group,x=v.Path,w=v.Animation,b=v.AnimationFactory,_=kendo.geometry,y=_.Rect,k=_.Point,A=_.transform,T=150,z="arrowPointer",S="barPointer",R=.5,C=Math.PI/180,E="inside",j="linear",M="outside",P="radialPointer",O="radialRangePointer";function U(t,e){var n=t.getOrigin(),r=t.getSize(),o=i(e);return t.setOrigin([n.x-o.left,n.y-o.top]),t.setSize([r.width+(o.left+o.right),r.height+(o.top+o.bottom)]),t}var B=m,L=x,V=v.Text;function X(t,e){var i=t.box,n=t.children[0].box,r=e.border||{},o=e.background||"",s=L.fromRect(new y([i.x1,i.y1],[i.width(),i.height()]),{stroke:{}}),a=new V(t.text,new k(n.x1,n.y1),{font:e.font,fill:{color:e.color}}),l=U(a.bbox().clone(),e.padding),h=L.fromRect(l,{stroke:{color:r.width?r.color:"",width:r.width,opacity:r.opacity,dashType:r.dashType,lineJoin:"round",lineCap:"round"},fill:{color:o}}),c=new B;return c.append(s),c.append(h),c.append(a),c}function G(t,e,i){var o=n(t.from)?t.from:r.MIN_VALUE,s=n(t.to)?t.to:r.MAX_VALUE;return t.from=Math.max(Math.min(s,o),e),t.to=Math.min(Math.max(s,o),i),t}function D(t,e){var n=i(e);return n.left=-n.left,n.top=-n.top,n.right=-n.right,n.bottom=-n.bottom,U(t,n)}var Y=x,F=v.Surface,I=e.Class.extend({init:function(t,e,i,n){void 0===n&&(n={}),this.element=t,this.theme=i,this.contextService=new a.ChartService(this,n),this._originalOptions=l({},this.options,e),this.options=l({},this._originalOptions),this._initTheme(i),this.redraw()},destroy:function(){this.surface&&(this.surface.destroy(),this.surface=null),delete this.element,delete this.surfaceElement},value:function(t){var e=this.pointers[0];if(0===arguments.length)return e.value();e.value(t),this._setValueOptions(t)},_draw:function(){var t=this.surface;t.clear(),t.draw(this._visuals)},exportVisual:function(){return this._visuals},allValues:function(t){var i=this.pointers,n=[];if(0===arguments.length){for(var r=0;r<i.length;r++)n.push(i[r].value());return n}if(h(t))for(var o=0;o<t.length;o++)e.isNumber(t[o])&&i[o].value(t[o]);this._setValueOptions(t)},_setValueOptions:function(t){for(var e=[].concat(this.options.pointer),i=[].concat(t),n=0;n<i.length;n++)e[n].value=i[n]},resize:function(){this.noTransitionsRedraw()},noTransitionsRedraw:function(){var t=this.options.transitions;this._toggleTransitions(!1),this.redraw(),this._toggleTransitions(t)},redraw:function(){var t=this._surfaceSize(),e=new y([0,0],[t.width,t.height]);this._initSurface(),this.gaugeArea=this._createGaugeArea(),this._createModel();var i=D(e.bbox(),this._gaugeAreaMargin);this.reflow(i)},setOptions:function(t,e){this._originalOptions=l(this._originalOptions,t),this.options=l({},this._originalOptions),this._initTheme(e),this.redraw()},setDirection:function(t){this.contextService.rtl=Boolean(t),this.surface&&"svg"===this.surface.type&&(this.surface.destroy(),this.surface=null)},setIntlService:function(t){this.contextService.intl=t},_initTheme:function(t){var e=t||this.theme||{};this.theme=e,this.options=l({},e,this.options);var i=this.options,n=i.pointer;if(h(n)){for(var r=[],o=0;o<n.length;o++)r.push(l({},e.pointer,n[o]));i.pointer=r}},_createGaugeArea:function(){var t=this.options.gaugeArea,e=this.surface.size(),i=t.border||{},n=new y([0,0],[e.width,e.height]);return this._gaugeAreaMargin=t.margin||5,i.width>0&&(n=D(n,i.width)),Y.fromRect(n,{stroke:{color:i.width?i.color:"",width:i.width,dashType:i.dashType,lineJoin:"round",lineCap:"round"},fill:{color:t.background}})},_initSurface:function(){var t=this.options,i=this.surface,n=this._surfaceElement(),r=this._surfaceSize();e.elementSize(n,r),i&&i.options.type===t.renderAs?(this.surface.clear(),this.surface.resize()):(i&&i.destroy(),this.surface=F.create(n,{type:t.renderAs}))},_surfaceSize:function(){var t=this.options,e=this._getSize();return t.gaugeArea&&l(e,t.gaugeArea),e},_surfaceElement:function(){return this.surfaceElement||(this.surfaceElement=document.createElement("div"),this.element.appendChild(this.surfaceElement)),this.surfaceElement},getSize:function(){return this._getSize()},_getSize:function(){var t=this.element,e=this._defaultSize(),i=t.offsetWidth,n=t.offsetHeight;return i||(i=e.width),n||(n=e.height),{width:i,height:n}},_defaultSize:function(){return{width:200,height:200}},_toggleTransitions:function(t){this.options.transitions=t;for(var e=0;e<this.pointers.length;e++)this.pointers[e].options.animation.transitions=t}});c(I,{plotArea:{},theme:"default",renderAs:"",pointer:{},scale:{},gaugeArea:{}});var N=x,W=m,H=k;function J(t,e){var i,n,r=t.position,o=t.tickX,s=t.tickY;return t.vertical?(i=new H(o,r),n=new H(o+e.size,r)):(i=new H(r,s),n=new H(r,s+e.size)),new N({stroke:{color:e.color,width:e.width}}).moveTo(i).lineTo(n)}function Q(t,e,i,n){var r=e.length;if(n.visible)for(var o=i.mirror,s=i.lineBox,a=n.skip;a<r;a+=n.step)a%n.skipUnit!=0&&(i.tickX=o?s.x2:s.x2-n.size,i.tickY=o?s.y1-n.size:s.y1,i.position=e[a],t.append(J(i,n)))}var K=u.extend({init:function(e,i){var r=e||{};!n(r.reverse)&&!1===r.vertical&&(i||{}).rtl&&(r=t.extend({},r,{reverse:!0})),u.fn.init.call(this,0,1,r,i),this.options.minorUnit=this.options.minorUnit||this.options.majorUnit/10},initUserOptions:function(t){var i=l({},this.options,t);return(i=l({},i,{labels:{mirror:i.mirror}})).majorUnit=i.majorUnit||e.autoMajorUnit(i.min,i.max),i},initFields:function(){},render:function(){var t=this.elements=new W,e=this.renderLabels(),i=this.renderLine(),n=this.renderTicks(),r=this.renderRanges();return t.append(i,e,n,r),t},renderRanges:function(){for(var t=this,e=this.options,i=e.min,n=e.max,r=e.vertical,o=e.labels.mirror,s=e.ranges||[],a=new W,l=s.length,h=e.rangeSize||e.minorTicks.size/2,c=0;c<l;c++){var u=G(s[c],i,n),p=t.getSlot(u.from,u.to),d=r?t.lineBox():p,g=r?p:t.lineBox();r?d.x1-=h*(o?-1:1):g.y2+=h*(o?-1:1),a.append(N.fromRect(new y([d.x1,g.y1],[d.x2-d.x1,g.y2-g.y1]),{fill:{color:u.color,opacity:u.opacity},stroke:{}}))}return a},renderLabels:function(){for(var t=this.labels,e=this.options,i=new W,n=0;n<t.length;n++)i.append(X(t[n],e.labels));return i},renderLine:function(){var t=this.options.line,e=this.lineBox(),i=new W;if(t.width>0&&t.visible){var n=new N({stroke:{color:t.color,dashType:t.dashType,width:t.width}});n.moveTo(e.x1,e.y1).lineTo(e.x2,e.y2),i.append(n)}return i},renderTicks:function(){var t=new W,e=this.options,i=e.majorTicks.visible?e.majorUnit:0,n={vertical:e.vertical,mirror:e.labels.mirror,lineBox:this.lineBox()};return Q(t,this.getMajorTickPositions(),n,e.majorTicks),Q(t,this.getMinorTickPositions(),n,l({},{skipUnit:i/e.minorUnit},e.minorTicks)),t}});c(K,{min:0,max:50,majorTicks:{size:15,align:E,color:o,width:R,visible:!0},minorTicks:{size:10,align:E,color:o,width:R,visible:!0},line:{width:R},labels:{position:E,padding:2},mirror:!1,_alignLines:!1});var q=e.Class.extend({init:function(t,e){var i=t.options,r=i.min,o=i.max,s=this.options=l({},this.options,e);s.fill=s.color,this.scale=t,n(s.value)?s.value=p(s.value,r,o):s.value=r},value:function(t){var e=this.options,i=e.value;if(0===arguments.length)return i;var r=this.scale.options,o=r.min,s=r.max;e._oldValue=n(e._oldValue)?e.value:o,e.value=p(t,o,s),this.elements&&this.repaint()}});c(q,{color:o});var Z=q.extend({init:function(t,e){q.fn.init.call(this,t,e),this.options=l({track:{visible:n(e.track)}},this.options)},reflow:function(){var t,e,n,r=this.options,o=this.scale,s=o.options,a=s.mirror,l=s.vertical,h=o.lineBox(),c=r.track.size||r.size,u=r.size/2,p=i(r.margin),g=l?p[a?"left":"right"]:p[a?"bottom":"top"];g=a?-g:g,l?(n=new d(h.x1+g,h.y1,h.x1+g,h.y2),a?n.x1-=c:n.x2+=c,r.shape!==S&&(t=e=new d(h.x2+g,h.y1-u,h.x2+g,h.y2+u))):(n=new d(h.x1,h.y1-g,h.x2,h.y1-g),a?n.y2+=c:n.y1-=c,r.shape!==S&&(t=e=new d(h.x1-u,h.y1-g,h.x2+u,h.y1-g))),this.trackBox=n,this.pointerRangeBox=e,this.box=t||n.clone().pad(r.border.width)},getElementOptions:function(){var t=this.options;return{fill:{color:t.color,opacity:t.opacity},stroke:n(t.border)?{color:t.border.width?t.border.color||t.color:"",width:t.border.width,dashType:t.border.dashType,opacity:t.opacity}:null}},_margin:function(){var t=this.scale,e=this.options,n=t.options,r=n.mirror,o=n.vertical,s=i(e.margin);return o?s[r?"left":"right"]:s[r?"bottom":"top"]}});c(Z,{shape:S,track:{border:{width:1}},color:o,border:{width:1},opacity:1,margin:i(3),animation:{type:S},visible:!0});var $=w.extend({setup:function(){var t=this.options,e=t.margin,i=t.from,n=t.to,r=t.vertical,o=r?"x1":"y1";t.mirror===r?(i[o]-=e,n[o]-=e):(i[o]+=e,n[o]+=e);var s=this.fromScale=new k(i.x1,i.y1),a=this.toScale=new k(n.x1,n.y1);0!==t.duration&&(t.duration=Math.max(s.distanceTo(a)/t.duration*1e3,1))},step:function(t){var e=g(this.fromScale.x,this.toScale.x,t),i=g(this.fromScale.y,this.toScale.y,t);this.element.transform(A().translate(e,i))}});c($,{easing:j,duration:250}),b.current.register(z,$);var tt=k,et=x,it=Z.extend({init:function(t,e){Z.fn.init.call(this,t,e),n(this.options.size)||(this.options.size=.6*this.scale.options.majorTicks.size)},pointerShape:function(){var t=this.scale,e=this.options.size,i=e/2,n=t.options.mirror?-1:1;return t.options.vertical?[new tt(0,0-i),new tt(0-n*e,0),new tt(0,0+i)]:[new tt(0-i,0),new tt(0,0+n*e),new tt(0+i,0)]},repaint:function(){var t=this.scale,e=this.options,i=new $(this.elements,l(e.animation,{vertical:t.options.vertical,mirror:t.options.mirror,margin:this._margin(e.margin),from:t.getSlot(e._oldValue),to:t.getSlot(e.value)}));!1===e.animation.transitions&&(i.options.duration=0),i.setup(),i.play()},render:function(){var t=this.scale,e=this.options,i=this.getElementOptions(),n=this.pointerShape(e.value);e.animation.type=z;var r=new et({stroke:i.stroke,fill:i.fill}).moveTo(n[0]).lineTo(n[1]).lineTo(n[2]).close(),o=t.getSlot(e.value);return r.transform(A().translate(o.x1,o.y1)),this.elements=r,r}}),nt=w.extend({setup:function(){var t=this.options,e=this.axis=t.vertical?r.Y:r.X,i=this.to=t.newPoints[0][e],n=this.from=t.oldPoints[0][e];0!==t.duration&&(t.duration=Math.max(Math.abs(i-n)/t.speed*1e3,1)),this._set(n)},step:function(t){var e=g(this.from,this.to,t);this._set(e)},_set:function(t){var e="set"+this.axis.toUpperCase(),i=this.options.newPoints;i[0][e](t),i[1][e](t)}});c(nt,{easing:j,speed:250}),b.current.register(S,nt);var rt=m,ot=x,st=Z.extend({init:function(t,e){Z.fn.init.call(this,t,e),n(this.options.size)||(this.options.size=.3*this.scale.options.majorTicks.size)},pointerShape:function(t){var e=this.scale,i=this.options,n=e.options,o=n.mirror,s=n.vertical,a=o===s?-1:1,l=i.size*a,h=e.getSlot(e.options.min),c=e.getSlot(t),u=s?r.Y:r.X,p=s?r.X:r.Y,d=this._margin()*a,g=new k;g[u]=h[u+"1"],g[p]=h[p+"1"];var f=new k;f[u]=c[u+"1"],f[p]=c[p+"1"],s?(g.translate(d,0),f.translate(d,0)):(g.translate(0,d),f.translate(0,d));var v=f.clone(),m=g.clone();return s?(v.translate(l,0),m.translate(l,0)):(v.translate(0,l),m.translate(0,l)),[g,f,v,m]},repaint:function(){var t=this.scale,e=this.options,i=this.pointerShape(e.value),n=this.pointerPath,r=this.pointerShape(e._oldValue);n.moveTo(i[0]).lineTo(i[1]).lineTo(i[2]).lineTo(i[3]).close();var o=new nt(n,l(e.animation,{reverse:t.options.reverse,vertical:t.options.vertical,oldPoints:[r[1],r[2]],newPoints:[i[1],i[2]]}));!1===e.animation.transitions&&(o.options.duration=0),o.setup(),o.play()},render:function(){var t=new rt,e=this.getElementOptions();this.options.track.visible&&t.append(this.renderTrack());var i=this.pointerPath=new ot({stroke:e.stroke,fill:e.fill});return t.append(i),this.elements=t,t},renderTrack:function(){var t=this.options.track,e=t.border||{},i=this.trackBox.clone().pad(e.width||0);return new ot.fromRect(i.toRect(),{fill:{color:t.color,opacity:t.opacity},stroke:{color:e.width?e.color||t.color:"",width:e.width,dashType:e.dashType}})}}),at=m,lt=I.extend({reflow:function(t){var e=this.pointers,i=t.origin.x,n=t.origin.y,r=new d(i,n,i+t.width(),n+t.height());this.scale.reflow(r),this._shrinkScaleWidth(r);for(var o=0;o<e.length;o++)e[o].reflow();this.bbox=this._getBox(r),this._alignElements(),this._shrinkElements(),this._buildVisual(),this._draw()},_buildVisual:function(){var t=new at,e=this.scale.render(),i=this.pointers;t.append(this.gaugeArea),t.append(e);for(var n=0;n<i.length;n++){var r=i[n];t.append(r.render()),r.value(r.options.value)}this._visuals=t},_createModel:function(){var t=this.options,e=this.scale=new K(t.scale,this.contextService);this.pointers=[];var i=t.pointer;i=h(i)?i:[i];for(var n=0;n<i.length;n++){var r=l({},i[n],{animation:{transitions:t.transitions}}),o="arrow"===r.shape?it:st;this.pointers.push(new o(e,r))}},_defaultSize:function(){var t=this.options.scale.vertical;return{width:t?60:200,height:t?200:60}},_getBox:function(t){for(var e,i=this.scale,n=this.pointers,r=t.center(),o=n[0].box.clone().wrap(i.box),s=0;s<n.length;s++)o.wrap(n[s].box.clone());return i.options.vertical?(e=o.width()/2,o=new d(r.x-e,t.y1,r.x+e,t.y2)):(e=o.height()/2,o=new d(t.x1,r.y-e,t.x2,r.y+e)),o},_alignElements:function(){for(var t,e=this.scale,i=this.pointers,n=e.box,r=i[0].box.clone().wrap(e.box),o=this.bbox,s=0;s<i.length;s++)r.wrap(i[s].box.clone());e.options.vertical?(t=o.center().x-r.center().x,e.reflow(new d(n.x1+t,o.y1,n.x2+t,o.y2))):(t=o.center().y-r.center().y,e.reflow(new d(n.x1,n.y1+t,n.x2,n.y2+t)));for(var a=0;a<i.length;a++)i[a].reflow(this.bbox)},_shrinkScaleWidth:function(t){var e=this.scale;if(!e.options.vertical){var i=e.contentBox().width()-t.width();i>0&&(e.box.shrink(i,0),e.box.alignTo(t,"center"),e.reflow(e.box))}},_shrinkElements:function(){for(var t=this.scale,e=this.pointers,i=t.box.clone(),n=t.options.vertical?"y":"x",r=e[0].box,o=0;o<e.length;o++)r.wrap(e[o].box.clone());i[n+1]+=Math.max(i[n+1]-r[n+1],0),i[n+2]-=Math.max(r[n+2]-i[n+2],0),t.reflow(i);for(var s=0;s<e.length;s++)e[s].reflow(this.bbox)}});c(lt,{transitions:!0,gaugeArea:{background:""},scale:{vertical:!0}});var ht=180,ct=v.Arc,ut=x,pt=m;function dt(t,e,i,n){var r=new pt,o=t.center,s=t.getRadiusX();if(n.visible)for(var a=0;a<e.length;a++){var l=t.pointAt(e[a]),h=new k(o.x+s-n.size,o.y).rotate(e[a],o);r.append(new ut({stroke:{color:n.color,width:n.width}}).moveTo(l).lineTo(h))}return r}function gt(t,e,i,n){return{from:t,to:e,color:i,opacity:n}}var ft=u.extend({init:function(t,e){u.fn.init.call(this,0,1,t,e)},initUserOptions:function(t){var i=l({},this.options,t);return i.majorUnit=i.majorUnit||e.autoMajorUnit(i.min,i.max),i.minorUnit=i.minorUnit||i.majorUnit/10,i},initFields:function(){},render:function(t,e){var i=this.renderArc(t,e);this.bbox=i.bbox(),this.labelElements=this.renderLabels(),this.ticks=this.renderTicks(),this.ranges=this.renderRanges()},reflow:function(t){var e=t.center(),i=Math.min(t.height(),t.width())/2;if(!n(this.bbox))return this.render(e,i);this.bbox=this.arc.bbox(),this.radius(this.arc.getRadiusX()),this.repositionRanges(),this.renderLabels()},slotAngle:function(t){var e=this.options,i=e.min,n=e.max,r=e.reverse,o=e.startAngle,s=e.endAngle,a=s-o;return(r?s-(t-i)/(n-i)*a:(t-i)/(n-i)*a+o)+ht},hasRanges:function(){var t=this.options.ranges;return t&&t.length},ticksSize:function(){var t=this.options,e=t.majorTicks,i=t.minorTicks,n=0;return e.visible&&(n=e.size),i.visible&&(n=Math.max(i.size,n)),n},labelsCount:function(){var t=u.fn.labelsCount.call(this),e=this.options;return e.endAngle-e.startAngle>=360&&e.max%e.majorUnit==0&&(t-=1),t},renderLabels:function(){var t=this,e=this.options,r=this.arc.clone(),o=r.getRadiusX(),s=this.tickAngles(r,e.majorUnit),a=e.rangeSize=e.rangeSize||.1*o,l=new pt,h=.05*o;n(e.rangeDistance)?h=e.rangeDistance:e.rangeDistance=h;var c=e.labels,u=c.position===E,p=n(this.labelElements);u&&(o-=this.ticksSize(),this.hasRanges()&&!p&&(o-=a+h),r.setRadiusX(o).setRadiusY(o));for(var g=this.labels,f=g.length,v=i(c.padding),m=(v.left+v.right)/2,x=(v.top+v.bottom)/2,w=0;w<f;w++){var b=g[w],_=b.box.width()/2,T=b.box.height()/2,z=s[w],S=(z-ht)*C,R=r.pointAt(z),j=R.x+Math.cos(S)*(_+m)*(u?1:-1),M=R.y+Math.sin(S)*(T+x)*(u?1:-1);b.reflow(new d(j-_,M-T,j+_,M+T));var P=new k(b.box.x1,b.box.y1),O=void 0;if(p){var U=(O=t.labelElements.children[w]).bbox().origin,B=O.transform()||A();B.translate(P.x-U.x,P.y-U.y),O.transform(B)}else O=X(b,e.labels),l.append(O);t.bbox=y.union(t.bbox,O.bbox())}return l},repositionRanges:function(){var t=this.ranges.children;if(t.length>0){var e=this.options,i=e.rangeDistance,n=e.rangeSize,r=this.getRangeRadius();this.options.labels.position===E&&(r+=n+i);for(var o=r+n/2,s=0;s<t.length;s++)t[s]._geometry.setRadiusX(o).setRadiusY(o);this.bbox=y.union(this.bbox,this.ranges.bbox())}},renderRanges:function(){var t=this,e=this.rangeSegments(),i=e.length,n=new pt;if(i){var r=this.options,o=r.rangeSize,s=r.reverse,a=r.rangeDistance,l=this.getRangeRadius();this.radius(this.radius()-o-a);for(var h=0;h<i;h++){var c=e[h],u=t.slotAngle(c[s?"to":"from"]),p=t.slotAngle(c[s?"from":"to"]);p-u!=0&&n.append(t.createRange(u,p,l,c))}}return n},createRange:function(t,e,i,n){var r=this.options.rangeSize,o=new _.Arc(this.arc.center,{radiusX:i+r/2,radiusY:i+r/2,startAngle:t,endAngle:e});return new ct(o,{stroke:{width:r,color:n.color,opacity:n.opacity,lineCap:n.lineCap}})},rangeSegments:function(){var t=this.options,e=t.ranges||[],i=e.length,n=[];if(i){var r=t.min,o=t.max,s=t.rangePlaceholderColor;n.push(gt(r,o,s));for(var a=0;a<i;a++)for(var l=G(e[a],r,o),h=n.length,c=0;c<h;c++){var u=n[c];if(u.from<=l.from&&l.from<=u.to){n.push(gt(l.from,l.to,l.color,l.opacity)),u.from<=l.to&&l.to<=u.to&&n.push(gt(l.to,u.to,s,l.opacity)),u.to=l.from;break}}}return n},getRangeRadius:function(){var t=this.arc,e=this.options,i=e.rangeSize,n=e.rangeDistance,r=e.majorTicks.size;return e.labels.position===M?t.getRadiusX()-r-n-i:t.getRadiusX()-i},renderArc:function(t,e){var i=this.options;return this.arc=new _.Arc(t,{radiusX:e,radiusY:e,startAngle:i.startAngle+ht,endAngle:i.endAngle+ht})},renderTicks:function(){var t=this.arc,e=this.options,i=t.clone();this.majorTickAngles=this.tickAngles(t,e.majorUnit),this.majorTicks=dt(i,this.majorTickAngles,e.majorUnit,e.majorTicks);var n=new pt;n.append(this.majorTicks);var r=e.majorTicks.size,o=e.minorTicks.size;if(this._tickDifference=r-o,e.labels.position===M){var s=i.getRadiusX();i.setRadiusX(s-r+o).setRadiusY(s-r+o)}return this.minorTickAngles=this.normalizeTickAngles(this.tickAngles(t,e.minorUnit)),this.minorTicks=dt(i,this.minorTickAngles,e.minorUnit,e.minorTicks),n.append(this.minorTicks),n},normalizeTickAngles:function(t){for(var e=this.options,i=e.majorUnit/e.minorUnit,n=t.length-1;n>=0;n--)n%i==0&&t.splice(n,1);return t},tickAngles:function(t,e){var i=this.options,n=i.reverse,r=i.max-i.min,o=t.endAngle-t.startAngle,a=r/e,l=t.startAngle,h=o/a;n&&(l+=o,h=-h),o>=360&&i.max%e==0&&(a-=1);for(var c=[],u=0;u<a;u++)c.push(f(l,s)),l+=h;return f(l)<=t.endAngle&&c.push(l),c},radius:function(t){if(!t)return this.arc.getRadiusX();this.arc.setRadiusX(t).setRadiusY(t),this.repositionTicks(this.majorTicks.children,this.majorTickAngles),this.repositionTicks(this.minorTicks.children,this.minorTickAngles,!0)},repositionTicks:function(t,e,i){var n=i&&this._tickDifference||0,r=this.arc,o=r.getRadiusX();i&&this.options.labels.position===M&&0!==n&&(r=this.arc.clone()).setRadiusX(o-n).setRadiusY(o-n);for(var s=0;s<t.length;s++){var a=r.pointAt(e[s]),l=t[s].segments,h=a.x-l[0].anchor().x,c=a.y-l[0].anchor().y;t[s].transform((new A).translate(h,c))}}});c(ft,{min:0,max:100,majorTicks:{size:15,align:E,color:o,width:R,visible:!0},minorTicks:{size:10,align:E,color:o,width:R,visible:!0},startAngle:-30,endAngle:210,labels:{position:E,padding:2}});var vt=w.extend({init:function(t,e){w.fn.init.call(this,t,e);var i=this.options;i.duration=Math.max(Math.abs(i.newAngle-i.oldAngle)/i.duration*1e3,1)},step:function(t){var e=this.options,i=g(e.oldAngle,e.newAngle,t);this.element.transform(A().rotate(i,e.center))}});c(vt,{easing:j,duration:T}),b.current.register(P,vt);var mt=v.Circle,xt=m,wt=x,bt=q.extend({setAngle:function(t){this.elements.transform(A().rotate(t,this.center))},repaint:function(){var t=this.scale,e=this.options,i=t.slotAngle(e._oldValue),n=t.slotAngle(e.value);!1===e.animation.transitions?this.setAngle(n):new vt(this.elements,l(e.animation,{oldAngle:i,newAngle:n})).play()},render:function(){var t=this.scale,e=this.options,i=new xt;return!1!==e.animation&&l(e.animation,{startAngle:0,center:t.arc.center,reverse:t.options.reverse}),i.append(this._renderNeedle(),this._renderCap()),this.elements=i,this.setAngle(C),i},reflow:function(t){var e=this.center=t.center,i=p(this.options.length||1,.1,1.5),n=this.radius=t.getRadiusX()*i,r=this.capSize=Math.round(n*this.options.cap.size);this.bbox=y.fromPoints(new k(e.x-r,e.y-r),new k(e.x+r,e.y+r))},_renderNeedle:function(){var t=this.scale.options.minorTicks.size,e=this.center,i=this.options.color,n=new wt({fill:{color:i},stroke:{color:i,width:R}});return n.moveTo(e.x+this.radius-t,e.y).lineTo(e.x,e.y-this.capSize/2).lineTo(e.x,e.y+this.capSize/2).close(),n},_renderCap:function(){var t=this.options,e=t.cap.color||t.color,i=new _.Circle(this.center,this.capSize);return new mt(i,{fill:{color:e},stroke:{color:e}})}});c(bt,{cap:{size:.05},arrow:{width:16,height:14},animation:{type:P,duration:T}});var _t=m,yt=I.extend({reflow:function(t){var e=this,i=this.pointers;this.scale.reflow(t),this._initialPlotArea=this.scale.bbox;for(var n=0;n<i.length;n++)i[n].reflow(e.scale.arc),e._initialPlotArea=y.union(e._initialPlotArea,i[n].bbox);this.fitScale(t),this.alignScale(t),this._buildVisual(this.gaugeArea,i,this.scale),this._draw()},_buildVisual:function(t,e,i){var n=this._visuals=new _t;n.append(t),n.append(i.ticks),n.append(i.ranges),this._buildPointers(e),n.append(i.labelElements)},_buildPointers:function(t){for(var e=0;e<t.length;e++){var i=t[e];i.render(),this._visuals.append(i.elements),i.value(i.options.value)}},fitScale:function(t){for(var e,i,n,r,o,a=this,l=this.scale.arc,h=this._initialPlotArea,c=Math.abs(this.getDiff(h,t)),u=f(c,s),p=f(-c,s),d=0,g=0;!(!(g++<100)||(d=o===n?d+1:0)>5||u!==r&&0<=(e=a.getPlotBox(u,t,l))&&e<=2||p!==r&&0<=(n=a.getPlotBox(p,t,l))&&n<=2||(r=e>0&&n>0?2*u:e<0&&n<0?2*p:f((u+p)/2||1,s),0<=(i=a.getPlotBox(r,t,l))&&i<=2));)o=n,i>0?(p=r,n=i):(u=r,e=i)},getPlotBox:function(t,e,i){var n=this.scale,r=this.pointers,o=i.getRadiusX(),s=i.clone();s.setRadiusX(o+t).setRadiusY(o+t),n.arc=s,n.reflow(e),this.plotBbox=n.bbox;for(var a=0;a<r.length;a++)r[a].reflow(s),this.plotBbox=y.union(this.plotBbox,r[a].bbox);return this.getDiff(this.plotBbox,e)},getDiff:function(t,e){return Math.min(e.width()-t.width(),e.height()-t.height())},alignScale:function(t){var e=this.plotBbox.center(),i=t.center(),n=e.x-i.x,r=e.y-i.y,o=this.scale,s=this.pointers;o.arc.center.x-=n,o.arc.center.y-=r,o.reflow(t);for(var a=0;a<s.length;a++)s[a].reflow(o.arc),this.plotBbox=y.union(o.bbox,s[a].bbox)},_createModel:function(){var t=this.options,e=t.pointer,i=this.scale=new ft(t.scale,this.contextService);this.pointers=[];for(var n=h(e)?e:[e],r=0;r<n.length;r++){var o=new bt(i,l({},n[r],{animation:{transitions:t.transitions}}));this.pointers.push(o)}}});c(yt,{transitions:!0,gaugeArea:{background:""}});var kt=ft.extend({rangeSegments:function(){var t=this.options;return[{from:t.min,to:t.max,color:t.rangePlaceholderColor,lineCap:t.rangeLineCap}]},hasRanges:function(){return!0},placeholderRangeAngle:function(t){var e=this.ranges.children[0].geometry();this.options.reverse?e.setEndAngle(t):e.setStartAngle(t)},addRange:function(t,e,i){var n=this.options.reverse,r=this.slotAngle(n?e:t),o=this.slotAngle(n?t:e),s=this.createRange(r,o,this.getRangeRadius(),i);return this.ranges.append(s),s}});c(kt,{min:0,max:100,majorTicks:{visible:!1},minorTicks:{visible:!1},labels:{visible:!1},startAngle:0,endAngle:180,rangeLineCap:"round"});var At=w.extend({init:function(t,e){w.fn.init.call(this,t,e);var i=this.options,n=Math.abs(i.newAngle-i.oldAngle)/i.duration*1e3;i.duration=p(n,T,800);var r=t.elements.options.get("stroke.color"),o=t.currentColor();r!==o&&(this.startColor=new kendo.Color(r),this.color=new kendo.Color(o))},step:function(t){var e=this,i=e.options,n=e.startColor,r=e.color,o=g(i.oldAngle,i.newAngle,t);if(this.element.angle(o),r){var s=f(g(n.r,r.r,t)),a=f(g(n.g,r.g,t)),l=f(g(n.b,r.b,t));this.element.stroke(new kendo.Color(s,a,l).toHex())}}});c(At,{easing:j,duration:T}),b.current.register(O,At);var Tt=q.extend({repaint:function(){var t=this.scale,e=this.options,i=t.slotAngle(e._oldValue),n=t.slotAngle(e.value);this.animation&&this.animation.abort(),!1===e.animation.transitions?(this.angle(n),this.stroke(this.currentColor())):(this.animation=new At(this,l(e.animation,{oldAngle:i,newAngle:n})),this.animation.play())},angle:function(t){var e=this.elements.geometry();this.scale.options.reverse?e.setStartAngle(t):e.setEndAngle(t),this.scale.placeholderRangeAngle(t)},stroke:function(t){this.elements.stroke(t)},render:function(){if(!this.elements){var t=this.scale,e=this.options;!1!==e.animation&&l(e.animation,{startAngle:0,center:t.arc.center,reverse:t.options.reverse}),this.elements=t.addRange(t.options.min,this.options.value,{color:this.currentColor(),opacity:e.opacity,lineCap:t.options.rangeLineCap})}},currentColor:function(){var t=this.scale.options,i=t.min,n=t.max,r=this.options,o=r.colors,s=r.color,a=r.value,l=e.isNumber(a)?a:i;if(o)for(var h=0;h<o.length;h++){var c=o[h],u=c.color,p=c.from;void 0===p&&(p=i);var d=c.to;if(void 0===d&&(d=n),p<=l&&l<=d)return u}return s},reflow:function(){this.render(),this.bbox=this.elements.bbox()}});c(Tt,{animation:{type:O,duration:T}});var zt=yt.extend({_initTheme:function(t){yt.fn._initTheme.call(this,t),this.options.color=this.options.color||(this.theme.pointer||{}).color},_createModel:function(){var t=this.options,e=this.scale=new kt(t.scale,this.contextService),i=new Tt(e,l({},{colors:t.colors,color:t.color,value:t.value,opacity:t.opacity,animation:{transitions:t.transitions}}));this.pointers=[i]},_buildPointers:function(t){for(var e=0;e<t.length;e++){var i=t[e];i.render(),i.value(i.options.value)}},_setValueOptions:function(t){this.options.value=t},currentColor:function(){var t=this.pointers[0];if(t)return t.currentColor()},centerLabelPosition:function(t,e){var i=this.getSize(),n=this.scale.arc.center,r=n.x-t/2,o=n.y-e/2;if(t<i.width){var s=r+t;r=Math.max(r,0),s>i.width&&(r-=s-i.width)}if(e<i.height){var a=this.scale.bbox,l=a.bottomRight().y,h=o+e;o=Math.max(o,a.origin.y),h>l&&(o-=h-l)}return{left:r,top:o}}}),St=zt.extend({_createModel:function(){var t=this.options.scale;"number"!=typeof t.startAngle&&(t.startAngle=90),t.endAngle=t.startAngle+360,zt.fn._createModel.call(this)}});kendo.deepExtend(kendo.dataviz,{Gauge:I,LinearGauge:lt,LinearPointer:Z,ArrowLinearPointer:it,BarLinearPointer:st,LinearScale:K,RadialGauge:yt,RadialPointer:bt,RadialScale:ft,ArcGauge:zt,RangePointer:Tt,ArcScale:kt,CircularGauge:St})}(window.kendo.jQuery),function(t){var e=window.kendo,i=e.ui.Widget,n=e.dataviz,r=n.LinearGauge,o=n.RadialGauge,s=n.ArcGauge,a=n.CircularGauge,l=e.drawing;function h(t){var e=n.ui.themes||{},i=t.theme||"",r=i.toLowerCase();return-1!=n.SASS_THEMES.indexOf(r)?n.autoTheme().gauge:(e[i]||e[r]||{}).gauge}var c=i.extend({init:function(r,o){e.destroy(r),t(r).empty(),i.fn.init.call(this,r),this.options=e.deepExtend(this.options,o),this.wrapper=this.element,this._createInstance(),this.element.addClass("k-gauge"),e.notify(this,n.ui)},options:{theme:"default",renderAs:"",pointer:{},scale:{},gaugeArea:{background:""},transitions:!0},setOptions:function(t){this._instance.setOptions(t,h(t)),this._copyFields()},redraw:function(){this._instance.redraw(),this._copyFields()},destroy:function(){i.fn.destroy.call(this),this._instance.destroy()},_createInstance:function(){var t=this._gaugeType();this._instance=new t(this.element[0],this.options,h(this.options)),this._copyFields()},_copyFields:function(){this._originalOptions=this._instance._originalOptions,this.options=this._instance.options,this.surface=this._instance.surface,this.bbox=this._instance.bbox,this.gaugeArea=this._instance.gaugeArea,this.pointers=this._instance.pointers,this.scale=this._instance.scale},_resize:function(){this._instance.resize()}}),u=["getSize","value","allValues","exportVisual"];function p(t){c.fn[t]=function(){return this._instance[t].apply(this._instance,arguments)}}for(var d=0;d<u.length;d++)p(u[d]);n.ExportMixin.extend(c.fn);var g=c.extend({options:{name:"RadialGauge"},_gaugeType:function(){return o}}),f=c.extend({options:{name:"LinearGauge",scale:{vertical:!0}},_gaugeType:function(){return r}}),v=c.extend({init:function(t,e){c.fn.init.call(this,t,e),this.element.css("position","relative"),this.element.addClass("k-arcgauge"),this._centerTemplate()},options:{name:"ArcGauge"},setOptions:function(t){c.fn.setOptions.call(this,t),this._centerTemplate()},redraw:function(){c.fn.redraw.call(this),this._centerTemplate()},value:function(t){var e=this._instance;if(0===arguments.length)return e.value();e.value(t),this._centerTemplate()},destroy:function(){c.fn.destroy.call(this),delete this._centerElement},exportVisual:function(){return!this._centerElement&&c.fn.exportVisual.call(this)},_resize:function(){this._instance.resize(),this._centerTemplate()},_centerTemplate:function(){if(this.options.centerTemplate){var t=e.template(this.options.centerTemplate),i=this._instance,n=this._getCenterElement();n.html(t({color:i.currentColor(),value:i.value()}));var r=i.centerLabelPosition(n.width(),n.height());n.css(r)}else this._centerElement&&(this._centerElement.remove(),this._centerElement=null)},_getCenterElement:function(){var e=this._centerElement;return e||(e=this._centerElement=t("<div></div>").addClass("k-arcgauge-label"),this.element.append(e)),e},_gaugeType:function(){return s}}),m=v.extend({options:{name:"CircularGauge"},_gaugeType:function(){return a}});function x(t){v.fn[t]=function(e){var i=this,n=l[t];return i._centerElement?l.drawDOM(i.element).then((function(t){return n(t,e)})):n(i.exportVisual(),e)}}var w=["exportSVG","exportImage","exportPDF"];for(d=0;d<w.length;d++)x(w[d]);n.ui.plugin(f),n.ui.plugin(g),n.ui.plugin(v),n.ui.plugin(m),e.deepExtend(n,{Gauge:c,LinearGauge:f,RadialGauge:g,ArcGauge:v,CircularGauge:m})}(window.kendo.jQuery);var __meta__={id:"dataviz.gauge",name:"Gauge",category:"dataviz",description:"Linear, Radial and Arc gauges.",depends:["dataviz.core","dataviz.themes"]};
//# sourceMappingURL=kendo.dataviz.gauge.js.map
