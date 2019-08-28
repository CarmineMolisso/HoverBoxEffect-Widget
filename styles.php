<?php
/**
 * Functions dealing with styles.
 *
 * @package   Hover_Boxes_Widget
 */

/**
 * Function to add CSS to header.
 *
 * @since   1.0.0
 */
function hbw_header() {

	/*$hbw_custom_css = stripslashes( tptn_get_option( 'custom_css' ) );

	// Add CSS to header.
	if ( '' != $hbw_custom_css ) { // phpcs:ignore WordPress.PHP.StrictComparisons.LooseComparison
		echo '<style type="text/css">' . $hbw_custom_css . '</style>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}*/
}
add_action( 'wp_head', 'hbw_header' );


/**
 * Enqueue styles.
 */
function hbw_heading_styles() {

		wp_register_style( 'hbw-style-normalize', plugins_url( 'css/normalize.css', HOVER_BOXES_WIDGET_PLUGIN_FILE ), array(), '1.0' );
		wp_enqueue_style( 'hbw-style-normalize' );

		wp_register_style( 'hbw-style-demo', plugins_url( 'css/demo.css', HOVER_BOXES_WIDGET_PLUGIN_FILE ), array(), '1.0' );
		wp_enqueue_style( 'hbw-style-demo' );

		wp_register_style( 'hbw-style-set1', plugins_url( 'css/set1.css', HOVER_BOXES_WIDGET_PLUGIN_FILE ), array(), '1.0' );
		wp_enqueue_style( 'hbw-style-set1' );
		
}
add_action( 'wp_enqueue_scripts', 'hbw_heading_styles' );


