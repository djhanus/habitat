<?php get_header(); /* Template Name: ReStore */ ?>

  <div id="page-restore">

    <div class="page-banner"
      style="background-image: url('<?php echo get_field('image_hero_banner')?>">
      <div class="title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-restore-small.png"></div>
    </div><!-- /.page-banner -->
     
    <div class="section-one">
      <div class="left">
        <p><?php echo get_field('section_one_text')?></p>
      </div>

      <div class="right">
        <?php echo get_field('section_one_address_hours')?>
      </div>
    </div>

    <div class="section-two">
      <div class="container">
        <div class="column">
          <i class="fas fa-shopping-cart"></i>
          <div class="title">
            Shop
          </div>
        </div>

        <div class="column">
          <i class="fas fa-gift"></i>
          <div class="title">
            Donate
          </div>
        </div>

        <div class="column">
          <i class="far fa-envelope"></i>
          <div class="title">
            Volunteer
          </div>
        </div>
      </div>

      <div class="text-container">
        <div class="text"><?php echo get_field('donations_introduction'); ?></div>
      </div>
    </div>

    <div class="section-three">
      <div class="contained">
        <div class="left">
          <div class="title">
            Drop-off donations:
          </div>
          <?php echo get_field('section_three_text')?>
        </div>

        <div class="right">
          <div class="title">
            Free Pickup Service:
          </div>
          <p>Have a larger donation that you cannot bring to us? No problem!</p>
          <a href="<?php echo get_field('section_three_button')?>">Click here to schedule a free pickup</a>
          <p style="font-size: 12px; padding: 10px 0px;">
          <em>For more details or assistance scheduling your donation pickup, call us at <?php echo get_field('section_three_phone')?>.</em>
          </p>
        </div>
      </div>
    </div>

    <div class="section-four">
      <div class="left">
        <div class="title">
          <i class="far fa-heart"></i> Items We Love
        </div>
        <?php echo get_field('items_we_love'); ?>

        <p>Don't see your item listed? Please call us at <?php echo get_field('section_three_phone')?>.</p>
      </div>

      <div class="right">
        <div class="title">
         <i class="far fa-times-circle"></i> Items We Cannot Accept
        </div>
        <?php echo get_field('items_we_cannot_love'); ?>
      </div>
    </div>
  
    <div class="section-five">
      <div class="left">
        <?php echo get_field('video_text'); ?>
      </div>
      <div class="right">
        <div class="embed-container">
          <?php the_field('video'); ?>
        </div>
      </div>
    </div>

     <div class="section-six">
      <div class="left">
        <img src="<?php echo get_field('facebook_image'); ?>">
      </div>
      <div class="right">

        <p>
          <a href="<?php echo get_field('facebook_url', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <?php echo get_field('facebook_text'); ?></p>
      </div>
    </div>

  </div>
<?php get_footer(); ?>