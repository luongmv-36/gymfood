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
                                    <h4 class="price">{{$p->price}}.000 vnđ</h4>
                                    <div class="button_group">
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
                                    <div class="button_group">
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
            @include('frontend.our_brand')
        </div>
    </div>
@stop
@section('extra_js')
    <script>
        jQuery(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>
    @stop