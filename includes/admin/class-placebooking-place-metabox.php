<?php
class Placebooking_Place_Metabox{
	public function __construct() {
		add_action('add_meta_boxes', array($this, 'add_meta_box'));
	}

	public function add_meta_box() {
		add_meta_box('place-info', __('Place Informations', 'placebooking'), array($this, 'render'), array(Placebooking_Post_Types::PLACEBOOKING_POST_TYPE));
	}

	public function render($post_id) {
	}
}

new Placebooking_Place_Metabox();
