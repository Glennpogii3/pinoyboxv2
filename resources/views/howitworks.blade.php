@extends('layouts.app')

        @section('content')

            <div class="white-text-container background-image-container-works">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="howitworks" >How Pinoyboxdelivery Works.</h1>
                            <a  href="" title="WATCH OUR VIDEO" class="btn btn-lg btn-primary">WATCH OUR VIDEO</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="white-text-container background-image-container">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <h1>1. Shop and fill your box </h1>
                            <br>
                            <h6>Shop online from thousands of online store from USA, UK, <br> Europe, Canada, Taiwan & Thailand.</h6>

                        <br>
                        <h6>While checking out from online stores use your <br> Pinoyboxdelivery address when you shop.</h6>
                        </div>
                    </div>
                </div>
            </div>



            <div class="white-text-container background-image-container" style="background-image: url('public/asset/STATIC/HOMEPAGE/main-banner-deskto.jpg')">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <h1>2. Ship </h1>
                            <br>
                            <h6>Once the stores deliver your shipments to our warehouse, it<br> takes us 2 - 3 working days to update them to your <br> Pinoyboxdelivery account.</h6>

                        <br>
                        <h6>You'll recieve an email notification once the shipments have <br> been uploaded. Login to your accoount to pay and ship out your shipments.<br> Pinoyboxdelivery address when you shop.</h6>
                        </div>
                    </div>
                </div>
            </div>



            <div class="white-text-container background-image-container" style="background-image: url('public/asset/STATIC/HOMEPAGE/main-banner-deskto.jpg')">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <h1>3. Recieve </h1>
                            <br>
                            <h6>Express Delivery takes 7 - 14 business days, or 48 business <br> days via Sea.</h6>
                        <br>
                        <h6>Processing starts once you paid and shipped out your <br> shipment.</h6>
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
                               <button class="btn btn-sml btn-primary" type="button">Subscribe</button>
                              </span>
                            </div><!-- /input-group -->
                         </p>
                    </div>
                </div>
            </footer>

            @endsection
