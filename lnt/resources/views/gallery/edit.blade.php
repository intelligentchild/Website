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
                        <h1>gallery Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">gallery</a></li>
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
                        <h2 class="title">Edit gallery</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <hr>
                </div>
                <!-- /section title -->
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['action' => ['GalleryController@update', $gallery->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('name' , 'Gallery Name')}}
                            {{Form::text('name',$gallery->name,['class' => 'form-control' , 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('isPublished' , 'Publish')}}
                            {{Form::checkbox('isPublished','published',$gallery->published)}}
                        </div>
                        <div class="form-group">
                            {{Form::file('upload_image[]', ['multiple'])}}
                        </div>
                        {{Form::hidden('_method' , 'PUT')}}
                        {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}

                    @if(count($gallery->photos)>0)
                        <div class="gallery" style="display: ruby-base;">
                        @foreach($gallery->photos as $photo)
                            <div>                                
                                <img src="{{$photo->file_path}}{{$photo->file_name}}" alt="" onclick="lightbox(0)">
                                {!!Form::open(['action' => ['PhotosController@destroy' , $photo->id], 'method' => 'POST','class' => 'pull-right'])!!}
                                    {{Form::hidden('_method' , 'DELETE')}}
                                    {{Form::submit('Delete' , ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </div>                   
                        @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        <script src="{{asset('js/dropzone.js')}}"></script>
        
    </div>
@endsection