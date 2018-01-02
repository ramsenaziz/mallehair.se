<?php get_header(); ?>

<section class="blog-columns-section" id="blog-section">
  <div class="container-fluid">

    <div class="row">
      <div class="col-sm"></div>
      <div class="col-sm-6">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="col-sm"></div>
    </div>

    <div class="row">
      <div class="col-sm"></div>
      <div class="col-sm-6">
        <div class="column">

    <?php while(have_posts()) : the_post() ?>
      <div class="blog-post">

        <div style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="image" href="<?php the_permalink() ?>">     
        </div>

        <?php the_content(); ?>

        <span class="date">
          <?php echo get_the_date(); ?>
        </span>

      </div>

      <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-6">
          <hr class="my-4">
          </div>
          <div class="col-sm"></div>
      </div>

        <span class="previous">
          <?php previous_post_link(); ?> 
        </span>
        <span class="next">
          <?php next_post_link(); ?>
         </span>
    <?php endwhile ?>
          </div>
        </div>
        <div class="col-sm"></div>
      </div>

    </div>
  </section> <!--blog-section end-->


  <section class="return-home-section">
    <div class="container-fluid">

      <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-6">
          <div class="text-center">
            <a href="<?php echo get_home_url() ?>" id="return-home">Till startsidan</a>
          </div>
        </div>
        <div class="col-sm"></div>
      </div>
     </div>
  </section> <!--return-home-section end-->

<?php get_footer(); ?>