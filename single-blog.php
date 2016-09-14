<?php get_header(); ?>

<h1 class="heading-first">
	<?php the_title(); ?>
</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if(get_the_post_thumbnail() ) : ?>
		<div class="image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
	<?php endif; ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
