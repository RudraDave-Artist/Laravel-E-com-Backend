@include('Partials/headers')
@section('title', 'kitchen')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/special')
@section('special')
@endsection
@extends('Layout/nav')
@section('content')
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet"/>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/imagezoom.js')}}"></script>
<script src="{{asset('js/bundle.js')}}"></script>

<div class="page-head_agile_info_w3l">
</div>
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{route('index')}}">Home</a>
						<i>|</i>
					</li>
					<li>Single Page</li>
				</ul>
			</div>
		</div>
	</div>
<div class="container" style="margin-bottom:20px">
        <div>
			</div>
			<!-- tittle heading -->
			@if($data)
    <h3 class="tittle-w3l" style='margin-top:30px'>{{$data->title}}</h3>
@else
    <p>No data found.</p>
@endif
			<!-- <h3 class="tittle-w3l" style='margin-top:30px'> -->
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
		
		
			<div class="col-md-5 single-right-left ">
				<div class="grid ">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{asset($data->image)}}">
								<div class="thumb-image">
									<img src="{{asset($data->image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="{{asset($data->image)}}">
								<div class="thumb-image">
									<img src="{{asset($data->image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="{{asset($data->image)}}">
								<div class="thumb-image">
									<img src="{{asset($data->image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<!-- <h3></h3> -->
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<p>
					<span class="item_price">${{$data->disc_price}}</span>
					<del>${{$data->orig_price}}</del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
						</li>
						<li>
							1 offer from
							<span class="item_price">${{$data->orig_price}}</span>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
						<label>Vegetarian</label> product.</p>
					<ul>
						<li>
							Best for Biryani and Pulao.
						</li>
						<li>
							After cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.
						</li>
						<li>
							Zeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.
						</li>
						<li>
							Contains only the best and purest grade of basmati rice grain of Export quality.
						</li>
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>non-returnable.</label>
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="{{route('cart')}}" method="post">
						@csrf
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="{{$data->title}}" />
                                <input type="hidden" name="item_image" value="{{$data->image}}"/>
                                <input type="hidden" name="amount" value="{{$data->disc_price}}" />
                                <input type="hidden" name="product_id" value="{{$data->id}}" />                                    
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
								<input type="hidden" name="id" value="{{Auth::user()->id}}"/>
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
@endsection