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
                            <a href="{{route('admin.customer.list')}}"><button type="submit" class="btn btn-primary" style="float: right"><i class="fa fa-fw fa-step-backward"></i> Back</button></a>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{route('admin.customer.new_or_update')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-info">{{ Session::get('message') }}</div>
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
                                        <span class="input-group-addon"><i>Name </i><i class=" fa fa-user-md"></i></span>
                                        <input type="text" class="form-control" name="name" required="true" value="{{($customer) ? ($customer->name) : ''}}"/>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Email </i><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="true" value="{{($customer) ? ($customer->email) : ''}}"/>
                                    </div>
                                    <br>
                                    @if($customer)
                                    <label>
                                        <input type="checkbox" class="minimal" id="is_change_password" name="is_change_password">
                                    </label>
                                    <i style="color: red">Change Password</i>
                                    <br>
                                    <div class="password_group" style="display: none">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i>OldPassword </i><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control password" name="old_password" required="true" value="" minlength="6"/>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i>NewPassword </i><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control password" name="new_password" required="true" value="" minlength="6"/>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i>Re-Password </i><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control password" name="re_password" required="true" value=""minlength="6"/>
                                        </div>
                                    </div>
                                    @else
                                        <div class="input-group">
                                            <span class="input-group-addon"><i>NewPassword </i><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control password" name="new_password" required="true" value="" minlength="6"/>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i>Re-Password </i><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control password" name="re_password" required="true" value="" minlength="6"/>
                                        </div>
                                    @endif
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
    <script>
        $('input:password').val('_');
        $('#is_change_password').change(function() {
            if ($('#is_change_password').is(":checked")) {
                $('input:password').val('');
                $('.password_group').show();
            }else {
                $('input:password').val('_');
                $('.password_group').hide();
            }
        });
    </script>
@stop
