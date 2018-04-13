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
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        @if(Session::has('thongbao'))
                            <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                        @endif
                            <!-- /.box-header -->
                        <div class="box-body">
                            <thead>
                            <tr>
                                <a href="#">
                                    <button class="btn btn-block btn-primary" style="width: 100px;float: right;margin-bottom: 3px" type="button"><i class="fa fa-fw fa-edit"></i> New Item</button>
                                </a>
                            </tr>
                            </thead>
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Bill to Name</th>
                                    <th>Ship to Name</th>
                                    <th>Status</th>
                                    <th>Invoice</th>
                                    <th>Shipment</th>
                                    <th>Total</th>
                                    <th>Time Update</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->bill_name}}</td>
                                    <td>{{$item->ship_name}}</td>
                                    <td><span class="label label-warning">{{$item->status}}</span></td>
                                    <td>
                                        @if($item->invoice_id)
                                            <i class="fa fa-fw fa-check" style="color: #00A65A"></i>
                                        @else
                                            <i class="fa fa-fw fa-close " style="color: #D73925"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->shipment_id)
                                            <i class="fa fa-fw fa-check" style="color: #00A65A"></i>
                                        @else
                                            <i class="fa fa-fw fa-close " style="color: #D73925"></i>
                                        @endif
                                    </td>
                                    <td>{{$item->total}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td style="width: 100%;float: right">
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-info" href="{{route('admin.orders.view',['id' => $item->id])}}">View</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Time Update</th>
                                    <th>Action</th>
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
        });
    </script>
@stop