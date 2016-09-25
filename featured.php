
<?php
$args = array( 'post_type' => 'intro', 'posts_per_page' => 1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="point-1"></div>


<div class="home-intro" style="background-image: url(<?php the_field('background-image'); ?>)">

<div class="home-intro-inside">
  <h1 class="<?php the_field('intro_text_color'); ?>">
 <?php the_field('intro-text'); ?>
  </h1>
  <a class="scroll-down <?php the_field('button_text_color'); ?>" style="background-color: <?php the_field('button-background-color'); ?>">
<?php  the_field('button-text'); ?>
  </a>
  </div>
  </div>

  <div class="space"></div>

  <script>


  jQuery("body").addClass("intro-is");


  </script>

<?php
endwhile;
?>
