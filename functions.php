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


// Function to check the size of the debug.log file and manage it (delete if above 50MB)
function manage_debug_log_size($file_path, $max_size = 52428800): void
{
    if (file_exists($file_path) && filesize($file_path) > $max_size) {
        unlink($file_path);
        file_put_contents($file_path, '');
    }
}
add_action('init', 'check_debug_log_size_on_init');
function check_debug_log_size_on_init(): void
{
    if (defined('WP_DEBUG_LOG') && WP_DEBUG_LOG) {
        manage_debug_log_size(DEBUG_LOG_PATH, 52428800); // 50MB limit
    }
}
// End of debug.log file management function


////////////////////////////////////////////////////////////////////////////////////////
/// Add custom functions below this line
////////////////////////////////////////////////////////////////////////////////////////


