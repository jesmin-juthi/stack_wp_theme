      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp">
                  <?php echo get_theme_mod('title_set'); ?> 
                </h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <?php if(get_theme_mod('btn_txt_set')) : ?> 
                  <a href="<?php echo esc_url_raw(get_theme_mod('btn_url_set')) ;?>" class="btn btn-common">
                    <?php echo get_theme_mod('btn_txt_set'); ?> 
                  </a>
                  <?php endif; ?> 
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo get_theme_mod('img_set_url'); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->