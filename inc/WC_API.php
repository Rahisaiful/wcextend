<?php
namespace Wcextend\Inc;
/**
 * wcextend Helper Class
 *
 * @package     wcextend
 * @author      wpmobo
 * @copyright   2022 - 2023 wpmobo
 * @license     GPL-2.0-or-later
 *
 *
 */

class WC_API {

    function __construct() {
        
        add_action( 'rest_api_init', [ __CLASS__, 'wc_orders_routes' ] );
    }

    /**
     * This function is where we register our routes for our example endpoint.
     * 
     *  http://localhost/wcextend/wp-json/wce/v1/orders
     * 
     */
    public static function wc_orders_routes() {
        // register_rest_route() handles more arguments but we are going to stick to the basics for now.
        register_rest_route( 'wce/v1', '/orders', array(
            // By using this constant we ensure that when the WP_REST_Server changes our readable endpoints will work as intended.
            'methods'  => \WP_REST_Server::READABLE,
            // Here we register our callback. The callback is fired when this endpoint is matched by the WP_REST_Server class.
            'callback' => [__CLASS__, 'get_all_orders'],
        ) );
    }


    public static function get_all_orders() {


        // First 3 orders.
        $args = array(
            'limit' => 10,
            'paged' => 1,
            'paginate' => true
        );

        $page_1_orders = wc_get_orders( $args );

        print_R( $page_1_orders );

    }


}