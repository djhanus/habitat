<?php get_header(); ?>

  <div class="post-standard">

    <div class="banner">
      <div class="container">
        <div class="date">
          <?php echo get_the_date(); ?>
        </div>

        <div class="title">
          <?php the_title(); ?>
        </div>
      
        <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/home?status=<?php echo get_permalink(); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div> <!-- END conatiner -->
    </div> <!-- END banner -->
     
    <div class="main-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
            endwhile; else: ?>
        <?php endif; ?>
    </div> <!-- END main container -->

  </div>
<?php get_footer(); ?>