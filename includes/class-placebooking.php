<?php

class Clacebooking {
	protected static $instance;

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function __construct() {
		$this->define_constants();
		$this->includes();
	}

	private function define( $name, $value ) {
		if ( defined( $name ) ) {
			return;
		}
		define( $name, $value );
	}

	public function define_constants() {
		$this->define( 'PBABSPATH', dirname( PLACEBOOKING_PLUGIN_FILE ) );
	}

	public function includes() {
		require_once PBABSPATH . '/includes/class-placebooking-post-types.php';
		if($this->is_request('admin')) {
			require_once PBABSPATH . '/includes/admin/class-placebooking-admin.php';
		}
		if ( $this->is_request( 'frontend' ) ) {
			$this->include_frontned();
		}
	}

	public function is_request( $request ) {
		switch ( $type ) {
			case 'admin':
				return is_admin();
			case 'ajax':
				return defined( 'DOING_AJAX' );
			case 'cron':
				return defined( 'DOING_CRON' );
			case 'frontend':
				return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
		}
	}

	public function include_frontned() {
	}
}
