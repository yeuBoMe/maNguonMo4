<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Shopfront Ecommerce
 */
?>

<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside role="complementary" aria-label="<?php esc_attr_e('sidebar1', 'shopfront-ecommerce'); ?>" id="archives" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'shopfront-ecommerce' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside role="complementary" aria-label="<?php esc_attr_e('sidebar2', 'shopfront-ecommerce'); ?>" id="meta" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'shopfront-ecommerce' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>  
</div>