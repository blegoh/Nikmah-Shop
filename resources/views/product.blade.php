@extends('submaster')
@section('primary-content')
<!-- Primary Content Starts -->
	<div class="col-md-9">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li><a href="category-list.html">Category</a></li>
			<li class="active">Product</li>
		</ol>
	<!-- Breadcrumb Ends -->
	<!-- Product Info Starts -->
		<div class="row product-info">
		<!-- Left Starts -->
			<div class="col-sm-5 images-block">
				<p>
					<img src="{{$product->photo}}" alt="Image" class="img-responsive thumbnail" />
				</p>
			</div>
		<!-- Left Ends -->
		<!-- Right Starts -->
			<div class="col-sm-7 product-details">
			<!-- Product Name Starts -->
				<h2>{{$product->name}}</h2>
			<!-- Product Name Ends -->
				<hr />
			<!-- Manufacturer Starts -->
				<ul class="list-unstyled manufacturer">
					<li>
						<span>Weight:</span> {{$product->weight}}
					</li>
				</ul>
			<!-- Manufacturer Ends -->
				<hr />
			<!-- Price Starts -->
				<div class="price">
					<span class="price-head">Price :</span>
					<span class="price-new">IDR {{$product->price}}</span>
				</div>
			<!-- Price Ends -->
				<hr />
			<!-- Available Options Starts -->
				<div class="options">
					<div class="form-group">
						<label class="control-label text-uppercase" for="input-quantity">Qty:</label>
						<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
					</div>
					<div class="cart-button button-group">
						<button type="button" class="btn btn-cart">
							Add to cart
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div>
				</div>
			<!-- Available Options Ends -->
				<hr />
			</div>
		<!-- Right Ends -->
		</div>
	<!-- product Info Ends -->
	<!-- Product Description Starts -->
		<div class="product-info-box">
			<h4 class="heading">Description</h4>
			<div class="content panel-smart">
				<p>
					{{$product->description}}
				</p>
			</div>
		</div>
	<!-- Product Description Ends -->
	<!-- Related Products Starts -->
		<div class="product-info-box">
			<h4 class="heading">Related Products</h4>
		<!-- Products Row Starts -->
			<div class="row">
			<!-- Product #1 Starts -->
				<div class="col-md-4 col-sm-6">
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
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
									<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
									<i class="fa fa-bar-chart-o"></i>
								</button>
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
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
									<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
									<i class="fa fa-bar-chart-o"></i>
								</button>
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
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
									<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
									<i class="fa fa-bar-chart-o"></i>
								</button>
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
		</div>
	<!-- Related Products Ends -->
	</div>
<!-- Primary Content Ends -->
@endsection