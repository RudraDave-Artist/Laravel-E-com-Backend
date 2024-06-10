@section('title', 'Cartlist')
@extends('Layout.footer')
@section('footer')
@endsection
@extends('Layout/nav')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function decrementQuantity(itemId,quantity){
		if(quantity>1){
			$.ajax({
			type:'POST',
			url:'/decrement',
			data:{
				_token:'{{csrf_token()}}',	
				item_id:itemId
			},
			success:function(data){
				
				$('#quantity_'+itemId).html(data.msg);
				$('#price_'+itemId).html(data.msg2);
				let a = $('.total');
				let b=0;
				for(let i=0;i<a.length;i++){
					b=b+Number(a[i].innerHTML);
					console.log(b);
				}
				$('#tp').html(b);
			}
		});
	}
	}
	function incrementQuantity(itemId){
		console.log("hello");
		$.ajax({
			type:'POST',
			url:'/increment',
			data:{
				_token:'{{csrf_token()}}',	
				item_id:itemId
			},
			success:function(data){
				$('#quantity_'+itemId).html(data.msg);
				$('#price_'+itemId).html(data.msg2);
				let a = $('.total');
				let b=0;
				for(let i=0;i<a.length;i++){
					b=b+Number(a[i].innerHTML);
					console.log(b);
				}
				$('#tp').html(b);
			}
		});
	}
</script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
	let collection = document.getElementsByClassName('total');
	let a=0;
	for(let i=0;i<collection.length; i++){
		console.log(collection[i].innerHTML);
		a=a+Number(collection[i].innerHTML);
		console.log(a);
	}
	document.getElementById('tp').innerHTML=a;
});
</script>

<h3 class="tittle-w3l" text-align=centre>Your Cart
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
								<th>Product</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total Price</th>
								<th>Remove</th>
							</tr>
						</thead>
                        @foreach ($data as $item)
                        <tr style="height:100px"> 
                            <td><img style="height:125px" src="{{asset($item->item_image)}}" alt=""></td>
                            <td>{{$item->item_name}}</td>
							<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus" onClick="decrementQuantity({{$item->id}},{{$item->quantity}})" id="{{$item->id}}">&nbsp;</div>
											<div class="entry value">
												<span id="quantity_{{$item->id}}" >{{$item->quantity}}</span>
											</div>
											<div class="entry value-plus active" onClick="incrementQuantity({{$item->id}})">&nbsp;</div>
										</div>
									</div>
								</td>                           
								<td>{{$item->item_price}}</td>
							<td id="price_{{$item->id}}" class="total">{{$item->total_price}}</td>
                            <td><a href="{{route('deleteitem', ['id' => $item->id, 'cart_id'=>$item->cart_id])}}">Remove This Item</a></td>
                        </tr>
        				@endforeach              
						<div id="msg"></div> 
</table>
<div class="table-responsive">
</div>

<div style="display:flex; justify-content:center; margin-bottom:20px">
<table class="timetable_sub" style="width:20%; margin:20px auto;">
	<thead>
	<th>Total Price To Pay</th>
	<thead>
	<td id="tp"></td>
</table>
</div>
<h3>
<div class="checkout-right-basket" style="display:flex; justify-content:center; margin-bottom:20px">
<a href="{{route('displayaddress',['id'=>Auth::user()->id])}}" style="text-align:center">Choose Delievery Location</a>
</div>
</h3>
</div>		
@endsection
