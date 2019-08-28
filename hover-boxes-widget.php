<?php
/**
 * Plugin Name: Hover Boxes Widget
 * Plugin URI: https://carminemolisso.it
 * Description: A widget that contains a lot of hover effect very beautiful
 * Version: 1.0.0
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Author: Carmine Molisso
 * Author URI: https://carminemolisso.it
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Holds the filesystem directory path (with trailing slash)
 *
 * @since 1.0.0
 *
 * @var string Plugin folder path
 */
if ( ! defined( 'HOVER_BOXES_WIDGET_PLUGIN_DIR' ) ) {
	define( 'HOVER_BOXES_WIDGET_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

/**
 * Holds the filesystem directory path (with trailing slash) 
 *
 * @since 1.0.0
 *
 * @var string Plugin folder URL
 */
if ( ! defined( 'HOVER_BOXES_WIDGET_PLUGIN_URL' ) ) {
	define( 'HOVER_BOXES_WIDGET_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Holds the filesystem directory path (with trailing slash)
 *
 * @since 1.0.0
 *
 * @var string Plugin Root File
 */
if ( ! defined( 'HOVER_BOXES_WIDGET_PLUGIN_FILE' ) ) {
	define( 'HOVER_BOXES_WIDGET_PLUGIN_FILE', __FILE__ );
}

/*
 *---------------------------------------------------------------------------*
 * Plugin modules 
 *---------------------------------------------------------------------------*
 */

require_once HOVER_BOXES_WIDGET_PLUGIN_DIR . 'create-widget.php';
require_once HOVER_BOXES_WIDGET_PLUGIN_DIR . 'styles.php';


function hover_boxes_widget_register() { 
    register_widget( 'hover_boxes_widget' );
}

add_action( 'widgets_init', 'hover_boxes_widget_register' );
