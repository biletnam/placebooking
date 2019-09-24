<?php
class Placebooking_Post_Types {
	const PLACEBOOKING_POST_TYPE         = 'place';
	const PLACEBOOKING_LOBBY_POST_TYPE   = 'lobby';
	const PLACEBOOKING_TYPES             = 'types';
	const PLACEBOOKING_LOCATION          = 'location';
	const PLACEBOOKING_TAGS              = 'tag';
	const PLACEBOOKING_AMENITIES         = 'amenities';
	const PLACEBOOKING_SERVICE_POST_TYPE = 'service';

	public function __construct() {
		add_action( 'init', array( $this, 'register_place_post_type' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
	}

	public function register_place_post_type() {
		$labels = array(
			'name'               => _x( 'Places', 'post type general name', 'placebooking' ),
			'singular_name'      => _x( 'Place', 'post type singular name', 'placebooking' ),
			'menu_name'          => _x( 'Places', 'admin menu', 'placebooking' ),
			'name_admin_bar'     => _x( 'Place', 'add new on admin bar', 'placebooking' ),
			'add_new'            => _x( 'Add New', 'place', 'placebooking' ),
			'add_new_item'       => __( 'Add New Place', 'placebooking' ),
			'new_item'           => __( 'New Place', 'placebooking' ),
			'edit_item'          => __( 'Edit Place', 'placebooking' ),
			'view_item'          => __( 'View Place', 'placebooking' ),
			'all_items'          => __( 'All Places', 'placebooking' ),
			'search_items'       => __( 'Search Places', 'placebooking' ),
			'parent_item_colon'  => __( 'Parent Places:', 'placebooking' ),
			'not_found'          => __( 'No places found.', 'placebooking' ),
			'not_found_in_trash' => __( 'No places found in Trash.', 'placebooking' ),
		);
		$args   = array(
			'labels'             => $labels,
			'description'        => __( 'The place will be booked the seat or room .', 'placebooking' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'place' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-location',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		);
		register_post_type( self::PLACEBOOKING_POST_TYPE, apply_filters( 'placebooking_place_post_type_args', $args, $labels ) );

		$labels = array(
			'name'               => _x( 'Lobbies', 'post type general name', 'placebooking' ),
			'singular_name'      => _x( 'Lobby', 'post type singular name', 'placebooking' ),
			'menu_name'          => _x( 'Lobbies', 'admin menu', 'placebooking' ),
			'name_admin_bar'     => _x( 'Lobby', 'add new on admin bar', 'placebooking' ),
			'add_new'            => _x( 'Add New', 'place', 'placebooking' ),
			'add_new_item'       => __( 'Add New Lobby', 'placebooking' ),
			'new_item'           => __( 'New Lobby', 'placebooking' ),
			'edit_item'          => __( 'Edit Lobby', 'placebooking' ),
			'view_item'          => __( 'View Lobby', 'placebooking' ),
			'all_items'          => __( 'All Lobbies', 'placebooking' ),
			'search_items'       => __( 'Search Lobbies', 'placebooking' ),
			'parent_item_colon'  => __( 'Parent Lobbies:', 'placebooking' ),
			'not_found'          => __( 'No services found.', 'placebooking' ),
			'not_found_in_trash' => __( 'No services found in Trash.', 'placebooking' ),
		);
		$args   = array(
			'labels'             => $labels,
			'description'        => __( 'The place will be booked the seat or room .', 'placebooking' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'place' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-networking',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		);
		register_post_type( self::PLACEBOOKING_LOBBY_POST_TYPE, apply_filters( 'placebooking_place_post_type_args', $args, $labels ) );

		$labels = array(
			'name'               => _x( 'Services', 'post type general name', 'placebooking' ),
			'singular_name'      => _x( 'Service', 'post type singular name', 'placebooking' ),
			'menu_name'          => _x( 'Services', 'admin menu', 'placebooking' ),
			'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'placebooking' ),
			'add_new'            => _x( 'Add New', 'place', 'placebooking' ),
			'add_new_item'       => __( 'Add New Service', 'placebooking' ),
			'new_item'           => __( 'New Service', 'placebooking' ),
			'edit_item'          => __( 'Edit Service', 'placebooking' ),
			'view_item'          => __( 'View Service', 'placebooking' ),
			'all_items'          => __( 'All Services', 'placebooking' ),
			'search_items'       => __( 'Search Services', 'placebooking' ),
			'parent_item_colon'  => __( 'Parent Services:', 'placebooking' ),
			'not_found'          => __( 'No services found.', 'placebooking' ),
			'not_found_in_trash' => __( 'No services found in Trash.', 'placebooking' ),
		);
		$args   = array(
			'labels'             => $labels,
			'description'        => __( 'The place will be booked the seat or room .', 'placebooking' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'service' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-smiley',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		);
		register_post_type( self::PLACEBOOKING_SERVICE_POST_TYPE, apply_filters( 'placebooking_service_post_type_args', $args, $labels ) );
	}

	public function register_taxonomies() {
		$labels = array(
			'name'              => _x( 'Types', 'taxonomy general name', 'placebooking' ),
			'singular_name'     => _x( 'Type', 'taxonomy singular name', 'placebooking' ),
			'search_items'      => __( 'Search Types', 'placebooking' ),
			'all_items'         => __( 'All Types', 'placebooking' ),
			'parent_item'       => __( 'Parent Type', 'placebooking' ),
			'parent_item_colon' => __( 'Parent Type:', 'placebooking' ),
			'edit_item'         => __( 'Edit Type', 'placebooking' ),
			'update_item'       => __( 'Update Type', 'placebooking' ),
			'add_new_item'      => __( 'Add New Type', 'placebooking' ),
			'new_item_name'     => __( 'New Type Name', 'placebooking' ),
			'menu_name'         => __( 'Types', 'placebooking' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'types' ),
		);

		register_taxonomy(
			self::PLACEBOOKING_TYPES,
			array( self::PLACEBOOKING_POST_TYPE ),
			apply_filters(
				'placebooking_taxonomy_args',
				$args
			)
		);

		$labels = array(
			'name'              => _x( 'Locations', 'taxonomy general name', 'placebooking' ),
			'singular_name'     => _x( 'Location', 'taxonomy singular name', 'placebooking' ),
			'search_items'      => __( 'Search Locations', 'placebooking' ),
			'all_items'         => __( 'All Locations', 'placebooking' ),
			'parent_item'       => __( 'Parent Location', 'placebooking' ),
			'parent_item_colon' => __( 'Parent Location:', 'placebooking' ),
			'edit_item'         => __( 'Edit Location', 'placebooking' ),
			'update_item'       => __( 'Update Location', 'placebooking' ),
			'add_new_item'      => __( 'Add New Location', 'placebooking' ),
			'new_item_name'     => __( 'New Location Name', 'placebooking' ),
			'menu_name'         => __( 'Locations', 'placebooking' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
		);

		register_taxonomy(
			self::PLACEBOOKING_LOCATION,
			array( self::PLACEBOOKING_POST_TYPE ),
			apply_filters(
				'placebooking_taxonomy_args',
				$args
			)
		);

		$labels = array(
			'name'              => _x( 'Tags', 'taxonomy general name', 'placebooking' ),
			'singular_name'     => _x( 'Tag', 'taxonomy singular name', 'placebooking' ),
			'search_items'      => __( 'Search Tags', 'placebooking' ),
			'all_items'         => __( 'All Tags', 'placebooking' ),
			'parent_item'       => __( 'Parent Tag', 'placebooking' ),
			'parent_item_colon' => __( 'Parent Tag:', 'placebooking' ),
			'edit_item'         => __( 'Edit Tag', 'placebooking' ),
			'update_item'       => __( 'Update Tag', 'placebooking' ),
			'add_new_item'      => __( 'Add New Tag', 'placebooking' ),
			'new_item_name'     => __( 'New Tag Name', 'placebooking' ),
			'menu_name'         => __( 'Tags', 'placebooking' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
		);

		register_taxonomy(
			self::PLACEBOOKING_TAGS,
			array( self::PLACEBOOKING_POST_TYPE ),
			apply_filters(
				'placebooking_taxonomy_args',
				$args
			)
		);

		$labels = array(
			'name'              => _x( 'Amenities', 'taxonomy general name', 'placebooking' ),
			'singular_name'     => _x( 'Amenity', 'taxonomy singular name', 'placebooking' ),
			'search_items'      => __( 'Search Amenities', 'placebooking' ),
			'all_items'         => __( 'All Amenities', 'placebooking' ),
			'parent_item'       => __( 'Parent Amenity', 'placebooking' ),
			'parent_item_colon' => __( 'Parent Amenity:', 'placebooking' ),
			'edit_item'         => __( 'Edit Amenity', 'placebooking' ),
			'update_item'       => __( 'Update Amenity', 'placebooking' ),
			'add_new_item'      => __( 'Add New Amenity', 'placebooking' ),
			'new_item_name'     => __( 'New Amenity Name', 'placebooking' ),
			'menu_name'         => __( 'Amenities', 'placebooking' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => false,
			'query_var'         => true,
		);

		register_taxonomy(
			self::PLACEBOOKING_AMENITIES,
			array( self::PLACEBOOKING_POST_TYPE ),
			apply_filters(
				'placebooking_taxonomy_args',
				$args
			)
		);
	}
}

new Placebooking_Post_Types();
