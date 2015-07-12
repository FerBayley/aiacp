<!doctype html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">

	<title><?php bloginfo('name');?><?php wp_title();?></title>

	<meta name="keywords" content="Aiacp Desarrollo centrado en lo humano" />


	<!-- CSS -->
	<link href="<?php bloginfo('template_directory')?>/style.css" rel="stylesheet" type="text/css" media="screen" />
	<!-- CSS -->

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<? home_url( '/' ); ?>favicon.ico" />
	<!-- FAVICON -->

	<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
 	<?php wp_footer(); ?>

</head>