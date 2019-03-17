PFont hel;
float modHour;
float linePos;
float hw;
float hh;
String hours;
String min;
String sec;
String time;
String whatTime = "what time is it?";

/* @pjs font="data/atcharris-regular-webfont.ttf"; */

PFont ATCHarris = createFont("atcharris-regular-webfont",100);

void setup() {
  size(window.innerWidth, window.innerHeight);
  background(255);
  smooth();

  textFont(ATCHarris);
  textMode(SCREEN);
}
void draw() {

  hw = width/2;
  hh = height/2;

  time = hours + " " + min + ".";

  modHour = hour();

  if(minute() == 15 || minute() == 30) {
    time = min + " " + hours + ".";
  }

  if(minute() == 45) {
    modHour = hour() + 1;
    time = min + " " + hours + ".";
  }

  if(hour() == 4 || hour() == 16 && minute() == 20) {
    //IT'S FOUR TWENTY!
  }

  //SET UP HOURS, MINUTES, SECONDS NAMES

  if(modHour == 1 || modHour == 13) {
    hours = "one";
  }

  if(modHour == 2 || modHour == 14) {
    hours = "two";
  }


  if(modHour == 3 || modHour == 15) {
    hours = "three";
  }


  if(modHour == 4 || modHour == 16) {
    hours = "four";
  }


  if(modHour == 5 || modHour == 17) {
    hours = "five";
  }


  if(modHour == 6 || modHour == 18) {
    hours = "six";
  }


  if(modHour == 7 || modHour == 19) {
    hours = "seven";
  }


  if(modHour == 8 || modHour == 20) {
    hours = "eight";
  }


  if(modHour == 9 || modHour == 21) {
    hours = "nine";
  }


  if(modHour == 10 || modHour == 22) {
    hours = "ten";
  }


  if(modHour == 11 || modHour == 23) {
    hours = "eleven";
  }


  if(modHour == 12 || modHour == 0) {
    hours = "twelve";
  }

  if(minute() == 1) {
    min = "oh one";
  }

  if(minute() == 2) {
    min = "oh two";
  }

  if(minute() == 3) {
    min = "oh three";
  }

  if(minute() == 4) {
    min = "oh four";
  }

  if(minute() == 5) {
    min = "oh five";
  }

  if(minute() == 6) {
    min = "oh six";
  }

  if(minute() == 7) {
    min = "oh seven";
  }

  if(minute() == 8) {
    min = "oh eight";
  }

  if(minute() == 9) {
    min = "oh nine";
  }

  if(minute() == 10) {
    min = "ten";
  }

  if(minute() == 11) {
    min = "eleven";
  }

  if(minute() == 12) {
    min = "twelve";
  }

  if(minute() == 13) {
    min = "thirteen";
  }

  if(minute() == 14) {
    min = "fourteen";
  }

  if(minute() == 15) {
    min = "a quarter past";
  }

  if(minute() == 16) {
    min = "sixteen";
  }

  if(minute() == 17) {
    min = "seventeen";
  }

  if(minute() == 18) {
    min = "eighteen";
  }

  if(minute() == 19) {
    min = "nineteen";
  }

  if(minute() == 20) {
    min = "twenty";
  }

  if(minute() == 21) {
    min = "twenty-one";
  }

  if(minute() == 22) {
    min = "twenty-two";
  }

  if(minute() == 23) {
    min = "twenty-three";
  }

  if(minute() == 24) {
    min = "twenty-four";
  }

  if(minute() == 25) {
    min = "twenty-five";
  }

  if(minute() == 26) {
    min = "twenty-six";
  }

  if(minute() == 27) {
    min = "twenty-seven";
  }

  if(minute() == 28) {
    min = "twenty-eight";
  }

  if(minute() == 29) {
    min = "twenty-nine";
  }

  if(minute() == 30) {
    min = "half past";
  }

  if(minute() == 31) {
    min = "thirty-one";
  }

  if(minute() == 32) {
    min = "thirty-two";
  }

  if(minute() == 33) {
    min = "thirty-three";
  }

  if(minute() == 34) {
    min = "thirty-four";
  }

  if(minute() == 35) {
    min = "thirty-five";
  }

  if(minute() == 36) {
    min = "thirty-six";
  }

  if(minute() == 37) {
    min = "thirty-seven";
  }

  if(minute() == 38) {
    min = "thirty-eight";
  }

  if(minute() == 39) {
    min = "thirty-nine";
  }

  if(minute() == 40) {
    min = "fourty";
  }

  if(minute() == 41) {
    min = "fourty-one";
  }

  if(minute() == 42) {
    min = "fourty-two";
  }

  if(minute() == 43) {
    min = "fourty-three";
  }

  if(minute() == 44) {
    min = "fourty-four";
  }

  if(minute() == 45) {
    min = "a quarter till";
  }

  if(minute() == 46) {
    min = "fourty-six";
  }

  if(minute() == 47) {
    min = "fourty-seven";
  }

  if(minute() == 48) {
    min = "fourty-eight";
  }

  if(minute() == 49) {
    min = "fourty-nine";
  }

  if(minute() == 50) {
    min = "fifty";
  }

  if(minute() == 51) {
    min = "fifty-one";
  }

  if(minute() == 52) {
    min = "fifty-two";
  }

  if(minute() == 53) {
    min = "fifty-three";
  }

  if(minute() == 54) {
    min = "fifty-four";
  }

  if(minute() == 55) {
    min = "fifty-five";
  }

  if(minute() == 56) {
    min = "fifty-six";
  }

  if(minute() == 57) {
    min = "fifty-seven";
  }

  if(minute() == 58) {
    min = "fifty-eight";
  }

  if(minute() == 59) {
    min = "fifty-nine";
  }

  background(0);

  noStroke();

  textAlign(CENTER, CENTER);
  fill(255);
  textSize(48);
  text(whatTime, hw, hh);

  if( mouseX > hw - textWidth(whatTime)/2 - 40
   && mouseX < hw + textWidth(whatTime)/2 + 40
   && mouseY > hh - 84
   && mouseY < hh + 24) {

    background(255, 20);
    noStroke();
    textAlign(CENTER, CENTER);
    fill(0);
    textSize(33);
    text("it is", hw, hh - 50);
    textSize(48);
    if(minute() == 00) {
      text(hours, hw, hh);
    } else{
      text(time, hw, hh);
    }

    linePos = hw + 5 + textWidth(time)/2;

    strokeWeight(2);
    if(second()%2 == 0) {
     //troke(0);
    } else {
     //noStroke();
    }
    line(linePos, 420, linePos, 475);
  }
}
