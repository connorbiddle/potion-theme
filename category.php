<?php
/**
 * The category archive template.
 * 
 * @package Potion
 */
?>

<?php
  get_header();
  $category_image = get_the_post_thumbnail_url();
    $showcase_class = $category_image
    ? "showcase showcase--page"
    : "showcase showcase--page no-image";
?>

<section class="<?php echo $showcase_class; ?>">
  <?php if ( $category_image ): ?>
    <img class="showcase__image" src="<?php echo $category_image; ?>" alt="">
  <?php endif; ?>
  <div class="container--narrow showcase__contents">
    <h2 class="showcase__title"><?php single_cat_title(); ?></h2>
  </div>
</section>

<main class="main">
  <div class="container--narrow">
    <?php
      if ( have_posts() ):
        while ( have_posts() ):
          the_post();
          get_template_part( 'template-parts/content/content' );
        endwhile;
        the_posts_pagination();
      else:
        get_template_part( 'template-parts/content/content-none' );
      endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>