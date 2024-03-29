<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('shopping.user.login') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/shopTemplate/shopping_assets/login/css/main.css') }}">
</head>
<body>
    <div class="container-login100" id="mainContent">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                <span class="login100-form-title p-b-37">
                    {{ trans('shopping.user.signIn') }}
                </span>

                {{ csrf_field() }}

                <div class="wrap-input100 validate-input m-b-20" data-validate="{{ trans('shopping.user.errorEmail') }}">
                    <input class="input100" type="text" name="email" placeholder="{{ trans('shopping.user.email') }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "{{ trans('shopping.user.errorPass') }}">
                    <input class="input100" type="password" name="password" placeholder="{{ trans('shopping.user.password') }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        {{ trans('shopping.user.signIn') }}
                    </button>
                </div>

                <div class="text-center p-t-57 p-b-20">
                    <span class="txt1">
                        {{ trans('shopping.user.loginWith') }}
                    </span>
                </div>

                <div class="flex-c p-b-112">
                    <a href="#" class="login100-social-item">
                        <i class="fa fa-facebook-f"></i>
                    </a>

                    <a href="#" class="login100-social-item">
                        <img src="{{ asset('bower_components/shopTemplate/shopping_assets/login/images/icons/icon-google.png') }}" alt="GOOGLE">
                    </a>
                </div>

                <div class="text-center">
                    <a href="{{ route('register') }}" class="txt2 hov1">
                        {{ trans('shopping.user.signUp') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('bower_components/shopTemplate/shopping_assets/login/js/main.js') }}"></script>

</body>
</html>
