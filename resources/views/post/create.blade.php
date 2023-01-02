
@extends('layouts.app')

@section('content')
        <!-- Page Header-->
<body>

        <header class="masthead" style="background-image: url('https://www.mediasource.mx/hubfs/blog-files/que-es-blog.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Create Post</h1>
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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                Title:
                                <br />
                                <input name="title"  required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                           
                            
                            <div class="form-group mb-3">
                                Author:
                                <br />
                                <input name="author"  required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('author') }}</span>
                                @endif
                            </div>


                            <div class="form-group mb-3" >
                                Content:
                                <br />
                                <input name="post_text"  required autofocus >
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
</body>

@endsection