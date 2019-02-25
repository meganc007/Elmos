<?php get_header('inner'); ?>
    <div id="primary" class="content-area margin-50">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

                    <?php // If comments are open or we have at least one comment, load up the comment template if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

                        <?php endwhile; // end of the loop. ?>

        </main>
    </div>

    <?php get_footer(); ?>
