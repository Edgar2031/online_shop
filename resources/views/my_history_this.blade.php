@extends('Layout.menu_layout')
@section('header')
<!DOCTYPE HTML>
<html>
    <head>  
	    <meta name="keywords" content="Koupon HTML5 Template" />
	    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
	    <meta name="author" content="Tsoy">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
	    <!-- TITLE -->
        <title>Arduix</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        {{-- Loading --}}
        <link rel="stylesheet" href="{{asset('css/loader.css')}}">
        {{-- Up --}}
        <link rel="stylesheet" href="{{asset('css/up.css')}}">

	    <!-- Google fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
	    <!-- Bootstrap styles -->
	    <link rel="stylesheet" href="{{asset('css/boostrap.css')}}">
	    <!-- Font Awesome styles (icons) -->
	    <link rel="stylesheet" href="{{asset('css/font_awesome.css')}}">
	    <!-- Main Template styles -->
	    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
	    <!-- IE 8 Fallback -->

	    <!-- Your custom styles (blank file) -->
	    <link rel="stylesheet" href="{{asset('css/mystyles.css')}}">

	    <link rel="stylesheet" href="{{asset('css/switcher.css')}}">
	    <!-- Demo Examples -->
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/apple.css')}}" title="apple" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/pink.css')}}" title="pink" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/teal.css')}}" title="teal" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/gold.css')}}" title="gold" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/downy.css')}}" title="downy" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/atlantis.css')}}" title="atlantis" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/red.css')}}" title="red" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/violet.css')}}" title="violet" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/pomegranate.css')}}" title="pomegranate" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/violet-red.css')}}" title="violet-red" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/mexican-red.css')}}" title="mexican-red" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/victoria.css')}}" title="victoria" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/orient.css')}}" title="orient" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/jgger.css')}}" title="jgger" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/de-york.css')}}" title="de-york" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/blaze-orange.css')}}" title="blaze-orange" media="all" />
	    <link rel="alternate stylesheet" href="{{asset('css/schemes/hot-pink.css')}}" title="hot-pink" media="all" />
	    <!-- END Demo Examples -->
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="{{asset('css/boxicons.min.css')}}">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        {{-- Font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
        @endsection
        
        @section('footer')  
        <div class="head">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="sidebar-left">
                            <ul class="nav nav-pills nav-stacked nav-arrow">
                                <li>
                                    <a href="{{url('g_profile/my_account_settings')}}">Settings</a>
                                </li>
                                <li>
                                    <a href="{{url('g_profile/product')}}">Add Product</a>
                                </li>
                                <li class="active">
                                    <a href="{{ url('g_profile/my_orders_history') }}">Orders History</a>
                                </li>
                                <li>
                                    <a href="{{url('g_profile/my_product')}}">My Product</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-9">
                                <table class="table table-order">
                                     <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Count</th>
                                            <th>Feedback</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart_tbody">
                                        @foreach($order_this as $product)
                                            @if($product->feedback == '')
                                                    <tr data-id="this_{{ $product->order_pro->id }}">
                                                        <td class="cart-item-image" style="height: 80px; width: 105px;">
                                                            <a class="cart_pr_img">
                                                                <img src="{{ asset('product_photo/'.$product->order_pro->p_photo[0]->photo) }}" alt="Image" title="Image" style="height: 100%; width: 100%;">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$product->id) }}">{{ $product->order_pro->name }}</a>
                                                        </td>
                                                        <td class="cart_td">&#36; {{ $product->order_pro->price }}
                                                        </td>
                                                        <td>
                                                            <a>{{ $product->count }}</a>
                                                        </td>
                                                        <td style="width: 40%;">
                                                            <button class="show_add_feedbeck">+ Feedback</button>
                                                            <div class="div_feedback" style="display: none; text-align: right;">
                                                                <div class="form-group">
                                                                    <p class="text_error" style="display: none; color: red; height: 30px; margin-bottom: 6px; justify-content: center; align-items: center; border-radius: 10px; font-size: 14px;"></p>
                                                                    <textarea class="form-control text" placeholder="Feedback" style="resize: none; margin: 10px; width: 94%;"></textarea>
                                                                </div>
                                                                <input type="submit" value="Add Feedback" class="btn btn-primary add_feedbeck">
                                                            </div>
                                                            <div class="div_ok" style="display: none;">
                                                                <div style="height: 20px; width: 20px; border-radius: 50%; color: #fff; background: green; text-align: center; display: inline-block;">&#10004;</div>
                                                                <button class="form_change">Change Feedback</button>
                                                            </div>
                                                            <div class="div_change" style="display: none; text-align: right;">
                                                                <p class="text_error" style="display: none; color: red; height: 30px; margin-bottom: 6px; justify-content: center; align-items: center; border-radius: 10px; font-size: 14px;"></p>
                                                                <textarea class="form-control text" placeholder="Feedback" style="resize: none; margin: 10px; width: 94%;"></textarea>
                                                                <a class="change_feedback">Change</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @else
                                                    <tr data-id="this_{{ $product->order_pro->id }}">
                                                        <td class="cart-item-image" style="height: 80px; width: 105px;">
                                                            <a class="cart_pr_img">
                                                                <img src="{{ asset('product_photo/'.$product->order_pro->p_photo[0]->photo) }}" alt="Image" title="Image" style="height: 100%; width: 100%;">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$product->id) }}">{{ $product->order_pro->name }}</a>
                                                        </td>
                                                        <td class="cart_td">&#36; {{ $product->order_pro->price }}
                                                        </td>
                                                        <td>
                                                            <a>{{ $product->count }}</a>
                                                        </td>
                                                        <td style="width: 40%;">
                                                            <div class="div_ok">
                                                                <div style="height: 20px; width: 20px; border-radius: 50%; color: #fff; background: green; text-align: center; display: inline-block;">&#10004;</div>
                                                                <button class="form_change">Change Feedback</button>
                                                            </div>
                                                            <div class="div_change" style="display: none; text-align: right;">
                                                                <p class="text_error" style="display: none; color: red; height: 30px; margin-bottom: 6px; justify-content: center; align-items: center; border-radius: 10px; font-size: 14px;"></p>
                                                                <textarea class="form-control text" placeholder="Feedback" style="resize: none; margin: 10px; width: 94%;">{{ $product->feedback->feedback }}</textarea>
                                                                <a class="change_feedback">Change</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
            <footer class="main" id="main-footer">
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <p>Copyright © <?php date_default_timezone_set("Asia/Yerevan"); echo(date('Y')); ?>, Your Store, All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="bx bx-chevrons-up"></i>
            <i class="bx bx-chevrons-up bx-fade-up"></i>
        </div>
        <!-- End Go Top Area -->
        </div>
    </body>
    <!-- jQuery and Loading -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/loader.js')}}"></script>

    <script type="text/javascript">
        $('.show_add_feedbeck').click(function() {
            $(this).parent().find('.div_feedback').toggle('fadeIn');
        });

        let url = window.location.href.split('/');
        $('.add_feedbeck').click(function() {
            if ($(this).parent().find('.text').val() == '') {
                $(this).parent().find('.text').css('border', '1px solid red');
            }else {
                $(this).parent().find('.text').css('border', '1px solid #d9d9d9');
                let send = {
                    'product_id' : Number($(this).parent().parent().parent().attr('data-id').split('_')[1]),
                    'order_id' : Number(url[url.length-1]),
                    'feedback' : $(this).parent().find('.text').val()
                };
                let t = $(this);
                $.ajax({
                    url: '/g_add_feedback',
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {send},
                    success: function(data){
                        if (data){
                            $(t).parent().parent().find('.div_ok').css('display', 'block');
                            $(t).parent().parent().find('.div_change').fadeOut('display', 'block');
                            $(t).parent().parent().find('.div_change').find('.text').html(send['feedback']);
                            $(t).parent().parent().find('.show_add_feedbeck').remove();
                            $(t).parent().remove();
                            $(t).parent().find('.text_error').css('display', 'none').text('');
                        }
                    },
                    error: function(reject) {
                        var response = $.parseJSON(reject.responseText);
                        if (response.success === false){
                            if (reject.status === 400){
                                $.each(response.errors, function (key, val) {
                                    switch (key) {
                                        case 'feedback':
                                            $(t).parent().find('.text').css('border', '1px solid red');
                                            $(t).parent().find('.text_error').css('display', 'block').text(val[0]);
                                            break;
                                    }
                                });
                            }
                        }
                    }
                });
            }
        });

        $('.form_change').click(function() {
            $(this).parent().parent().find('.div_change').toggle('fadeIn');
        });


        $('.change_feedback').click(function() {
            if ($(this).parent().find('.text').val() == '') {
                $(this).parent().find('.text').css('border', '1px solid red');
            }else {
                $(this).parent().find('.text').css('border', '1px solid #d9d9d9');
                let send = {
                    'product_id' : Number($(this).parent().parent().parent().attr('data-id').split('_')[1]),
                    'order_id' : Number(url[url.length-1]),
                    'feedback' : $(this).parent().find('.text').val()
                };
                let t = $(this);
                $.ajax({
                    url: '/change_feedback',
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {send},
                    success: function(data){
                        if (data){
                            $(t).parent().find('.text_error').css('display', 'none').text('');
                            $(t).parent().fadeOut();
                        }
                    },
                    error: function(reject) {
                        var response = $.parseJSON(reject.responseText);
                        if (response.success === false){
                            if (reject.status === 400){
                                $.each(response.errors, function (key, val) {
                                    switch (key) {
                                        case 'feedback':
                                            $(t).parent().find('.text').css('border', '1px solid red');
                                            $(t).parent().find('.text_error').css('display', 'block').text(val[0]);
                                            break;
                                    }
                                });
                            }
                        }
                    }
                });
            }
        });
    </script>

    <!-- Scripts queries -->
    <script src="{{asset('js/up.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/boostrap.min.js')}}"></script>
    <script src="{{asset('js/countdown.min.js')}}"></script>
    <script src="{{asset('js/flexnav.min.js')}}"></script>
    <script src="{{asset('js/magnific.js')}}"></script>
    <script src="{{asset('js/tweet.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="{{asset('js/fitvids.min.js')}}"></script>
    <script src="{{asset('js/mail.min.js')}}"></script>
    <script src="{{asset('js/ionrangeslider.js')}}"></script>
    <script src="{{asset('js/icheck.js')}}"></script>
    <script src="{{asset('js/fotorama.js')}}"></script>
    <script src="{{asset('js/card-payment.js')}}"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/masonry.js')}}"></script>
    <script src="{{asset('js/nicescroll.js')}}"></script>

    <!-- Custom scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/switcher.js')}}"></script>
</html>
@endsection