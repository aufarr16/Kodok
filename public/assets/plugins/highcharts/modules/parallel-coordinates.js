/*
 Highcharts JS v9.0.1 (2021-03-26)

 Support for parallel coordinates in Highcharts

 (c) 2010-2021 Pawel Fus

 License: www.highcharts.com/license
*/
(function(b){"object"===typeof module&&module.exports?(b["default"]=b,module.exports=b):"function"===typeof define&&define.amd?define("highcharts/modules/parallel-coordinates",["highcharts"],function(g){b(g);b.Highcharts=g;return b}):b("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(b){function g(b,n,g,l){b.hasOwnProperty(n)||(b[n]=l.apply(null,g))}b=b?b._modules:{};g(b,"Extensions/ParallelCoordinates.js",[b["Core/Axis/Axis.js"],b["Core/Chart/Chart.js"],b["Core/Globals.js"],b["Core/Series/Series.js"],
b["Core/Utilities.js"]],function(b,g,w,l,d){function n(a){var c=this.series&&this.series.chart,b=a.apply(this,Array.prototype.slice.call(arguments,1)),h;if(c&&c.hasParallelCoordinates&&!p(b.formattedValue)){var e=c.yAxis[this.x];var f=e.options;c=(h=r(f.tooltipValueFormat,f.labels.format))?x(h,t(this,{value:this.y}),c):e.dateTime?c.time.dateFormat(c.time.resolveDTLFormat(f.dateTimeLabelFormats[e.tickPositions.info.unitName]).main,this.y):f.categories?f.categories[this.y]:this.y;b.formattedValue=b.point.formattedValue=
c}return b}var k=d.addEvent,y=d.arrayMax,z=d.arrayMin,p=d.defined,A=d.erase,t=d.extend,x=d.format,m=d.merge,r=d.pick,B=d.setOptions,u=d.splat,C=d.wrap;d=g.prototype;var v={lineWidth:0,tickLength:0,opposite:!0,type:"category"};B({chart:{parallelCoordinates:!1,parallelAxes:{lineWidth:1,title:{text:"",reserveSpace:!1},labels:{x:0,y:4,align:"center",reserveSpace:!1},offset:0}}});k(g,"init",function(a){a=a.args[0];var c=u(a.yAxis||{}),b=[],h=c.length;if(this.hasParallelCoordinates=a.chart&&a.chart.parallelCoordinates){for(this.setParallelInfo(a);h<=
this.parallelInfo.counter;h++)b.push({});a.legend||(a.legend={});"undefined"===typeof a.legend.enabled&&(a.legend.enabled=!1);m(!0,a,{boost:{seriesThreshold:Number.MAX_VALUE},plotOptions:{series:{boostThreshold:Number.MAX_VALUE}}});a.yAxis=c.concat(b);a.xAxis=m(v,u(a.xAxis||{})[0])}});k(g,"update",function(a){a=a.options;a.chart&&(p(a.chart.parallelCoordinates)&&(this.hasParallelCoordinates=a.chart.parallelCoordinates),this.options.chart.parallelAxes=m(this.options.chart.parallelAxes,a.chart.parallelAxes));
this.hasParallelCoordinates&&(a.series&&this.setParallelInfo(a),this.yAxis.forEach(function(a){a.update({},!1)}))});t(d,{setParallelInfo:function(a){var c=this;a=a.series;c.parallelInfo={counter:0};a.forEach(function(a){a.data&&(c.parallelInfo.counter=Math.max(c.parallelInfo.counter,a.data.length-1))})}});k(l,"bindAxes",function(a){if(this.chart.hasParallelCoordinates){var c=this;this.chart.axes.forEach(function(a){c.insert(a.series);a.isDirty=!0});c.xAxis=this.chart.xAxis[0];c.yAxis=this.chart.yAxis[0];
a.preventDefault()}});k(l,"afterTranslate",function(){var a=this.chart,c=this.points,b=c&&c.length,h=Number.MAX_VALUE,e;if(this.chart.hasParallelCoordinates){for(e=0;e<b;e++){var f=c[e];if(p(f.y)){f.plotX=a.polar?a.yAxis[e].angleRad||0:a.inverted?a.plotHeight-a.yAxis[e].top+a.plotTop:a.yAxis[e].left-a.plotLeft;f.clientX=f.plotX;f.plotY=a.yAxis[e].translate(f.y,!1,!0,null,!0);"undefined"!==typeof d&&(h=Math.min(h,Math.abs(f.plotX-d)));var d=f.plotX;f.isInside=a.isInsidePlot(f.plotX,f.plotY,a.inverted)}else f.isNull=
!0}this.closestPointRangePx=h}},{order:1});k(l,"destroy",function(){this.chart.hasParallelCoordinates&&(this.chart.axes||[]).forEach(function(a){a&&a.series&&(A(a.series,this),a.isDirty=a.forceRedraw=!0)},this)});["line","spline"].forEach(function(a){C(w.seriesTypes[a].prototype.pointClass.prototype,"getLabelConfig",n)});var D=function(){function a(a){this.axis=a}a.prototype.setPosition=function(a,b){var c=this.axis,e=c.chart,f=((this.position||0)+.5)/(e.parallelInfo.counter+1);e.polar?b.angle=360*
f:(b[a[0]]=100*f+"%",c[a[1]]=b[a[1]]=0,c[a[2]]=b[a[2]]=null,c[a[3]]=b[a[3]]=null)};return a}(),q;(function(a){function b(a){var b=this.chart,c=this.parallelCoordinates,e=["left","width","height","top"];if(b.hasParallelCoordinates)if(b.inverted&&(e=e.reverse()),this.isXAxis)this.options=m(this.options,v,a.userOptions);else{var d=b.yAxis.indexOf(this);this.options=m(this.options,this.chart.options.chart.parallelAxes,a.userOptions);c.position=r(c.position,0<=d?d:b.yAxis.length);c.setPosition(e,this.options)}}
function d(a){var b=this.chart,c=this.parallelCoordinates;if(c&&b&&b.hasParallelCoordinates&&!this.isXAxis){var e=c.position,d=[];this.series.forEach(function(a){a.visible&&p(a.yData[e])&&d.push(a.yData[e])});this.dataMin=z(d);this.dataMax=y(d);a.preventDefault()}}function g(){this.parallelCoordinates||(this.parallelCoordinates=new D(this))}a.compose=function(a){a.keepProps.push("parallel");k(a,"init",g);k(a,"afterSetOptions",b);k(a,"getSeriesExtremes",d)}})(q||(q={}));q.compose(b);return q});g(b,
"masters/modules/parallel-coordinates.src.js",[],function(){})});
//# sourceMappingURL=parallel-coordinates.js.map