<article id="post-<?php the_ID(); ?>" <?php post_class('adventure-item'); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="image-wrapper">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
      </div>
    <?php endif; ?>
    <div class="content-adventures-wrapper">
      <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      <button class="white-btn">Read More</button></a>
    </div>

  </header><!-- .entry-header -->

</article><!-- #post-## -->