<?php
/**
 * The comments template file, rendered using comments_template().
 * 
 * @package Potion
 */
?>

<?php if ( post_password_required() ) return; ?>
 
<div id="comments" class="comments-area">

  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
      <?php
        printf( _nx( 'One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title', 'potion' ),
            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
      ?>
    </h2>

    <ol class="comment-list">
      <?php
        wp_list_comments( 'callback=potion_custom_comment' );
      ?>
    </ol>

    <?php
      if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
      <nav class="navigation comment-navigation" role="navigation">
        <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'potion' ); ?></h1>
        <div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'potion' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'potion' ) ); ?></div>
      </nav><!-- .comment-navigation -->
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
      <p class="no-comments">
        <?php _e( 'Comments are closed.' , 'potion' ); ?>
      </p>
    <?php endif; ?>

  <?php endif; // have_comments() ?>

  <?php comment_form(); ?>
 
</div><!-- #comments -->