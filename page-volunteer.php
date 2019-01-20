<?php get_header(); /* Template Name: Volunteer Page */ ?>
  <div id="page-volunteer">
    <?php while ( have_posts() ): the_post();
      $image_hero_banner          = get_field('image_hero_banner');

      $volunteer_sc_title        = get_field('volunteer_sc_title');
      $volunteer_sc_built_count  = get_field('volunteer_sc_built_count');
      $volunteer_sc_served_count = get_field('volunteer_sc_served_count');

      $page_volunteer_divider_background_image  = get_field('page_volunteer_divider_background_image');
      $page_volunteer_divider_text = get_field('page_volunteer_divider_text');

      $volunteer_sf_title         = get_field('volunteer_sf_title');
      $volunteer_sf_hours_count   = get_field('volunteer_sf_hours_count');
      $volunteer_sf_savings_count = get_field('volunteer_sf_savings_count');

      $volunteer_sseven_title     = get_field('volunteer_sseven_title');
      $volunteer_sseven_body     = get_field('volunteer_sseven_body');

      $volunteer_sseven_certified_crew_lead_list_heading = get_field('volunteer_sseven_certified_crew_lead_list_heading');
      $volunteer_sseven_crew_lead_list_heading = get_field('volunteer_sseven_crew_lead_list_heading');
    ?>
    <div class="page-banner"
         style="background-image: url('<?php echo $image_hero_banner; ?>')">
      <div class="title"><?php the_title(); ?></div>
    </div><!-- /.page-banner -->

    <div class="section-one">
      <div class="contained">
        <h1><?php echo $volunteer_sc_title; ?></h1>
        <div>
          <h2>built nearly</h2>
          <h3 class="count-animation"><?php echo $volunteer_sc_built_count; ?></h3>
          <h4>homes</h4>
        </div>

        <div>
          <h2>served more than</h2>
          <h3 class="count-animation"><?php echo $volunteer_sc_served_count; ?></h3>
          <h4>people</h4>
        </div>
      </div>
    </div><!-- /.section-one -->

    <div class="section-two"
         style="background-image: url('<?php echo $page_volunteer_divider_background_image; ?>')">
      <div class="contained">
        <h1><?php echo $page_volunteer_divider_text; ?></h1>
      </div>
    </div><!-- /.section-two -->

    <div class="section-three">
      <div class="contained">
        <h1><?php echo $volunteer_sf_title; ?></h1>
        <div>
          <h2>almost</h2>
          <h3><?php echo $volunteer_sf_hours_count; ?></h3>
          <h4>hours of time</h4>
        </div>

        <div>
          <h2>saving us about</h2>
          <h3>$<?php echo $volunteer_sf_savings_count; ?> million</h3>
          <h4>annually</h4>
        </div>
      </div>
    </div><!-- /.section-three -->

    <div class="section-four">
      <div class="contained">
        <h1>Ways to Get Involved</h1>
        <?php if( have_rows('volunteer_expands') ): ?>
          <?php while( have_rows('volunteer_expands') ): the_row(); ?>
            <details>
              <summary><span><?php the_sub_field('volunteer_expands_title'); ?></span>
                <button>
                  <svg width="67px" height="67px" viewBox="0 0 67 67" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <defs>
                          <polyline id="path-1" points="25.9003906 18.4350586 43.2832031 33.4455566 25.9003906 48.3596191"></polyline>
                      </defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <circle id="Oval" stroke="#F37E43" stroke-width="2" fill-rule="nonzero" cx="33.4731445" cy="33.5268555" r="32.4731445"></circle>
                          <g id="Path-2" stroke-linecap="round" fill-rule="nonzero" stroke="#F37E43">
                              <use stroke-width="2" xlink:href="#path-1"></use>
                              <use stroke-width="1" xlink:href="#path-1"></use>
                          </g>
                      </g>
                  </svg>
                </button>
              </summary>
              <?php the_sub_field('volunteer_expands_body'); ?>
            </details>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.section-four -->

    <div class="section-five">
      <div class="left">
        <h1>Sign up to volunteer here!</h1>

        <div>
          <h2>I am a first time volunteer.</h2>
          <ol>
            <li>Please submit a <a href="#" title=""><strong>Volunteer Information Form</strong></a></li>
            <li>Register for your shift below!</li>
          </ol>
        </div>

        <div>
          <h2>I am a returning volunteer.</h2>
          <p>Skip the Volunteer Information Form and register for your shift below!</p>
        </div>
      </div>

      <div class="right">
        <h2>Learn more about us and prepare for your volunteer experience.</h2>
        <h3>Helpful Links</h3>
        <ul>
          <?php if( have_rows('volunteer_ss_helpful_links') ): ?>
            <?php while( have_rows('volunteer_ss_helpful_links') ): the_row(); ?>
              <li>
                <a href="<?php echo the_sub_field('volunteer_ss_hl_link_url'); ?>" title="<?php echo the_sub_field('volunteer_ss_hl_link_text'); ?>"><?php echo the_sub_field('volunteer_ss_hl_link_text'); ?></a>
                <?php if( !empty(get_sub_field('volunteer_ss_hl_below_text')) ): ?>
                  <br>
                  <i><?php the_sub_field('volunteer_ss_hl_below_text'); ?></i>
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div><!-- /.section-five -->

    <div class="section-six">
      <a href="#" title="Volunteer Registration Form">Volunteer Registration Form</a>
    </div><!-- /.section-six -->

    <div class="section-seven">
      <div class="contained">
        <h1><?php echo $volunteer_sseven_title; ?></h1>
        <div class="text-wrapper">
          <div class="text">
            <?php echo $volunteer_sseven_body; ?>

            <h2><?php echo $volunteer_sseven_certified_crew_lead_list_heading; ?></h2>
            <ol>
              <?php if( have_rows('volunteer_sseven_certified_crew_lead_list') ): ?>
                <?php while( have_rows('volunteer_sseven_certified_crew_lead_list') ): the_row(); ?>
                  <li><?php the_sub_field('volunteer_sseven_ccl_list_item'); ?></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ol>
          </div>

          <div class="text">
            <h2><?php echo $volunteer_sseven_crew_lead_list_heading; ?></h2>

            <ol>
              <?php if( have_rows('volunteer_sseven_crew_lead_list') ): ?>
                <?php while( have_rows('volunteer_sseven_crew_lead_list') ): the_row(); ?>
                  <li><?php the_sub_field('volunteer_sseven_cl_list_item'); ?></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ol>
          </div>

          <div class="text">
            <?php the_field('volunteer_sseven_green_block_text'); ?>
          </div>
        </div><!-- /.text-wrapper -->
      </div>
    </div><!-- /.section-seven -->

    <div class="section-eight">
      <div class="contained">
        <?php if( have_rows('volunteer_seight_expands') ): ?>
          <?php while( have_rows('volunteer_seight_expands') ): the_row(); ?>
            <details>
              <summary><span><?php the_sub_field('volunteer_seight_expands_title'); ?></span>
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
                <div class="left">
                  <div class="text">
                    <?php the_sub_field('volunteer_seight_expands_body'); ?>
                  </div>
                </div>

                <div class="right">
                  <h2>PAST PROJECTS</h2>
                  <ul>
                    <?php if( have_rows('volunteer_seight_expands_past_projects_list') ): ?>
                      <?php while( have_rows('volunteer_seight_expands_past_projects_list') ): the_row(); ?>
                        <li><?php the_sub_field('volunteer_seight_expands_past_project_item'); ?>: <?php the_sub_field('volunteer_seight_expands_past_project_text'); ?></li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>

              <div class="socials">
                <div>
                  <?php if( have_rows('volunteer_seight_expands_socials') ): ?>
                    <?php while( have_rows('volunteer_seight_expands_socials') ): the_row(); ?>
                      <a href="<?php the_sub_field('volunteer_seight_socials_facebook_url'); ?>" title="Facebook">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" class="facebook"><path fill="" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" class=""></path></svg>
                      </a>

                      <a href="<?php the_sub_field('volunteer_seight_socials_twitter_url'); ?>" title="Twitter">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="twitter"><path fill="" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg>
                      </a>

                      <a href="<?php the_sub_field('volunteer_seight_socials_instagram_url'); ?>" title="Instagram">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="instagram"><path fill="" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg>
                      </a>

                      <a href="<?php the_sub_field('volunteer_seight_socials_youtube_url'); ?>" title="Youtube">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="youtube"><path fill="" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class=""></path></svg>
                      </a>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </details>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.section-eight -->

    <div class="section-nine">
      <div class="contained">
        <?php if( get_field('volunteer_slider') ): ?>
        <div class="gallery-wrapper">
          <div id="who-gallery"
               class="carousel slide"
               data-ride="carousel">
            <?php if( have_rows('volunteer_slider') ): ?>
              <ul class="carousel-indicators">
                <?php
                  $slides = get_field_object('volunteer_slider');
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
                <?php while( have_rows('volunteer_slider') ): the_row();
                  $volunteer_slider_slide_type      = get_sub_field('volunteer_slider_slide_type');
                  $volunteer_slider_image           = get_sub_field('volunteer_slider_image');
                  $volunteer_slider_blockquote_body = get_sub_field('volunteer_slider_blockquote_body');
                  $volunteer_slider_blockquote_cite = get_sub_field('volunteer_slider_blockquote_cite');
                ?>
                <div class="carousel-item <?php echo $i==0 ? 'active' : ''; $i++; ?>">
                  <?php if ($volunteer_slider_slide_type === 'Blockquote'): ?>
                    <div class="contained">
                      <blockquote>
                        <?php echo $volunteer_slider_blockquote_body; ?>
                        <cite><?php echo $volunteer_slider_blockquote_cite; ?></cite>
                      </blockquote>
                    </div>
                  <?php elseif ($volunteer_slider_slide_type === 'Image'): ?>
                    <img src="<?php echo $volunteer_slider_image ?>" alt="">
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div><!-- /.gallery-wrapper -->
        <?php endif; ?>
      </div>
    </div><!-- /.section-nine -->
  <?php endwhile; ?>
  </div><!-- /#page-volunteer -->
<?php get_footer(); ?>