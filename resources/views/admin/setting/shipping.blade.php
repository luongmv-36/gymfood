@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Setting
                <small>Shipping Method</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {{--{{$category_data}}--}}
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            @if(!empty($shipping) && $shipping->id)
                                Edit : {{$shipping->shipping_name}}
                            @endif
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('admin.setting.shipping')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            @if(Session::has('thongbao'))
                                <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group required">
                                <label for="inputEmail3" class="col-sm-2 control-label">Method Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required="true" name="shipping_name" placeholder="Name" value="<?php echo (!empty($shipping))? $shipping->shipping_name : '';?>">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="inputEmail3" class="col-sm-2 control-label">Fee</label>
                                <div class="col-sm-10">
                                    <input type="number" class="" required="true" name="fee" min="0" value="<?php echo (!empty($shipping))? $shipping->fee : '';?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <div class="box-footer">
                                        @if(!empty($shipping) && $shipping->id)
                                            <input style="display: none" type="text" name="id" value="{{$shipping->id}}">
                                        @endif
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('extra_js')
    <script src="{{URL::to('/')}}/adminhtml/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{URL::to('/')}}/adminhtml/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
@stop
