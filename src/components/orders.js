import React, { useState } from 'react';
import ReactModal from 'react-modal';
import useSWR from 'swr';
import View_Order from './view-order';



const fetcher = async (...args) => {

	const res = await fetch(...args);
	const data = await res.json();
	return data;

};

export default function Orders() {

	const [ itemData, setState ] = useState({ item:"", isOpen: false });

	const { data, error, isLoading } = useSWR( 'http://localhost/wcextend/wp-json/wc/v3/orders?consumer_key=ck_6cd1eeac32dc8766f337ca64c69cfda2da3300e3&consumer_secret=cs_d4af7c6bdf7082659bc3d2bea2bc64f9906a1531', fetcher );

	    const handleCloseModal = () => {
			setState( itemData.isOpen = false );
		}

		return( <div className="mc-table-responsive">
				    <table className="mc-table product">
				        <thead className="mc-table-head primary">
				            <tr>
				                <th>
				                    <div className="mc-table-check">
				                        <input type="checkbox" name="allCheck" checked="" />
				                        <p>uid</p>
				                    </div>
				                </th>
				                <th>Client</th>
				                <th>Product</th>
				                <th>Total Amount</th>
				                <th>Payment Type</th>
				                <th>Status</th>
				                <th>Date Time</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody className="mc-table-body even">

				        {data?.map( item => {
				        //console.log(item);
				            return (<tr>
				                <td>
				                    <div className="mc-table-check">
				                        <input type="checkbox" name="check0" />
				                        <p>#1</p>
				                    </div>
				                </td>
				                <td>
				                    <div className="mc-table-product md">
				                        
				                        <div className="mc-table-group">
				                            <h6># { item.id+item.billing.first_name }</h6>
				                        </div>
				                    </div>
				                </td>
				                <td>2</td>
				                <td>{item.total+item.currency_symbol}</td>
				                <td>{item.payment_method_title}</td>
				                <td>{item.status}</td>
				                <td>{item.date_created}</td>
				                <td>
				                    <div className="mc-table-action">
				                        <a className="material-icons view" onClick={() => setState({ item: item, isOpen: true })} title="View" href="#"><span className="dashicons dashicons-visibility"></span></a>
				                        <a className="material-icons edit" title="Edit" href="#/product-upload"><span className="dashicons dashicons-edit"></span></a>
				                        <button type="button" className="material-icons delete"><span className="dashicons dashicons-trash"></span></button>
				                    </div>
				                </td>
				            </tr>)

				            } )}

				        </tbody>
				    </table>

				    <ReactModal isOpen={ itemData.isOpen }  contentLabel="Example Modal">
				    	<button className="wce-popup-close-btn" onClick={handleCloseModal}>X</button>
						{ itemData.isOpen && <View_Order data={ itemData?.item} /> }
					</ReactModal>
				    
				</div>

	)

}
