@extends('layouts.app')

@section('content')
<div id="page-header">
        <!-- section background -->
        <div class="section-bg" style="background-image: url(http://laxminarayantrust.test/img/background-2.jpg);"></div>
        <!-- /section background -->

        <!-- page header content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                    <h1>{{$post->title}}</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">{{$post->title}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header content -->
    </div>
    <div class="container">
            <div class="section">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <!-- MAIN -->
                            <main id="main" class="col-md-9">
                                <!-- article -->
                                <div class="article">
                                    <!-- article img -->
                                    <div class="article-img">
                                        <img src="./img/post-img.jpg" alt="">
                                    </div>
                                    <!-- article img -->
            
                                    <!-- article content -->
                                    <div class="article-content">
                                        <!-- article title -->
                                        <h2 class="article-title">{{$post->title}}</h2>
                                        <!-- /article title -->
            
                                        <!-- article meta -->
                                        <ul class="article-meta">
                                            <li>{{$post->created_at}}</li>
                                            <li>By John doe</li>   
                                        </ul>
                                        <!-- /article meta -->
                                        {!!$post->body!!}
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
                                </div>
                            </main>
                        </div>
                    </div>
            </div>
    </div>
@endsection