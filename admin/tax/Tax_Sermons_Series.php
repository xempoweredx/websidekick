<?php

$labels = array(
	'name'                       => _x( 'Series', 'Taxonomy General Name', 'church_ninja' ),
	'singular_name'              => _x( 'Series', 'Taxonomy Singular Name', 'church_ninja' ),
	'menu_name'                  => __( 'Series', 'church_ninja' ),
	'all_items'                  => __( 'All Series', 'church_ninja' ),
	'parent_item'                => __( 'Parent Series', 'church_ninja' ),
	'parent_item_colon'          => __( 'Parent Series:', 'church_ninja' ),
	'new_item_name'              => __( 'New Series Name', 'church_ninja' ),
	'add_new_item'               => __( 'Add New Series', 'church_ninja' ),
	'edit_item'                  => __( 'Edit Series', 'church_ninja' ),
	'update_item'                => __( 'Update Series', 'church_ninja' ),
	'view_item'                  => __( 'View Series', 'church_ninja' ),
	'separate_items_with_commas' => __( 'Separate Series with commas', 'church_ninja' ),
	'add_or_remove_items'        => __( 'Add or remove Series', 'church_ninja' ),
	'choose_from_most_used'      => __( 'Choose from the most used Series', 'church_ninja' ),
	'popular_items'              => __( 'Popular Series', 'church_ninja' ),
	'search_items'               => __( 'Search Series', 'church_ninja' ),
	'not_found'                  => __( 'Not Found', 'church_ninja' ),
	'no_terms'                   => __( 'No Series', 'church_ninja' ),
	'items_list'                 => __( 'Series list', 'church_ninja' ),
	'items_list_navigation'      => __( 'Series list navigation', 'church_ninja' ),
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
register_taxonomy( 'sermons-series', array( 'sermons' ), $args );
	