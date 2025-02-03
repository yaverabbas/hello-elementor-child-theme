<?php
// Define constants
define( "CHILD_BACKEND_DIRECTORY_PATH", get_stylesheet_directory() . '/child/' );
define( "CHILD_FRONTEND_DIRECTORY_PATH", get_stylesheet_directory_uri() . '/child/' );
define( "CHILD_CSS_DIRECTORY", get_stylesheet_directory_uri() . '/child/assets/css/' );
define( "CHILD_JS_DIRECTORY", get_stylesheet_directory_uri() . '/child/assets/js/' );

const DEBUG_LOG_PATH = WP_CONTENT_DIR . '/debug.log';
const CHILD_ACTIONS_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'actions/';
const CHILD_ADMIN_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'admin/';
const CHILD_IMAGES_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'assets/images/';
const CHILD_DATA_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'data/';
const CHILD_INCLUDES_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'includes/';
const CHILD_SHORTCODES_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'shortcodes/';
const CHILD_TEMPLATES_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'templates/';
const CHILD_UTILS_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'utils/';
const CHILD_ENQUEUE_SCRIPTS_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'enqueue/scripts/';
const CHILD_ENQUEUE_STYLES_DIRECTORY = CHILD_BACKEND_DIRECTORY_PATH . 'enqueue/styles/';