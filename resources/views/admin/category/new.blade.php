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
                {{$category_data}}
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @if(!empty($category_data) && $category_data->id)
                                    Edit : {{$category_data->name}}
                                @endif
                            </h3>
                            <a href="{{route('admin.category.list')}}"><button type="submit" class="btn btn-primary" style="float: right"><i class="fa fa-fw fa-step-backward"></i> Back</button></a>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{route('admin.category.postcreate')}}" method="post" enctype="multipart/form-data">
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="true" name="name" placeholder="Name" value="<?php echo (!empty($category_data))? $category_data->name : '';?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Active</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="active">
                                            <option value="1" <?php echo (!empty($category_data) && $category_data->active == 1)? 'selected' : '';?>>Enable</option>
                                            <option value="0" <?php echo (!empty($category_data) && $category_data->active == 0)? 'selected' : '';?>>Disabled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Images On Frontend</label>
                                    <div class="col-sm-10">
                                        @if(!empty($category_data) && $category_data->id)
                                        <img src="{{URL::to('/')}}/images/{{$category_data->images}}" width="849px" height="180px"/>
                                        @endif
                                        <input type="file" name="images">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <div class="box-footer">
                                            @if(!empty($category_data) && $category_data->id)
                                            <input style="display: none" type="text" name="id" value="{{$category_data->id}}">
                                            @endif
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->
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
