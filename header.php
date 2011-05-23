<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="1fenzhong" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
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
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
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
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/school.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>

        <!--[if lt IE 9]>
            <script src="_/js/IE9.js"></script>
        <![endif]-->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

        <script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/animated-menu.js" type="text/javascript"></script>


        <script type="text/javascript">
          $(document).ready(function(){
              $(".home .post").click(function(e){
                  e.preventDefault();
                  window.location = $(this).attr("url");
              });
          });
	</script>

</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

                <div class="container">

		<header id="header">

                        <div class="con">

                                <div class="info">

                                        <h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" alt="" /></a></h1>

                                <div class="description"><?php bloginfo('description'); ?></div>

                                </div>
                                
                                <?php include (TEMPLATEPATH . '/searchform.php'); ?>

                                <div class="clearfix"></div>

                                <div class="main-nav">
                                        <?php wp_nav_menu( array( 'theme_location' => 'header-navi-menu', 'container' => '', 'after' => '', 'walker' => new description_walker() ) ); ?>
                                </div>

                                <div class="user-nav">
                                        <?php wp_nav_menu( array( 'theme_location' => 'header-user-menu' ) ); ?>
                                </div>

                                <div class="clearfix"></div>

                        </div>

		</header>
