<?php

use Ramphor\User\Profile as UserProfile;
use Ramphor\User\LoginStyle\Enum;

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
		/**
		 * Load library via Composer package manager
		 */
		$composer = sprintf( '%s/vendor/autoload.php', PBABSPATH );
		if ( file_exists( $composer ) ) {
			require_once $composer;
		}
		/**
		 * Load WordPress native plugin
		 */
		require_once PBABSPATH . '/includes/placebooking-helpers.php';
		require_once PBABSPATH . '/includes/class-placebooking-post-types.php';
		if ( $this->is_request( 'admin' ) ) {
			require_once PBABSPATH . '/includes/admin/class-placebooking-admin.php';
		}
		if ( $this->is_request( 'frontend' ) ) {
			$this->include_frontend();
		}

		if ( class_exists( UserProfile::class ) ) {
			UserProfile::init(
				array(
					'templates_location' => sprintf( '%s/templates/members', PBABSPATH ),
					'login_styles'       => array(
						Enum::LOGIN_STYLE_WORDPRESS_NATIVE,
						Enum::LOGIN_STYLE_POPUP_MODAL,
					),
				)
			);
		}
	}

	private function is_request( $type ) {
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

	public function include_frontend() {
	}
}
