<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 09.07.18
 * Time: 14:32
 */

namespace Sau\WP\SimpleGuard;


use Sau\WP\SimpleGuard\Guardians\AdminGetParamGuardian;

/**
 * Храним константы в классе воизбежание конфликтов
 * @package Sau\WP\SimpleGuard
 */
final class SConst {
	/**
	 * Название пакета
	 */
	const NAME = 'wp_simple_guard';
	/**
	 * Дирректория пакета
	 */
	const BASE_DIR = __DIR__ . '../';

	/**
	 * Дирректория Composer
	 * @todo сделать автоматическое обновление пакета, даже без доступа к консоли (https://stackoverflow.com/questions/17219436/run-composer-with-a-php-script-in-browser).
	 */
	const COMPOSER_DIR = self::BASE_DIR . '/composer';

	/**
	 * Параметр для входа в админку
	 * @see AdminGetParamGuardian
	 */
	const OPTION_AGP = 'sg_agp';
	/**
	 * Название куков со страницы логина для использования в дальнейшем.
	 */
	const COOKIES_AGP = self::OPTION_AGP;

	/**
	 * Название файла перевода
	 */
	const TRANSLATE = self::NAME;

}