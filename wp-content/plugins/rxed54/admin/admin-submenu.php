<?php

// Exit if accessed directely
if (!defined('ABSPATH')) {

    exit;
}
function rxed54_add_sublevel_menu()
{
    add_submenu_page(
        'rxed54',
        'rxed54 sub menu',
        'rxed54 sub menu title',
        'manage_options',
        'rxed54_submenu',
        'rxed54_display_sub_settings_page',
        null
    );
}
add_action('admin_menu', 'rxed54_add_sublevel_menu');
