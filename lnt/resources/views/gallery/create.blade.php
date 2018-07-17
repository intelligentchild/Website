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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Photos</a></li>
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
                        <h2 class="title">Gallery</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <hr>
                </div>
                <!-- /section title -->
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['action' => 'GalleryController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('name' , 'Gallery Name')}}
                            {{Form::text('name','',['class' => 'form-control' , 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('isPublished' , 'Publish')}}
                            {{Form::checkbox('isPublished','published',true)}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::file('upload_image[]', ['multiple'])}}
                        </div>
                        {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection