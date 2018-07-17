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
                            <li><a href="/events">Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header content -->
    </div>

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- MAIN -->
            <main id="main" class="col-md-9">
                <!-- article -->
                <div class="article event-details">
  

                    <!-- article content -->
                    <div class="article-content">
                        <!-- article title -->
                        <h2 class="article-title">{{$photo->file_name}}</h2>
                        <!-- /article title -->

                        <!-- article meta -->
                        <ul class="article-meta">
                            <li>{{$photo->created_at}}</li>
                            <li>By {{$photo->user->name}}</li>
                        </ul>
                        <!-- /article meta -->
                        <!-- article img -->
                            <div class="article-img">
                                <img src="{{$photo->file_path}}{{$photo->file_name}}" alt="">
                            </div>
                        <!-- article img -->
                        
                    </div>
                    <!-- /article content -->

           

                    <!-- article tags share -->
                    <div class="article-tags-share">
                        <!-- article tags -->
                        <ul class="tags">
                            <li>TAGS:</li>
                            <li><a href="#">Charity</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Donation</a></li>
                        </ul>
                        <!-- /article tags -->

                        <!-- article share -->
                        <ul class="share">
                            <li>SHARE:</li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <!-- /article share -->
                    </div>
                    <!-- /article tags share -->

                    <!-- article reply form -->
                    <div class="article-reply">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/photos" class="btn btn-default">Go back</a>
                                <a href="/photos/{{$photo->id}}/edit" class="btn btn-default">Edit</a>
                                {!!Form::open(['action' => ['PhotosController@destroy' , $photo->id], 'method' => 'POST','class' => 'pull-right'])!!}
                                    {{Form::hidden('_method' , 'DELETE')}}
                                    {{Form::submit('Delete' , ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </div>                  
                        </div>
                    </div>
                    <!-- /article reply form -->
                </div>
                <!-- /article -->
            </main>
            <!-- /MAIN -->


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->


@endsection