<div class="theme-offer">
    <?php

    // POST and update the customizer and other related data of Shopfront Ecommerce
    if ( isset( $_POST['submit'] ) ) {

        // WooCommerce installation and activation
        if (!is_plugin_active('woocommerce/woocommerce.php')) {
            $shopfront_ecommerce_plugin_slug = 'woocommerce';
            $shopfront_ecommerce_plugin_file = 'woocommerce/woocommerce.php';
            $shopfront_ecommerce_installed_plugins = get_plugins();
            if (!isset($shopfront_ecommerce_installed_plugins[$shopfront_ecommerce_plugin_file])) {
                include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                include_once(ABSPATH . 'wp-admin/includes/file.php');
                include_once(ABSPATH . 'wp-admin/includes/misc.php');
                include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
                $shopfront_ecommerce_upgrader = new Plugin_Upgrader();
                $shopfront_ecommerce_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
            }
            activate_plugin($shopfront_ecommerce_plugin_file);
        }

        // ------- Create Main Menu --------
        $shopfront_ecommerce_menuname = 'Primary Menu';
        $shopfront_ecommerce_bpmenulocation = 'primary';
        $shopfront_ecommerce_menu_exists = wp_get_nav_menu_object( $shopfront_ecommerce_menuname );
    
        if ( !$shopfront_ecommerce_menu_exists ) {
            $shopfront_ecommerce_menu_id = wp_create_nav_menu( $shopfront_ecommerce_menuname );

            // Create Home Page
            $shopfront_ecommerce_home_title = 'Home';
            $shopfront_ecommerce_home = array(
                'post_type'    => 'page',
                'post_title'   => $shopfront_ecommerce_home_title,
                'post_content' => '',
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'home'
            );
            $shopfront_ecommerce_home_id = wp_insert_post($shopfront_ecommerce_home);
            // Assign Home Page Template
            add_post_meta($shopfront_ecommerce_home_id, '_wp_page_template', '/template-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $shopfront_ecommerce_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($shopfront_ecommerce_menu_id, 0, array(
                'menu-item-title' => __('Home', 'shopfront-ecommerce'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $shopfront_ecommerce_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create a new Page 
            $shopfront_ecommerce_pages_title = 'Pages';
            $shopfront_ecommerce_pages_content = '<p>Explore all the pages we have on our website...</p>';
            $shopfront_ecommerce_pages = array(
                'post_type'    => 'page',
                'post_title'   => $shopfront_ecommerce_pages_title,
                'post_content' => $shopfront_ecommerce_pages_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'pages'
            );
            $shopfront_ecommerce_pages_id = wp_insert_post($shopfront_ecommerce_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($shopfront_ecommerce_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'shopfront-ecommerce'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $shopfront_ecommerce_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page 
            $shopfront_ecommerce_about_title = 'About Us';
            $shopfront_ecommerce_about_content = 'Lorem ipsum dolor sit amet...';
            $shopfront_ecommerce_about = array(
                'post_type'    => 'page',
                'post_title'   => $shopfront_ecommerce_about_title,
                'post_content' => $shopfront_ecommerce_about_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'about-us'
            );
            $shopfront_ecommerce_about_id = wp_insert_post($shopfront_ecommerce_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($shopfront_ecommerce_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'shopfront-ecommerce'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $shopfront_ecommerce_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Assign the menu to the primary location if not already set
            if ( ! has_nav_menu( $shopfront_ecommerce_bpmenulocation ) ) {
                $shopfront_ecommerce_locations = get_theme_mod( 'nav_menu_locations' );
                if ( empty( $shopfront_ecommerce_locations ) ) {
                    $shopfront_ecommerce_locations = array();
                }
                $shopfront_ecommerce_locations[ $shopfront_ecommerce_bpmenulocation ] = $shopfront_ecommerce_menu_id;
                set_theme_mod( 'nav_menu_locations', $shopfront_ecommerce_locations );
            }
        }

        //Header Section
        set_theme_mod( 'shopfront_ecommerce_the_custom_logo', esc_url( get_template_directory_uri().'/images/Logo.png'));
        set_theme_mod( 'shopfront_ecommerce_offer_text', 'WELCOME TO ECOMMERCE WORDPRESS THEME' );
        set_theme_mod( 'shopfront_ecommerce_category_text', 'CATEGORIES' );
        set_theme_mod( 'shopfront_ecommerce_product_category_number', '7' );

        //Social Media Section
        set_theme_mod( 'shopfront_ecommerce_fb_link', '#' );
        set_theme_mod( 'shopfront_ecommerce_twitt_link', '#' );
        set_theme_mod( 'shopfront_ecommerce_linked_link', '#' );
        set_theme_mod( 'shopfront_ecommerce_insta_link', '#' );
        set_theme_mod( 'shopfront_ecommerce_whatsapp_link', '#' );

       //Slider Section
       set_theme_mod( 'shopfront_ecommerce_button_text', 'SHOP NOW' );
       set_theme_mod( 'shopfront_ecommerce_button_link_slider', '#' );

        // Create the 'Shopfront' category and retrieve its ID
        $shopfront_ecommerce_slider_category_id = wp_create_category('Shopfront');

        // Set the category in theme mods for the slider section
        if (!is_wp_error($shopfront_ecommerce_slider_category_id)) {
            set_theme_mod('shopfront_ecommerce_slidersection', $shopfront_ecommerce_slider_category_id); 
        }
        
        // Create three demo posts and assign them to the 'Shopfront' category
        for ($shopfront_ecommerce_i = 1; $shopfront_ecommerce_i <= 3; $shopfront_ecommerce_i++) {
            $shopfront_ecommerce_title = 'Ecommerce Solution For Sarting Online Shop ';
    
            // Prepare the post object
            $shopfront_ecommerce_my_post = array(
                'post_title'    => wp_strip_all_tags($shopfront_ecommerce_title),
                'post_status'   => 'publish',
                'post_type'     => 'post',
                'post_category' => array($shopfront_ecommerce_slider_category_id),
            );
    
            // Insert the post into the database
            $shopfront_ecommerce_post_id = wp_insert_post($shopfront_ecommerce_my_post);
    
            // If the post was successfully created, set the featured image
            if ($shopfront_ecommerce_post_id && !is_wp_error($shopfront_ecommerce_post_id)) {
                // Set the image URL
                $shopfront_ecommerce_image_url = esc_url(get_template_directory_uri() . '/images/slider.png');
                $shopfront_ecommerce_upload_dir = wp_upload_dir();
    
                // Download the image data using wp_remote_get()
                $shopfront_ecommerce_response = wp_remote_get($shopfront_ecommerce_image_url);
                if (!is_wp_error($shopfront_ecommerce_response)) {
                    $shopfront_ecommerce_image_data = wp_remote_retrieve_body($shopfront_ecommerce_response);
    
                    if (!empty($shopfront_ecommerce_image_data)) {
                        // Handle the file upload process
                        $shopfront_ecommerce_image_name = 'blog' . $shopfront_ecommerce_i . '.png';
                        $shopfront_ecommerce_unique_file_name = wp_unique_filename($shopfront_ecommerce_upload_dir['path'], $shopfront_ecommerce_image_name);
                        $shopfront_ecommerce_file = $shopfront_ecommerce_upload_dir['path'] . '/' . $shopfront_ecommerce_unique_file_name;
    
                        // Save the image file to the uploads directory
                        global $wp_filesystem;
                        WP_Filesystem();
                        $wp_filesystem->put_contents($shopfront_ecommerce_file, $shopfront_ecommerce_image_data);
    
                        // Check file type and prepare for attachment
                        $shopfront_ecommerce_wp_filetype = wp_check_filetype($shopfront_ecommerce_unique_file_name, null);
                        $shopfront_ecommerce_attachment = array(
                            'post_mime_type' => $shopfront_ecommerce_wp_filetype['type'],
                            'post_title'     => sanitize_file_name($shopfront_ecommerce_unique_file_name),
                            'post_content'   => '',
                            'post_status'    => 'inherit',
                        );
    
                        // Insert the image into the media library and set it as the post's featured image
                        $shopfront_ecommerce_attach_id = wp_insert_attachment($shopfront_ecommerce_attachment, $shopfront_ecommerce_file, $shopfront_ecommerce_post_id);
                        $shopfront_ecommerce_attach_data = wp_generate_attachment_metadata($shopfront_ecommerce_attach_id, $shopfront_ecommerce_file);
                        wp_update_attachment_metadata($shopfront_ecommerce_attach_id, $shopfront_ecommerce_attach_data);
                        set_post_thumbnail($shopfront_ecommerce_post_id, $shopfront_ecommerce_attach_id);
                    }
                }
            }
        }

        //Category Section
        $shopfront_ecommerce_category_data = [
            'MEN COLLECTION' => get_template_directory_uri() . '/images/shopfront-products/shopfront-product1.png',
            'WOMEN COLLECTION' => get_template_directory_uri() . '/images/shopfront-products/shopfront-product2.png',
            'WATCH COLLECTION' => get_template_directory_uri() . '/images/shopfront-products/shopfront-product3.png',
            'BAG COLLECTION' => get_template_directory_uri() . '/images/shopfront-products/shopfront-product4.png',
        ];

        // Default image for Uncategorized
        $shopfront_ecommerce_default_image_url = get_template_directory_uri() . '/images/slider.png';

        // Function to upload image and get attachment ID
        function shopfront_ecommerce_upload_image($shopfront_ecommerce_image_url, $shopfront_ecommerce_image_name) {
            $shopfront_ecommerce_upload_dir = wp_upload_dir();
            $shopfront_ecommerce_response = wp_remote_get($shopfront_ecommerce_image_url);

            if (is_wp_error($shopfront_ecommerce_response)) {
                error_log('Error fetching image: ' . $shopfront_ecommerce_response->get_error_message());
                return false;
            }

            $shopfront_ecommerce_image_data = wp_remote_retrieve_body($shopfront_ecommerce_response);
            if (empty($shopfront_ecommerce_image_data)) {
                error_log('Image data is empty for URL: ' . $shopfront_ecommerce_image_url);
                return false;
            }

            $shopfront_ecommerce_file_path = $shopfront_ecommerce_upload_dir['path'] . '/' . wp_unique_filename($shopfront_ecommerce_upload_dir['path'], $shopfront_ecommerce_image_name);
            global $wp_filesystem;
            WP_Filesystem();

            if (!$wp_filesystem->put_contents($shopfront_ecommerce_file_path, $shopfront_ecommerce_image_data)) {
                error_log('Failed to save the image to: ' . $shopfront_ecommerce_file_path);
                return false;
            }

            $shopfront_ecommerce_filetype = wp_check_filetype($shopfront_ecommerce_file_path);
            $shopfront_ecommerce_attachment = [
                'post_mime_type' => $shopfront_ecommerce_filetype['type'],
                'post_title'     => sanitize_file_name($shopfront_ecommerce_image_name),
                'post_content'   => '',
                'post_status'    => 'inherit',
            ];

            $shopfront_ecommerce_attach_id = wp_insert_attachment($shopfront_ecommerce_attachment, $shopfront_ecommerce_file_path);
            require_once ABSPATH . 'wp-admin/includes/image.php';
            $shopfront_ecommerce_attach_data = wp_generate_attachment_metadata($shopfront_ecommerce_attach_id, $shopfront_ecommerce_file_path);
            wp_update_attachment_metadata($shopfront_ecommerce_attach_id, $shopfront_ecommerce_attach_data);

            return $shopfront_ecommerce_attach_id;
        }

        // Process each category
        foreach ($shopfront_ecommerce_category_data as $shopfront_ecommerce_category_name => $shopfront_ecommerce_image_url) {
            $shopfront_ecommerce_term = get_term_by('name', $shopfront_ecommerce_category_name, 'product_cat');
            $shopfront_ecommerce_term_id = $shopfront_ecommerce_term ? $shopfront_ecommerce_term->term_id : wp_create_term($shopfront_ecommerce_category_name, 'product_cat')['term_id'];

            // Set category thumbnail
            $shopfront_ecommerce_thumbnail_id = get_term_meta($shopfront_ecommerce_term_id, 'thumbnail_id', true);
            if (!$shopfront_ecommerce_thumbnail_id) {
                $shopfront_ecommerce_image_name = sanitize_title($shopfront_ecommerce_category_name) . '.png';
                $shopfront_ecommerce_attach_id = shopfront_ecommerce_upload_image($shopfront_ecommerce_image_url, $shopfront_ecommerce_image_name);

                if ($shopfront_ecommerce_attach_id) {
                    update_term_meta($shopfront_ecommerce_term_id, 'thumbnail_id', $shopfront_ecommerce_attach_id);
                }
            }

            // Add products to the category
            for ($shopfront_ecommerce_i = 1; $shopfront_ecommerce_i <= 3; $shopfront_ecommerce_i++) {
                $shopfront_ecommerce_product_name = "{$shopfront_ecommerce_category_name} Product {$shopfront_ecommerce_i}";
                $shopfront_ecommerce_product_id = wp_insert_post([
                    'post_title'   => $shopfront_ecommerce_product_name,
                    'post_content' => 'This is a sample product description.',
                    'post_status'  => 'publish',
                    'post_type'    => 'product',
                ]);

                if (!is_wp_error($shopfront_ecommerce_product_id)) {
                    wp_set_object_terms($shopfront_ecommerce_product_id, $shopfront_ecommerce_category_name, 'product_cat');

                    // Set product image
                    $shopfront_ecommerce_product_image_name = sanitize_title($shopfront_ecommerce_product_name) . '.png';
                    $shopfront_ecommerce_product_image_id = shopfront_ecommerce_upload_image($shopfront_ecommerce_image_url, $shopfront_ecommerce_product_image_name);

                    if ($shopfront_ecommerce_product_image_id) {
                        set_post_thumbnail($shopfront_ecommerce_product_id, $shopfront_ecommerce_product_image_id);
                    }

                    // Mark as featured (optional)
                    update_post_meta($shopfront_ecommerce_product_id, '_featured', 'yes');

                    // Also assign the product to "Uncategorized"
                    $shopfront_ecommerce_uncategorized_term = get_term_by('name', 'Uncategorized', 'product_cat');
                    if ($shopfront_ecommerce_uncategorized_term) {
                        wp_set_object_terms($shopfront_ecommerce_product_id, 'Uncategorized', 'product_cat', true); // true ensures that the term is added without removing others
                    }
                }
            }
        }

        // Handle "Uncategorized" category image
        $shopfront_ecommerce_uncategorized_term = get_term_by('name', 'Uncategorized', 'product_cat');
        if ($shopfront_ecommerce_uncategorized_term) {
            $shopfront_ecommerce_uncategorized_thumbnail_id = get_term_meta($shopfront_ecommerce_uncategorized_term->term_id, 'thumbnail_id', true);
            if (!$shopfront_ecommerce_uncategorized_thumbnail_id) {
                $shopfront_ecommerce_uncategorized_attach_id = shopfront_ecommerce_upload_image($shopfront_ecommerce_default_image_url, '/images/slider.png');
                if ($shopfront_ecommerce_uncategorized_attach_id) {
                    update_term_meta($shopfront_ecommerce_uncategorized_term->term_id, 'thumbnail_id', $shopfront_ecommerce_uncategorized_attach_id);
                }
            }
        }

        // Footer Copyright Text
        set_theme_mod('shopfront_ecommerce_copyright_line', 'Shopfront Ecommerce WordPress Theme');

        // Show success message and the "View Site" button
        echo '<div class="success">Demo Import Successful</div>';
    }
    ?>
    <ul>
        <li>
            <hr>
            <?php 
            if (!isset($_POST['submit'])) : ?>
                <!-- Show demo importer form only if it's not submitted -->
                <?php echo esc_html('Click on the below content to get demo content installed.', 'shopfront-ecommerce'); ?>
                <br>
                <small><b><?php echo esc_html('Please take a backup if your website is already live with data. This importer will overwrite existing data.', 'shopfront-ecommerce'); ?></b></small>
                <br><br>

                <form id="demo-importer-form" action="" method="POST" onsubmit="return confirm('Do you really want to do this?');">
                    <input type="submit" name="submit" value="<?php echo esc_attr('Run Importer', 'shopfront-ecommerce'); ?>" class="button button-primary button-large">
                </form>
            <?php 
            endif; 

            if (isset($_POST['submit'])) {
                echo '<div class="view-site-btn">';
                echo '<a href="' . esc_url(home_url()) . '" class="button button-primary button-large" style="margin-top: 10px;" target="_blank">View Site</a>';
                echo '</div>';
            }
            ?>
            <hr>
        </li>
    </ul>
</div>
