<!DOCTYPE html>
<html lang="en">
<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Imperium Branding">
    <meta name="robots" content="">
    <meta name="keywords"
          content="agency, agriculture, business, construction, farmer shop, florist, garden, gardeners, gardening, gardner, groundskeeper, landscape architects, landscaper, landscaping, lawn services">
    <meta name="description"
          content="GardenZone is a clean and mobile responsive HTML gardening template, very easy to customize according to gardening types or any other business also can use it.">
    <meta property="og:title" content="Imperium Branding">
    <meta property="og:description"
          content="GardenZone is a clean and mobile responsive HTML gardening template, very easy to customize according to gardening types or any other business also can use it.">
    <meta property="og:image" content="https://gardenzone.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- PAGE TITLE HERE -->
    <title>Imperium Branding</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('website/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('website/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/templete.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/plugins/revolution/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('website/plugins/revolution/revolution/css/navigation.css') }}">


</head>
<body id="bg">
{{--<div id="loading-area"></div>--}}
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header header-style-4 style-1 mo-left">
        <div class="bg-white">
            <div class="container header-contant-block">
                <div class="row">
                    <div class="col-xl-4 col-lg-3">
                        <div class="logo-header "><a href="index.html"><img src="{{asset('logo/logo-01 copy.png')}}"
                                                                            width="193"
                                                                            height="89" alt=""></a></div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <ul class="contact-info clearfix">
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <h4 class="m-a0"> Call Us</h4>
                                <span>+263 242 255453, +263 773 937032</span></li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <h4 class="m-a0"> Send us an Email</h4>
                                <span>sales@imperium.co.zw</span>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                <h4 class="m-a0">Opening Time</h4>
                                <span>Mon -Sat: 8:00 - 17:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="slide-up">
                    <div class="container clearfix bg-primary">
                        <!-- website logo -->
                        <div class="logo-header mostion"><a href="index.html"><img src="images/logo-white-2.png"
                                                                                   width="193" height="89" alt=""></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button bg-success-dark"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Quik search -->
                        <div class="dez-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control"
                                       placeholder="Type to search">
                                <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                            </form>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>

                                @foreach(\App\Models\Category::all() as $category)
                                    <li><a href="{{url('/sub_categories/'.$category->id)}}">{{$category->name}}<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            @foreach($category->sub_categories as $sub_category)
                                                <li><a href="{{url('/products/'.$sub_category->id)}}">{{$sub_category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach

                                <li><a href="{{url('/about_us')}}">About Us</a></li>
                                <li><a href="{{url('/contact_us')}}">Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    @yield('content')
    <!-- Footer -->
    <footer class="site-footer">
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="images/logo-light.png" alt=""></div>
                            <p><strong>Imperium Branding</strong> description comes here for imperium
                            </p>
                            <ul class="dez-social-icon">
                                <li class="border"><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                <li class="border"><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                                <li class="border"><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                                <li class="border"><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Our services</h4>
                            <div class="dez-separator-outer m-b10">
                                <div class="dez-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                @foreach(\App\Models\Category::all() as $category)
                                    <li><a href="services-1.html">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Contact us</h4>
                            <div class="dez-separator-outer m-b10">
                                <div class="dez-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i><strong>address</strong> address comes here

                                </li>
                                <li><i class="fas fa-phone-alt"></i><strong>Telephone</strong>+263 242 255453
                                </li>
                                <li><i class="fa fa-mobile"></i><strong>Mobile</strong>+263 773 937032</li>
                                <li><i class="fa fa-envelope"></i><strong>email</strong>sales@imperium.co.zw</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><span>© copyright {{date('Y')}}  by Imperium Branding. All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript files ========================================= -->
<script src="{{ asset('website/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('website/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('website/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('website/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('website/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('website/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('website/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->

<script src="{{ asset('website/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('website/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('website/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('website/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('website/plugins/lightgallery/js/lightgallery-all.js') }}"></script><!-- LIGHT GALLERY -->
<script src="{{ asset('website/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('website/js/dz.carousel.js') }}"></script><!-- CUSTOM FUNCTIONS  -->
<script src="{{ asset('website/js/custom.js') }}"></script><!-- CUSTOM FUNCTIONS  -->
<!-- Revolution JS FILES -->
<script src="{{ asset('website/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('website/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions (Load Extensions only on Local File Systems! The following part can be removed on Server for On-Demand Loading) -->
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script
    src="{{ asset('website/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('website/js/rev.slider.js') }}"></script>

<script>
    jQuery(document).ready(function () {
        'use strict';
        dz_rev_slider_2();
    });	/*ready*/
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f413aeccc6a6a5947adecaa/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
