<?php
class Placebooking_Post_Types {
	const PLACEBOOKING_POST_TYPE = 'place';
	const PLACEBOOKING_TYPES     = 'types';

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
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);
		register_post_type( self::PLACEBOOKING_POST_TYPE, apply_filters( 'placebooking_place_post_type_args', $args, $labels ) );
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
	}
}

new Placebooking_Post_Types();
