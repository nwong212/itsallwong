
 </div>
</main>

<footer class="clear foot module come-in">

    <div class="sector-1-2 lighter">
        <div class="section-5-8">
            <h3>About Me</h3>
                <?php echo kirbytext($site->description()); ?>
            <p id="quoter">
            </p>
        </div>
    </div>

   <div class="sector-1-4 center">
       <div>
          <p>
               Made with <span class="heart"><span>love</span>
           		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           			 viewBox="0 0 60.84265 54.92846" width="15" height="15">
           		<path fill="rgb(230, 80, 80)" d="M44.09231,0.38493c-5.62976,0-10.59906,2.78656-13.63611,7.04584
           			c-3.03094-4.30859-8.03198-7.13147-13.7002-7.13147c-9.2511,0-16.75061,7.49951-16.75061,16.75067
           			c0,17.19744,30.45081,37.54095,30.45081,37.54095s30.38672-20.34351,30.38672-37.45538
           			C60.84292,7.88445,53.34341,0.38493,44.09231,0.38493z"/></svg></span> in LA &copy;&nbsp;&infin; Nathan Wong
          </p>
       </div>
   </div>

    <div class="sector-1-4 light hello">
   <div><a class="scrolltotop icon-hotairballoon" href="#"></a></div>
    </div>
</footer>

<?php echo css('assets/styles/project.css');
      echo css('assets/styles/fonts.css');
      echo css('assets/styles/responsive-nav.css'); ?>

  <?php
      	echo js('assets/js/responsive-nav.min.js');
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
        echo js('/assets/js/main.js');
        echo js('/assets/js/headroom.js');
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>

  <!-- custom css -->
  <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
  <?php echo css($css->url()) ?>
  <?php endforeach ?>

  <!-- custom javascript -->
  <?php foreach($page->files()->filterBy('extension', 'js') as $js): ?>
  <?php echo js($js->url()) ?>
  <?php endforeach ?>

	<script>

          $(document).ready( function() {
            // init Masonry
            var $grid = $('.grid').masonry({
              // options...
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                gutter: '.gutter-sizer',
                percentPosition:true
            });
            // layout Masonry after each image loads
            $grid.imagesLoaded().progress( function() {
              $grid.masonry('layout');
            });
          });

		//RESPONSIVE-NAV
		var nav = responsiveNav(".navigation", {
			label: "",
			closeOnNavClick: true,
		});

        //HEADROOM.JS
		// grab an element
		var elem = document.querySelector("header");
		// initialise
		var headroom = new Headroom(elem, {
		  "offset": 150,
		  "tolerance" : {
		        up : 5,
		        down : 0
		    },
		  "classes": {
		    "initial": "animated",
		    "pinned": "slideDown",
		    "unpinned": "slideUp"
		  }
		});
		headroom.init();

        // to destroy
		headroom.destroy();

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
          "i heard you had avocados"
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
        $(document).bind('mousemove', function(t) {

            $('.tail').each(function() {
                var half = $(this).width() / 2;
                var top = $(this).height();
                var width = $(this).width();

                $(this).css({
                    left: t.pageX - half,
                    top: t.pageY - top,
                    width: width + 10
                });
            })
        });

	</script>

	<?php snippet('google-anal') ?>
</body>

</html>
