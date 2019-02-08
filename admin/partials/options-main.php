<?php 

	$args = array(
		'id'           => 'websidekick_main_options_page',
		'title'        => esc_html__( 'Web Sidekick', 'websidekick' ),
		'menu_title'   =>  esc_html__( 'Sidekick Options', 'websidekick' ), // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'websidekick_main_options',
		'tab_group'    => 'websidekick_options',
		'tab_title'    => 'Settings',
		'cmb_styles' 	=> false, 
	);

		if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
			$args['display_cb'] = 'websidekick_options_display_with_tabs';
		}

		$main_options = new_cmb2_box( $args );

		$main_options->add_field( array(
			'name'    => __( '', 'websidekick' ),
			'id'      => 'hidden_head',
			'type'    => 'title',
			'before_row' => '<div class="row"><!-- Section Wrap -->
								<div class="col-12 col-md-6">
									<div class="form-row">',
		) );

		$main_options->add_field( array(
			'name'    => __( 'Colors & Styles', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'css_title',
			'type'    => 'title',
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( 'Primary Link Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'primary_link_color',
			'type'    => 'colorpicker',
			'default' => '#007bff',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( 'Primary Link-Hover Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'primary_link_hover_color',
			'type'    => 'colorpicker',
			'default' => '#0056b3',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( 'Menu BG Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_bg_color',
			'type'    => 'colorpicker',
			'default' => '#ffffff',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( 'Menu Link Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_link_color',
			'type'    => 'colorpicker',
			'default' => '#23343b',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( 'Menu Link-Hover Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_link_hover_color',
			'type'    => 'colorpicker',
			'default' => '#23343b',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( 'Menu Link-Hover BG Color', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'menu_link_hover_bg_color',
			'type'    => 'colorpicker',
			'default' => '',
			'options' => array(
				'alpha' => true, // Make this a rgba color picker.
			),
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( '', 'websidekick' ),
			'id'      => 'hidden_mid',
			'type'    => 'title',
			'after_row' => '</div><!-- END form-row -->
						</div><!-- END col-md-6 -->
						<div class="col-12 col-md-6">
							<div class="form-row">',
		) );

		$main_options->add_field( array(
			'name'    => __( 'Misc Settings', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'misc_title',
			'type'    => 'title',
			'classes' => array( 'col-12' ),
		) );

		//if (!( is_multisite() ) ) {
		$main_options->add_field( array(
			'name'    => __( 'Github Auth Key', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'git_auth',
			'type'    => 'sidekick_text',
			'classes' => array( 'col-12' ),
		) );
		//}

		$main_options->add_field( array(
			'name' => 'Enable',
			'id'   => 'maintenance',
			'type' => 'sidekick_switch_toggle',
			'before' => '<div class="mb-2">Maintenatnce Mode Option</div>',
			'desc' => 'Select "Enable" and "Save Changes". Maintenance Mode options show up in main WP Admin Settings menu.',
			'color_unselected'		=> 'text-gray-lighten-7',
		    'color_selected'	=> 'text-gray-lighten-7',
		    'bg_unselected'		=> 'bg-gray-lighten-4',
		    'bg_selected'		=> 'bg-green-lighten-2',
			'classes' => array( 'col-12' ),
		) );

		$main_options->add_field( array(
			'name'    => __( '', 'websidekick' ),
			'id'      => 'hidden_mid2',
			'type'    => 'title',
			'after_row' => '</div><!-- END row -->
						</div><!-- END col-md-6 -->
					</div><!-- END Section Wrap -->
					<div class="row"><!-- Section Wrap -->',
		) );

		$main_options->add_field( array(
			'name'    => __( 'jQuery Settings', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'jq_title',
			'type'    => 'title',
			'classes' => array( 'col-12 mb-0' ),
		) );
			$main_options->add_field( array(
				'name'    => __( 'jQuery CDN URL', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'jq_cdn',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'jQuery Integrity', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'jq_integrity',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Version', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'jq_version',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-2 mb-4' ),
			) );

		$main_options->add_field( array(
			'name'    => __( 'Bootstrap Settings', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'bs_title',
			'type'    => 'title',
			'classes' => array( 'col-12 mb-0' ),
		) );
			$main_options->add_field( array(
				'name'    => __( 'Bootstrap CSS CDN URL', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'bs_cdn',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Bootstrap CSS Integrity', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'bs_integrity',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Version', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'bs_version',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-2' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Bootstrap JS CDN URL', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'bsjs_cdn',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Bootstrap JS Integrity', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'bsjs_integrity',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Version', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'bsjs_version',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-2 mb-4' ),
			) );

		$main_options->add_field( array(
			'name'    => __( 'FontAwesome Settings', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'fa_title',
			'type'    => 'title',
			'classes' => array( 'col-12 mb-0' ),
		) );
			$main_options->add_field( array(
				'name'    => __( 'FontAwesome CDN URL', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'fa_cdn',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'FontAwesome Integrity', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'fa_integrity',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-5' ),
			) );
			$main_options->add_field( array(
				'name'    => __( 'Version', 'websidekick' ),
				//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
				'id'      => 'fa_version',
				'type'    => 'sidekick_text',
				'classes' => array( 'col-12 col-sm-2 mb-4' ),
			) );

		$main_options->add_field( array(
			'name'    => __( '', 'websidekick' ),
			//'desc'		=> __( 'Default - "off" Core files are ONLY loaded on post & taxonomy edit screens. Turning this option on would load all files globally and change the look of the WP Admin Dashboard.', 'websidekick' ),
			'id'      => 'hidden_footer',
			'type'    => 'title',
			'after_row'	=> '</div><!-- END Section Wrap -->',
		) );

