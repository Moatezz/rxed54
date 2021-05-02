<?php // rxed54 Settings register
if (!defined('ABSPATH')) {
    exit;
}
function rxed54_register_settings()
{
    // Registering settings 
    register_setting(
        'rxed54_options',
        'rxed54_options',
        'rxed54_cb_validate_options'
    );
    // Registering sections
    add_settings_section(
        'rxed54_section_login',
        'Customize Login Page',
        'rxed54_cb_section_login',
        'rxed54'
    );
    add_settings_section(
        'rxed54_section_admin',
        'Customize admin area',
        'rxed54_cb_section_admin',
        'rxed54'
    );
    // Registering fields
    add_settings_field(
        'custom_title',
        'Custom title',
        'rxed54_cb_field_text',
        'rxed54',
        'rxed54_section_login'
    );
    add_settings_field(
        'custom_url',
        'Custom url',
        'rxed54_cb_field_text',
        'rxed54',
        'rxed54_section_admin'
    );
    add_settings_field(
        'custom_style',
        'Custom style',
        'rxed54_cb_field_text',
        'rxed54',
        'rxed54_section_admin'
    );
    add_settings_field(
        'custom_message',
        'Custom message',
        'rxed54_cb_field_text',
        'rxed54',
        'rxed54_section_admin'
    );
}
add_action('admin_init', 'rxed54_register_settings');
