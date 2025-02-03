<?php

/* Function to enqueue stylesheet from parent theme */
function child_enqueue__parent_scripts(): void
{
    // Enqueue parent theme's stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css?h='.uniqid('', true));

    // Enqueue child theme's stylesheet
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css?h='.uniqid('', true),
        array('parent-style'), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'child_enqueue__parent_scripts' );

require_once get_stylesheet_directory() . '/child/child-functions.php';

////////////////////////////////////////////////////////////////////////////////////////
/// Add custom functions below this line
////////////////////////////////////////////////////////////////////////////////////////


