
<?php
add_action( 'admin_menu', 'wp_slideshow_settings_create_menu' );
// Set Flex slider's menu.
function wp_slideshow_settings_create_menu() {
	// create new top-level menu.
	add_menu_page( 'slideshow Settings',  'administrator', __FILE__, 'wp_my_slideshow_settings_page' );
}

function wp_my_slideshow_settings_page()
{


}
?>