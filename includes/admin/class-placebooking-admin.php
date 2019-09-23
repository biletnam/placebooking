<?php
class Placebooking_Admin {
	public function __construct() {
		$this->includes();
	}

	public function includes() {
		require_once dirname( __FILE__ ) . '/class-placebooking-admin-menus.php';
		require_once dirname( __FILE__ ) . '/class-placebooking-place-metabox.php';
	}
}

new Placebooking_Admin();
