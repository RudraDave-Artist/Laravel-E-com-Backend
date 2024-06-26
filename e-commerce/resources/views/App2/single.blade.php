@include('Partials/headers')
@section('title','kitchen')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/special')
@section('special')
@extends('Layout/nav')
@section('content')
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet"/>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/imagezoom.js')}}"></script>
<script src="{{asset('js/bundle.js')}}"></script>

<style>
	.tittle-w3l{
		margin-top:30px;
	}
</style>
<div class="page-head_agile_info_w3l">
</div>
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Single Page</li>
				</ul>
			</div>
		</div>
	</div>
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/se1.jpg">
								<div class="thumb-image">
									<img src="images/se1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/se2.jpg">
								<div class="thumb-image">
									<img src="images/se2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/se3.jpg">
								<div class="thumb-image">
									<img src="images/se3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>Ambipur Air Freshener - 275 g </h3>
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
					<span class="item_price">$265.00</span>
					<del>$285.00</del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Delivery to within 7 - 10 business days.
						</li>
						<li>
							Sold by Cloudtail India (4.2 out of 5 | 95,027 ratings).
						</li>
						<li>
							6 offer from
							<span class="item_price">$285.00</span>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>Pantry Cashback Offer</p>
					<ul>
						<li>
							Doesn't just cover, Truly removes odours
						</li>
						<li>
							Ambi Pur is a brand of air freshener products available in the United States, Europe, Asia and Oceania.
						</li>
						<li>
							Their range of products may be used in the home or in the car with a variety of smells and properties such as odor neutralisation.
						</li>
						<li>
							Transforms your home from smelly to smiley
						</li>
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>returnable.</label>
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
								<input type="hidden" name="amount" value="951.00" />
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
@endsection