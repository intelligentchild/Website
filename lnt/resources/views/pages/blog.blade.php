@extends('layouts.app')

@section('content')
<div id="page-header">
    <!-- section background -->
    <div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
    <!-- /section background -->

    <!-- page header content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-content">
                    <h1>Blog Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">Blog Posts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header content -->
</div>
    <div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2 class="title">Our Blog</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<!-- /section title -->
			@if(count($posts) > 0)
			@foreach($posts as $post)
			<!-- blog -->
			<div class="col-md-4">
				<div class="article">
					<div class="article-img">
						<a href="single-blog.html">
							<img src="./img/post-1.jpg" alt=""/>
						</a>
					</div>
					<div class="article-content">
						<h3 class="article-title"><a href="/singleblog/{{$post->id}}">{{$post->title}}</a></h3>
						<ul class="article-meta">
							<li>{{$post->created_at}}</li>
							<li>By John doe</li>
							
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<br/>
						<a href="single-cause.html" class="primary-button causes-donate">Read More >></a>					
					</div>
				</div>
			</div>
			<!-- /blog -->	
			@endforeach
			@else

			<h1>no posts</h1>
    @endif
			<!-- /blog -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
@endsection 