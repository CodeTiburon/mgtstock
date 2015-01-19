@extends('layouts.default')
@section('title')
Home ::
@parent
@stop

{{-- Content --}}
@section('content')

<div class="row">
	<div class="col-sm-2">
		<h5>Fashion</h5>
		<ul>
			<li><a href="#">Men's</a></li>
			<li><a href="#">Women's</a></li>
			<li><a href="#">Kids</a></li>
		</ul>
	</div>
	<div class="col-sm-2">
		<h5>Electronics</h5>
		<ul>
			<li><a href="#">Cell phones</a></li>
			<li><a href="#">Cameras</a></li>
			<li><a href="#">Computers</a></li>
		</ul>
	</div>
	<div class="col-sm-2">
		<h5>Home &amp; Garden</h5>
		<ul>
			<li><a href="#">Home decor</a></li>
			<li><a href="#">Home improvement</a></li>
			<li><a href="#">Tools</a></li>
		</ul>
	</div>
	<div class="col-sm-2">
		<h5>Sporting Goods</h5>
		<ul>
			<li><a href="#">Cycling</a></li>
			<li><a href="#">Golf</a></li>
			<li><a href="#">Hunting</a></li>
		</ul>
	</div>
	<div class="col-sm-2">
		<h5>Motors</h5>
		<ul>
			<li><a href="#">Cars &amp; Trucks</a></li>
			<li><a href="#">Motorcycles</a></li>
			<li><a href="#">Accessories</a></li>
		</ul>
	</div>
	<div class="col-sm-2">
		<h5>Collectibles &amp; Art</h5>
		<ul>
			<li><a href="#">Collectibles</a></li>
			<li><a href="#">Handmade</a></li>
			<li><a href="#">Paintings</a></li>
		</ul>
	</div>
</div>

<div class="row home-search-box">
	<div class="col-sm-12 col-md-8 col-md-offset-2">
		<div class="input-group">
			<input type="text" class="form-control input-lg" placeholder="Search for...">
			<span class="input-group-btn"><button class="btn btn-lg btn-success" type="button">Search</button></span>
		</div>
	</div>
</div>

<div class="page-head">
	<h1>Today's featured products</h1>
</div>

<div class="row home-featured-products-container">
	<div class="col-sm-3">
		<img src="/assets/img/temp/s-l500.jpg" class="product-image" />
	</div>
	<div class="col-sm-3 product-info">
		<h4><a href="#">Anker A7910</a></h4>
		<p>Anker A7910 Portable Wireless Bluetooth Speaker Black New, Iphone Phone PC NFC</p>
		<p class="product-price">US $149.99</p>
	</div>

	<div class="col-sm-3">
		<img src="/assets/img/temp/s-l500-2.jpg" class="product-image" />
	</div>
	<div class="col-sm-3 product-info">
		<h4><a href="#">Mens Nike shoes</a></h4>
		<p>553684 002 Mens Nike Free Trainer 3.0 Running shoe Pure Platinum Black ALL SIZES</p>
		<p class="product-price">US $209.34</p>
	</div>
</div>

<div class="row home-featured-products-container">
	<div class="col-sm-3 product-info">
		<h4><a href="#">Apple iPad 3</a></h4>
		<p>Apple iPad 3rd Generation 32GB Wi-Fi + 4G Unlocked GSM w' 9.7" Retina Display</p>
		<p class="product-price">US $459.00</p>
	</div>
	<div class="col-sm-3">
		<img src="/assets/img/temp/s-l500-3.jpg" class="product-image" />
	</div>

	<div class="col-sm-3 product-info">
		<h4><a href="#">Casio EF305D</a></h4>
		<p>Casio EF305D-1A 3-Eye Analog Men Sports Day Date Stainless Steel 100M Watch NEW</p>
		<p class="product-price">US $112.49</p>
	</div>
	<div class="col-sm-3">
		<img src="/assets/img/temp/s-l500-4.jpg" class="product-image" />
	</div>
</div>

<div class="row home-featured-products-container">
	<div class="col-sm-3">
		<img src="/assets/img/temp/s-l500-5.jpg" class="product-image" />
	</div>
	<div class="col-sm-3">
		<h4><a href="#">Longchamp Le Pliage</a></h4>
		<p>NWT Longchamp Le Pliage Small Longer Straps Bag Shoulder Duffel TAUPE Neutral</p>
		<p class="product-price">US $69.49</p>
	</div>

	<div class="col-sm-3">
		<img src="/assets/img/temp/s-l500-6.jpg" class="product-image" />
	</div>
	<div class="col-sm-3">
		<h4><a href="#">Personalized Peach Chevron</a></h4>
		<p>PERSONALIZED PEACH CHEVRON MONOGRAM PHONE CASE - FITS IPHONE 4, 4S, 5, 5S</p>
		<p class="product-price">US $14.99</p>
	</div>
</div>


<h3>Want to start your own shop with us?</h3>
<p>It is free and easy! You can start you own web shop on the best eCommerce platform just in 5 minutes:</p>
<div class="row">
	<div class="col-sm-4">
    	<h3><i class="glyphicon glyphicon-user"></i> Register</h3>
      	<p>Tell us about yourself, registration is the first step to start working with MGTStock.</p>
	</div>
	<div class="col-sm-4">
    	<h3><i class="glyphicon glyphicon-globe"></i> Add your server</h3>
		<p>Don't have a server? Already have a dedicated server on Amazon AWS, Rackspace or any other VPS/Dedicated server? No problems! We will guide you to the right solution.</p>
	</div>
    <div class="col-sm-4">
    	<h3><i class="glyphicon glyphicon-heart-empty"></i> Install</h3>
    	<p>Select themes, extensions, languages and choose name for your eShop, that's it!</p>
    </div>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<a class="btn btn-lg center-block btn-success" href="/users/create">Get Started!</a>
	</div>
</div>


<h3>Already have a shop?</h3>
<p>Join fastest growing eShop platform in Netherlands and promote your products to largest eShopping audience!</p>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<a class="btn btn-lg center-block btn-warning" href="/users/create">Promote my products!</a>
	</div>
</div>

@stop
