import React, {Component} from 'react';

class Nav_Bar extends Components {

	render() {

		return <div class="wcextend-shop-admin-sidebar">
				<div class="wce-site-logo">Logo</div>
				<ul>
					<li><a title="order" href=""><span class="dashicons dashicons-cart"></span></a></li>
					<li><a title="Customer" href=""><span class="dashicons dashicons-admin-users"></span></a></li>
					<li><a title="Customer" href=""><span class="dashicons dashicons-media-spreadsheet"></span></a></li>
				</ul>
			</div>

	}

}

export default Nav_Bar