<?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
  <footer class="site-footer">
    <div class="site-footer__content">
      <?php dynamic_sidebar( 'footer_widgets' ); ?>
    </div>
  </footer>
  <?php endif; ?>