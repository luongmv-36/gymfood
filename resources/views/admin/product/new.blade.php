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
                                @if(!empty($product_data) && $product_data->id)
                                    Edit : {{$product_data->name}}
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
                                <div class="form-group required">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="true" name="name" placeholder="Name" value="<?php echo (!empty($product_data))? $product_data->name : '';?>">
                                    </div>
                                </div>
                                    <div class="form-group required">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Price<span>(VND)</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" min="0.01" step="0.01" max="5000000" class="form-control" required="true" name="price" placeholder="Price" value="<?php echo (!empty($product_data))? $product_data->price : '';?>">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                                        <div class="col-sm-10">
                                                <select name="category_id" class="form-control select2" required style="width: 100%;">
                                                   <option></option>
                                                @foreach($category as $cat)
                                                    <option value="{{$cat->id}}" <?php echo (!empty($product_data) && $product_data->category_id = $cat->id)? "selected='selected'": ''; ?>>{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Active</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="active">
                                            <option value="1" <?php echo (!empty($product_data) && $product_data->active == 1)? 'selected' : '';?>>Enable</option>
                                            <option value="0" <?php echo (!empty($product_data) && $product_data->active == 0)? 'selected' : '';?>>Disabled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Images Normal</label>
                                    <div class="col-sm-10">
                                        @if(!empty($product_data) && $product_data->id)
                                        <img src="{{URL::to('/')}}/images/{{$product_data->images}}" width="300px" height="200px"/>
                                        @endif
                                        <input type="file" name="images">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                               <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Images Zoom</label>
                                        <div class="col-sm-10">
                                            @if(!empty($product_data) && $product_data->id)
                                                <img src="{{URL::to('/')}}/images/{{$product_data->images_zoom}}" width="300px" height="200px"/>
                                            @endif
                                            <input type="file" name="images_zoom">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                </div>
                                    <div class="form-group required">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <textarea required class="textarea" placeholder="Place some text here" name="short_description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                  @if(!empty($product_data))
                                                    {{$product_data->short_description}}
                                                @else
                                                 Creatine-Free pre-workout formula with fat burning ingredients that help athletes to train harder while supporting fat burning
                                                @endif
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea required class="textarea" placeholder="Place some text here" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                @if(!empty($product_data))
                                                    {{$product_data->description}}
                                                @else
                                                 <p><strong>Features</strong></p>
                                                            <ul>
                                                            <li>Creatine-Free&nbsp;pre-workout formula with fat burning ingredients that help athletes to train harder while supporting fat burning</li>
                                                            </ul>
                                                            <p><strong>Benefits</strong></p>
                                                            <ul>
                                                            <li>Enhance focus and boost energy for high-intensity workout</li>
                                                            <li>Reduce lactic acid build up and optimize nutrient level for working muscles</li>
                                                            <li>Convert body fats into usable energy</li>
                                                            </ul>
                                                  @endif
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <div class="box-footer">
                                            @if(!empty($product_data) && $product_data->id)
                                            <input style="display: none" type="text" name="id" value="{{$product_data->id}}">
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
