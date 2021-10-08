<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ isset($title) ? $title .' | '. config('app.name', 'News') : config('app.name', 'News')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   <link rel="manifest"   href="site.webmanifest">

    <link rel="shortcut icon" type="image/x-icon"  href="{{asset('front_files/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet"  href="{{asset('front_files/css/bootstrap.min.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/owl.carousel.min.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/ticker-style.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/flaticon.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/slicknav.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/animate.min.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/magnific-popup.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/themify-icons.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/slick.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/nice-select.css')}}">
    <link rel="stylesheet"  href="{{asset('front_files/css/style.css')}}">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('front_files/img/logo/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
@include('layouts.front.header')

@yield('content')

@include('layouts.front.footer')
<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<!-- JS here -->
<script  src="{{ asset('front_files/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script  src="{{ asset('front_files/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script  src="{{ asset('front_files/js/popper.min.js')}}"></script>
<script  src="{{ asset('front_files/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script  src="{{ asset('front_files/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script  src="{{ asset('front_files/js/owl.carousel.min.js')}}"></script>
<script  src="{{ asset('front_files/js/slick.min.js')}}"></script>
<!-- Date Picker -->
<script  src="{{ asset('front_files/js/gijgo.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script  src="{{ asset('front_files/js/wow.min.js')}}"></script>
<script  src="{{ asset('front_files/js/animated.headline.js')}}"></script>
<script  src="{{ asset('front_files/js/jquery.magnific-popup.js')}}"></script>

<!-- Scrollup, nice-select, sticky -->
<script  src="{{ asset('front_files/js/jquery.scrollUp.min.js')}}"></script>
<script  src="{{ asset('front_files/js/jquery.nice-select.min.js')}}"></script>
<script  src="{{ asset('front_files/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script  src="{{ asset('front_files/js/contact.js')}}"></script>
<script  src="{{ asset('front_files/js/jquery.form.js')}}"></script>
<script  src="{{ asset('front_files/js/jquery.validate.min.js')}}"></script>
<script  src="{{ asset('front_files/js/mail-script.js')}}"></script>
<script  src="{{ asset('front_files/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script  src="{{ asset('front_files/js/plugins.js')}}"></script>
<script  src="{{ asset('front_files/js/main.js')}}"></script>

</body>
</html>
