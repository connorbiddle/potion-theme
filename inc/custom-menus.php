<?php

function potion_custom_menus() {
  register_nav_menus(array(
    'header-menu' => __( 'Header Menu' ),
    'footer-menu' => __( 'Footer Menu' )
  ) );
}

add_action( 'init', 'potion_custom_menus' );
