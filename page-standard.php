<?php get_header(); /* Template Name: Standard Page */ ?>

  <div class="container">

  	<div id="page-standard">

  		<div class="featured-wrapper">

  			<h1>FEATURED TITLE</h1>

  		</div>
   
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>

  	</div>


  </div>
<?php get_footer(); ?>