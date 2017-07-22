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
                        <li class="steps">
                            <a href="checkout2.html" class="step-title">
                                02. Address information
                            </a>
                        </li>
                        <li class="steps active">
                            <a href="checkout2.html" class="step-title">
                                03. Shipping And Payment
                            </a>
                            <div class="step-description">
                                <form method="post" action="{{route('checkout.step4')}}">
                                    {{csrf_field()}}
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
                                                </div>
                                            </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="your-details">
                                                <h5>
                                                    Your Address
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