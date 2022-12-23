<?php
namespace Wcextend\Inc;
/**
 * wcextend Hooks Callback Class
 *
 * @package     wcextend
 * @author      wpmobo
 * @copyright   2022 - 2023 wpmobo
 * @license     GPL-2.0-or-later
 *
 *
 */

class Hooks_Callback {

	public static function wce_page_template( $template ) {

		$options = get_option('wcextend_options');

    	$shop_manager_page = !empty( $options['shop-manager-page'] ) ? $options['shop-manager-page'] : 'shop-manager';

    	// Woo Items
	    if ( is_page( $shop_manager_page )  ) {

	        $new_template = WCEXTEND_DIR_PATH.'shop-admin/template-wce-admin.php';

	        if ( '' != $new_template ) {
	            return $new_template ;
	        }
	    }

	    return $template;

	}
}