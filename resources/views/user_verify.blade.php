<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arduix</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/loader.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min_2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min')}}.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/user_verify-style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/user_verify-theme21.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
        {{-- Csrf Token --}}
        <input type="hidden" id="all_pro" value="{{csrf_token()}}">
        <div class="form-body without-side">
            <div class="website-logo">
                <a href="index.html">
                    <div class="logo">
                        <img class="logo-size" src="{{asset('img/white-logo.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items div_1">
                            <h3>{{ __('user_verify.password') }}</h3>
                            <p>{{ __('user_verify.to') }}</p>
                            <div>
                                <input class="form-control email" type="text" placeholder="E-mail Address" required>
                                <div class="spinner-border text-success load_1" role="status" style="width: 1.5rem; height: 1.5rem; position: absolute; top: 344px; left: 776px; display: none;">
                                </div>
                                <div class="form-button full-width">
                                    <button id="submit" type="submit" class="ibtn btn-forget">{{ __('user_verify.send') }}</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-sent">
                            <div id="wrapper">
                                <div id="dialog">
                                    <button class="close">×</button>
                                    <h3>{{ __('user_verify.please') }}</h3>
                                    <div id="form">
                                        <input class="inp" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input class="inp" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input class="inp" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input class="inp" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input class="inp" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <a class="btn btn-primary btn-embossed code_send" style="color: #fff;">
                                            <div class="spinner-border text-success load_2" role="status" style="width: 1.3rem; height: 1.3rem; margin-right: 8px; color: lawngreen !important; display: none;">
                                            </div>
                                            {{ __('user_verify.verify') }}
                                        </a>
                                    </div>
                                    <div>
                                        {{ __('user_verify.didnt') }}<br />
                                        <a class="change_email" style="color: blue; cursor: pointer;">{{ __('user_verify.change') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-items div_2" style="display: none;">
                            <h3>{{ __('user_verify.yours') }}</h3>
                            <p class="p_error" style="background: red none repeat scroll 0% 0%; color: rgb(255, 255, 255); display: none; height: 40px; margin-bottom: 10px; justify-content: center; align-items: center; border-radius: 10px; font-size: 18px;"></p>
                            <div>
                                <input class="form-control name" type="text" placeholder="Name" required>
                                <input class="form-control surname" type="text" placeholder="Surname" required>
                                <div class="form-button full-width">
                                    <button id="submit_n_s" type="submit" class="ibtn btn-forget">
                                        <div class="spinner-border text-success load_3" role="status" style="width: 1.2rem; height: 1.2rem; width: 1.2rem; height: 1.2rem; margin-right: 5px; color: #fff !important; display: none;">
                                        </div>
                                        {{ __('user_verify.send') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-items div_3" style="display: none;">
                            <h3>{{ __('user_verify.new_password') }}</h3>
                            <p class="p_error_password" style="background: red none repeat scroll 0% 0%; color: rgb(255, 255, 255); display: none; height: 40px; margin-bottom: 10px; justify-content: center; align-items: center; border-radius: 10px; font-size: 18px;"></p>
                            <div>
                                <input class="form-control new_password" type="password" placeholder="New password" required>
                                <input class="form-control new_password_confirm" type="password" placeholder="Confirm" required>
                                <div class="form-button full-width">
                                    <button id="submit_password" type="submit" class="ibtn btn-forget">
                                        <div class="spinner-border text-success load_4" role="status" style="width: 1.2rem; height: 1.2rem; width: 1.2rem; height: 1.2rem; margin-right: 5px; color: #fff !important; display: none;">
                                        </div>
                                        {{ __('user_verify.send') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- jQuery and Loading -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/loader.js')}}"></script>

    <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
        function code_check(){
            $('.load_2').css({
                display: '-webkit-inline-box'
            });
            const email = $('.form-content').attr('data-id');
            var code = '';
            $('.inp').each(function() {
                if ($(this).val() == '') 
                    $(this).css({
                        border: '1px solid red',
                    });
                else 
                    $(this).css({
                        border: '1px solid green',
                    });     
                    code += $(this).val(); 
            })
            code_length = code.split('');
            if (code_length.length == 5) {
                $.ajax({
                    url: '/user_verify/verify_password_send/if',
                    type: 'post',
                    data: {
                            '_token': '{{ csrf_token() }}',
                            email,
                            code
                        },
                    success: function(r){   
                        if (r == ''){
                            $('.div_1').fadeOut(500);
                            $('.form-sent').fadeOut(500);
                            $('.div_2').fadeIn(1000);
                            $('.load_2').css({
                                display: 'none'
                            });
                        }else { 
                            $('.inp').css({
                                border: '1px solid red'
                            });
                            $('.load_2').css({
                                display: 'none'
                            });
                        }
                    }
                }) 
            }else {
                $('.load_2').css({
                    display: 'none'
                });
            }
        }

        $('.form-sent').keydown(function(e) {
            if(e.key == 'Enter')
                code_check();
        });

        $('.code_send').click(function() {
            code_check();
        });

        function name_surname_check(){
            $('.load_3').css({
                display: '-webkit-inline-box'
            });
            const email = $('.form-content').attr('data-id');
            const name = $('.name').val();
            const surname = $('.surname').val();
            if (name == '' && surname != ''){
                $('.name').css({
                    border: '1px solid red'
                });
                $('.load_3').css({
                    display: 'none'
                });
            }else if (name != '' && surname == ''){
                $('.surname').css({
                    border: '1px solid red'
                });
                $('.load_3').css({
                    display: 'none'
                });
            }else {
                $.ajax({
                    url: '/user_verify/name_surname_check',
                    type: 'post',
                    data: {
                            '_token': '{{ csrf_token() }}',
                            email,
                            name,
                            surname
                        },
                    success: function(r){
                        if (r == ''){
                            $('.div_2').fadeOut(500);
                            $('.div_3').show(1500);
                            $('.load_3').css({
                                display: 'none'
                            });
                        }else { 
                            $('.p_error').css({
                                display: 'flex'
                            });
                            $('.p_error').html(r);
                            $('.load_3').css({
                                display: 'none'
                            });
                        }        
                    }
                });
            }
        }

        $('.div_2').keydown(function(e) {
            if(e.key == 'Enter') 
                name_surname_check();
        });

        $('#submit_n_s').click(function() {
            name_surname_check();
        });


        function change_password(){
            $('.load_4').css({
                display: '-webkit-inline-box'
            });
            const email = $('.form-content').attr('data-id');
            const new_password = $('.new_password').val();
            const new_password_confirm = $('.new_password_confirm').val();
            if (new_password == '' && new_password_confirm == ''){
                $('.new_password').css({
                    border: '1px solid red'
                });
                $('.new_password_confirm').css({
                    border: '1px solid red'
                });
                $('.load_4').css({
                    display: 'none'
                });
            }else if (new_password == '' && new_password_confirm != ''){
                $('.new_password').css({
                    border: '1px solid red'
                });
                $('.load_4').css({
                    display: 'none'
                });
            }else if (new_password != '' && new_password_confirm == ''){
                $('.new_password_confirm').css({
                    border: '1px solid red'
                });
                $('.load_4').css({
                    display: 'none'
                });
            }else if (new_password != new_password_confirm){
                $('.new_password').css({
                    border: '1px solid red'
                });
                $('.new_password_confirm').css({
                    border: '1px solid red'
                });
                $('.load_4').css({
                    display: 'none'
                });
            }else {
                $.ajax({
                    url: '/user_verify/change_password',
                    type: 'post',
                    data: {
                            '_token': '{{ csrf_token() }}',
                            email,
                            new_password,
                            new_password_confirm
                        },
                    success: function(r){
                        if (r == ''){
                            $('.load_3').css({
                                display: 'none'
                            });
                            swal("", "", "success");
                            setTimeout(function(){
                                location.href = '{{ url('/') }}';
                            },1000);
                        }else { 
                            $('.p_error_password').css({
                                display: 'flex'
                            });
                            $('.p_error_password').html(r);
                            $('.load_4').css({
                                display: 'none'
                            });
                        }        
                    }
                });
            }
        }

        $('.div_3').keydown(function(e) {
            if(e.key == 'Enter') 
                change_password();
        });

        $('#submit_password').click(function() {
            change_password();
        });
    </script>
</html>

