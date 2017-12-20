@extends('frontend.master')
@section('breadcrumbs')
    @include('frontend.breadcrumbs')
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <form class="form-horizontal" action="#">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$customer->name}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->email}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Phone:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->phone}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Address1:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->address1}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">City:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->city}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">PossCode:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->passcode}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Country:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->country}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Address2:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->address2}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Updated At:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{$cus_address->updated_at}}</p>
                    </div>
                </div>
            </form>
                @include('frontend.our_brand')
            </div>
        </div>
    </div>
@stop