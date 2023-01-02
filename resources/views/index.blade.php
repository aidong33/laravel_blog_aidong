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
                        <a href="{{route('singlepost', $post->id)}}"> 
                            <img src="https://media.poetryfoundation.org/uploads/media/cache/default/0001/14/7d3d6b4b8241411fd38735db3ce63c78130f7337.jpeg/33501495408c2982927a9197e4d7c5df" width=250/> 
                         </a>
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