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
                                    Men
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Women
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Salon
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    New Trend
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Living room
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Bed room
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
                    <img src="images/fblike.png" alt="">
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
                      <img src="images/fbicon.png" alt="">
                    </span>
                                Facebook social plugin
                            </a>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="leftbanner">
                        <img src="images/banner-small-01.png" alt="">
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
                    <div class="products-list">
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="view-mode">
                                    <a href="#" class="list active">
                                        List
                                    </a>
                                    <a href="{{route('category.productgird',['id'=>$list_product->first()->category_id])}}" class="grid">
                                        Grid
                                    </a>
                                </div>
                                <div class="sort-by">
                                    Sort by :
                                    <select name="" >
                                        <option value="Default" selected >
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
                                    <select name="">
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
                        <ul class="products-listItem">
                            @foreach($list_product as $product)
                            <li class="products">
                                <div class="offer">
                                    New
                                </div>
                                <div class="thumbnail">
                                    <img src="{{URL::to('images').'/'.$product->images}}" alt="Product Name">
                                </div>
                                <div class="product-list-description">
                                    <div class="productname">
                                        {{$product->name}}
                                    </div>
                                    <p>
                                        <img src="images/star.png" alt="">
                                        <a href="#" class="review_num">
                                            02 Review(s)
                                        </a>
                                    </p>
                                    <p>
                                        {{$product->short_description}}
                                    </p>
                                    <div class="list_bottom">
                                        <div class="price">
                          <span class="new_price">
                            {{$product->price}}
                            <sup>
                              vnđ
                            </sup>
                          </span>
                          <span class="old_price">
                            {{$product->price}}
                            <sup>
                              vnđ
                            </sup>
                          </span>
                                        </div>
                                        <div class="button_group">
                                            <button class="button">
                                                Add To Cart
                                            </button>
                                            <button class="button compare">
                                                <i class="fa fa-exchange">
                                                </i>
                                            </button>
                                            <button class="button favorite">
                                                <i class="fa fa-heart-o">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                          @endforeach
                        </ul>
                        <div class="toolbar">
                            <div class="sorter bottom">
                                <div class="view-mode">
                                    <a href="#" class="list active">
                                        List
                                    </a>
                                    <a href="productgird.html" class="grid">
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
