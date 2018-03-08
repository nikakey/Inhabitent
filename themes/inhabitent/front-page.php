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
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co. Logo">
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
								<a href="<?php echo get_term_link( $term ); ?>" class="btn">
									<?php echo $term->name; ?> Stuff
								</a>
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
							<div class="journal-image-wrapper">
								<?php the_post_thumbnail('medium_large'); ?>
							</div>
							<div class="journal-content-wrapper">
								<p>
									<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<a href="<?php the_permalink(); ?>"><button class="black-btn">Read Entry</button></a>
							</div>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>

			</section>

			<section class="adventures-info-container">

				<h2>Latest Adventures</h2>

				<!-- Getting the adventures posts data -->
			
				<?php
   					$args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'numberposts' => 4 );
   					$adventure_posts = get_posts( $args ); // returns an array of posts
				?>

				<div class="adventures-block-wrapper">
					<?php 
						$i = 0; 
						$count = 0; 
					?>
					<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
						<?php 
							$i++;
							$count = $i;
						?>
						<div class="adventure-block-<?php echo $count; ?>">
							<?php 
								if( $count == 1 ) :
							?>
								<div class= "adventure-image-wrapper">
									<?php the_post_thumbnail('full'); ?>
								</div>
							<?php else : ?>
								<div class= "adventure-image-wrapper">
									<?php the_post_thumbnail('medium_large'); ?>
								</div>
							<?php endif; ?>

							<a href="<?php the_permalink(); ?>"><h3 class="adventure-title"><?php the_title(); ?></h3></a>
							<a class="white-btn" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>

				<a class="adventures-btn" href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">More Adventures</a>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>