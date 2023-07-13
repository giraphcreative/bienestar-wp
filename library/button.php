<?php


function button_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'container' => false,
		'url' => '',
		'class' => '',
		'target' => '_top',
		'download' => false
	), $atts );

	$return = '';
	if ( !empty( $a['url'] ) && !empty( $content ) ) {
		if ( !empty( $a['container'] ) ) {
			$return .= '<div class="buttons">';
		}
		$return .= '<a href="' . $a['url'] . '"> target="' . $a['target'] . '"' . ( !empty( $a['download'] ) ? ' download="' . $a['download'] . '"' : '' ) . '><span class="btn ' . $a['class'] . '">' . $content . '</span></a>';
		if ( !empty( $a['container'] ) ) {
			$return .= '</div>';
		}
		return $return;
	}
}
add_shortcode( 'button', 'button_shortcode' );

