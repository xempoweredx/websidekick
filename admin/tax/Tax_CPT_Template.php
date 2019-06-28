<?php

$labels = array(
	'name'                       => _x( 'References', 'Taxonomy General Name', 'church_ninja' ),
	'singular_name'              => _x( 'Reference', 'Taxonomy Singular Name', 'church_ninja' ),
	'menu_name'                  => __( 'References', 'church_ninja' ),
	'all_items'                  => __( 'All References', 'church_ninja' ),
	'parent_item'                => __( 'Parent Reference', 'church_ninja' ),
	'parent_item_colon'          => __( 'Parent Reference:', 'church_ninja' ),
	'new_item_name'              => __( 'New Reference Name', 'church_ninja' ),
	'add_new_item'               => __( 'Add New Reference', 'church_ninja' ),
	'edit_item'                  => __( 'Edit Reference', 'church_ninja' ),
	'update_item'                => __( 'Update Reference', 'church_ninja' ),
	'view_item'                  => __( 'View Reference', 'church_ninja' ),
	'separate_items_with_commas' => __( 'Separate References with commas', 'church_ninja' ),
	'add_or_remove_items'        => __( 'Add or remove References', 'church_ninja' ),
	'choose_from_most_used'      => __( 'Choose from the most used References', 'church_ninja' ),
	'popular_items'              => __( 'Popular References', 'church_ninja' ),
	'search_items'               => __( 'Search References', 'church_ninja' ),
	'not_found'                  => __( 'Not Found', 'church_ninja' ),
	'no_terms'                   => __( 'No References', 'church_ninja' ),
	'items_list'                 => __( 'References list', 'church_ninja' ),
	'items_list_navigation'      => __( 'References list navigation', 'church_ninja' ),
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
register_taxonomy( 'references', array( 'resources', 'sermons', 'post' ), $args );
	