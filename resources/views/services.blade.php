@extends('layouts.app')

        @section('content')

            <div class="white-text-container background-image-container-services">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="Shop-from-over-thous" >Shop from over thousands international online store<br> and we'll deliver it to your door step.</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="white-text-container background-image-container second-row">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <h1 class="secondary-h1">WHAT IS PINOYBOXDELIVERY?</h1>
                            <P>Pinoyboxdelivery is a dediceted shipping company in the Philippines since 2013.<br>
                            Our mission is to enable our customers in the Philippines to buy online anywhere in USA, UK, Canada, China,<br>
                            Taiwan, Hong Kong and Thailand and we'll delivery it straight to their door step.</P>

                            <P> We want to bring simple and seamless online experience to our customer! <br> With PBD you can shop websites like Amazon, eBay, and Walmart, ship your pakages to your PBD address
                            </P>
                        </div>
                    </div>
                </div>
            </div>



            <div class="white-text-container background-image-container-services-box">
                    <div class="opacity"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="ol-shoppers">WHY ONLINE SHOPPERS LOVE PINOYBOXDELIVERY?</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <div class="card">

                                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">

                                </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
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
                                    <h1 class="secondary-h1">START SHOPPING WITH THOUSANDS <br> INTERNATIONAL ONLINE STORES!</h1>
                                    <div class="vertical-center">
                                       <a href="{{ route('register') }}" title="CREATE AN ACCOUNT" class="btn btn-lg btn-primary" id="btn-gradient">CREATE AN ACCOUNT</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    @include('inc.footer')

            @endsection
