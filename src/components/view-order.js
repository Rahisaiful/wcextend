import React, { useState, useEffect } from 'react';


export default function View_Order( props ) {


	let data = props.data;


	const [ currentTab, setTab ] = useState("orderinfo");

	const handleTab = (e) => {
		setTab( e.target.id );
	}
console.log( 'say hello' )	
	return(<div>
		<div className="order-info-tabs">

			<div className="order-info-tab order-info-tab-area">
				<ul>
					<li id="orderinfo" className={ currentTab == "orderinfo" ? "active" : "" } onClick={handleTab}>Order Info</li>
					<li id="orderaction" className={ currentTab == "orderaction" ? "active" : "" } onClick={handleTab}>Order Action</li>
				</ul>
			</div>


			<div className="order-info-tab order-info-content-area">
							
				{ 

				/* Order content  tab  */
				currentTab == "orderinfo" ? 

				<div  className="order-content-tab">
					<div className="wce-order-info">
						<h2>Order #{data.id}</h2>
						<p>Payment via Cash on delivery.</p>
						<p>Customer IP: {data.customer_ip_address}</p>
						<p>Order created Date : {data.date_created}</p>
						<p>Status : {data.status}</p>
						<p>Customer: {data.billing.first_name+' '+data.billing.last_name}</p>
						<p>Email: {data.billing.email}</p>
					</div>
					
					<div class="wce-billing-info-wrap">
						<div class="wce-billing-info">
							<h4>Billing Details</h4>
							<p>{data.billing.first_name+' '+data.billing.last_name}</p>
							<p>{data.billing.address_1}</p>
							<p>{data.billing.address_2}</p>
							<p>{data.billing.city}</p>
							<p>{data.billing.state}</p>
							<p>{data.billing.postcode}</p>
						</div>

						<div class="wce-shippingEdit-info">
							<h4>Shipment Details</h4>
							<p>{data.shipping.first_name+' '+data.shipping.last_name}</p>
							<p>{data.shipping.address_1}</p>
							<p>{data.shipping.address_2}</p>
							<p>{data.shipping.city}</p>
							<p>{data.shipping.state}</p>
							<p>{data.shipping.postcode}</p>
						</div>

					</div>

					<div className="wce-order-items">
						<table className="mc-table">
						    <thead className="mc-table-head">
						        <tr>
						            <th>uid</th>
						            <th>product</th>
						            <th>price</th>
						            <th>discount</th>
						            <th>quantity</th>
						            <th>Amount</th>
						        </tr>
						    </thead>
						    <tbody className="mc-table-body">
						    
							{
						    	data.line_items?.map( item => {

							    	return (<tr>
							            <td>#5768</td>
							            <td>
							                <div className="wce-table-product-name">
							                    <img src={item.image.src} alt={item.name} />
							                    <div>
							                    <p><strong>{item.name}</strong></p>
							                    <p>{item.sku}</p>
							                    </div>
							                </div>
							            </td>
							            <td>$20</td>
							            <td>20%</td>
							            <td>03</td>
							            <td>$15</td>
							        </tr>)

						    	} )
					
						    }
						        
						        
						    </tbody>
						</table>
						<div class="wce-order-invoice-list-group">
						    <ul class="wce-order-invoice-list">
						        <li><span className="title">subtotal</span><span class="clone">:</span><span className="digit">$2,749.00</span></li>
						        <li><span className="title">discount</span><span class="clone">:</span><span className="digit">$134.00</span></li>
						        <li><span className="title">shipping</span><span class="clone">:</span><span className="digit">$60.00</span></li>
						        <li><span className="title">total</span><span class="clone">:</span><span className="digit total">$2,878.00</span></li>
						        <li><span className="title">status</span><span class="clone">:</span><span className="status purple">cod</span></li>
						    </ul>
						</div>
					</div>
				
				</div>
				:''
				/* End order content  tab */
				}
			
				
				{
					/* Order action tab content */
					currentTab == "orderaction" ?

				<div className="order-action-tab-content">

					<div className="wce-order-action">

						<div className="wce-order-action-group-1">

							<div className="wce-form-group">
					            <label for="">Order Status</label>
					            <select name="order_status" id="" className="form-control">
					              <option selected="" value="0">Pending</option>
					              <option value="1">In Progress</option>
					              <option value="2">Delivered</option>
					              <option value="3">Completed</option>
					              <option value="4">Declined</option>
					            </select>
					      	</div>

					      	<div className="wce-form-group">
					            <label for="">Order Action</label>
					            <select name="order_status" id="" className="form-control">
						            <option value="">Choose an action...</option>
									<option value="send_order_details">Email invoice / order details to customer</option>
									<option value="send_order_details_admin">Resend new order notification</option>
									<option value="regenerate_download_permissions">Regenerate download permissions</option>
					            </select>
					      	</div>

							<div className="wce-form-group">
					            <label for="">Order Note</label>
					            <textarea></textarea>
					      	</div>

						</div>

						<div className="wce-order-action-group-2">

							<div className="wce-invoice-btns">
							    <a className="order-action-btn wce-btn-dark" href="#/invoice-details"><i className="material-icons"></i><span>Print Invoice</span></a>
							    <a className="order-action-btn wce-btn-success" href="#/invoice-details"><i className="material-icons"></i><span>Print Order Label</span></a>
							    <a className="order-action-btn wce-btn-success" href="#/invoice-details"><i className="material-icons"></i><span>Download as pdf</span></a>
							</div>

						</div>


					</div>

				</div>
				: ''
				/* End Order action tab content */
				}


			</div>

		</div> 

		</div>)
			
	

}