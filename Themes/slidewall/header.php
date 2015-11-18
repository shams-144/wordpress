<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?php bloginfo( 'title' ); ?></title>
 <!--    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.lightbox-0.5.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/templatemo_style.css" type="text/css" media="screen" />-->
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="tooplate_header">
    <div id="site_title"><h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'title' ); ?></a></h1></div>
    
    <div id="tooplate_menu">
    	
        <ul>
            <li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li>
            <li><a href="<?php bloginfo( 'url' ); ?>/gallery">Gallery</a></li>
            <li><a href="<?php bloginfo( 'url' ); ?>/news">News</a></li>
            <li><a href="<?php bloginfo( 'url' ); ?>/blog" class="current">Blog</a></li>
            <li><a href="<?php bloginfo( 'url' ); ?>/contact" class="last">Contact</a></li>
        </ul>
        
       <?php 
	  //  $args=array('theme_location'=>'primary');
	   ?>
	   <?php //wp_nav_menu($args) ?>
    </div> 
    
	<!-- end of tooplate_menu -->
    <div class="cleaner"></div>
</div>



