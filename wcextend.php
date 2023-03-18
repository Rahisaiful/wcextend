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
	define( 'WCEXTEND_DIR_PATH', plugin_dir_path( __FILE__ ) );

// Define constants for plugin dirname.
if( !defined( 'WCEXTEND_DIR_NAME' ) )
	define( 'WCEXTEND_DIR_NAME', dirname( __FILE__ ) );

// Define constants for plugin directory path.
if( !defined( 'WCEXTEND_DIR_URL' ) )
	define( 'WCEXTEND_DIR_URL', plugin_dir_url( __FILE__ ) );

// Define constants for plugin basenam.
if( !defined( 'WCEXTEND_BASENAME' ) )
	define( 'WCEXTEND_BASENAME', plugin_basename( __FILE__ ) );

require_once WCEXTEND_DIR_PATH.'vendor/autoload.php';
//use Automattic\WooCommerce\Client;
final class Wcextend {

	private static $instance;

	function __construct() {
		add_action( 'init', [ $this, 'init' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );
		add_filter( 'woocommerce_rest_check_permissions', [ __CLASS__,'myfunction_allow_rest_api_queries'], 10, 4 );
	}
	
public static function myfunction_allow_rest_api_queries( $permission, $context, $zero, $object ) {
return true;  // Allow all queries.
}
	public static function getInstance() {

		if( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function init() {



/*$woocommerce = new Client(
  'http://localhost/wcextend',
  'ck_1f0c816015be238c106418907fdae49699542e25',
  'cs_ce976b38096c94002984247e4baa4b67856ce9e3',
  [
  	'wp_api' => true,
    'version' => 'wc/v3',
   
  ]
);*/

// https://woocommerce.github.io/woocommerce-rest-api-docs/?php#list-all-orders

//print_R( $woocommerce->get('orders') );


		new Wcextend\Inc\Hooks();
		new Wcextend\Inc\WC_API();
	}

	public function enqueueScripts() {
		wp_enqueue_style( 'wce-main', WCEXTEND_DIR_URL.'build/index.css',[], '1.0.0', false );
		wp_enqueue_script( 'wce-react-main', WCEXTEND_DIR_URL.'build/index.js',['wp-element','react', 'react-dom'], '1.0.0', true );
	}

}


Wcextend::getInstance();