<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- TITLE -->
        <title>Arduix</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="img/favicon.png">
        {{-- Loading --}}
        <link rel="stylesheet" href="{{asset('css/loader.css')}}">
        {{-- Up --}}
        <link rel="stylesheet" href="{{asset('css/up.css')}}">
        <!-- Fontawesome --> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
        <!-- Style Login Signup CSS --> 
        <link rel="stylesheet" href="{{asset('css/style_login_signup.css')}}">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="{{asset('css/boxicons.min.css')}}">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <!-- Page Loading -->
        <div class="l-ing">          
            <div class="loading">
                <div class="finger finger-1">
                    <div class="finger-item">
                        <span></span>
                        <i></i>
                    </div>
                </div>
                <div class="finger finger-2">
                    <div class="finger-item">
                        <span></span>
                        <i></i>
                    </div>
                </div>
                <div class="finger finger-3">
                    <div class="finger-item">
                        <span></span>
                        <i></i>
                    </div>
                </div>
                <div class="finger finger-4">
                    <div class="finger-item">
                        <span></span>
                        <i></i>
                    </div>
                </div>
                <div class="last-finger">
                    <div class="last-finger-item">
                        <span></span>
                        <i></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Arduix -->
        <div id="header" class="arduix-nav-style">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="img/white-logo.png" alt="Logo">
            </a>
        </div>
        <!-- End Arduix -->
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    {{ $errors->first('name') }}
                    <input name="name" value="{{ old('name') }}" placeholder="name">

                    {{ $errors->first('surname') }}
                    <input name="surname" value="{{ old('surname') }}" placeholder="suername">

                    {{ $errors->first('email') }}
                    <input name="email" value="{{ old('email') }}" placeholder="email">

                    {{ $errors->first('age') }}
                    <input name="age" value="{{ old('age') }}" placeholder="age">

                    {{ $errors->first('password') }}
                    <input name="password" value="{{ old('password') }}" placeholder="password">

                    {{ $errors->first('confirm') }}
                    <input name="confirm" value="{{ old('confirm') }}" placeholder="Repeat Password">
                    <!-- Start Other Option --> 

                    {{-- disabled="disabled" --}}
                    <button class="btn_none">
                        <div class="others-option">
                            <a class="default-btn">
                                Sign Up
                                <i class="bx bx-log-in-circle"></i>
                            </a>
                        </div>
                    </button>
                    <!-- End Other Option -->
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form method="post" action="{{url('/login_check')}}" method="post">
                    {{csrf_field()}}
                    <h1>Login</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    {{ $errors->first('l_verification')}}

                    {{ $errors->first('l_email') }}
                    <input type="email" placeholder="Email" name="l_email" value="{{ old('l_email') }}" >

                    {{ $errors->first('l_password') }}
                    <input type="password" placeholder="Password" name="l_password" value="{{ old('l_password') }}" >
                    <a href="{{url('/user_verify')}}" class="forgot">Forgot your password ?</a>
                    <!-- <button>Sign In</button> -->

                    <!-- Start Other Option -->
                    <button class="btn_none">
                        <div class="others-option">
                            <a class="default-btn">
                                Login
                                <i class="bx bx-log-in-circle"></i>
                            </a>
                        </div>
                    </button>
                    <!-- End Other Option -->
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome!</h1>
                        <p></p>
                        <!-- Start Other Option -->
                        <button class="btn_none ghost" id="signIn">
                            <div class="others-option">
                                <a class="default-btn" style="background-color: #ff0018;">
                                    Login
                                </a>
                            </div>
                        </button>
                        <!-- End Other Option -->
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p></p>
                        <!-- Start Other Option -->
                        <button class="btn_none ghost" id="signUp">
                            <div class="others-option">
                                <a class="default-btn" style="background-color: #ff0018;">
                                    Sing Up
                                </a>
                            </div>
                        </button>
                        <!-- End Other Option -->
                    </div>
                </div>
            </div>
        </div>  
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="bx bx-chevrons-up"></i>
            <i class="bx bx-chevrons-up bx-fade-up"></i>
        </div>
        <!-- End Go Top Area -->       
    </body>
    <!-- jQuery and Loading -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/loader.js')}}"></script>

    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/up.js')}}"></script>

</html>