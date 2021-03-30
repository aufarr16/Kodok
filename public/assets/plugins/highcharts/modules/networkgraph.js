/*
 Highcharts JS v9.0.1 (2021-03-26)

 Force directed graph module

 (c) 2010-2021 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(f){"object"===typeof module&&module.exports?(f["default"]=f,module.exports=f):"function"===typeof define&&define.amd?define("highcharts/modules/networkgraph",["highcharts"],function(h){f(h);f.Highcharts=h;return f}):f("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(f){function h(f,b,c,d){f.hasOwnProperty(b)||(f[b]=d.apply(null,c))}f=f?f._modules:{};h(f,"Mixins/Nodes.js",[f["Core/Globals.js"],f["Core/Series/Point.js"],f["Core/Series/Series.js"],f["Core/Utilities.js"]],function(f,
b,c,d){var e=d.defined,g=d.extend,q=d.find,k=d.pick;return f.NodesMixin={createNode:function(e){function b(a,e){return q(a,function(a){return a.id===e})}var a=b(this.nodes,e),d=this.pointClass;if(!a){var c=this.options.nodes&&b(this.options.nodes,e);a=(new d).init(this,g({className:"highcharts-node",isNode:!0,id:e,y:1},c));a.linksTo=[];a.linksFrom=[];a.formatPrefix="node";a.name=a.name||a.options.id||"";a.mass=k(a.options.mass,a.options.marker&&a.options.marker.radius,this.options.marker&&this.options.marker.radius,
4);a.getSum=function(){var e=0,b=0;a.linksTo.forEach(function(a){e+=a.weight});a.linksFrom.forEach(function(a){b+=a.weight});return Math.max(e,b)};a.offset=function(e,b){for(var d=0,c=0;c<a[b].length;c++){if(a[b][c]===e)return d;d+=a[b][c].weight}};a.hasShape=function(){var e=0;a.linksTo.forEach(function(a){a.outgoing&&e++});return!a.linksTo.length||e!==a.linksTo.length};this.nodes.push(a)}return a},generatePoints:function(){var b=this.chart,d={};c.prototype.generatePoints.call(this);this.nodes||
(this.nodes=[]);this.colorCounter=0;this.nodes.forEach(function(a){a.linksFrom.length=0;a.linksTo.length=0;a.level=a.options.level});this.points.forEach(function(a){e(a.from)&&(d[a.from]||(d[a.from]=this.createNode(a.from)),d[a.from].linksFrom.push(a),a.fromNode=d[a.from],b.styledMode?a.colorIndex=k(a.options.colorIndex,d[a.from].colorIndex):a.color=a.options.color||d[a.from].color);e(a.to)&&(d[a.to]||(d[a.to]=this.createNode(a.to)),d[a.to].linksTo.push(a),a.toNode=d[a.to]);a.name=a.name||a.id},this);
this.nodeLookup=d},setData:function(){this.nodes&&(this.nodes.forEach(function(e){e.destroy()}),this.nodes.length=0);c.prototype.setData.apply(this,arguments)},destroy:function(){this.data=[].concat(this.points||[],this.nodes);return c.prototype.destroy.apply(this,arguments)},setNodeState:function(e){var d=arguments,a=this.isNode?this.linksTo.concat(this.linksFrom):[this.fromNode,this.toNode];"select"!==e&&a.forEach(function(a){a&&a.series&&(b.prototype.setState.apply(a,d),a.isNode||(a.fromNode.graphic&&
b.prototype.setState.apply(a.fromNode,d),a.toNode&&a.toNode.graphic&&b.prototype.setState.apply(a.toNode,d)))});b.prototype.setState.apply(this,d)}}});h(f,"Series/Networkgraph/Integrations.js",[f["Core/Globals.js"]],function(f){f.networkgraphIntegrations={verlet:{attractiveForceFunction:function(b,c){return(c-b)/b},repulsiveForceFunction:function(b,c){return(c-b)/b*(c>b?1:0)},barycenter:function(){var b=this.options.gravitationalConstant,c=this.barycenter.xFactor,d=this.barycenter.yFactor;c=(c-(this.box.left+
this.box.width)/2)*b;d=(d-(this.box.top+this.box.height)/2)*b;this.nodes.forEach(function(e){e.fixedPosition||(e.plotX-=c/e.mass/e.degree,e.plotY-=d/e.mass/e.degree)})},repulsive:function(b,c,d){c=c*this.diffTemperature/b.mass/b.degree;b.fixedPosition||(b.plotX+=d.x*c,b.plotY+=d.y*c)},attractive:function(b,c,d){var e=b.getMass(),g=-d.x*c*this.diffTemperature;c=-d.y*c*this.diffTemperature;b.fromNode.fixedPosition||(b.fromNode.plotX-=g*e.fromNode/b.fromNode.degree,b.fromNode.plotY-=c*e.fromNode/b.fromNode.degree);
b.toNode.fixedPosition||(b.toNode.plotX+=g*e.toNode/b.toNode.degree,b.toNode.plotY+=c*e.toNode/b.toNode.degree)},integrate:function(b,c){var d=-b.options.friction,e=b.options.maxSpeed,g=(c.plotX+c.dispX-c.prevX)*d;d*=c.plotY+c.dispY-c.prevY;var f=Math.abs,k=f(g)/(g||1);f=f(d)/(d||1);g=k*Math.min(e,Math.abs(g));d=f*Math.min(e,Math.abs(d));c.prevX=c.plotX+c.dispX;c.prevY=c.plotY+c.dispY;c.plotX+=g;c.plotY+=d;c.temperature=b.vectorLength({x:g,y:d})},getK:function(b){return Math.pow(b.box.width*b.box.height/
b.nodes.length,.5)}},euler:{attractiveForceFunction:function(b,c){return b*b/c},repulsiveForceFunction:function(b,c){return c*c/b},barycenter:function(){var b=this.options.gravitationalConstant,c=this.barycenter.xFactor,d=this.barycenter.yFactor;this.nodes.forEach(function(e){if(!e.fixedPosition){var g=e.getDegree();g*=1+g/2;e.dispX+=(c-e.plotX)*b*g/e.degree;e.dispY+=(d-e.plotY)*b*g/e.degree}})},repulsive:function(b,c,d,e){b.dispX+=d.x/e*c/b.degree;b.dispY+=d.y/e*c/b.degree},attractive:function(b,
c,d,e){var g=b.getMass(),f=d.x/e*c;c*=d.y/e;b.fromNode.fixedPosition||(b.fromNode.dispX-=f*g.fromNode/b.fromNode.degree,b.fromNode.dispY-=c*g.fromNode/b.fromNode.degree);b.toNode.fixedPosition||(b.toNode.dispX+=f*g.toNode/b.toNode.degree,b.toNode.dispY+=c*g.toNode/b.toNode.degree)},integrate:function(b,c){c.dispX+=c.dispX*b.options.friction;c.dispY+=c.dispY*b.options.friction;var d=c.temperature=b.vectorLength({x:c.dispX,y:c.dispY});0!==d&&(c.plotX+=c.dispX/d*Math.min(Math.abs(c.dispX),b.temperature),
c.plotY+=c.dispY/d*Math.min(Math.abs(c.dispY),b.temperature))},getK:function(b){return Math.pow(b.box.width*b.box.height/b.nodes.length,.3)}}}});h(f,"Series/Networkgraph/QuadTree.js",[f["Core/Globals.js"],f["Core/Utilities.js"]],function(f,b){b=b.extend;var c=f.QuadTreeNode=function(d){this.box=d;this.boxSize=Math.min(d.width,d.height);this.nodes=[];this.body=this.isInternal=!1;this.isEmpty=!0};b(c.prototype,{insert:function(d,e){this.isInternal?this.nodes[this.getBoxPosition(d)].insert(d,e-1):(this.isEmpty=
!1,this.body?e?(this.isInternal=!0,this.divideBox(),!0!==this.body&&(this.nodes[this.getBoxPosition(this.body)].insert(this.body,e-1),this.body=!0),this.nodes[this.getBoxPosition(d)].insert(d,e-1)):(e=new c({top:d.plotX,left:d.plotY,width:.1,height:.1}),e.body=d,e.isInternal=!1,this.nodes.push(e)):(this.isInternal=!1,this.body=d))},updateMassAndCenter:function(){var d=0,e=0,b=0;this.isInternal?(this.nodes.forEach(function(c){c.isEmpty||(d+=c.mass,e+=c.plotX*c.mass,b+=c.plotY*c.mass)}),e/=d,b/=d):
this.body&&(d=this.body.mass,e=this.body.plotX,b=this.body.plotY);this.mass=d;this.plotX=e;this.plotY=b},divideBox:function(){var d=this.box.width/2,e=this.box.height/2;this.nodes[0]=new c({left:this.box.left,top:this.box.top,width:d,height:e});this.nodes[1]=new c({left:this.box.left+d,top:this.box.top,width:d,height:e});this.nodes[2]=new c({left:this.box.left+d,top:this.box.top+e,width:d,height:e});this.nodes[3]=new c({left:this.box.left,top:this.box.top+e,width:d,height:e})},getBoxPosition:function(d){var e=
d.plotY<this.box.top+this.box.height/2;return d.plotX<this.box.left+this.box.width/2?e?0:3:e?1:2}});f=f.QuadTree=function(d,e,b,f){this.box={left:d,top:e,width:b,height:f};this.maxDepth=25;this.root=new c(this.box,"0");this.root.isInternal=!0;this.root.isRoot=!0;this.root.divideBox()};b(f.prototype,{insertNodes:function(b){b.forEach(function(b){this.root.insert(b,this.maxDepth)},this)},visitNodeRecursive:function(b,e,c){var d;b||(b=this.root);b===this.root&&e&&(d=e(b));!1!==d&&(b.nodes.forEach(function(b){if(b.isInternal){e&&
(d=e(b));if(!1===d)return;this.visitNodeRecursive(b,e,c)}else b.body&&e&&e(b.body);c&&c(b)},this),b===this.root&&c&&c(b))},calculateMassAndCenter:function(){this.visitNodeRecursive(null,null,function(b){b.updateMassAndCenter()})}})});h(f,"Series/Networkgraph/Layouts.js",[f["Core/Chart/Chart.js"],f["Core/Animation/AnimationUtilities.js"],f["Core/Globals.js"],f["Core/Utilities.js"]],function(f,b,c,d){var e=b.setAnimation;b=d.addEvent;var g=d.clamp,q=d.defined,k=d.extend,p=d.isFunction,m=d.pick;c.layouts=
{"reingold-fruchterman":function(){}};k(c.layouts["reingold-fruchterman"].prototype,{init:function(a){this.options=a;this.nodes=[];this.links=[];this.series=[];this.box={x:0,y:0,width:0,height:0};this.setInitialRendering(!0);this.integration=c.networkgraphIntegrations[a.integration];this.enableSimulation=a.enableSimulation;this.attractiveForce=m(a.attractiveForce,this.integration.attractiveForceFunction);this.repulsiveForce=m(a.repulsiveForce,this.integration.repulsiveForceFunction);this.approximation=
a.approximation},updateSimulation:function(a){this.enableSimulation=m(a,this.options.enableSimulation)},start:function(){var a=this.series,b=this.options;this.currentStep=0;this.forces=a[0]&&a[0].forces||[];this.chart=a[0]&&a[0].chart;this.initialRendering&&(this.initPositions(),a.forEach(function(a){a.finishedAnimating=!0;a.render()}));this.setK();this.resetSimulation(b);this.enableSimulation&&this.step()},step:function(){var a=this,b=this.series;a.currentStep++;"barnes-hut"===a.approximation&&(a.createQuadTree(),
a.quadTree.calculateMassAndCenter());a.forces.forEach(function(b){a[b+"Forces"](a.temperature)});a.applyLimits(a.temperature);a.temperature=a.coolDown(a.startTemperature,a.diffTemperature,a.currentStep);a.prevSystemTemperature=a.systemTemperature;a.systemTemperature=a.getSystemTemperature();a.enableSimulation&&(b.forEach(function(a){a.chart&&a.render()}),a.maxIterations--&&isFinite(a.temperature)&&!a.isStable()?(a.simulation&&c.win.cancelAnimationFrame(a.simulation),a.simulation=c.win.requestAnimationFrame(function(){a.step()})):
a.simulation=!1)},stop:function(){this.simulation&&c.win.cancelAnimationFrame(this.simulation)},setArea:function(a,b,e,d){this.box={left:a,top:b,width:e,height:d}},setK:function(){this.k=this.options.linkLength||this.integration.getK(this)},addElementsToCollection:function(a,b){a.forEach(function(a){-1===b.indexOf(a)&&b.push(a)})},removeElementFromCollection:function(a,b){a=b.indexOf(a);-1!==a&&b.splice(a,1)},clear:function(){this.nodes.length=0;this.links.length=0;this.series.length=0;this.resetSimulation()},
resetSimulation:function(){this.forcedStop=!1;this.systemTemperature=0;this.setMaxIterations();this.setTemperature();this.setDiffTemperature()},restartSimulation:function(){this.simulation?this.resetSimulation():(this.setInitialRendering(!1),this.enableSimulation?this.start():this.setMaxIterations(1),this.chart&&this.chart.redraw(),this.setInitialRendering(!0))},setMaxIterations:function(a){this.maxIterations=m(a,this.options.maxIterations)},setTemperature:function(){this.temperature=this.startTemperature=
Math.sqrt(this.nodes.length)},setDiffTemperature:function(){this.diffTemperature=this.startTemperature/(this.options.maxIterations+1)},setInitialRendering:function(a){this.initialRendering=a},createQuadTree:function(){this.quadTree=new c.QuadTree(this.box.left,this.box.top,this.box.width,this.box.height);this.quadTree.insertNodes(this.nodes)},initPositions:function(){var a=this.options.initialPositions;p(a)?(a.call(this),this.nodes.forEach(function(a){q(a.prevX)||(a.prevX=a.plotX);q(a.prevY)||(a.prevY=
a.plotY);a.dispX=0;a.dispY=0})):"circle"===a?this.setCircularPositions():this.setRandomPositions()},setCircularPositions:function(){function a(b){b.linksFrom.forEach(function(b){u[b.toNode.id]||(u[b.toNode.id]=!0,l.push(b.toNode),a(b.toNode))})}var b=this.box,e=this.nodes,d=2*Math.PI/(e.length+1),c=e.filter(function(a){return 0===a.linksTo.length}),l=[],u={},v=this.options.initialPositionRadius;c.forEach(function(b){l.push(b);a(b)});l.length?e.forEach(function(a){-1===l.indexOf(a)&&l.push(a)}):l=
e;l.forEach(function(a,e){a.plotX=a.prevX=m(a.plotX,b.width/2+v*Math.cos(e*d));a.plotY=a.prevY=m(a.plotY,b.height/2+v*Math.sin(e*d));a.dispX=0;a.dispY=0})},setRandomPositions:function(){function a(a){a=a*a/Math.PI;return a-=Math.floor(a)}var b=this.box,e=this.nodes,d=e.length+1;e.forEach(function(e,c){e.plotX=e.prevX=m(e.plotX,b.width*a(c));e.plotY=e.prevY=m(e.plotY,b.height*a(d+c));e.dispX=0;e.dispY=0})},force:function(a){this.integration[a].apply(this,Array.prototype.slice.call(arguments,1))},barycenterForces:function(){this.getBarycenter();
this.force("barycenter")},getBarycenter:function(){var a=0,b=0,e=0;this.nodes.forEach(function(d){b+=d.plotX*d.mass;e+=d.plotY*d.mass;a+=d.mass});return this.barycenter={x:b,y:e,xFactor:b/a,yFactor:e/a}},barnesHutApproximation:function(a,b){var e=this.getDistXY(a,b),d=this.vectorLength(e);if(a!==b&&0!==d)if(b.isInternal)if(b.boxSize/d<this.options.theta&&0!==d){var c=this.repulsiveForce(d,this.k);this.force("repulsive",a,c*b.mass,e,d);var l=!1}else l=!0;else c=this.repulsiveForce(d,this.k),this.force("repulsive",
a,c*b.mass,e,d);return l},repulsiveForces:function(){var a=this;"barnes-hut"===a.approximation?a.nodes.forEach(function(b){a.quadTree.visitNodeRecursive(null,function(e){return a.barnesHutApproximation(b,e)})}):a.nodes.forEach(function(b){a.nodes.forEach(function(e){if(b!==e&&!b.fixedPosition){var d=a.getDistXY(b,e);var c=a.vectorLength(d);if(0!==c){var l=a.repulsiveForce(c,a.k);a.force("repulsive",b,l*e.mass,d,c)}}})})},attractiveForces:function(){var a=this,b,e,d;a.links.forEach(function(c){c.fromNode&&
c.toNode&&(b=a.getDistXY(c.fromNode,c.toNode),e=a.vectorLength(b),0!==e&&(d=a.attractiveForce(e,a.k),a.force("attractive",c,d,b,e)))})},applyLimits:function(){var a=this;a.nodes.forEach(function(b){b.fixedPosition||(a.integration.integrate(a,b),a.applyLimitBox(b,a.box),b.dispX=0,b.dispY=0)})},applyLimitBox:function(a,b){var e=a.radius;a.plotX=g(a.plotX,b.left+e,b.width-e);a.plotY=g(a.plotY,b.top+e,b.height-e)},coolDown:function(a,b,e){return a-b*e},isStable:function(){return.00001>Math.abs(this.systemTemperature-
this.prevSystemTemperature)||0>=this.temperature},getSystemTemperature:function(){return this.nodes.reduce(function(a,b){return a+b.temperature},0)},vectorLength:function(a){return Math.sqrt(a.x*a.x+a.y*a.y)},getDistR:function(a,b){a=this.getDistXY(a,b);return this.vectorLength(a)},getDistXY:function(a,b){var e=a.plotX-b.plotX;a=a.plotY-b.plotY;return{x:e,y:a,absX:Math.abs(e),absY:Math.abs(a)}}});b(f,"predraw",function(){this.graphLayoutsLookup&&this.graphLayoutsLookup.forEach(function(a){a.stop()})});
b(f,"render",function(){function a(a){a.maxIterations--&&isFinite(a.temperature)&&!a.isStable()&&!a.enableSimulation&&(a.beforeStep&&a.beforeStep(),a.step(),d=!1,b=!0)}var b=!1;if(this.graphLayoutsLookup){e(!1,this);for(this.graphLayoutsLookup.forEach(function(a){a.start()});!d;){var d=!0;this.graphLayoutsLookup.forEach(a)}b&&this.series.forEach(function(a){a&&a.layout&&a.render()})}});b(f,"beforePrint",function(){this.graphLayoutsLookup&&(this.graphLayoutsLookup.forEach(function(a){a.updateSimulation(!1)}),
this.redraw())});b(f,"afterPrint",function(){this.graphLayoutsLookup&&this.graphLayoutsLookup.forEach(function(a){a.updateSimulation()});this.redraw()})});h(f,"Series/Networkgraph/DraggableNodes.js",[f["Core/Chart/Chart.js"],f["Core/Globals.js"],f["Core/Utilities.js"]],function(f,b,c){var d=c.addEvent;b.dragNodesMixin={onMouseDown:function(b,d){d=this.chart.pointer.normalize(d);b.fixedPosition={chartX:d.chartX,chartY:d.chartY,plotX:b.plotX,plotY:b.plotY};b.inDragMode=!0},onMouseMove:function(b,d){if(b.fixedPosition&&
b.inDragMode){var e=this.chart;d=e.pointer.normalize(d);var c=b.fixedPosition.chartX-d.chartX,f=b.fixedPosition.chartY-d.chartY;d=e.graphLayoutsLookup;if(5<Math.abs(c)||5<Math.abs(f))c=b.fixedPosition.plotX-c,f=b.fixedPosition.plotY-f,e.isInsidePlot(c,f)&&(b.plotX=c,b.plotY=f,b.hasDragged=!0,this.redrawHalo(b),d.forEach(function(b){b.restartSimulation()}))}},onMouseUp:function(b,d){b.fixedPosition&&(b.hasDragged&&(this.layout.enableSimulation?this.layout.start():this.chart.redraw()),b.inDragMode=
b.hasDragged=!1,this.options.fixedDraggable||delete b.fixedPosition)},redrawHalo:function(b){b&&this.halo&&this.halo.attr({d:b.haloPath(this.options.states.hover.halo.size)})}};d(f,"load",function(){var b=this,c,f,k;b.container&&(c=d(b.container,"mousedown",function(e){var c=b.hoverPoint;c&&c.series&&c.series.hasDraggableNodes&&c.series.options.draggable&&(c.series.onMouseDown(c,e),f=d(b.container,"mousemove",function(a){return c&&c.series&&c.series.onMouseMove(c,a)}),k=d(b.container.ownerDocument,
"mouseup",function(a){f();k();return c&&c.series&&c.series.onMouseUp(c,a)}))}));d(b,"destroy",function(){c()})})});h(f,"Series/Networkgraph/Networkgraph.js",[f["Core/Globals.js"],f["Mixins/Nodes.js"],f["Core/Series/Point.js"],f["Core/Series/Series.js"],f["Core/Series/SeriesRegistry.js"],f["Core/Utilities.js"]],function(f,b,c,d,e,g){var h=this&&this.__extends||function(){var a=function(b,d){a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(a,b){a.__proto__=b}||function(a,b){for(var d in b)b.hasOwnProperty(d)&&
(a[d]=b[d])};return a(b,d)};return function(b,d){function c(){this.constructor=b}a(b,d);b.prototype=null===d?Object.create(d):(c.prototype=d.prototype,new c)}}(),k=e.seriesTypes,p=g.addEvent,m=g.css,a=g.defined,t=g.extend,w=g.merge,r=g.pick,n=f.dragNodesMixin;"";g=function(a){function b(){var b=null!==a&&a.apply(this,arguments)||this;b.data=void 0;b.nodes=void 0;b.options=void 0;b.points=void 0;return b}h(b,a);b.defaultOptions=w(d.defaultOptions,{stickyTracking:!1,inactiveOtherPoints:!0,marker:{enabled:!0,
states:{inactive:{opacity:.3,animation:{duration:50}}}},states:{inactive:{linkOpacity:.3,animation:{duration:50}}},dataLabels:{formatter:function(){return this.key},linkFormatter:function(){return this.point.fromNode.name+"<br>"+this.point.toNode.name},linkTextPath:{enabled:!0},textPath:{enabled:!1},style:{transition:"opacity 2000ms"}},link:{color:"rgba(100, 100, 100, 0.5)",width:1},draggable:!0,layoutAlgorithm:{initialPositions:"circle",initialPositionRadius:1,enableSimulation:!1,theta:.5,maxSpeed:10,
approximation:"none",type:"reingold-fruchterman",integration:"euler",maxIterations:1E3,gravitationalConstant:.0625,friction:-.981},showInLegend:!1});return b}(d);t(g.prototype,{forces:["barycenter","repulsive","attractive"],hasDraggableNodes:!0,drawGraph:void 0,isCartesian:!1,requireSorting:!1,directTouch:!0,noSharedTooltip:!0,pointArrayMap:["from","to"],trackerGroups:["group","markerGroup","dataLabelsGroup"],drawTracker:k.column.prototype.drawTracker,animate:void 0,buildKDTree:f.noop,createNode:b.createNode,
destroy:function(){this.layout&&this.layout.removeElementFromCollection(this,this.layout.series);b.destroy.call(this)},init:function(){var a=this;d.prototype.init.apply(this,arguments);p(this,"updatedData",function(){a.layout&&a.layout.stop()});p(this,"afterUpdate",function(){a.nodes.forEach(function(a){a&&a.series&&a.resolveColor()})});return this},generatePoints:function(){var a;b.generatePoints.apply(this,arguments);this.options.nodes&&this.options.nodes.forEach(function(a){this.nodeLookup[a.id]||
(this.nodeLookup[a.id]=this.createNode(a.id))},this);for(a=this.nodes.length-1;0<=a;a--){var d=this.nodes[a];d.degree=d.getDegree();d.radius=r(d.marker&&d.marker.radius,this.options.marker&&this.options.marker.radius,0);this.nodeLookup[d.id]||d.remove()}this.data.forEach(function(a){a.formatPrefix="link"});this.indexateNodes()},getPointsCollection:function(){return this.nodes||[]},indexateNodes:function(){this.nodes.forEach(function(a,b){a.index=b})},markerAttribs:function(b,c){c=d.prototype.markerAttribs.call(this,
b,c);a(b.plotY)||(c.y=0);c.x=(b.plotX||0)-(c.width||0)/2;return c},translate:function(){this.processedXData||this.processData();this.generatePoints();this.deferLayout();this.nodes.forEach(function(a){a.isInside=!0;a.linksFrom.forEach(function(a){a.shapeType="path";a.y=1})})},deferLayout:function(){var b=this.options.layoutAlgorithm,d=this.chart.graphLayoutsStorage,c=this.chart.graphLayoutsLookup,e=this.chart.options.chart;if(this.visible){d||(this.chart.graphLayoutsStorage=d={},this.chart.graphLayoutsLookup=
c=[]);var g=d[b.type];g||(b.enableSimulation=a(e.forExport)?!e.forExport:b.enableSimulation,d[b.type]=g=new f.layouts[b.type],g.init(b),c.splice(g.index,0,g));this.layout=g;g.setArea(0,0,this.chart.plotWidth,this.chart.plotHeight);g.addElementsToCollection([this],g.series);g.addElementsToCollection(this.nodes,g.nodes);g.addElementsToCollection(this.points,g.links)}},render:function(){var a=this.points,b=this.chart.hoverPoint,d=[];this.points=this.nodes;k.line.prototype.render.call(this);this.points=
a;a.forEach(function(a){a.fromNode&&a.toNode&&(a.renderLink(),a.redrawLink())});b&&b.series===this&&this.redrawHalo(b);this.chart.hasRendered&&!this.options.dataLabels.allowOverlap&&(this.nodes.concat(this.points).forEach(function(a){a.dataLabel&&d.push(a.dataLabel)}),this.chart.hideOverlappingLabels(d))},drawDataLabels:function(){var a=this.options.dataLabels.textPath;d.prototype.drawDataLabels.apply(this,arguments);this.points=this.data;this.options.dataLabels.textPath=this.options.dataLabels.linkTextPath;
d.prototype.drawDataLabels.apply(this,arguments);this.points=this.nodes;this.options.dataLabels.textPath=a},pointAttribs:function(a,b){var c=b||a&&a.state||"normal";b=d.prototype.pointAttribs.call(this,a,c);c=this.options.states[c];a&&!a.isNode&&(b=a.getLinkAttributes(),c&&(b={stroke:c.linkColor||b.stroke,dashstyle:c.linkDashStyle||b.dashstyle,opacity:r(c.linkOpacity,b.opacity),"stroke-width":c.linkColor||b["stroke-width"]}));return b},redrawHalo:n.redrawHalo,onMouseDown:n.onMouseDown,onMouseMove:n.onMouseMove,
onMouseUp:n.onMouseUp,setState:function(a,b){b?(this.points=this.nodes.concat(this.data),d.prototype.setState.apply(this,arguments),this.points=this.data):d.prototype.setState.apply(this,arguments);this.layout.simulation||a||this.render()}});n=function(a){function b(){var b=null!==a&&a.apply(this,arguments)||this;b.degree=void 0;b.linksFrom=void 0;b.linksTo=void 0;b.options=void 0;b.radius=void 0;b.series=void 0;b.toNode=void 0;return b}h(b,a);return b}(d.prototype.pointClass);t(n.prototype,{setState:b.setNodeState,
init:function(){c.prototype.init.apply(this,arguments);this.series.options.draggable&&!this.series.chart.styledMode&&(p(this,"mouseOver",function(){m(this.series.chart.container,{cursor:"move"})}),p(this,"mouseOut",function(){m(this.series.chart.container,{cursor:"default"})}));return this},getDegree:function(){var a=this.isNode?this.linksFrom.length+this.linksTo.length:0;return 0===a?1:a},getLinkAttributes:function(){var a=this.series.options.link,b=this.options;return{"stroke-width":r(b.width,a.width),
stroke:b.color||a.color,dashstyle:b.dashStyle||a.dashStyle,opacity:r(b.opacity,a.opacity,1)}},renderLink:function(){if(!this.graphic&&(this.graphic=this.series.chart.renderer.path(this.getLinkPath()).addClass(this.getClassName(),!0).add(this.series.group),!this.series.chart.styledMode)){var a=this.series.pointAttribs(this);this.graphic.attr(a);(this.dataLabels||[]).forEach(function(b){b&&b.attr({opacity:a.opacity})})}},redrawLink:function(){var a=this.getLinkPath();if(this.graphic){this.shapeArgs=
{d:a};if(!this.series.chart.styledMode){var b=this.series.pointAttribs(this);this.graphic.attr(b);(this.dataLabels||[]).forEach(function(a){a&&a.attr({opacity:b.opacity})})}this.graphic.animate(this.shapeArgs);var d=a[0];a=a[1];"M"===d[0]&&"L"===a[0]&&(this.plotX=(d[1]+a[1])/2,this.plotY=(d[2]+a[2])/2)}},getMass:function(){var a=this.fromNode.mass,b=this.toNode.mass,d=a+b;return{fromNode:1-a/d,toNode:1-b/d}},getLinkPath:function(){var a=this.fromNode,b=this.toNode;a.plotX>b.plotX&&(a=this.toNode,
b=this.fromNode);return[["M",a.plotX||0,a.plotY||0],["L",b.plotX||0,b.plotY||0]]},isValid:function(){return!this.isNode||a(this.id)},remove:function(a,b){var c=this.series,e=c.options.nodes||[],f,g=e.length;if(this.isNode){c.points=[];[].concat(this.linksFrom).concat(this.linksTo).forEach(function(a){f=a.fromNode.linksFrom.indexOf(a);-1<f&&a.fromNode.linksFrom.splice(f,1);f=a.toNode.linksTo.indexOf(a);-1<f&&a.toNode.linksTo.splice(f,1);d.prototype.removePoint.call(c,c.data.indexOf(a),!1,!1)});c.points=
c.data.slice();for(c.nodes.splice(c.nodes.indexOf(this),1);g--;)if(e[g].id===this.options.id){c.options.nodes.splice(g,1);break}this&&this.destroy();c.isDirty=!0;c.isDirtyData=!0;a&&c.chart.redraw(a)}else c.removePoint(c.data.indexOf(this),a,b)},destroy:function(){this.isNode&&this.linksFrom.concat(this.linksTo).forEach(function(a){a.destroyElements&&a.destroyElements()});this.series.layout.removeElementFromCollection(this,this.series.layout[this.isNode?"nodes":"links"]);return c.prototype.destroy.apply(this,
arguments)}});g.prototype.pointClass=n;e.registerSeriesType("networkgraph",g);"";return g});h(f,"masters/modules/networkgraph.src.js",[],function(){})});
//# sourceMappingURL=networkgraph.js.map