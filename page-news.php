<?php get_header(); /* Template Name: News */ ?>

  <div id="page-news">

    <!-- FEATURED POST HEADER -->
    <?php

      $post_object = get_field('featured_post_picker');

      if( $post_object ): 

        // override $post
        $post = $post_object;
        setup_postdata( $post ); 
    ?>

    <div class="featured-post"
      style="background-image: url('<?php echo get_field('featured_image')?>">
      <div class="container">
        <div class="date"><?php echo get_the_date(); ?></div>
        <div class="title"><?php the_title(); ?></div>
        <p><?php the_excerpt(); ?></p>
      </div>
    </div><!-- /.featured-post -->

      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- MAIN NEWS ROLL -->
    <div class="news-container">
      <div class="grid news-wrapper">
          <?php
            $news_args = array(
              'post_type'       => 'post',
              'order'           => 'DSC',
              'posts_per_page'  => '12',
              'post_status'     => 'publish',
              'category_slug'   => 'news',
            );
            $news_query  = new WP_Query( $news_args );
            if($news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post();
            ?>
            <div class="grid-item news">
              <h2><?php echo get_the_date(); ?></h2>
              <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink(); ?>">Read More >></a>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div> <!-- /.news-wrapper -->
      </div> <!-- /.news-container -->
  
  </div>
<?php get_footer(); ?>