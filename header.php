<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="1fenzhong" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("标签 &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' 存档 - '; }
		      elseif (is_search()) {
		         echo '搜索 &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo '没有找到 - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("标签 &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' 存档 - '; }
		      elseif (is_search()) {
		         echo '搜索 &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo '没有找到 - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	
	<meta name="author" content="一分钟学堂">
	<meta name="Copyright" content="Copyright 一分钟学堂@2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="一分钟学堂">
	<meta name="DC.subject" content="微知识线上学习社区">
	<meta name="DC.creator" content="一分钟学堂成员">
	
	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use Ñ use thoughtfully!
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/school.css">
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-custom-2.0.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery.multiple-bgs.min.js"></script>

</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

                <div class="container">

		<header id="header">

                    <div class="info">

                        <h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" alt="" /></a></h1>

                        <div class="description"><?php bloginfo('description'); ?></div>

                    </div>

                    <div class="clearfix"></div>

                    <?php wp_nav_menu( array( 'theme_location' => 'header-navi-menu', 'container' => '', 'after' => '', 'walker' => new description_walker() ) ); ?>

                    <div class="clearfix"></div>

		</header>
