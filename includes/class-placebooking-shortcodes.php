<?php

class Placebooking_Shortcodes {
	public function __construct() {
		add_shortcode( 'placebooking', array( $this, 'add_shortcode' ) );
	}

	public function add_shortcode() {
	}
}

new Placebooking_Shortcodes();
