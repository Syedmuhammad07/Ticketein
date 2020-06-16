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
                    <a class="nav-link " href="{{ url('/logout') }}"><i class='fa fa-sign-out'></i> Logout</a>
                </li>
                
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

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="{{asset('/assets/img/bg/bg-img.png')}}">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        Welcome {{ Auth::user()->name}}
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="#"><span>Home</span></a></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<!--event calender-->
<section class="pb100">
    <div class="container" style="margin-top:100px">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <i class="ion-ios-calendar-outline"></i>
                        <span>Your Events</span>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
				@if(count($events) > 0)
				@foreach($events as $event)
				  <tr>
                    <td>
                         <img src="{{asset('/assets/img/cleander/c2.png')}}" alt="event">
                    </td>
					<td class="event_date">
						{{date('d',strtotime($event->date))}}
                        <span>{{date('M',strtotime($event->date))}}</span>
                    </td>
					<td>
                        <div class="event_place">
                            <h5>{{$event->name}}</h5>
                            <h6>{{$event->time}}</h6>
                        </div>
					</td>
					<td class="event_date">
						{{$event->tickets}}
                        <span>seats remaining</span>
                    </td>
					
                    
				</tr>
				@endforeach
			   @else
				 <tr>
                    <td></td>
					<td >
						You have not signed up for any event yet
                    </td>
					<td></td>
					<td></td>
				</tr>
				@endif
			   
               </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->



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