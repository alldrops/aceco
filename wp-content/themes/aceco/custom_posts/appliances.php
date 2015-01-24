<?php
add_action('init', 'appliances_post_type');
add_action( 'init', 'create_my_taxonomies', 0 );

if(!(function_exists('appliances_post_type'))){ //We need this conditional to be able to overwrite the function as a blank function in the child theme
	function appliances_post_type() {
	 
		$labels = array(
			'name' => _x('Appliances', 'post type appliances'),
			'singular_name' => _x('Room', 'post type singular appliances'),
			'add_new' => _x('Add new appliance', 'appliances'),
			'add_new_item' => __('Add new appliances'),
			'edit_item' => __('Edit appliance'),
			'new_item' => __('New appliance'),
			'view_item' => __('View appliance'),
			'search_items' => __('Search appliances'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Appliances'
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'menu_icon' => 'dashicons-menu',
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'appliances/p'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			'show_in_nav_menus' => true,
			'supports' => array('title', 'taxonomy', 'thumbnail', 'editor', 'excerpt')
		  ); 
	 
		register_post_type( 'appliances' , $args );
		flush_rewrite_rules();
	}
}

function create_my_taxonomies() {
    register_taxonomy(
        'appliances_type',
        'appliances',
        array(
            'labels' => array(
                'name' => 'Appliance Type',
                'add_new_item' => 'Add New Appliance Type',
                'new_item_name' => "New Appliance Type"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}