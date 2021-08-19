<?php
/**
 * The search form template, rendered using get_search_form().
 * 
 * @package Potion
 */
?>

<form id="searchform" class="search-form" method="get" action="<?php echo home_url( '/' ); ?>">
  <input type="text" class="search-field" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
  <button type="submit" class="search-submit">
    <i data-feather="search"></i>
  </button>
</form>