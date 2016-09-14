<?php
/*
	Template Name: Portfolio
*/
?>
<?php get_header(); ?>

<h1 class="heading-first">
	<?php the_title(); ?>
</h1>

<!-- Portfolio loop -->
<?php
	$query = new WP_Query( array( 'cat' => '73' ) );
?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<p><?php echo strip_tags( get_the_excerpt() ); ?></p>

<?php if(get_the_post_thumbnail() ) : ?>
	<div class="image">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
<?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
<!-- Portfolio loop end -->


<?php get_footer(); ?>
