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
			Login or create new account
		</h2>
	<!-- Main Heading Ends -->
	<!-- Login Form Section Starts -->
		<section class="login-area">
			<div class="row">
				<div class="col-sm-6">
				<!-- Login Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Login</h3>
						</div>
						<div class="panel-body">
							<p>
								Please login using your existing account
							</p>
						<!-- Login Form Starts -->
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
								{!! csrf_field() !!}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">E-Mail Address</label>

									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}">

										@if ($errors->has('email'))
											<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">Password</label>

									<div class="col-md-6">
										<input type="password" class="form-control" name="password">

										@if ($errors->has('password'))
											<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Remember Me
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-black">
											Login
										</button>

										<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
									</div>
								</div>
							</form>
						<!-- Login Form Ends -->
						</div>
					</div>
				<!-- Login Panel Ends -->
				</div>
				<div class="col-sm-6">
				<!-- Account Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Create new account
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website
							</p>
							<a href="{{ url('/register') }}" class="btn btn-black">
								Register
							</a>
						</div>
					</div>
				<!-- Account Panel Ends -->
				</div>
			</div>
		</section>
	<!-- Login Form Section Ends -->
	</div>
<!-- Main Container Ends -->
@endsection