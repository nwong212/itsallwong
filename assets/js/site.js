

$(document).ready(function(){

    //Click event to scroll to top
    $('.scrolltotop').click(function(){
        $('html, body').animate({scrollTop : 0},300);
        return false;
    });

    $(".icon-hotairballoon").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function(){
      $(this).removeClass("activated")
    })

    $(".icon-hotairballoon").hover(function(){
      $(this).addClass("activated");
    })

});

var quotes = [
  "change a life in 3 easy steps !",
  "2 fries switch lives, it’s a freaky fryday",
  "i want a teenager so that i can have my differences with them",
  "i'm a bad fish",
  "hard boiled potato",
  "stanley is my extraterrestrial son",
  "OMGDIGD",
  "are there avocados",
  "but are there hashbrowns though",
  "shine a phone light on it !",
  "did you try clear glue",
  "i heard you had avocados",
  "i was 7 when i realized lmno was not a letter",
  "the cocacola company invented happiness",
  "schools = cults ?",
  "100% rag",
  "Is it BFK Reves?"
];

  var rand = Math.floor(Math.random() * quotes.length);
  var quote = quotes[rand];
  document.getElementById("quoter").innerHTML =  "<span>" + quote + "</span>";

function ticker() {
  var rand = Math.floor(Math.random() * quotes.length);
  var quote = quotes[rand];

  document.getElementById("quoter").innerHTML = "<span>" + quote + "</span>";
}

var intervalID = setInterval(ticker, 6000);

//follow mouse
var currentMousePos = { x: -1, y: -1 };

$(document).bind('mousemove', function(t) {

    currentMousePos.x = t.pageX;
    currentMousePos.y = t.pageY;

});

var isMobile = window.matchMedia("only screen and (max-width: 760px)");

if (!isMobile.matches) {

    var elements = $('.tail');

    elements.each(function() {
        // console.log('half is ' + half + 'width is ' + width)

        var offset = {};

        var borderLeft, borderTop, borderRight, borderBottom = 0;

        // $(this).text(offset.left + "+" + offset.top)
        $(this).parent().on('mousemove', function() {

            var half = $(this).find('> .tail').width() / 2;
            var top = $(this).find('> .tail').height();
            var width = $(this).find('> .tail').outerWidth();

            var parentWidth = $(this).width(),
                parentHeight = $(this).height();

                offset = $(this).position();

                borderLeft = offset.left + half + 4;
                borderTop = offset.top + top;
                borderRight = offset.left + parentWidth - half + 6;
                borderBottom = offset.top + parentHeight;

                // console.log(borderLeft + ',' + borderTop + ',' + borderRight + ',' + borderBottom + 'half is ' + half + 'width is ' + width);

                if(currentMousePos.x >= borderLeft && currentMousePos.x <= borderRight && currentMousePos.y >= borderTop && currentMousePos.y <= borderBottom) {
                    $(this).find('> .tail').css({
                        left: currentMousePos.x - half,
                        top: currentMousePos.y - top
                    });
                }
                if(currentMousePos.x <= borderLeft) {
                        $(this).find('> .tail').css({
                            left: borderLeft - half,
                            top: currentMousePos.y - top
                        });
                }
                if(currentMousePos.x >= borderRight) {
                    $(this).find('> .tail').css({
                        left: borderRight - half,
                        top: currentMousePos.y - top
                    })
                }
                if(currentMousePos.y <= borderTop) {
                    $(this).find('> .tail').css({
                        left: currentMousePos.x - half,
                        top: borderTop - top
                    })
                }
                if(currentMousePos.y<= borderTop && currentMousePos.x >= borderRight) {
                    $(this).find('> .tail').css({
                        left: borderRight - half,
                        top: borderTop - top
                    })
                }
                if(currentMousePos.y<= borderTop && currentMousePos.x <= borderLeft) {
                    $(this).find('> .tail').css({
                        left: borderLeft - half,
                        top: borderTop - top
                    })
                }
                // console.log('mouse move?');

        })
    });
}
