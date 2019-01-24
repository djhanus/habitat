<?php get_header(); ?>

  <div class="post-standard">

    <div class="banner">
      <div class="container">
        <div class="date">
          November 31, 2019
        </div>

        <div class="title">
          Lorem ipsum dolor sit amet
        </div>
      
        <div class="social">
          <ul>
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
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