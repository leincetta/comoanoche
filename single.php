<?php get_header(); ?>

	<?php
        if ( have_posts() ) { the_post(); rewind_posts(); }
        if ( in_category(73) ) {
            include(TEMPLATEPATH . '/single-portfolio.php');
        }
        else {
            include(TEMPLATEPATH . '/single-blog.php');
        }
    ?>

<?php get_footer(); ?>