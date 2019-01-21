<?php get_header(); ?>

  <div class="post-families">

    <div class="page-banner"
      style="background-image: url('<?php echo get_field('family_photo')?>">
      <div class="title"><?php echo get_field('family_name')?></div>
    </div><!-- /.page-banner -->
     
    <div class="main-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
            endwhile; else: ?>
        <?php endif; ?>
    </div> <!-- END main container -->

    <div class="families-button">
          <a href="#" target="_blank">MEET ALL OF OUR FAMILIES</a>
    </div>
  
  </div>
<?php get_footer(); ?>