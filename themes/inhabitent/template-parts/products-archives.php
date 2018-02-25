<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="image-wrapper">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
      </div>
    <?php endif; ?>

    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', 
    esc_url( get_permalink() ) ), '</a></h2>' ); ?>

    <?php echo CFS()->get( 'price' ); ?>

  </header><!-- .entry-header -->

</article><!-- #post-## -->