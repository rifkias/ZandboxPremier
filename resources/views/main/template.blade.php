<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digincy - Corporate Business HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo/logo.png')}}">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,600,700,800,900%7CRoboto:300,300i,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/css/vendor/bootstrap.min.css')}}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('template/css/vendor/font-awesome.min.css')}}">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="{{asset('template/css/plugins/slick.min.css')}}">
    <!-- Odometer css -->
    <link rel="stylesheet" href="{{asset('template/css/plugins/odometer.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('template/css/plugins/animate.css')}}">
    <!-- main style css -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

</head>

<body>
    <!-- Start Header Area -->
   @include('main.header')
    <!-- end Header Area -->
    <main>
       @yield('main')
    </main>

    <!-- footer section start -->
   @include('main.footer')
    <!-- footer section end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->


    <!-- All JS Plugin Include Here -->

    <!-- Modernizer JS -->
    <script src="{{asset('template/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('template/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('template/js/vendor/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('template/js/vendor/bootstrap.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('template/js/plugins/wow.min.js')}}"></script>
    <!-- slick Slider JS -->
    <script src="{{asset('template/js/plugins/slick.min.js')}}"></script>
    <!-- odometer js -->
    <script src="{{asset('template/js/plugins/odometer.min.js')}}"></script>
    <!-- appear js -->
    <script src="{{asset('template/js/plugins/appear.min.js')}}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
    <!-- google map active js -->
    <script src="{{asset('template/js/plugins/google-map.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>
