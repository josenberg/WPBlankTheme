<?php 
/* --------------------------------------------------
   Funções de assets
-------------------------------------------------- */
// Carrega Scripts, CSS e Google Font no header.php
function header_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		
		// Estilos CSS
		wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
		wp_enqueue_style('reset');

		wp_register_style('grid', get_template_directory_uri() . '/css/grid.css', array(), '1.0', 'all');
		wp_enqueue_style('grid');

		wp_register_style('style', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
		wp_enqueue_style('style');
		
		//Boostrap CSS
		wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.0', 'all');
		wp_enqueue_style('bootstrap-css');
	
		// remove script nativo, deixa o WP mais rápido
		wp_deregister_script( 'l10n' );

		// Remove jQuery do WP
		wp_deregister_script('jquery');
		
		// jQuery
		wp_register_script('jquery', '//code.jquery.com/jquery-3.1.1.min.js', array(), '2.0.0');
		wp_enqueue_script('jquery');

		// Javascript principal
		wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0');
		wp_enqueue_script('main');

		// Javascript para definicao de plugins
		wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0');
		wp_enqueue_script('plugins');
		
		//Boostrap JS
		wp_register_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.0');
		wp_enqueue_script('bootstrap-js');

		// Google Fonts
		//wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Viga|Dosis:600,700', array(), '1.0', 'all');
		//wp_enqueue_style( 'googleFonts');
	}
}
add_action('wp_enqueue_scripts', 'header_scripts');


// Carrega Script, CSS  no footer.php
function footer_scripts() {
if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
// Funções scripts
}
}
add_action('wp_footer', 'footer_scripts');
