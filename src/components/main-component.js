import React, { Component } from 'react'
import NavBar from './nav-bar'
import Orders from './orders'
import Page_Header from './page-header'


class MainComponent extends Component {

	render() {
		
		return <div>
			<NavBar />
			<div class="wcextend-shop-admin-content">
			<Page_Header />
			<Orders />
			</div>
		</div>
	}
}

export default MainComponent