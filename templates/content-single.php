<?php 
/**
 * @Packge     : Industry
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!-- Post Item Start -->
<div id="<?php the_ID(); ?>" <?php post_class( esc_attr( 'single-blog-post content--area' ) ); ?>>

	<?php
	/**
	 * Blog Post thumbnail
	 * @Hook  industry_blog_posts_thumb
	 *
	 * @Hooked industry_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'industry_blog_posts_thumb' );
	
	/**
	 * Blog Post Meta
	 * @Hook  industry_blog_posts_meta
	 *
	 * @Hooked industry_blog_posts_meta_cb
	 * 
	 *
	 */
	do_action( 'industry_blog_posts_meta' );
		
	echo '<div class="blog-detail-txt">';
	/**
	 * Blog single page content 
	 * Post social share
	 * @Hook  industry_blog_posts_content
	 *
	 * @Hooked industry_blog_posts_content_cb
	 * 
	 *
	 */
	do_action( 'industry_blog_posts_content' );

	echo '</div>';

	/**
	 * Blog single post meta category, tag, next - previous link, comments form
	 * and biography
	 * @Hook  industry_blog_single_meta
	 * 
	 * @Hooked industry_blog_single_meta_cb
	 * 
	 *
	 */
	do_action( 'industry_blog_single_meta' );

	?>
</div>
<?php
	
// comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}
	
?>           