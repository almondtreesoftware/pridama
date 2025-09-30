<footer class="site-footer">
  <!-- Upper Footer -->
  <div class="footer-top">
    
    <!-- Logo centered -->
    <div class="footer-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dark-logo.png" alt="Pridama Logo">
      </a>
    </div>

    <!-- Two columns -->
    <div class="footer-grid">
      
      <!-- Categories Column -->
      <div class="footer-col">
        <h4>Categories</h4>
        <ul class="footer-cats">
          <?php
          $product_cats = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
          ));
          if (!empty($product_cats) && !is_wp_error($product_cats)) {
            foreach ($product_cats as $cat) {
              echo '<li><a href="' . esc_url(get_term_link($cat)) . '">' . esc_html($cat->name) . '</a></li>';
            }
          }
          ?>
        </ul>
      </div>

      <!-- Account & Info Column -->
      <div class="footer-col">
        <h4>Information</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">My Account</a></li>
          <li><a href="<?php echo esc_url(wc_get_cart_url()); ?>">Cart</a></li>
          <li><a href="<?php echo esc_url(home_url('/shipping-policy')); ?>">Shipping Policy</a></li>
          <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/terms-and-conditions')); ?>">Terms & Conditions</a></li>
        </ul>

        <!-- Contact Info -->
        <div class="footer-contact">
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
              <path d="M6.62 10.79a15.091 15.091 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.72 11.72 0 0 0 3.68.59 1 1 0 0 1 1 1v3.54a1 1 0 0 1-1 1A17 17 0 0 1 3 5a1 1 0 0 1 1-1h3.54a1 1 0 0 1 1 1c0 1.25.2 2.49.59 3.68a1 1 0 0 1-.24 1.01l-2.27 2.1z"/>
            </svg>
            <span>+234 800 123 4567</span>
          </p>
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
              <path d="M2.01 6.03C2 5.46 2.46 5 3.03 5h17.94c.57 0 1.03.46 1.03 1.03v11.94c0 .57-.46 1.03-1.03 1.03H3.03c-.57 0-1.03-.46-1.03-1.03V6.03zm2.27.97l7.7 4.81 7.7-4.81H4.28zm15.69 9.03V9.61l-7.52 4.69a1 1 0 0 1-1.04 0L3.89 9.61v6.42h16.08z"/>
            </svg>
            <span>support@pridama.com</span>
          </p>
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
