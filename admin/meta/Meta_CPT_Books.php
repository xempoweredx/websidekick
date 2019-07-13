<?php 

$prefix = 'sidekick_book_';

/*******************************************************************************************************

		GENERAL INFO METABOX

********************************************************************************************************/


$sidekick_sermon_meta = new_cmb2_box( array(
	'id'            => $prefix . 'sermon_info',
	'title'         => esc_html__( 'Sermon Information', 'cmb2' ),
	'object_types'  => array( 'sermons' ), // Post type
	'cmb_styles' => false, 
	'__block_editor_compatible_meta_box' => true,
	'__back_compat_meta_box' => true,
) );

	$sidekick_sermon_meta->add_field( array(
	    'id'				=> $prefix . 'hidden_begin',
	    'type'				=> 'title',
	    'before_row'		=> 
		'<div class="sidekickMetabox container-fluid">
			<div class="form-row">',
	) );

	$sidekick_sermon_meta->add_field( array(
		'name'			=> esc_html__( 'FB Video ID', 'cmb2' ),
		'id'    		=> $prefix . 'fb_vid_id',
		'desc' 			=> esc_html__( 'Just the ID number from the FB video URL', 'cmb2' ),
		'type'  		=> 'sidekick_text',
		'icon_block'		=> 'left',  // options: 'left', 'right'
		'fa_icon'			=> 'fal fa-hashtag',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$sidekick_sermon_meta->add_field( array(
		'name'			=> esc_html__( 'Scripture References', 'cmb2' ),
		'id'    		=> $prefix . 'scripture_ref',
		'desc' 			=> esc_html__( 'Separate references with a comma', 'cmb2' ),
		'type'  		=> 'sidekick_text',
		'icon_block'		=> 'left',  // options: 'left', 'right'
		'fa_icon'			=> 'fal fa-bible',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$sidekick_sermon_meta->add_field( array(
		'name'			=> esc_html__( 'Sermon Outline PDF', 'cmb2' ),
		'id'    		=> $prefix . 'outline',
		'desc' 			=> esc_html__( 'Insert URL or upload', 'cmb2' ),
		'type'  		=> 'sidekick_file',
		'options' 		=> array(
	        'url' => true, 
	    ),
	    'text'    		=> array(
	        'add_upload_file_text' => 'Upload' // Change upload button text. Default: "Add or Upload File"
	    ),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$sidekick_sermon_meta->add_field( array(
		'name'			=> esc_html__( 'Audio File', 'cmb2' ),
		'id'    		=> $prefix . 'audio',
		'desc' 			=> esc_html__( 'Insert URL or upload', 'cmb2' ),
		'type'  		=> 'sidekick_file',
		'options' 		=> array(
	        'url' => true, 
	    ),
	    'text'    		=> array(
	        'add_upload_file_text' => 'Upload' // Change upload button text. Default: "Add or Upload File"
	    ),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$sidekick_sermon_meta->add_field( array(
		'name'			=> esc_html__( 'Video File', 'cmb2' ),
		'id'    		=> $prefix . 'video',
		'desc' 			=> esc_html__( 'Insert URL or upload', 'cmb2' ),
		'type'  		=> 'sidekick_file',
		'options' 		=> array(
	        'url' => true, 
	    ),
	    'text'    		=> array(
	        'add_upload_file_text' => 'Upload' // Change upload button text. Default: "Add or Upload File"
	    ),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$sidekick_sermon_meta->add_field( array(
		'name'			=> esc_html__( 'Youtube Video ID', 'cmb2' ),
		'id'    		=> $prefix . 'youtube',
		'desc' 			=> esc_html__( 'NOT full URL. Just the video ID.', 'cmb2' ),
		'type'  		=> 'sidekick_text',
		'icon_block'		=> 'left',  // options: 'left', 'right'
		'fa_icon'			=> 'fab fa-youtube',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'		=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'			=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'		=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$sidekick_sermon_meta->add_field( array(
	    'id'				=> $prefix . 'hidden_end',
	    'type'				=> 'title',
	    'after_row'		=> 
						'</div><!-- END .form-row -->
					</div><!-- END .container -->',
	) );