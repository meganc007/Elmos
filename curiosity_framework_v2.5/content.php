<?php
/**
 * @package Curiosity
 */
?>
    <!-- wrapper -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'curiosity' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

                <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'curiosity' ),
				'after'  => '</div>',
			) );
		?>
        </div>
        <!-- .entry-content -->

        <footer class="entry-footer">
            <?php curiosity_entry_footer(); ?>
        </footer>
        <!-- .entry-footer -->
    </article>
    <!-- #post-## -->
    <!-- wrapper -->
