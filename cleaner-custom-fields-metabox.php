<?php
/**
 * Plugin Name: Cleaner Custom Fields Metabox
 * Plugin URI: http://www.cuadric.com
 * Description: Una mejora importantísima en la interface de la metabox de campos personalizados
 * Author: Gonzalo Sanchez
 * Author URI: http://blog.cuadric.com
 * Version: 1.0
 */ 

function cleaner_custom_fields_metabox_enqueue() {
	wp_enqueue_style( 'ccfmbx_styles', plugins_url( 'style.css' , __FILE__ ), array(), '1', 'all' );
	// wp_enqueue_script( 'ccfmbx_scripts', plugins_url( 'script.js', __FILE__ ), array('jquery'), '1' );
}

add_action('admin_enqueue_scripts', 'cleaner_custom_fields_metabox_enqueue');