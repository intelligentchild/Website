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
                    <h1>Photos Page</h1>
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
                    <h2 class="title">Photos</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <a href="/gallery/create" class="btn btn-default ">Add Gallery</a>
                <hr>
            </div>
            <!-- /section title -->
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($galleries) > 0)
                    @foreach($galleries as $gallery)
                        <!-- event -->
                        <div class="col-md-6">
                            <div class="event">
                                <div class="event-img">
                                    <a href="single-event.html">
                                        {{-- <img src="{{$photo->file_path}}{{$photo->file_name}}" alt=""/> --}}
                                    </a>
                                </div>
                                <div class="event-content">
                                    <h3><a href="/gallery/{{$gallery->id}}">{{$gallery->name}}</a></h3>
                                    <ul class="event-meta">
                                        <li><i class="fa fa-clock-o"></i> {{$gallery->created_at}} </li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                        <!-- /event -->
                    @endforeach
                    {{$galleries->links()}}
                @else
                    <h1 class="section-title text-center" style="color:grey;">No Gallery</h1>
                    <a href="/gallery/create" class="btn btn-default align-center">Add Gallery</a>
                @endif
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection