<?php
// File: themes/hello-elementor-child-theme/child/child-functions.php

// Add custom inline CSS to footer
function add_custom_inline_css_to_footer(): void
{
    $custom_css = "

.select2-container--default .select2-selection--single .select2-selection__rendered,
.um-field .select2.select2-container .select2-selection,
.um-search-filter .select2.select2-container .select2-selection {
	background: #4c4c4c !important;
}
    ";

    echo "<style> $custom_css </style>";
}
add_action('wp_footer', 'add_custom_inline_css_to_footer', 100);

// Include child theme constants
require_once get_stylesheet_directory() . '/child/includes/include-child-constants.php';

//require_once CHILD_ADMIN_DIRECTORY . 'create_qna_interaction_table.php'; // Create the interactions table if it doesn't exist

require_once CHILD_INCLUDES_DIRECTORY . 'include-cpts.php'; // All custom post types are included here
require_once CHILD_INCLUDES_DIRECTORY . 'include-actions.php'; // All actions are included here
require_once CHILD_INCLUDES_DIRECTORY . 'include-styles.php'; // All stylesheets are enqueued here
require_once CHILD_INCLUDES_DIRECTORY . 'include-scripts.php'; // All scripts are enqueued here
require_once CHILD_INCLUDES_DIRECTORY . 'include-shortcodes.php'; // All shortcodes are included here
require_once CHILD_INCLUDES_DIRECTORY . 'include-elementor.php'; // All Elementor related functions are included here
require_once CHILD_INCLUDES_DIRECTORY . 'include-gravityforms.php'; // All Gravity Forms related functions are included here
require_once CHILD_INCLUDES_DIRECTORY . 'include-utils.php'; // All utility functions are included here
require_once CHILD_INCLUDES_DIRECTORY . 'include-templates.php'; // All custom templates are included here


////////////////////////////////////////////////////////////////////////////////////////
/// Add custom functions below this line
////////////////////////////////////////////////////////////////////////////////////////

// Redirect users to the homepage after logging out
function custom_logout_handler() {
    if ( isset( $_GET['bhlogout'] ) ) { // call it in url like: /?bhlogout=1 to log out and redirect to homepage
        wp_logout();
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'init', 'custom_logout_handler' );
