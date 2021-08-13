<?php
  $post_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : null;
?>

<section class="showcase showcase--page">
  <?php if ( $post_thumbnail ): ?>
    <img class="showcase__image" src="<?php echo $post_thumbnail; ?>" alt="">
  <?php endif; ?>
  <div class="container--narrow showcase__contents">
    <h2 class="showcase__title"><?php the_title(); ?></h2>
  </div>
</section>

<main class="main">
  <div class="container--narrow">
    <article class="page">
      <div>
        <?php
          the_content();
          wp_link_pages( array(
            'next_or_number'  => 'next',
            'before'          => null,
            'after'           => null
          ) );  
        ?>
      </div>
    </article>
  </div>
</main>