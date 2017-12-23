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
                            <a href="{{route('checkout.cart')}}" class="step-title">
                                03. Shipping And Payment
                            </a>
                        </li>
                        <li class="steps">
                            <a href="" class="step-title" style="color: red">
                                04. oder review
                            </a>
                            <div class="step-description">

                                <form method="post" action="{{route('checkout.step6')}}">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="your-details">
                                                <h5>
                                                    Order Details
                                                </h5>
                                                <div class="form-row">
                                                    <?php $sub_total = 0;?>
                                                @if(Session::has('cartItems'))
                                                        @foreach(Session::get('cartItems') as $item)
                                                            <?php $sub_total += $item['qty']*$item['price'];?>
                                                         @endforeach
                                                   @endif
                                                    <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                                        <div class="label-price" style="float: left">Subtotal</div>
                                                        <div class="value-price" style="float: right">{{$sub_total}} VNĐ</div>
                                                    </div>
                                                        <hr/>
                                                        <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                                        <div class="label-price" style="float: left">Tax</div>
                                                        <div class="value-price" style="float: right">0 VNĐ</div>
                                                    </div>
                                                    <hr/>
                                                    <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                                        <div class="label-price" style="float: left">Grand Total</div>
                                                        <div class="value-price" style="float: right">{{Session::get('grandTotal')}} VNĐ</div>
                                                    </div>
                                                    <hr/>
                                                        <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                                            <div class="label-price" style="float: left">Shipping Method</div>
                                                            <div class="value-price" style="float: right">
                                                                {{$shippingAndpayment['shipping_method']}}
                                                                <input style="border: 0px" type="hidden" class="input namefild" name="shipping_method" value="{{$shippingAndpayment['shipping_method']}}" readonly="readonly">
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                                            <div class="label-price" style="float: left">Payment Method</div>
                                                            <div class="value-price" style="float: right">
                                                                {{$shippingAndpayment['payment_method']}}
                                                                <input  style="border: 0px" type="hidden" class="input namefild" name="payment_method" value="{{$shippingAndpayment['payment_method']}}" readonly="readonly">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="your-details">
                                                <h5>
                                                    Order Address
                                                </h5>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Full Name
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="name" value="{{$orderAddress['name']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Email
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="email" value="{{$orderAddress['email']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Phone
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="phone" value="{{$orderAddress['phone']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address 1
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="address1" value="{{$orderAddress['address1']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address2
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="address2" value="{{$orderAddress['address2']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        City
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="city" value="{{$orderAddress['city']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        PassCode
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="passcode" value="{{$orderAddress['passcode']}}" readonly="readonly">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Country
                                                    </label>
                                                    <input style="border: 0px" type="text" class="input namefild" name="country" value="{{$orderAddress['country']}}" readonly="readonly">
                                                </div>
                                                <button type="submit">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </li>
                    </ol>
                </div>

                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop