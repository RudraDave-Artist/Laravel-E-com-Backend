@section('title', 'payment')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')

<style>
	ul{
	display:flex;
	justify-content:space-between;	
	}
	</style>
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
					<li>Payment</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Payment
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<form action="{{route('order')}}" method="post" >
				@csrf
			<div id="parentHorizontalTab" style="margin:auto; width:460px">
					<ul class="resp-tabs-list hor_1" style="display: flex;
    justify-content: space-between;
    width: 456px;">	
						<label><input type="radio" name="payment_type" value="cod">Cash On Delievery</label>
						<label><input type="radio" name="payment_type" value="card">Credit/Debit</label>
						<label><input type="radio" name="payment_type" value="netbanking">Net Banking</label>
					</ul>
			</div>
			<div class="checkout-right-basket" style="display:flex; justify-content:center; margin-bottom:20px">
			<input type="hidden" name="del_date" value="pending">
			<input type="hidden" name="id" value="{{$id}}">
			<input type="hidden" name="order_status" value="pending">
			<input type="hidden" name="payment_status" value="pending">
			<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
			<button type="submit">Details</button>
			</div>
			</form>
			<!-- //tittle heading -->
			
@endsection