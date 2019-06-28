<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/xempoweredx
 * @since      1.0.0
 *
 * @package    Websidekick
 * @subpackage Websidekick/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Websidekick
 * @subpackage Websidekick/admin
 * @author     Chad Gray <chad@websidekick.ninja>
 */
class Websidekick_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Swap to jQuery 3.3.1 for BS4 compatibility except on certain screens.
	 */
	public function upgrade_jquery() {

		$screen	= get_current_screen();
		$options = get_option('websidekick_main_options');

		if( !($screen ->id === "media") || !($screen ->id === "upload") || !($screen ->id === "attachment") || !($screen ->id === "widgets") ) {
			wp_deregister_script('jquery');
			wp_register_script( 'jquery', $options['jq_cdn'], false, $options['jq_version'], false );
			wp_enqueue_script( 'jquery');
		}
	}

	/**
	 * Hook in and register a metabox to handle network options.
	 */
	//public function register_network_options_metabox() {

			//require_once  ( plugin_dir_path( __FILE__ ) . 'partials/network-options-main.php' );
	//}

	/**
	 * Hook in and register a metabox to handle a plugin options page and adds a menu item.
	 */
	public function register_main_options_metabox() {
		//if ( is_multisite() ) {
		//	require_once  ( plugin_dir_path( __FILE__ ) . 'partials/network-options-main.php' );
		//}
		// Set up the options pages.
			require_once  ( plugin_dir_path( __FILE__ ) . 'partials/options-main.php' );
			require_once  ( plugin_dir_path( __FILE__ ) . 'partials/options-sidekickforms.php' );
			require_once  ( plugin_dir_path( __FILE__ ) . 'partials/options-examples.php' );
		// Get the "tab_cb" markup.
			require_once  ( plugin_dir_path( __FILE__ ) . 'partials/options-tabs.php' );
	}

	/*** Use this callback to load css, js, & img files  plugins_url();
		
		This makes the path relative to the directory of the file being referenced.
			plugins_url( 'file.css', __FILE__ );

		This makes the path relative to the parent directory of the file being referenced.
			plugins_url( 'file.js', dirname(__FILE__) );
	***/

	/**
	 * Define CDN URLs, Integrity Hashes, and Versions
	 *
	 * @since    1.0.0
	 */
	public function add_attribs_to_scripts( $tag, $handle, $src ) {

		$options = get_option('websidekick_main_options');

		// The handles of the enqueued scripts we want to defer
		$jquery = array(
	    'jquery'
		);
		$fa5 = array(
		    $this->plugin_name . '_fontawesome'
		);
		$bsjs = array(
		    $this->plugin_name . '_bootstrapjs'
		);

		if ( in_array( $handle, $jquery ) ) {
	    	return '<script src="' . $src . '" integrity="' . $options['jq_integrity'] . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
		} 
		if ( in_array( $handle, $fa5 ) ) {
		    return '<script src="' . $src . '" integrity="' . $options['fa_integrity'] . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
		}
		if ( in_array( $handle, $bsjs ) ) {
		    return '<script src="' . $src . '" integrity="' . $options['bsjs_integrity'] . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
		}

		return $tag;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		$screen	= get_current_screen();
		$options = get_option('websidekick_main_options');

		// Uncomment if you want to use Google fonts insted of local files. Be sure to comment out local files.
		//wp_register_style( $this->plugin_name . '_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,600|Raleway:200,300,400,600', false, $this->version, 'all' );

		wp_register_style( $this->plugin_name . '_fonts', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/fonts/fonts.css' ), false, $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_fonts');

		wp_register_style( $this->plugin_name . '_bootstrapcss', $options['bs_cdn'], false, $options['bs_version'], 'all' );
		wp_enqueue_style( $this->plugin_name . '_bootstrapcss');

		wp_register_style( $this->plugin_name . '_websidekick_utilities', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_css/websidekick-bootstrap-utilities.css' ), false, '4.1.3', 'all' );
		wp_enqueue_style( $this->plugin_name . '_websidekick_utilities');

		wp_register_style( $this->plugin_name . '_app_global', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_css/websidekick-global.css' ), false, $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_app_global');

		wp_register_style( $this->plugin_name . '_bs4_color_palette', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_css/bootstrap_color_palette.css' ), false, $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_bs4_color_palette');

		wp_register_style( $this->plugin_name . '_bs4_md_styles', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_css/bootstrap_md_styles.css' ), false, $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_bs4_md_styles');

		wp_register_style( $this->plugin_name . '_bs4_md_colors', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_css/bootstrap_md_color_palette.css' ), false, $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_bs4_md_colors');

		wp_register_style( $this->plugin_name . '_bs4_ios_colors', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_css/bootstrap_ios_color_palette.css' ), false, $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_bs4_ios_colors');

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		$screen	= get_current_screen();
		$options = get_option('websidekick_main_options');

		wp_register_script( $this->plugin_name . '_fontawesome', $options['fa_cdn'], false, $options['fa_version'], false);
		wp_enqueue_script( $this->plugin_name . '_fontawesome');

		wp_register_script( $this->plugin_name . '_bootstrapjs', $options['bsjs_cdn'], false, $options['bsjs_version'], true);
		wp_enqueue_script( $this->plugin_name . '_bootstrapjs');

		wp_register_script( $this->plugin_name . '_input_mask', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/input-mask/jquery.mask.min.js' ), false, '1.14.15', true );
		wp_enqueue_script( $this->plugin_name . '_input_mask');

	}

	/**
	 * Register custom post types
	 *
	 * @since    1.0.0
	 */
	public function register_cpts() {

		require_once( plugin_dir_path(__FILE__) . 'cpt/CPT_Sermons.php' );
		//require_once( plugin_dir_path(__FILE__) . 'cpt/CPT_Resources.php' );

	}

	/**
	 * Register custom taxonomies
	 *
	 * @since    1.0.0
	 */
	public function register_tax() {

		require_once( plugin_dir_path(__FILE__) . 'tax/Tax_Sermons_Speakers.php' );
		require_once( plugin_dir_path(__FILE__) . 'tax/Tax_Sermons_Series.php' );
		require_once( plugin_dir_path(__FILE__) . 'tax/Tax_Sermons_Topics.php' );
		//require_once( plugin_dir_path(__FILE__) . 'tax/Tax_Resources_Formats.php' );
		//require_once( plugin_dir_path(__FILE__) . 'tax/Tax_Resources_Authors.php' );
		//require_once( plugin_dir_path(__FILE__) . 'tax/Tax_References.php' );

	}

	/**
	 * Register CPT metaboxes.
	 *
	 * @since    1.0.0
	 */
	public function register_cpt_metaboxes() {

		//require_once( plugin_dir_path(__FILE__) . 'meta/Meta_CPT_Resources.php' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function bottom_scripts() {

		wp_register_script( $this->plugin_name . '_global', ( plugin_dir_url( dirname( __FILE__ ) ) . 'includes/app_js/websidekick-global.js' ), false, $this->version, true );
		wp_enqueue_script( $this->plugin_name . '_global');

	}

	/**
	 * Add user role "class" to body
	 *
	 * @since    1.0.0
	 */
	public function user_role_body_class($classes) {
	    if ( is_user_logged_in() ) {
	        $current_user = new WP_User(get_current_user_id());
	        $user_role = array_shift($current_user->roles);
	            $classes .= 'role-'. $user_role . ' ';
	        return $classes;
	    }
	}

} 