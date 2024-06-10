@section('title','beverages')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/special')
@section('special')
@endsection
@extends('Layout/nav')
@section('content')
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Snack & Beverages</li>
            </ul>
        </div>
    </div>
</div>
					<div class="product-sec1">
						<h3 class="heading-tittle">Snack & Beverages</h3>
						@foreach ($data as $product)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img style="width:160px"src="{{$product->image}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$product->title}},{{$product->description}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">${{$product->orig_price}}</span>
										<del>${{$product->disc_price}}</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="{{route('cart')}}" method="post">
										@csrf
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$product->title}}" />
												<input type="hidden" name="item_image" value="{{$product->image}}"/>
												<input type="hidden" name="amount" value="{{$product->disc_price}}" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												@auth
												<input type="hidden" name="id" value="{{Auth::user()->id}}"/>
												@else
												<input type="hidden" value="user no logged in"/>
												@endauth    
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
								<div class="clearfix"></div>
					</div>
@endsection