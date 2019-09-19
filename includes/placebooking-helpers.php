<?php
function placebooking_core_template($template, $data = array()) {
	extract($data);
	include sprintf(
		'%s/templates/%s.php',
		PBABSPATH,
		$template
	);
}

function placebooking_template($template) {
}
