<?php

/* Function to enqueue stylesheet from parent theme */
function child_enqueue__parent_scripts(): void
{
    wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css?h='.uniqid('', true) );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue__parent_scripts' );

// Include child theme constants
require_once get_stylesheet_directory() . '/child/includes/include-child-constants.php';
require_once CHILD_INCLUDES_DIRECTORY . 'include-styles.php'; // All stylesheets are enqueued here
require_once CHILD_INCLUDES_DIRECTORY . 'include-scripts.php'; // All scripts are enqueued here

////////////////////////////////////////////////////////////////////////////////////////
/// Add custom functions below this line
////////////////////////////////////////////////////////////////////////////////////////

