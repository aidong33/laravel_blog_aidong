
@extends('layouts.app')

@section('content')
        <!-- Page Header-->
<body>

        <header class="masthead" style="background-image: url('assets/img/2.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1> Hi,  </h1>
                           <h2> {{$userProfile->name}}</h2>
                           
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
                        <span class="subheading">Name: {{$userProfile->name}} </span>
                        <br>
                        <span class="subheading">Email: {{$userProfile->email}}</span>
                        @if(auth()->user()->is_admin)
                        <span class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('posts.index')}}"> cleck here to : Manage Posts</a></span>
                        @endif       
                    </div>
                </div>
            </div>
        </div>

</body>
@endsection