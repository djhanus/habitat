<?php get_header(); /* Template Name: Apply Page */ ?>
  <div id="page-apply">
    <?php while ( have_posts() ): the_post();
      $image_hero_banner          = get_field('image_hero_banner');
    ?>
    <div class="page-banner"
         style="background-image: url('<?php echo $image_hero_banner; ?>')">
      <div class="title"><?php the_title(); ?></div>
    </div><!-- /.page-banner -->

    <div class="section-one">
      <?php if( have_rows('apply_section_one_row_one') ): ?>
        <?php while( have_rows('apply_section_one_row_one') ): the_row(); ?>
          <div><?php the_sub_field('apply_section_one_row_one_text'); ?></div>
          <div style="background-image: url('<?php the_sub_field('apply_section_one_row_one_image'); ?>');">
            <img class="hide-full-width" src="<?php the_sub_field('apply_section_one_row_one_image'); ?>">
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if( have_rows('apply_section_one_row_two') ): ?>
        <?php while( have_rows('apply_section_one_row_two') ): the_row(); ?>
          <div style="background-image: url('<?php the_sub_field('apply_section_one_row_two_image'); ?>');">
            <img class="hide-full-width" src="<?php the_sub_field('apply_section_one_row_two_image'); ?>">
          </div>
          <div><?php the_sub_field('apply_section_one_row_two_text'); ?></div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div><!-- /.section-one -->

    <div class="section-two">
      <div class="contained">
        <h1><?php the_field('apply_stwo_title'); ?></h1>

        <div>
          <?php the_field('apply_stwo_body'); ?>
        </div>

        <div>
          <?php the_field('apply_stwo_footer_tagline'); ?>
        </div>
      </div>
    </div><!-- /.section-two -->

    <div class="section-three">
      <div class="contained">
        <?php if( have_rows('apply_sthree_expands') ): ?>
          <?php while( have_rows('apply_sthree_expands') ): the_row(); ?>
            <details>
              <summary><span><?php the_sub_field('apply_sthree_exapnds_title'); ?></span>
                <button>
                  <svg width="67px" height="67px" viewBox="0 0 67 67" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <defs>
                          <polyline id="path-1" points="25.9003906 18.4350586 43.2832031 33.4455566 25.9003906 48.3596191"></polyline>
                      </defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <circle id="Oval" stroke="#FFFFFF" stroke-width="2" fill-rule="nonzero" cx="33.4731445" cy="33.5268555" r="32.4731445"></circle>
                          <g id="Path-2" stroke-linecap="round" fill-rule="nonzero" stroke="#FFFFFF">
                              <use stroke-width="2" xlink:href="#path-1"></use>
                              <use stroke-width="1" xlink:href="#path-1"></use>
                          </g>
                      </g>
                  </svg>
                </button>
              </summary>
              <div class="text-wrapper">
                <div class="text">
                  <?php the_sub_field('apply_sthree_exapnds_body'); ?>
                </div>
              </div>
            </details>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.section-three -->

    <div class="section-four">
      <h1>
        <div class="contained">FAQ</div>
      </h1>

      <div class="contained">
        <?php if( have_rows('apply_sfour_expands') ): ?>
          <?php while( have_rows('apply_sfour_expands') ): the_row(); ?>
            <details>
              <summary><span><?php the_sub_field('apply_sfour_exapnds_title'); ?></span>
                <button>
                  <svg width="67px" height="67px" viewBox="0 0 67 67" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <defs>
                          <polyline id="path-1" points="25.9003906 18.4350586 43.2832031 33.4455566 25.9003906 48.3596191"></polyline>
                      </defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <circle id="Oval" stroke="#149CCD" stroke-width="2" fill-rule="nonzero" cx="33.4731445" cy="33.5268555" r="32.4731445"></circle>
                          <g id="Path-2" stroke-linecap="round" fill-rule="nonzero" stroke="#149CCD">
                              <use stroke-width="2" xlink:href="#path-1"></use>
                              <use stroke-width="1" xlink:href="#path-1"></use>
                          </g>
                      </g>
                  </svg>
                </button>
              </summary>
              <?php the_sub_field('apply_sfour_exapnds_body'); ?>
            </details>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.section-four -->
    <?php endwhile; ?>
  </div><!-- /#page-apply -->
<?php get_footer(); ?>