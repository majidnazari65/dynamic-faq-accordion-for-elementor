<?php
/**
 * Plugin Name: FAQ Accordion Elementor Widget
 * Description: A custom Elementor widget to create an FAQ accordion from text input, with a metabox for FAQ content.
 * Version: 1.0.0
 * Author: Your Name
 * License: GPL-2.0+
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Register Elementor Widget
 */
function register_faq_accordion_widget($widgets_manager) {
    require_once(__DIR__ . '/widgets/faq-accordion-widget.php');
    $widgets_manager->register(new \Elementor\FAQ_Accordion_Widget());
}
add_action('elementor/widgets/register', 'register_faq_accordion_widget');

/**
 * Enqueue styles and scripts
 */
function faq_accordion_widget_scripts() {
    wp_enqueue_style('faq-accordion-widget', plugins_url('/assets/css/faq-accordion.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'faq_accordion_widget_scripts');

/**
 * Check if Elementor is active
 */
function faq_accordion_widget_dependencies() {
    if (!did_action('elementor/loaded')) {
        add_action('admin_notices', function() {
            echo '<div class="notice notice-error"><p>' . __('Elementor must be installed and active for FAQ Accordion Widget to work.', 'faq-accordion-widget') . '</p></div>';
        });
        return;
    }
}
add_action('plugins_loaded', 'faq_accordion_widget_dependencies');

// ثبت متاباکس برای همه پست تایپ‌ها
function add_faq_metabox() {
    $post_types = get_post_types(); // دریافت همه پست تایپ‌ها
    foreach ($post_types as $post_type) {
        add_meta_box(
            'faq_metabox', // ID متاباکس
            __('FAQ Content', 'faq-accordion-widget'), // عنوان متاباکس
            'display_faq_metabox', // callback برای نمایش محتوا
            $post_type, // پست تایپ
            'normal', // موقعیت (normal, side, advanced)
            'high' // اولویت
        );
    }
}
add_action('add_meta_boxes', 'add_faq_metabox');

// callback برای نمایش متاباکس
function display_faq_metabox($post) {
    // دریافت محتوای فعلی faq_content
    $faq_content = get_post_meta($post->ID, 'faq_content', true);
    
    // نمایش ویرایشگر متن
    wp_editor($faq_content, 'faq_content', array(
        'textarea_name' => 'faq_content',
        'textarea_rows' => 10,
    ));
}

// ذخیره محتوای faq_content هنگام ذخیره پست
function save_faq_content($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['faq_content'])) {
        update_post_meta($post_id, 'faq_content', $_POST['faq_content']);
    }
}
add_action('save_post', 'save_faq_content');
?>