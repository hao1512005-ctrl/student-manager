<?php
/**
 * Plugin Name: Student Manager
 * Description: Quản lý sinh viên bằng Custom Post Type + Meta Box + Shortcode
 * Version: 1.0
 * Author: Nguyen thi hao
 */

if (!defined('ABSPATH')) exit;

// Include files
require_once plugin_dir_path(__FILE__) . 'includes/cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/meta-box.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

// Load CSS
function sm_load_assets() {
    wp_enqueue_style('sm-style', plugin_dir_url(__FILE__) . 'assets/style.css');
}
add_action('wp_enqueue_scripts', 'sm_load_assets');