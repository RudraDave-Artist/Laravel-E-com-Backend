@section('title', 'Address Details')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')
<h3 class="tittle-w3l" text-align=centre>Delievering To This Address
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
<div class="table-responsive">
					<table class="timetable_sub" style="width:80%; margin:20px auto;">
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Landmark</th>
								<th>City</th>
								<th>Address Type</th>
                                </tr>
                            @foreach ($data as $item)
                            <tr style="height:100px"> 
                            <td>{{$item->name}}</td>
                            <td>{{$item->phne_num}}</td>
                            <td>{{$item->landmark}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->addr_type}}</td>
                            </tr>  
						</thead>
                    </table>
					<form action="{{route('order')}}" method="post">
					@csrf
					<input type="hidden" name="del_date" value="pending">
					<input type="hidden" name="name" value="{{$item->name}}">
					<input type="hidden" name="addr" value="{{$item->landmark}}">
					<input type="hidden" name="order_status" value="pending">
					<input type="hidden" name="payment_status" value="pending">
					<input type="hidden" name="payment_type" value="pending">
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					<div class="checkout-right-basket" style="display:flex; justify-content:center; margin-bottom:20px">
						<button type="submit">Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</button>
					</div>
</form>
                    @endforeach

@endsection