<?php get_header(); ?>

<h1 class="heading-first">
	Journal
</h1>

<!-- Blog loop -->
<?php
	$query = new WP_Query( array( 'cat' => '-73' ) );
?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<p class="date">
	<?php the_date( 'F j, Y' ); ?>
</p>

<h3 class="list-heading">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h3>

<?php the_excerpt(); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
<!-- Blog loop end -->

<?php get_footer(); ?>