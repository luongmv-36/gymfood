@extends('frontend.master')
@section('breadcrumbs')
    @include('frontend.breadcrumbs')
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="products-details">
                        <div class="preview_image">
                            <div class="preview-small">
                                <img id="zoom_03" src="{{ URL::to('/')}}/images/products/medium/products-01.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-01.jpg" alt="">
                            </div>
                            <div class="thum-image">
                                <ul id="gallery_01" class="prev-thum">
                                    <li>
                                        <a href="#" data-image="{{ URL::to('/')}}/images/products/medium/products-01.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-01.jpg">
                                            <img src="{{ URL::to('/')}}/images/products/thum/products-01.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-image="{{ URL::to('/')}}/images/products/medium/products-01.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-01.jpg">
                                            <img src="{{ URL::to('/')}}/images/products/thum/products-01.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-image="{{ URL::to('/')}}/images/products/medium/products-02.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-02.jpg">
                                            <img src="{{ URL::to('/')}}/images/products/thum/products-02.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-image="images/products/medium/products-03.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-03.jpg">
                                            <img src="{{ URL::to('/')}}/images/products/thum/products-03.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-image="images/products/medium/products-04.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-04.jpg">
                                            <img src="{{ URL::to('/')}}/images/products/thum/products-04.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-image="images/products/medium/products-05.jpg" data-zoom-image="{{ URL::to('/') }}/images/products/large/products-05.jpg">
                                            <img src="{{ URL::to('/')}}/images/products/thum/products-05.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                                <a class="control-left" id="thum-prev" href="javascript:void(0);">
                                    <i class="fa fa-chevron-left">
                                    </i>
                                </a>
                                <a class="control-right" id="thum-next" href="javascript:void(0);">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="products-description">
                            <h5 class="name">
                                Lincoln Corner Unit Products
                            </h5>
                            <p>
                                <img alt="" src="{{ URL::to('/')}}/images/star.png">
                                <a class="review_num" href="#">
                                    02 Review(s)
                                </a>
                            </p>
                            <p>
                                Availability:
                    <span class=" light-red">
                      In Stock
                    </span>
                            </p>
                            <p>
                                Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrie ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulps utate, tristique ut lectus. Sed et lorem nunc...
                            </p>
                            <hr class="border">
                            <div class="price">
                                Price :
                    <span class="new_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                    <span class="old_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                            </div>
                            <hr class="border">
                            <div class="wided">
                                <div class="qty">
                                    Qty &nbsp;&nbsp;:
                                    <select>
                                        <option>
                                            1
                                        </option>
                                        <option>
                                            2
                                        </option>
                                    </select>
                                </div>
                                <div class="button_group">
                                    <button class="button" >
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
                                <button class="tablinks" onclick="openCity(event, 'Reviews')">REVIEW</button>
                                <button class="tablinks" onclick="openCity(event, 'Tags')">PRODUCT TAGS</button>
                                    </div>
                            </div>
                        </div>
                        <div id="Descraption" class="tabcontent">
                            <h3>London</h3>
                            <p>London is the capital city of England.</p>
                        </div>

                        <div id="Reviews" class="tabcontent">
                            <form>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            &nbsp;
                                        </th>
                                        <th>
                                            1 star
                                        </th>
                                        <th>
                                            2 stars
                                        </th>
                                        <th>
                                            3 stars
                                        </th>
                                        <th>
                                            4 stars
                                        </th>
                                        <th>
                                            5 stars
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Quality
                                        </td>
                                        <td>
                                            <input type="radio" name="quality" value="Blue"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="quality" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="quality" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="quality" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="quality" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Price
                                        </td>
                                        <td>
                                            <input type="radio" name="price" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="price" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="price" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="price" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="price" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Value
                                        </td>
                                        <td>
                                            <input type="radio" name="value" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="value" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="value" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="value" value="">
                                        </td>
                                        <td>
                                            <input type="radio" name="value" value="">
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
                                            <input type="text" name="" class="input namefild">
                                        </div>
                                        <div class="form-row">
                                            <label class="lebel-abs">
                                                Your Email
                                                <strong class="red">
                                                    *
                                                </strong>
                                            </label>
                                            <input type="email" name="" class="input emailfild">
                                        </div>
                                        <div class="form-row">
                                            <label class="lebel-abs">
                                                Summary of You Review
                                                <strong class="red">
                                                    *
                                                </strong>
                                            </label>
                                            <input type="text" name="" class="input summeryfild">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-row">
                                            <label class="lebel-abs">
                                                Your Name
                                                <strong class="red">
                                                    *
                                                </strong>
                                            </label>
                            <textarea class="input textareafild" name="" rows="7" >
                            </textarea>
                                        </div>
                                        <div class="form-row">
                                            <input type="submit" value="Submit" class="button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="Tags" class="tabcontent">
                            <h3>Tokyo</h3>
                            <p>Tokyo is the capital of Japan.</p>
                        </div>
                        <div class="tab-content" >
                            <div class="review">
                                <p class="rating">
                                    <i class="fa fa-star light-red">
                                    </i>
                                    <i class="fa fa-star light-red">
                                    </i>
                                    <i class="fa fa-star light-red">
                                    </i>
                                    <i class="fa fa-star-half-o gray">
                                    </i>
                                    <i class="fa fa-star-o gray">
                                    </i>
                                </p>
                                <h5 class="reviewer">
                                    Reviewer name
                                </h5>
                                <p class="review-date">
                                    Date: 01-01-2014
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                                </p>
                            </div>
                            <div class="review">
                                <p class="rating">
                                    <i class="fa fa-star light-red">
                                    </i>
                                    <i class="fa fa-star light-red">
                                    </i>
                                    <i class="fa fa-star light-red">
                                    </i>
                                    <i class="fa fa-star-half-o gray">
                                    </i>
                                    <i class="fa fa-star-o gray">
                                    </i>
                                </p>
                                <h5 class="reviewer">
                                    Reviewer name
                                </h5>
                                <p class="review-date">
                                    Date: 01-01-2014
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clearfix">
                    </div>
                    <div class="fbl-box leftbar">
                        <h3 class="title">
                            Facebook
                        </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="{{ URL::to('/')}}/images/fblike.png" alt="">
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
                      <img src="{{ URL::to('/')}}/images/fbicon.png" alt="">
                    </span>
                                Facebook social plugin
                            </a>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
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
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.elevatezoom.js" />
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.carouFredSel-6.2.1-packed.js"/>
@stop
