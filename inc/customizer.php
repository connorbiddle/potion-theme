<?php

function potion_customize_register( $wp_customize ) {
  // Settings
  $wp_customize->add_setting( 'primary_color' , array(
    'default'   => '#dc293c'
  ) );
  $wp_customize->add_setting( 'slide_count' , array(
    'default'   => 3
  ) );

  // Sections
  $wp_customize->add_section( 'potion_settings' , array(
    'title'      => 'Potion ' . __( 'Settings', 'potion' ),
    'priority'   => 1,
  ) );

  // Controls
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
    'label'      => __( 'Primary Color', 'potion' ),
    'section'    => 'potion_settings',
    'settings'   => 'primary_color',
  ) ) );
  $wp_customize->add_control( 'slide_count', array(
    'label'     => __( 'Post Slider Slide Count', 'potion' ),
    'section'   => 'potion_settings',
    'settings'  => 'slide_count',
    'type'      => 'number'
  ) );
}

function potion_custom_css() {
  $color = get_theme_mod( 'primary_color' );
  $custom_css = "
    :root {
      --primaryColor: {$color};
    }";
  wp_add_inline_style( 'style', $custom_css );
}

add_action( 'customize_register', 'potion_customize_register' );
add_action( 'wp_enqueue_scripts', 'potion_custom_css' );