<?php
/**
 * @package wp_gianism
 * @version 0.8
 */
/*
Plugin Name: Gianism
Plugin URI: http://hametuha.co.jp
Description: Connect user accounts with major web services like Facebook, twitter, etc. Stand on the shoulders of giants!
Author: Hametuha inc.
Version: 0.8
Author URI: http://hametuha.co.jp
*/

//Load Utility Classes
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."WP_Gianism.php";

/**
 * @var $gianism WP_Gianism
 */
$gianism = new WP_Gianism(__FILE__, "0.8");

//Load global functions
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."functions.php";