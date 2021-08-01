<?php 
add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'menu');
add_filter('wpcf7_spam', '__return_false');




function menu(){
	register_nav_menu('mainMenu', 'главное меню');; 
}

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
 ?>