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
                    Order #1221121212  Sucesss , Redirect 5s ... to home page
                </div>
                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop