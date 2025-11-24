<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <?php if (has_custom_logo()): ?>
            <?php the_custom_logo(); ?>
        <?php else: ?>
            <h1><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
        
        <nav>
            <?php
            kokostore_mobile_menu_toggle();
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'primary-menu',
                'fallback_cb' => false,
            ));
            ?>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <?php if (have_posts()): ?>
            <div class="product-grid">
                <?php while (have_posts()): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('product-card'); ?>>
                        <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php echo kokostore_get_responsive_image(get_post_thumbnail_id(), get_the_title()); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="product-info">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php the_excerpt(); ?>
                            <div class="price">
                                <?php
                                if (function_exists('wc_get_product')) {
                                    $product = wc_get_product(get_the_ID());
                                    if ($product) {
                                        echo $product->get_price_html();
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('&laquo; Previous', 'kokostore'),
                    'next_text' => __('Next &raquo;', 'kokostore'),
                ));
                ?>
            </div>
        <?php else: ?>
            <div class="no-posts">
                <h2><?php _e('No products found', 'kokostore'); ?></h2>
                <p><?php _e('Please check back later for new products.', 'kokostore'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<footer>
    <div class="container">
        <?php if (is_active_sidebar('footer-1')): ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
        <?php endif; ?>
        
        <div class="footer-info">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'kokostore'); ?></p>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer-menu',
                'fallback_cb' => false,
            ));
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
