<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Login</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}"> </head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo"> <a ><b>CodeMarketing | Login</b></a> </div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
                @if (session('danger'))
                    <div class="alert alert-danger solid text-center mx-auto col-md-12" id="danger">
                        {{ session('danger') }}
                    </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success solid text-center mx-auto col-md-12" id="success">
                    {{ session('success') }}
                </div>
                @endif
				<p class="login-box-msg">Giriş məlumatlarınızı daxil edin</p>
				<form action="{{ route('admin.post') }}" method="post">
                    @csrf
					<div class="input-group mb-3">
						<input type="email" name="email" class="form-control" placeholder="E-mail">
						<div class="input-group-append">
							<div class="input-group-text"> <span class="fas fa-envelope"></span> </div>
						</div>
					</div>
                    @error('email')<span class="text-danger">{{$message="İstifadəçi adı boş göndərilə bilməz"}}</span>@enderror
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Şifrə">
						<div class="input-group-append">
							<div class="input-group-text"> <span class="fas fa-lock"></span> </div>
						</div>
					</div>
                    @error('password')<span class="text-danger">{{$message="Şifrə boş göndərilə bilməz"}}</span>@enderror
					<div class="form-group">
						{!! NoCaptcha::renderJs() !!}
						{!! NoCaptcha::display() !!}
						@if ($errors->has('g-recaptcha-response'))
							<span class="help-block">
								<strong class="text-danger">{{ $message="google recaptcha doldurulmadı" }}</strong>
							</span>
						@endif
					</div>
					<div class="row">
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Daxil ol</button>
						</div>
                        <div class="col-2"></div>
						<!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->
	<!-- jQuery -->
	<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
