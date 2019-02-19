<?php get_header(); /* Template Name: Events */ ?>

  <div id="page-events">

<div class="events-container">
          <div class="title">Events</div>
          <div class="events-wrapper">

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

                <div class="text">
                  <h1><?php the_title(); ?></h1>
                  <?php the_excerpt(); ?>
                  <a href="<?php echo get_permalink(); ?>">Read More >></a>
                </div>
              </div>
            <?php endwhile; endif; wp_reset_query(); ?>
          </div>

          <a href="#" class="see-all">See All Events</a>
        </div>

        
  </div>
<?php get_footer(); ?>