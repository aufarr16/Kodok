/*
 Highstock JS v9.0.1 (2021-03-26)

 Indicator series type for Highstock

 (c) 2010-2021 Pawe Fus

 License: www.highcharts.com/license
*/
(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/indicators/pivot-points",["highcharts","highcharts/modules/stock"],function(h){a(h);a.Highcharts=h;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function h(a,k,c,f){a.hasOwnProperty(k)||(a[k]=f.apply(null,c))}a=a?a._modules:{};h(a,"Stock/Indicators/PivotPoints/PivotPointsPoint.js",[a["Core/Series/SeriesRegistry.js"]],function(a){function k(f,
d){var e=f.series.pointArrayMap,c=e.length;for(a.seriesTypes.sma.prototype.pointClass.prototype[d].call(f);c--;)d="dataLabel"+e[c],f[d]&&f[d].element&&f[d].destroy(),f[d]=null}var c=this&&this.__extends||function(){var a=function(d,e){a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(a,d){a.__proto__=d}||function(a,d){for(var e in d)d.hasOwnProperty(e)&&(a[e]=d[e])};return a(d,e)};return function(d,e){function c(){this.constructor=d}a(d,e);d.prototype=null===e?Object.create(e):(c.prototype=
e.prototype,new c)}}();return function(a){function d(){var d=null!==a&&a.apply(this,arguments)||this;d.P=void 0;d.pivotLine=void 0;d.series=void 0;return d}c(d,a);d.prototype.destroyElements=function(){k(this,"destroyElements")};d.prototype.destroy=function(){k(this,"destroyElements")};return d}(a.seriesTypes.sma.prototype.pointClass)});h(a,"Stock/Indicators/PivotPoints/PivotPointsIndicator.js",[a["Stock/Indicators/PivotPoints/PivotPointsPoint.js"],a["Core/Series/SeriesRegistry.js"],a["Core/Utilities.js"]],
function(a,k,c){var f=this&&this.__extends||function(){var a=function(d,b){a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(b,a){b.__proto__=a}||function(b,a){for(var g in a)a.hasOwnProperty(g)&&(b[g]=a[g])};return a(d,b)};return function(d,b){function g(){this.constructor=d}a(d,b);d.prototype=null===b?Object.create(b):(g.prototype=b.prototype,new g)}}(),d=k.seriesTypes.sma,e=c.merge,h=c.extend,n=c.defined,t=c.isArray;c=function(a){function c(){var b=null!==a&&a.apply(this,arguments)||
this;b.data=void 0;b.options=void 0;b.points=void 0;b.endPoint=void 0;b.plotEndPoint=void 0;return b}f(c,a);c.prototype.toYData=function(b){return[b.P]};c.prototype.translate=function(){var b=this;k.seriesTypes.sma.prototype.translate.apply(b);b.points.forEach(function(a){b.pointArrayMap.forEach(function(g){n(a[g])&&(a["plot"+g]=b.yAxis.toPixels(a[g],!0))})});b.plotEndPoint=b.xAxis.toPixels(b.endPoint,!0)};c.prototype.getGraphPath=function(b){for(var a=this,d=b.length,c=[[],[],[],[],[],[],[],[],[]],
e=[],f=a.plotEndPoint,u=a.pointArrayMap.length,p,l,m;d--;){l=b[d];for(m=0;m<u;m++)p=a.pointArrayMap[m],n(l[p])&&c[m].push({plotX:l.plotX,plotY:l["plot"+p],isNull:!1},{plotX:f,plotY:l["plot"+p],isNull:!1},{plotX:f,plotY:null,isNull:!0});f=l.plotX}c.forEach(function(b){e=e.concat(k.seriesTypes.sma.prototype.getGraphPath.call(a,b))});return e};c.prototype.drawDataLabels=function(){var b=this,a=b.pointArrayMap,d,c,e;if(b.options.dataLabels.enabled){var f=b.points.length;a.concat([!1]).forEach(function(g,
q){for(e=f;e--;)c=b.points[e],g?(c.y=c[g],c.pivotLine=g,c.plotY=c["plot"+g],d=c["dataLabel"+g],q&&(c["dataLabel"+a[q-1]]=c.dataLabel),c.dataLabels||(c.dataLabels=[]),c.dataLabels[0]=c.dataLabel=d=d&&d.element?d:null):c["dataLabel"+a[q-1]]=c.dataLabel;k.seriesTypes.sma.prototype.drawDataLabels.apply(b,arguments)})}};c.prototype.getValues=function(b,a){var c=a.period,d=b.xData,g=(b=b.yData)?b.length:0;a=this[a.algorithm+"Placement"];var e=[],f=[],k=[],l;if(!(d.length<c)&&t(b[0])&&4===b[0].length){for(l=
c+1;l<=g+c;l+=c){var m=d.slice(l-c-1,l);var h=b.slice(l-c-1,l);var n=m.length;var r=m[n-1];h=this.getPivotAndHLC(h);h=a(h);h=e.push([r].concat(h));f.push(r);k.push(e[h-1].slice(1))}this.endPoint=m[0]+(r-m[0])/n*c;return{values:e,xData:f,yData:k}}};c.prototype.getPivotAndHLC=function(b){var a=-Infinity,c=Infinity,d=b[b.length-1][3];b.forEach(function(b){a=Math.max(a,b[1]);c=Math.min(c,b[2])});return[(a+c+d)/3,a,c,d]};c.prototype.standardPlacement=function(b){var a=b[1]-b[2];return[null,null,b[0]+a,
2*b[0]-b[2],b[0],2*b[0]-b[1],b[0]-a,null,null]};c.prototype.camarillaPlacement=function(b){var a=b[1]-b[2];return[b[3]+1.5*a,b[3]+1.25*a,b[3]+1.1666*a,b[3]+1.0833*a,b[0],b[3]-1.0833*a,b[3]-1.1666*a,b[3]-1.25*a,b[3]-1.5*a]};c.prototype.fibonacciPlacement=function(a){var b=a[1]-a[2];return[null,a[0]+b,a[0]+.618*b,a[0]+.382*b,a[0],a[0]-.382*b,a[0]-.618*b,a[0]-b,null]};c.defaultOptions=e(d.defaultOptions,{params:{period:28,algorithm:"standard"},marker:{enabled:!1},enableMouseTracking:!1,dataLabels:{enabled:!0,
format:"{point.pivotLine}"},dataGrouping:{approximation:"averages"}});return c}(d);h(c.prototype,{nameBase:"Pivot Points",pointArrayMap:"R4 R3 R2 R1 P S1 S2 S3 S4".split(" "),pointValKey:"P",pointClass:a});k.registerSeriesType("pivotpoints",c);"";return c});h(a,"masters/indicators/pivot-points.src.js",[],function(){})});
//# sourceMappingURL=pivot-points.js.map