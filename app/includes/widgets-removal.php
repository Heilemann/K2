<?php
if ( get_option('k2sidebarmanager') == '1' ) {
	$disable_widgets = true;

	// WP 2.4+
	if ( floatval($wp_version) >= 2.4 and is_admin() and (
			basename($_SERVER['SCRIPT_FILENAME']) == 'index.php'
			or basename($_SERVER['SCRIPT_FILENAME']) == 'index-extra.php'
		) ) {
		$disable_widgets = false;
	}

	if ( $disable_widgets ) {
		remove_action('plugins_loaded', 'wp_maybe_load_widgets', 0);
	}
}
?>
