<?php
/**
 * The main template file, displaying recent posts.
 * 
 * @package Potion
 */
?>

<?php
  get_header();

  $slider_query = new WP_Query( array(
    'post_type'       => 'post',
    'posts_per_page'  => 3
  ) );

  if ( $slider_query->have_posts() ): ?>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
          while ( $slider_query->have_posts() ):
            $slider_query->the_post();
            get_template_part('template-parts/content/content-slide');
          endwhile;
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
<?php
  else:
    echo '<h1>No posts found!</h1>';
  endif;
  wp_reset_postdata();
?>



<!-- <div class="container">
  <?php
    if ( have_posts() ):
      while ( have_posts() ):
        the_post();
        get_template_part( 'template-parts/content/content' );
      endwhile;
    else:
      get_template_part( 'template-parts/content/content-none' );
    endif;
  ?>
</div> -->


<?php get_footer(); ?>