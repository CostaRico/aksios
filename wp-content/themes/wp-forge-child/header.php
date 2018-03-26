<?php
/**
 * The Header template of our theme.
 *
 * Displays all of the <head> section and everything up till <section class="content_wrap row" role="document">
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.5.1.7
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <style>
        .vc_custom_heading {
    font-weight: 600;
}

.vc_custom_heading.main-color-line {
    position: relative;
    padding-bottom: 20px;
    margin-bottom: 30px;
}

.vc_custom_heading.main-color-line::after {
    position: absolute;
    content: "";
    width: 50px;
    height: 6px;
    background-color: rgb(25, 128, 216);
    left: 50%;
    bottom: 0px;
    margin-left: -25px;
    border-radius: 5px;
}
    </style>

<header>
    <div class="theme-wrap-menu-flex" style="<?php if(is_front_page()){echo 'background: #fff!important';} ?>">
        <h1 itemscope="" itemtype="http://schema.org/Organization" class="ht-logo">
            <a class="lg" href="http://haintheme.com/demo/wp/bridge/" itemprop="url">
                <img src="http://haintheme.com/demo/wp/bridge/wp-content/uploads/2017/10/lg.png" alt="Logo image" itemprop="logo" width="161" height="43">
            </a>
        </h1>
        <div class="theme-wrap-primary-menu">
            <?php wp_nav_menu( array( 
                'theme_location' => 'primary',
                'menu_class' => 'theme-primary-menu',
                'menu_id' => 'menu-primary-menu',
                'container' => 'ul',
            )); ?>
        </div>
        <div class="right-btn">
            <button class="ion-android-search" id="ht-btn-search"></button>
        </div>
    </div>
    <?php if (is_page_template('page-sermons.php')): ?>
    <nav class="domica-breadcrumb flw" style="background-image:url(//haintheme.com/demo/wp/bridge/wp-content/uploads/2017/09/sm-bg1.jpg);">
        <div class="container">
            <div class="bread flw" style="text-align: left;color: #232323">
                <h1 class="page-title" style="text-align: left;color: #232323">Sermon Listing - Grid 01</h1>
                <div class="crumbs" itemscope itemtype="http://schema.org/BreadcrumbList" style="color: #232323">
                    <span class="first-item" style="color: #232323"><a href="/" style="color: #232323"><span itemprop="name" style="color: #232323">Homepage</span></a></span>
                    <span class="last-item" style="color: #232323"><i itemprop="name" style="color: #232323">Sermon Listing</i></span>
                </div>
            </div>
        </div>
    </nav>
<?php endif; ?>
</header>

<main id="main" class="page_content flw">
    <div class="container">     