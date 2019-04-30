<?php get_header(); /* Template Name: ReStore */ ?>

  <div id="page-restore">

    <div class="page-banner"
      style="background-image: url('<?php echo get_field('image_hero_banner')?>">
      <div class="title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-restore-small.png"></div>
    </div><!-- /.page-banner -->

    <div class="section-one">
      <div class="left">
        <p><?php echo get_field('section_one_text')?></p>
      </div>

      <div class="right">
        <?php echo get_field('section_one_address_hours')?>
      </div>
    </div>

    <div class="section-two">
      <div class="container">
        <div class="column">
          <a href="https://www.facebook.com/monroecountyhabitat" target="_blank">
            <i class="fas fa-shopping-cart"></i>
            <div class="title">
              Shop
            </div>
          </a>
        </div>

        <div class="column">
          <a href="https://monroecountyhabitat.vonigo.com/external/#0.36312839549887665" target="_blank">
            <i class="fas fa-gift"></i>
            <div class="title">
              Donate
            </div>
          </a>
        </div>

        <div class="column">
          <a href="https://mcrestore.appointy.com/" target="_blank">
            <i class="far fa-envelope"></i>
            <div class="title">
              Volunteer
            </div>
          </a>
        </div>
      </div>

      <div class="text-container">
        <div class="text"><?php echo get_field('donations_introduction'); ?></div>
      </div>
    </div>

    <div class="section-three">
      <div class="contained">
        <div class="left">
          <div class="title">
            Drop-off donations:
          </div>
          <?php echo get_field('section_three_text')?>
        </div>

        <div class="right">
          <div class="title">
            Free Pickup Service:
          </div>
          <p>Have a larger donation that you cannot bring to us? No problem!</p>
          <a href="<?php echo get_field('section_three_button')?>">Click here to schedule a free pickup</a>
          <p style="font-size: 12px; padding: 10px 0px;">
          <em>For more details or assistance scheduling your donation pickup, call us at <?php echo get_field('section_three_phone')?>.</em>
          </p>
        </div>
      </div>
    </div>

    <div class="section-four">
      <div class="left">
        <div class="title">
          <i class="far fa-heart"></i> Items We Love
        </div>
        <?php echo get_field('items_we_love'); ?>

        <p>Don't see your item listed? Please call us at <?php echo get_field('section_three_phone')?>.</p>
      </div>

      <div class="right">
        <div class="title">
         <i class="far fa-times-circle"></i> Items We Cannot Accept
        </div>
        <?php echo get_field('items_we_cannot_love'); ?>
      </div>
    </div>

    <div class="section-five">
      <div class="left">
        <?php echo get_field('video_text'); ?>
      </div>
      <div class="right">
        <div class="embed-container">
          <?php the_field('video_url'); ?>
        </div>
      </div>
    </div>

    <div class="section-six">
      <div class="left">
        <img src="<?php echo get_field('facebook_image'); ?>">
      </div>
      <div class="right">
        <p>
          <a href="<?php echo get_field('facebook_url', 'option'); ?>" target="_blank">
            <i class="fab fa-facebook-f"></i>
            <span><?php echo get_field('facebook_text'); ?></span>
          </a>
        </p>
      </div>
    </div>

    <div class="section-seven">
      <div class="title">
        <i class="fab fa-instagram"></i>
      </div>
      
      <div class="ig-imgs-wrapper">
        <script>
          const url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=1591902149.18d0d5d.a480da932eca4f04b778fae1e63f716a';
          fetch(url)
          .then(data => { return data.json() })
          .then(res => {
            imgUrls = res.data
            let igWrapper = document.querySelector('.ig-imgs-wrapper');
            for (var i = 0; i <= 7; i++) {
              var imgUrls = res.data[i];
              let imgURL = `<a href="${imgUrls.link}"><img src="${imgUrls.images.low_resolution.url}"></a>`;
              igWrapper.innerHTML += imgURL;
            }
          })
          .catch(err => { console.log(err) });
        </script>
      </div>
    </div>

  </div>
<?php get_footer(); ?>