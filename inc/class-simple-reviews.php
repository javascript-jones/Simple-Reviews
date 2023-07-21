<?php

class Simple_Reviews {
    private $plugin_name;
    private $version;

    public function __construct() {
        $this->plugin_name = 'simple-reviews';
        $this->version = '0.1';

        $this->load_dependencies();
        $this->define_admin_hooks();
    }

    private function load_dependencies() {
        $this->simple_reviews_cpt = new Simple_Reviews_Cpt();
        $this->simple_reviews_review = new Simple_Reviews_Review();
    }

    private function define_admin_hooks() {
        add_action('init', array($this->simple_reviews_cpt, 'register_business_cpt'));
        add_action('init', array($this->simple_reviews_review, 'register_review'));
    }

    public function run() {
        $this->load_dependencies();
        $this->define_admin_hooks();
    }
}
