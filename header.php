here<?php
/**
 * The Header template for Pridama WooCommerce Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="hamburger" onclick="document.querySelector('.drawer-menu').classList.toggle('active')">&#9776;</div>
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dark.png" alt="<?php bloginfo('name'); ?>">
        </a>
    </div>
    <div class="search">
        <?php get_search_form(); ?>
    </div>
</header>

<nav class="drawer-menu">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'drawer-menu-list',
        ));
    ?>
    <div class="drawer-footer">&copy; <?php echo date('Y'); ?> Pridama.com</div>
</nav>
