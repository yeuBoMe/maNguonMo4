<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prime_fashion_magazine
 */
$prime_fashion_magazine_heading_setting  = get_theme_mod( 'prime_fashion_magazine_post_heading_setting' , true );
$prime_fashion_magazine_meta_setting  = get_theme_mod( 'prime_fashion_magazine_post_meta_setting' , true );
$prime_fashion_magazine_content_setting  = get_theme_mod( 'prime_fashion_magazine_post_content_setting' , true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		  if ( $prime_fashion_magazine_heading_setting ){ 
			if ( is_single() ) {
				the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		  }

		if ( 'post' === get_post_type() ) : ?>
		<?php
		if ( $prime_fashion_magazine_meta_setting ){ ?>
			<div class="entry-meta">
				<?php prime_fashion_magazine_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php } ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	 <?php
		    // Check if there is a gallery embedded in the post content
		    $prime_fashion_magazine_post_id = get_the_ID(); // Add this line to get the post ID
		    $prime_fashion_magazine_single_content_setting = get_post_gallery();

		    if (!empty($prime_fashion_magazine_single_content_setting)) {
		        // Display the gallery
		        echo '<div class="embedded-gallery">' . do_shortcode($prime_fashion_magazine_single_content_setting) . '</div>';
		    }
		?>
    <?php
	if ( $prime_fashion_magazine_content_setting ){ ?>
		<div class="entry-content" itemprop="text">
			<?php
			if( is_single()){
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'prime-fashion-magazine' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
				}else{
				the_excerpt();
				}
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'prime-fashion-magazine' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
    <?php } ?>
</article><!-- #post-## -->