<?php // rxed54 admin menu page

// Exit if accessed directely
if (!defined('ABSPATH')) {

    exit;
}


function rxed54_add_toplevel_menu()
{
    add_menu_page(
        'rxed54 Settings',
        'rxed54',
        'manage_options',
        'rxed54',
        'rxed54_display_settings_page',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu', 'rxed54_add_toplevel_menu');
