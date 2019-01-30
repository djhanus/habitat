<?php get_header(); /* Template Name: Ways to Give */ ?>
  <div id="page-apply">
    <?php while ( have_posts() ): the_post();
      $image_hero_banner          = get_field('image_hero_banner');
    ?>
    <div class="page-banner"
         style="background-image: url('<?php echo $image_hero_banner; ?>')">
      <div class="title"><?php the_title(); ?></div>
    </div><!-- /.page-banner -->

    <?php endwhile; ?>
  </div><!-- /#page-waystogive -->
<?php get_footer(); ?>