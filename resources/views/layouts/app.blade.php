<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Comport</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate-3.7.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-4.7.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flat-icon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .nice-select {
            float: none;
            display: block;
            width: 100%;
            height: 40px;
            padding: 0px 20px;
        }

        .form-control {
            background-color: #f9f9ff !important;
        }

        .banner-area .banner-text {
            padding: 0px 25% 0 5%;
        }

        .section-padding {
            padding: 140px 0 100px;
        }

        .rtl {
            @php
                $local = str_replace('_', '-', app()->getLocale());
                if($local === 'ar') echo 'direction: rtl;';
                else echo 'direction: ltr;';
            @endphp
        }

        .section-padding-footer{
            padding: 20px 0px;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->


    <!-- Content -->
    @yield('contents')
    <!-- End Content -->





    <!-- Footer -->
    @include('layouts.footer')
    <!-- End Footer -->


    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"81116082f8570db7","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>