<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{URL::to('/')}}/adminhtml/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('/')}}/adminhtml/bower_components/font-awesome/css/font-awesome.min.css">
    <script src="{{URL::to('/')}}/adminhtml/bower_components/jquery/dist/jquery.min.js"></script>

</head>

<body>
<div class="container">
<div id="login">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @if($messages)
            <div class="alert alert-warning">{{$messages}}</div>
        @endif
    <form action="{{route('admin.login')}}" method="post" autocomplete="off">
        {{csrf_field()}}
        <fieldset>
            <legend>Sign In Admin</legend>
            <p><input type="email" id="email" name="email" placeholder="E-mail"></p>
            <p><input type="password" id="password" name="password" placeholder="Password" autocomplete="off"></p>
            <p><input type="submit" value="Sign In"></p>
        </fieldset>
    </form>

</div> <!-- end login -->
</div>
</body>
</html>
<style>
    #login{
        text-align: center;
        margin-top: 200px;
    }
</style>
<script>
    {{--$(document).ready(function () {--}}
        {{--alert("Vui lòng đăng nhập với tk : luongmv@yahoo.com+12345678")--}}
    {{--})--}}
</script>