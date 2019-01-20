<?php get_header(); /* Template Name: Who Are We Page */ ?>
  <div id="page-who-are-we">
    <?php while ( have_posts() ): the_post();
      $image_hero_banner       = get_field('image_hero_banner');
      $page_who_mission_title  = get_field('page_who_mission_title');
      $page_who_mission_body   = get_field('page_who_mission_body');
      $page_who_history_title  = get_field('page_who_history_title');
      $page_who_history_body   = get_field('page_who_history_body');
      $page_who_divider_background_image  = get_field('page_who_divider_background_image');
      $page_who_divider_text   = get_field('page_who_divider_text');
    ?>
    <div class="page-banner"
         style="background-image: url('<?php echo $image_hero_banner; ?>')">
      <div class="title"><?php the_title(); ?></div>
    </div><!-- /.page-banner -->

    <div class="section-one">
      <div class="contained">
        <h1><?php echo $page_who_mission_title; ?></h1>
        <div class="text">
          <?php echo $page_who_mission_body; ?>
        </div>
      </div>
    </div><!-- /.section-one -->

    <div class="section-two">
      <div class="contained">
        <h1><?php echo $page_who_history_title; ?></h1>
        <div class="text">
          <?php echo $page_who_history_body; ?>
        </div>
      </div>
    </div><!-- /.section-two -->

    <div class="section-three"
         style="background-image: url('<?php echo $page_who_divider_background_image; ?>')">
      <h1><?php echo $page_who_divider_text; ?></h1>
    </div><!-- /.section-three -->

    <div class="section-four">
      <div class="contained">
        <?php if( have_rows('page_who_exapand_component') ): ?>
          <?php while( have_rows('page_who_exapand_component') ): the_row(); ?>
            <details>
              <summary><span><?php the_sub_field('page_who_expand_comp_title'); ?></span>
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
                <div class="left"
                     style="background-image: url('<?php echo the_sub_field('page_who_expand_comp_image'); ?>')">
                </div>
                <div class="right">
                  <?php the_sub_field('page_who_expand_comp_body'); ?>
                </div>
              </div>
            </details>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.section-four -->

    <div class="section-five">
      <div class="contained">
        <?php if( get_field('page_who_slider') ): ?>
        <div class="gallery-wrapper">
          <div id="who-gallery" class="carousel slide" data-ride="carousel">
            <?php if( have_rows('page_who_slider') ): ?>
              <ul class="carousel-indicators">
                <?php
                  $slides = get_field_object('page_who_slider');
                  $slides_count = (count($slides['value']));
                  for ($i=0; $i<$slides_count; $i++) { ?>
                    <li data-target="#who-gallery" data-slide-to="<?php echo $i; ?>"
                      <?php if ($i == 0) { ?>class="active"<?php } ?>>
                    </li>
                <?php } ?>
              </ul>

              <div class="carousel-inner">
                <?php $i = 0; ?>
                <?php while( have_rows('page_who_slider') ): the_row();
                  $page_who_slider_slide_type      = get_sub_field('page_who_slider_slide_type');
                  $page_who_slider_image           = get_sub_field('page_who_slider_image');
                  $page_who_slider_blockquote_body = get_sub_field('page_who_slider_blockquote_body');
                  $page_who_slider_blockquote_cite = get_sub_field('page_who_slider_blockquote_cite');
                ?>
                <div class="carousel-item <?php echo $i==0 ? 'active' : ''; $i++; ?>">
                  <?php if ($page_who_slider_slide_type === 'Blockquote'): ?>
                    <div class="contained">
                      <blockquote>
                        <?php echo $page_who_slider_blockquote_body; ?>
                        <cite><?php echo $page_who_slider_blockquote_cite; ?></cite>
                      </blockquote>
                    </div>
                  <?php elseif ($page_who_slider_slide_type === 'Image'): ?>
                    <img src="<?php echo $page_who_slider_image ?>" alt="">
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div><!-- /.gallery-wrapper -->
        <?php endif; ?>
      </div>
    </div><!-- /.section-five -->

    <div class="section-six">
      <div class="contained">
        <h1>Upcoming Events</h1>

        <div class="events-slider-wrapper">
          <div id="events-gallery" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="item-wrapper">
                  <div class="item">
                    <h1>nov</h1>
                    <h2>08</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>

                  <div class="item">
                    <h1>nov</h1>
                    <h2>11</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>

                  <div class="item">
                    <h1>nov</h1>
                    <h2>15</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>

                  <div class="item">
                    <h1>nov</h1>
                    <h2>16</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="item-wrapper">
                  <div class="item">
                    <h1>nov</h1>
                    <h2>08</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>

                  <div class="item">
                    <h1>nov</h1>
                    <h2>11</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>

                  <div class="item">
                    <h1>nov</h1>
                    <h2>15</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>

                  <div class="item">
                    <h1>nov</h1>
                    <h2>16</h2>
                    <h3>Event Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <a href="#" title="">Read More >></a>
                  </div>
                </div>
              </div>
            </div>

            <a class="carousel-control-prev" href="#events-gallery" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#events-gallery" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div><!-- /.events-slider-wrappe -->
      </div>
    </div><!-- /.section-six -->
    <?php endwhile; ?>
  </div><!-- /#page-who-are-we -->
<?php get_footer(); ?>