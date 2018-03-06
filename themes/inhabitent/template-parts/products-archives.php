<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="image-wrapper">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
      </div>
    <?php endif; ?>
    <div class="content-products-wrapper">
      <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      <span class="price"><?php echo esc_html(CFS()->get( 'price' )); ?></span>
    </div>

  </header><!-- .entry-header -->

</article><!-- #post-## -->