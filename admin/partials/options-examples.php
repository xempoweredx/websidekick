<?php 

$args = array(
	'id'           => 'websidekick_examples_options_page',
	'title'        => esc_html__( 'Web Sidekick', 'websidekick' ),
	'menu_title'   =>  esc_html__( 'CMB2 Inputs', 'websidekick' ), // Use menu title, & not title to hide main h2.
	'object_types' => array( 'options-page' ),
	'option_key'   => 'websidekick_examples_options',
	'parent_slug'  => 'websidekick_main_options',
	'tab_group'    => 'websidekick_options',
	'tab_title'    => 'CMB2 Forms',
	'cmb_styles' 	=> false, 
);

if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
	$args['display_cb'] = 'websidekick_options_display_with_tabs';
}

$examples_options = new_cmb2_box( $args );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

			$examples_options->add_field( array(
				'name' => 'CMB2 Input Default Fields',
				'id'   => 'title',
				'type' => 'title',
				'before_row' => '<div class="row">',
			) );

			$examples_options->add_field( array(
				'name' => 'text',
				//'desc' => 'field description (optional)',
				'id'   => 'test_text',
				'type' => 'text',				
			) );
			$examples_options->add_field( array(
				'name' => 'text_small',
				'id'   => 'text_small',
				'type' => 'text_small',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'text_medium',
				'id'   => 'text_medium',
				'type' => 'text_medium',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'text_email',
				'id'   => 'text_email',
				'type' => 'text_email',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'text_url',
				'id'   => 'text_url',
				'type' => 'text_url',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'radio',
				'id'   => 'radio',
				'type' => 'radio',
				'show_option_none' => true,
				'options'	=> array(
					'one' 		=> __( 'Option One', 'cmb2' ),
					'two'   	=> __( 'Option Two', 'cmb2' ),
					'three'		=> __( 'Option Three', 'cmb2' ),
				),
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'select',
				'id'   => 'select',
				'type' => 'select',
				'show_option_none' => true,
				'default'          => 'none',
				'options'	=> array(
					'one' 		=> __( 'Option One', 'cmb2' ),
					'two'   	=> __( 'Option Two', 'cmb2' ),
					'three'		=> __( 'Option Three', 'cmb2' ),
				),
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'checkbox',
				'id'   => 'checkbox',
				'type' => 'checkbox',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'multicheck',
				'id'   => 'multicheck',
				'type' => 'multicheck',
				'options'	=> array(
					'one' 		=> __( 'Option One', 'cmb2' ),
					'two'   	=> __( 'Option Two', 'cmb2' ),
					'three'		=> __( 'Option Three', 'cmb2' ),
				),
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'radio_inline',
				'id'   => 'radio_inline',
				'type' => 'radio_inline',
				'options'	=> array(
					'one' 		=> __( 'Option One', 'cmb2' ),
					'two'   	=> __( 'Option Two', 'cmb2' ),
					'three'		=> __( 'Option Three', 'cmb2' ),
				),
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'multicheck_inline',
				'id'   => 'multicheck_inline',
				'type' => 'multicheck_inline',
				'options'	=> array(
					'one' 		=> __( 'Option One', 'cmb2' ),
					'two'   	=> __( 'Option Two', 'cmb2' ),
					'three'		=> __( 'Option Three', 'cmb2' ),
				),
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'text_money',
				'id'   => 'text_money',
				'type' => 'text_money',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'textarea',
				'id'   => 'textarea',
				'type' => 'textarea',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'textarea_small',
				'id'   => 'textarea_small',
				'type' => 'textarea_small',
				'classes' => array( 'col-12' ),
			) );
			$examples_options->add_field( array(
				'name' => 'file',
				'id'   => 'file',
				'type' => 'file',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'textarea_code',
				'id'   => 'textarea_code',
				'type' => 'textarea_code',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'text_time',
				'id'   => 'text_time',
				'type' => 'text_time',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'select_timezone',
				'id'   => 'select_timezone',
				'type' => 'select_timezone',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'text_date',
				'id'   => 'text_date',
				'type' => 'text_date',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'text_date_timestamp',
				'id'   => 'text_date_timestamp',
				'type' => 'text_date_timestamp',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'text_datetime_timestamp',
				'id'   => 'text_datetime_timestamp',
				'type' => 'text_datetime_timestamp',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'text_datetime_timestamp_timezone',
				'id'   => 'text_datetime_timestamp_timezone',
				'type' => 'text_datetime_timestamp_timezone',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'colorpicker1',
				'id'   => 'colorpicker1',
				'type' => 'colorpicker',
				'options' => array( 'alpha' => true ),
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'colorpicker2',
				'id'   => 'colorpicker2',
				'type' => 'colorpicker',
				'options' => array( 'alpha' => true ),
				'attributes' => array(
			        'data-colorpicker' => json_encode( array(
			            // Iris Options set here as values in the 'data-colorpicker' array
			            'palettes' => array( '#3dd0cc', '#ff834c', '#4fa2c0', '#0bc991', ),
			        ) ),
			    ),
				'classes' => array( 'col-12' ),
			) );
			
			$examples_options->add_field( array(
				'name' => 'taxonomy_radio',
				'id'   => 'taxonomy_radio',
				'type' => 'taxonomy_radio',
				'taxonomy'       => 'book_formats', // Enter Taxonomy Slug
				'text'           => array(
					'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
				),
				'remove_default' => 'true',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'taxonomy_radio_inline',
				'id'   => 'taxonomy_radio_inline',
				'type' => 'taxonomy_radio_inline',
				'taxonomy'       => 'book_formats', // Enter Taxonomy Slug
				'text'           => array(
					'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
				),
				'remove_default' => 'true',
				'classes' => array( 'col-12' ),
			) );
			
			$examples_options->add_field( array(
				'name' => 'taxonomy_select',
				'id'   => 'taxonomy_select',
				'type' => 'taxonomy_select',
				'taxonomy'       => 'book_formats', // Enter Taxonomy Slug
				'remove_default' => 'true',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'taxonomy_multicheck',
				'id'   => 'taxonomy_multicheck',
				'type' => 'taxonomy_multicheck',
				'taxonomy'       => 'book_formats', // Enter Taxonomy Slug
				'text'           => array(
					'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
				),
				'remove_default' => 'true',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'taxonomy_multicheck_inline',
				'id'   => 'taxonomy_multicheck_inline',
				'type' => 'taxonomy_multicheck_inline',
				'taxonomy'       => 'book_formats', // Enter Taxonomy Slug
				'text'           => array(
					'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
				),
				'remove_default' => 'true',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'wysiwyg',
				'id'   => 'wysiwyg',
				'type' => 'wysiwyg',
				'classes' => array( 'col-12' ),
			) );

			$examples_options->add_field( array(
				'name' => 'file_list',
				'id'   => 'file_list',
				'type' => 'file_list',
				'after_row' => '</div>',
				'classes' => array( 'col-12' ),
			) );



			