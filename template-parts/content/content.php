<?php $avatar_url = get_avatar_url(get_the_author_meta( 'id' ), array(
  'size' => 32
))  ?>

<a class="post-preview" href="<?php the_permalink(); ?>">
  <article>
    <header class="post-preview__header">
      <figure class="post-preview__thumbnail">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      </figure>
      <h2 class="post-preview__title"><?php the_title(); ?></h2>
      <div class="post-preview__meta">
        <img src="<?php echo $avatar_url; ?>" alt="">
        Written by <?php the_author(); ?>
      </div>
    </header>
    <div class="post-preview__content"><?php the_excerpt(); ?></div>
  </article>
</a>