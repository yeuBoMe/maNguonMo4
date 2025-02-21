<?php

$shopfront_ecommerce_first_color = get_theme_mod('shopfront_ecommerce_first_color');
$shopfront_ecommerce_second_color = get_theme_mod('shopfront_ecommerce_second_color');
$shopfront_ecommerce_color_scheme_css = '';

/*------------------ Global First Color -----------*/
$shopfront_ecommerce_color_scheme_css .='.page-links .post-page-numbers.current, .page-links a:hover, .category-dropdown::-webkit-scrollbar-thumb, .slider-img-color, span.page-numbers.current, .nav-links .page-numbers:hover, input.search-submit, .tagcloud a:hover, #footer .tagcloud a,  button.wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button.contained, .breadcrumb a:hover,#commentform input#submit:hover, .woocommerce span.onsale, .entry-summary .pagemore:hover,input.search-submit {';
    $shopfront_ecommerce_color_scheme_css .='background-color: '.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.site-main .wp-block-button a:hover, .site-main .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover, .postsec-list .wp-block-button a:hover, .postsec-list .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover, .header-top, .category-btn, .product-search button[type="submit"], .catwrapslider .owl-prev:hover, .catwrapslider .owl-next:hover, .shop-now a:hover, .pagemore:hover, #button, #sidebar input.search-submit, #footer input.search-submit, form.woocommerce-product-search button, .widget_calendar caption, .widget_calendar #today, .breadcrumb .current-breadcrumb, nav.woocommerce-MyAccount-navigation ul li, .woocommerce ul.products li.product .button, .woocommerce button.button.alt{';
    $shopfront_ecommerce_color_scheme_css .='background: '.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.postsec-list .wp-block-button.is-style-outline a, .category-dropdown li a:hover, .product-account i, .product-cart i, .main-nav a:hover, .listarticle h2 a:hover, #sidebar ul li::before, #sidebar li a:hover, #footer li a:hover, .ftr-4-box h5 span, #footer a:hover, .postmeta a:hover, #comments a, .added_to_cart, .posted_in a, .onsale, article .entry-content a, .postmeta a:hover, #sidebar li a:hover, .nav-links a, .edit-link a, .slider-box h1 a:hover {';
    $shopfront_ecommerce_color_scheme_css .='color: '.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.site-main .wp-block-button.is-style-outline a:hover, .postsec-list .wp-block-button.is-style-outline a, .widget .tagcloud a:hover{';
    $shopfront_ecommerce_color_scheme_css .='border: 1px solid'.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='#sidebar .tagcloud a:focus, .main-nav a:focus, .main-nav ul ul a:focus, select:focus, #commentform input#submit:focus, .shop-now a:focus, a.pagemore:focus, .product-search form.woocommerce-product-search, #sidebar input[type="text"],
#sidebar input[type="search"], #footer input[type="search"], nav.woocommerce-MyAccount-navigation ul li {';
    $shopfront_ecommerce_color_scheme_css .='border: 2px solid'.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.listarticle a:focus, .wp-block-button a:focus{';
    $shopfront_ecommerce_color_scheme_css .='outline: 3px solid'.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.main-nav li ul{';
    $shopfront_ecommerce_color_scheme_css .='border-top: 3px solid'.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.shop-now a:hover{';
    $shopfront_ecommerce_color_scheme_css .='border-color: '.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='#sidebar .widget{';
    $shopfront_ecommerce_color_scheme_css .='border-bottom: 3px solid'.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='blockquote{';
    $shopfront_ecommerce_color_scheme_css .='border-left: 5px solid'.esc_attr($shopfront_ecommerce_first_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

/*------------------ Global Second Color -----------*/
$shopfront_ecommerce_color_scheme_css .='.site-main .wp-block-button__link, .postsec-list .wp-block-button__link, .page-links a, .page-links span, .sticky-head, .slidesection, .shop-now a, .nav-links .page-numbers, .copywrap, #footer .tagcloud a:hover, #commentform input#submit, .shop-now a  {';
    $shopfront_ecommerce_color_scheme_css .='background-color: '.esc_attr($shopfront_ecommerce_second_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.product-search button[type="submit"]:hover, .admin-bar .sticky-head, .header, .entry-summary .pagemore, span.onsale, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, nav.woocommerce-MyAccount-navigation ul li:hover, .breadcrumb a, nav.woocommerce-MyAccount-navigation ul li:hover, button.wc-block-components-checkout-place-order-button:hover, .woocommerce ul.products li.product .button:hover {';
    $shopfront_ecommerce_color_scheme_css .='background: '.esc_attr($shopfront_ecommerce_second_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.social-icons i:hover, .category-dropdown li a, span.item-count, .listarticle h2 a, .post-date, .post-comment {';
    $shopfront_ecommerce_color_scheme_css .='color: '.esc_attr($shopfront_ecommerce_second_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.site-main .wp-block-button.is-style-outline a {';
    $shopfront_ecommerce_color_scheme_css .='border: 1px solid '.esc_attr($shopfront_ecommerce_second_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

$shopfront_ecommerce_color_scheme_css .='.woocommerce .quantity .qty, nav.woocommerce-MyAccount-navigation ul li:hover, select.orderby, nav.woocommerce-MyAccount-navigation ul li:hover{';
    $shopfront_ecommerce_color_scheme_css .='border: 2px solid '.esc_attr($shopfront_ecommerce_second_color).'!important;';
$shopfront_ecommerce_color_scheme_css .='}';

//---------------------------------Logo-Max-height--------- 
$shopfront_ecommerce_logo_width = get_theme_mod('shopfront_ecommerce_logo_width');

if($shopfront_ecommerce_logo_width != false){

$shopfront_ecommerce_color_scheme_css .='.logo .custom-logo-link img{';

    $shopfront_ecommerce_color_scheme_css .='width: '.esc_html($shopfront_ecommerce_logo_width).'px;';

$shopfront_ecommerce_color_scheme_css .='}';
}

/*---------------------------Slider Height ------------*/

$shopfront_ecommerce_slider_img_height = get_theme_mod('shopfront_ecommerce_slider_img_height');
if($shopfront_ecommerce_slider_img_height != false){
    $shopfront_ecommerce_color_scheme_css .='.slidesection img{';
        $shopfront_ecommerce_color_scheme_css .='height: '.esc_attr($shopfront_ecommerce_slider_img_height).' !important;';
    $shopfront_ecommerce_color_scheme_css .='}';
}

/*--------------------------- Footer background image -------------------*/

$shopfront_ecommerce_footer_bg_image = get_theme_mod('shopfront_ecommerce_footer_bg_image');
if($shopfront_ecommerce_footer_bg_image != false){
    $shopfront_ecommerce_color_scheme_css .='.footer-widget{';
        $shopfront_ecommerce_color_scheme_css .='background: url('.esc_attr($shopfront_ecommerce_footer_bg_image).')!important;';
    $shopfront_ecommerce_color_scheme_css .='}';
}

/*--------------------------- Footer Background Color -------------------*/

$shopfront_ecommerce_footer_bg_color = get_theme_mod('shopfront_ecommerce_footer_bg_color');
if($shopfront_ecommerce_footer_bg_color != false){
    $shopfront_ecommerce_color_scheme_css .='.footer-widget{';
        $shopfront_ecommerce_color_scheme_css .='background-color: '.esc_attr($shopfront_ecommerce_footer_bg_color).' !important;';
    $shopfront_ecommerce_color_scheme_css .='}';
}

/*--------------------------- Scroll to top positions -------------------*/

$shopfront_ecommerce_scroll_position = get_theme_mod( 'shopfront_ecommerce_scroll_position','Right');
if($shopfront_ecommerce_scroll_position == 'Right'){
    $shopfront_ecommerce_color_scheme_css .='#button{';
        $shopfront_ecommerce_color_scheme_css .='right: 20px;';
    $shopfront_ecommerce_color_scheme_css .='}';
}else if($shopfront_ecommerce_scroll_position == 'Left'){
    $shopfront_ecommerce_color_scheme_css .='#button{';
        $shopfront_ecommerce_color_scheme_css .='left: 20px;';
    $shopfront_ecommerce_color_scheme_css .='}';
}else if($shopfront_ecommerce_scroll_position == 'Center'){
    $shopfront_ecommerce_color_scheme_css .='#button{';
        $shopfront_ecommerce_color_scheme_css .='right: 50%;left: 50%;';
    $shopfront_ecommerce_color_scheme_css .='}';
}

/*--------------------------- Blog Post Page Image Box Shadow -------------------*/

$shopfront_ecommerce_blog_post_page_image_box_shadow = get_theme_mod('shopfront_ecommerce_blog_post_page_image_box_shadow',0);
if($shopfront_ecommerce_blog_post_page_image_box_shadow != false){
    $shopfront_ecommerce_color_scheme_css .='.post-thumb img{';
        $shopfront_ecommerce_color_scheme_css .='box-shadow: '.esc_attr($shopfront_ecommerce_blog_post_page_image_box_shadow).'px '.esc_attr($shopfront_ecommerce_blog_post_page_image_box_shadow).'px '.esc_attr($shopfront_ecommerce_blog_post_page_image_box_shadow).'px #cccccc;';
    $shopfront_ecommerce_color_scheme_css .='}';
}

/*--------------------------- Woocommerce Product Image Border Radius -------------------*/

$shopfront_ecommerce_woo_product_img_border_radius = get_theme_mod('shopfront_ecommerce_woo_product_img_border_radius');
if($shopfront_ecommerce_woo_product_img_border_radius != false){
    $shopfront_ecommerce_color_scheme_css .='.woocommerce ul.products li.product a img{';
        $shopfront_ecommerce_color_scheme_css .='border-radius: '.esc_attr($shopfront_ecommerce_woo_product_img_border_radius).'px;';
    $shopfront_ecommerce_color_scheme_css .='}';
}
