<?php
/**
 * Plugin Name: Simple Guard
 * Plugin URI: http://tutmee.ru
 * Description: Работает как пакет composer (пока)
 * Version: 1.0.0
 * Author: Akinay Sau
 * Author URI: http://a-sau.ru
 */

use Sau\WP\SimpleGuard\SimpleGuard;

require_once __DIR__ . '/vendor/autoload.php';

add_action( 'plugins_loaded', function () {
	SimpleGuard::init();
} );



//$autoload = __DIR__ . '/vendor/autoload.php';
//if ( file_exists( $autoload ) ) {
//	include_once $autoload;
//
//	return;
//} else {
//	include_once __DIR__ . "/composer_commands.php";
//	include_once __DIR__.'install.php';
//	print_r( composer_install() );
//}