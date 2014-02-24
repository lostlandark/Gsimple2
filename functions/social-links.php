<?php
/**
 * Array of social links
 *
 * @package WordPress
 * @subpackage Blogger WPExplorer Theme
 * @since Blogger 1.0
 */


if ( ! function_exists( 'wpex_social_links()' ) ) {
	function wpex_social_links() {
		return apply_filters( 'wpex_social_array', array( 'weibo','github','twitter', 'linkedin', 'pinterest', 'rss' ) );
	} // End function
} // End if