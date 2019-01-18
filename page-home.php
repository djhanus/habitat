<?php get_header(); /* Template Name: Home Page */ ?>
  	<div class="page-home">

      <div class="page-banner"
         style="background-image: url('<?php echo get_field('featured_banner')?>">
      <div class="title"><?php echo get_field('featured_banner_text')?></div>
      </div><!-- /.page-banner -->


  		<div class="row one">

        <div class="content-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-module-key.png" />
          <h2>Become a Homeowner</h2>
          <p><?php echo get_field('homeowner_text')?></p>
          <div class="orange-line"></div>
        </div>

        <div class="content-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-module-hammer.png" />
          <h2>Volunteer</h2>
          <p><?php echo get_field('volunteer_text')?></p>
          <div class="orange-line"></div>
        </div>

        <div class="content-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-module-restore.png" />
          <h2>ReStore</h2>
          <p><?php echo get_field('restore_text')?></p>
          <div class="orange-line"></div>
        </div>

  		</div> <!-- END ROW -->

      <div class="row two">

        <div class="content-wrapper">
          <p><?php echo get_field('mission_statement')?></p>

          <p class="second"><?php echo get_field('mission_statement_subtext')?></p>

        </div>

      </div> <!-- END ROW -->


      <div class="row donate-btn">

          <a href="<?php echo get_field('donate_button_url')?>" target="_blank"><?php echo get_field('donate_button_text')?></a>

      </div>


      <div class="row three">

        <div class="family-container">
          <div class="description">
            <div class="title">
              The Perez Family
            </div>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>

            <div class="button">
              <a href="#">READ MORE</a>
            </div>
          </div>

          <div class="photo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-family.jpg');">
          </div>
        </div> <!-- END family container -->

      </div> <!-- END ROW -->


      <div class="row families-btn">

          <a href="<?php echo get_field('families_button_url')?>" target="_blank"><?php echo get_field('families_button_text')?></a>

      </div>



      <div class="row four">

        <div class="events-container">
          <div class="title">Events</div>
          <div class="events-wrapper">
            <div class="event">
              <div class="date">
                <h1>NOV</h1>
                <h2>08</h2>
              </div>

              <div class="text">
                <h1>Event Name</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                <a href="#">Read More >></a>
              </div>
            </div>
          </div>

          <a href="#" class="see-all">See All Events</a>
        </div>

        <div class="news-container">
          <div class="title">News</div>
        </div>

      </div>



      <div class="sponsors-section">

        <p>Thank you sponsors & supporters </p>

        <ul>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
          <li><img src="https://placeholder.pics/svg/125x125/DEDEDE/555555/LOGO"></li>
        </ul>

      </div>

  	</div> <!-- END HOME PAGE -->


<?php get_footer(); ?>