<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>CV Bangun Tambak Abadi</title>

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <link href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<div id="login-page">
    <div class="container">
        <form class="form-login" action="{{url('/login')}}" method="post">
            @csrf
            <h2 class="form-login-heading">
{{--                <img src="{{asset('img/hrd-white.png')}}" alt="" width="150px" height="70px">--}}
                <p style="font-size: 24px">CV Bangun Tambak Abadi</p>
            </h2>
            <div class="login-wrap">
                @if(session('msg'))
                    <div class="form-group has-error" align="center">
                        <p class="login-box-msg help-block"> {{session('msg')}} </p>
                    </div>
                @endif
                <div class="form-group @error('username') has-error @enderror">
                    <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" autofocus>
                    @error('username') <span class="help-block has-error">{{$message}}</span> @enderror
                </div>
                <div class="form-group @error('password') has-error @enderror">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @error('password') <span class="help-block has-error">{{$message}}</span> @enderror
                </div>
{{--                <label class="checkbox">--}}
{{--                    <span class="pull-right">--}}
{{--                            <a data-toggle="modal" href="#"> Forgot Password?</a>--}}
{{--                    </span>--}}
{{--                </label>--}}
                <button class="btn btn-theme btn-block" type="submit">LOGIN</button>
{{--                <a class="btn btn-warning btn-block" href="{{url('/register')}}">REGISTER</a>--}}
            </div>
        </form>
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{asset('lib/jquery.backstretch.min.js')}}"></script>
<script>
    $.backstretch("img/login-bg.jpg", {
        speed: 500
    });

    if ('{{Session::has('swal')}}') {
        swal({
            title: '{{Session::get('swal')}}',
            type: 'success',
            timer: '1200'
        })
    }
</script>
</body>

</html>
