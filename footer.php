<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</div><!-- #main .wrapper -->
	</div><!-- #page -->
	<footer id="colophon" role="contentinfo">
	<div id="footerWrapper">
				<div id="footerNav">
				</div>
				<div id="footerDetailText">
				</div>
				<div id="footerSocialBar">
					<a href="<?php echo esc_url('http://www.facebook.com'); ?>" title="<?php esc_attr_e( 'Like YB on Facebook!'); ?>" target="_blank"><i class="icon-facebook icon-3x"></i></a>
					<a href="<?php echo esc_url('http://www.twitter.com'); ?>" title="<?php esc_attr_e( 'Follow YB on Twitter!'); ?>" target="_blank"><i class="icon-twitter icon-3x"></i></a>
					<a href="<?php echo esc_url('http://www.gmail.com'); ?>" title="<?php esc_attr_e( 'Email YB!'); ?>" target="_blank"><i class="icon-envelope icon-3x"></i></a>
				</div>
			<div class="site-info">
				<a href="<?php echo esc_url('http://nocturnedevs.com/'); ?>" title="<?php esc_attr_e( 'Nocturne - Coffee, Cola and Code'); ?>" target="_blank"><?php echo 'Developed by Nocturne'; ?></a>
			</div><!-- .site-info -->
	</div><!-- #footerWrapper -->
	</footer><!-- #colophon -->
</div><!-- #bodyWrapper -->

<?php wp_footer(); ?>
</body>
</html>