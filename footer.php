<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Blogger WPExplorer Theme
 * @since Blogger 1.0
 */
?>

	</div><!-- #main-content -->
</div><!-- #wrap -->

<footer id="footer-wrap" class="site-footer clr">
	<div id="footer" class="container clr">
		<div id="footer-widgets" class="clr">
			<div class="footer-box span_1_of_3 col col-1">
				<?php dynamic_sidebar( 'footer-one' ); ?>
			</div><!-- .footer-box -->
			<div class="footer-box span_1_of_3 col col-2">
				<?php dynamic_sidebar( 'footer-two' ); ?>
			</div><!-- .footer-box -->
			<div class="footer-box span_1_of_3 col col-3">
				<?php dynamic_sidebar( 'footer-three' ); ?>
			</div><!-- .footer-box -->
		</div><!-- #footer-widgets -->
	</div><!-- #footer -->
</footer><!-- #footer-wrap -->

<div id="copyright" role="contentinfo" class="clr">
	<div class="container clr">
    <p>Copyright © 2013-2014  <?php bloginfo(’name’); ?>. All Rights Reserved. Designed by GGICE | <a href="https://github.com/ggice/Gsimple2" target="_blank">下载本站</a> | <script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F288b1c370ad06386a2ee2c4dc166f15d' type='text/javascript'%3E%3C/script%3E"));</script>.</p>
		</div><!-- .container -->
</div><!-- #copyright -->

<?php wp_footer(); ?>
</body>
</html>