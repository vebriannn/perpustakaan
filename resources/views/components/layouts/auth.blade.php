<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/admin/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/admin/modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/components.css') }}">
</head>
<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('assets/admin/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>
                            {{ $slot }}
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="auth-register.html">Create One</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/admin/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
</body>
</html>
