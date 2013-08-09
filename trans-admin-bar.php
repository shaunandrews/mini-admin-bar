<?php
/*
Plugin Name: Mini Admin Bar
Plugin URI: http://shaunandrews.com/wordpress/mini-admin-bar/
Description: Making the admin bar transparent.
Version: 0.1
Author: Shaun Andrews
Author URI: http://automattic.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Enqueue some new styles and drop in a few lines of js
add_action( 'wp_after_admin_bar_render', 'mab_add_style' );
function mab_add_style() {
	wp_enqueue_style( 'mini-admin-bar', plugins_url( "style.css", __FILE__ ), array(), '20111209' );
}

add_action( 'wp_after_admin_bar_render', 'mab_add_js' );
function mab_add_js() {
	?>
	<script type="text/javascript">
	(function($) {
		console.log( 'test' );
		$( '#wp-admin-bar-new-content' ).removeClass( 'menupop' );
		$( '#wp-admin-bar-site-name' ).removeClass( 'menupop' );
	})(jQuery);
	</script>
<?php
}