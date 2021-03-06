<?php
  $post_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : null;
  $showcase_class = "showcase showcase--slider";
  $showcase_class =
    $post_thumbnail ? $showcase_class : $showcase_class . " no-thumbnail";
?>

<div class="swiper-slide">
  <div class="<?php echo $showcase_class; ?>">
    <?php if ( $post_thumbnail ): ?>
      <img class="showcase__image" src="<?php echo $post_thumbnail; ?>" alt="">
    <?php endif; ?>
    <div class="container showcase__contents">
      <h2 class="showcase__title"><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>" class="button">
        View Article
      </a>
    </div>
  </div>
</div>