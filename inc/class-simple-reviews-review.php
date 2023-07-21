<?php

class Simple_Reviews_Review {
    public function register_review() {
        // Hook into the comment form defaults to add custom fields
        add_filter('comment_form_default_fields', array($this, 'custom_comment_fields'));

        // Save custom fields
        add_action('comment_post', array($this, 'save_review_fields'), 10, 1);
    }

    public function custom_comment_fields($fields) {
        $fields['review_title'] = '<p class="comment-form-review-title">' .
            '<label for="review_title">' . __( 'Review Title', 'simple-reviews' ) . '</label>' .
            '<input id="review_title" name="review_title" type="text" value="" size="30" required /></p>';

        $fields['date_of_visit'] = '<p class="comment-form-date-of-visit">' .
            '<label for="date_of_visit">' . __( 'Date of Visit', 'simple-reviews' ) . '</label>' .
            '<input id="date_of_visit" name="date_of_visit" type="date" value="" size="30" required /></p>';

        return $fields;
    }

    public function save_review_fields( $comment_id ) {
        if ( ( isset( $_POST['review_title'] ) ) && ( $_POST['review_title'] != '') )
        update_comment_meta( $comment_id, 'review_title', wp_filter_nohtml_kses( $_POST['review_title'] ) );
        if ( ( isset( $_POST['date_of_visit'] ) ) && ( $_POST['date_of_visit'] != '') )
        update_comment_meta( $comment_id, 'date_of_visit', wp_filter_nohtml_kses( $_POST['date_of_visit'] ) );
    }
}
