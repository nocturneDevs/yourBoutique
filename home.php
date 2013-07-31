<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header('shop'); ?>

<div id="homeWrapper">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
        	$('#featured-carousel').carousel({
        //options here
        });
    });
	</script>
	<div id="carousel-featured" class="carousel slide">
	 	<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-featured" data-slide-to="1"></li>
			<li data-target="#carousel-featured" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src= "<?php echo get_template_directory_uri(); ?>/resources/images/carousel1.jpg" width="100%">
				<div class="carousel-caption">
				</div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/resources/images/carousel2.jpg" width="100%">
				<div class="carousel-caption">
				</div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/resources/images/carousel3.jpg" width="100%">
				<div class="carousel-caption">
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-featured" data-slide="prev">.</a>
		<a class="right carousel-control" href="#carousel-featured" data-slide="next">.</a>

	</div>

	<div id="whatsNewWrapper" class="homeSectionWrapper">

		<a href="/?product_tag=new"><h1 class="page-title">What's New</h1></a>
		<div class="homeSectionProducts">
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_tag',
		                		'field' => 'slug',
		                		'terms' => 'new'
		                	)
		                )
		            );
		$wp_query = new WP_Query( $args );
		?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php if ( have_posts() ) : ?>
					<?php
						/**
						 * woocommerce_before_shop_loop hook
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
					<?php woocommerce_product_loop_start(); ?>
						<?php woocommerce_product_subcategories(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php woocommerce_get_template_part( 'content', 'product' ); ?>
						<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>
					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
					<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
				<?php endif; ?>
		</div>
	</div> <!-- whatsnewwrapper -->

	<div id="featuredWrapper" class="homeSectionWrapper">
		<a href="/?product_tag=featured"><h1 class="page-title">Featured</h1></a>
		<div class="homeSectionProducts">
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_tag',
		                		'field' => 'slug',
		                		'terms' => 'featured'
		                	)
		                )
		            );
		$wp_query = new WP_Query( $args );
		?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php if ( have_posts() ) : ?>
					<?php
						/**
						 * woocommerce_before_shop_loop hook
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
					<?php woocommerce_product_loop_start(); ?>
						<?php woocommerce_product_subcategories(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php woocommerce_get_template_part( 'content', 'product' ); ?>
						<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>
					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
					<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
				<?php endif; ?>
		</div>
	</div> <!-- featuredwrapper -->


	<div id="clothingWrapper" class="homeSectionWrapper">
		<a href="/?product_tag=clothing"><h1 class="page-title">Clothing</h1></a>
		<div class="homeSectionProducts">
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 1,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_tag',
		                		'field' => 'slug',
		                		'terms' => 'clothing'
		                	)
		                )
		            );
		$wp_query = new WP_Query( $args );
		?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php if ( have_posts() ) : ?>
					<?php
						/**
						 * woocommerce_before_shop_loop hook
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
					<?php woocommerce_product_loop_start(); ?>
						<?php woocommerce_product_subcategories(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php woocommerce_get_template_part( 'content', 'product' ); ?>
						<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>
					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
					<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
				<?php endif; ?>
		</div>
	</div> <!-- clothingwrapper -->

	<div id="bagsWrapper" class="homeSectionWrapper">
		<a href="/?product_tag=bags"><h1 class="page-title">Bags</h1></a>
		<div class="homeSectionProducts">
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 1,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_tag',
		                		'field' => 'slug',
		                		'terms' => 'bags'
		                	)
		                )
		            );
		$wp_query = new WP_Query( $args );
		?>

		<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php if ( have_posts() ) : ?>
					<?php
						/**
						 * woocommerce_before_shop_loop hook
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
					<?php woocommerce_product_loop_start(); ?>
						<?php woocommerce_product_subcategories(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php woocommerce_get_template_part( 'content', 'product' ); ?>
						<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>
					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
					<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
				<?php endif; ?>
		</div>
	</div> <!-- bagswrapper -->


	<div id="accessoriesWrapper" class="homeSectionWrapper homeSectionWrapperLast">

		<a href="/?product_tag=accessories"><h1 class="page-title">Accessories</h1></a>
		<div class="homeSectionProducts">
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 1,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_tag',
		                		'field' => 'slug',
		                		'terms' => 'accessories'
		                	)
		                )
		            );
		$wp_query = new WP_Query( $args );
		?>

		<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php if ( have_posts() ) : ?>
					<?php
						/**
						 * woocommerce_before_shop_loop hook
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
					<?php woocommerce_product_loop_start(); ?>
						<?php woocommerce_product_subcategories(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php woocommerce_get_template_part( 'content', 'product' ); ?>
						<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>

					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
					<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
				<?php endif; ?>
		</div>
	</div> <!-- accessorieswrapper -->				

</div> <!-- homewrapper -->


<?php get_footer(); ?>

