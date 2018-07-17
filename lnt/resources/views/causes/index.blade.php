@extends('layouts.app')

@section('content')
<div id="page-header">
    <!-- section background -->
    <div class="section-bg" style="background-image: url(/img/background-2.jpg);"></div>
    <!-- /section background -->

    <!-- page header content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-content">
                    <h1>Event Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/events">Events</a></li>
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
                <a href="/events/create" class="btn btn-default ">Create Events</a>
                <hr>
            </div>
            <!-- /section title -->
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($events) > 0)
                    @foreach($events as $event)
                        <!-- event -->
                        <div class="col-md-6">
                            <div class="event">
                                <div class="event-img">
                                    <a href="single-event.html">
                                        <img src="./img/event-1.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="event-content">
                                    <h3><a href="/events/{{$event->id}}">{{$event->title}}</a></h3>
                                    <ul class="event-meta">
                                        <li><i class="fa fa-clock-o"></i> {{$event->event_date}} | 8:00AM - 11:00PM</li>
                                        @if($event->location)
                                            <li><i class="fa fa-map-marker"></i>{{$event->location}}</li>
                                        @endif
                                    </ul>
                                    <p>{!!$event->body!!}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /event -->
                    @endforeach
                    {{$events->links()}}
                @else
                    <h1 class="section-title text-center" style="color:grey;">No Events</h1>
                    <a href="/events/create" class="btn btn-default align-center">Create Events</a>
                @endif
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection