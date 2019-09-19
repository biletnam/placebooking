<?php
use Puleeno\Wallery\Wallery;
use Puleeno\Wallery\Factory\MetaboxFactory;

class Placebooking_Place_Metabox {
	protected $wallery;

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );

		if ( class_exists( Wallery::class ) ) {
			$this->wallery = new Wallery(
				new MetaboxFactory()
			);
			$this->wallery->setId( 'place_gallery' );
		}
	}

	public function add_meta_box() {
		add_meta_box(
			'place_info',
			__( 'Place Informations', 'placebooking' ),
			array( $this, 'render' ),
			array( Placebooking_Post_Types::PLACEBOOKING_POST_TYPE ),
			'advanced',
			'high'
		);
		if ( $this->wallery ) {
			add_meta_box(
				'place_gallery',
				__( 'Place Gallery', 'placebooking' ),
				array( $this->wallery, 'render' ),
				array( Placebooking_Post_Types::PLACEBOOKING_POST_TYPE ),
				'advanced',
				'high'
			);
		}
	}

	public function render( $post ) {
		$data = array(
			'price' => 1000,
		);
		placebooking_core_template(
			'admin/metabox/place-info',
			$data
		);
	}
}

new Placebooking_Place_Metabox();
