@extends('layouts.app')

@section('content')
        <!-- Page Header-->
<body>

        <header class="masthead" style="background-image: url('https://socialmedia4us.files.wordpress.com/2018/01/blog.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Blog List</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">

                <div class="col-md-10 col-lg-8 col-xl-7">

                    @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="{{route('posts.show', $post->id)}}"> 
                          @if($post->thumbnail_img !== null)
                            <div class="blog-thumbnail">
                            <img src="/uploads/{{ $post->thumbnail_img}}" alt="{{ $post->title }}"  width="430px" height="350px"/>
					        </div>
                         @endif
                            <h2 class="post-title">{{$post->title}}</h2> 
                            <h4 class="post-subtitle">{{$post->author}}</h4>
                        <p class="post-meta">
                            Posted by : {{$post->created_at}}  
                            <a href="{{route('posts.edit', $post)}}"> Edit</a> 
                            <form method="POST" action="{{route('posts.destroy',$post)}}">
                                @method('DELETE')
                                @csrf
                                <button type= "submit"> Delete </button>
                            </form>
                        </p>
                       
                    </div>
                    @endforeach
                    
                </div>
            </div>

</body>
@endsection