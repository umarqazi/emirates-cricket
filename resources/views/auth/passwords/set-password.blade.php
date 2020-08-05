<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>User Forgot Password | Admin Panel</title>
    <link rel="apple-touch-icon" href="{{URL::asset('backend/assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('backend/assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/forgot.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/custom.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 1-column forgot-bg  blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container">
            <div id="forgot-password" class="row">
                <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
                    <form class="login-form" method="POST" action="{{ route('storePassword') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ empty($token) ? '' : $token }}">

                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">Set Password</h5>

                                @if(session()->has('success'))
                                    <div class="card-alert card green">
                                        <div class="card-content white-text">
                                            <p>{{ session()->get('success') }}</p>
                                        </div>
                                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email" class="center-align">{{ __('E-Mail Address') }}</label>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password">
                                <label for="password" class="center-align">{{ __('Password') }}</label>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="email">
                                <label for="password-confirm" class="center-align">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1">
                                    Set Password
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <b><p class="margin medium-small"><a href="{{route('login')}}">Login</a></p></b>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                {{--                                <p class="margin right-align medium-small"><a href="user-register.html">Register</a></p>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN VENDOR JS-->
<script src="{{URL::asset('backend/assets/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{URL::asset('backend/assets/js/plugins.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('backend/assets/js/custom-script.js')}}" type="text/javascript"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>
