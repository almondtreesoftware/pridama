<footer class="site-footer">
  <!-- Upper Footer -->
  <div class="footer-top">
    <div class="footer-grid">
      
      <!-- Logo -->
      <div class="footer-col">
        <div class="footer-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dark-logo.png" alt="Pridama Logo">
          </a>
        </div>
      </div>

      <!-- Primary Menu -->
      <div class="footer-col">
        <nav class="footer-menu">
          <?php
            if ( has_nav_menu('primary') ){
              wp_nav_menu(array(
                'theme_location'=>'primary',
                'container'=>false,
                'menu_class'=>'footer-nav'
              ));
            }
          ?>
        </nav>
      </div>

      <!-- Account + Cart Links -->
      <div class="footer-col">
        <div class="footer-links">
          <a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') )); ?>">My Account</a>
          <a href="<?php echo esc_url(wc_get_cart_url()); ?>">
            Cart (<?php echo (int)(function_exists('WC')? WC()->cart->get_cart_contents_count():0); ?>)
          </a>
        </div>
      </div>

      <!-- Search -->
      <div class="footer-col">
        <div class="footer-search">
          <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" name="s" placeholder="Search products..." value="<?php echo get_search_query(); ?>">
            <input type="hidden" name="post_type" value="product" />
            <button type="submit" aria-label="Search">Search</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- Lower Footer -->
  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> pridama.com. All Rights Reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
