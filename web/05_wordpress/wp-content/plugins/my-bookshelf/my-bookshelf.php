<?php
/*
Plugin Name:  My Bookshelf
Description:  My custom plugin for creating books
Version:      1.0.0
Author:       Igor Kuznetsov
Author URI:   https://www.linkedin.com/in/igor-kuznetsov-84423458/
*/

function mbs_setup_post_type() {
    register_post_type('mbs_book', [
        'labels' => [
            'name' => __('Books'),
            'singular_name' => __('Book')
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'books'],
        'show_in_menu' => true
    ]);
}

add_action('init', 'mbs_setup_post_type');

function mbs_install() {
    mbs_setup_post_type();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'mbs_install');

function mbs_deactivation() {
    unregister_post_type('mbs_book');
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'mbs_deactivation');