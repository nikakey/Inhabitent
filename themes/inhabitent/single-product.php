<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		
			<div class="product-image-container">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</div>
		
			<div class="product-content-container">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

			<div class="entry-content">
				<h3 class="price"><?php echo esc_html(CFS()->get( 'price' )); ?></h3>
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
				
				<div class="social-btns">
					<button class="black-btn"><i class="fab fa-facebook-f" data-fa-transform="shrink-4"></i><span>Like</span></button>
					<button class="black-btn"><i class="fab fa-twitter" data-fa-transform="shrink-4"></i><span>Tweet</span></button>
					<button class="black-btn"><i class="fab fa-pinterest" data-fa-transform="shrink-4"></i><span>Pin</span></button>
				</div>
			</div><!-- .entry-content -->
			</div>
		</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
