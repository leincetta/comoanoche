<?php

// Add CSS
function amalfi_theme_styles() {

	wp_enqueue_style( 'build_css', get_template_directory_uri() . '/build/css/build.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'amalfi_theme_styles' );


// Add JS
function amalfi_theme_js() {

	// False to be on top, true to be at the bottom:
	wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/build/js/script.min.js', '', '', true );
	// If it depends on jQuery:
	// wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'amalfi_theme_js' );


// Register Widget Areas
function amalfi_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

amalfi_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
amalfi_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


// Add support for featured images
add_theme_support( 'post-thumbnails' );


// Set maximum width for images 
update_option('thumbnail_size_w', 700);


// Disable medium and full size uploads
function amalfi_remove_default_image_sizes( $sizes) {

    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}

add_filter('intermediate_image_sizes_advanced', 'amalfi_remove_default_image_sizes');


// Remove Default Image Link
function amalfi_imagelink_setup() {

    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {

        update_option('image_default_link_type', 'none');

    }

}

add_action('admin_init', 'amalfi_imagelink_setup', 10);


// Add support for menus
add_theme_support( 'menus' );


// Register the theme menus
function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);

}

add_action( 'init', 'register_theme_menus' );


?>