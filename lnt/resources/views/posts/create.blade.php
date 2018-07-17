@extends('layouts.app')

@section('content')
    <div class="container" style="padding:70px">
            <h1>Create Posts</h1>
        {!! Form::open(['action' => 'PostController@store' , 'method' => 'POST',  'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title' , 'Title')}}
                {{Form::text('title','',['class' => 'form-control' , 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('tags' , 'Filter Tags')}}
                    {{Form::text('tags','',['class' => 'form-control' , 'placeholder' => 'tags'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body' , 'Title')}}
                    {{Form::textarea('body','',['id'=>'article-ckeditor' ,'class' => 'form-control' , 'placeholder' => 'Body Text'])}}
            </div>
             <div class="form-group">
                {{Form::file('upload_image[]', ['multiple'])}}
            </div>
            {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection