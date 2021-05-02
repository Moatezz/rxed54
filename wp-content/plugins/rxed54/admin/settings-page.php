<?php //rxed54 Settings display page
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
