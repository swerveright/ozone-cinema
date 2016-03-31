<?php
/*
	Plugin Name: Ozone Cinema
	Description: This is for wordpress plugin for integrating latest updates, events and schedules from the Ozone Cinema into your WordPress projects.
	Version: 0.1
	Author: Adedoyin Kassem
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'swerveright' );
$updater->set_repository( 'ozone-cinema' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();