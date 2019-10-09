<?php

function load_styles() {
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

// require get_template_directory() . '/custom-gutenberg.php';
// require get_template_directory() . '/custom-gutenberg/custom-gutenberg.php';

?>