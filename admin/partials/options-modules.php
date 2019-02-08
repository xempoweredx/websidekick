<?php 

/**
 * Registers secondary options page, and set main item as parent.
 */
$args = array(
	'id'           => 'websidekick_modules_options_page',
	'title'        => esc_html__( 'Web Sidekick', 'websidekick' ),
	'menu_title'   =>  esc_html__( 'Modules', 'websidekick' ), // Use menu title, & not title to hide main h2.
	'object_types' => array( 'options-page' ),
	'option_key'   => 'websidekick_modules_options',
	'parent_slug'  => 'websidekick_main_options',
	'tab_group'    => 'websidekick_options',
	'tab_title'    => 'Modules',
	'cmb_styles' 	=> false, 
);

if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
	$args['display_cb'] = 'websidekick_options_display_with_tabs';
}

$modules_options = new_cmb2_box( $args );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

	$modules_options->add_field( array(
		'name' => 'Books',
		'id'   => 'cpt_books',
		'type' => 'switch_toggle',
		'options_color'		=> 'text-gray-lighten-7',
	    'selection_color'	=> 'text-gray-lighten-7',
	    'options_bg'		=> 'bg-gray-lighten-4',
	    'selection_bg'		=> 'bg-green',
		'classes' => array( 'col-12' ),
	) );
	$modules_options->add_field( array(
		'name' => 'Projects',
		'id'   => 'cpt_projects',
		'type' => 'switch_toggle',
		'options_color'		=> 'text-gray-lighten-7',
	    'selection_color'	=> 'text-gray-lighten-7',
	    'options_bg'		=> 'bg-gray-lighten-4',
	    'selection_bg'		=> 'bg-green',
		'classes' => array( 'col-12' ),
	) );
	$modules_options->add_field( array(
		'name' => 'Clients',
		'id'   => 'cpt_clients',
		'type' => 'switch_toggle',
		'options_color'		=> 'text-gray-lighten-7',
	    'selection_color'	=> 'text-gray-lighten-7',
	    'options_bg'		=> 'bg-gray-lighten-4',
	    'selection_bg'		=> 'bg-green',
		'classes' => array( 'col-12' ),
	) );


