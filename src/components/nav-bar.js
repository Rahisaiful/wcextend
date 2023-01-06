import React, {Component} from 'react';

class NavBar extends Component {

	render() {

		return <div className="wcextend-shop-admin-sidebar">
				<div className="wce-site-logo">Logo</div>
				<ul>
					<li><a title="order" href=""><span className="dashicons dashicons-cart"></span></a></li>
					<li><a title="Customer" href=""><span className="dashicons dashicons-admin-users"></span></a></li>
					<li><a title="Customer" href=""><span className="dashicons dashicons-media-spreadsheet"></span></a></li>
				</ul>
			</div>

	}

}

export default NavBar