@section('title', 'payment')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')
<div>
<h2 style="text-align:center">Your Payment Is Done!</h2>
<table class="timetable_sub" style="width:80%; margin:20px auto;">
						<thead>
							<tr>
								<th>Name</th>
								<th>Amount Paid</th>
								<th>Payment Status</th>
								<th>Payment Type</th>
								<th>Order Status</th>
							</tr>
                            @foreach ($data as $item)
                            <tr style="height:100px"> 
                            <td>{{$item->cust_name}}</td>
                            <td>{{$item->total_price}}</td>
                            <td>{{$item->payment_status}}</td>
                            <td>{{$item->payment_type}}</td>
                            <td>{{$item->order_status}}</td>
                            </tr>  
                        @endforeach
						</thead>
                    </table>
                    </div>
@endsection