<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
<div class="parallax-container valign-wrapper">
	<div class="container valign">
		<div class="row">
			<div class="col s12 m6 <?php the_field('image_text_overlay'); ?>">
				<h1><?php the_title(); ?></h1>
				<p class="flow-text"><?php the_field('subtitulo'); ?></p>
			</div>
		</div>
	</div>
	<div class="parallax" style="background: url(<?php
		$thumb_id  = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
		echo $thumb_url[0];
	?>) no-repeat center center;
	background-size:cover;
	-webkit-filter: blur(10px);
	-moz-filter: blur(10px);
	-o-filter: blur(10px);
	-ms-filter: blur(10px);
	filter: blur(10px);">
	</div>
</div>
<section>
	<div class="container floating-thumb">
		<div class="row">
			<div class="col s12 m6 offset-m6">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="z-depth-3" />
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<br>
			<div class="col s12 m8">
				<p>
					<a href="#liveradio" class="waves-effect waves-light btn-large modal-trigger red">
						Escuchá la radio
					</a>
					<br><br>
				</p>
				<article class="">
					<?php the_content(); ?>
				</article>
			</div>
			<div class="col s12 m3 offset-m1">
        <?php get_sidebar('sidebar-blog'); ?>
      </div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
<?php get_footer(); ?>
