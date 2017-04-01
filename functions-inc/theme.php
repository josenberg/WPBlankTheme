<?php 
/* --------------------------------------------------
   Funções do thema
-------------------------------------------------- */

// Registra Menus
function register_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
	register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
	register_nav_menu('extra-menu',__( 'Extra Menu' ));
}
add_action( 'init', 'register_menu' );

// Troca o aspecto da tela de login
function login_page() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.svg");
			padding-bottom: 30px;
			background-size: 100%;
			width: 320px;
			height: 91px;
			background-position: 0;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_page' );


//	Tamanho máximo de inserção de conteúdo Impede de user colocoar imagem grande e quebra de layout
if (!isset($content_width)) {
	$content_width = 960;
}

// Adiciona suporte a thumbnails
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');

		// add_image_size('thumbnail', 170, 212, array( 'center', 'center' )); 
		// add_image_size('medium', 280, 169, true); 
		// add_image_size('large', 960, 999999, true); 

	// RSS feed
	add_theme_support('automatic-feed-links');
}