<!DOCTYPE html>
<html>
	<head>
		<style>
			/**** Main Content css ****/
			.wcextend-shop-admin-content {
				margin-left: 100px;
			}
			.wce-page-header {
				background: linear-gradient(to top, #0858f7, #2b77e5);
			    margin-bottom: 40px;
			    padding: 40px;
			    color: #fff;
			    text-align: center;
			}
			.wce-page-header h2{
				margin: 0;
			}
			/*** Sidebar Menu css ****/
			.wcextend-shop-admin-sidebar {
				text-align: center;
			}
			.wce-site-logo {
				margin-bottom: 15px;
			}
			.wcextend-shop-admin-sidebar {
				position: fixed;
				height: 100vh;
				width: 80px;
				left: 0;
				top:0;
				background-color: #2b77e5;
				padding: 60px 5px;
			}
			.wcextend-shop-admin-sidebar ul {
				margin: 0;
				padding: 0;
				list-style: none;
				
			}
			.wcextend-shop-admin-sidebar ul li a{
				color: #fff;
				text-decoration: none;
				display: block;
				margin-bottom: 10px;
			}
			/*** Table Css **/
			.mc-table-responsive {
			    overflow-x: auto;
			}
			.mc-table {
			    width: 100%;
			    border-collapse: collapse;
			}
			.mc-table h1,
			.mc-table h2,
			.mc-table h3,
			.mc-table h4,
			.mc-table h5,
			.mc-table h6,
			.mc-table p {
				margin: 0;
			}
			.mc-table-head.primary {
			    border: none;
			    color: var(--lightColor);
			    background: -webkit-gradient(linear, left bottom, left top, from(#0858f7), to(#2b77e5));
			    background: linear-gradient(to top, #0858f7, #2b77e5);
			}
			tbody, td, tfoot, th, thead, tr {
			    border-color: inherit;
			    border-style: solid;
			    border-width: 0;
			}
			.mc-table.product tr th:first-child, .mc-table.product tr td:first-child {
			    max-width: 90px;
			    min-width: -webkit-fit-content;
			    min-width: -moz-fit-content;
			    min-width: fit-content;
			}
			.mc-table-head.primary tr th {
			    padding: 13px 15px;
			    border-right: 1px solid #2b77e5;
			    color: #fff;
			}
			.mc-table-head tr th {
			    max-width: 120px;
			    min-width: -webkit-fit-content;
			    min-width: -moz-fit-content;
			    min-width: fit-content;
			    padding: 15px 15px;
			    text-align: left;
			    font-size: 12px;
			    font-weight: 600;
			    text-transform: uppercase;
			    white-space: nowrap;
			    overflow: hidden;
			    border-right: 1px solid var(--lightBorder);
			}
			.mc-table.product tr th:first-child, .mc-table.product tr td:first-child {
			    max-width: 90px;
			    min-width: -webkit-fit-content;
			    min-width: -moz-fit-content;
			    min-width: fit-content;
			}
			.mc-table-body tr td {
			    max-width: 120px;
			    min-width: -webkit-fit-content;
			    min-width: -moz-fit-content;
			    min-width: fit-content;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    padding: 15px 15px;
			    font-size: 14px;
			    font-weight: 400;
			    border-right: 1px solid #f0f0f0;
			    border-bottom: 1px solid #f0f0f0;
			}
			.mc-table-check {
			    display: -webkit-box;
			    display: -ms-flexbox;
			    display: flex;
			    -webkit-box-align: center;
			    -ms-flex-align: center;
			    align-items: center;
			    -webkit-box-pack: start;
			    -ms-flex-pack: start;
			    justify-content: start;
			    gap: 0px 12px;
			}
			.mc-table-check input {
			    width: 15px;
			    height: 15px;
			    -ms-flex-negative: 0;
			    flex-shrink: 0;
			    outline: 2px solid #f0f0f0;
			}
			.mc-table-check p {
			    font-weight: 600;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			}
			.mc-table-product {
			    display: -webkit-box;
			    display: -ms-flexbox;
			    display: flex;
			    -webkit-box-align: center;
			    -ms-flex-align: center;
			    align-items: center;
			    -webkit-box-pack: start;
			    -ms-flex-pack: start;
			    justify-content: start;
			    gap: 0px 8px;
			}
			.mc-table-product.md img {
			    width: 40px;
			    height: 40px;
			}
			.mc-table-product img {
			    width: 45px;
			    height: 45px;
			    -ms-flex-negative: 0;
			    flex-shrink: 0;
			    border-radius: 8px;
			    -o-object-fit: cover;
			    object-fit: cover;
			    border: 1px solid #f0f0f0;
			    -webkit-box-shadow: 0px 7px 15px 0px rgba(#f0f0f0, 6%);
			    box-shadow: 0px 7px 15px 0px rgba(#f0f0f0, 6%);
			}
			.mc-table-group {
			    min-width: 70px;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			}
			.mc-table-product h6 {
			    font-size: 14px;
			    font-weight: 500;
			    margin-bottom: 5px;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    margin: 0;
			}
			.mc-table-product p {
			    font-size: 13px;
			    line-height: 18px;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    margin: 0;
			}
			.mc-table-price p {
			    color: #ff6179;
			    font-weight: 500;
			    margin: 0;
			}
			.mc-table-rating {
			    display: -webkit-box;
			    display: -ms-flexbox;
			    display: flex;
			    -webkit-box-align: center;
			    -ms-flex-align: center;
			    align-items: center;
			    -webkit-box-pack: start;
			    -ms-flex-pack: start;
			    justify-content: start;
			    gap: 3px;
			}
			.mc-table-rating i {
			    font-size: 18px;
			    color: #edb213;
			}
			.mc-table-rating h3 {
			    font-size: 14px;
			    line-height: 18px;
			}
			.mc-table-rating p {
			    font-size: 13px;
			    line-height: 18px;
			}
			.mc-table-action {
			    display: -webkit-box;
			    display: -ms-flexbox;
			    display: flex;
			    gap: 6px;
			}
			.mc-table-action a {
				text-decoration: none;
			}
			.mc-table-action a.view, .mc-table-action button.view {
			    color: #be0ee1;
			    background-color: #fbe5ff;
			}
			.mc-table-action a, .mc-table-action button {
			    font-size: 16px;
			    padding: 6px 6px;
			    border-radius: 6px;
			    color: #ffffff;
			    background-color: #f0f0f0;
			    border: none;
			}
			.mc-table-action a.edit, .mc-table-action button.edit {
			    color: #1a9f53;
			    background-color: #ddfbe9;
			}

			.mc-table-action a.delete, .mc-table-action button.delete {
			    color: #f11133;
			    background-color: #ffdfe4;
			}
			
		</style>

		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wcextendshopadmin"></div>
		<?php wp_footer(); ?>
	</body>
</html>




