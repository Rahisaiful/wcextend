<?php
namespace Wcextend\Inc;
/**
 * wcextend Hooks Class
 *
 * @package     wcextend
 * @author      wpmobo
 * @copyright   2022 - 2023 wpmobo
 * @license     GPL-2.0-or-later
 *
 *
 */

class Hooks {

	function __construct() {

        add_filter( 'template_include', [ 'Wcextend\Inc\Hooks_Callback', 'wce_page_template'], 99 );
	}

}
