<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
    @include('frontend.header')
    @yield('slider')
    @yield('content')
    @include('frontend.footer')

    <!-- END CONTAINER -->
    <!-- BEGIN CORE JS FRAMEWORK-->

    {{--<script src="{{ URL::to('/') }}/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>--}}
    {{--<script src="{{ URL::to('/') }}/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>--}}
    <!-- END CORE JS FRAMEWORK -->
    <!-- BEGIN PAGE LEVEL JS -->

    @yield('extra_js')
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN CORE TEMPLATE JS -->

    <!-- END CORE TEMPLATE JS -->
</body>
</html>