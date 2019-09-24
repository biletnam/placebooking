<?php

class Placebooking_Template_Loader {

	protected static $instance;

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function __construct() {
	}

	public function locate_template( $templates, $data = array() ) {
		$theme_templates = array();
		foreach ( (array) $templates as $template ) {
			$theme_templates[] = sprintf( '%s/%s.php', 'placebooking', $template );
		}
		$template = locate_template( $theme_templates, false );
		if ( ! empty( $template ) ) {
			extract( $data );
			return require $template;
		}
		return $this->core_template( $templates, $data );
	}

	public function core_template( $templates, $data = array() ) {
		foreach ( (array) $templates as $template ) {
			$template = sprintf( '%s/templates/%s.php', PBABSPATH, $template );
			if ( file_exists( $template ) ) {
				extract( $data );
				return require $template;
			}
		}
		return __return_empty_string();
	}
}
