<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" id="bootstrap-stylesheet" data-version="1.1.0" href="{{asset ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset ('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">

</head>

<body class="h-100">
    <div class="container-fluid no-padd">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <a href="dashboard">
                            <div class="logo-login text-center pb-4"><img src="{{asset ('assets/img/sellcar-logo.png')}}" width="80%" height="auto"></div>
                        </a>
                        <span class="login100-form-title pb-4">
                            Login to continue
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input id="password" type="password" class="form-control input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex-sb-m w-full mb-5 pt-3">
                            <div class="forgot-col">
                                <a href="{{ route('password.request') }}" class="txt1 pt-1">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>


                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn btn btn-primary">
                                Login
                            </button>
                        </div>
                    </form>

                    <div class="login100-more">
						<img src="{{asset ('assets/img/login-img.jpg')}}" alt="" style="position: absolute;left:0;height: 100vh;width: 100%;">

                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</body>

</html>