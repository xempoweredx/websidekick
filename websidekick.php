<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://github.com/xempoweredx
 * @since             1.0.0
 * @package           Websidekick
 *
 * @wordpress-plugin
 * Plugin Name:       Web Sidekick
 * Plugin URI:        https://github.com/xempoweredx/websidekick
 * Description:       Wordpress Admin panel adding Bootstrap 4, CMB2, Fontawesome 5, and more for extra functionality and flexability.
 * Version:           1.1.5
 * Author:            Chad Gray
 * Author URI:        https://github.com/xempoweredx
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       websidekick
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'WEBSIDEKICK_VERSION', '1.1.5' );

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/xempoweredx/websidekick/',
	__FILE__,
	'websidekick'
);
if ( is_multisite() ) {
	$options = get_site_option('websidekick_main_options');
}
else {
	$options = get_option('websidekick_main_options');
}

/**
 * Get the CMB2 bootstrap file!
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/cmb2/init.php';

/**
 * Get the CMB2 Taxonomy file!
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/cmb2-taxonomy/plugin.php';

/**
 * Get the CMB2 Conditionals file!
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/cmb2-conditionals/cmb2-conditionals.php';

/**
 * Get the CMB2 Term Select file!
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/cmb2-term-select/cmb2-term-select.php';

/**
 * Get the List Taxonomy Widget file!
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/list-taxonomy-widget/list-taxonomy-widget.php';

/**
 * Get the Widget Shortcode Generator file!
 */
// https://wordpress.org/plugins/widget-shortcode/
require_once plugin_dir_path( __FILE__ ) . 'includes/widget-shortcode/init.php';

/**
 * Get the AddToAny file!
 */
// https://wordpress.org/plugins/widget-shortcode/
if (get_option('websidekick_main_options')['a2a'] ) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/add-to-any/add-to-any.php';
}

/**
 * Get the Maintenance Mode init file if enables in Main Settings tab!
 */
if (get_option('websidekick_main_options')['maintenance'] ) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/wp-maintenance-mode/wp-maintenance-mode.php';
}

/**
 * Get the Maintenance Mode init file if enables in Main Settings tab!
 */
if (get_option('websidekick_main_options')['blb_tagger'] ) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/BLB_ScriptTagger/BLB_ScriptTagger.php';
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-websidekick-activator.php
 */
function activate_websidekick() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-websidekick-activator.php';
	Websidekick_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-websidekick-deactivator.php
 */
function deactivate_websidekick() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-websidekick-deactivator.php';
	Websidekick_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_websidekick' );
register_deactivation_hook( __FILE__, 'deactivate_websidekick' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-websidekick.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_websidekick() {

	$plugin = new Websidekick();
	$plugin->run();

}
run_websidekick();
