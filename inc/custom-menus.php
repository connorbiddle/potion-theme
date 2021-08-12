<?php

function potion_custom_menus() {
  register_nav_menus(array(
    'header-menu' => __( 'Header Menu' )
  ) );
}

function potion_widget_areas() {
	register_sidebar( array(
		'name'          => 'Footer Widgets',
		'id'            => 'footer_widgets',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'init', 'potion_custom_menus' );
add_action( 'widgets_init', 'potion_widget_areas' );
