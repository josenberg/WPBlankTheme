<!doctype html>
<!-- Projeto desenvolvido por Henrique Grana - henriquegrana.com.br -->
<!--[if IE 6]><html <?php language_attributes(); ?> class="ie6"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="ie7"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if gte IE 8]><html <?php language_attributes(); ?> class="ie9"><![endif]-->

<!--[if !IE]><!-->
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//google-analytics.com">

	<link rel="alternate" href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="<?php echo get_locale(); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<a class="logo" href="<?php bloginfo('url'); ?>" itemprop="url" title="<?php bloginfo('name'); ?>">
						<img itemprop="logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>

				<div class="col-md-8">
					<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
				</div>
			</div>
		</div>
	</header>