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
                        <h2 class="title">Edit Events</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <hr>
                </div>
                <!-- /section title -->
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['action' => ['EventsController@update', $event->id] , 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('title' , 'Title')}}
                            {{Form::text('title', $event->title,['class' => 'form-control' , 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('body' , 'Description')}}
                            {{Form::textarea('body', $event->body,['id'=>'article-ckeditor' ,'class' => 'form-control' , 'placeholder' => 'Body Text'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('event_date', 'Event Date')}}
                            {{Form::date('event_date', $event->event_date, ['class' => 'form-control',])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('start_time', 'Start Date')}}
                            {{Form::time('start_time', $event->start_time, ['class' => 'form-control',])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('end_time', 'End Date')}}
                            {{Form::time('end_time', $event->end_time, ['class' => 'form-control',])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('location', 'Location')}}
                            {{Form::text('location', $event->location, ['class'=>'form-control', 'placeholder' => ''])}}
                        </div>                        
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection