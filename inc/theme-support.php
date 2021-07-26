<?php

function potion_custom_logo() {
  add_theme_support( 'custom-logo', array(
    'height'               => 112.5,
    'width'                => 200,
    'flex-height'          => true,
    'flex-width'           => true
  ) );
}

function potion_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'potion_custom_logo' );
add_action( 'after_setup_theme', 'potion_post_thumbnails' );
