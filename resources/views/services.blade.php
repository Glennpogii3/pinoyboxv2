@extends('layouts.app')

        @section('content')

            <div class="white-text-container background-image-container" style="background-image: url('public/asset/STATIC/HOMEPAGE/main-banner-deskto.jpg')">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <center>
                            <h1>Shop from over thousands international online store<br> and we'll deliver it to your door step.</h1>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="white-text-container background-image-container">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <center>
                            <h2>WHAT IS PINOYBOXDELIVERY?</h2>
                            <P>Pinoyboxdelivery is a dediceted shipping company in the Philippines since 2013. <br>
                            Our mission is to enable our customers in the Philippines to buy online anywhere in USA, UK, Canada, China, <br>
                            Taiwan, Hong Kong and Thailand and we'll delivery it straight to their door step.
                            <br>
                            <br>
                            <br>
                            We want to bring simple and seamless online experience to our customer! <br> With PBD you can shop websites like Amazon, eBay, and Walmart, ship your pakages to your PBD address
                            </P>
                            </center>
                        </div>
                    </div>
                </div>
            </div>



            <div class="white-text-container background-image-container">
                    <div class="opacity"></div>
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <center>
                                <h2>WHY ONLINE SHOPPERS LOVE PINOYBOXDELIVERY?</h2>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="white-text-container background-image-container">
                        <div class="opacity"></div>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12">
                                    <center>
                                    <h3>START SHOPPING WITH THOUSANDS <br> INTERNATIONAL ONLINE STORES!</h3>
                                  <br>
                                  <a href="{{ route('register') }}" title="CREATE AN ACCOUNT" class="btn btn-lg btn-primary">CREATE AN ACCOUNT</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="footer-blck">
                        <div class="row footer-2">
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
                                       <button   class="btn btn-sml btn-primary" type="button">Subscribe</button>
                                      </span>
                                    </div><!-- /input-group -->
                                 </p>
                            </div>
                        </div>
                    </footer>

            @endsection
