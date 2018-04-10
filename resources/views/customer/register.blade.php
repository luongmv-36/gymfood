@extends('frontend.master')
@section('breadcrumbs')
    <div class="page-index" style="background-color:lightgrey">
        <div class="container">
            <p style="color: black">
                Home - Register
            </p>
        </div>
    </div>
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div>Customer Register</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="clearfix"></div>
                 <div class="step-description">
                                <form method="post" action="{{route('customer.register')}}">
                                    {{csrf_field()}}
                                    <div class="row">
                                        @if(Session::has('thanhcong'))
                                            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                                       @endif
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
                                                    <input type="text" class="input namefild" name="first_name">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Last Name
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="last_name">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Email
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="email">
                                                </div>
                                                <div class="pass-wrap">
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Your Password
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="password" class="input namefild" name="password">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Confird Your Password
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="password" class="input cpass" name="cpassword">
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
                                                        Telephone
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="phone">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address 01
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="address1">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Address 02
                                                    </label>
                                                    <input type="text" class="input namefild" name="address2">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        City
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="city">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Post Code
                                                    </label>
                                                    <input type="text" class="input namefild" name="passcode">
                                                </div>
                                                <div class="form-row">
                                                    <label class="lebel-abs">
                                                        Country
                                                        <strong class="red">
                                                            *
                                                        </strong>
                                                    </label>
                                                    <input type="text" class="input namefild" name="country">
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
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop
<style>
    input.namefild{
        line-height: 18px;
    }
</style>