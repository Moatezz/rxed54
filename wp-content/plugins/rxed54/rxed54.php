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

function rxed54_display_settings_page()
{
    // Check if user is authorised for access

    if (!current_user_can('manage_options')) return;
?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <input type="text" />
            <?php
            //output security fields
            settings_fields('rxed54_options');
            //output setting sections
            do_settings_sections('rxed54');
            // submitting form
            submit_button();
            ?>

        </form>
    </div>
<?php
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
        null
    );
}
add_action('admin_menu', 'rxed54_add_toplevel_menu');
