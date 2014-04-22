<?php
/**
 * @package WordPress
 * @subpackage Blogger WPExplorer Theme
 * @since Blogger 1.0
 * Template Name: Portfolio
 */
get_header(); ?>
<div id="#portfolio-wrap">
    <article class="boxed clr">
        <header class="page-header clr">
	       <h1 class="page-header-title"><?php the_title(); ?></h1>
	    </header><!-- #page-header -->
        <div class="portfolio-content">
            <?php
            //get post type ==> portfolio
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts(array(
                'post_type'=>'portfolio',
                'showposts'=> 9,
                'posts_per_page' => -1,
                'paged'=>$paged,
            ));
            ?>
        
            <?php
            $count=0;
            while (have_posts()) : the_post();
            $count++;
            
            //get portfolio thumbnail
            $thumbail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'grid-thumb');
            
            //get terms
            $terms = get_the_terms( get_the_ID(), 'portfolio_cats' );
            
            //show item if thumbnail is defined
            if ( has_post_thumbnail() ) {  ?>
            <article class="portfolio-item <?php if($terms) foreach ($terms as $term) echo $term->slug .' '; ?>">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail( 'template-portfolio' ); ?>
                    <div class="portfolio-overlay"><h3><?php echo the_title(); ?></h3></div><!-- portfolio-overlay -->
                </a>
            </article>
            <?php } endwhile; ?>
        </div><!-- /portfolio-content -->
        <?php wp_link_pages(); ?>  
    </article>
    <?php wp_link_pages(); ?>  
</div><!--/portfolio-wrap-->
<?php wp_link_pages(); ?>  
<?php get_footer();?>