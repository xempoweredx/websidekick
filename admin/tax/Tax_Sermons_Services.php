<?php

$labels = array(
	'name'                       => _x( 'Services', 'Taxonomy General Name', 'church_ninja' ),
	'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'church_ninja' ),
	'menu_name'                  => __( 'Services', 'church_ninja' ),
	'all_items'                  => __( 'All Services', 'church_ninja' ),
	'parent_item'                => __( 'Parent Service', 'church_ninja' ),
	'parent_item_colon'          => __( 'Parent Service:', 'church_ninja' ),
	'new_item_name'              => __( 'New Service Name', 'church_ninja' ),
	'add_new_item'               => __( 'Add New Service', 'church_ninja' ),
	'edit_item'                  => __( 'Edit Service', 'church_ninja' ),
	'update_item'                => __( 'Update Service', 'church_ninja' ),
	'view_item'                  => __( 'View Service', 'church_ninja' ),
	'separate_items_with_commas' => __( 'Separate Services with commas', 'church_ninja' ),
	'add_or_remove_items'        => __( 'Add or remove Services', 'church_ninja' ),
	'choose_from_most_used'      => __( 'Choose from the most used Services', 'church_ninja' ),
	'popular_items'              => __( 'Popular Services', 'church_ninja' ),
	'search_items'               => __( 'Search Services', 'church_ninja' ),
	'not_found'                  => __( 'Not Found', 'church_ninja' ),
	'no_terms'                   => __( 'No Services', 'church_ninja' ),
	'items_list'                 => __( 'Services list', 'church_ninja' ),
	'items_list_navigation'      => __( 'Services list navigation', 'church_ninja' ),
);
$args = array(
	'labels'                     => $labels,
	'hierarchical'               => true,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
	'show_in_rest'               => true,
);
register_taxonomy( 'sermons-services', array( 'sermons' ), $args );
	