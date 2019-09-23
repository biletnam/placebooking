<?php
class Placebooking_Admin_Menus {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menus' ) );
	}

	public function register_menus() {
		add_menu_page( 'Placebooking', 'Placebooking', 'manage_options', 'placebooking', array( $this, 'render' ) );
	}

	public function render() {
	}
}

new Placebooking_Admin_Menus();
