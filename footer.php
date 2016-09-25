<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package brosco
 */
?>

	</div><!-- #content -->



	<div class="footer-widgets">

	<div class="row inside-wrapper">
	<div class="col-1-3">
	<?php if ( dynamic_sidebar('footer-1') ) : else : endif; ?>
	</div>
	<div class="col-1-3">
	<?php if ( dynamic_sidebar('footer-2') ) : else : endif; ?>
	</div>
	<div class="col-1-3">
	<?php if ( dynamic_sidebar('footer-3') ) : else : endif; ?>
	</div>
	</div>

	</div>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Como Anoche <?php echo date("Y") ?>. Posadas, Misiones. Argentina.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

