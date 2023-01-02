
 @extends('layouts.app')

@section('content')

        <header class="masthead" style="background-image: url('	https://media.poetryfoundation.org/uploads/media/cache/default/0001/26/f9f7e3c53cf8a791d8237c808480b66922e427cc.jpg/3d2fdede2910aefc8ae89d690886a970')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1> Post </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">

                    @if( $post->post_thumbnail )
                    <div class="blog-thumbnail">
                        <img src="/uploads/{{ $post->thumbnail_img}}" alt="{{ $post->post_title }}" />
                    </div>
                    @endif

                    <h2> {{$post->title}}</h2>
                  
                        <p class="post-meta">
                            Author: {{$post->author}}  
                            <a href="{{route('posts.edit', $post)}}"> Edit</a> 
                            <form method="POST" action="{{route('posts.destroy',$post)}}">
                                @method('DELETE')
                                @csrf
                                <button type= "submit"> Delete </button>
                            </form>
                        </p>
                  
                        <p>
                           {{$post->post_text}} 

                        </p> 
                        <p class="post-meta">
                            Posted by : {{$post->created_at}}
                        </p>
                        <p class="post-meta">
                            Updated by : {{$post->updated_at}}
                        </p>
                    </div>
                </div>
            </div>
        </div>


@endsection