@extends('layouts.app')

@section('content')

<div class="white-text-container background-image-container-rates">
                <div class="opacity"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="head-rates">Shop anywere & Save up to 80% On<br>     International Shipping!</h1>
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
                            <h3>SHIPPING RATES: <label for="favcity"><!--<![endif]-->
                                <select id="favcity" name="select">
                                  <option value="0">UNITED STATES</option>
                                  <option value="1">HONG KONG </option>
                                  <option value="2">KOREA</option>
                                  <option value="3">TAIWAN</option>
                                  <option value="4">EUROPE</option>
                                  <option value="5">UK</option>
                                </select>
                              </label></h3>
                            </center>
                            <br>
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
                            <h3>UNSURE OF THE BOX SIZE?</h3>
                            <h4>Request for quotation to get an estimate of your shipping fee.</h4>

                            <br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="card-quotation">
                        <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        <div class="form-group row">
                                            <div class=""></div>
                                            <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('FULL NAME') }}</label>

                                            <div class="col-md-6">
                                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="fisrtname" value="{{ old('firstname') }}" required autocomplete="firstname">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('LAST NAME') }}</label>

                                                <div class="col-md-6">
                                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" >

                                                    @error('lastname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-MAIL ADDRESS') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('MOBILE NUMBER') }}</label>

                                                <div class="col-md-6">
                                                    <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                                    @error('mobile')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('WAREHOUSE') }}</label>

                                                <div class="col-md-6">
                                                    <input id="warehouse" type="warehouse" class="form-control @error('warehouse') is-invalid @enderror" name="warehouse" value="{{ old('warehouse') }}" required autocomplete="warehouse">

                                                    @error('warehouse')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('DESTINATION') }}</label>

                                                <div class="col-md-6">
                                                    <input id="destination" type="destination" class="form-control @error('destination') is-invalid @enderror" name="destination" value="{{ old('destination') }}" required autocomplete="destination">

                                                    @error('warehouse')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                <h6>SHIPMENT INFORMATION</h6>
                                            </div>

                                            <div class="form-group row">
                                                <label for="items" class="col-md-4 col-form-label text-md-right">{{ __('DESCRIPTION OF THE ITEMS') }}</label>

                                                <div class="col-md-6">
                                                    <input id="items" type="items" class="form-control @error('items') is-invalid @enderror" name="items" value="{{ old('items') }}" required autocomplete="items">

                                                    @error('items')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('WEIGHT') }}</label>

                                                <div class="col-md-6">
                                                    <input id="weight" type="weight" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}" required autocomplete="weight">

                                                    @error('warehouse')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>




                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">

                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('RESET') }}
                                                </button>

                                                <button type="submit" class="btn btn-primary">
                                                        {{ __('REQUEST') }}
                                                    </button>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @include('inc.footer')
@endsection
