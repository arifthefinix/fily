<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/assets/img/favicon.png">
        <title>Login - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/style.css">
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>
				<div class="container">
					<h3 class="account-title">Management Login</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<a href="index.html"><img src="assets/img/logo2.png" alt="Focus Technologies"></a>
							</div>
							<form method="post" action="{{ route('login') }}">
                                @csrf
								<div class="form-group form-focus">
									<label class="control-label">Username or Email</label>
                                    <input id="email" type="email" class="form-control floating @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								<div class="form-group form-focus">
                                    <label for="password" class="control-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-focus">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
								</div>
								<div class="text-center">
									<a href="{{ route('password.request') }}">Forgot your password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="{{ asset('backend') }}/assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('backend') }}/assets/js/app.js"></script>
    </body>
</html>
