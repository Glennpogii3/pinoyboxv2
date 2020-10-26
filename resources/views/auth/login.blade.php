<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pinoyboxdelivery') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
    <a href="{{ route('welcome') }}">
        <img src="..\asset\STATIC\REGSITER-LOGIN\logo.svg" class="logo-svg">
    </a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="left">
                        <img  src="..\asset\STATIC\REGSITER-LOGIN\LOGIN.png">
                    </div>
                        <div class="right">
                            <div class="formbox">
                              <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group row">
                             <label for="email" class="col-form-label text-md-top">{{ __('E-MAIL ADDRESS/MOBILE NUMBER') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-top">{{ __('PASSWORD') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label"  for="remember" id="remember-label">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" id="Forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                 </div>
                </div>
             </div>
        </div>
    </div>
</div>
</div>

        <footer>
            ©2013-2018 Pinoyboxdelivery - Powered by E-Kommerce.site  -  Terms and Conditons  - Privacy Policy
        </footer>
</body>
</html>
