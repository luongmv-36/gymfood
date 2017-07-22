<div id="" style="">
    <div class="header" >
    <div class="container">
        <?php $category_menu = App\Category::all()->where('active',1);?>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="logo"><a href="{{route('home')}}"><img src="{{URL::to('/')}}/images/logo-GNC.png" alt="FlatShop"></a></div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="header_top">
                    <div class="row">
                        <div class="col-md-9">
                        </div>
                        <div class="col-md-3">
                            <ul class="usermenu">
                                @if(Auth::check())
                                    <li><a href="{{route('customer.login')}}" class="log">{{Auth::user()->name}}</a></li>
                                    <li><a href="{{route('customer.logout')}}" class="reg">Logout</a></li>
                                @else
                                 <li><a href="{{route('customer.login')}}" class="log">Login</a></li>
                                 <li><a href="{{route('customer.register')}}" class="reg">Register</a></li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="header_bottom navbar-fixed-top">
                    <ul class="option">
                        <li id="search" class="search">
                            <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                        </li>
                        <li class="option-cart">
                            <a href="#" class="cart-icon">cart <span class="cart_no">{{count(Session::get('cartItems'))}}</span></a>
                            <ul class="option-cart-item">
                                @if(Session::has('cartItems'))
                                    @foreach(Session::get('cartItems') as $item)
                                <li>
                                    <div class="cart-item">
                                        <div class="image"><img src="{{URL::to('images').'/'.$item['images']}}" alt=""></div>
                                        <div class="item-description">
                                            <p class="name">{{$item['name']}}</p>
                                            <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">{{$item['qty']}}</span></p>
                                        </div>
                                        <div class="right">
                                            <p class="price">{{$item['price']}}<small>vnđ</small></p>
                                            <a href="{{route('cart.remove',['id'=> $item['id']])}}" class="remove"><img src="{{URL::to('/')}}/images/remove.png" alt="remove"></a>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach
                                <li><span class="total">Total <strong>{{Session::get('grandTotal')}}</strong></span><button class="checkout" onClick="location.href='{{route('cart.view')}}'">CheckOut</button></li>
                                @else
                                    <li>Empty</li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            @foreach($category_menu as $item)
                            <li class=""><a href="{{route('category.productgird',['id'=>$item->id])}}">{{$item->name}}</a></li>
                            @endforeach
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
<div class="clearfix"></div>
<style>
    .thumbnail img, .thumbnail a img{
        height: 220px;
        max-width: 150px;
    }
</style>