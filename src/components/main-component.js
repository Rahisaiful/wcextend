import React, { Component } from 'react'
import NavBar from './nav-bar'
import Orders from './orders'
import Page_Header from './page-header'
import Popup from './ui-popup.js'


class MainComponent extends Component {

	render() {
		return <div>
			<NavBar />
			<Popup />
			<div class="wcextend-shop-admin-content">
			<Page_Header />
			<Orders />
			</div>
		</div>
	}
}

export default MainComponent