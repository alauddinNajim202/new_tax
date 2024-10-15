@extends('front_end.app')


@section('content')
    <!-- sign in-up section start -->
    <section class="sign-in-up-common-section">
        <div class="container">
            <div class="sign-in-up-content-wrapper">
                <div class="sign-in-up-image-area">
                    <img src="{{ asset('front_end/assets/images/sign-in-banner.png') }}" alt="" srcset="">
                </div>
                <div class="sign-in-up-form-area">
                    <div class="form-header-para">
                        <h1>Sign in</h1>
                        <p>New user? <a href="sign-up.html">Create an account</a></p>
                    </div>
                    <form class="tm-sign-in-up-form" method="POST" action="{{route('login')}}">

                        @csrf


                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <button type="submit">Sign In</button>
                        <p class="tm-create-btn-link">Don't have an account? <a href="sign-up.html">Sign Up</a></p>
                        <div class="or-wrapper">
                            <div class="or-line"></div>
                            <p class="or-text">or</p>
                            <div class="or-line"></div>
                        </div>
                        <a class="google-link" href="{{route('auth.google')}}">
                            <img src=" {{asset('front_end/assets/images/google.png')}} " alt="" srcset="">
                            Continue with Google</a>
                    </form>



                </div>
            </div>
        </div>
    </section>

    <!-- sign in-up section End -->
@endsection
