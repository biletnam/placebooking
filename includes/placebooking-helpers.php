<?php
function placebooking_core_template( $templates, $data = array(), $echo = true ) {
	$template_loader = Placebooking_Template_Loader::instance();
	$template        = $template_loader->core_template( $templates, $data );
	if ( $template ) {
		if ( ! $echo ) {
			return $template;
		}
		echo wp_kses_post( $template );
	}
}

function placebooking_template( $template, $data = array(), $echo = true ) {
	$template_loader = Placebooking_Template_Loader::instance();
	$template        = $template_loader->locate_template( $templates, $data );
	if ( $template ) {
		if ( ! $echo ) {
			return $template;
		}
		echo wp_kses_post( $template );
	}
}
