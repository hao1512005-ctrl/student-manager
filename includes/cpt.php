<?php
if (!defined('ABSPATH')) exit;

function sm_register_cpt() {
    register_post_type('sinh_vien', [
        'labels' => [
            'name' => 'Sinh viên',
            'singular_name' => 'Sinh viên'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'editor'],
        'has_archive' => true,
    ]);
}
add_action('init', 'sm_register_cpt');