<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Blogger WPExplorer Theme
 * @since Blogger 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<!--seo---> 
<?php
if (is_home()){
    $keywords = "ggice,极冰网,伟伟道来,linux,MAC OSX,raspberry pi,wordpress,前端开发 ";
    $description = "极冰网,网罗新奇 / Share Code / Record Coding,一个互联网资讯、技术类分享博客";
}
elseif (is_single()){
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag){
        $keywords = $keywords.$tag->name.",";
    }
    $keywords = rtrim($keywords, ', ');
    if($post->post_excerpt){
        $description = $post->post_excerpt;
    }else{
        $description = mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200);
    }
}
elseif (is_page()){
    $keywords = get_post_meta($post->ID, "keywords", true);
    $description = get_post_meta($post->ID, "description", true);
}
elseif (is_category()){
    $keywords = single_cat_title('', false);
    $description = category_description();
}
elseif (is_tag()){
    $keywords = single_tag_title('', false);
    $description = tag_description();
}
$keywords = trim(strip_tags($keywords));
$description = trim(strip_tags($description));
?>
<!---->
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<!--seo end--->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php if ( '1' == get_theme_mod( 'wpex_nav', '1' ) ) { ?>
		<div id="fix"><div id="site-navigation-wrap">
            <?php
				// Outputs the site logo
				// See functions/logo.php
				wpex_logo();
            ?>
			<div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
			<nav id="site-navigation" class="navigation main-navigation clr container" role="navigation">
				<a href="#sidr-main" id="navigation-toggle"><span class="fa fa-bars"></span><?php echo __( 'Menu', 'wpex' ); ?></a>
				<?php
				// Display main menu
				wp_nav_menu( array(
					'theme_location'	=> 'main_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'dropdown-menu sf-menu',
					'fallback_cb'		=> false
				) ); ?>
			</nav><!-- #site-navigation -->
		</div></div><!-- #site-navigation-wrap -->
	<?php } ?>

	<div id="wrap" class="clr">

		<div id="header-wrap" class="clr">
			<header id="header" class="site-header clr container" role="banner">
                <div class="logo-text"><?php echo get_bloginfo( 'description' );  ?></div>
                <?php
				// Social links
				wpex_header_aside(); ?>
			</header><!-- #header -->
		</div><!-- #header-wrap -->
		
		<div id="main" class="site-main clr container">