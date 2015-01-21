<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html>
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/app.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/respond.js"></script>
	<![endif]-->
	<script src="//use.typekit.net/uei4vst.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body>
	<?php include('inc/site-header.php') ?>