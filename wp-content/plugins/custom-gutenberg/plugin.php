<?php

/**
* Plugin Name: Custom Gutenberg Block
* Author: istvanerdos
* Description: A custom title and input
* Version: 1.0
*/

function custom_gutenberg_title_editor() {
  wp_enqueue_script(
    'custom-title-block',
    plugins_url( 'gutenberg-block.js', __FILE__ ),
    array('wp-blocks','wp-editor'),
    true
  );
  wp_enqueue_style(
    'custom-title-block',
    plugins_url( 'custom-gutenberg.css', __FILE__ ),
    array()
 );
}

add_action('enqueue_block_editor_assets', 'custom_gutenberg_title_editor');