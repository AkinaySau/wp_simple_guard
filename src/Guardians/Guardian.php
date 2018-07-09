<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 09.07.18
 * Time: 14:28
 */

namespace Sau\WP\SimpleGuard\Guardians;


abstract class Guardian {
	abstract public function __construct();

	public static function init() {
		return new static();
	}

	/**
	 * Поведение защиты
	 * @return void
	 */
	abstract public function guard();
}