<?php get_header(); /* Template Name: Ways to Give */ ?>
  <div id="page-ways-to-give">
    <?php while ( have_posts() ): the_post();
      $image_hero_banner          = get_field('image_hero_banner');
      $section_one_paragraph      = get_field('section_one_paragraph');
      $section_one_image          = get_field('section_one_image');

      $option_1_title          = get_field('option_1_title');
      $option_1_text          = get_field('option_1_text');
      $option_2_title          = get_field('option_2_title');
      $option_2_text          = get_field('option_2_text');
      $option_3_title          = get_field('option_3_title');
      $option_3_text          = get_field('option_3_text');
    ?>
    <div class="page-banner"
         style="background-image: url('<?php echo $image_hero_banner; ?>')">
      <div class="title"><?php the_title(); ?></div>
    </div><!-- /.page-banner -->

    <div class="section-one">
      <div class="left">
        <p><?php echo $section_one_paragraph; ?></p>
      </div>

      <div class="right"
        style="background-image: url('<?php echo $section_one_image; ?>')">
      </div>
    </div>

    <div class="section-two">      

      <div class="contained">

        <div class="content-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-mail.png" />
          <h2><?php echo $option_1_title; ?></h2>
          <p><?php echo $option_1_text; ?></p>
        </div>

        <div class="content-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-computer.png" />
          <h2><?php echo $option_2_title; ?></h2>
          <p><?php echo $option_2_text; ?></p>
        </div>

        <div class="content-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-gift.png" />
          <h2><?php echo $option_3_title; ?></h2>
          <p><?php echo $option_3_text; ?></p>
        </div>
      </div>
    </div> <!-- end section two -->

    <!-- expanding sections -->
    <div class="expanding-section">
      <div class="contained">
        <?php if( have_rows('waystogive_expands') ): ?>
          <?php while( have_rows('waystogive_expands') ): the_row(); ?>
            <details>
              <summary><span><?php the_sub_field('waystogive_expands_title'); ?></span>
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
                <div class="container">
                  <div class="left">
                    <div class="text">
                      <?php the_sub_field('waystogive_expands_body'); ?>
                    </div>
                  </div>

                  <div class="right">
                    <div class="text">
                      <?php the_sub_field('waystogive_expands_body_right'); ?>
                    </div>
                  </div>

                  <div class="socials">
                    <div>
                      <?php if( have_rows('waystogive_expands_socials') ): ?>
                        <?php while( have_rows('waystogive_expands_socials') ): the_row(); ?>
                          <a href="<?php the_sub_field('waystogive_socials_facebook_url'); ?>" title="Facebook">
                            <svg aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" class="facebook"><path fill="" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" class=""></path></svg>
                          </a>

                          <a href="<?php the_sub_field('waystogive_socials_twitter_url'); ?>" title="Twitter">
                            <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="twitter"><path fill="" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg>
                          </a>

                          <a href="<?php the_sub_field('waystogive_socials_instagram_url'); ?>" title="Instagram">
                            <svg aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="instagram"><path fill="" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg>
                          </a>

                          <a href="<?php the_sub_field('waystogive_socials_youtube_url'); ?>" title="Youtube">
                            <svg aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="youtube"><path fill="" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class=""></path></svg>
                          </a>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </details>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.expanding-section -->

    <!-- testimonials -->
    <div class="testimonials">
      <div class="contained">
        <?php if( get_field('waystogive_slider') ): ?>
        <div class="gallery-wrapper">
          <div id="who-gallery"
               class="carousel slide"
               data-ride="carousel">
            <?php if( have_rows('waystogive_slider') ): ?>
              <ul class="carousel-indicators">
                <?php
                  $slides = get_field_object('waystogive_slider');
                  $slides_count = (count($slides['value']));
                  for ($i=0; $i<$slides_count; $i++) { ?>
                    <li data-target="#who-gallery"
                        data-slide-to="<?php echo $i; ?>"
                        <?php if ($i == 0) { ?>
                          class="active"
                        <?php } ?>>
                    </li>
                <?php } ?>
              </ul>

              <div class="carousel-inner">
                <?php $i = 0; ?>
                <?php while( have_rows('waystogive_slider') ): the_row();
                  $waystogive_slider_slide_type      = get_sub_field('waystogive_slider_slide_type');
                  $waystogive_slider_image           = get_sub_field('waystogive_slider_image');
                  $waystogive_slider_blockquote_body = get_sub_field('waystogive_slider_blockquote_body');
                  $waystogive_slider_blockquote_cite = get_sub_field('waystogive_slider_blockquote_cite');
                ?>
                <div class="carousel-item <?php echo $i==0 ? 'active' : ''; $i++; ?>">
                  <?php if ($waystogive_slider_slide_type === 'Blockquote'): ?>
                    <div class="contained">
                      <blockquote>
                        <?php echo $waystogive_slider_blockquote_body; ?>
                        <cite><?php echo $waystogive_slider_blockquote_cite; ?></cite>
                      </blockquote>
                    </div>
                  <?php elseif ($waystogive_slider_slide_type === 'Image'): ?>
                    <img src="<?php echo $waystogive_slider_image ?>" alt="">
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div><!-- /.gallery-wrapper -->
        <?php endif; ?>
      </div>
    </div><!-- /.testimonials -->

    <?php endwhile; ?>
  </div><!-- /#page-ways-to-give -->
<?php get_footer(); ?>