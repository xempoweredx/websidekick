<?php 

$prefix = '_sidekick_book_tax_meta_';

/*******************************************************************************************************

		GENERAL INFO METABOX

********************************************************************************************************/


$meta_boxes['Global Information'] = array(
	'id'            => 'global_info',
	'title'         => __( 'Global Info', 'cmb2' ),
	'object_types'  => array( 'book-genres' ), // Taxonomy
	'context'       => 'normal',
	'priority'      => 'high',
	'show_names'    => true, // Show field names on the left
	// 'cmb_styles' => false, // false to disable the CMB stylesheet
	'fields'        => array(
		array(
			'name'       => __( 'Term Icon', 'cmb2' ),
			'desc'       => __( 'Full FontAwesome icon class i.e. "fal fa-book" (optional)', 'websidekick' ),
			'id'         => $prefix . 'icon',
			'type'       => 'sidekick_text'
		),
		array(
			'name'    => 'Term Color',
			'id'      => $prefix . 'color',
			'type'    => 'colorpicker',
			'default' => '#007bff',
		),
	),
);