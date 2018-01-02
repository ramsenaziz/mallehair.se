<?php get_header(); ?>

        <section class="blog-columns-section" id="blog-columns-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <?php while(have_posts()) : the_post() ?>

                  <div class="blog-post">
                    <a style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="thumbnail" href="<?php the_permalink() ?>">     
                    </a>
                    <a class="title" href="<?php the_permalink() ?>">
                      <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php the_excerpt(); ?></p>
                    <span class="date">
                      <?php echo get_the_date(); ?>
                    </span>
                  </div>
                <?php endwhile ?>
              </div>
              <div class="col-sm"></div>
            </div>

            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm">
                <div class="previous"><?php next_posts_link( 'Ädre inlägg' ); ?></div>
                <div class="next"><?php previous_posts_link( 'Senare inlägg' ); ?></div>
              </div>
              <div class="col-sm"></div>
            </div>
          </div>
        </section> <!--end blog-section-->

<?php get_footer(); ?>