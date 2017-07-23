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
                                            <div class="new-customer">
                                                <h5>
                                                    Shipping Method
                                                </h5>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="shipping_method" value="ship1">
                              </span>
                              <span class="text">
                                Shipping 1
                              </span>
                                                </label>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="shipping_method" value="ship2" checked="checked">
                              </span>
                              <span class="text">
                                 Shipping 2
                              </span>
                                                </label>
                                                <p class="requir">
                                                    ABC
                                                </p>
                                                <label>
                                                    <h5>
                                                        Payment Method
                                                    </h5>
                                                </label>

                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="payment_method" value="payment1">
                              </span>
                              <span class="text">
                                Shipping 1
                              </span>
                                                </label>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="payment_method" value="payment2" checked="checked">
                              </span>
                              <span class="text">
                                 Shipping 2
                              </span>
                                                </label>
                                                <p class="requir">
                                                    XYZ
                                                </p>
                                                <label>
                                                    <button type="submit">
                                                        Continue
                                                    </button>
                                                </label>
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