
<?php get_header(); ?>


	<div id="page-wrapper">

	<?php the_content();?>


	</div>
	
	<?php get_footer(); ?>
		
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/buddy_animation.js"></script>
	<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/testimonial.js" type="text/javascript"></script>		

  <script type="text/javascript">

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('#header-nav').addClass('white');
                   $('.lines').addClass('color');
            }
            else {
                  $('#header-nav').removeClass('white');
                  $('.lines').removeClass('color');
            }
      })

      var mediaquery = window.matchMedia("(max-width: 980px)");
        if (mediaquery.matches) {
            $('#header-nav').addClass('white');
        } 
        else {
            $('#header-nav').removeClass('white');
            
        // mediaquery no es 600
      }



      var mediaquery = window.matchMedia("(max-width: 450px)");
        if (mediaquery.matches) {
            $('.sub-menu').addClass('open');
        } 
        else {
            $('.sub-menu').removeClass('close');
            
        // mediaquery no es 600
      }

  </script>


</body>
</html>
		