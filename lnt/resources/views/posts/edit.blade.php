@extends('layouts.app')

@section('content')
    <div class="container" style="padding:100px">
        <h1>Edit Posts</h1>
        {!! Form::open(['action' => ['PostController@update', $post->id] , 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title' , 'Title')}}
                {{Form::text('title',$post->title,['class' => 'form-control' , 'placeholder' => 'Title' , 'enctype' => 'multipart/form-data'])}}
            </div>
            <div class="form-group">
                {{Form::label('tags' , 'Filter Tags')}}
                @php 
                    $tagsString= "";
                    foreach ($post->filterTags as $tag) {
                        # code...
                        $tagsString .=$tag->tag_name .",";
                    }
                @endphp
                {{Form::text('tags', $tagsString,['class' => 'form-control' , 'placeholder' => 'tags'])}}
            </div>
            <div class="form-group">
                {{Form::label('title' , 'Title')}}
                {{Form::textarea('body',$post->body,['id'=>'article-ckeditor' ,'class' => 'form-control' , 'placeholder' => 'Body Text'])}}
            </div>     
            <div class="form-group">
                {{Form::file('upload_image[]', ['multiple'])}}
            </div>
            {{Form::hidden('_method' , 'PUT')}}
            {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        <br>
        @if(count($post->photos)>0)
            <div class="gallery" style="display: ruby-base;">
            @foreach($post->photos as $photo)
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
@endsection