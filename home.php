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

	<div id="whatsNewWrapper" class="homeSectionWrapper">

		<a href="/?product_tag=new"><h1 class="page-title">What's New</h1></a>
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
	</div> <!-- whatsnewwrapper -->

	<div id="featuredWrapper" class="homeSectionWrapper">
		<a href="/?product_tag=featured"><h1 class="page-title">Featured</h1></a>
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
	</div> <!-- featuredwrapper -->


	<div id="clothingWrapper" class="homeSectionWrapper">
		<a href="/?product_tag=clothing"><h1 class="page-title">Clothing</h1></a>
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
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
	</div> <!-- clothingwrapper -->

	<div id="bagsWrapper" class="homeSectionWrapper">
		<a href="/?product_tag=bags"><h1 class="page-title">Bags</h1></a>

		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
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
	</div> <!-- bagswrapper -->


	<div id="accessoriesWrapper" class="homeSectionWrapper homeSectionWrapperLast">

		<a href="/?product_tag=accessories"><h1 class="page-title">Accessories</h1></a>
		<?php 
		$args = array(
		                'post_type' => 'product',
		                'showposts' => 4,
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
	</div> <!-- accessorieswrapper -->				

</div> <!-- homewrapper -->


<?php get_footer(); ?>

