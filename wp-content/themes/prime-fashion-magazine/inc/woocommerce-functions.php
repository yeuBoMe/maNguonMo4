<?php
/**
 * Prime Fashion Magazine woocommerce hooks and functions.
 *
 * @link https://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 *
 * @package prime_fashion_magazine
 */

/**
 * Woocommerce related hooks
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'woocommerce_before_main_content', 'prime_fashion_magazine_wc_wrapper', 10 );
add_action( 'woocommerce_after_main_content', 'prime_fashion_magazine_wc_wrapper_end', 10 );
add_action( 'after_setup_theme', 'prime_fashion_magazine_woocommerce_support' );
add_action( 'widgets_init', 'prime_fashion_magazine_wc_widgets_init' );
add_filter( 'woocommerce_show_page_title', '__return_false' );

/**
 * Declare Woocommerce Support
*/
function prime_fashion_magazine_woocommerce_support() {
    global $woocommerce;
    
    add_theme_support( 'woocommerce' );
    
    if( version_compare( $woocommerce->version, '3.0', ">=" ) ) {
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
}

function prime_fashion_magazine_wc_widgets_init(){
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'prime-fashion-magazine' ),
        'id'            => 'shop-sidebar',
        'description'   => esc_html__( 'Sidebar displaying only in WooCommerce pages.', 'prime-fashion-magazine' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'prime_fashion_magazine_wc_widgets_init' );



/**
 * Before Content
 * Wraps all WooCommerce content in wrappers which match the theme markup
 */
function prime_fashion_magazine_wc_wrapper() {    
    ?>
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-lg-8 col-md-8">
                <main id="main" class="site-main" role="main">
    <?php
}

/**
 * After Content
 * Closes the wrapping divs and displays the sidebar if active
 */
function prime_fashion_magazine_wc_wrapper_end() {
    ?>
                </main>
            </div>
            <?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
                <div class="sidebar col-lg-4 col-md-4">
                    <aside id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'shop-sidebar' ); ?>
                    </aside>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}