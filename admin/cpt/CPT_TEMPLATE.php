<?php

/******** Begin Your CPT Edits Here **********/

$singular = 'Mycpt'; // Capitalized singular name
$plural = 'Mycpts'; //Capitalized plural name
$singular_lower = 'mycpt'; // lowercase singular name
$plural_lower = 'mycpt'; // lowercase plural name. **Main cpt slug**
$menu_icon = 'dashicons-admin-post'; // https://developer.wordpress.org/resource/dashicons/#performance
$tax = array( 'mycpt-tax1', 'mycpt-tax2', 'mycpt-tax3' ); // List custom taxonomies this CPT will use
$cap_type = 'post'; // Capability type

/* Uncomment the elements this CPT will support */
$supports = array(
	'title',
	'editor', //(content)
	//'author',
	'thumbnail', //(featured image) (current theme must also support Post Thumbnails)
	//'excerpt',
	//'trackbacks',
	//'custom-fields', //(see Custom_Fields, aka meta-data)
	//'comments' //(also will see comment count balloon on edit screen)
	//'revisions', //(will store revisions)
	//'page-attributes', //(template and menu order) (hierarchical must be true)
	//'post-formats', 
);
$rewrite = array (
	'slug'					=> __( $plural_lower, 'websidekick-types' ),  // Customize the permastruct slug. Defaults to $post_type key.
	'with_front'			=> true,  // Default true
	'feeds'					=> true,  // Default true
	'pages'					=> true,  // Default true
	//'ep_mask'				=> __( $plural_lower, 'websidekick-types' ),  // Endpoint mask to assign. If not specified and permalink_epmask is set, inherits from $permalink_epmask. If not specified and permalink_epmask is not set, defaults to EP_PERMALINK.
);

/******** Stop Editing **********/

$labels = array(
    'name'                  => _x( $plural, 'Post Type General Name', 'websidekick-types' ),
    'singular_name'         => _x( $singular, 'Post Type Singular Name', 'websidekick-types' ), 
    'menu_name'             => __( $plural, 'websidekick-types' ), 
    'parent_item_colon'     => __( 'Parent ' . $singular, 'websidekick-types' ),
    'all_items'             => __( 'All ' . $plural, 'websidekick-types' ),
    'view_item'             => __( 'View ' . $singular, 'websidekick-types' ),
    'item_published'		=> __( $singular . ' Published', 'websidekick-types' ), // WP 5.0
    'item_published_privately' => __( $singular . ' Published Privately', 'websidekick-types' ), // WP 5.0
    'item_reverted_to_draft' => __( $singular . ' Reverted to Draft', 'websidekick-types' ), // WP 5.0
    'item_scheduled'		=> __( $singular . ' Scheduled', 'websidekick-types' ), // WP 5.0
    'item_updated'			=> __( $singular . ' Updated', 'websidekick-types' ), // WP 5.0
    'add_new_item'          => __( 'Add New ' . $singular, 'websidekick-types' ),
    'add_new'               => __( 'Add New', 'websidekick-types' ), 
    'edit_item'             => __( 'Edit ' . $singular, 'websidekick-types' ),
    'new_item'              => __( 'New ' . $singular, 'websidekick-types' ),
    'update_item'           => __( 'Update ' . $singular, 'websidekick-types' ),
    'view_item'             => __( 'New ' . $singular, 'websidekick-types' ),
    'view_items'            => __( 'New ' . $singular, 'websidekick-types' ),
    'search_items'          => __( 'Search ' . $singular, 'websidekick-types' ),
    'not_found'             => __( 'No ' . $plural . ' Found', 'websidekick-types' ),
    'not_found_in_trash'    => __( 'No ' . $plural . ' found in Trash', 'websidekick-types' ),
    'all_items'             => __( 'All ' . $plural, 'websidekick-types' ),
    'archives'              => __( $plural, 'websidekick-types' ),
    'attributes'            => __( $plural . ' Attributes', 'websidekick-types' ),
    'insert_into_item'      => __( 'Insert into ' . $singular, 'websidekick-types' ),  
    'uploaded_to_this_item' => __( 'Upload to this ' . $singular, 'websidekick-types' ),
    'featured_image'        => __( $singular . ' Featured Image', 'websidekick-types' ), 
    'set_featured_image'    => __( 'Set featured image for this ' . $singular, 'websidekick-types' ),
    'remove_featured_image' => __( 'Remove featured image for this ' . $singular, 'websidekick-types' ), 
    'use_featured_image'    => __( 'Use featured image for this ' . $singular, 'websidekick-types' ), 
    'filter_items_list'     => __( 'Filter ' . $plural . ' list', 'websidekick-types' ), 
    'items_list_navigation' => __( $plural . ' list navigation', 'websidekick-types' ), 
    'items_list'            => __( $plural . ' list', 'websidekick-types' ), 
    'name_admin_bar'        => __( $singular, 'websidekick-types' ), 
);
$args = array(
    'label'                 => __( $plural, 'websidekick-types' ),
    'description'           => __( '', 'websidekick-types' ),
    'labels'                => $labels,
    'supports'              => $supports,
    'taxonomies'            => $tax,
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => $menu_icon,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true, 
    'rewrite'				=> $rewrite,   
    'query_var'				=> $plural_lower,  // Defaults to $post_type key.
    'delete_with_user'		=> null,  // Default null.
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => $cap_type,
    'show_in_rest'          => true,
    'rest_base'             => $plural_lower,
);
register_post_type( $plural_lower, $args );
