<footer class="site-footer">
  <!-- Upper Footer -->
  <div class="footer-top">
    <div class="footer-inner">
      
      <!-- Logo -->
      <div class="footer-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dark-logo.png" alt="Pridama Logo">
        </a>
      </div>

      <!-- Search -->
      <div class="footer-search">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
          <input type="search" name="s" placeholder="Search products..." value="<?php echo get_search_query(); ?>">
          <input type="hidden" name="post_type" value="product" />
          <button type="submit" aria-label="Search">🔍</button>
        </form>
      </div>

      <!-- Footer Menu -->
      <div class="footer-menu">
        <?php
          if ( has_nav_menu('footer') ){
            wp_nav_menu(array('theme_location'=>'footer','container'=>false,'menu_class'=>'footer-nav'));
          }
        ?>
      </div>

      <!-- Contact Info -->
      <div class="footer-contact">
        <p><span class="icon">📞</span> <a href="tel:+2348012345678">+234 801 234 5678</a></p>
        <p><span class="icon">📧</span> <a href="mailto:info@pridama.com">info@pridama.com</a></p>
      </div>

    </div>
  </div>

  <!-- Lower Footer -->
  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> pridama.com. All Rights Reserved.</p>
  </div>
</footer>
