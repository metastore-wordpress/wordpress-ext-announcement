<?php
/**
 * Plugin Name:     (WP-EXT) Announcement
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Announcement post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-announcement
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Announcement`.
 */

function run_wp_ext_announcement() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_Theme.class.php' );
//  require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Announcement_Widget.class.php' );
}

run_wp_ext_announcement();
