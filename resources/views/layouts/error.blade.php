<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans('manager.layout.Error') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bower_components/shopTemplate/manager_assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('bower_components/shopTemplate/manager_assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('bower_components/shopTemplate/manager_assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('bower_components/shopTemplate/manager_assets/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="col-md-12">
                <div class="col-middle">
                  <div class="text-center text-center">
                      <h1 class="error-number">404</h1>
                          <h2>{{ trans('manager.layout.errorPage') }}</h2>
                      <p>{{ trans('manager.layout.noPage') }}</p>
                  </div>
                </div>
            </div>
        <!-- /page content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('bower_components/shopTemplate/manager_assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('bower_components/shopTemplate/manager_assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('bower_components/shopTemplate/manager_assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('bower_components/shopTemplate/manager_assets/vendors/nprogress/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('bower_components/shopTemplate/manager_assets/build/js/custom.min.js') }}"></script>
</body>
</html>
