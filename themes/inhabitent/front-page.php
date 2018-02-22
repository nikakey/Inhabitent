<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Banner Section -->

			<section class="front-page-banner">
				<img src="<?php bloginfo('template_url'); ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co. Logo">
			</section>

			<!-- Shop Section -->

			<section class="product-info-container">
			
				<h2>Shop Stuff</h2>

				<!-- Getting the products taxonomy data -->

				<?php
					$terms = get_terms( array (
						'taxonomy' => 'product_type',
						'hide_empty' => 0,
						) 
					);
				if ( ! empty( $terms ) ) :
				?>
					<!-- Displaying the products taxonomy data -->

					<div class="product-type-blocks">
						<?php foreach ( $terms as $term ) :
						?>
							<div class="product-type-block-wrapper">
								<img src="<?php echo get_template_directory_uri() .
									'/images/product-type-icons/' . $term->slug; ?>.svg"
									alt="<?php echo $term->name; ?>"/>
								<p><?php echo $term->description; ?></p>
								<button href="<?php echo get_term_link( $term ); ?>">
									<?php echo $term->name; ?> Stuff
								</button>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</section>

			<!-- Journal Section -->
			
			<section class="journal-info-container">
			
				<h2>Inhabitent Journal</h2>

				<!-- Getting the journal posts data -->
			
				<?php
   					$args = array( 'post_type' => 'post', 'order' => 'DESC', 'numberposts' => 3 );
   					$journal_posts = get_posts( $args ); // returns an array of posts
				?>

				<!-- Displaying the journal posts data -->

				<div class="journal-post-blocks">
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
						<div class="journal-post-block-wrapper">
							<?php the_post_thumbnail('medium_large'); ?>
							<p>
								<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							</p>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>