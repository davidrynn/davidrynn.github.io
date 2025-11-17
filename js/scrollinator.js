





Effect.Scrollinate=Class.create();
Object.extend(Object.extend(Effect.Scrollinate.prototype,Effect.Base.prototype),{
initialize:function(element){
this.element=$(element);
if(!this.element)throw(Effect._elementDoesNotExistError);
var options=Object.extend({
x:0,
y:0,
mode:'relative'
},arguments[1]||{});
this.start(options);
},
setup:function(){




this.element.makePositioned();
this.originalLeft=parseFloat(this.element.getStyle('left')||'0');
this.originalTop=parseFloat(this.element.getStyle('top')||'0');
if(this.options.mode=='absolute'){

this.options.x=this.options.x-this.originalLeft;
this.options.y=this.options.y-this.originalTop;
}
},
update:function(position){
this.element.setStyle({
left:Math.round(this.options.x*position+this.originalLeft)+'px',
top:Math.round(this.options.y*position+this.originalTop)+'px'
});
}
});

Object.extend(Effect,Effect.Scrollinate);

if(typeof(AC)=="undefined"){AC={};}

AC.Scrollinator=Class.create();
AC.Scrollinator.prototype={

scrollerScope:null,
scrollerMask:null,
maskDimensions:null,

strategy:null,
scrollElements:[],
scrollElementsLength:null,

moveEffects:[],


duration:0.005,
distance:2,

pivotElement:null,
pivotFlag:null,

debug:null,


initialize:function(scrollerMaskId,strategy,children){
this.debug=$('debug');

this.scrollerScope=scrollerMaskId+'_scope';

this.scrollerMask=$(scrollerMaskId);

this.maskDimensions=Element.getDimensions(this.scrollerMask);

this.strategy=strategy;

this.scrollElements=children;
this.scrollElementsLength=this.scrollElements.length;

this.strategy.layout(this,this.scrollElements);
this.scrollChildren(this,this.scrollElements);
},

positionChild:function(scrollElement,x,y){

scrollElement.left=x;
scrollElement.top=y;

Element.setStyle(scrollElement,{left:x+'px'});
Element.setStyle(scrollElement,{top:y+'px'});

},

scrollChildren:function(){

this.moveEffects=new Array();

for(var i=this.scrollElementsLength-1;i>=0;i--){

var scrollElement=this.scrollElements[i];

this.moveEffects[this.moveEffects.length]=this.strategy.moveEffect(this,this.scrollElements[i]);

}

this.strategy.scroll(this);

}

}



