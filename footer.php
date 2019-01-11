</main>
  <footer>
  	<div class="footer-container">

  		<div class="column-one">

  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-small-white.png">

	  		<div class="title">Habitat Office</div>

			213 E. Kirkwood Avenue<br />
			Bloomington, IN 47408<br />
			<br />
			Call: (812) 331-4069<br />
			Fax: (812) 336-6022<br />
			<br />
			Monday-Friday: 8am-Noon, 1pm-5pm

			<div class="horizontal-line"></div>

  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-restore-small.png">

			<div class="title">ReStore</div>

			850 S. Auto Mall Road<br />
			Bloomington, IN 47401<br />
			<br />
			Call: (812) 331-2660<br />
			<br />
			Tuesday-Friday: 10:30am-5:30pm<br />
			Saturday: 9:30am-4:30pm<br />
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
  		 		<a href="#">DONATE</a>
  		 		<a href="#">VOLUNTEER</a>
  		 		<a href="#">EMAILS</a>
	 		</div>
  		</div> <!-- END column -->

	</div> <!-- END footer container -->


  	<div class="copyright">
    	<p>&copy; <?php echo date("Y"); ?> Habitat for Humanity of Monroe County</p>
	</div>

  </footer>
  <?php wp_footer(); ?>
</body>
</html>