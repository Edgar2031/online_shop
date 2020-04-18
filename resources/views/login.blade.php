<!DOCTYPE HTML>
<html lang="en" >
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
                    <h1>{{ __('login.login') }}</h1>

                    <p class="l_verify_error" style="height: 35px; width: 230px; border-radius: 10px; margin: 5px; letter-spacing: 0; text-align: center; background: red; color: #fff; display: none; justify-content: center; align-items: center;"></p>

                    <input class="l_email" type="email" placeholder="{{ __('login.email') }}" value="{{ old('l_email') }}" >

                    <input class="l_password" type="password" placeholder="{{ __('login.password') }}" value="{{ old('l_password') }}" >
                    <a href="{{url('/user_verify')}}" class="forgot">{{ __('login.forgot') }}</a>
                    <!-- <button>Sign In</button> -->

                    <!-- Start Other Option -->
                    <button class="btn_none login">
                        <div class="others-option">
                            <a class="default-btn on">
                                <span>{{ __('login.login') }}</span> 
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
                <form action="{{ url('/register') }}" method="post">
                    {{ csrf_field() }}
                    <h1>{{ __('login.singup') }}</h1>

                    {{ $errors->first('name') }}
                    <input name="name" value="{{ old('name') }}" placeholder="{{ __('login.name') }}">

                    {{ $errors->first('surname') }}
                    <input name="surname" value="{{ old('surname') }}" placeholder="{{ __('login.surname') }}">

                    {{ $errors->first('email') }}
                    <input name="email" value="{{ old('email') }}" placeholder="{{ __('login.email') }}">

                    {{ $errors->first('age') }}
                    <input name="age" value="{{ old('age') }}" placeholder="{{ __('login.age') }}">

                    {{ $errors->first('password') }}
                    <input name="password" value="{{ old('password') }}" placeholder="{{ __('login.password') }}">

                    {{ $errors->first('confirm') }}
                    <input name="confirm" value="{{ old('confirm') }}" placeholder="{{ __('login.confirm_password') }}">
                    <!-- Start Other Option --> 

                    {{-- disabled="disabled" --}}
                    <button class="btn_none">
                        <div class="others-option">
                            <a class="default-btn">
                                {{ __('login.singup') }}
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
                        <h1>{{ __('login.hello') }}</h1>
                        <p></p>
                        <!-- Start Other Option -->
                        <button class="btn_none ghost" id="signUp">
                            <div class="others-option">
                                <a class="default-btn" style="background-color: #ff0018;">
                                   {{ __('login.login') }}
                                </a>
                            </div>
                        </button>
                        <!-- End Other Option -->
                    </div>
                    <div class="overlay-panel overlay-left">
                        <h1>{{ __('login.welcome') }}</h1>
                        <p></p>
                        <!-- Start Other Option -->
                        <button class="btn_none ghost" id="signIn">
                            <div class="others-option">
                                <a class="default-btn" style="background-color: #ff0018;">
                                    {{ __('login.singup') }}
                                </a>
                            </div>
                        </button>
                        <!-- End Other Option -->
                    </div>
                </div>
            </div>
        </div>  
        <div style="background: #fff; width: 100%; margin-top: 23px; text-align: center;">
            <a class="@if (Session::get('locale') == 'en') return active_lang @elseif(Session::get('locale') != 'am') return active_lang @else return lang @endif" data-value="en" href="{{ url('locale/en') }}">English(US)</a>
            <a class="@if (Session::get('locale') == 'am') return active_lang @else return lang @endif" data-value="am" href="{{ url('locale/am') }}">Հայերեն</a>
            {{-- <a class="lang" href="">Русский</a> --}}
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
    <script src="{{ asset('js/loader.js') }}"></script>

    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/up.js') }}"></script>

</html>
