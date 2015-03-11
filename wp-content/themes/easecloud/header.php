<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package EaseCloud
 * @subpackage EaseCloud
 * @since EaseCloud 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie9.js"></script>
    <![endif]-->
    <script>(function(){document.documentElement.className='js'})();</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">
        <a class="home" href="<?php echo home_url();?>">
            <img id="header-logo" src="<?php echo get_template_directory_uri();?>/images/header-logo.png" />
        </a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-header' ) ); ?>
    </header>

    <div id="content" class="site-content">
