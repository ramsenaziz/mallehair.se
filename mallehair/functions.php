<?php
/**
 * Theme support
 */
add_theme_support( 'post-thumbnails' ); 


/**
 * Load our styles.
 */
function mallehair_load_assets() {
	// Styles
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Oswald|Roboto|Roboto+Slab:300,400' );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
	wp_enqueue_style( 'mallehair-css', get_stylesheet_uri() );

	// Scripts
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'mallehair-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'mallehair_load_assets' );


function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"><br><br>Läs mer...</a>';
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"><br><br>Läs mer...</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
?>