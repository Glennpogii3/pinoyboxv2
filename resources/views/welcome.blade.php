
@extends('layouts.app')

@section('content')

    <div class="white-text-container background-image-container-welcome">
            <div class="row">
                <div class="col-md-6">
                   <div class="container" >
                        <h1 class="shoponline" > Shop online from abroad & we'll ship it to your doorstep! </h1>
                        <a href="" title="learn-more" id="btn-white" class="btn btn-lg btn-primary " >Learn more</a>
                        <a href="{{ route('register') }}" title="create an account" id="btn-gradient" class="btn btn-lg btn-primary" >CREATE AN ACCOUNT</a>
                    </div>
               </div>
            </div>
        </div>


    <div class="white-text-container background-image-container-globe">
        <div class="container">
            <div class="row">
                <div class="left">
                    <img src="..\asset\STATIC\01HOMEPAGE\ICONS\world.svg">
                </div>
                <div class="right">
                  <div class="col-md-8">
                    <h5 class="countries">YOU CAN NOW SHOP ONLINE FROM THESE COUNTRIES</h5>
                <p class="country">United States, United Kingdom, Canada, China, Thailand, Hongkong, Spain, South Korea</p>
            </div>
            </div>
            </div>
        </div>
    </div>


    <div class="white-text-container background-image-container">
        <div class="opacity"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>HOW ONLINE SHOPPING MADE VERY EASY</h3>
                    <h5>3 easy step on how Pinoyboxdelivery works</h5>
                </div>
            </div>
        </div>
    </div>


    <center>
    <div class="col-md-12">
            <a href="" title="learn-more" id="btn-white" class="btn btn-lg btn-primary" >Learn more</a>
             <a href="{{ route('register') }}" title="CREATE AN ACCOUNT" id="btn-gradient" class="btn btn-lg btn-primary">CREATE AN ACCOUNT</a>
        </div>
    </center>

    <div class="white-text-container background-image-container">
            <div class="opacity"></div>
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <center>
                        <h3>GUIDE FOR FAST AND EASY INTERNATIONAL SHIPPING </h3>

                      <a href="{{ route('faqs') }}" title="view-faqs" id="btn-white" class="btn btn-lg btn-primary" >VIEW FAQS</a>
                      <a href="{{ route('register') }}" title="CREATE AN ACCOUNT" id="btn-gradient" class="btn btn-lg btn-primary">CREATE AN ACCOUNT</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="white-text-container background-image-container" style="background-image: url('public/asset/STATIC/HOMEPAGE/main-banner-deskto.jpg')">
            <div class="opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                        <h3>WHY THOUSANDS OF ONLINE SHOPPERS <br> LOVE PINOY BOX DELIVERY (PBD)</h3>
                        <h5>International shipping made easy!</h5>
                        </center>
                    </div>
                </div>
            </div>
        </div>



        <div class="white-text-container background-image-container">
            <div class="opacity"></div>
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <h3>AFFORDABLE SHIPPING RATES</h3>
                        <br>
                        <h5>With PinoyBoxDelivery you can save at least 80% on <br> shipping with our very affordable shipping rates.</h5>
                        <br>

                         <a href="{{ route('rates') }}" title="CREATE AN ACCOUNT" id="btn-gradient" class="btn btn-lg btn-primary">VIEW RATES</a>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer-bs">
            <div class="row footer">
                <div class="col-md-3 col-sm-4 footer-brand animated fadeInLeft">
                    <a href="{{ route('welcome') }}">
                        <img src="..\asset\STATIC\FOOTER\logo-footer.svg" class="logo-footer-svg">
                    </a>

                </div>
                <div class="col-md-3 col-sm-4 footer-nav animated fadeInUp">
                    <h4 class="footer-head" >INFO</h4>
                        <ul class="pages">
                            <li class="footer-item"><a class="footer-link" href="">About Pinoyboxdelivery</a></li>
                            <li class="footer-item"><a class="footer-link" href="{{ route('howitworks') }}">How it works</a></li>
                            <li class="footer-item"><a class="footer-link" href="{{ route('rates') }}">Rates</a></li>
                            <li class="footer-item"><a class="footer-link" href="{{ route('services') }}">Services</a></li>
                            <li class="footer-item"><a class="footer-link" href="{{ route('faqs') }}">FAQs</a></li>
                        </ul>
                </div>
                <div class="col-md-3 col-sm-4 footer-contact animated fadeInDown">
                    <h4 class="footer-head" >Contact US</h4>
                    <ul class="pages">
                        <li class="footer-item"><a class="footer-link" href="#">wedeliver@pinoyboxdelivery.com</a></li>
                        <li class="footer-item"><a class="footer-link" >Open from 10AM-6PM from</a></li>
                        <li class="footer-item"><a class="footer-link" >Monday to Friday</a></li>
                    </ul>

                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4 class="footer-head">Get new promos and updates!</h4>
                    <ul class="pages">
                        <li class="footer-item"><a class="footer-subs">Subscribe to pinoyboxdelivery newsletter</a></li>
                    </ul>
                    <p>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button  id="btn-gradient" class="btn btn-lg btn-primary" type="button">Subscribe</button>
                          </span>
                        </div><!-- /input-group -->
                     </p>
                </div>
            </div>


        </footer>

@endsection
