
@extends('layouts.app')

@section('content')
        <!-- Page Header-->
<body>

        <header class="masthead" style="background-image: url('assets/img/2.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Edit Post</h1>
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
                    <div class="container mt-2">
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                Title:
                                <br />
                                <input name="title" value = "{{$post->title}}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                           
                            
                            <div class="form-group mb-3">
                                Author:
                                <br />
                                <input name="author" value = "{{$post->author}}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('author') }}</span>
                                @endif
                            </div>


                            <div class="form-group mb-3" >
                                Content:
                                <br />
                                <input name="post_text" value = "{{$post->post_text}}" required autofocus >
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('text') }}</span>
                                @endif
                            </div>
                            
                            <div class="col-md-6">
                            Thumbnail: <input type="file" name="post_thumbnail">
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

</body>
@endsection