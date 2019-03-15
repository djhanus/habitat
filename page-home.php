<?php get_header(); /* Template Name: Home Page */ ?>
  	<div class="page-home">

      <a href="<?php echo get_field('featured_banner_url'); ?>"><div class="page-banner"
         style="background-image: url('<?php echo get_field('featured_banner')?>">
      <div class="title"><?php echo get_field('featured_banner_text')?></div>
      </div></a><!-- /.page-banner -->


  		<div class="row one">

        <div class="content-wrapper">
          <a href="/apply/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-module-key.png" /></a>
          <h2><a href="/apply/">Become a Homeowner</a></h2>
          <p><?php echo get_field('homeowner_text')?></p>
          <div class="orange-line"></div>
        </div>

        <div class="content-wrapper">
          <a href="/volunteer/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-module-hammer.png" /></a>
          <h2><a href="/volunteer/">Volunteer</a></h2>
          <p><?php echo get_field('volunteer_text')?></p>
          <div class="orange-line"></div>
        </div>

        <div class="content-wrapper">
          <a href="/restore/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-module-restore.png" /></a>
          <h2><a href="/restore/">ReStore</a></h2>
          <p><?php echo get_field('restore_text')?></p>
          <div class="orange-line"></div>
        </div>

  		</div> <!-- END ROW -->

      <div class="row two" style="background-image: url('<?php echo get_field('background_image')?>">

        <div class="content-wrapper">
            <p><?php echo get_field('mission_statement')?></p>

            <p class="second"><?php echo get_field('mission_statement_subtext')?></p>
        </div>

      </div> <!-- END ROW -->


      <div class="row donate-btn">

          <a href="<?php echo get_field('donate_button_url')?>" target="_blank"><?php echo get_field('donate_button_text')?></a>

      </div>


      <div class="row three">

        <span class="desktop">
          <!-- CALL FUNCTION -->
          <?php
            $families_args = array(
              'post_type'       => 'Families',
              'order'           => 'DSC',
              'posts_per_page'  => '3',
              'post_status'     => 'publish',
            );
            $families_query  = new WP_Query( $families_args );
            if($families_query->have_posts() ) : while ( $families_query->have_posts() ) : $families_query->the_post(); $i++; if(($i % 2) == 0) : ?>

          <!-- OUTPUT CONTAINER -->
          <div class="family-container-A">

            <div class="photo" style="background-image: url('<?php echo get_field('family_photo')?>"></div>

            <div class="description">
              <div class="title"><?php the_title(); ?></div>
              <?php the_excerpt(); ?>
              <div class="button">
                <a href="<?php echo get_permalink(); ?>">READ MORE</a>
              </div>
            </div>
          </div>

          <?php else : ?>

          <div class="family-container-B">

            <div class="photo" style="background-image: url('<?php echo get_field('family_photo')?>"></div>

            <div class="description">
              <div class="title"><?php the_title(); ?></div>
              <?php the_excerpt(); ?>
              <div class="button">
                <a href="<?php echo get_permalink(); ?>">READ MORE</a>
              </div>
            </div>
          </div>

          <?php endif; endwhile; endif; wp_reset_query(); ?>
        </span>

        <span class="responsive">
          <!-- CALL FUNCTION -->
          <?php
            $families_args = array(
              'post_type'       => 'Families',
              'order'           => 'DSC',
              'posts_per_page'  => '1',
              'post_status'     => 'publish',
            );
            $families_query  = new WP_Query( $families_args );
            if($families_query->have_posts() ) : while ( $families_query->have_posts() ) : $families_query->the_post();
          ?>

          <!-- OUTPUT CONTAINER -->
          <div class="family-container-A">

            <div class="photo" style="background-image: url('<?php echo get_field('family_photo')?>"></div>

            <div class="description">
              <div class="title"><?php the_title(); ?></div>
              <?php the_excerpt(); ?>
              <div class="button">
                <a href="<?php echo get_permalink(); ?>">READ MORE</a>
              </div>
            </div>
          </div>

          <?php endwhile; endif; wp_reset_query(); ?>
        </span>
      </div> <!-- END FAMILIES ROW -->


      <div class="row families-btn">

          <a href="<?php echo get_field('families_button_url')?>" target="_blank"><?php echo get_field('families_button_text')?></a>

      </div>



      <div class="row four">

        <div class="events-container">
          <div class="title">Events</div>
          <div class="events-wrapper">
            <span class="desktop">
              <?php
                $event_args = array(
                  'post_type'       => 'Events',
                  'posts_per_page'  => '4',
                  'post_status'     => 'publish',
                  'orderby'         => 'meta_value_num',
                  'order'           => 'ASC',
                  'meta_key'        => 'event_date',
                  'meta_query'  => array(
                    'relation'    => 'OR',
                    array(
                      'key'     => 'event_date',
                      'value'   => date("Ymd"),
                      'compare' => '>='
                    )
                  )

                );
                $events_query  = new WP_Query( $event_args );
                if($events_query->have_posts() ) : while ( $events_query->have_posts() ) : $events_query->the_post();
                $event_date  = get_field('event_date');
              ?>
                <div class="event">
                  <div class="date">
                    <h1><?php echo date("M", strtotime($event_date)); ?></h1>
                    <h2><?php echo date("d", strtotime($event_date)); ?></h2>
                  </div>

                  <div class="time">
                    <?php echo get_field('event_time'); ?>
                  </div>

                  <div class="text">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                    <a href="<?php echo get_permalink(); ?>">Read More >></a>
                  </div>
                </div>
              <?php endwhile; endif; wp_reset_query(); ?>
            </span>

            <span class="responsive">
              <?php
                $event_args = array(
                  'post_type'       => 'Events',
                  'posts_per_page'  => '2',
                  'post_status'     => 'publish',
                  'orderby'         => 'meta_value_num',
                  'order'           => 'ASC',
                  'meta_key'        => 'event_date',
                  'meta_query'  => array(
                    'relation'    => 'OR',
                    array(
                      'key'     => 'event_date',
                      'value'   => date("Ymd"),
                      'compare' => '>='
                    )
                  )

                );
                $events_query  = new WP_Query( $event_args );
                if($events_query->have_posts() ) : while ( $events_query->have_posts() ) : $events_query->the_post();
                $event_date  = get_field('event_date');
              ?>
              <div class="event">
                <div class="date">
                  <h1><?php echo date("M", strtotime($event_date)); ?></h1>
                  <h2><?php echo date("d", strtotime($event_date)); ?></h2>
                </div>

                <div class="time">
                  <?php echo get_field('event_time'); ?>
                </div>

                <div class="text">
                  <h1><?php the_title(); ?></h1>
                  <?php the_excerpt(); ?>
                  <a href="<?php echo get_permalink(); ?>">Read More >></a>
                </div>
              </div>
            <?php endwhile; endif; wp_reset_query(); ?>
            </span>
          </div>
        </div>

        <div class="news-container">
          <div class="title">News</div>
          <div class="grid news-wrapper">
            <span class="desktop">
              <?php
                $news_args = array(
                  'post_type'       => 'post',
                  'order'           => 'DSC',
                  'posts_per_page'  => '6',
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
            </span>

            <span class="responsive">
              <?php
                $news_args = array(
                  'post_type'       => 'post',
                  'order'           => 'DSC',
                  'posts_per_page'  => '3',
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
            </span>
          </div>
        </div>
      </div>

      <div class="sponsors-section">

        <p>Thank you sponsors & supporters </p>

        <div class="sponsors-list">
          <?php echo get_field('sponsors'); ?>
        </div>

      </div>

  	</div> <!-- END HOME PAGE -->


<?php get_footer(); ?>