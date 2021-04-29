@extends('layouts.masterPage')

@section('contant')
<!-- Page Title-->
<div class="rn-page-title">
    <div class="rn-pt-overlayer"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title-inner">
                    <h1>Login and Register</h1>
                    <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title-->
<br><br><br>
<div class="account_area ptb-100">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-12">
                <div class="account_form">
                    <div class="login_title">
                        <h2 style="font-weight: bold">Login</h2>
                    </div><br>
                    <div class="login_form login">
                        @if ($message = Session::get('Error'))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                        <form action="login" method="POST">
                            {{ csrf_field() }}
                            <div class="login_input">
                                <label>Email <span style="color:#F00">*</span></label>
                                <input type="email" name="emailL">
                                @if ($errors->has('emailL'))
                                <div class="text-danger">{{ $errors->first('emailL') }}</div>
                                @endif
                            </div>
                            <div class="login_input">
                                <label>Passwords <span style="color:#F00">*</span></label>
                                <input type="password" name="passwordL">
                                @if ($errors->has('passwordL'))
                                <div class="text-danger">{{ $errors->first('passwordL') }}</div>
                                @endif
                            </div>
                            <div class="login_submit">
                                <button type="submit" class="btn btn-main btn-shadow mt-15">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-12">
                <div class="login_title">
                    <h2 style="font-weight: bold">Register</h2>
                </div><br>
                <div class="login_form form_register ">
                    @if ($message = Session::get('success'))
                        <p class="alert alert-success">{{ $message }}</p>
                    @endif
                    <form action="register" method="POST">
                        {{ csrf_field() }}
                        <div class="login_input">
                            <label>Name <span style="color:#F00">*</span></label>
                            <input type="text" name="name" >
                            @if ($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div class="login_input">
                            <label>Email address <span style="color:#F00">*</span></label>
                            <input type="email" name="email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @elseif($message = Session::get('failed'))
                            <p class="text-danger">{{ $message }}</p>
                            @endif
                        </div>
                        <div class="login_input">
                            <label>password <span style="color:#F00">*</span></label>
                            <input type="password" name="password">
                            @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="login_submit">
                            <button type="submit" class="btn btn-main btn-shadow mt-15">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>

<br><br><br><br>
@endsection