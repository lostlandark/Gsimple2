 <?php
/**
 * @package WordPress
 * @subpackage Blogger WPExplorer Theme
 * @since Blogger 1.0
 * Template Name: Portfolio
 */
get_header(); ?>
        <div id="primary">
            <div class="content" id="content-porfolio" role="main">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="thumbnail-width"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>

                <?php get_template_part( 'content', 'page' ); ?>

                <?php comments_template(); ?>

            <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->
<?php get_footer(); ?>