<?php
get_header();
?>

    <main id="primary" class="site-main">
            <?php
            while ( have_posts() ) :
                the_post();
            endwhile; // End of the loop.
            the_content();
            ?>
    </main><!-- #main -->

<?php
get_footer();

