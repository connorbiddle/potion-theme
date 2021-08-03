<?php
  $avatar = get_avatar_url(get_the_author_meta( 'id' ), array( 'size' => 32 ));
?>

<article class="post-preview">
  <header class="post-preview__header">
    <a href="<?php the_permalink(); ?>">
      <figure class="post-preview__thumbnail">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      </figure>
      <h2 class="post-preview__title"><?php the_title(); ?></h2>
    </a>
    <div class="post-preview__meta">
      <img src="<?php echo $avatar; ?>" alt="">
      Written by <?php the_author(); ?>
    </div>
  </header>
  <div class="post-preview__content">
    <?php the_excerpt(); ?>
    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
  </div>
</article>