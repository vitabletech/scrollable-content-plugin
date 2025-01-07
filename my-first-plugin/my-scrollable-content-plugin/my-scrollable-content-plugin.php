<?php
/**
 * Plugin Name: My Scrollable Content Plugin
 * Description: A plugin that dynamically generates and displays image and text content in a scrollable layout.
 * Version: 1.0
 * Author: Your Name
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include necessary files
require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-scrollable-content.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';

// Initialize the plugin
function my_scrollable_content_init() {
    $my_scrollable_content = new MyScrollableContent();
    $my_scrollable_content->register_hooks();
}
add_action( 'plugins_loaded', 'my_scrollable_content_init' );
?>