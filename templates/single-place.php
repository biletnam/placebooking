<?php
/**
 * The single template for display place detail
 *
 * @package Placebooking/Templates
 * @version 1.0.0
 */
get_header('place');

do_action('placebooking_before_main_content');

while(have_posts()) {
	the_post();
	placebooking_template('content', 'single-place');
}

do_action('placebooking_after_main_content');

do_action('placebooking_sidebar');

/**
 * Get WordPress footer templates
 */
get_footer('place');
