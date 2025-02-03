<?php

/* Enqueue child-main.js */
add_action('wp_enqueue_scripts', 'child_enqueue__child_scripts');
function child_enqueue__child_scripts(): void
{
    wp_enqueue_script('child-main',
        CHILD_JS_DIRECTORY . 'child-main.js', array('jquery'),
        uniqid('', true),
        true);

    // Localize the script with new data ajax_url and nonce
    wp_localize_script('child-main', 'child_main_object',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('child-main-nonce')
        )
    );
}
