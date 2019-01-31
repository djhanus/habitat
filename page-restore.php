<?php get_header(); /* Template Name: ReStore */ ?>

  <div id="page-restore">

    <div class="page-banner"
      style="background-image: url('<?php echo get_field('image_hero_banner')?>">
      <div class="title"><?php the_title(); ?></div>
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
      shop donate volunteer
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
          Items We Love
        </div>

        <?php if(get_field('items_we_love')): ?>
          <ul>
        <?php while(has_sub_field('items_we_love')): ?>
          <li>sub_field_1 = <?php the_sub_field('item_name_1'); ?>, sub_field_2 = <?php the_sub_field('item_name_2'); ?>, etc</li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>

        <ul>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
          <li>Item Name</li>
        </ul>


      </div>

      <div class="right">
        right
      </div>
    </div>
  
    <div class="section-five">
      <?php echo get_field('video_text'); ?>
    </div>

     <div class="section-six">
      <p><?php echo get_field('facebook_text'); ?></p>
    </div>

  </div>
<?php get_footer(); ?>