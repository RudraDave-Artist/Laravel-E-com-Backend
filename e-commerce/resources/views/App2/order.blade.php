@section('title','Order Details')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')

<div class="table-responsive">
					<table class="timetable_sub" style="width:80%; margin:20px auto;">
						<thead>
							<tr>
								<th>Customer Name</th>
								<th>Shipping Address</th>
								<th>Total Price</th>
								<th>Payment Type</th>
								<th>Payment Status</th>
								<th>Order Status</th>
                                </tr>
                        </thead>
                        <tbody>
			
						<tr>	
							<td>{{$data->cust_name}}</td>
							<td>{{$data->shipping_addr}}</td>
							<td>{{$data->total_price}}</td>
							<td>{{$data->payment_type}}</td>
							<td>{{$data->payment_status}}</td>
							<td>{{$data->order_status}}</td>
						</tr>	
                    </tbody>
				</table>
				@if ($data->payment_status!="paid")
				<div style="display:flex; justify-content:center; margin-bottom:20px">
					<table class="timetable_sub" style="width:20%; margin:20px auto;">
						<thead>
							<th>Total Price To Pay</th>
							<thead>
								<td id="tp">
								<form action="{{ route('razorpay.payment.store') }}" method="POST" >
								<input type="hidden" value="{{$data->id}}" name="id"/>
								<input type="hidden" value="{{Auth::user()->id}}" name="user_id"/>
            @csrf 
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ env('RAZORPAY_KEY') }}"
                    data-amount="{{$data->total_price}}00"
                    data-buttontext="{{$data->total_price}}INR"
                    data-name="Grocery Shoppy"
                    data-description="Razorpay payment"
                    data-image="/images/logo-icon.png"
                    data-prefill.name="{{$data->cust_name}}"
                    data-prefill.email="{{Auth::user()->email}}"
                    data-theme.color="#ff7529">
            </script>
        </form>
	</td>
							</table>
						</div>
						@else
						<h3 style="text-align:center; margin-bottom:35px">Your Order Is Placed Successfuly!!</h3>
						@endif



</div>

@endsection