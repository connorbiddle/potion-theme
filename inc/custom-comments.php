<?php

function potion_custom_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
				<?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
        <cite class="fn"><?php comment_author_link(); ?></cite>
        <span class="date">
          <?php echo get_comment_date() . ', ' . get_comment_time(); ?>
        </span>
        <?php edit_comment_link(__('Edit', 'potion')) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
				<p><?php _e('Your comment is awaiting moderation.') ?></p>
				<br />
      <?php endif; ?>
      <div class="comment-content">
        <?php comment_text() ?>
      </div>

      <div class="reply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
	<?php
}