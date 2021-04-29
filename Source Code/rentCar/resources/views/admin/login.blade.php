<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link
    rel="stylesheet"
    href="{{asset('adminAssets/vendor/bootstrap/css/bootstrap.min.css')}}"
  />
  <link href="{{asset('adminAssets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('adminAssets/libs/css/style.css')}}" />

  <link
    rel="stylesheet"
    href="{{asset('adminAssets/vendor/charts/chartist-bundle/chartist.css')}}"
  />
  <link
    rel="stylesheet"
    href="{{asset('adminAssets/vendor/charts/morris-bundle/morris.css')}}"
  />
  <link
    rel="stylesheet"
    href="{{asset('adminAssets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}"
  />
  <link rel="stylesheet" href="{{asset('adminAssets/vendor/charts/c3charts/c3.css')}}" />
  <link
    rel="stylesheet"
    href="{{asset('adminAssets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}"
  />
  <link rel="stylesheet" href="{{asset('adminAssets/mycss.css')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="{{asset('adminAssets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('adminAssets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('adminAssets/libs/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('adminAssets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}"/>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <span style="background-color: #0E0C28;font-size: 41px; font-family: initial;">
                    <a style="color: #FFF" href="{{asset('/admin')}}"><span style="color: #42DB0C">RENT</span>NOW</a> </span>
                <span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                @if ($message = Session::get('Error'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <form action="loginAdmin" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" type="email" placeholder="Email" autocomplete="off">
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('adminAssets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
</html>