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
                            @if(!empty($orders) && $orders->id)
                                Order:# {{$orders->id}}
                            @endif
                        </h3>
                        <a href="{{route('admin.orders.list')}}"><button type="submit" class="btn btn-primary" style="float: right"><i class="fa fa-fw fa-step-backward"></i> Back</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i>Detail
                                    <small class="pull-right">Date: {{$orders->created_at}}</small>
                                </h2>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <code>Order</code></br>
                                <b>Order Date:</b> {{$orders->created_at}}</b><br>
                                <b>Order Status:</b> {{$orders->status}}<br>
                                <b>Placed from IP:</b> 127.0.0.1<br>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <code>Customer</code></br>
                                <b>Name:</b> {{$orders->customer->name}}</b><br>
                                <b>Email:</b> {{$orders->customer->email}}<br>
                                <b>Date Of Birth:</b> Aug 3, 1990<br>
                                <b>Gender:</b> Male<br>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <code>Shipping Address</code>
                                <address>
                                    <strong>{{$orders->address->name}}</strong><br>
                                    {{$orders->address->address1}}, {{$orders->address->country}}<br>
                                    {{$orders->address->address2}},  {{$orders->address->country}}<br>
                                    PassCode: {{$orders->address->passcode}}<br>
                                    Phone: {{$orders->address->phone}}<br>
                                    Email: {{$orders->address->email}}
                                </address>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $subTotal= 0;?>
                                    @foreach($orders->items as $item)
                                        <?php  $subTotal+= ($item->qty)*($item->price)?>
                                    <tr>
                                        <td>{{$item->qty}}</td>
                                        <td><?php echo \App\Product::find($item->product_id)->name;?></td>
                                        <td>{{$item->product_id}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{($item->qty)*($item->price)}}<small> vnđ</small></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-xs-6">
                                <p class="lead">Payment Methods: <kbd>{{$orders->payment_method}}</kbd></p>
                                <img src="{{URL::to('adminhtml')}}/dist/img/credit/visa.png" alt="Visa">
                                <img src="{{URL::to('adminhtml')}}/dist/img/credit/mastercard.png" alt="Mastercard">
                                <img src="{{URL::to('adminhtml')}}/dist/img/credit/american-express.png" alt="American Express">
                                <img src="{{URL::to('adminhtml')}}/dist/img/credit/paypal2.png" alt="Paypal">
                                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                                <p class="lead">Shipping Methods: <kbd>{{$orders->shipping_method}}</kbd></p>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">
                                <p class="lead">Amount Due</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td> {{$subTotal}} <small> vnđ</small></td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping Fee:</th>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>{{$orders->total}} <small> vnđ</small></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="#"  class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                <button type="button" href="{{route('home')}}" class="btn btn-success pull-right" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Generate Invoice"><i class="fa fa-money"></i> Generate Invoice</button>
                            </div>
                        </div>
                    </section>
                    <!-- /.content -->
                    <div class="clearfix"></div>
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
    <script>
        $('#load').on('click', function() {
            var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
                $this.button('reset');
            }, 8000);
        });
    </script>
@stop
