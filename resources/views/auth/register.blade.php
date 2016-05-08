@extends('master')
@section('content')
<!-- Main Container Starts -->
	<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Register</li>
		</ol>
	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Register <br />
			<span>Create New Account</span>
		</h2>
	<!-- Main Heading Ends -->
	<!-- Registration Section Starts -->
		<section class="registration-area">
			<div class="row">
				<div class="col-sm-6">
				<!-- Registration Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Personal Information</h3>
						</div>
						<div class="panel-body">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
						<!-- Registration Form Starts -->
							<form class="form-horizontal" role="form" action="/register" method="post">
							{!! csrf_field() !!}
								<!-- Personal Information Starts -->
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">Name :</label>
									<div class="col-sm-9">
										<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputFname" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-9">
										<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">No Telp :</label>
									<div class="col-sm-9">
										<input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="inputEmail" placeholder="Telepon">
									</div>
								</div>
								<div class="form-group">
									<label for="inputCountry" class="col-sm-3 control-label">Provinsi :</label>
									<div class="col-sm-9">
										<select name="prov" class="form-control" id="prov">
											<option value="">- Pilih Provinsi -</option>
											@foreach(App\Models\Ongkir::provincies() as $province)
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
										<textarea class="form-control" rows="5" name="address">{{ old('address') }}</textarea>
									</div>
								</div>

								<h3 class="panel-heading inner">
									Password
								</h3>
							<!-- Password Area Starts -->
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Password :</label>
									<div class="col-sm-9">
										<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="inputRePassword" class="col-sm-3 control-label">Re-Password :</label>
									<div class="col-sm-9">
										<input type="password" name="password_confirmation" class="form-control" id="inputRePassword" placeholder="Re-Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-black">
											Register
										</button>
									</div>
								</div>
							<!-- Password Area Ends -->
							</form>
						<!-- Registration Form Starts -->
						</div>							
					</div>
				<!-- Registration Block Ends -->
				</div>
				<div class="col-sm-6">

				<!-- Conditions Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Keterangan
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Berikut adalah petunjuk untuk melakukan registrasi. Jika ada pertanyaan silakan ajukan di menu Contact Us
							</p>
							<ol>
							  <li>Semua Input Harus Diisi</li>
							  <li>Email harus valid karena akan dilakukan verifikasi email</li>
							  <li>Pilih Provinsi terlebih dahulu, Setelah provinsi dipilih maka akan muncul pilihan kabupaten/kota</li>
							  <li>Panjang password minimal 6 karakter</li>
							  <li>Konfirmasi password harus sama dengan password</li>
							</ol>
							<p>
								Data-data yang telah diisikan akan digunakan untuk default pengiriman barang. Anda tetap bisa mengubah pengiriman barang saat melakukan order
							</p>

						</div>
					</div>
				<!-- Conditions Panel Ends -->
				</div>
			</div>
		</section>
	<!-- Registration Section Ends -->
	</div>
<!-- Main Container Ends -->
@endsection

@section('js')
	<script>
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