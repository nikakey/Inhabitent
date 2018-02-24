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

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="social-btns">
				<button class="black-btn"><i class="fab fa-facebook-f" data-fa-transform="shrink-4"></i><span>Like</span></button>
				<button class="black-btn"><i class="fab fa-twitter" data-fa-transform="shrink-4"></i><span>Tweet</span></button>
				<button class="black-btn"><i class="fab fa-pinterest" data-fa-transform="shrink-4"></i><span>Pin</span></button>
			</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
