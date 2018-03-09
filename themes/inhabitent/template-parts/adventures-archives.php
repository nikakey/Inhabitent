<article id="post-<?php the_ID(); ?>" <?php post_class('adventure-item'); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="image-wrapper">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
      </div>
    <?php endif; ?>
    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    <button class="white-btn">Read More</button></a>

</article><!-- #post-## -->