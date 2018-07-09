<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 09.07.18
 * Time: 14:27
 */

namespace Sau\WP\SimpleGuard;


use Sau\WP\SimpleGuard\Guardians\AdminGetParamGuardian;
use Sau\WP\SimpleGuard\Guardians\Guardian;

class SimpleGuard {

	public static function init() {
		return new static();
	}

	public function __construct() {
		$guardians = [
			AdminGetParamGuardian::init()
		];
		// Активация защиты
		foreach ( $guardians as $guard ) {
			if ( $guard instanceof Guardian ) {
				$guard->guard();
			}
		}
	}

}