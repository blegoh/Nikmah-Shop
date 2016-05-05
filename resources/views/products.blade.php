@extends('submaster')
@section('primary-content')
<!-- Primary Content Starts -->
	<div class="col-md-9">
	<!-- Product Grid Display Starts -->
		<div class="row">
		<!-- Looping products -->
			@foreach($products as $product)
			<div class="col-md-4 col-sm-6">
				<div class="product-col">
					<div class="image nailthumb-container">
						<img src="{{$product->photo}}" alt="product" class="img-responsive" width="640" height="640" />
					</div>
					<div class="caption">
						<h4><a href="/product/{{$product->link}}">{{$product->name}}</a></h4>
						<div class="description">
							We are so lucky living in such a wonderful time. Our almost unlimited ...
						</div>
						<div class="price">
							<span class="price-new">IDR {{$product->price}}</span>
						</div>
						<div class="cart-button button-group">
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
		<!-- End of Looping products -->
		</div>
	<!-- Product Grid Display Ends -->
		{!! $paginator->render() !!}
	</div>
<!-- Primary Content Ends -->
@endsection