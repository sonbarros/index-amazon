<?php

if($_SERVER["SERVER_NAME"] == "www.luarcoworking.com.br") {
	/**
	 * Front to the WordPress application. This file doesn't do anything, but loads
	 * wp-blog-header.php which does and tells WordPress to load the theme.
	 *
	 * @package WordPress
	 */

	/**
	 * Tells WordPress to load the WordPress theme and output it.
	 *
	 * @var bool
	 */
	define( 'WP_USE_THEMES', true );

	/** Loads the WordPress Environment and Template */
	require( dirname( __FILE__ ) . '/luarcoworking/wp-blog-header.php' );

}else if($_SERVER["SERVER_NAME"] == "www.empregosfloriano.com.br") {
	
	header("location: /empflowp/wp-admin/");
}else if($_SERVER["SERVER_NAME"] == "http://ec2-18-220-210-235.us-east-2.compute.amazonaws.com") {
	header("location: ../supermercado/public");
}