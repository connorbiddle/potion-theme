<?php
/**
 * The header template file.
 * 
 * @package Potion
 */
?>

<!doctype html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
      <header class="site-header">
        <div class="site-header__section site-header__logo">
          Site Logo
        </div>
        <div class="site-header__section grow">
          <?php wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'menu_class' => 'site-header__links',
            'container' => false
            ) ); ?>
        </div>
        <div class="site-header__section site-header__buttons">
          <button class="site-header__search-button">
            <i data-feather="search"></i>
          </button>
          <button class="site-header__menu-button until-md">
            <i data-feather="menu"></i>
          </button>
        </div>
      </header>