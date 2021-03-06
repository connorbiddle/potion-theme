<header class="site-header">
  <div class="site-header__section site-header__logo">
    <?php
      if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ):
        the_custom_logo();
      else: ?>
        <a href="<?php home_url(); ?>">
          <h1><?php bloginfo( 'name' ); ?></h1>
        </a> <?php
      endif;
    ?>
  </div>
  <div class="site-header__section">
    <?php
      wp_nav_menu( array(
        'theme_location'  => 'header-menu',
        'menu_class'      => 'site-header__links',
        'container'       => false,
        'depth'           => 2
      ) );
    ?>
  </div>
  <div class="site-header__section site-header__buttons">
    <button class="site-header__search-button">
      <i data-feather="search"></i>
    </button>
    <button class="site-header__menu-button until-md">
      <i data-feather="menu"></i>
    </button>
  </div>
  <div class="site-header__search-modal">
    <?php get_search_form(); ?>
  </div>
</header>