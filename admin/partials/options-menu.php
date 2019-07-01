<?php 

$args = array(
	'id'           => 'websidekick_menu_options_page',
	'title'        => esc_html__( 'Web Sidekick', 'websidekick' ),
	'menu_title'   =>  esc_html__( 'Menu Settings', 'websidekick' ), // Use menu title, & not title to hide main h2.
	'object_types' => array( 'options-page' ),
	'option_key'   => 'websidekick_menu_options',
	'parent_slug'  => 'websidekick_main_options',
	'tab_group'    => 'websidekick_options',
	'tab_title'    => 'Main Menu',
	'cmb_styles' 	=> false, 
);

if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
	$args['display_cb'] = 'websidekick_options_display_with_tabs';
}

$menu_options = new_cmb2_box( $args );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

	$menu_options->add_field( array(
		'name' => 'Main Menu Options & Settings',
		'id'   => 'title1',
		'type' => 'title',
		'classes' => array( 'col-12 mb-3' ),
		'before_row' => '<div class="sidekickMetabox sidekickOptionsPage"><!-- Required for WP Gutenberg formatting -->
			<div class="row">',
	) );

		$menu_options->add_field( array(
			'name'    => __( 'Colors', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'css_title',
			'type'    => 'title',
			'classes' => array( 'col-12' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Menu BG Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_bg_color',
			'type'    => 'colorpicker',
			'default' => '#ffffff',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-4' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Menu Link Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_link_color',
			'type'    => 'colorpicker',
			'default' => '#23343b',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-4' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Menu Link Hover Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_link_hover_color',
			'type'    => 'colorpicker',
			'default' => '#23343b',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-4' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Menu Link Hover BG Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_link_hover_bg_color',
			'type'    => 'colorpicker',
			'default' => 'transparent',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-4' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Mobile Menu BG Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'mobile_menu_bg_color',
			'type'    => 'colorpicker',
			'default' => '#007bff',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-4' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Mobile Menu Styles', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'mobile_title',
			'type'    => 'title',
			'classes' => array( 'col-12' ),
		) );

		$menu_options->add_field( array(
			'name' => 'Mobile Menu Style',
			'id'   => 'mobile_menu_style',
			'type' => 'sidekick_radio',
			'list_display'		=> 'inline',  // 'stacked' or 'inline'. Defaults to 'stacked' if empty.
			'show_option_none' 	=> false,
			'options'			=> array(
		    	'bs4'			=> __('Bootstrap', 'websidekick'),
		    	'bar'			=> __('Bottom Bar', 'websidekick'),
		    	'fab'			=> __('FAB Menu Button', 'websidekick'),
		    ),
		    'default' => 'bs4',
		'classes' => array( 'col-12'),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Mobile Bottom Bar Options', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bar_title',
			'type'    => 'title',
			'classes' => array( 'col-12' ),
		) );

		$menu_options->add_field( array(
			'name'    => __( 'Col 1 Icon', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_icon_1',
			'type'    => 'sidekick_text',
			'default' => 'fal fa-house',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fab fa-font-awesome-flag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Col 2 Icon', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_icon_2',
			'type'    => 'sidekick_text',
			'default' => 'fal fa-paper-plane',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fab fa-font-awesome-flag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Col 3 Icon', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_icon_3',
			'type'    => 'sidekick_text',
			'default' => 'fal fa-rocket',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fab fa-font-awesome-flag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Menu Icon', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_icon_menu',
			'type'    => 'sidekick_text',
			'default' => 'fal fa-bars',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fab fa-font-awesome-flag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Col 1 Text', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_text_1',
			'type'    => 'sidekick_text',
			'default' => 'HOME',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fal fa-edit',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Col 2 Text', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_text_2',
			'type'    => 'sidekick_text',
			'default' => 'PLANE',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fal fa-edit',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Col 3 Text', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_text_3',
			'type'    => 'sidekick_text',
			'default' => 'ROCKET',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fal fa-edit',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
			'name'    => __( 'Menu Text', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bottom_bar_text_menu',
			'type'    => 'sidekick_text',
			'default' => 'MENU',
			'icon_block'		=> 'left',  // options: 'left', 'right'
			'fa_icon'			=> 'fal fa-edit',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes' => array( 'col-12', 'col-md-6', 'col-lg-3' ),
		) );
		
		$menu_options->add_field( array(
		//'name' => 'Main Menu Options & Settings',
		'id'   => 'title2',
		'type' => 'title',
		'classes' => array( 'col-12' ),
		'after_row' => '</div><!-- END .sidekickMetabox --></div><!-- END .row -->',

	) );
