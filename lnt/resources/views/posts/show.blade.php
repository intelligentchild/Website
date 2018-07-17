@extends('layouts.app')

@section('content')

<div class="container" style="padding:100px">
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div class="">
        {!!$post->body!!}
    </div>
    <!-- article img -->
    @if(count($post->photos)>0)
        <div class="gallery" style="display: ruby-base;">
        @foreach($post->photos as $photo)
            <div><img src="{{$photo->file_path}}{{$photo->file_name}}" alt="" onclick="lightbox(0)"></div>                   
        @endforeach
        </div>
    @else
        <h3>No Photos Found</h3>
    @endif

    <!-- article img -->
    <!-- article tags share -->
    <div class="article-tags-share">
        <!-- article tags -->
        <ul class="tags">
            <li>TAGS:</li>
            @if (count($post->filterTags()) >0)
                @foreach($post->filterTags as $filterTag)
                <li><a href="#">{{$filterTag->tag_name}}</a></li>
                @endforeach
            @endif
            @if (count($post->filterTags)==0)
                <a2>NO Tags Found</a2>
            @endif
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
    <hr>
    <a href="/posts" class="btn btn-default">Go back</a>
    @if (!Auth::guest())
        <div style="display: inline-block">     
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        </div>
        {!!Form::open(['action' => ['PostController@destroy' , $post->id], 'method' => 'POST','class' => 'pull-right'])!!}
            {{Form::hidden('_method' , 'DELETE')}}
            {{Form::submit('Delete' , ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}       
    @endif

</div>
@endsection