<?php
/**
 * Template Name: About Page
 * 
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" >
                    <div class="header-about">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
                </header><!-- .entry-header -->

                <div class="entry-content container">
                    <div class="about-content">
                        <?php the_content(); ?>
                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>