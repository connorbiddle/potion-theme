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
      <header>
        <div class="header-section">
          Site Name/Logo
        </div>
        <div class="header-section grow">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <div class="header-section">
          Search Button
        </div>
      </header>