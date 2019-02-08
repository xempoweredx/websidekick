<?php 

$args = array(
	'id'           => 'websidekick_sidekickforms_options_page',
	'title'        => esc_html__( 'Web Sidekick', 'websidekick' ),
	'menu_title'   =>  esc_html__( 'Sidekick Inputs', 'websidekick' ), // Use menu title, & not title to hide main h2.
	'object_types' => array( 'options-page' ),
	'option_key'   => 'websidekick_sidekickforms_options',
	'parent_slug'  => 'websidekick_main_options',
	'tab_group'    => 'websidekick_options',
	'tab_title'    => 'Sidekick Forms',
	'cmb_styles' 	=> false, 
);

if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
	$args['display_cb'] = 'websidekick_options_display_with_tabs';
}

$sidekickforms_options = new_cmb2_box( $args );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Input Text Fields',
				'id'   => 'title1',
				'type' => 'title',
				'classes' => array( 'col-12 mb-3' ),
				'before_row' => '<div class="sidekickMetabox sidekickOptionsPage"><!-- Required for WP Gutenberg formatting -->
					<div class="row">',
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Text',
				'desc' => 'Text field.',
				'id'   => 'text2',
				'type' => 'sidekick_text',
				//'icon_block'		=> 'left',  // options: 'left', 'right'
				//'fa_icon'			=> 'fal fa-star',  // full fontawesome markup: 'fal fa-truck'
				//'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				//'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				//'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Text',
				'desc' => 'Text field with icon options.',
				'id'   => 'text3',
				'type' => 'sidekick_text',
				'icon_block'		=> 'left',  // options: 'left', 'right'
				'fa_icon'			=> 'fal fa-swords',  // full fontawesome markup: 'fal fa-truck'
				'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Text',
				'desc' => 'Text field with icon options.',
				'id'   => 'text4',
				'type' => 'sidekick_text',
				'icon_block'		=> 'right',  // options: 'left', 'right'
				'fa_icon'			=> 'fal fa-helmet-battle',  // full fontawesome markup: 'fal fa-truck'
				'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Tel',
				'desc' => 'Telephone number field with custom Sidekick Admin options.',
				'id'   => 'tel1',
				'type' => 'sidekick_tel',
				'icon_block'		=> 'left',  // options: 'left', 'right'
				'fa_icon'			=> 'fal fa-phone',  // full fontawesome markup: 'fal fa-truck'
				'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Email',
				'desc' => 'Email address field with custom Sidekick Admin options.',
				'id'   => 'email1',
				'type' => 'sidekick_email',
				'icon_block'		=> 'left',  // options: 'left', 'right'
				'fa_icon'			=> 'fal fa-envelope',  // full fontawesome markup: 'fal fa-truck'
				'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick URL',
				'desc' => 'URL field with custom Sidekick Admin options.',
				'id'   => 'url1',
				'type' => 'sidekick_url',
				'icon_block'		=> 'left',  // options: 'left', 'right'
				'fa_icon'			=> 'fal fa-link',  // full fontawesome markup: 'fal fa-truck'
				'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Password',
				'desc' => 'Password field with custom Sidekick Admin options.',
				'id'   => 'password1',
				'type' => 'sidekick_password',
				'icon_block'		=> 'left',  // options: 'left', 'right'
				'fa_icon'			=> 'fal fa-key',  // full fontawesome markup: 'fal fa-truck'
				'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
				'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
				'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' =>  __( 'Sidekick Time Picker', 'websidekick' ),
				'desc' => __( 'Field description', 'websidekick' ),
				'id' => 'time1',
				'type' => 'sidekick_text_time',
				// 'time_format' => 'h:i:s A',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => __( 'Sidekick Date Picker', 'websidekick' ),
				'desc' => __( 'Field description', 'websidekick' ),
				'id'   => 'date1',
				'type' => 'sidekick_text_date',
				//'attributes' => array(
					// CMB2 checks for datepicker override data here:
					//'data-datepicker' => json_encode( array(
						// dayNames: http://api.jqueryui.com/datepicker/#option-dayNames
						//'dayNames' => array( 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ),
						// monthNamesShort: http://api.jqueryui.com/datepicker/#option-monthNamesShort
						//'monthNamesShort' => explode( ',', 'En,Feb,Mar,Abr,May,Jun,Jul,Ago,Sep,Oct,Nov,Dic' ),
						// yearRange: http://api.jqueryui.com/datepicker/#option-yearRange
						// and http://stackoverflow.com/a/13865256/1883421
						//'yearRange' => '-100:+0',
						// Get 1990 through 10 years from now.
						// 'yearRange' => '1990:'. ( date( 'Y' ) + 10 ),
					//) ),
				//),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Time zone',
				'id'   => 'timezone1',
				'type' => 'sidekick_select_timezone',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Date/Time Picker Combo (UNIX timestamp)',
				'id'   => 'datetime1',
				'type' => 'sidekick_text_datetime_timestamp',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Date/Time Picker/Time zone Combo (serialized DateTime object)',
				'id'   => 'datetime_timestamp_timezone1',
				'type' => 'sidekick_text_datetime_timestamp_timezone',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Textarea',
				'id'   => 'sidekick_textarea1',
				'type' => 'sidekick_textarea',
				//'textarea_rows' => '10',  // Optional. Controls starting height. Leave empty for default of 3 rows.
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
				'after_row' => '</div><hr class="my-3"></hr>',
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Radios, Checkboxes, & Select',
				'id'   => 'title2',
				'type' => 'title',
				'classes' => array( 'col-12 mb-3' ),
				'before_row' => '<div class="row">',
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Radio',
				'id'   => 'sidekick_radio1',
				'type' => 'sidekick_radio',
				//'list_display'		=> 'inline',  // 'stacked' or 'inline'. Defaults to 'stacked' if empty.
				'options'			=> array(
			    	'luke'			=> __('Luke', 'cmb2'),
			    	'han'			=> __('Han', 'cmb2'),
			    	'vader'			=> __('Vader', 'cmb2'),
			    	'r2d2'			=> __('R2D2', 'cmb2'),
			    ),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Radio (Inline Option)',
				'id'   => 'sidekick_radio2',
				'type' => 'sidekick_radio',
				'list_display'		=> 'inline',  // 'stacked' or 'inline'. Defaults to 'stacked' if empty.
				'options'			=> array(
			    	'luke'			=> __('Luke', 'cmb2'),
			    	'han'			=> __('Han', 'cmb2'),
			    	'vader'			=> __('Vader', 'cmb2'),
			    	'r2d2'			=> __('R2D2', 'cmb2'),
			    ),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Checkbox',
				'id'   => 'sidekick_checkbox1',
				'type' => 'sidekick_checkbox',
				//'desc' => 'test desc',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Multicheck',
				'id'   => 'sidekick_multicheck1',
				'type' => 'sidekick_multicheck',
				//'select_all_button' => false,  // Uncomment for default which displays "Select?Deselect All" button
				'options'	=> array(
					'one' 		=> __( 'Frodo', 'cmb2' ),
					'two'   	=> __( 'Samwise', 'cmb2' ),
					'three'		=> __( 'Strider', 'cmb2' ),
				),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Multicheck (Inline Option)',
				'id'   => 'sidekick_multicheck2',
				'type' => 'sidekick_multicheck',
				'list_display'		=> 'inline',  // 'stacked' or 'inline'. Defaults to 'stacked' if empty.
				//'select_all_button' => false,  // Uncomment for default which displays "Select?Deselect All" button
				'options'	=> array(
					'one' 		=> __( 'Frodo', 'cmb2' ),
					'two'   	=> __( 'Samwise', 'cmb2' ),
					'three'		=> __( 'Strider', 'cmb2' ),
				),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Select',
				'id'   => 'sidekick_select1',
				'type' => 'sidekick_select',
				'options'			=> array(
			    	'luke'			=> __('Luke', 'cmb2'),
			    	'han'			=> __('Han', 'cmb2'),
			    	'vader'			=> __('Vader', 'cmb2'),
			    	'r2d2'			=> __('R2D2', 'cmb2'),
			    ),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Radio Buttons',
				'id'   => 'sidekick_radio_buttons1',
				'type' => 'sidekick_radio_buttons',
				//'btn_size' => 'btn-group-sm',  // *Optional. Use BS4 btn-group markup 'btn-group-lg' or 'btn-group-sm'. Defaults to BS4 default btn size.
				//'btn_align' => 'btn-group-vertical',  // *Optional. Use BS4 btn-group markup 'btn-group-vertical' or comment out. Defaults to horizontal.
				'options'			=> array(
			    	'luke'			=> __('Luke', 'cmb2'),
			    	'han'			=> __('Han', 'cmb2'),
			    	'vader'			=> __('Vader', 'cmb2'),
			    	'r2d2'			=> __('R2D2', 'cmb2'),
			    ),
				'btn_color' 		=> 'btn-outline-info',  // Use BS4 btn-color markup
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
				'after_row' => '</div><hr class="my-3"></hr>'
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Switches & Ranges',
				'id'   => 'title3',
				'type' => 'title',
				'classes' => array( 'col-12 mb-3' ),
				'before_row' => '<div class="row">',
			) );
			
			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Switch Buttons',
				'id'   => 'sidekick_switch_buttons1',
				'type' => 'sidekick_switch_buttons',
				'btn_size' => 'btn-group-sm',  // *Optional. Use BS4 btn-group markup 'btn-group-lg' or 'btn-group-sm'. Defaults to BS4 default btn size.
				'options'			=> array(
			    	'on'			=> __('On', 'cmb2'),
			    	'off'			=> __('Off', 'cmb2'),
			    ),
			    'default'			=> 'off',
			    'btn_color' 		=> 'btn-outline-success',  // Works best with "btn-outline-*"
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Switch Buttons',
				'id'   => 'sidekick_switch_buttons2',
				'type' => 'sidekick_switch_buttons',
				'btn_size' => 'btn-group-sm',  // *Optional. Use BS4 btn-group markup 'btn-group-lg' or 'btn-group-sm'. Defaults to BS4 default btn size.
				'options'			=> array(
			    	'on'			=> __('Do It', 'cmb2'),
			    	'off'			=> __('No Way', 'cmb2'),
			    ),
			    'default'			=> 'off',
			    'btn_color' 		=> 'btn-outline-primary',  // Works best with "btn-outline-*"
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => '',
				'id'   => 'sidekick_switch_buttons3',
				'type' => 'sidekick_switch_buttons',
				'before' => '<div class="mb-2">With Top Label</div>',
				'btn_size' => 'btn-group-sm',  // *Optional. Use BS4 btn-group markup 'btn-group-lg' or 'btn-group-sm'. Defaults to BS4 default btn size.
				'options'			=> array(
			    	'on'			=> __('Do It', 'cmb2'),
			    	'off'			=> __('No Way', 'cmb2'),
			    ),
			    'default'			=> 'off',
			    'btn_color' 		=> 'btn-outline-primary',  // Works best with "btn-outline-*"
				'classes' => array( 'col-12 col-sm-6 col-lg-4 text-center' ),
			) );
			
			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Radio Icons',
				'id'   => 'sidekick_radio_icons1',
				'type' => 'sidekick_radio_icons',
				'options'			=> array(
			    	'luke'			=> __('Luke', 'cmb2'),
			    	'han'			=> __('Han', 'cmb2'),
			    	'vader'			=> __('Vader', 'cmb2'),
			    	'r2d2'			=> __('R2D2', 'cmb2'),
			    ),
			    'icon_unselected'	=> 'fal fa-square',  // full fontawesome 5 pro markup: 'fal fa-truck'
			    'icon_selected'		=> 'fas fa-user-sidekick',  // full fontawesome markup: 'fal fa-truck'
			    'color_unselected'	=> 'text-muted',  // Use BS4 "color-palette" full class 'text-gray-darken-2'
			    'color_selected'	=> 'text-success',  // Use BS4 "color-palette" full class 'text-success-lighten-2'
			    'size_unselected'	=> 'fa-lg',  // full fontawesome markup: 'fa-lg' *optional*
			    'size_selected'		=> 'fa-lg',  // full fontawesome markup: 'fa-lg' *optional*
			    'display_class'		=> 'd-block',  // Use BS4 display markup "d-block" or "d-inline-block" *Optional*. Default is block.
			    //'btn_color' 		=> 'btn-info',  // Use BS4 btn-color markup
				'classes' 			=> array( 'col-12' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Switch Toggle',
				'id'   => 'sidekick_switch_toggle1',
				'type' => 'sidekick_switch_toggle',
				'color_unselected'		=> 'text-gray-lighten-7',
			    'color_selected'	=> 'text-gray-lighten-7',
			    'bg_unselected'		=> 'bg-gray-lighten-4',
			    'bg_selected'		=> 'bg-green-lighten-2',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Switch Slide',
				'id'   => 'sidekick_switch_slide1',
				'type' => 'sidekick_switch_slide',
				'color_unselected'		=> 'text-gray-lighten-7',
			    'color_selected'	=> 'text-gray-lighten-3',
			    'bg_unselected'		=> 'bg-gray-lighten-4',
			    'bg_selected'		=> 'bg-gray-darken-3',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Checkbox Icon',
				'id'   => 'sidekick_checkbox_icon1',
				'type' => 'sidekick_checkbox_icon',
				'icon_unselected'	=> 'fal fa-square',
			    'icon_selected'		=> 'fal fa-check',
			    'color_unselected'	=> 'text-muted',
			    'color_selected'	=> 'text-success',
			    'size_unselected'	=> 'fa-lg',
			    'size_selected'		=> 'fa-lg',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick Range',
				'id'   => 'sidekick_range1',
				'type' => 'sidekick_range',
				'range_min'	=> '0',
			    'range_max'		=> '10',
			    'range_step'	=> '1',
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
			) );

			$sidekickforms_options->add_field( array(
				'name' => 'Sidekick File',
				'id'   => 'sidekick_file1',
				'type' => 'sidekick_file',
				'attributes'  => array(
					'placeholder' => 'File URL or Upload',
				),
				'options' 		=> array(
			        'url' => true, 
			    ),
			    'text'    		=> array(
			        'add_upload_file_text' => 'Upload' // Change upload button text. Default: "Add or Upload File"
			    ),
				'classes' => array( 'col-12 col-sm-6 col-lg-4' ),
				'after_row' => '</div><!-- END .sidekickMetabox --></div><!-- END .row -->',
			) );

			