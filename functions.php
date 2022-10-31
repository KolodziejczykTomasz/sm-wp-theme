<?php 
function reg_mymenu() {
  register_nav_menu('header-menu',__( 'Menu główne' ));
}
add_action( 'init', 'reg_mymenu');


add_filter('nav_menu_css_class', 'nav_css_filter', 10, 1);
add_filter('nav_menu_item_id', 'nav_css_filter', 10, 1);
add_filter('page_css_class', 'nav_css_filter', 10, 1);
 
function nav_css_filter($classes) {
   $current = array('current-menu-item', 'current-menu-parent', 'current-menu-ancestor', 'current-page-ancestor');
   if (is_array($classes)) {
      $classes = array_intersect($classes, $current);
   } else {
      $classes = '';
   }
   return $classes;
}

add_filter('wp_nav_menu_items', 'wcr_wp_nav_menu_items', 11, 2);

function wcr_wp_nav_menu_items($items, $args) {
	$separator = '&middot;';
	
	// process the list
	$document = new DOMDocument();
	$document->loadHTML(mb_convert_encoding($items, 'HTML-ENTITIES', 'UTF-8'));

	$lis = $document->getElementsByTagName('li');

	if (empty($lis)) {
		return $items;
	}

	// rebuild the list
	$new_items = array();
	foreach ($lis as $li) {
		$new_items[] = $document->saveXML($li);
	}

	return implode($separator, $new_items);
}

?>