<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Event booking</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{asset('/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/et-line.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{asset('/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('/assets/css/main.css')}}" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
         <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
			@if(!Auth::user())
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/login') }}"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/register') }}">Signup</a>
                </li>
			@else
				<li class="nav-item">
                    <a class="nav-link active" href="{{ url('/home') }}"><i class='fa fa-home'></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/view/events') }}">View Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/create/event') }}"><i class='fa fa-calendar-plus-o'></i> Create Events</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link " href="{{ url('/checkout') }}"><i class='fa fa-shopping-cart'></i></a>
                </li>
				<li class="nav-item">
                    <a class="nav-link " href="{{ url('/checkout') }}"><i class='fa fa-shopping-cart'></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/logout') }}"><i class='fa fa-sign-out'></i> Logout</a>
                </li>
			@endif
                <li class="search_btn">
                    <a  href="#">
                       <i class="ion-ios-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item" style="background: url('{{ asset('assets/img/bg/slider.png') }}');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Prepare yourself for the
                            </h2>
                            <strong class="cover-xl-text">Experience</strong>
                            <p class="cover-date">
                                12-14 july 2020 .
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('{{asset('assets/img/bg/bg-3.jpg') }}');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-left">
                            <h2 class="cover-title">
                                Join the 
                            </h2>
                            <strong class="cover-xl-text">Art Exhibition</strong>
                            <p class="cover-date">
                                10-12 August 2020  - Stadium Road.
                            </p>
                            <a href="{{url('/view/events')}}" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('{{asset('assets/img/bg/slider.png') }}');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Prepare yourself for the
                            </h2>
                            <strong class="cover-xl-text">Experience</strong>
                            <p class="cover-date">
                                12-14 February 2018  - Los Angeles, CA.
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0"><span>1</span></li>
            <li  data="1"><span>2</span></li>
            <li  data="2"><span>3</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->



<!--event countdown -->
<section class="bg-img pt70 pb70" style="background-image:url('{{ asset('assets/img/bg/bg-img.png') }}');">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Counter until the big event</h4>
                <div class="countdown"></div>
            </div>
        </div>
    </div>
</section>
<!--event count down end-->


<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About the event
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    In rhoncus massa nec  sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                </p>
            </div>
        </div>

        <!--event features-->
        <div class="row justify-content-center mt30">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-mic"></i>
                    <div class="content">
                        <h4>9 Speakers</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-rocket"></i>
                    <div class="content">
                        <h4>8 hrs Marathon</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-bullhorn"></i>
                    <div class="content">
                        <h4>Live Broadcast</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-clock"></i>
                    <div class="content">
                        <h4>Early Bird</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!--event features end-->
    </div>
</section>
<!--about the event end -->

<!--brands section -->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                our partners
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="{{asset('/assets/img/brands/b1.png')}}" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="{{asset('/assets/img/brands/b2.png')}}" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="{{asset('/assets/img/brands/b3.png')}}" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="{{asset('/assets/img/brands/b4.png')}}" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="{{asset('/assets/img/brands/b5.png')}}" alt="brand">
            </div>
        </div>
    </div>
</section>
<!--brands section end-->

<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('{{ asset('assets/img/bg/tickets.png') }}');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                GEt your tikets
            </h3>
        </div>
        
    </div>
</section>
<!--get tickets section end-->

<!--footer start -->
<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_box_body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="{{asset('/assets/img/cleander/c1.png')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/assets/img/cleander/c2.png')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/assets/img/cleander/c3.png')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/assets/img/cleander/c3.png')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/assets/img/cleander/c2.png')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/assets/img/cleander/c1.png')}}" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            subscribe to our newsletter
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <input type="email" class="form-control" placeholder="E-Mail here">
                            <button class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Speakers</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('/assets/js/popper.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/waypoints.min.js')}}"></script>
<!--slick carousel -->
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<!--parallax -->
<script src="{{asset('/assets/js/parallax.min.js')}}"></script>
<!--Counter up -->
<script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
<!--Counter down -->
<script src="{{asset('/assets/js/jquery.countdown.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset('/assets/js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>