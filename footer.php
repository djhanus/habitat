</main>
  <footer>
  	<div class="footer-container">

  		<div class="column-one">

  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-small-white.png">

	  		<div class="title">Habitat Office</div>

			<?php echo get_field('habitat_info', 'option'); ?>

			<div class="horizontal-line"></div>

  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-restore-small.png">

			<div class="title">ReStore</div>

			<?php echo get_field('restore_info', 'option'); ?>
  		</div> <!-- END column -->

  		<div class="column-two">

  			<div class="menu-column">
  			<?php wp_nav_menu( array( 'theme_location' => 'footer-whoweare' ) ); ?>

			<?php wp_nav_menu( array( 'theme_location' => 'footer-waystogive' ) ); ?>
			</div>

			<div class="menu-column">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-volunteer' ) ); ?>

			<?php wp_nav_menu( array( 'theme_location' => 'footer-apply' ) ); ?>
			</div>
			
  		</div> <!-- END column -->

  		 <div class="column-three">
  		 	<div class="button">
  		 		<a href="<?php echo get_field('donate_url', 'option'); ?>" target="_blank">DONATE</a>
  		 		<a href="/volunteer/">VOLUNTEER</a>
  		 		<a href="/contact/">CONTACT US</a>
	 		</div>

 			<div class="social">
 				<ul>
 					<li><a href="<?php echo get_field('facebook_url', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
		 			<li><a href="<?php echo get_field('twitter_url', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
		 			<li><a href="<?php echo get_field('instagram_url', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
		 			<li><a href="<?php echo get_field('facebook_url', 'option'); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
	 			</ul>
 			</div>

  		</div> <!-- END column -->

	</div> <!-- END footer container -->


  	<div class="copyright">
    	&copy; <?php echo date("Y"); ?> Habitat for Humanity of Monroe County
	</div>

  </footer>
  <?php wp_footer(); ?>
</body>
</html>