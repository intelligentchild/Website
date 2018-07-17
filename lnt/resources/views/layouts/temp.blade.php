<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Laxminarayn Trust – We Are Here For You</title>
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
	{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
	{{-- <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/style1.css')}}">	 --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">	 

	
</head>

<body>
	<!-- HEADER -->
	<header id="home">
		<!-- NAVGATION -->
		<nav id="main-navbar" class="navbar-fixed-top">

            <div class="container">
                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a class="logo" href="{{ url('/') }}"><img src="http://laxminarayantrust.test/img/logo1.png" alt="logo"/>LAXMI NARAYAN TRUST</a>
                    </div>
                    <!-- Logo -->
        
                    <!-- Mobile toggle -->
                    <button class="navbar-toggle-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Mobile toggle -->
        
                    <!-- Mobile Search toggle -->
                    <!-- <button class="search-toggle-btn">
                            <i class="fa fa-search"></i>
                        </button> -->
                    <!-- Mobile Search toggle -->
                </div>
        
                <!-- Search -->
                <div class="navbar-search">
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div class="search-form">
                        <form>
                            <input class="input" type="text" name="search" placeholder="Search"/>
                        </form>
                    </div>
                </div>
                <!-- Search -->
        
                <!-- Nav menu -->
                <ul class="navbar-menu nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/causes') }}">Causes</a></li>
                    <li><a href="{{ url('/events') }}">Events</a></li>
                    <li class="has-dropdown"><a href="{{ url('/blog') }}">Blog</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/blog') }}">Activity</a></li>
                            <li><a href="{{ url('/blog') }}">Posts</a></li>
                        </ul>
                    </li>
                    <li style="margin-top: .4em;margin-bottom: .4em;"><a class="primary-button" href="{{ url('/donate') }}" style="padding: 15px">Donate</a></li>
                    <li><a href="#" title="Only for Admin"><i class="fa fa-user-circle-o" style="font-size:20px"></i></a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
              
                
                <!-- Nav menu -->
            </div>
        </nav>
        @include('inc.messages')

        @yield('content')

        <!-- FOOTER -->
	<footer id="footer" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer contact -->
                <div class="col-md-4">
                    <div class="footer">
                        <div class="footer-logo">
                            <a class="logo" href="#"><img src="http://laxminarayantrust.test/img/logo1.png" alt=""/></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="footer-contact">
                            <li><i class="fa fa-map-marker"></i> House No: 1/266/Z4, Near Dangui Colony, Faria Bhat, Xelpem, Mapusa, Goa, 403507, India</li>
                            <li><i class="fa fa-phone"></i>91-9822102539</li>
                            <li><i class="fa fa-envelope"></i> <a href="#"> info@laxminarayan.org</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer contact -->
    
                <!-- footer galery -->
                <div class="col-md-4">
                    <div class="footer">
                        <h3 class="footer-title">Gallery</h3>
                        <ul class="footer-galery">
                            <li><a href="#"><img src="http://laxminarayantrust.test/img/galery-1.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="http://laxminarayantrust.test/img/galery-2.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="http://laxminarayantrust.test/img/galery-3.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="http://laxminarayantrust.test/img/galery-4.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="http://laxminarayantrust.test/img/galery-5.jpg" alt=""/></a></li>
                            <li><a href="#"><img src="http://laxminarayantrust.test/img/galery-6.jpg" alt=""/></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer galery -->
    
                <!-- footer newsletter -->
                <div class="col-md-4">
                    <div class="footer">
                        <h3 class="footer-title">Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <form class="footer-newsletter">
                            <input class="input" type="email" placeholder="Enter your email"/>
                            <button class="primary-button">Subscribe</button>
                        </form>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer newsletter -->
            </div>
            <!-- /row -->
    
            <!-- footer copyright & nav -->
            <div id="footer-bottom" class="row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-page.html">About</a></li>
                        <li><a href="causes-page.html">Causes</a></li>
                        <li><a href="events-page.html">Events</a></li>
                        <li><a href="blog-page.html">Blog</a></li>
                        <li><a href="donate-page.html">Donate</a></li>
                    </ul>
                </div>
    
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        <span>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Us</a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /footer copyright & nav -->
        </div>
        <!-- /container -->
    </footer>
    
	<!-- /FOOTER -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main1.js"></script>

</body>

</html>