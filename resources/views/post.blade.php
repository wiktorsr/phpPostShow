@extends('layouts.app')
@section('content')
 <!-- Main Content-->
 <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php
                    $post="select * from `posts` where id=1";
                    ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">{{$post->title}}</h2>
                            <h3 class="post-subtitle">{{$post->description}}</h3>
                        </a>
                        <img src="{{$post->thumbnail}}">
                        <p class="post-meta">
                            {{$post->content}}        
                        </p>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on {{$post->created_at}}
                        </p>
                    </div>                    
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        
        </div>
@endsection