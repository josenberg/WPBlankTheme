<?php 
/* --------------------------------------------------
   Funções de otimização
   -------------------------------------------------- */

// Remove 'sujeira' do header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles'    , 'print_emoji_styles');
remove_action('admin_print_styles' , 'print_emoji_styles');


// adiciona o htmlshim se for ie 9-
function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');


// cria os elementos html5 caso seja ie
function add_ie_html5 () {
	echo '<!--[if IE]>';
	echo '<script>';
	echo 'document.createElement("header");';
	echo 'document.createElement("main");';
	echo 'document.createElement("nav");';
	echo 'document.createElement("footer");';
	echo 'document.createElement("article");';
	echo 'document.createElement("section");';
	echo 'document.createElement("figcaption");';
	echo 'document.createElement("figure");';
	echo 'document.createElement("time");';
	echo '</script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5');