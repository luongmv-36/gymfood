@extends('frontend.master')
@section('breadcrumbs')
    @include('frontend.breadcrumbs')
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
                        <ul>
                            <li>
                                <a href="#">
                                    Vitamin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    WheyProtein
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="price-filter leftbar">
                        <h3 class="title">
                            Price
                        </h3>
                        <form class="pricing">
                            <label>
                                $
                                <input type="number">
                            </label>
                  <span class="separate">
                    -
                  </span>
                            <label>
                                $
                                <input type="number">
                            </label>
                            <input type="submit" value="Go">
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
                                    Show :
                                    <select name="" >
                                        <option value="3" selected>
                                            3
                                        </option>
                                        <option value="6">
                                            6
                                        </option>
                                        <option value="9">
                                            9
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="pager">
                                <a href="#" class="prev-page">
                                    <i class="fa fa-angle-left">
                                    </i>
                                </a>
                                <a href="#" class="active">
                                    1
                                </a>
                                <a href="#">
                                    2
                                </a>
                                <a href="#">
                                    3
                                </a>
                                <a href="#" class="next-page">
                                    <i class="fa fa-angle-right">
                                    </i>
                                </a>
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
                            <div class="sorter bottom">
                                <div class="view-mode">
                                    <a href="productlitst.html" class="list">
                                        List
                                    </a>
                                    <a href="#" class="grid active">
                                        Grid
                                    </a>
                                </div>
                                <div class="sort-by">
                                    Sort by :
                                    <select name="">
                                        <option value="Default" selected>
                                            Default
                                        </option>
                                        <option value="Name">
                                            Name
                                        </option>
                                        <option value="
                                                        <strong>
                                                        #
                                                        </strong>
                                                        ">
                                            Price
                                        </option>
                                    </select>
                                </div>
                                <div class="limiter">
                                    Show :
                                    <select name="" >
                                        <option value="3" selected>
                                            3
                                        </option>
                                        <option value="6">
                                            6
                                        </option>
                                        <option value="9">
                                            9
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="pager">
                                <a href="#" class="prev-page">
                                    <i class="fa fa-angle-left">
                                    </i>
                                </a>
                                <a href="#" class="active">
                                    1
                                </a>
                                <a href="#">
                                    2
                                </a>
                                <a href="#">
                                    3
                                </a>
                                <a href="#" class="next-page">
                                    <i class="fa fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            @include('frontend.our_brand')
        </div>
    </div>
    <div class="clearfix"></div>
@stop
