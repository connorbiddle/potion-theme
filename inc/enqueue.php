<?php

function potion_enqueue_scripts() {
  // Styles
  wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@6.0.0/swiper-bundle.min.css', false );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', false );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'swiper-css' ) );
  
  // Scripts
  wp_enqueue_script( 'feather', 'https://unpkg.com/feather-icons', false );
  wp_enqueue_script( 'swiper-lib-js', 'https://unpkg.com/swiper@6.0.0/swiper-bundle.min.js', false );
  wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper.js', array('swiper-lib-js') );
  wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', false );
}

add_action( 'wp_enqueue_scripts', 'potion_enqueue_scripts' );
