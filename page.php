<?php get_header(); /* Standard Page */ ?>

  <div class="page-standard">

    <div class="page-banner"
      style="background-image: url('<?php echo get_field('featured_banner')?>">
      <div class="title"><?php echo get_field('featured_banner_text')?></div>
    </div><!-- /.page-banner -->
     
    <div class="main-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
            endwhile; else: ?>
        <?php endif; ?>
    </div> <!-- END main container -->
  
  </div>
<?php get_footer(); ?>