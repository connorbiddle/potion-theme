<footer class="site-footer">
  Hello, I'm a footer

  <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
    <div class="site-footer__widgets">
      <?php dynamic_sidebar( 'footer_widgets' ); ?>
    </div>
  <?php endif; ?>
</footer>