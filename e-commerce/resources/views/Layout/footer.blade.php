<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    @include('Partials/headers')
</head>
<body>
<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="{{asset('images/tab3.png')}}" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
				<span>"Grocery Shoppy"</span> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
				magni dolores eos qui ratione voluptatem sequi nesciunt.Sed ut perspiciatis unde omnis iste natus error sit voluptatem
				accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
				beatae vitae dicta sunt explicabo.</p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Track Your Order</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Free & Easy Returns</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Online cancellation </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
								<a href="{{route('kitchen')}}">Grocery</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Fruits</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Soft Drinks</a>
							</li>
							<li>
								<a href="{{route('household')}}">Dishwashers</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Biscuits & Cookies</a>
							</li>
							<li>
								<a href="{{route('household')}}">Baby Diapers</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="{{route('kitchen')}}">Snacks & Beverages</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Bread & Bakery</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Sweets</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Chocolates & Biscuits</a>
							</li>
							<li>
								<a href="{{route('household')}}">Personal Care</a>
							</li>
							<li>
								<a href="{{route('kitchen')}}">Dried Fruits & Nuts</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="{{route('about')}}">About Us</a>
							</li>
							<li>
								<a href="{{route('contact')}}">Contact Us</a>
							</li>
							<li>
								<a href="{{route('help')}}">Help</a>
							</li>
							<li>
								<a href="{{route('faqs')}}">Faqs</a>
							</li>
							<li>
								<a href="{{route('terms')}}">Terms of use</a>
							</li>
							<li>
								<a href="{{route('privacy')}}">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> 123 Sebastian, USA.</li>
							<li>
								<i class="fa fa-mobile"></i> 333 222 3333 </li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> mail@example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				<div class="sub-some">
					<h5>Online Grocery Shopping</h5>
					<p>Order online. All your favourite products from the low price online supermarket for grocery home delivery in Delhi,
						Gurgaon, Bengaluru, Mumbai and other cities in India. Lowest prices guaranteed on Patanjali, Aashirvaad, Pampers, Maggi,
						Saffola, Huggies, Fortune, Nestle, Amul, MamyPoko Pants, Surf Excel, Ariel, Vim, Haldiram's and others.</p>
				</div>
				<div class="sub-some">
					<h5>Shop online with the best deals & offers</h5>
					<p>Now Get Upto 40% Off On Everyday Essential Products Shown On The Offer Page. The range includes Grocery, Personal Care,
						Baby Care, Pet Supplies, Healthcare and Other Daily Need Products. Discount May Vary From Product To Product.</p>
				</div>
				<!-- brands -->
				<div class="sub-some">
					<h5>Popular Brands</h5>
					<ul>
						<li>
							<a href="{{route('kitchen')}}">Aashirvaad</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Amul</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Bingo</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Boost</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Durex</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}"> Maggi</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Glucon-D</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Horlicks</a>
						</li>
						<li>
							<a href="{{route('household')}}">Head & Shoulders</a>
						</li>
						<li>
							<a href="{{route('household')}}">Dove</a>
						</li>
						<li>
							<a href="{{route('household')}}">Dettol</a>
						</li>
						<li>
							<a href="{{route('household')}}">Dabur</a>
						</li>
						<li>
							<a href="{{route('household')}}">Colgate</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Coca-Cola</a>
						</li>
						<li>
							<a href="{{route('household')}}">Closeup</a>
						</li>
						<li>
							<a href="{{route('household')}}"> Cinthol</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Cadbury</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Bru</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Bournvita</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Tang</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Pears</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Oreo</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}"> Taj Mahal</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Sprite</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Thums Up</a>
						</li>
						<li>
							<a href="{{route('household')}}">Fair & Lovely</a>
						</li>
						<li>
							<a href="{{route('household')}}">Lakme</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Tata</a>
						</li>
						<li>
							<a href="{{route('household')}}">Sunfeast</a>
						</li>
						<li>
							<a href="{{route('household')}}">Sunsilk</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Patanjali</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">MTR</a>
						</li>
						<li>
							<a href="{{route('kitchen')}}">Kissan</a>
						</li>
						<li>
							<a href="{{route('household')}}"> Lipton</a>
						</li>
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>© 2017 Grocery Shoppy. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
    @yield('footer')
</body>

</html>