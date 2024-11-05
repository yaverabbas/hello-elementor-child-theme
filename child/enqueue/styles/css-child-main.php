<?php

// Enqueue child-main.css
add_action('wp_enqueue_scripts', 'child_enqueue__child_styles');
function child_enqueue__child_styles(): void
{
    wp_enqueue_style('child-main',
        CHILD_CSS_DIRECTORY . 'child-main.css?h='.uniqid('', true),
        array(), '1.0', 'all');
}