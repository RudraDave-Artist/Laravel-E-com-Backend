@section('title', 'Order History')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')
<div class="table-responsive">
					<table class="timetable_sub" style="width:80%; margin:20px auto;">
                    <h2 style="text-align:center">Order History</h2>
						<thead>
							<tr>
								<th>Order Date</th>
								<th>Cutomer Name</th>
								<th>Delivery Address </th>
								<th>Price Paid</th>
								<th>Order Status</th>
								<th>Payment Type</th>
							</tr>
						</thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                            <td>{{$item->order_date}}</td>
                            <td>{{$item->cust_name}}</td>
                            <td>{{$item->shipping_addr}}</td>
                            <td>{{$item->total_price}}</td>
                            <td>{{$item->order_status}}</td>
                            <td>{{$item->payment_type}}</td>
                            </tr>
                            @endforeach
                        </tbody>
</table>
</div>
@endsection
