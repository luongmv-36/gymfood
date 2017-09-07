<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png">
    <title>Welcome to FlatShop</title>
    <link href="{{ URL::to('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="{{ URL::to('/') }}/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/flexslider.css" type="text/css" media="screen"/>
    <link href="{{ URL::to('/') }}/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
    <link href="{{ URL::to('/') }}/css/style.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/css/luong.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.elevatezoom.js" ></script>

    @yield('extra_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body style="" id="home">
<!-- BEGIN CONTENT -->
    @include('frontend.header')
    @yield('breadcrumbs')
    @yield('slider')
    @yield('content')
    @include('frontend.footer')
<!-- END CONTENT -->
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.sequence-min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script defer src="{{ URL::to('/') }}/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/script.min.js" ></script>
    @yield('extra_js')
</body>
</html>