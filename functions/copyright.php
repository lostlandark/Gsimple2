<?php
/**
 * Outputs the footer copyright info
 * @package WordPress
 * @subpackage Blogger WPExplorer Theme
 * @since Blogger 1.0
 */


if ( ! function_exists( 'wpex_copyright' ) ) {
	function wpex_copyright() {
		echo get_theme_mod('wpex_copyright', 'Powered by <a href=\"http://www.wordpress.org\" title="WordPress" target="_blank">WordPress</a> and <a href=\"http://ice.gs" target="_blank" title="GGICE" rel="nofollow">GGICE Themes</a>');
	} // end wpex_copyright
} // end function_exists 