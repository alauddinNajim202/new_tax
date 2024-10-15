

@extends('front_end.app')

@section('content')
<!-- sign in-up section start -->
<section class="sign-in-up-common-section sign-up-form-area">
    <div class="container">
        <div class="sign-in-up-content-wrapper">
            <div class="sign-in-up-image-area">
                <img src="{{asset('front_end/assets/images/sign-in-banner.png')}}" alt="" srcset="">
            </div>
            <div class="sign-in-up-form-area">
                <div class="form-header-para">
                    <h1>Sign Up</h1>
                    <p>Old user? <a href="sign-in.html">Log Into Your account</a></p>
                </div>
                <form class="tm-sign-in-up-form" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                      </div>

                      <input type="hidden" name="user_type" value="{{request('user-type')}}">

                      <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Create Password">
                        <label for="password">Create Password</label>
                      </div>

                      <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Retype Password">
                        <label for="password_confirmation">Retype Password</label>
                      </div>

                      <button type="submit">Sign Up</button>
                      <p class="tm-create-btn-link">Already have an account?? <a href="sign-in.html">Sign In</a></p>
                      <div class="or-wrapper">
                        <div class="or-line"></div>
                        <p class="or-text">or</p>
                        <div class="or-line"></div>
                    </div>
                    <a class="google-link" href="{{route('auth.google')}}">
                        <img src="{{asset('front_end/assets/images/google.png')}} " alt="" srcset="">
                        Continue with Google</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- sign in-up section End -->
@endsection
