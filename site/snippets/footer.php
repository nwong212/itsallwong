
 </div>
 </main>
     <!-- <footer class="clear foot come-in">

         <div class="sector-1-2 lighter">
             <div>
                 <p id="Quote">

                 </p>
             </div>
         </div>

        <div class="sector-1-4">
            <div>
               <p>
                    Made with <span class="heart"><span>love</span>
                		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                			 viewBox="0 0 60.84265 54.92846" width="15" height="15">
                		<path fill="rgb(230, 80, 80)" d="M44.09231,0.38493c-5.62976,0-10.59906,2.78656-13.63611,7.04584
                			c-3.03094-4.30859-8.03198-7.13147-13.7002-7.13147c-9.2511,0-16.75061,7.49951-16.75061,16.75067
                			c0,17.19744,30.45081,37.54095,30.45081,37.54095s30.38672-20.34351,30.38672-37.45538
                			C60.84292,7.88445,53.34341,0.38493,44.09231,0.38493z"/></svg></span> in LA
                            <br /> &copy; Nathan Wong
               </p>
            </div>
        </div>

         <div class="sector-1-4 light hello">
        <div><a class="scrolltotop icon-hotairballoon" href="#"></a></div>
         </div>
     </footer> -->



<!--[if lt IE 8]><!-->
<link rel="stylesheet" href="<?= url('assets/ie7/ie7.css') ?>">
<!--<![endif]-->

<?php echo css('assets/styles/responsive-nav.min.css'); ?>
<!-- custom css -->
<?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
<?php echo css($css->url()) ?>
<?php endforeach ?>

<?php echo css('assets/styles/project.min.css');
      echo css('assets/styles/fonts.css');
      echo css('assets/ATC-HARRIS-KIT/ATCH-Harris.min.css'); ?>

  <?php
      	echo js('assets/js/responsive-nav.min.js');
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
        echo js('/assets/js/main.js');
        // echo js('/assets/js/headroom.js');
        echo js('/assets/js/site.js');
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>

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

        // $(function () {
        //   $('.image').each(function () {
        //       new RTP.PinchZoom($(this), {});
        //   });
        // })
		//RESPONSIVE-NAV
		var nav = responsiveNav(".menu-box", {
			label: "",
			closeOnNavClick: true,
      transition: 450,
		});

        // //HEADROOM.JS
		// // grab an element
		// var elem = document.querySelector("header");
		// // initialise
		// var headroom = new Headroom(elem, {
		//   "offset": 150,
		//   "tolerance" : {
		//         up : 5,
		//         down : 0
		//     },
		//   "classes": {
		//     "initial": "animated",
		//     "pinned": "slideDown",
		//     "unpinned": "slideUp"
		//   }
		// });
		// headroom.init();
        //
        // // to destroy
		// headroom.destroy();

	</script>

	<?php snippet('google-anal') ?>
</body>

</html>
