<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        <div class="l_ing">
            <div class="circles">
                <div class="circle c1"></div>
                <div class="circle c2"></div>
                <div class="circle c3"></div>
            </div>
            <div class="loading">
                <div class="a"></div>
                <div class="b"></div>
                <div class="c"></div>
                <div class="d"></div>
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
                <div class="div_log">
                    <h1>Login</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="l_verify_error" style="height: 35px; width: 230px; border-radius: 10px; margin: 5px; letter-spacing: 0; text-align: center; background: red; color: #fff; display: none; justify-content: center; align-items: center;"></p>

                    <input class="l_email" type="email" placeholder="Email" value="{{ old('l_email') }}" >

                    <input class="l_password" type="password" placeholder="Password" value="{{ old('l_password') }}" >
                    <a href="{{url('/user_verify')}}" class="forgot">Forgot your password ?</a>
                    <!-- <button>Sign In</button> -->

                    <!-- Start Other Option -->
                    <button class="btn_none login">
                        <div class="others-option">
                            <a class="default-btn on">
                                <span>Login</span> 
                                <i class="bx bx-log-in-circle"></i>
                                <div class="sk-wave">
                                    <div class="sk-wave-rect"></div>
                                    <div class="sk-wave-rect"></div>
                                    <div class="sk-wave-rect"></div>
                                    <div class="sk-wave-rect"></div>
                                    <div class="sk-wave-rect"></div>
                                </div>
                            </a>
                        </div>
                    </button>
                    <!-- End Other Option -->
                </div>
            </div>
            <div class="form-container sign-in-container">
                <form action="{{url('/register')}}" method="post">
                    {{ csrf_field() }}
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="social">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                    {{ $errors->first('name') }}
                    <input name="name" value="{{ old('name') }}" placeholder="Name">

                    {{ $errors->first('surname') }}
                    <input name="surname" value="{{ old('surname') }}" placeholder="Suername">

                    {{ $errors->first('email') }}
                    <input name="email" value="{{ old('email') }}" placeholder="Email">

                    {{ $errors->first('age') }}
                    <input name="age" value="{{ old('age') }}" placeholder="Age">

                    {{ $errors->first('password') }}
                    <input name="password" value="{{ old('password') }}" placeholder="Password">

                    {{ $errors->first('confirm') }}
                    <input name="confirm" value="{{ old('confirm') }}" placeholder="Repeat password">
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
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p></p>
                        <!-- Start Other Option -->
                        <button class="btn_none ghost" id="signUp">
                            <div class="others-option">
                                <a class="default-btn" style="background-color: #ff0018;">
                                   Login
                                </a>
                            </div>
                        </button>
                        <!-- End Other Option -->
                    </div>
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome!</h1>
                        <p></p>
                        <!-- Start Other Option -->
                        <button class="btn_none ghost" id="signIn">
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
