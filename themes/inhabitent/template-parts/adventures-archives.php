<article id="post-<?php the_ID(); ?>" <?php post_class('adventure-item'); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="image-wrapper">
        <?php the_post_thumbnail( 'full' ); ?>
      </div>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
    <a class="white-btn" href="<?php the_permalink(); ?>">Read More</a>

</article><!-- #post-## -->