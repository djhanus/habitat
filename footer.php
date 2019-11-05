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

      <img src="https://monroecountyhabitat.org/wp-content/uploads/2019/04/Equal_Housing_Opportunity-300x287.png" />

      <img src="https://monroecountyhabitat.org/wp-content/uploads/2019/09/habitat-charity-logo.png" />

  		</div> <!-- END column -->

	</div> <!-- END footer container -->

  <div class="disclaimer">
    The federal Equal Credit Opportunity Act prohibits creditors from discriminating against credit applicants on the basis of race, color, religion, national origin, sex, marital status, age (provided the applicant has the capacity to enter into a binding contract); because all or part of the applicant’s income derives from any public assistance program; or because the applicant has in good faith exercised any right under the Consumer Credit Protection Act. The federal agency that administers compliance with this law concerning this creditor is the Federal Trade Commission, Washington, DC 20580.
  </div>


  	<div class="copyright">
    	&copy; <?php echo date("Y"); ?> Habitat for Humanity of Monroe County
	</div>

  </footer>
  <?php wp_footer(); ?>
</body>
</html>