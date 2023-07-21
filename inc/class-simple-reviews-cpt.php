<?php

class Simple_Reviews_Cpt {
    public function register_business_cpt() {
        $labels = array(
            'name' => __('Businesses', 'simple-reviews'),
            'singular_name' => __('Business', 'simple-reviews'),
            // More labels here...
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'custom-fields'),
            'taxonomies' => array('category'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-store',
            'rewrite' => array('slug' => 'business'),
        );

        register_post_type('business', $args);
    }
}
