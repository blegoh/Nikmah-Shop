@extends('master')
@section('content')
	<div id="main-container-home" class="container">
		<div class="row">
			<!-- Sidebar Starts -->
			<div class="col-md-3">
				<!-- Categories Links Starts -->
				<h3 class="side-heading">Categories</h3>
				<div class="list-group categories">
					@foreach($categories as $category)
						<a href="#" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							{{$category->name}}
						</a>
					@endforeach
				</div>
				<!-- Categories Links Ends -->
				<!-- Special Products Starts -->
				<h3 class="side-heading">Suppliers</h3>
				<ul class="side-products-list">
					@foreach($suppliers as $supplier)
						<a href="#" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							{{$supplier->name}}
						</a>
					@endforeach
					<!-- Special Product #5 Ends -->
				</ul>
				<!-- Special Products Ends -->
			</div>
			<!-- Sidebar Ends -->
			<!-- Primary Content Starts -->
			<div class="col-md-9">
				<!-- Slider Section Starts -->
				<div class="slider">
					<div id="main-carousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper For Slides Starts -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="/images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive" />
							</div>
							<div class="item">
								<img src="/images/slider-imgs/slide2-img.jpg" alt="Slider" class="img-responsive" />
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
				<!-- 2 Column Banners Starts -->
				<div class="col2-banners">
					<ul class="row list-unstyled">
						<li class="col-sm-8">
							<img src="/images/banners/2col-banner1.jpg" alt="banners" class="img-responsive" />
						</li>
						<li class="col-sm-4">
							<img src="/images/banners/2col-banner2.jpg" alt="banners" class="img-responsive" />
						</li>
					</ul>
				</div>
				<!-- 2 Column Banners Ends -->
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
								<!-- Product #1 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/1.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #1 Ends -->
								<!-- Product #2 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/2.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #2 Ends -->
								<!-- Product #3 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/3.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #3 Ends -->
								<!-- Product #4 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/4.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #4 Ends -->
								<!-- Product #5 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/5.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #5 Ends -->
								<!-- Product #6 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/6.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #6 Ends -->
								<!-- Product #7 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/7.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #7 Ends -->
								<!-- Product #8 Starts -->
								<div class="item">
									<div class="product-col">
										<div class="image">
											<img src="/images/product-images/8.jpg" alt="product" class="img-responsive" />
										</div>
										<div class="caption">
											<h4><a href="product.html">Digital Electro Goods</a></h4>
											<div class="description">
												We are so lucky living in such a wonderful time. Our almost unlimited ...
											</div>
											<div class="price">
												<span class="price-new">$199.50</span>
												<span class="price-old">$249.50</span>
											</div>
											<div class="cart-button">
												<button type="button" class="btn btn-cart">
													Add to cart
													<i class="fa fa-shopping-cart"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Product #8 Ends -->
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
						<!-- Product #1 Starts -->
						<div class="col-md-4 col-sm-6">
							<div class="product-col">
								<div class="image">
									<img src="/images/product-images/9.jpg" alt="product" class="img-responsive" />
								</div>
								<div class="caption">
									<h4>
										<a href="product-full.html">Digital Electro Goods</a>
									</h4>
									<div class="description">
										We are so lucky living in such a wonderful time. Our almost unlimited ...
									</div>
									<div class="price">
										<span class="price-new">$199.50</span>
										<span class="price-old">$249.50</span>
									</div>
									<div class="cart-button">
										<button type="button" class="btn btn-cart">
											Add to cart
											<i class="fa fa-shopping-cart"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Product #1 Ends -->
						<!-- Product #2 Starts -->
						<div class="col-md-4 col-sm-6">
							<div class="product-col">
								<div class="image">
									<img src="/images/product-images/10.jpg" alt="product" class="img-responsive" />
								</div>
								<div class="caption">
									<h4>
										<a href="product-full.html">Digital Electro Goods</a>
									</h4>
									<div class="description">
										We are so lucky living in such a wonderful time. Our almost unlimited ...
									</div>
									<div class="price">
										<span class="price-new">$199.50</span>
										<span class="price-old">$249.50</span>
									</div>
									<div class="cart-button">
										<button type="button" class="btn btn-cart">
											Add to cart
											<i class="fa fa-shopping-cart"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Product #2 Ends -->
						<!-- Product #3 Starts -->
						<div class="col-md-4 col-sm-6">
							<div class="product-col">
								<div class="image">
									<img src="/images/product-images/11.jpg" alt="product" class="img-responsive" />
								</div>
								<div class="caption">
									<h4>
										<a href="product-full.html">Digital Electro Goods</a>
									</h4>
									<div class="description">
										We are so lucky living in such a wonderful time. Our almost unlimited ...
									</div>
									<div class="price">
										<span class="price-new">$199.50</span>
										<span class="price-old">$249.50</span>
									</div>
									<div class="cart-button">
										<button type="button" class="btn btn-cart">
											Add to cart
											<i class="fa fa-shopping-cart"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Product #3 Ends -->
					</div>
					<!-- Products Row Ends -->
				</section>
				<!-- Specials Products Ends -->
			</div>
			<!-- Primary Content Ends -->
		</div>
	</div>
@endsection