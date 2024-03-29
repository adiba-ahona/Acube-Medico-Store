<div>	
	<div class = "container" style ="padding: 30px 0;">
	    <div class = "row">
	    	<div class = "col-md-12">
	    		<div class = "panel panel-default">
	    			<div class = "panel-heading">
                        <div class = "col-md-16">

	    				    Order Details
                        </div>
                        <div class = "col-md-16">
                            <a href="{{route('admin.orders')}}" class = "btn btn-success pull-right"> Orders </a>
                            
						</div>
	    		    </div>
	    		    <div class = "panel-body">	
						<table class = "table">
							<tr>
							    <th> Order ID</th>
							    <td> {{$order->id}}</td>
							    <th> Order Date</th>
							    <td> {{$order->created_at}}</td>
							    <th> Order Status</th>
							    <td> {{$order->status}}</td>
							    @if($order->status == "delivered")
							        <th> Delivery Date</th>
							        <td> {{$order->delivered_date}}</td>
							    @elseif($order->status == "canceled")
							        <th> Cancellation Date</th>
							        <td> {{$order->canceled_date}}</td>
							    @endif
                            </tr>

                       </table>	
                    </div>
				</div>
			</div>
		</div>
 



		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-heading">
					    Ordered Items
				    </div>
				    <div class = "panel-body">		
				        <div class="wrap-iten-in-cart">
					        <h3 class="box-title">Products Name</h3>
					        <ul class="products-cart">
						
					
					            @foreach($order->OrderItems as $item) 

								  
					                <li class="pr-cart-item">
					                		<div class="product-image">
					                			<figure>
					                				<img src="{{ asset('assets/images/medicines') }}/{{$item->product->image}}" alt="{{$item->product->name}}">
					                			</figure>
							                </div>
							                <div class="product-name">
							                	<a class="link-to-product" href="{{route('product.details',['slug'=>$item->product->slug])}}">
							                		{{$item->product->name}}
							                    </a>
							                </div>
							                <div class="price-field product-price"><p class="price">
							                	{{$item->price}}</p>
							                </div>
							                <div class="quantity">
							                	<h4>{{$item->quantity}}</h4>
							        	    
							                </div>
							                <div class="price-field sub-total"><p class="price">{{$item->price * $item->quantity}}</p></div>
							                
					                </li>
					            @endforeach
					        </ul>
                        </div>


						<div class = "summary">

							<div class = "order-summary">
								<h4 class="title-box"> Order Summary</h4>
								<p class="summary-info"><span class="title">Subtotal</span><b class="index">{{$order->subtotal}}</b></p>
								<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
								<p class="summary-info"><span class="title">Total</span><b class="index">{{$order->subtotal}}</b></p>				
							</div>


						</div>
					
				    </div>
                </div>
			</div>
			
		</div>

		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-heading">
						Billing Details
					
					

					
				    </div>
				    <div class = "panel-body">		

				        <table class ="table">
				        	<tr>
				        		<th>First Name</th>
				        		<td>{{$order->firstname}}</td>
				        		<th>Last Name</th>
				        		<td>{{$order->lastname}}</td>				        		
				        	</tr>
				        	<tr>
				        		<th>Phone Number</th>
				        		<td>{{$order->mobile}}</td>
				        		<th>Email</th>
				        		<td>{{$order->email}}</td>				        		
				        	</tr>

				        	<tr>
				        		<th>Thana</th>
				        		<td>{{$order->thana}}</td>
				        		<th>Country</th>
				        		<td>{{$order->country}}</td>				        		
				        	</tr>
				        	
				        </table>			
					
				    </div>
                </div>
			</div>
			
		</div>

        @if($order->ship_to_different)
		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-heading">
						Shopping Details
					
					

					
				    </div>
				    <div class = "panel-body">
				         <table class ="table">
				        	<tr>
				        		<th>First Name</th>
				        		<td>{{$order->shipping->firstname}}</td>
				        		<th>Last Name</th>
				        		<td>{{$order->shipping->lastname}}</td>				        		
				        	</tr>
				        	<tr>
				        		<th>Phone Number</th>
				        		<td>{{$order->shipping->mobile}}</td>
				        		<th>Email</th>
				        		<td>{{$order->shipping->email}}</td>				        		
				        	</tr>

				        	<tr>
				        		<th>Thana</th>
				        		<td>{{$order->shipping->thana}}</td>
				        		<th>Country</th>
				        		<td>{{$order->shipping->country}}</td>				        		
				        	</tr>
				        	
				        </table>		

					
				    </div>
                </div>
			</div>
			
		</div>
		@endif

		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-heading">
						Transaction Detail
					
					

					
				    </div>
				    <div class = "panel-body">	

				    <table class = "table">
				    	<tr>
				    		<th>Transaction Mode</th>
				    		<td>{{$order->transaction->mode}}</td>
				    	</tr>
				    	<tr>
				    		<th>Status</th>
				    		<td>{{$order->transaction->status}}</td>
				    	</tr>
				    	
				    </table>				
					
				    </div>
                </div>
			</div>
			
		</div>


	</div>
</div>>