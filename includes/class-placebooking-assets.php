<?php
class Placebooking_Assets {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
	}

	public function register_scripts() {
		wp_register_script( 'slick', placebooking_asset_url( 'vendor/slick/slick.js' ), array(), '1.8.0', true );
		wp_register_script( 'placebooking', placebooking_asset_url( 'js/placebooking.js', array( 'slick' ), '1.0.0' ), true );
		wp_enqueue_script( 'placebooking' );

		wp_register_style( 'slick', placebooking_asset_url( 'vendor/slick/slick.css' ), array(), '1.8.0', true );
		wp_register_style( 'placebooking', placebooking_asset_url( 'css/placebooking.css', array( 'slick' ), '1.0.0' ), true );
		wp_enqueue_style( 'placebooking' );
	}
}

new Placebooking_Assets();
