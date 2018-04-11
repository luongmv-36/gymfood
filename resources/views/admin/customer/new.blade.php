@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                General Form Elements
                <small>Preview</small>
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
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @if(!empty($customer) && $customer->id)
                                    View Or Edit : {{$customer->name}}
                                @else
                                    New Customer
                                @endif
                            </h3>
                            <a href="{{route('admin.product.list')}}"><button type="submit" class="btn btn-primary" style="float: right"><i class="fa fa-fw fa-step-backward"></i> Back</button></a>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{route('admin.product.postcreate')}}" method="post" enctype="multipart/form-data">
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
                                    <h4>Customer Information</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class=" fa fa-user-md"></i></span>
                                        <input type="text" class="form-control" name="name" required="true" value="{{($customer) ? ($customer->name) : ''}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="true" value="{{($customer) ? ($customer->email) : ''}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                                    </div>
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
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
