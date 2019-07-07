<?php

/* https://github.com/thingsym/custom-post-type-widgets */

class Custom_Post_Type_Widgets {
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'load' ) );
		add_action( 'widgets_init', array( $this, 'init' ) );
	}

	public function load() {

		include_once( 'widget-custom-post-type-recent-posts.php' );
		include_once( 'widget-custom-post-type-archive.php' );
		include_once( 'widget-custom-post-type-categories.php' );
		include_once( 'widget-custom-post-type-calendar.php' );
		include_once( 'widget-custom-post-type-recent-comments.php' );
		include_once( 'widget-custom-post-type-tag-cloud.php' );
		include_once( 'widget-custom-post-type-search.php' );
		include_once( 'widget-blb-text-search.php' );
	}

	public function init() {

		register_widget( 'WP_Custom_Post_Type_Widgets_Recent_Posts' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Archives' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Categories' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Calendar' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Recent_Comments' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Tag_Cloud' );
		register_widget( 'WP_Custom_Post_Type_Widgets_BLB_Search' );
	}

	public function uninstall() {}
}

$custom_post_type_widgets = new Custom_Post_Type_Widgets();
