    <!-- Player -->
    <?php get_template_part('partials/streaming-player'); ?>
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri().'/build/js/script.min.js' ?>"></script> -->
    <!-- Materialize activation -->
    <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax(); // Parallax
      $(".button-collapse").sideNav(); // Nav
      $('.modal-trigger').leanModal();
      $('.tabs-wrapper').pushpin({ top: $('.tabs-wrapper').offset().top });
    });
    </script>
    <!-- Output any code that need to come before closing the body tag -->
    <?php wp_footer(); ?>
  </body>
</html>
