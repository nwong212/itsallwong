PFont hel;
float modHour;
float linePos;
float hw;
float hh;
String hours;
String min;
String sec;
String time;
String whatTime = "wait, what time is it?";
PImage leaf;

/* @pjs preload="data/leaf.png";
@pjs font="/assets/fonts/ATC-Harris/atcharris-regular-webfont.ttf"; */

void setup() {
  size(window.innerWidth, window.innerHeight);
  background(255);
  smooth();

    textFont(createFont("atcharris-regular-webfont", 48));
    textMode(SCREEN);

  leaf = loadImage("data/leaf.png");
}
void draw() {

  hw = width/2;
  hh = height/2;

  time = hours + ".";

  modHour = hour();

  if(minute() == 15 || minute() == 30) {
    time = min + " " + hours + ".";
  }

  if(minute() == 45) {
    modHour = hour() + 1;
    time = min + " " + hours + ".";
  }

  //SET UP HOURS, MINUTES, SECONDS NAMES

  if(modHour == 1 || modHour == 13) {
    hours = "time for you to get a watch";
  }

  if(modHour == 2 || modHour == 14) {
    hours = "time to stop asking me for the time";
  }


  if(modHour == 3 || modHour == 15) {
    hours = "not your time";
  }


  if(modHour == 4 || modHour == 16) {
    hours = "clobberin time";
  }


  if(modHour == 5 || modHour == 17) {
    hours = "a hair past a mole";
  }


  if(modHour == 6 || modHour == 18) {
    hours = "time to die";
  }


  if(modHour == 7 || modHour == 19) {
    hours = "time to leave";
  }


  if(modHour == 8 || modHour == 20) {
    hours = "your time to shine";
  }


  if(modHour == 9 || modHour == 21) {
    hours = "time to make a move";
  }


  if(modHour == 10 || modHour == 22) {
    hours = "time to get FUQD UP";
  }


  if(modHour == 11 || modHour == 23) {
    hours = "time for an attitude change";
  }


  if(modHour == 12 || modHour == 0) {
    hours = "time for bed";
  }

  background(0);

  noStroke();

  textAlign(CENTER, CENTER);
  fill(255);
  textSize(48);
  text(whatTime, hw, hh);

  cursor(ARROW);

  if(hour() == 11 || hour() == 23 && minute() == 11) {

  }

  if( mouseX > hw - textWidth(whatTime)/2 - 40
   && mouseX < hw + textWidth(whatTime)/2 + 40
   && mouseY > hh - 84
   && mouseY < hh + 24) {

    background(255, 20);

      if(hour() == 4 || hour() == 16 && minute() == 20) {
        //IT'S FOUR TWENTY!
        hours = "FOUR";
        min = "TWENTY !!!!11!!!!!11!!!1!!!!!1";
        background(random(150, 160), random(230,255), random(0,100));
        noCursor();
        image(leaf, mouseX, mouseY);
      }

    noStroke();
    textAlign(CENTER, CENTER);
    fill(0);
    textSize(33);
    text("it's", hw, hh - 50);
    textSize(48);
    if(minute() == 00) {
      text(hours, hw, hh);
    } else{
     text(time, hw, hh);
    }
  }
}
