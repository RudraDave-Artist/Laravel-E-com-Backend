@section('title', 'Address Details')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')
<h3 class="tittle-w3l" text-align=centre>Choose Your Location
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
                                <th> Edit </th>
								<th> Select Address For Delievery</th>
							</tr>
                            @foreach ($data as $item)
                            <tr style="height:100px"> 
                            <td>{{$item->name}}</td>
                            <td>{{$item->phne_num}}</td>
                            <td>{{$item->landmark}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->addr_type}}</td>
                            <td><a href="{{route('edit',['id'=>$item->id])}}">Edit Your Address</a></td>
							<td><a href="{{route('select',['id'=>$item->id])}}">Select</a></td>
                            </tr>  
                        @endforeach
						</thead>
                    </table>
                    <div class="checkout-right-basket" style="display:flex; justify-content:center; margin-bottom:20px">
						<a href="{{route('delievery')}}">Add New Address
						</a>
					</div>

@endsection