<?php

$slug = 'book-series';
$singular = 'Series';
$plural = 'Series';
$singular_lower = 'series';
$plural_lower = 'series';
$cpts = array( 'books' );

$labels = array(
	'name'                       => _x( $plural, 'Taxonomy General Name', 'websidekick' ),
	'singular_name'              => _x( $singular, 'Taxonomy Singular Name', 'websidekick' ),
	'menu_name'                  => __( $plural, 'websidekick' ),
	'all_items'                  => __( 'All ' . $plural, 'websidekick' ),
	'parent_item'                => __( 'Parent ' . $singular, 'websidekick' ),
	'parent_item_colon'          => __( 'Parent ' . $singular . ':', 'websidekick' ),
	'new_item_name'              => __( 'New ' . $singular . ' Name', 'websidekick' ),
	'add_new_item'               => __( 'Add New ' . $singular, 'websidekick' ),
	'edit_item'                  => __( 'Edit ' . $singular, 'websidekick' ),
	'update_item'                => __( 'Update ' . $singular, 'websidekick' ),
	'view_item'                  => __( 'View ' . $singular, 'websidekick' ),
	'separate_items_with_commas' => __( 'Separate ' . $plural . ' with commas', 'websidekick' ),
	'add_or_remove_items'        => __( 'Add or remove ' . $plural, 'websidekick' ),
	'choose_from_most_used'      => __( 'Choose from the most used ' . $plural, 'websidekick' ),
	'popular_items'              => __( 'Popular ' . $plural, 'websidekick' ),
	'search_items'               => __( 'Search ' . $plural, 'websidekick' ),
	'not_found'                  => __( 'Not Found', 'websidekick' ),
	'no_terms'                   => __( 'No ' . $plural, 'websidekick' ),
	'items_list'                 => __( $plural . ' list', 'websidekick' ),
	'items_list_navigation'      => __( $plural . ' list navigation', 'websidekick' ),
);
$args = array(
	'labels'                     => $labels,
	'hierarchical'               => false,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
	'show_in_rest'               => true,
);
register_taxonomy( $slug, $cpts, $args );
	