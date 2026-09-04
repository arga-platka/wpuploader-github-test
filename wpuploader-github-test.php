<?php
/**
 * Plugin Name: WPUploader GitHub Test
 * Plugin URI: https://github.com/arga-platka/wpuploader-github-test
 * Description: A minimal dummy plugin used to exercise WPUploader's GitHub import.
 * Version: 1.3.0
 * Author: arga-platka
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpuploader-github-test
 * Requires at least: 6.0
 * Requires PHP: 7.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Shows a notice so an activated install is visibly the right build.
function wpuploader_github_test_admin_notice() {
	echo '<div class="notice notice-info"><p>' . esc_html__( 'WPUploader GitHub Test 1.3.0 is active.', 'wpuploader-github-test' ) . '</p></div>';
}
add_action( 'admin_notices', 'wpuploader_github_test_admin_notice' );
