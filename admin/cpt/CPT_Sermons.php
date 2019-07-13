<?php

$slug = 'sermons'; // Main cpt slug
$singular = 'Sermon';
$plural = 'Sermons';
$singular_lower = 'sermon';
$plural_lower = 'sermons'; // Main cpt slug
$menu_icon = 'dashicons-microphone';
$tax = array( 'sermons-speakers', 'sermons-series', 'sermons-services' );
$cap_type = 'post'; // Capability type
$supports = array(
	'title',
	'editor', //(content)
	'author',
	'thumbnail', //(featured image) (current theme must also support Post Thumbnails)
	'excerpt',
	//'trackbacks',
	//'custom-fields', //(see Custom_Fields, aka meta-data)
	//'comments' //(also will see comment count balloon on edit screen)
	'revisions', //(will store revisions)
	//'page-attributes', //(template and menu order) (hierarchical must be true)
	//'post-formats', 
);
$rewrite = array (
	'slug'					=> __( $slug, 'websidekick' ),  // Customize the permastruct slug. Defaults to $post_type key.
	'with_front'			=> true,  // Default true
	'feeds'					=> true,  // Default true
	'pages'					=> true,  // Default true
	//'ep_mask'				=> __( $plural_lower, 'websidekick' ),  // Endpoint mask to assign. If not specified and permalink_epmask is set, inherits from $permalink_epmask. If not specified and permalink_epmask is not set, defaults to EP_PERMALINK.
);

/******** Stop Editing **********/

$labels = array(
    'name'                  => _x( $plural, 'Post Type General Name', 'websidekick' ),
    'singular_name'         => _x( $singular, 'Post Type Singular Name', 'websidekick' ), 
    'menu_name'             => __( $plural, 'websidekick' ), 
    'parent_item_colon'     => __( 'Parent ' . $singular, 'websidekick' ),
    'all_items'             => __( 'All ' . $plural, 'websidekick' ),
    'view_item'             => __( 'View ' . $singular, 'websidekick' ),
    'item_published'		=> __( $singular . ' Published', 'websidekick' ), // WP 5.0
    'item_published_privately' => __( $singular . ' Published Privately', 'websidekick' ), // WP 5.0
    'item_reverted_to_draft' => __( $singular . ' Reverted to Draft', 'websidekick' ), // WP 5.0
    'item_scheduled'		=> __( $singular . ' Scheduled', 'websidekick' ), // WP 5.0
    'item_updated'			=> __( $singular . ' Updated', 'websidekick' ), // WP 5.0
    'add_new_item'          => __( 'Add New ' . $singular, 'websidekick' ),
    'add_new'               => __( 'Add New', 'websidekick' ), 
    'edit_item'             => __( 'Edit ' . $singular, 'websidekick' ),
    'new_item'              => __( 'New ' . $singular, 'websidekick' ),
    'update_item'           => __( 'Update ' . $singular, 'websidekick' ),
    'view_item'             => __( 'New ' . $singular, 'websidekick' ),
    'view_items'            => __( 'New ' . $singular, 'websidekick' ),
    'search_items'          => __( 'Search ' . $singular, 'websidekick' ),
    'not_found'             => __( 'No ' . $plural . ' Found', 'websidekick' ),
    'not_found_in_trash'    => __( 'No ' . $plural . ' found in Trash', 'websidekick' ),
    'all_items'             => __( 'All ' . $plural, 'websidekick' ),
    'archives'              => __( $plural, 'websidekick' ),
    'attributes'            => __( $plural . ' Attributes', 'websidekick' ),
    'insert_into_item'      => __( 'Insert into ' . $singular, 'websidekick' ),  
    'uploaded_to_this_item' => __( 'Upload to this ' . $singular, 'websidekick' ),
    'featured_image'        => __( $singular . ' Featured Image', 'websidekick' ), 
    'set_featured_image'    => __( 'Set featured image for this ' . $singular, 'websidekick' ),
    'remove_featured_image' => __( 'Remove featured image for this ' . $singular, 'websidekick' ), 
    'use_featured_image'    => __( 'Use featured image for this ' . $singular, 'websidekick' ), 
    'filter_items_list'     => __( 'Filter ' . $plural . ' list', 'websidekick' ), 
    'items_list_navigation' => __( $plural . ' list navigation', 'websidekick' ), 
    'items_list'            => __( $plural . ' list', 'websidekick' ), 
    'name_admin_bar'        => __( $singular, 'websidekick' ), 
);
$args = array(
    'label'                 => __( $plural, 'websidekick' ),
    'description'           => __( '', 'websidekick' ),
    'labels'                => $labels,
    'supports'              => $supports,
    'taxonomies'            => $tax,
    'hierarchical'          => true,
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
    'query_var'				=> $slug,  // Defaults to $post_type key.
    'delete_with_user'		=> null,  // Default null.
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => $cap_type,
    'show_in_rest'          => true,
    'rest_base'             => $slug,
);
register_post_type( $slug, $args );
