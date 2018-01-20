@extends('frontend.master')
@section('breadcrumbs')
    @include('frontend.breadcrumbs')
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
                    <div class="products-details">
                        @if(Session::has('thongbao'))
                            <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                         @endif
                        <div class="preview_image">
                            <div class="preview-small">
                                <img width="100%" height="100%" id="zoom_01" src='{{ URL::to('images').'/'.$product->images_zoom}}' data-zoom-image="{{ URL::to('images').'/'.$product->images_zoom}}"/>
                            </div>
                        </div>
                        <div class="products-description">
                            <h5 class="name">
                                {{$product->name}}
                            </h5>
                            <p>
                                <img alt="" src="{{ URL::to('/')}}/images/star.png">
                                <a class="review_num" href="#">
                                    {{count($commentProduct)}} Review(s)
                                </a>
                            </p>
                            <p>
                                Availability:
                    <span class=" light-red">
                      In Stock
                    </span>
                            </p>
                            <p>
                               <?php echo $product->short_description ?>
                            </p>
                            <hr class="border">
                            <div class="price">
                                Price :
                    <span class="new_price">
                      {{$product->price}}
                      <sup>
                        vnđ
                      </sup>
                    </span>
                    <span class="old_price">
                      {{$product->price + $product->price * 0.14}}
                      <sup>
                        vnđ
                      </sup>
                    </span>
                            </div>
                            <hr class="border">
                            <div class="wided">
                                <form method="post" action="{{route('cart.add')}}">
                                    {{csrf_field()}}
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="qty">
                                    Qty &nbsp;&nbsp;:
                                    <select name="qty">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <button class="button" type="submit">
                                        Add To Cart
                                    </button>
                                </div>
                                </form>
                                <div class="button_group">
                                    <button class="button compare">
                                        <i class="fa fa-exchange">
                                        </i>
                                    </button>
                                    <button class="button favorite">
                                        <i class="fa fa-heart-o">
                                        </i>
                                    </button>
                                    <button class="button favorite">
                                        <i class="fa fa-envelope-o">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <hr class="border">
                            <img src="{{ URL::to('/')}}/images/share.png" alt="" class="pull-right">
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="tab-box">
                        <div id="tabnav">
                            <div class="tab">
                                <div class="container" style="padding-left: 0px">
                                <button class="tablinks" onclick="openCity(event, 'Descraption')" id="defaultOpen">DESCRIPTION</button>
                                <button class="tablinks" onclick="openCity(event, 'Reviews')">COMMENT</button>
                                <button class="tablinks" onclick="openCity(event, 'Tags')">PRODUCT TAGS</button>
                                    </div>
                            </div>
                        </div>
                        <div id="Descraption" class="tabcontent">
                            <p><?php echo $product->description?></p>
                        </div>

                        <div id="Reviews" class="tabcontent">
                            <form method="post" action="{{route('comment.add')}}">
                                {{csrf_field()}}
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            &nbsp;
                                        </th>
                                        <th>
                                            <i class="fa fa-star light-red"/>
                                        </th>
                                        <th>
                                            <i class="fa fa-star light-red"/> <i class="fa fa-star light-red"/>
                                        </th>
                                        <th>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                        </th>
                                        <th>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                        </th>
                                        <th>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                            <i class="fa fa-star light-red"/>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Quality
                                        </td>
                                        <td>
                                            <input type="radio" name="vote" value="1" required/>
                                        </td>
                                        <td>
                                            <input type="radio" name="vote" value="2" required/>
                                        </td>
                                        <td>
                                            <input type="radio" name="vote" value="3" required/>
                                        </td>
                                        <td>
                                            <input type="radio" name="vote" value="4" required/>
                                        </td>
                                        <td>
                                            <input type="radio" name="vote" value="5" required checked/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-row">
                                            <label class="lebel-abs">
                                                Your Name
                                                <strong class="red">
                                                    *
                                                </strong>
                                            </label>
                                            <input type="text" name="name" class="input namefild" value="<?php echo (Auth::check()) ? Auth::user()->name: '' ?>" required>
                                        </div>
                                        <div class="form-row">
                                            <label class="lebel-abs">
                                                Your Email
                                                <strong class="red">
                                                    *
                                                </strong>
                                            </label>
                                            <input type="email" name="email" class="input emailfild" value="<?php echo (Auth::check()) ? Auth::user()->email: '' ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-row">
                                            <label class="lebel-abs">
                                                Your Comment
                                                <strong class="red">
                                                    *
                                                </strong>
                                            </label>
                            <textarea class="input textareafild" name="comment" rows="3" required>
                            </textarea>
                                        </div>
                                        <input type="hidden" name="productId" value="{{$product->id}}">
                                        <div class="form-row">
                                            <input type="submit" value="Submit" class="button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="Tags" class="tabcontent">
                            <h3>Tag</h3>
                            <p>Tag Content</p>
                        </div>
                        <div class="tab-content" >
                            @foreach($commentProduct as $cm)
                                <div class="review">
                                    <div class="pull-left">
                                        <img src="{{URL::to('images')}}/message.png" class="img-circle" alt="User Image">
                                    </div>
                                    <?php
                                       $rate = (int)$cm->vote;
                                        if($rate > 5 || $rate <= 0) $rate = 5;
                                       $no_rate = 5 - $rate;
                                     ?>
                                    <p class="rating">
                                        @for($i = 1 ; $i <= $rate; $i++)
                                            <i class="fa fa-star light-red"></i>
                                        @endfor
                                        @for($i = 1 ;$i <= $no_rate; $i++)
                                            <i class="fa fa-star-o gray"></i>
                                        @endfor
                                    </p>
                                    <h5 class="reviewer">
                                        {{$cm->name}}
                                    </h5>
                                    <p class="review-date">
                                       <?php
                                            $created_at = Carbon\Carbon::parse($cm->created_at);
                                            echo $created_at->format('d-m-Y');
                                       ?>
                                    </p>
                                    <p>
                                       {{$cm->description}}
                                    </p>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="clearfix">
                    </div>
            <div class="clearfix">
            </div>
            @include('frontend.our_brand')
        </div>
    </div>
    <div class="clearfix">
    </div>
    <script>
        function openCity(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        $('#zoom_01').elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });
    </script>
    <style>
        /* Style the tab */
        div.tab {
            overflow: hidden;
            border: 0px solid #ccc;
            background-color: #ffffff;
        }

        /* Style the buttons inside the tab */
        div.tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 15px 20px;
            transition: 0.3s;
            font-size: 18px;
            border: 1px solid #ccc;
            margin-right: 10px;
            line-height: 18px;
            border-radius: 10px;
        }

        /* Change background color of buttons on hover */
        div.tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        div.tab button.active {
            background-color: #f7544a;
            color: #ffffff;
            border-bottom: 0px solid #ccc;

        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #E1E1E1;
            border-top: none;
        }
    </style>
@stop

@section('extra_js')
    {{--<script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.elevatezoom.js" />--}}
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.carouFredSel-6.2.1-packed.js"/>
@stop
