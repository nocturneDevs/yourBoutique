<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header('shop'); ?>

<div id="homewrapper">

	<div id="whatsnewwrapper" class="homesectionwrapper">

		<a href="/?product_cat=whatsnew"><h1 class="page-title">What's New</h1></a>
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_cat',
		                		'field' => 'slug',
		                		'terms' => 'whatsnew'
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
	</div> <!-- whatsnewwrapper -->

	<div id="featuredwrapper" class="homesectionwrapper">
		<a href="/?product_cat=featured"><h1 class="page-title">Featured</h1></a>
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_cat',
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
	</div> <!-- featuredwrapper -->


	<div id="clothingwrapper" class="homesectionwrapper">
		<a href="/?product_cat=clothing"><h1 class="page-title">Clothing</h1></a>
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_cat',
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
	</div> <!-- clothingwrapper -->

	<div id="bagswrapper" class="homesectionwrapper">
		<a href="/?product_cat=bags"><h1 class="page-title">Bags</h1></a>

		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_cat',
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
	</div> <!-- bagswrapper -->


	<div id="accessorieswrapper" class="homesectionwrapper homesectionwrapperlast">

		<a href="/?product_cat=accessories"><h1 class="page-title">Accessories</h1></a>
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
		                'tax_query' => array (
		                	array (
		                		'taxonomy' => 'product_cat',
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
	</div> <!-- accessorieswrapper -->				

</div> <!-- homewrapper -->


<?php get_footer(); ?>

