<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div class="parallax-container valign-wrapper" style="height: 100vh">
    <div class="container valign">
      <div class="row center">
        <h1 class="header center white-text">
          <?php bloginfo('description'); ?>
        </h1>
          <a href="#liveradio" class="waves-effect waves-light btn-large modal-trigger red">
            Escuchá la radio
          </a>
          <br><br><br><br><br><br><br><br>
      </div>
  </div>
  <div class="parallax">
    <img src="<?php header_image(); ?>" alt="" />
  </div>
</div>


<section class="grey lighten-4">
  <div class="container">
    <div class="row">
      <div class="col s12 m8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="card medium">
                <div class="card-image" style="background: url(<?php
                  $thumb_id = get_post_thumbnail_id();
                  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                  echo $thumb_url[0];
                ?>) no-repeat center center;">
                </div>
                <div class="card-content">
                  <span class="card-title">
                    <a class="black-text" href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a>
                  </span>
                  <p><?php the_field('subtitulo'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col s12 m3 offset-m1">
        <?php get_sidebar('sidebar-home'); ?>
      </div>
    </div>
  </div>
</section>








<?php get_footer(); ?>
