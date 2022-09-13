<?php
/**
 * Plugin Name: Action Network Wordpress Block
 */
function actionnetwork_calendar_register_block() {
    register_block_type( __DIR__ );
}
add_action( 'init', 'actionnetwork_calendar_register_block' );