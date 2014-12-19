
// Based off code from William Malone (www.williammalone.com)Licensed under
//the Apache License, Version 2.0

// Copyright 2012 David Rynn

// This code by David Rynn is licensed under the Apache License, Version 2.0 
//(the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.


var canvas;
var context;
var images = {};
var totalResources = 6;
var numResourcesLoaded = 0;
var fps = 30;
var x = 245;
var y = 185;
var breathInc = 0.1;
var breathDir = 1;
var breathAmt = 0;
var breathMax = 1;
var breathInterval = setInterval(updateBreath, 2000 / fps);
var maxEyeHeight = 14;
var curEyeHeight = maxEyeHeight;
var maxEyeHeight = 14;
var maxEyeHeightr = 17;
var curEyeHeight = maxEyeHeight;
var curEyeHeightr = maxEyeHeightr;
var eyeOpenTime = 0;
var timeBtwBlinks = 4000;
var blinkUpdateTime = 200;                    
var blinkTimer = setInterval(updateBlink, blinkUpdateTime);
var fpsInterval = setInterval(updateFPS, 1000);
var numFramesDrawn = 0;
var curFPS = 0;

function updateFPS() {
	
	curFPS = numFramesDrawn;
	numFramesDrawn = 0;
}		
function prepareCanvas(canvasDiv, canvasWidth, canvasHeight)
{
	// Create the canvas (Neccessary for IE because it doesn't know what a canvas element is)
	canvas = document.createElement('canvas');
	canvas.setAttribute('width', canvasWidth);
	canvas.setAttribute('height', canvasHeight);
	canvas.setAttribute('id', 'canvas');
	canvasDiv.appendChild(canvas);
	
	if(typeof G_vmlCanvasManager != 'undefined') {
		canvas = G_vmlCanvasManager.initElement(canvas);
	}
	context = canvas.getContext("2d"); // Grab the 2d canvas context
	// Note: The above code is a workaround for IE 8and lower. Otherwise we could have used:
	//     context = document.getElementById('canvas').getContext("2d");
	
	loadImage("leftArm");
	loadImage("legs");
	loadImage("torso");
	loadImage("rightArm");
	loadImage("head");
	loadImage("hair");
	loadImage("cape");
}

function loadImage(name) {

  images[name] = new Image();
  images[name].onload = function() { 
	  resourceLoaded();
  }
  images[name].src = "img/drac/" + name + ".png";
}

function resourceLoaded() {

  numResourcesLoaded += 1;
  if(numResourcesLoaded === totalResources) {
  
	setInterval(redraw, 1000 / fps);
  }
}

function redraw() {
				
  canvas.width = canvas.width; // clears the canvas 

  drawEllipse(x + 60, y + 73, 260- breathAmt*10, 8); // Shadow

  context.drawImage(images["legs"], x +15, y +55);
  context.drawImage(images["torso"], x +10, y - 38);
  context.drawImage(images["head"], x -40, y - 180 - breathAmt);
  context.drawImage(images["hair"], x - 22, y - 175 - breathAmt);
  context.drawImage(images["rightArm"], x +10 , y -10 - breathAmt);

  context.drawImage(images["leftArm"], x + 50, y -10 - breathAmt);
  context.drawImage(images["cape"], x -40, y-95-breathAmt/2 );
	
  drawEllipse(x + 41, y - 75 - breathAmt, 10, curEyeHeightr); // Left Eye
  drawEllipse(x + 48, y - 77 - breathAmt, 9, curEyeHeight); // Right Eye
  drawBrow(x + 41, y -83- breathAmt, 18,2); // EyeBrow? 
 
  /*context.font = "bold 12px sans-serif";
  context.fillText("fps: " + curFPS + "/" + fps + " (" + numFramesDrawn + ")", 40, 200);
  ++numFramesDrawn;*/
}

function drawEllipse(centerX, centerY, width, height) {

  context.beginPath();
  
  context.moveTo(centerX, centerY - height/2);
  
  context.bezierCurveTo(
	centerX + width/2, centerY - height/2,
	centerX + width/2, centerY + height/2,
	centerX, centerY + height/2);

  context.bezierCurveTo(
	centerX - width/2, centerY + height/2,
	centerX - width/2, centerY - height/2,
	centerX, centerY - height/2);
 
  context.fillStyle = "black";
  context.fill();
  context.closePath();	
}

function drawBrow(centerX, centerY, width, height) {

  context.beginPath();
  
  context.moveTo(centerX, centerY - height/2);
  
  context.bezierCurveTo(
	centerX + width, centerY - height,
	centerX + width, centerY + height,
	centerX, centerY + height/2);

  context.bezierCurveTo(
	centerX - width/2, centerY + height/2,
	centerX - width/2, centerY - height/2,
	centerX, centerY - height/2);
 
  context.fillStyle = "black";
  context.fill();
  context.closePath();	
}

function updateBreath() { 
				
  if (breathDir === 1) {  // breath in
	breathAmt -= breathInc;
	if (breathAmt < -breathMax) {
	  breathDir = -1;
	}
  } else {  // breath out
	breathAmt += breathInc;
	if(breathAmt > breathMax) {
	  breathDir = 1;
	}
  }
}

function updateBlink() { 
				
  eyeOpenTime += blinkUpdateTime;
	
  if(eyeOpenTime >= timeBtwBlinks){
	blink();
  }
}

function blink() {

  curEyeHeight -= 1;
  curEyeHeightr -= .75;
  if (curEyeHeight <= 0) {
	eyeOpenTime = 0;
	curEyeHeight = maxEyeHeight;
	curEyeHeightr = maxEyeHeightr;
  } else {
	setTimeout(blink, 10);
  }
}