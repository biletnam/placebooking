<?php
/**
 * Plugin Name: PlaceBooking
 * Plugin URI: https://puleeno.com
 * Author: Ramphor Premium
 * Author URI: https://puleeno.com
 * Description: The PlaceBooking used to booking the seat or room at hotel, restaurant, apartment or office
 * Version: 1.0.0
 */

define( 'PLACEBOOKING_PLUGIN_FILE', __FILE__ );

if ( ! class_exists( 'Placebooking' ) ) {
	require_once dirname( __FILE__ ) . '/includes/class-placebooking.php';
}

if ( ! function_exists( 'placebooking' ) ) {
	function placebooking() {
		return Clacebooking::instance();
	}
}

$GLOBALS['placebooking'] = placebooking();
