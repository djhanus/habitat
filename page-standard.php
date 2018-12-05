<?php get_header();

/* Template Name: Standard Page */ ?>

<div class="learn single-page">
  <div class="container">

    <div class="hero-wrapper">
      <div class="hero">
        <div style="background: url('<?php echo $learnHeroImageURL; ?>;"></div>

        <div>
          <?php echo the_content(); ?>
        </div>

      </div>
    </div>
  </div>

  <div class="row one">
    <div class="container">

      
    
    </div>
  </div>
  
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>