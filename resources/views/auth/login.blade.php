@extends('layouts.adminLTE.app')

@section('content')
<div class="content-wrapper">
	<section class="content container-fluid">
		<div class="login-box">
			<div class="login-logo">
				<a href="{{ url('/') }}"><b>Shiblie</b>Project Management</a>
			</div>
			<!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">Sign in to start your session</p>
				<form action="{{ route('login') }}" method="POST"  aria-label="{{ __('Login') }}">
					@csrf
					<div class="form-group has-feedback">
						<input 
							type="email" 
							class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
							required 
							autofocus 
							name="email" 
							id="email" 
							value="{{ old('email') }}" 
							placeholder="{{ __('E-Mail Address') }}">
							@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input 
								type="password" 
								class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
								placeholder="{{ __('Password') }}" 
								name="password" 
								id="password" 
								required>
							@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-8">
								<div class="checkbox icheck">
									<label>
										<input 
											type="checkbox" 
											{{ old('remember') ? 'checked' : '' }} 
											name="remember" 
											id="remember" 
											class="form-check-input iCheck"> 
											{{ __('Remember Me') }}
									</label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-xs-4">
								<button 
									type="submit" 
									class="btn btn-primary btn-block btn-flat">
									{{ __('Login') }}
								</button>
							</div>
							<!-- /.col -->
						</div>
				</form>
				<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
			</div>
			<!-- /.login-box-body -->
		</div>
	</section>
</div>
@endsection

@section('additionalCSS')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL('/') }}/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL('/') }}/plugins/iCheck/square/blue.css">
@endsection

@section('additionalJS')
<!-- iCheck -->
<script src="{{ URL('/') }}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection
