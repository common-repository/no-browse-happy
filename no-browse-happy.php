<?php
/*
Plugin Name: No Browse Happy
Plugin Script: no-browse-happy.php
Plugin URI: http://sudarmuthu.com/wordpress/no-browse-happy
Description: Hides the Browse Happy logo in the footer for IE users
Version: 0.1
License: GPL
Author: Sudar
Author URI: http://sudarmuthu.com/ 

=== RELEASE NOTES ===
2008-03-14 - v0.1 - first version
*/

if (!function_exists('smnbh_hide_logo')) {
	function smnbh_hide_logo() {
		echo '
		<style type="text/css">
		#bh { 
			display: none; 
		};
		</style> ';
	}
}

add_action('admin_head', 'smnbh_hide_logo');
?>