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
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="offer">- %20</div>
                                    <div class="thumbnail"><a href="{{route('product.view',['id'=> 1, 'slug'=> 'test'])}}"><img src="{{URL::to('/')}}/images/products/small/product_test5.jpg" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="offer">- %20</div>
                                    <div class="thumbnail"><a href="{{route('product.view',['id'=> 1, 'slug'=> 'test'])}}"><img src="{{URL::to('/')}}/images/products/small/product_test4.jpg" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="offer">- %20</div>
                                    <div class="thumbnail"><a href="{{route('product.view',['id'=> 1, 'slug'=> 'test'])}}"><img src="{{URL::to('/')}}/images/products/small/product_test3.jpg" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="offer">- %20</div>
                                    <div class="thumbnail"><a href="{{route('product.view',['id'=> 1, 'slug'=> 'test'])}}"><img src="{{URL::to('/')}}/images/products/small/product_test4.jpg" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="featured-products">
                <h3 class="title"><strong>Featured </strong> Products</h3>
                <ul id="featured">
                    <li>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                    <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                    <h4 class="price">$451.00</h4>
                                    <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                </div>
                            </div>
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