<?php

/**
 * Plugin Name: rxed54
 * Plugin URI: https://example.com/plugins/the-basics/
 * Description: Just a plugin for plugin things.
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Moatezz Chabane
 * Author URI: https://author.example.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: rxed54
 * Domain Path: /languages
 **/

if (!defined('ABSPATH')) {
    exit;
}

// if admin 
if (is_admin()) {
    //including dependencies
    require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
}


// function rxed54_add_sublevel_menu()
// {
//     add_submenu_page(
//         'rxed54.php',
//         'rxed54 Sub menu',
//         'rxed54 submenu',
//         'manage_options',
//         'rxed54',
//         'rxed54_display_settings_page',
//         null
//     );
// }
// add_action('admin_menu', 'rxed54_add_sublevel_menu');
