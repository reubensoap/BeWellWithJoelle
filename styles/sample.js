var image = null;
var oriImage = null;
var grayImage = null;
var graySwitch = false;
var rainbowImage = null;
var rainbowSwitch = false;
var texasImage = null;
var texasSwitch = false;
var blurImage = null;
var blueSwitch = false;
var uploadSwitch = false;

var imgcanvas = document.getElementById("can");

function imageTest() {
  if(image == null || !image.complete()){
    alert("Please upload image.");
    return;
  }
}

function upload(){
  if(uploadSwitch == false){
    var fileinput = document.getElementById("finput");
    image = new SimpleImage(fileinput);
    oriImage = new SimpleImage(fileinput);
    grayImage = new SimpleImage(fileinput);
    rainbowImage = new SimpleImage(fileinput);
    texasImage = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
    uploadSwitch = true;
  } else {
    alert("Please Reset Image First");
  }
  
}

function makeGray() {
  imageTest();
  if(graySwitch == false){
    for(var pixel of grayImage.values()){
      var avg = (pixel.getRed() + pixel.getBlue() +   pixel.getGreen()) / 3;
      pixel.setRed(avg);
      pixel.setBlue(avg);
      pixel.setGreen(avg);
    }
    graySwitch = true;
    grayImage.drawTo(imgcanvas);
  } else {
    grayImage.drawTo(imgcanvas);
  }
}

function makeTexas(){
  // reset canvas 
  context = imgcanvas.getContext('2d');
  context.clearRect(0, 0, imgcanvas.width, imgcanvas.height);
  // replace pixels
  if(texasSwitch == false){
    var w = texasImage.getWidth();
    var h = texasImage.getHeight();
    for(var pixel of texasImage.values()){
      if(pixel.getX() < w / 3){
        pixel.setBlue(255);
      } else if (pixel.getY() < h / 2) {
        if(pixel.getBlue() < 200){
          pixel.setBlue(pixel.getBlue() + 50);
        }
        if(pixel.getGreen() < 200){
          pixel.setGreen(pixel.getGreen() + 50);
        }
        if(pixel.getRed() < 200){
          pixel.setRed(pixel.getRed() + 50);
        }
      } else {
        pixel.setRed(255);
      }
    }
  texasSwitch = true;
  texasImage.drawTo(imgcanvas);
  } else {
    texasImage.drawTo(imgcanvas);
  }
}

function makeRainbow(){
  // reset canvas 
  context = imgcanvas.getContext('2d');
  context.clearRect(0, 0, imgcanvas.width, imgcanvas.height);
  // replace pixels
  if(rainbowSwitch == false){
    var w = rainbowImage.getWidth();
    var h = rainbowImage.getHeight();
    for(var pixel for rainbowImage.values()){
      var avg = (pixel.getRed() + pixel.getGreen() + pixel.getBlue()) / 3;
      if(pixel.getY() > w / 7){
        if(avg < 128){
          pixel.setRed(avg * 2);
          pixel.setGreen(0);
          pixel.setBlue(0);
        } else {
          pixel.setRed(255);
          pixel.setGreen((avg * 2) - 255);
          pixel.setBlue((avg * 2) - 255);
        }
      }
    }
    rainbowSwitch = true;
    rainbowImage.drawTo(imgcanvas);
  } else {
    rainbowImage.drawTo(imgcanvas);
  }
}

function imageReset(){
  image = null;
  oriImage = null;
  grayImage = null;
  graySwitch = false;
  rainbowImage = null;
  rainbowSwitch = false;
  texasImage = null;
  texasSwitch = false;
  blurImage = null;
  blueSwitch = false;
  uploadSwitch = false;
  context = imgcanvas.getContext('2d');
  context.clearRect(0, 0, imgcanvas.width, imgcanvas.height);
}
