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
                        <h1>Gallery Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/events">Gallery</a></li>
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
                        <h2 class="article-title">{{$gallery->name}}</h2>
                        <!-- /article title -->

                        <!-- article meta -->
                        <ul class="article-meta">
                            <li>{{$gallery->created_at}}</li>
                            <li>By {{$gallery->user->name}}</li>
                        </ul>
                        <!-- /article meta -->
                        <!-- article img -->
                                @if(count($gallery->photos)>0)
                                    <div class="gallery" style="display: ruby-base;">
                                    @foreach($gallery->photos as $photo)
                                        <div><img src="{{$photo->file_path}}{{$photo->file_name}}" alt="" onclick="lightbox(0)"></div>                   
                                    @endforeach
                                    </div>
                                @else
                                    <h3>No Photos Found</h3>
                                @endif
  
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
                                <a href="/gallery" class="btn btn-default">Go back</a>
                                <a href="/gallery/{{$gallery->id}}/edit" class="btn btn-default">Edit</a>
                                {!!Form::open(['action' => ['GalleryController@destroy' , $gallery->id], 'method' => 'POST','class' => 'pull-right'])!!}
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