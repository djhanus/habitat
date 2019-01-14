<?php get_header(); ?>

  <div class="post-standard">

    <div class="banner">
      <div class="container">
        <div class="date">
          November 31st, 2019
        </div>

        <div class="title">
          Sample title name
        </div>
      </div>
    </div> <!-- END banner -->
     
    <div class="main-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
            endwhile; else: ?>
        <?php endif; ?>
    </div> <!-- END main container -->

  </div>
<?php get_footer(); ?>