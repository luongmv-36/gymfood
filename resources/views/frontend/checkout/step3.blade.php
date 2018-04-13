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
                            <a href="{{route('checkout.cart')}}" class="step-title">
                                02. Address information
                            </a>
                        </li>
                        <li class="steps active">
                            <a href="" class="step-title" style="color: red">
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
                                                    @if($shipping_method)
                                                        @foreach($shipping_method as $ship)
                              <span class="input-radio">
                                <input type="radio" name="shipping_method" value="{{$ship->shipping_name}}" required>
                              </span>
                              <span class="text">
                                {{$ship->shipping_name}}
                              </span>
                                                        @endforeach
                                                    @else
                                                        <input type="hidden" name="shipping_method_hide" required="true">
                                                    @endif
                                                </label>
                                                <i>___________________________</i>
                                                <label>
                                                    <h5>
                                                        Payment Method
                                                    </h5>
                                                </label>

                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="payment_method" value="OnyPay" required>
                              </span>
                              <span class="text">
                                OnePay
                              </span>
                                                </label>
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
                            <a href="" class="step-title">
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