@extends('master')
@section('content')
<!-- Main Container Starts -->
	<div id="main-container" class="container">

	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Shopping Cart
		</h2>
	<!-- Main Heading Ends -->
	<!-- Shopping Cart Table Starts -->
		<div class="table-responsive shopping-cart-table">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td class="text-center">
							Image
						</td>
						<td class="text-center">
							Product Name
						</td>							
						<td class="text-center">
							Quantity
						</td>
						<td class="text-center">
							Price
						</td>
						<td class="text-center">
							Total
						</td>
						<td class="text-center">
							Action
						</td>
					</tr>
				</thead>
				<tbody>
					@foreach(Cart::items() as $item)
						<tr>
							<form action="/cart/update/{{$item->id}}" method="post">
								{!! csrf_field() !!}
							<td class="text-center">
								<a href="/product/{{$item->id}}">
									<img src="{{$item->photo}}" width="75px" alt="Product Name" title="Product Name" class="img-thumbnail" />
								</a>
							</td>
							<td class="text-center">
								<a href="/product/{{$item->id}}">{{$item->name}}</a>
							</td>
							<td class="text-center">
								<div class="input-group btn-block">
									<input type="text" name="quantity" value="{{$item->quantity}}" size="1" class="form-control" />
								</div>
							</td>
							<td class="text-center">
								{{$item->price}}
							</td>
							<td class="text-center">
								{{$item->price * $item->quantity}}
							</td>
							<td class="text-center">
								<button type="submit" title="Update" class="btn btn-default tool-tip">
									<i class="fa fa-refresh"></i>
								</button>
								<a href="/cart/delete/{{$item->id}}">
								<button type="button" title="Remove" class="btn btn-default tool-tip">
									<i class="fa fa-times-circle"></i>
								</button>
								</a>
							</td>
							</form>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
					  <td colspan="4" class="text-right">
						<strong>Sub Total :</strong>
					  </td>
					  <td colspan="2" class="text-left">
						{{Cart::getTotal()}}
					  </td>
					</tr>
				</tfoot>
			</table>				
		</div>
	<!-- Shopping Cart Table Ends -->
	<!-- Shipping Section Starts -->
		<section class="registration-area">
			<div class="row">
				<form action="/checkout" class="form-horizontal" role="form" method="post">
					{!! csrf_field() !!}
			<!-- Shipping & Shipment Block Starts -->
				<div class="col-sm-6">
				<!-- Shipment Information Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Pengiriman
							</h3>
						</div>
						<div class="panel-body">
						<!-- Form Starts -->
							<!-- Form dipindah ke atas karena submit nya di tombol checkout -->
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="drop" id="drop">Kirim ke orang lain?
										</label>
									</div>
								</div>
							</div>
							<div class="form-group" id="sender">
								<label for="inputFname" class="col-sm-3 control-label">Nama Pengirim :</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="sender" id="inputFname" placeholder="Nama Pengirim">
								</div>
							</div>
							<div class="form-group">
								<label for="inputFname" class="col-sm-3 control-label">Nama Penerima :</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" id="inputFname" placeholder="Nama Penerima">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPhone" class="col-sm-3 control-label">Telepon/HP :</label>
								<div class="col-sm-9">
									<input type="text" name="telp" class="form-control" id="inputPhone" placeholder="Telepon/HP">
								</div>
							</div>
							<div class="form-group">
								<label for="inputCountry" class="col-sm-3 control-label">Provinsi :</label>
								<div class="col-sm-9">
									<select name="prov" class="form-control" id="prov">
										<option value="">- Pilih Provinsi -</option>
										@foreach($provinces as $province)
											<option value="{{$province->province_id}}">{{$province->province}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputRegion" class="col-sm-3 control-label">Kabupaten/Kota :</label>
								<div class="col-sm-9">
									<select name="city" class="form-control" id="kab">
										<option>- Pilih Kabupaten -</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputRegion" class="col-sm-3 control-label">Alamat :</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="alamat"></textarea>
								</div>
							</div>

						<!-- Form Ends -->
						</div>
					</div>
				<!-- Shipment Information Block Ends -->
				</div>
			<!-- Shipping & Shipment Block Ends -->
			<!-- Discount & Conditions Blocks Starts -->
				<div class="col-sm-6">
				<!-- Total Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Total
							</h3>
						</div>
						<div class="panel-body">
							<dl class="dl-horizontal">
								<dt>Sub Total :</dt>
								<dd>{{Cart::getTotal()}}</dd>
								<dt>Ongkir :</dt>
								<dd id="ongkir"></dd>
							</dl>
							<hr />
							<dl class="dl-horizontal total">
								<dt>Total :</dt>
								<dd id="total"></dd>
							</dl>
							<hr />
							<div class="text-uppercase clearfix">
								<a href="#" class="btn btn-default pull-left">
									<span class="hidden-xs">Continue Shopping</span>
									<span class="visible-xs">Continue</span>
								</a>
								<button type="submit" class="btn btn-default pull-right">
									Checkout
								</button>
							</div>
						</div>
					</div>
				<!-- Total Panel Ends -->
				</div>
			<!-- Discount & Conditions Blocks Ends -->
				</form>
			</div>
		</section>
	<!-- Shipping Section Ends -->
	</div>
<!-- Main Container Ends -->
@endsection

@section('js')
	<script>
	if($('#drop').is(':checked')){
		$('#sender').show();
	} else {
		$('#sender').hide();
	}
	$('#drop').change(function () {
		if($(this).is(':checked')){
			$('#sender').show();
		} else {
			$('#sender').hide();
		}
	});
	$("#prov").change(function() {
		$.ajax({
			url: "/ajax/kabupaten/"+$("#prov").val(),
		}).done(function(data) {
			$("#kab").html(data);
		});
	});
	$("#kab").change(function(){
		$.ajax({
			url: "/ajax/cost/"+$("#kab").val(),
		}).done(function(data) {
			$("#ongkir").html(data);
			$("#total").html(parseInt(data)+{{Cart::getTotal()}});
		});
	});
	</script>
@endsection