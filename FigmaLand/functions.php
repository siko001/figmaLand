<?php
function files() {
    wp_enqueue_style('extra_style', get_theme_file_uri('styles/css/main.css'));
    wp_enqueue_script('jquery');

    register_nav_menus(
        array(
            'primary-menu' => esc_html__('Primary Menu', 'FigmaLand'),
        )
    );
}

add_action("wp_enqueue_scripts", "files");



//Create custom Post type for Features
function create_feature_post_type() {
    register_post_type(
        'feature',
        array(
            'labels' => array(
                'name' => __('Features'),
                'singular_name' => __('Feature')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
add_action('init', 'create_feature_post_type');


//Create custom Post type for Features
function create_partner_post_type() {
    register_post_type(
        'partner',
        array(
            'labels' => array(
                'name' => __('Partners'),
                'singular_name' => __('Partner')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
add_action('init', 'create_partner_post_type');


//Create custom Post type for Features
function create_testimonial_post_type() {
    register_post_type(
        'testimonial',
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
add_action('init', 'create_testimonial_post_type');


