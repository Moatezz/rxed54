<?php // rxed54 Settings register

function rxed54_register_settings()
{
    register_setting(
        'rxed54_options',
        'rxed54_options',
        'rxed54_cb_validate_options'
    );
}
add_action('admin_init', 'rxed54_register_settings');
