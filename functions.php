<?php

require( get_template_directory() . '/inc/enqueue.php' );
require( get_template_directory() . '/inc/customizer.php' );
require( get_template_directory() . '/inc/theme-support.php' );
require( get_template_directory() . '/inc/custom-menus.php' );
require( get_template_directory() . '/inc/custom-comments.php' );

function potion_excerpt_more( $more ) {
	return '...';
}

add_filter('excerpt_more', 'potion_excerpt_more');