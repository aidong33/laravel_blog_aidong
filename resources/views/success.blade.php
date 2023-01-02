
@extends('layouts.app')

@section('content')
        <!-- Page Header-->
<body>

        <header class="masthead" style="background-image: url('assets/img/2.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Register Success</h1>
                            <span class="subheading"> </span>
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
                      <h1>Registration Successful</h1>
                        <p class="post-meta">
                            Hi,  {{$user->name}}  !
                            <a href="{{route('login')}}"> click here to login with email and password</a> 
                        
                        </p>
                    </div>
                </div>
                    
                  
            </div>
         </div>

</body>
@endsection