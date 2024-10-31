<?php
/**
 * Plugin Name: Rexly Toolbox
 * Plugin URI: https://wpfreeware.com/
 * Description: This plugin especially made for rexly theme. It registers some custom post types.
 * Author: wpfreeware
 * Author URI: https://www.wpfreeware.com
 * Version: 1.0
 * Text Domain: rexly-toolbox
 * Domain Path: /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 *	Include custom post types
 *
 *	@since rexly-toolbox 1.0
 */
include( plugin_dir_path( __FILE__ ) . 'inc/post-types.php' );

/*
 *	Include meta boxes
 *
 *	@since rexly-toolbox 1.0
 */
include( plugin_dir_path( __FILE__ ) . 'inc/meta-boxes.php');

/*
 *	Include font-awesome icons
 *
 *	@since rexly-toolbox 1.0
 */
include( plugin_dir_path( __FILE__ ) . 'inc/font-awesome-icons.php');

/*
 * 	Admin notice for CMB2 plugin
 * 	https://wordpress.org/plugins/cmb2/
 *
 * 	Display a notice if CMB2 is not installed.
 */
function rexly_toolbox_cmb2_notice() {
  ?>
  <div class="notice notice-warning is-dismissible">
      <p><?php _e( 'Please install & activate <a href=" ' . esc_url( '//wordpress.org/plugins/cmb2/' ) . ' " target="_blank">CMB2 plugin</a> , it is <b>required for Rexly Toolbox</b> plugin to work properly!', 'rexly-toolbox' ); ?></p>
  </div>
  <?php
}
if( !defined( 'CMB2_LOADED' ) ) {
  add_action( 'admin_notices', 'rexly_toolbox_cmb2_notice' );
}