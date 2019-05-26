<?php
// Register Custom Industy
function leantheme_industy() {

	$labels = array(
		'name'                       => _x( 'Industies', 'Industy General Name', 'leantheme' ),
		'singular_name'              => _x( 'Industy', 'Industy Singular Name', 'leantheme' ),
		'menu_name'                  => __( '行业', 'leantheme' ),
		'all_items'                  => __( 'All Industies', 'leantheme' ),
		'parent_item'                => __( 'Parent Industy', 'leantheme' ),
		'parent_item_colon'          => __( 'Parent Industy:', 'leantheme' ),
		'new_item_name'              => __( 'New Industy Name', 'leantheme' ),
		'add_new_item'               => __( 'Add New Industy', 'leantheme' ),
		'edit_item'                  => __( 'Edit Industy', 'leantheme' ),
		'update_item'                => __( 'Update Industy', 'leantheme' ),
		'view_item'                  => __( 'View Industy', 'leantheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'leantheme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'leantheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'leantheme' ),
		'popular_items'              => __( 'Popular Industies', 'leantheme' ),
		'search_items'               => __( 'Search Industies', 'leantheme' ),
		'not_found'                  => __( 'Not Found', 'leantheme' ),
		'no_terms'                   => __( 'No items', 'leantheme' ),
		'items_list'                 => __( 'Industies list', 'leantheme' ),
		'items_list_navigation'      => __( 'Industies list navigation', 'leantheme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'industy', array( 'qiye' ), $args );

}
add_action( 'init', 'leantheme_industy', 0 );
