<?php
/**
 * Plugin Name: Simple Reviews
 * Description: Adds a business custom post type and allows users to review businesses.
 * Version: 0.1
 * Author: W. Jones
 * Text Domain: simple-reviews
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require_once plugin_dir_path(__FILE__) . 'inc/class-simple-reviews.php';
require_once plugin_dir_path(__FILE__) . 'inc/class-simple-reviews-cpt.php';
require_once plugin_dir_path(__FILE__) . 'inc/class-simple-reviews-review.php';

function run_simple_reviews() {
    $plugin = new Simple_Reviews();
    $plugin->run();
}

run_simple_reviews();
