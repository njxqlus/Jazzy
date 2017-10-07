<?php
/**
 * Plugin Name: Jazzy
 * Author: Mikael Agabalyants
 * Author URI: http://jazzweb.ru
 * Description:
 */
//todo require bladerunner
define('JAZZY_DIR_PATH', __DIR__);

/**
 * Activate Jazzy
 * @since 1.0
 */
require_once __DIR__ . '/features/jazzy.php';

/**
 * Add theme support
 * @since 1.0
 */
require_once __DIR__ . '/features/theme-support.php';

/**
 * Activate Wordplate/Plate
 * @since 1.0
 */
require_once __DIR__ . '/features/plate.php';

/**
 * Activate Roots/Soil
 * @since 1.0
 */
require_once __DIR__ . '/features/soil.php';
