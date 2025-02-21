<?php

require get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function prime_fashion_magazine_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Posts Like Dislike', 'prime-fashion-magazine' ),
			'slug'             => 'posts-like-dislike',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'prime_fashion_magazine_register_recommended_plugins' );