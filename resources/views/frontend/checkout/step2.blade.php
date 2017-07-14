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
                        <li class="steps">
                            <a href="{{route('checkout.cart')}}" class="step-title">
                                01. checkout opition
                            </a>
                        </li>
                        <li class="steps active">
                            <a href="checkout2.html" class="step-title">
                                02. billing information
                            </a>
                            <div class="step-description">
                                <form method="post" action="{{}}">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="your-details">
                                                <h5>
                                                    Your Persional Details
                                                </h5>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        First Name
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Last Name
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Email
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Telephone
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Fax
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Company
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="pass-wrap">
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Your Password
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="password" class="input namefild" name="">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Confird Your Password
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="password" class="input cpass" name="">
                                                    </div>
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
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address 02
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        City
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Pass Code
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Country
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Region / State
                                                        <strong class="red">
                                                            *
                                                        </strong>
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
                            <a href="checkout2.html" class="step-title">
                                03. Shipping information
                            </a>
                        </li>
                        <li class="steps">
                            <a href="#" class="step-title">
                                04. shipping method
                            </a>
                        </li>
                        <li class="steps">
                            <a href="#" class="step-title">
                                05. payment information
                            </a>
                        </li>
                        <li class="steps">
                            <a href="#" class="step-title">
                                06. oder review
                            </a>
                        </li>
                    </ol>
                </div>

                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop