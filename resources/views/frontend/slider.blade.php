<div class="hom-slider" xmlns="http://www.w3.org/1999/html">
    <div class="container" style="padding-right: 0px;padding-left: 0px">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <a href="#" title="XXXX">
                    <img src="{{ URL::to('/') }}/images/slider/slider_1.jpg" title="YYYY"/>
                    </a>
                </li>
                <li>
                    <img src="{{ URL::to('/') }}/images/slider/slider_2.jpg" />
                </li>
                <li>
                    <p class="flex-caption">Text Over Slide 3</p>
                    <img src="{{ URL::to('/') }}/images/slider/slider_3.jpg" />
                </li>
            </ul>
        </div>
    </div>
</div>


<style>
    .flex-caption {
        background: tomato;
        color: white;
        position: absolute;
        bottom: 0;
        padding: 1em;
    }
    .flexslider .slides img{
        width: auto;
        display: block;
        float: right;
        max-width: 100%;
    }
</style>