<?php
/**
 * The main template file, displaying recent posts.
 * 
 * @package Potion
 */
?>

<?php

get_header();

if (have_posts()):
  while (have_posts()):
    the_post();
    get_template_part("template-parts/content/content");
  endwhile;
else:
  get_template_part("template-parts/content/content-none");
endif;

get_footer(); ?>