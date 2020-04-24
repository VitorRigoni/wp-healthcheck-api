<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              casalnerdnocanada.com.br
 * @since             1.0.0
 * @package           HealthCheck_API
 *
 * @wordpress-plugin
 * Plugin Name:       HealthCheck API
 * Plugin URI:        casalnerdnocanada.com.br
 * Description:       Adds a healthcheck endpoint to wordpress api
 * Version:           1.0.0
 * Author:            Vitor Rigoni
 * Author URI:        casalnerdnocanada.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cnnc-healthcheck-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'HEALTHCHECK_API_VERSION', '1.0.0' );

function healthcheck_ping() {
    return true;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'healthcheck/', '/shallow', array(
      'methods' => 'GET',
      'callback' => 'healthcheck_ping',
    ) );
  } );