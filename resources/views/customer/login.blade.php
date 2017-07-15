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
                        <li class="steps active">
                            <a href="{{route('checkout.cart')}}" class="step-title">
                                01. checkout opition
                            </a>
                            <div class="step-description">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                            <div class="new-customer">
                                                <h5>
                                                    New Customer
                                                </h5>
                                                <p class="requir">
                                                    By creating an account you will be able to shop faste be up to date on an order's status, and keep track of the orders you have previously made.
                                                </p>
                                                <a href="{{route('customer.register')}}">
                                                <button type="submit">
                                                    Continue
                                                </button>
                                                    </a>
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="run-customer">
                                            <h5>
                                                Rerunning Customer
                                            </h5>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if(Session::has('thanhcong'))
                                                <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                                            @endif
                                            @if(Session::has('thatbai'))
                                                <div class="alert alert-danger">{{Session::get('thatbai')}}</div>
                                            @endif
                                            <form action="{{route('customer.login')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Email
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="email">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Password
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="password">
                                                </div>
                                                <p class="forgoten">
                                                    <a href="#">
                                                        Forgoten your password?
                                                    </a>
                                                </p>
                                                <button>
                                                    Login
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop