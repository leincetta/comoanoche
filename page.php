<?php get_header(); ?>

<!-- The loop starts here -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1 class="heading-first">
	<?php the_title(); ?>
</h1>

<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>
<!-- The loop ends here -->


<?php get_footer(); ?>