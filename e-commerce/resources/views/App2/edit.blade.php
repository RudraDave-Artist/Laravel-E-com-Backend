@section('title', 'Delievery')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')
<div  class="checkout-left" style="margin:auto; width:700px">
    <div class="address_form_agile">
        <h4>Edit Your Delievery Details</h4>
        @foreach ($data as $details)
					<form action="{{route('updatedetails',['id'=>$details->id])}}" method="post" class="creditly-card-form agileinfo_form" style="color:black">
                    @csrf

						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" value="{{$details->name}}" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" value="{{$details->phne_num}}"name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Landmark" value="{{$details->landmark}}" name="landmark" required="">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Town/City" value="{{$details->city}}" name="city" required="">
									</div>
									<div class="controls">
										<select class="option-w3ls" placeholder="Select Address Type" name="type" value="{{$details->addr_type}}">
											<!-- <option>Select Address type</option> -->
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>
										</select>
									</div>
								</div>
								@auth
								<input type="hidden" name="id" value="{{Auth::user()->id}}"/>
								@else
								<input type="hidden" value="user no logged in"/>
								@endauth
								<button class="submit check_out">Update Delivery Address</button>
							</div>
						</div>
                        @endforeach
					</form>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>							</div>
						</div>
					</form>
@endsection