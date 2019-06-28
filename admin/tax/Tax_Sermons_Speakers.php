<?php

$labels = array(
	'name'                       => _x( 'Speakers', 'Taxonomy General Name', 'church_ninja' ),
	'singular_name'              => _x( 'Speaker', 'Taxonomy Singular Name', 'church_ninja' ),
	'menu_name'                  => __( 'Speakers', 'church_ninja' ),
	'all_items'                  => __( 'All Speakers', 'church_ninja' ),
	'parent_item'                => __( 'Parent Speaker', 'church_ninja' ),
	'parent_item_colon'          => __( 'Parent Speaker:', 'church_ninja' ),
	'new_item_name'              => __( 'New Speaker Name', 'church_ninja' ),
	'add_new_item'               => __( 'Add New Speaker', 'church_ninja' ),
	'edit_item'                  => __( 'Edit Speaker', 'church_ninja' ),
	'update_item'                => __( 'Update Speaker', 'church_ninja' ),
	'view_item'                  => __( 'View Speaker', 'church_ninja' ),
	'separate_items_with_commas' => __( 'Separate Speakers with commas', 'church_ninja' ),
	'add_or_remove_items'        => __( 'Add or remove Speakers', 'church_ninja' ),
	'choose_from_most_used'      => __( 'Choose from the most used Speakers', 'church_ninja' ),
	'popular_items'              => __( 'Popular Speakers', 'church_ninja' ),
	'search_items'               => __( 'Search Speakers', 'church_ninja' ),
	'not_found'                  => __( 'Not Found', 'church_ninja' ),
	'no_terms'                   => __( 'No Speakers', 'church_ninja' ),
	'items_list'                 => __( 'Speakers list', 'church_ninja' ),
	'items_list_navigation'      => __( 'Speakers list navigation', 'church_ninja' ),
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
register_taxonomy( 'sermons-speakers', array( 'sermons' ), $args );
	