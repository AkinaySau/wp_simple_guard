<?php
/**
 * @param array $data
 *
 * @return string
 */
function exec_response_string( array $data ) {
	return implode( "\r\n", $data ) . "\n";
}

/**
 * @return mixed
 */
function composer_install() {
	exec( 'php composer.phar install', $return, $code );

	return [ 'data' => exec_response_string( $return ), 'code' => $code ];
}

