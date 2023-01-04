@extends('layouts.app')

@section('content')
        <!-- Page Header-->
<body>

        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Welcome</h1>
                            <span class="subheading"> Blog </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                   <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">


                    @foreach($posts as $post)
                    <div class="post-preview">
                    @if($post->thumbnail_img !== null)
                        <a href="{{route('singlepost', $post->id)}}"> 
                            <img src="/uploads/{{ $post->thumbnail_img}}" alt="{{ $post->title }}"  width="430px" height="350px"/> 
                         </a>
                    @else
                         <a href="{{route('singlepost', $post->id)}}"> 
                            <img src="assets/img/test3.jpeg"  width="430px" height="350px"/> 
                        </a>
                    @endif
                            <h2 class="post-title">{{$post->title}}</h2> 
                            <h4 class="post-subtitle">{{$post->author}}</h4>
                        <p class="post-meta">
                            Posted by : {{$post->created_at}}  
                           
                        </p>
                       
                    </div>
                    @endforeach
                    
           
            </div>

                    
                </div>
            </div>

</body>
@endsection