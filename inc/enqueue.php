<?php

function potion_enqueue_scripts() {
  // Styles
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', false );

  // Scripts
  wp_enqueue_script( 'feather', 'https://unpkg.com/feather-icons', false );
  wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', false );
}

add_action( 'wp_enqueue_scripts', 'potion_enqueue_scripts' );
