<?php
// Register Custom Taxonomy
function lean_industry() {

	$labels = array(
		'name'                       => _x( '行业', 'Taxonomy General Name', 'leantheme' ),
		'singular_name'              => _x( '行业', 'Taxonomy Singular Name', 'leantheme' ),
		'menu_name'                  => __( '行业目录', 'leantheme' ),
		'all_items'                  => __( '所有行业', 'leantheme' ),
		'parent_item'                => __( '父行业', 'leantheme' ),
		'parent_item_colon'          => __( '父行业：', 'leantheme' ),
		'new_item_name'              => __( '行业名称', 'leantheme' ),
		'add_new_item'               => __( '添加行业', 'leantheme' ),
		'edit_item'                  => __( '编辑', 'leantheme' ),
		'update_item'                => __( '更新', 'leantheme' ),
		'view_item'                  => __( '查看', 'leantheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'leantheme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'leantheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'leantheme' ),
		'popular_items'              => __( 'Popular Items', 'leantheme' ),
		'search_items'               => __( '搜索行业', 'leantheme' ),
		'not_found'                  => __( '什么也没有', 'leantheme' ),
		'no_terms'                   => __( 'No items', 'leantheme' ),
		'items_list'                 => __( 'Items list', 'leantheme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'leantheme' ),
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
	register_taxonomy( 'industry', array( 'logo' ), $args );

}
add_action( 'init', 'lean_industry', 0 );
