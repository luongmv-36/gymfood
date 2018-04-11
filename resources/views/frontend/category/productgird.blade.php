@extends('frontend.master')
@section('breadcrumbs')
    <div class="clearfix">
    </div>
    <div class="page-index" style="background-color:lightgrey">
        <div class="container">
            <p style="color: black">
                Home - Category Details
            </p>
        </div>
    </div>
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="category leftbar">
                        <h3 class="title">
                            Categories
                        </h3>
                        <?php $category_all = App\Category::all()->where('active','1');?>
                        <ul>
                            @foreach($category_all as $item)
                                <li>
                                    <a href="#">
                                       {{$item->name}}
                                    </a>
                                </li>
                             @endforeach
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="price-filter leftbar">
                        <h3 class="title">
                            Price
                        </h3>
                        <form class="pricing" method="post" action="{{route('search',['category'=> $list_product->first()->category_id])}}">
                            {{csrf_field()}}
                            <label>
                                $
                                <input type="number" name="fromPrice" class="" required/>
                            </label>
                  <span class="separate">
                    -
                  </span>
                            <label>
                                $
                                <input type="number" name="toPrice" required/>
                                <input type="hidden" name="type" value="price"/>
                            </label>
                            <input type="submit" value="Go" title="Search Now">
                        </form>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="clolr-filter leftbar">
                        <h3 class="title">
                            Color
                        </h3>
                        <ul>
                            <li>
                                <a href="#" class="red-bg">
                                    light red
                                </a>
                            </li>
                            <li>
                                <a href="#" class=" yellow-bg">
                                    yellow"
                                </a>
                            </li>
                            <li>
                                <a href="#" class="black-bg ">
                                    black
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pink-bg">
                                    pink
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dkpink-bg">
                                    dkpink
                                </a>
                            </li>
                            <li>
                                <a href="#" class="chocolate-bg">
                                    chocolate
                                </a>
                            </li>
                            <li>
                                <a href="#" class="orange-bg">
                                    orange-bg
                                </a>
                            </li>
                            <li>
                                <a href="#" class="off-white-bg">
                                    off-white
                                </a>
                            </li>
                            <li>
                                <a href="#" class="extra-lightgreen-bg">
                                    extra-lightgreen
                                </a>
                            </li>
                            <li>
                                <a href="#" class="lightgreen-bg">
                                    lightgreen
                                </a>
                            </li>
                            <li>
                                <a href="#" class="biscuit-bg">
                                    biscuit
                                </a>
                            </li>
                            <li>
                                <a href="#" class="chocolatelight-bg">
                                    chocolatelight
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="fbl-box leftbar">
                        <h3 class="title">
                            Facebook
                        </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="{{URL::to('/')}}/images/fblike.png" alt="">
                  </a>
                </span>
                        <p>
                            12k people like Flat Shop.
                        </p>
                        <ul>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                        </ul>
                        <div class="fbplug">
                            <a href="#">
                    <span>
                      <img src="{{URL::to('/')}}/images/fbicon.png" alt="">
                    </span>
                                Facebook social plugin
                            </a>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="banner">
                        <div class="bannerslide" id="bannerslide">
                            <ul class="slides">
                                <li>
                                    <a href="#">
                                        <img src="{{URL::to('/')}}/images/banner-01.jpg" alt=""/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="products-grid">
                        @if(!empty($list_product))
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="view-mode">
                                    <a href="{{route('category.productlist',['id' => $list_product->first()->category_id])}}" class="list">
                                        List
                                    </a>
                                    <a href="#" class="grid active">
                                        Grid
                                    </a>
                                </div>
                                <div class="sort-by">
                                    Sort by :
                                    <select name="" >
                                        <option value="Default" selected>
                                            Default
                                        </option>
                                        <option value="Name">
                                            Name
                                        </option>
                                        <option value="Price">
                                            Price
                                        </option>
                                    </select>
                                </div>
                                <div class="limiter">
                                </div>
                            </div>
                            <div class="pager">

                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="row">
                            @if(!empty($list_product))
                            @foreach($list_product as $product)
                            <div class="col-md-4 col-sm-6">
                                <div class="products">
                                    <div class="offer">
                                        New
                                    </div>
                                    <div class="thumbnail">
                                        <a href="{{route('product.view',['id' => $product->id,'slug'=>'detail'])}}">
                                            <img src="{{URL::to('images').'/'.$product->images}}" alt="{{$product->name}}">
                                        </a>
                                    </div>
                                    <div class="productname">
                                        {{$product->name}}
                                    </div>
                                    <h4 class="price">
                                        {{$product->price}}.000<small>vnđ</small>
                                    </h4>
                                    <div class="button_group">
                                        <form action="{{route('cart.add')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$product->id}}" name="product_id">
                                            <input type="hidden" value="1" name="qty">
                                        <button class="button add-cart" type="submit">
                                            Add To Cart
                                        </button>
                                        </form>
                                        <button class="button compare" type="button">
                                            <i class="fa fa-exchange">
                                            </i>
                                        </button>
                                        <button class="button wishlist" type="button">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                           @endif
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="toolbar">
                            {{$list_product->links()}}
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    @else
                        <?php echo "Not Found Result"?>
                    @endif
                </div>
            </div>
            <div class="clearfix">
            </div>
            @include('frontend.our_brand')
        </div>
    </div>
    <div class="clearfix"></div>
@stop
