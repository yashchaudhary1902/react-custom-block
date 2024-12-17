<?php
/**
 * Plugin Name: My Custom Block
 * Description: A custom Gutenberg block built with React.
 * Version: 1.0.0
 * Author: Yash Chaudhary
 */

// Enqueue block assets
function my_custom_block_assets() {
    wp_enqueue_script(
        'my-custom-block-script',
        plugins_url('build/index.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-i18n'),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
    );

    wp_enqueue_style(
        'my-custom-block-style',
        plugins_url('style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'style.css')
    );
}
add_action('enqueue_block_editor_assets', 'my_custom_block_assets');

function my_custom_block_frontend_assets() {
    wp_enqueue_script(
        'my-custom-block-frontend',
        plugins_url('tabs.js', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'tabs.js'),
        true
    );

    wp_enqueue_style(
        'my-custom-block-style',
        plugins_url('style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'style.css')
    );
}
add_action('wp_enqueue_scripts', 'my_custom_block_frontend_assets');

