@extends('frontend.master')
@section('slider')
    @include('frontend.slider')
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="hot-products">
                <h3 class="title"><strong>Hot</strong> Products</h3>
                <ul id="hot">
                    <li>
                        <div class="row">
                            @foreach($product1 as $p)
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="offer">- %50</div>
                                    <div class="thumbnail"><a href="{{route('product.view',['id'=> $p->id, 'slug'=> 'test'])}}"><img src="{{URL::to('images').'/'.$p->images}}" alt="{{$p->name}}"></a></div>
                                    <div class="productname">{{$p->name}}</div>
                                    <h4 class="price">{{$p->price}} USD</h4>
                                    <div class="dc_h_sale" style="color: #347e0c;font-weight: bold; margin: 3px 0 6px 0;text-align: center"><img src="{{URL::to('images/thuong_icon.jpg')}}" style="display: inline;"> Có tặng thêm quà</div>
                                    <div class="button_group" id="home_product">
                                        <form action="{{route('cart.add')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$p->id}}" name="product_id">
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
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="featured-products">
                <h3 class="title"><strong>New </strong> Products</h3>
                <ul id="featured">
                    <li>
                        @foreach($product2 as $p)
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="offer">New</div>
                                    <div class="thumbnail"><a href="{{route('product.view',['id'=> $p->id, 'slug'=> 'test'])}}"><img src="{{URL::to('images').'/'.$p->images}}" alt="{{$p->name}}"></a></div>
                                    <div class="productname">{{$p->name}}</div>
                                    <h4 class="price">{{$p->price}}.000 vnđ</h4>
                                    <div class="dc_h_sale" style="color: #347e0c;font-weight: bold; margin: 3px 0 6px 0;text-align: center"><img src="{{URL::to('images/thuong_icon.jpg')}}" style="display: inline;"> Có tặng thêm quà</div>
                                    <div class="button_group" id="home_product">
                                        <form action="{{route('cart.add')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$p->id}}" name="product_id">
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
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="featured-products">
                <h3 class="title"><strong>Discover</strong></h3>
                <div class="row">
                    <div class="col-md-3" title="Discover">
                        <div class="">
                            <a href="#">
                                <img src="{{URL::to('images/discover/discover_1.png')}}" alt="Lights" style="max-width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3" title="Discover">
                        <div class="">
                            <a href="#">
                                <img src="{{URL::to('images/discover/discover_2.png')}}" alt="Nature" style="max-width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <a href="#" title="Discover">
                                <img src="{{URL::to('images/discover/discover_3.png')}}" alt="Fjords" style="max-width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <a href="#" title="Discover">
                                <img src="{{URL::to('images/discover/discover_4.png')}}" alt="Fjords" style="max-width:100%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.our_brand')
            <div class="clearfix"></div>
            <a id="show-message">Show popup again</a>
            <div id="my-welcome-message">
                <div class="img_popup">
                    <a href="{{URL::to('/')}}"><img src="{{URL::to('images/pop_up.jpg')}}"></a>
                </div>
            </div>
    </div>
        </div>
@stop
@section('extra_js')
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.firstVisitPopup.min.js" ></script>
    <script>
        jQuery(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });

        $(function () {
            $('#my-welcome-message').firstVisitPopup({
                cookieName : 'homepage',
                showAgainSelector: '#show-message'
            });
        });
    </script>
    @stop
