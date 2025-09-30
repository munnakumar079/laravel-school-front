<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- title -->
    <title>{{tittle}}</title>

    <!-- css -->
    <link rel="stylesheet" href="{{assets('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{assets('assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{assets('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{assets('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{assets('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{assets('assets/css/style.css')}}">

</head>

<body class="home-3">
    @include(common.header)

    @yield('content')

    @include('common.footer')

    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <!-- scroll-top end -->

    <!-- js -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{assets('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{assets('assets/js/modernizr.min.js')}}"></script>
    <script src="{{assets('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{assets('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{assets('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{assets('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{assets('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{assets('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{assets('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{assets('assets/js/counter-up.js')}}"></script>
    <script src="{{assets('assets/js/wow.min.js')}}"></script>
    <script src="{{assets('assets/js/main.js')}}"></script>

</body>

</html>