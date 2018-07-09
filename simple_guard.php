<?php
/**
 * Plugin Name: Simple Guard
 * Plugin URI: http://tutmee.ru
 * Description: Работает как пакет composer и как плагин
 * Version: 1.0.0
 * Author: Akinay Sau
 * Author URI: http://a-sau.ru
 */

use Sau\WP\SimpleGuard\SimpleGuard;

$autoload = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $autoload;
} else {
	#todo install composer
}
if ( class_exists( 'Sau\WP\SimpleGuard\SimpleGuard' ) ) {
	SimpleGuard::init();
}


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