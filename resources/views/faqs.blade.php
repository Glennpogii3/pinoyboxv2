<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'PINOYBOXDELIVERY.COM') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--bootstrap js  -->
    <link href="{{ asset('js/bootstrap.bundle.min.js') }}" rel="stylesheet">

    <!-- jquery -->

    <link href="{{ asset('js/jquery.slim.js') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <header>
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="public/assets/STATIC/HEADER/logo.svg" class="navbar-logo-img" alt="">
                                {{ config('', '') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                    <li class ="nav-item">
                                        <a class = "nav-link" href ="{{ route('faqs') }}">{{ __('FREQUENTLY ASKED QUESTION') }}</a>
                                    </li>

                                </ul>
                         <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                 <li class="nav-item">
                                        <a class="nav-link" href="{{ route('welcome') }}">{{ __('BACK TO PINOYBOXDELIVERY') }}</a>
                             </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </header>
            <main class="py-4">
                        @yield('content') 
                    </main>    
                 <div class="white-text-container background-image-container" style="background-image: url('public/asset/STATIC/HOMEPAGE/main-banner-deskto.jpg')">
                        <div class="opacity"></div>
                        <div class="container">
                            <div class="row">
                               
                                <div class="col-md-12">
                                    <center>
                                    <h1>What do you need help with? <br>  <input type="text" placeholder="Search by topics, keywords, topics" name="search"><a href="" title="" class="btn btn-lg btn-primary"></a></h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

    </body>
    </html>
    