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
                                02. billing information
                            </a>
                        </li>
                        <li class="steps">
                            <a href="checkout2.html" class="step-title">
                                03. Shipping information
                            </a>
                        </li>
                        <li class="steps active">
                            <a href="#" class="step-title">
                                04. shipping method
                            </a>
                            <div class="step-description">
                                        <form method="post" action="{{route('checkout.step6')}}">
                                            {{csrf_field()}}
                                            <div class="new-customer">
                                                <h5>
                                                    New Customer
                                                </h5>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="user_checkout" value="no_register">
                              </span>
                              <span class="text">
                                Mua hàng mà không cần đăng kí
                              </span>
                                                </label>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="user_checkout" value="yes_register" checked="checked">
                              </span>
                              <span class="text">
                                 Register with us for future convenience:
                              </span>
                                                </label>
                                            </div>
                                            <button type="submit">
                                                Continue
                                            </button>
                                        </form>
                            </div>
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