<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="es">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?> - <?php echo (!is_blog()) ? get_the_title() : 'Blog' ?></title>
	<meta name="description"
		content="El mundo está en tus manos. Lo que hagas con él, es tu elección. Y tu elección traerá consecuencias. Y las consecuencias te harán feliz, o no. Todo depende de ti." />
	<meta property="og:title" content="Herling - If you want it, go and get it" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://herling.vip" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/share.jpg" />
	<meta property="og:site_name" content="Herling Vip" />
	<meta property="og:description" content="El mundo está en tus manos. Lo que hagas con él, es tu elección" />
	<meta name="twitter:site" content="https://www.twitter.com/herling.vip" />
	<meta name="twitter:domain" content="http://herling.vip" />
	<meta name="twitter:title" content="Herling - If you want it, go and get it" />
	<meta name="twitter:description" content="Herling - If you want it, go and get it" />
	<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/share.jpg" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon-standard-iphone.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon-standard-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon-retina-iphone.png">

    <?php wp_head() ?>
</head>

<body>

	<!-- Page preloader wrap
	================================================== -->

	<div class="animsition">

		<!-- Nav and Logo
		================================================== -->

		<header class="cd-header">
			<div class="header-wrapper">
				<div class="logo-wrap">
					<a href="<?php echo site_url('inicio') ?>" class="cursor-link animsition-link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" ></a>
				</div>
				<div class="nav-but-wrap">
					<div class="menu-icon cursor-link">
						<span class="menu-icon__line menu-icon__line-left"></span>
						<span class="menu-icon__line"></span>
						<span class="menu-icon__line menu-icon__line-right"></span>
					</div>
				</div>
			</div>
		</header>

		<div class="nav">
			<div class="nav__content">
				<ul class="nav__list">
					<li class="nav__list-item <?php if(is_page('inicio')) echo 'active-nav' ?>"><a href="<?php echo site_url() ?>"
							class="cursor-link animsition-link">Inicio</a></li>
					<li class="nav__list-item <?php if(is_blog()) echo 'active-nav' ?>"><a href="<?php echo site_url('blog') ?>" class="cursor-link animsition-link">Blog</a></li>
					<li class="nav__list-item <?php if(is_page('eventos')) echo 'active-nav' ?> d-none"><a href="<?php echo site_url('eventos') ?>" class="cursor-link animsition-link">Eventos</a>
					</li>
					<li class="nav__list-item <?php if(is_page('proyectos')) echo 'active-nav' ?>"><a href="<?php echo site_url('proyectos') ?>" class="cursor-link animsition-link">Proyectos</a>
					</li>
					<li class="nav__list-item <?php if(is_page('videos')) echo 'active-nav' ?> "><a href="<?php echo site_url('videos') ?>" class="cursor-link animsition-link">Videos</a>
					</li>
					<li class="nav__list-item <?php if(is_page('contacto')) echo 'active-nav' ?>"><a href="<?php echo site_url('contacto') ?>" class="cursor-link animsition-link">Contacto</a>
					</li>
				</ul>
			</div>
		</div>