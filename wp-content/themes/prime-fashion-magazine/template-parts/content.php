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
$prime_fashion_magazine_image_setting  = get_theme_mod( 'prime_fashion_magazine_post_image_setting' , true );
$prime_fashion_magazine_content_setting  = get_theme_mod( 'prime_fashion_magazine_post_content_setting' , true );
$prime_fashion_magazine_read_more_setting = get_theme_mod( 'prime_fashion_magazine_read_more_setting' , true );
$prime_fashion_magazine_read_more_text = get_theme_mod( 'prime_fashion_magazine_read_more_text', __( 'Read More', 'prime-fashion-magazine' ) );
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
	<?php if ( $prime_fashion_magazine_image_setting ) { ?>
		<?php echo ( !is_single() ) ? '<a href="' . esc_url( get_the_permalink() ) . '" class="post-thumbnail">' : '<div class="post-thumbnail">'; ?>

		<?php if ( has_post_thumbnail() ) { 
			if ( is_active_sidebar( 'right-sidebar' ) ) {
				the_post_thumbnail( 'prime-fashion-magazine-with-sidebar', array( 'itemprop' => 'image' ) );
			} else {
				the_post_thumbnail( 'prime-fashion-magazine-without-sidebar', array( 'itemprop' => 'image' ) );
			}
		} else { ?>
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/default-header.png' ); ?>" alt="Default Image">
		<?php } ?>

		<?php echo ( !is_single() ) ? '</a>' : '</div>'; ?>
	<?php } ?>
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
    <?php if ( !is_single() && $prime_fashion_magazine_read_more_setting ) { ?>
        <div class="read-more-button">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more-button"><?php echo esc_html( $prime_fashion_magazine_read_more_text ); ?></a>
        </div>
    <?php } ?>
</article><!-- #post-## -->