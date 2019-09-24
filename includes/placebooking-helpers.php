<?php
function placebooking_core_template( $templates, $data = array() ) {
	$template_loader = Placebooking_Template_Loader::instance();
	$template_loader->core_template( $templates, $data );
}

function placebooking_template() {
	$args = func_get_args();
	$data = end( $args );
	if ( is_array( $data ) ) {
		unset( $args[ count( $args ) - 1 ] );
	} else {
		$data = array();
	}
	$templates       = implode( '/', $args );
	$template_loader = Placebooking_Template_Loader::instance();
	$template_loader->locate_template( $templates, $data );
}


function placebooking_asset_url( $path ) {
	return sprintf(
		'%sassets/%s',
		plugin_dir_url( PLACEBOOKING_PLUGIN_FILE ),
		$path
	);
}
