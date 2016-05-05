@extends('submaster')
@section('title')
	Home
@endsection
@section('primary-content')
	<!-- Primary Content Starts -->
	<div class="col-md-9">
		<!-- Slider Section Starts -->
		<div class="slider">
			<div id="main-carousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper For Slides Starts -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="/images/slider-imgs/slide1-img.png" alt="Slider" class="img-responsive" />
					</div>
					<div class="item">
						<img src="/images/slider-imgs/slide2-img.png" alt="Slider" class="img-responsive" />
					</div>
				</div>
				<!-- Wrapper For Slides Ends -->
				<!-- Controls Starts -->
				<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
				<!-- Controls Ends -->
			</div>
		</div>
		<!-- Slider Section Ends -->

		<!-- Latest Products Starts -->
		<section class="product-carousel">
			<!-- Heading Starts -->
			<h2 class="product-head">Latest Products</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
			<div class="row">
				<div class="col-xs-12">
					<!-- Product Carousel Starts -->
					<div id="owl-product" class="owl-carousel">
						@foreach($products as $product)
							<div class="item">
								<div class="product-col">
									<div class="image nailthumb-container">
										<img src="{{$product->photo}}" alt="product" class="img-responsive" />
									</div>
									<div class="caption">
										<h4><a href="/product/{{$product->link}}">{{$product->name}}</a></h4>
										<div class="description">

										</div>
										<div class="price">
											<span class="price-new">IDR {{$product->price}}</span>
										</div>
										<div class="cart-button">
											<a rel="facebox" href="/cart/addToCart/{{$product->link}}">
											<button type="button" class="btn btn-cart">
												Add to cart
												<i class="fa fa-shopping-cart"></i>
											</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach

					</div>
					<!-- Product Carousel Ends -->
				</div>
			</div>
			<!-- Products Row Ends -->
		</section>
		<!-- Latest Products Ends -->
		<!-- Specials Products Starts -->
		<section class="products-list">
			<!-- Heading Starts -->
			<h2 class="product-head">Specials Products</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
			<div class="row">
				<?php $i = 1; ?>
				@foreach($products as $product)
					@if($i == 1 || $i == 5 || $i == 10)
						<div class="col-md-4 col-sm-6">
							<div class="product-col">
								<div class="image">
									<img src="{{ $product->photo }}" alt="product" class="img-responsive" />
								</div>
								<div class="caption">
									<h4>
										<a href="/product/{{$product->link}}">{{ $product->name }}</a>
									</h4>
									<div class="description">

									</div>
									<div class="price">
										<span class="price-new">{{$product->price}}</span>
									</div>
									<div class="cart-button">
										<a rel="facebox" href="/cart/addToCart/{{$product->link}}">
										<button type="button" class="btn btn-cart">
											Add to cart
											<i class="fa fa-shopping-cart"></i>
										</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					@endif
					<?php $i++; ?>
				@endforeach
			</div>
			<!-- Products Row Ends -->
		</section>
		<!-- Specials Products Ends -->
	</div>
	<!-- Primary Content Ends -->
@endsection