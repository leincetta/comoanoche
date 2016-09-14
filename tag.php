<?php get_header(); ?>

<h1>Tag: <?php single_tag_title(); ?></h1>


<!-- The Loop -->
<h2>Articles</h2>
<ul>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</ul>
<!-- End of The Loop -->








<?php get_footer(); ?>