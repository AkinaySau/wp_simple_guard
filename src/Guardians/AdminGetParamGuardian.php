<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 09.07.18
 * Time: 14:28
 */

namespace Sau\WP\SimpleGuard\Guardians;

use Sau\WP\SimpleGuard\SConst;

/**
 * Защита админки. Без определённого гет параметра, форма входа показана не будет.
 * @package Sau\WP\SimpleGuard\Guardians
 */
class AdminGetParamGuardian extends Guardian {
	private $param;

	public function __construct() {
		$this->param = get_option( SConst::OPTION_AGP, true );
		$this->createOptionField();
	}

	private function createOptionField() {
		add_action( 'admin_menu', function () {
			register_setting( 'general', SConst::OPTION_AGP );
			// добавляем поле
			$label = "<label for='" . SConst::OPTION_AGP . "'>" . __( 'Secret key', SConst::TRANSLATE ) . "</label>";
			add_settings_field( SConst::OPTION_AGP, $label, function ( $val ) {
				$id = $val[ 'id' ];
				echo '<input
						class="regular-text ltr"
						type="text"
						name="' . SConst::OPTION_AGP . '"
						id="' . $id . '"
						value="' . esc_attr( get_option( SConst::OPTION_AGP ) ) . '"
					/><p class="description">' . __( 'Secret key using for access in admin panel', SConst::TRANSLATE ) . '</p>';
			}, 'general', 'default', array(
				'id'          => SConst::OPTION_AGP,
				'option_name' => SConst::OPTION_AGP,
			) );
		} );
	}

	/**
	 * Поведение защиты
	 * @return void
	 */
	public function guard() {
		add_action( 'login_enqueue_scripts', function () {
			if ( empty($this->param) || array_key_exists( $this->param, $_GET ) ) {
				setcookie( SConst::COOKIES_AGP, true, 0, '/wp-admin/' );
			} else {
				wp_redirect( site_url() );
			}
		} );
	}
}