<?php

  // Register Custom Post Type
function haris_custom_post_types() {

  // Members
  $labels = array(
    'name'                  => _x( 'People', 'Member General Name', 'harisadmin' ),
    'singular_name'         => _x( 'Member', 'Member Singular Name', 'harisadmin' ),
    'menu_name'             => __( 'People', 'harisadmin' ),
    'name_admin_bar'        => __( 'Member', 'harisadmin' ),
    'archives'              => __( 'Member Archives', 'harisadmin' ),
    'parent_item_colon'     => __( 'Parent Member:', 'harisadmin' ),
    'all_items'             => __( 'All Members', 'harisadmin' ),
    'add_new_item'          => __( 'Add New Member', 'harisadmin' ),
    'add_new'               => __( 'Add New', 'harisadmin' ),
    'new_item'              => __( 'New Member', 'harisadmin' ),
    'edit_item'             => __( 'Edit Member', 'harisadmin' ),
    'update_item'           => __( 'Update Member', 'harisadmin' ),
    'view_item'             => __( 'View Member', 'harisadmin' ),
    'search_items'          => __( 'Search Member', 'harisadmin' ),
    'not_found'             => __( 'Not found', 'harisadmin' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'harisadmin' ),
    'featured_image'        => __( 'Member Photo', 'harisadmin' ),
    'set_featured_image'    => __( 'Set Member photo', 'harisadmin' ),
    'remove_featured_image' => __( 'Remove member photo', 'harisadmin' ),
    'use_featured_image'    => __( 'Use as member photo', 'harisadmin' ),
    'insert_into_item'      => __( 'Insert into member', 'harisadmin' ),
    'uploaded_to_this_item' => __( 'Uploaded to this member', 'harisadmin' ),
    'items_list'            => __( 'Members list', 'harisadmin' ),
    'items_list_navigation' => __( 'Members list navigation', 'harisadmin' ),
    'filter_items_list'     => __( 'Filter members list', 'harisadmin' ),
  );
  $args = array(
    'label'                 => __( 'Member', 'harisadmin' ),
    'description'           => __( 'Member Description', 'harisadmin' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_icon'             => 'dashicons-id',
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );

  register_post_type( 'member', $args );


   // Works
  $labels = array(
    'name'                  => _x( 'Projects', 'Project General Name', 'harisadmin' ),
    'singular_name'         => _x( 'Project', 'Project Singular Name', 'harisadmin' ),
    'menu_name'             => __( 'Projects', 'harisadmin' ),
    'name_admin_bar'        => __( 'Project', 'harisadmin' ),
    'archives'              => __( 'Project Archives', 'harisadmin' ),
    'parent_item_colon'     => __( 'Parent Project:', 'harisadmin' ),
    'all_items'             => __( 'All Projects', 'harisadmin' ),
    'add_new_item'          => __( 'Add New Project', 'harisadmin' ),
    'add_new'               => __( 'Add New', 'harisadmin' ),
    'new_item'              => __( 'New Project', 'harisadmin' ),
    'edit_item'             => __( 'Edit Project', 'harisadmin' ),
    'update_item'           => __( 'Update Project', 'harisadmin' ),
    'view_item'             => __( 'View Project', 'harisadmin' ),
    'search_items'          => __( 'Search Project', 'harisadmin' ),
    'not_found'             => __( 'Not found', 'harisadmin' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'harisadmin' ),
    'featured_image'        => __( 'Featured Image', 'harisadmin' ),
    'set_featured_image'    => __( 'Set featured image', 'harisadmin' ),
    'remove_featured_image' => __( 'Remove featured image', 'harisadmin' ),
    'use_featured_image'    => __( 'Use as featured image', 'harisadmin' ),
    'insert_into_item'      => __( 'Insert into item', 'harisadmin' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'harisadmin' ),
    'items_list'            => __( 'Projects list', 'harisadmin' ),
    'items_list_navigation' => __( 'Projects list navigation', 'harisadmin' ),
    'filter_items_list'     => __( 'Filter projects list', 'harisadmin' ),
  );
  $args = array(
    'label'                 => __( 'Project', 'harisadmin' ),
    'description'           => __( 'Project Description', 'harisadmin' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
    'taxonomies'            => array( 'project_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_icon'             => 'dashicons-images-alt2',
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'project', $args );

}
add_action( 'init', 'haris_custom_post_types', 0 );


// Register Custom Taxonomies
function haris_custom_taxonomies() {
  //Project Category
  $labels = array(
    'name'                       => _x( 'Project Categories', 'Project Category General Name', 'harisadmin' ),
    'singular_name'              => _x( 'Project Category', 'Project Category Singular Name', 'harisadmin' ),
    'menu_name'                  => __( 'Project Category', 'harisadmin' ),
    'all_items'                  => __( 'All Items', 'harisadmin' ),
    'parent_item'                => __( 'Parent Category', 'harisadmin' ),
    'parent_item_colon'          => __( 'Parent Category:', 'harisadmin' ),
    'new_item_name'              => __( 'New Project Category Name', 'harisadmin' ),
    'add_new_item'               => __( 'Add New Project Category', 'harisadmin' ),
    'edit_item'                  => __( 'Edit Project Category', 'harisadmin' ),
    'update_item'                => __( 'Update Project Category', 'harisadmin' ),
    'view_item'                  => __( 'View Project Category', 'harisadmin' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'harisadmin' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'harisadmin' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'harisadmin' ),
    'popular_items'              => __( 'Popular Items', 'harisadmin' ),
    'search_items'               => __( 'Search Items', 'harisadmin' ),
    'not_found'                  => __( 'Not Found', 'harisadmin' ),
    'no_terms'                   => __( 'No items', 'harisadmin' ),
    'items_list'                 => __( 'Items list', 'harisadmin' ),
    'items_list_navigation'      => __( 'Items list navigation', 'harisadmin' ),
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
  register_taxonomy( 'project_category', array( 'project' ), $args );

    //Project Tags
  $labels = array(
    'name'                       => _x( 'Project Tags', 'Project Tag General Name', 'harisadmin' ),
    'singular_name'              => _x( 'Project Tag', 'Project Tag Singular Name', 'harisadmin' ),
    'menu_name'                  => __( 'Project Tag', 'harisadmin' ),
    'all_items'                  => __( 'All Items', 'harisadmin' ),
    'parent_item'                => __( 'Parent Tag', 'harisadmin' ),
    'parent_item_colon'          => __( 'Parent Tag:', 'harisadmin' ),
    'new_item_name'              => __( 'New Project Tag Name', 'harisadmin' ),
    'add_new_item'               => __( 'Add New Project Tag', 'harisadmin' ),
    'edit_item'                  => __( 'Edit Project Tag', 'harisadmin' ),
    'update_item'                => __( 'Update Project Tag', 'harisadmin' ),
    'view_item'                  => __( 'View Project Tag', 'harisadmin' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'harisadmin' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'harisadmin' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'harisadmin' ),
    'popular_items'              => __( 'Popular Items', 'harisadmin' ),
    'search_items'               => __( 'Search Items', 'harisadmin' ),
    'not_found'                  => __( 'Not Found', 'harisadmin' ),
    'no_terms'                   => __( 'No items', 'harisadmin' ),
    'items_list'                 => __( 'Items list', 'harisadmin' ),
    'items_list_navigation'      => __( 'Items list navigation', 'harisadmin' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'project_tag', array( 'project' ), $args );

}
add_action( 'init', 'haris_custom_taxonomies', 0 );


