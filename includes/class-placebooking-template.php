<?php

class Placebooking_Template {
	public function __construct() {
		add_filter( 'single_template', array( $this, 'load_single_template' ), 10, 3 );
	}

	public function load_single_template( $template, $type, $templates ) {
		$post_type = get_post_type();
		if ( in_array( $post_type, array( 'place', 'lobby' ) ) ) {
			if ( basename( $template ) === 'single.php' ) {
				return sprintf( '%s/templates/single-%s.php', PBABSPATH, $post_type );
			}
		}
		return $template;
	}
}


new Placebooking_Template();
