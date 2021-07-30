<?php
  $post_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : null;
?>

<section class="showcase">
  <?php if ( $post_thumbnail ): ?>
    <img class="showcase__image" src="<?php echo $post_thumbnail; ?>" alt="">
  <?php endif; ?>
  <div class="container--narrow showcase__contents">
    <?php the_category(); ?>
    <h2 class="showcase__title"><?php the_title(); ?></h2>
  </div>
</section>

<main class="main">
  <div class="container--narrow">
    <article class="single">
      <header class="single__header">
        <?php the_excerpt(); ?>
        <div class="single__meta">
          Posted by <?php the_author(); ?> | <?php echo get_the_date(); ?>
        </div>
      </header>
      <div>
        <?php the_content(); ?>
      </div>
    </article>
  </div>
</main>