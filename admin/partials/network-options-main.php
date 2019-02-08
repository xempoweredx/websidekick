<?php 

	$args = array(
		'id'           => 'websidekick_network_options_metabox',
		'title'        => esc_html__( 'Web Sidekick Network', 'websidekick' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'websidekick_network_options',
		'admin_menu_hook' => 'network_admin_menu',
		'cmb_styles' 	=> false, 
	);

	$network_options = new_cmb2_box( $args );

	if ( is_multisite() ) {
		$network_options->add_field( array(
			'name'    => __( 'Github Auth Key', 'websidekick' ),
			'id'      => 'git_auth',
			'type'    => 'sidekick_text',
			'before_row' => '<div class="form-row">',
			'classes' => array( 'col-12' ),
			'after_row' => '</div>',
		) );
	}

