<?php get_header(); ?>

<section class="blog-content">
  <div class="container">
    <?php while(have_posts()) : the_post() ?>
      <?php echo the_content() ?>
    <?php endwhile ?>
  </div> <!-- container end -->
</section> <!-- blog-content -->

<?php get_footer(); ?>