AC.Scrollinator.Strategies={

Right:{

layout:function(scroller,scrollElements){

scroller.pivotElement=scrollElements[0];

var leftPosition=0;

for(var i=0,scrollElement;scrollElement=scrollElements[i];i++){

scroller.positionChild(scrollElement,leftPosition,0);
Element.setStyle(scrollElement,{position:'absolute'});

scrollElement.width=Element.getDimensions(scrollElement).width;
leftPosition+=scrollElement.width;

}
},

scroll:function(scroller){

new Effect.Parallel(scroller.moveEffects,
{
fps:15,
duration:scroller.duration,
transition:Effect.Transitions.linear,
afterFinish:function(){
scroller.scrollChildren();
}
});

},

moveEffect:function(scroller,scrollElement){
return new Effect.Scrollinate(scrollElement,{
sync:true,
x:scroller.distance,
y:0,
duration:scroller.duration,
transition:Effect.Transitions.linear,


beforeStart:function(){

if(scrollElement.left>scroller.maskDimensions.width){
var newLeft=scroller.pivotElement.left-scrollElement.width;
scroller.strategy.setPivotElement(scroller,scrollElement,newLeft,0);
}
},
afterFinish:function(){
scrollElement.left+=scroller.distance;
}
});
},

setPivotElement:function(scroller,scrollElement,x,y){
scroller.positionChild(scrollElement,x,y);
scroller.pivotElement=scrollElement;
}
},

Left:{

layout:function(scroller,scrollElements){

scroller.pivotElement=scrollElements[scroller.scrollElementsLength-1];

var leftPosition=0;

for(var i=0,scrollElement;scrollElement=scrollElements[i];i++){

scroller.positionChild(scrollElement,leftPosition,0);
Element.setStyle(scrollElement,{position:'absolute'});

scrollElement.width=Element.getDimensions(scrollElement).width;
leftPosition+=scrollElement.width;

}

},

scroll:function(scroller,scrollElement){
new Effect.Parallel(scroller.moveEffects,
{
fps:15,
duration:scroller.duration,
transition:Effect.Transitions.linear,
afterFinish:function(){
scroller.scrollChildren();
}
});
},

moveEffect:function(scroller,scrollElement){
return new Effect.Scrollinate(scrollElement,{
sync:true,
x:0-scroller.distance,
y:0,
duration:scroller.duration,
transition:Effect.Transitions.linear,


beforeStart:function(){

if(scrollElement.left<(0-scrollElement.width)){
var newLeft=scroller.pivotElement.left+scroller.pivotElement.width;
scroller.strategy.setPivotElement(scroller,scrollElement,newLeft,0);
}
},
afterFinish:function(){
scrollElement.left+=(0-scroller.distance);
}
});
},

setPivotElement:function(scroller,scrollElement,x,y){
scroller.positionChild(scrollElement,x,y);
scroller.pivotElement=scrollElement;
}

},

Up:{

layout:function(scroller,scrollElements){

scroller.pivotElement=scrollElements[scroller.scrollElementsLength-1];

var topPosition=0;

for(var i=0,scrollElement;scrollElement=scrollElements[i];i++){

scroller.positionChild(scrollElement,0,topPosition);
Element.setStyle(scrollElement,{position:'absolute'});

scrollElement.height=Element.getDimensions(scrollElement).height;
topPosition+=scrollElement.height;

}

},

scroll:function(scroller,scrollElement){
new Effect.Parallel(scroller.moveEffects,{
fps:15,
duration:scroller.duration,
transition:Effect.Transitions.linear,
afterFinish:function(){
scroller.scrollChildren();
}
});
},

moveEffect:function(scroller,scrollElement){
return new Effect.Scrollinate(scrollElement,{
sync:true,
x:0,
y:0-scroller.distance,
duration:scroller.duration,
transition:Effect.Transitions.linear,


beforeStart:function(){

if(scrollElement.top<(0-scrollElement.height)){
var newTop=scroller.pivotElement.top+scroller.pivotElement.height;
scroller.strategy.setPivotElement(scroller,scrollElement,0,newTop);
}
},
afterFinish:function(){
scrollElement.top+=(0-scroller.distance);
}
});
},

setPivotElement:function(scroller,scrollElement,x,y){
scroller.positionChild(scrollElement,x,y);
scroller.pivotElement=scrollElement;
}

},

Down:{

layout:function(scroller,scrollElements){

scroller.pivotElement=scrollElements[0];

var topPosition=0;

for(var i=0,scrollElement;scrollElement=scrollElements[i];i++){

scroller.positionChild(scrollElement,0,topPosition);
Element.setStyle(scrollElement,{position:'absolute'});

scrollElement.height=Element.getDimensions(scrollElement).height;
topPosition+=scrollElement.height;

}

},

scroll:function(scroller){
new Effect.Parallel(scroller.moveEffects,
{
fps:15,
duration:scroller.duration,
transition:Effect.Transitions.linear,
afterFinish:function(){
scroller.scrollChildren();
}
});
},


moveEffect:function(scroller,scrollElement){
return new Effect.Scrollinate(scrollElement,{
sync:true,
x:0,
y:scroller.distance,
duration:scroller.duration,
transition:Effect.Transitions.linear,


beforeStart:function(){

if(scrollElement.top>scroller.maskDimensions.height){
var newTop=scroller.pivotElement.top-scrollElement.height;
scroller.strategy.setPivotElement(scroller,scrollElement,0,newTop);
}

},
afterFinish:function(){
scrollElement.top+=scroller.distance;
}
});
},

setPivotElement:function(scroller,scrollElement,x,y){
scroller.positionChild(scrollElement,x,y);
scroller.pivotElement=scrollElement;
}
}
}
