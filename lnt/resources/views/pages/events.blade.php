@extends('layouts.app')

@section('content')
<div id="page-header">
    <!-- section background -->
    <div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
    <!-- /section background -->

    <!-- page header content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-content">
                    <h1>Event Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Events</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header content -->
</div>

<div id="events" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2 class="title">Upcoming Events</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<!-- /section title -->

			<!-- event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<a href="single-event.html">
							<img src="./img/event-1.jpg" alt=""/>
						</a>
					</div>
					<div class="event-content">
						<h3><a href="single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
						<ul class="event-meta">
							<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
							<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<!-- /event -->

			<!-- event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<a href="single-event.html">
							<img src="./img/event-2.jpg" alt=""/>
						</a>
					</div>
					<div class="event-content">
						<h3><a href="single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
						<ul class="event-meta">
							<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
							<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<!-- /event -->

			<div class="clearfix visible-md visible-lg"></div>

			<!-- event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<a href="single-event.html">
							<img src="./img/event-3.jpg" alt=""/>
						</a>
					</div>
					<div class="event-content">
						<h3><a href="single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
						<ul class="event-meta">
							<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
							<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<!-- /event -->

			<!-- event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<a href="single-event.html">
							<img src="./img/event-4.jpg" alt=""/>
						</a>
					</div>
					<div class="event-content">
						<h3><a href="single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
						<ul class="event-meta">
							<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
							<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<!-- /event -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
@endsection