<?php
// Register Custom Post Type
function lean_theme_post_type() {

	$labels = array(
		'name'                  => _x( 'theme', 'Post Type General Name', 'lean' ),
		'singular_name'         => _x( 'theme', 'Post Type Singular Name', 'lean' ),
		'menu_name'             => __( 'theme', 'lean' ),
		'name_admin_bar'        => __( 'theme', 'lean' ),
		'archives'              => __( 'theme', 'lean' ),
		'attributes'            => __( 'Item Attributes', 'lean' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lean' ),
		'all_items'             => __( '所有theme', 'lean' ),
		'add_new_item'          => __( 'Add New Item', 'lean' ),
		'add_new'               => __( '添加theme', 'lean' ),
		'new_item'              => __( '新建', 'lean' ),
		'edit_item'             => __( '编辑', 'lean' ),
		'update_item'           => __( '更新', 'lean' ),
		'view_item'             => __( '查看此theme', 'lean' ),
		'view_items'            => __( '查看theme', 'lean' ),
		'search_items'          => __( '搜索', 'lean' ),
		'not_found'             => __( '没有找到', 'lean' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lean' ),
		'featured_image'        => __( '特色图像', 'lean' ),
		'set_featured_image'    => __( '设置特色图像', 'lean' ),
		'remove_featured_image' => __( '移除特色图像', 'lean' ),
		'use_featured_image'    => __( 'Use as 特色图像', 'lean' ),
		'insert_into_item'      => __( 'Insert into item', 'lean' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lean' ),
		'items_list'            => __( 'Items list', 'lean' ),
		'items_list_navigation' => __( 'Items list navigation', 'lean' ),
		'filter_items_list'     => __( 'Filter items list', 'lean' ),
	);
	$args = array(
		'label'                 => __( 'theme', 'lean' ),
		'description'           => __( '展示开发的theme。', 'lean' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'theme-category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'theme', $args );
}
add_action( 'init', 'lean_theme_post_type', 0 );
