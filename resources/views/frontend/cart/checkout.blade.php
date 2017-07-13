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
                            <a href="" class="step-title">
                                01. checkout opition
                            </a>
                            <div class="step-description">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <form method="post" action="">
                                        <div class="new-customer">
                                            <h5>
                                                New Customer
                                            </h5>
                                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                                Mua hàng mà không cần đăng kí
                              </span>
                                            </label>
                                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                                 Register with us for future convenience:
                              </span>
                                            </label>
                                            <p class="requir">
                                                By creating an account you will be able to shop faste be up to date on an order's status, and keep track of the orders you have previously made.
                                            </p>
                                            <button type="submit">
                                                Continue
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="run-customer">
                                            <h5>
                                                Rerunning Customer
                                            </h5>
                                            <form>
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
                                                        Password
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="">
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