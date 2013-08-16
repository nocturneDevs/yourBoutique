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
					<div id="column1">
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>cart/">Cart</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account/">My Account</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>cart/logout/">Logout</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Contact Us</a></p>
					</div>
					<div id="column2">
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>?product_tag=new">What's New</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>?product_tag=featured">Featured</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>?product_tag=clothing">Clothing</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>?product_tag=bags">Bags</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>?product_tag=accessories">Accessories</a></p>
					</div>
				</div>
				<div id="footerPages">
					<div id="column3">
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>faqs/">FAQs</a></p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-and-conditions/">Terms and Conditions</a></p>
					</div>
					
					<div id="column4">
						
					</div>
				</div>
				<div id="footerSocial">
					<div id="footerSocialButtons">
						<a href="<?php echo esc_url('https://www.facebook.com/pages/YourBoutique/400076350083620'); ?>" title="<?php esc_attr_e( 'Like YB on Facebook!'); ?>" target="_blank" class="socialButton" id="facebookSocial"><i class="icon-facebook icon-3x"></i></a>
						<a href="<?php echo esc_url('http://www.twitter.com'); ?>" title="<?php esc_attr_e( 'Follow YB on Twitter!'); ?>" target="_blank" class="socialButton" id="twitterSocial"><i class="icon-twitter icon-3x"></i></a>
						<a href="<?php echo esc_url('https://pinterest.com'); ?>" title="<?php esc_attr_e( 'Check out YB on Pinterest!'); ?>" target="_blank" class="socialButton" id="pinterestSocial"><i class="icon-pinterest icon-3x"></i></a>
						<a href="<?php echo esc_url('http://www.youtube.com'); ?>" title="<?php esc_attr_e( 'Subscribe to YB on YouTube!'); ?>" target="_blank" class="socialButton" id="youtubeSocial"><i class="icon-youtube icon-3x"></i></a>
						<a href="<?php echo esc_url('http://www.gmail.com'); ?>" title="<?php esc_attr_e( 'Email YB!'); ?>" target="_blank" class="socialButton" id="mailSocial"><i class="icon-envelope icon-3x"></i></a>
					</div>
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