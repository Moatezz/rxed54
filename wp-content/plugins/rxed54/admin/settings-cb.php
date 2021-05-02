<?php // Settings callbacks functions

// Exit if accessed directely
if (!defined('ABSPATH')) {
    exit;
}
//Sections callbacks
function rxed54_cb_section_login()
{
    echo 'try somethings new in login section';
}
function rxed54_cb_section_admin()
{
    echo 'this is something of a new staff';
}
//Fields callbacks
function rxed54_cb_field_text()
{
?>
    <input />
<?php
}
