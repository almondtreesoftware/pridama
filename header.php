<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="header-inner">
    
    <!-- Left side: Hamburger + Logo -->
    <div class="header-left">
      <button class="icon-btn hamburger" id="hamburgerBtn" aria-label="Open menu">
        <!-- simple hamburger -->
        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect y="0" width="20" height="2" rx="1" fill="currentColor"/>
          <rect y="6" width="20" height="2" rx="1" fill="currentColor"/>
          <rect y="12" width="20" height="2" rx="1" fill="currentColor"/>
        </svg>
      </button>

      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dark-logo.png" alt="Pridama Logo">
        </a>
      </div>
    </div>

    <div class="header-right">
  <form role="search" method="get" class="search-form desktop-only" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" name="s" placeholder="Search products..." value="<?php echo get_search_query(); ?>">
    <input type="hidden" name="post_type" value="product" />
    <button class="icon-btn" type="submit" aria-label="Search">🔍</button>
  </form>

  <div class="mini-cart" id="miniCart">
    <a href="<?php echo wc_get_cart_url(); ?>" class="icon-btn" aria-label="View cart">
      🛒
      <span class="cart-count" id="cartCount"><?php echo (int)(function_exists('WC')? WC()->cart->get_cart_contents_count():0); ?></span>
    </a>
  </div>
</div>


  </div>
</header>

<!-- Drawer -->
<div class="drawer" id="mobileDrawer" aria-hidden="true">
  <div class="drawer-content">
    <?php
      if ( has_nav_menu('primary') ){
        wp_nav_menu(array('theme_location'=>'primary','container'=>false));
      } else {
        echo '<p><a href="'.esc_url(home_url('/')).'">Home</a></p>';
      }
    ?>
  </div>
  <div class="drawer-footer">© <?php echo date('Y'); ?> pridama.com</div>
</div>
<div class="overlay" id="drawerOverlay"></div>

<main class="main" id="site-main">
