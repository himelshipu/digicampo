<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DIGICAMPO </title>
    <!-- Font Icons -->
    <link media="all" rel="stylesheet" href="{{ asset('template/css/fonts/icomoon/icomoon.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/css/fonts/roxine-font-icon/roxine-font.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/font-awesome/css/font-awesome.css') }}">
    <!-- Vendors -->
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/owl-carousel/dist/assets/owl.carousel.min.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/animate/animate.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/rateyo/jquery.rateyo.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/fancyBox/source/jquery.fancybox.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('template/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css') }}">
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendors/rev-slider/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendors/rev-slider/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendors/rev-slider/revolution/css/navigation.css') }}">
    <!-- Theme CSS -->
    <link  rel="stylesheet" href="{{ asset('template/css/main.css') }}">
    <!-- Custom CSS -->
    <link  rel="stylesheet" href="{{ asset('template/css/custom.css') }}">
</head>
<body>



<div id="wrapper">
    <div class="page-wrapper">
            @include('layouts.header')
            <main class="no-banner">
             @yield('content')
            </main>
            @include('layouts.footer')
    </div>
</div>

<div class="search-form-wrapper">
    <a href="#" class="nav-search-link close"><span class="icon-android-close"></span></a>
    <div class="holder">
        <input type="search" class="form-control form-control-v1" placeholder="Enter Your Search">
        <button type="submit"><span class="custom-icon-search"></span></button>
    </div>
</div>
<a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>

<script src="{{ asset('template/vendors/jquery/jquery-2.1.4.min.js') }}"></script>
<!-- external scripts -->

<script src="{{ asset('template/vendors/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('template/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/vendors/stellar/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('template/vendors/isotope/javascripts/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('template/vendors/isotope/javascripts/packery-mode.pkgd.js') }}"></script>
<script src="{{ asset('template/vendors/owl-carousel/dist/owl.carousel.js') }}"></script>
<script src="{{ asset('template/vendors/waypoint/waypoints.min.js') }}"></script>
<script src="{{ asset('template/vendors/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('template/vendors/fancyBox/source/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('template/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
<script src="{{ asset('template/vendors/image-stretcher-master/image-stretcher.js') }}"></script>
<script src="{{ asset('template/vendors/wow/wow.min.js') }}"></script>
<script src="{{ asset('template/vendors/rateyo/jquery.rateyo.js') }}"></script>
<script src="{{ asset('template/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('template/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js') }}"></script>
<script src="{{ asset('template/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('template/js/mega-menu.js') }}"></script>
<!-- custom jquery script -->
<script src="{{ asset('template/js/jquery.main.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- SNOW ADD ON -->
<script type="text/javascript" src="{{ asset('template/vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js') }}"></script>
<!-- revolutions slider script -->
<script src="{{ asset('template/js/revolution.js') }}"></script>
</body>

</html>
