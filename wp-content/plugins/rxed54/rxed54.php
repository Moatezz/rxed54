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
    require_once plugin_dir_path(__FILE__) . 'admin/admin-submenu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/sub-settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-cb.php';
}
