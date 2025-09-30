<?php
/* Template Name: Front Page */
get_header();
?>

<main id="main-content" class="frontpage">

    <!-- Slider -->
    <section class="hero-slider">
        <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
    </section>
  
<!-- Categories -->
<section class="product-categories">
    <h2 class="section-title">Shop by Category</h2>
    <div class="categories-scroll">
        <?php
        $args = array(
            'taxonomy'   => 'product_cat',
            'hide_empty' => true,
        );
        $product_categories = get_terms($args);
        if (!empty($product_categories)) {
            foreach ($product_categories as $category) {
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                ?>
                <a class="category-item" href="<?php echo get_term_link($category); ?>">
                    <?php if ($thumbnail_url): ?>
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                    <?php endif; ?>
                    <span class="category-name"><?php echo esc_html($category->name); ?></span>
                </a>
            <?php
            }
        }
        ?>
    </div>
</section>

    <!-- New Arrivals -->
    <section class="new-arrivals">
        <h2 class="section-title">New Arrivals</h2>
        <div class="products-grid">
            <?php
            echo do_shortcode('[products limit="4" columns="4" orderby="date" order="DESC"]');
            ?>
        </div>
    </section>

    <!-- Shipping Banner -->
    <section class="shipping-banner">
        <p>Ã° Free Shipping on Orders Over Ã¢¦50,000</p>
    </section>

    <!-- Community (Blog Posts) -->
    <section class="community-posts">
        <h2 class="section-title">Community</h2>
        <div class="posts-grid">
            <?php
            $blog_posts = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'ignore_sticky_posts' => true,
            ]);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                    <article class="post-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No community posts available.</p>';
            endif;
            ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
