<?php 

$singular = 'CPT';
$plural = 'CPTs';
$singular_lower = 'cpt';
$plural_lower = 'cpts';

$prefix = 'sidekick_' . $plural_lower . '_';
$hidden = '_' . $plural_lower . '_hidden_';

$metabox_prefix = '$sidekick_' . $singular_lower . '_meta';

/*******************************************************************************************************

		GENERAL INFO METABOX

********************************************************************************************************/


$metabox_prefix = new_cmb2_box( array(
	'id'            => $prefix . $plural_lower . '_info',
	'title'         => esc_html__( $singular . ' Information', 'cmb2' ),
	'object_types'  => array( $plural_lower ), // Post type
	'cmb_styles' => false, 
	'__block_editor_compatible_meta_box' => true,
	'__back_compat_meta_box' => true,
) );

	$metabox_prefix->add_field( array(
	    'id'				=> $hidden . 'begin',
	    'type'				=> 'title',
	    'before_row'		=> 
		'<div class="sidekickMetabox container-fluid">
			<div class="form-row">',
	) );

	$metabox_prefix->add_field( array(
		'name'			=> esc_html__( 'Label Name', 'cmb2' ),
		'id'    		=> $prefix . 'input_id',
		'desc' 			=> esc_html__( 'Optional description text.', 'cmb2' ),
		'type'  		=> 'sidekick_text',
		'icon_block'		=> 'left',  // options: 'left', 'right'
		'fa_icon'			=> 'fal fa-paper-plane',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$metabox_prefix->add_field( array(
	    'id'				=> $hidden . 'end',
	    'type'				=> 'title',
	    'after_row'		=> 
						'</div><!-- END .form-row -->
					</div><!-- END .container -->',
	) );