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
		<form action="/cart/add" method="post">
			{!! csrf_field() !!}
			<input type="hidden" name="link" value="{{$product->link}}" />
			<input type="hidden" name="name" value="{{$product->name}}" />
			<input type="hidden" name="weight" value="{{$product->weight}}" />
			<input type="hidden" name="price" value="{{$product->price}}" />
			<input type="hidden" name="photo" value="{{$product->photo}}" />
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
					<li>
						<span>varians:</span>
						<div class="form-group">
							<select class="form-control" id="sel1" name="varian">
								@foreach($product->varians as $varian)
									<option>{{$varian}}</option>
								@endforeach
							</select>
						</div>
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
						<button type="submit" class="btn btn-cart">
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
		</form>
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
	</div>
<!-- Primary Content Ends -->
@endsection