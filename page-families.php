<?php get_header(); /* Template Name: Our Families */ ?>

  <div id="page-families">

    <div class="page-banner"
      style="background-image: url('<?php echo get_field('image_hero_banner')?>">
      <div class="title"><?php the_title(); ?></div>
    </div><!-- /.page-banner -->

    <div class="intro-text">
      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
            endwhile; else: ?>
        <?php endif; ?>
      </div>
    </div>
     
    <div class="main-container">
        
        <!-- CALL FUNCTION -->
          <?php
            $families_args = array(
              'post_type'       => 'Families',
              'order'           => 'DSC',
              'posts_per_page'  => '100',
              'post_status'     => 'publish',
            );
            $families_query  = new WP_Query( $families_args );
            if($families_query->have_posts() ) : while ( $families_query->have_posts() ) : $families_query->the_post();
          ?>

          <!-- OUTPUT CONTAINER -->
          
          <div class="families-wrapper">
            <a href="<?php echo get_permalink(); ?>"><div class="photo" style="background-image: url('<?php echo get_field('family_photo')?>">
            </div></a>
            <div class="name">
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </div>

          <?php endwhile; endif; wp_reset_query(); ?>
    </div> <!-- END main container -->


      <div class="families-btn">

          <a href="/apply/" target="_blank">APPLY TO BE A HABITAT FAMILY</a>

      </div>
  
  </div>
<?php get_footer(); ?>