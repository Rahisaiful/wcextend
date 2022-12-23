<?php
/*
Plugin Name:  wcextend
Plugin URI:   http://wpmobo.com/plugins/wcextend
Description:  
Version:      1.0.0
Author:       wpmobo
Author URI:   http://wpmobo.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wcextend
Domain Path:  /languages
*/



// Block Direct access
if( !defined( 'ABSPATH' ) ) { die( 'You should not access this file directly!.' ); }

// Define Constants for direct access alert message.
if( !defined( 'WCEXTEND_ALERT_MSG' ) )
	define( 'WCEXTEND_ALERT_MSG', esc_html__( 'You should not access this file directly.!', 'wcextend' ) );

// Define constants for plugin directory path.
if( !defined( 'WCEXTEND_DIR_PATH' ) )
	define( 'WCEXTEND_DIR_PATH', plugin_dir_path( __FILE__ ).'/' );

// Define constants for plugin dirname.
if( !defined( 'WCEXTEND_DIR_NAME' ) )
	define( 'WCEXTEND_DIR_NAME', dirname( __FILE__ ) );

// Define constants for plugin directory path.
if( !defined( 'WCEXTEND_DIR_URL' ) )
	define( 'WCEXTEND_DIR_URL', plugin_dir_url( __FILE__ ).'/' );

// Define constants for plugin basenam.
if( !defined( 'WCEXTEND_BASENAME' ) )
	define( 'WCEXTEND_BASENAME', plugin_basename( __FILE__ ) );

require_once WCEXTEND_DIR_PATH.'vendor/autoload.php';

final class Wcextend {

	private static $instance;

	function __construct() {
		add_action( 'init', [ $this, 'init' ] );
	}
	
	public static function getInstance() {

		if( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function init() {
		new Wcextend\Inc\Hooks();
	}

}


Wcextend::getInstance();