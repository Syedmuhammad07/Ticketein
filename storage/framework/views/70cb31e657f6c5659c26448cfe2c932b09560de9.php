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
    <link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="<?php echo e(asset('/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/assets/css/et-line.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/assets/css/ionicons.min.css')); ?>" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="<?php echo e(asset('/assets/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/assets/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/animate.min.css')); ?>">
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('/assets/css/main.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md sticky_header">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(url('/home')); ?>"><i class='fa fa-home'></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/view/events')); ?>">View Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/create/event')); ?>"><i class='fa fa-calendar-plus-o'></i> Create Events</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/checkout')); ?>"><i class='fa fa-shopping-cart'></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('/logout')); ?>"><i class='fa fa-sign-out'></i> Logout</a>
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

<!--event calender-->
<section class="pb100">
    <div class="container" style="margin-top:100px">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <i class="ion-ios-calendar-outline"></i>
                        <span>Your events</span>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
				<?php if(count($events) > 0): ?>
				<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <tr>
                    <td>
                         <img src="<?php echo e(asset('/assets/img/cleander/c2.png')); ?>" alt="event">
                    </td>
					<td class="event_date">
						<?php echo e(date('d',strtotime($event->date))); ?>

                        <span><?php echo e(date('M',strtotime($event->date))); ?></span>
                    </td>
					<td>
                        <div class="event_place">
                            <h5><?php echo e($event->name); ?></h5>
                            <h6><?php echo e($event->time); ?></h6>
                        </div>
					</td>
					<td class="event_date">
						<?php echo e($event->tickets); ?>

                        <span>seats remaining</span>
                    </td>
					
                    
				</tr>
			   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			   <tr>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="#" class="btn btn-primary btn-rounded" id = "checkout">Checkout</a></td>
			   </tr>
			   <?php else: ?>
				   <tr>
                    <td>
                         
                    </td>
					<td class="event_date">
						You don't have anything in your cart
                    </td>
					<td>
                        
					</td>
					<td class="event_date">
						
                    </td>
				</tr>
			   <?php endif; ?>
               </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->

<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('<?php echo e(asset('assets/img/bg/tickets.png')); ?>');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                GEt your tikets
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a href="#" class="btn btn-primary btn-rounded mt30">buy now</a>
            </div>
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
                                    <img src="<?php echo e(asset('/assets/img/cleander/c1.png')); ?>" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo e(asset('/assets/img/cleander/c2.png')); ?>" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo e(asset('/assets/img/cleander/c3.png')); ?>" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo e(asset('/assets/img/cleander/c3.png')); ?>" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo e(asset('/assets/img/cleander/c2.png')); ?>" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo e(asset('/assets/img/cleander/c1.png')); ?>" alt="instagram">
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
<script src="<?php echo e(asset('/assets/js/jquery.min.js')); ?>"></script>
<!-- bootstrap -->
<script src="<?php echo e(asset('/assets/js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/waypoints.min.js')); ?>"></script>
<!--slick carousel -->
<script src="<?php echo e(asset('/assets/js/owl.carousel.min.js')); ?>"></script>
<!--parallax -->
<script src="<?php echo e(asset('/assets/js/parallax.min.js')); ?>"></script>
<!--Counter up -->
<script src="<?php echo e(asset('/assets/js/jquery.counterup.min.js')); ?>"></script>
<!--Counter down -->
<script src="<?php echo e(asset('/assets/js/jquery.countdown.min.js')); ?>"></script>
<!-- WOW JS -->
<script src="<?php echo e(asset('/assets/js/wow.min.js')); ?>"></script>
<!-- Custom js -->
<script>
$( document ).ready(function() {
	$('#checkout').click(function(){
		
		$.ajax({
		  url: "<?php echo e(URL::to('/checkout/complete')); ?>",
		  success: function(result){
			window.location.href = "<?php echo e(URL::to('/home')); ?>"
		  }
		});
    });
	
	
	var doUpdate = function() {
    $("#message").css('display','none')
  };

  // Schedule the update to happen once every second
  
});



</script>
<script src="<?php echo e(asset('/assets/js/main.js')); ?>"></script>
</body>
</html>