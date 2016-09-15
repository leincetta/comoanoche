<!-- Home -->
<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
<div class="tabs-wrapper">
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
	</div>
</div>
<?php endif; ?>
