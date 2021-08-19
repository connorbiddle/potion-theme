<?php
/**
 * Template Name: Search Page
 * 
 * The search page template.
 * 
 * @package Potion
 */
?>

<?php
  get_header();
  $search_image = get_the_post_thumbnail_url();
  $showcase_class = $search_image
    ? "showcase showcase--page"
    : "showcase showcase--page no-image";
?>

<section class="<?php echo $showcase_class; ?>">
  <?php if ( $search_image ): ?>
    <img class="showcase__image" src="<?php echo $search_image; ?>" alt="">
  <?php endif; ?>
  <div class="container--narrow showcase__contents">
    <h2 class="showcase__title">
      Results for &ldquo;<?php the_search_query(); ?>&rdquo;
    </h2>
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