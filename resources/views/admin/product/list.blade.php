@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Product List</h3>
                        </div>
                        @if(Session::has('thongbao'))
                            <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                        @endif
                        <!-- /.box-header -->
                        <div class="box-body">
                            <thead>
                            <tr>
                                <a href="{{route('admin.product.create')}}">
                                    <button class="btn btn-block btn-primary" style="width: 100px;float: right;margin-bottom: 3px" type="button"><i class="fa fa-fw fa-edit"></i> New Item</button>
                                </a>
                            </tr>
                            </thead>
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Images</th>
                                    <th>Active</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                    {{--<th>Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}<small style="margin-left: 3px">(vnd)</small></td>
                                        <td><img src="{{URL::to('images').'/'.$item->images}}" width="100px" height="auto"/></td>
                                        <td>
                                            @if($item->active)
                                                <i class="fa fa-fw fa-check" style="color: #00A65A"></i>
                                            @else
                                                <i class="fa fa-fw fa-close " style="color: #D73925"></i>
                                            @endif
                                        </td>
                                        <td>{{$item->category->name}}</td>
                                        <td style="width: 100%;float: right">
                                            <div class="btn-group">
                                                <a type="button" class="btn btn-info" href="{{route('admin.product.create',['id' => $item->id])}}">View</a>
                                                <a type="button" class="btn btn-primary" href="{{route('admin.product.create',['id' => $item->id])}}">Edit</a>
                                                <a type="button" class="btn btn-danger" href="{{route('admin.product.delete',['id' => $item->id])}}">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Images</th>
                                    <th>Active</th>
                                    <th>Category</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('extra_js')
    <script src="{{URL::to('/')}}/adminhtml/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{URL::to('/')}}/adminhtml/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#example1').DataTable({
                'searching'   : false
            });
        })
    </script>
@stop