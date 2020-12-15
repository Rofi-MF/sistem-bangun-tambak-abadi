<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>HRMS</title>

    <!-- Favicons -->
{{--    <link href="{{asset('img/favicon.png')}}" rel="icon">--}}
{{--    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">--}}

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

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
        <form class="form-login" action="{{url('/register')}}" method="post">
            @csrf
            <h2 class="form-login-heading">Register</h2>
            <div class="login-wrap">
                <div class="form-group @error('nip') has-error @enderror">
                    <p>NIK</p>
                    <input type="text" name="nip" placeholder="NIK" autocomplete="off"
                           class="form-control placeholder-no-fix" value="{{old('nip')}}">
                    @error('nip') <span class="help-block has-error">{{$message}}</span> @enderror
                </div>
                <div class="form-group @error('username') has-error @enderror">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Username" autocomplete="off"
                           class="form-control placeholder-no-fix" value="{{old('username')}}">
                    @error('username') <span class="help-block has-error">{{$message}}</span> @enderror
                </div>
                <div class="form-group @error('password') has-error @enderror">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password" autocomplete="off"
                           class="form-control placeholder-no-fix">
                    @error('password') <span class="help-block has-error">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <p>Password Confirmation</p>
                    <input type="password" name="password_confirmation" placeholder="Password Confirmation"
                           autocomplete="off" class="form-control placeholder-no-fix">
                </div>
                <button class="btn btn-theme btn-block" type="submit">REGISTER</button>
                <a class="btn btn-warning btn-block" href="{{url('/login')}}" data-toggle="modal">BACK</a>
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
</script>
</body>

</html>
