@extends('frontend.master')
@section('breadcrumbs')
    @include('frontend.breadcrumbs')
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>
                <div class="checkout-page">
                    <ol class="checkout-steps">
                        {{--{{$c_address}}--}}
                        {{--{{$user}}--}}
                        <li class="steps">
                            <a href="{{route('checkout.cart')}}" class="step-title">
                                01. checkout opition
                            </a>
                        </li>
                        <li class="steps active">
                            <a href="checkout2.html" class="step-title">
                                02. Address information
                            </a>
                            <div class="step-description">
                                <form method="post" action="{{route('checkout.step3')}}">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="your-details">
                                                <h5>
                                                    Your Persional Details
                                                </h5>
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Full Name
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="text" class="input namefild" name="name" value="<?php echo ($user)?$user->name:''?>">
                                                    </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Email
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="email" value="<?php echo ($user)?$user->email:''?>">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Telephone
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="phone" value="<?php echo ($c_address)?$c_address->phone:''?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="your-details">
                                                <h5>
                                                    Your Address
                                                </h5>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address 01
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="address1" value="<?php echo ($c_address)?$c_address->address1:''?>">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address 02
                                                    </label>
                                                    <input type="text" class="input namefild" name="address2" value="<?php echo ($c_address)?$c_address->address1:''?>">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        City
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="city" value="<?php echo ($c_address)?$c_address->city:''?>">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Pass Code
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="passcode" value="<?php echo ($c_address)?$c_address->passcode:''?>">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Country
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="country" value="<?php echo ($c_address)?$c_address->country:''?>">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Region / State
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <p class="privacy">
                                <span class="input-radio">
                                  <input class="" type="radio" name="agree" required>
                                </span>
                                <span class="text">
                                  I have read and agree to the
                                  <a href="#" class="red">
                                    Privacy Policy
                                  </a>
                                </span>
                                                </p>
                                                <button type="submit">
                                                    Continue
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="steps">
                            <a href="#" class="step-title">
                                03. Shipping and Payment
                            </a>
                        </li>
                        <li class="steps">
                            <a href="#" class="step-title">
                                04. oder review
                            </a>
                        </li>
                    </ol>
                </div>

                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop