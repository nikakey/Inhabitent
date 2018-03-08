<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

                    
            <section class="adventure-info-container">

                <header class="page-header">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                    ?>
                </header><!-- .page-header -->

                <?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>
                    <div class="adventures-wrapper">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'template-parts/adventures-archives', 'none' ); ?>
                            
                        <?php endwhile; ?>
                    </div>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>