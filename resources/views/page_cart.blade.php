@extends('Layout.menu_layout')
@section('header')
<!DOCTYPE HTML>
<html>
    <head>  
        <meta name="keywords" content="Koupon HTML5 Template" />
        <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
        <meta name="author" content="Tsoy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITLE -->
        <title>Arduix</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="img/favicon.png">
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
        <!-- Fontawesome --> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
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
        {{-- Csrf Token --}}
        <input type="hidden" id="cart_token" value="{{csrf_token()}}">
        @endsection
        
        @section('footer')
        <div class="head">
            <div class="gap"></div>
            @if (!$cart_product->isEmpty())
                    <div class="container con_empty">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Name</th>
                                            <th>QTY</th>
                                            <th>Price</th>
                                            <th>Wishlist</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart_tbody">
                                        @foreach($cart_product as $product)
                                            @if ($product->wishlist === 1)
                                                    <tr class="this_{{$product->Pro_product->id}}" data-id="{{$product->Pro_product->count}}">
                                                        <td class="cart-item-image" style="height: 80px; width: 105px;">
                                                            <a class="cart_pr_img">
                                                                <img src="{{asset('product_photo/'.$product->Pro_product->p_photo[0]->photo)}}" alt="Image" title="Image" style="height: 100%; width: 100%;">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a>{{$product->Pro_product->name}}</a>
                                                        </td>
                                                        <td class="cart-item-quantity">
                                                            <i class="fa fa-minus cart-item-minus"></i>
                                                            <input type="text" name="cart-quantity" class="cart-quantity" value="{{$product->count}}" disabled>
                                                            <i class="fa fa-plus cart-item-plus"></i>
                                                        </td>
                                                        <td class="cart_td" data-id="{{ $product->Pro_product->price }}">&#36; {{$product->Pro_product->price  * $product->count }}.00</td>
                                                        <td class="cart-item-wishlist btn btn-sm move_to_wish_list" style="display: none;">
                                                            <a class="fas fa-heart">Move To Wish List</a>
                                                        </td>
                                                        <td class="cart-item-wishlist btn btn-sm remove_from_wish_list">
                                                            <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                            Remove From Wishlist
                                                        </td>
                                                        <td class="cart-item-remove">
                                                            <a class="fa fa-times"></a>
                                                        </td>
                                                    </tr>
                                                @else
                                                    <tr class="this_{{$product->Pro_product->id}}" data-id="{{$product->Pro_product->count}}">
                                                        <td class="cart-item-image" style="height: 80px; width: 105px;">
                                                            <a class="cart_pr_img">
                                                                <img src="{{asset('product_photo/'.$product->Pro_product->p_photo[0]->photo)}}" alt="Image" title="Image" style="height: 100%; width: 100%;">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a>{{$product->Pro_product->name}}</a>
                                                        </td>
                                                        <td class="cart-item-quantity">
                                                            <i class="fa fa-minus cart-item-minus"></i>
                                                            <input type="text" name="cart-quantity" class="cart-quantity" value="{{$product->count}}" disabled>
                                                            <i class="fa fa-plus cart-item-plus"></i>
                                                        </td>
                                                        <td class="cart_td" data-id="{{ $product->Pro_product->price }}">&#36; {{$product->Pro_product->price * $product->count }}.00</td>
                                                        <td class="cart-item-wishlist btn btn-sm move_to_wish_list">
                                                            <a class="fas fa-heart">Move To Wish List</a>
                                                        </td>
                                                        <td class="cart-item-wishlist btn btn-sm remove_from_wish_list" style="display: none;">
                                                            <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                            Remove From Wish List
                                                        </td>
                                                        <td class="cart-item-remove">
                                                            <a class="fa fa-times"></a>
                                                        </td>
                                                    </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-primary empty_the_cart">Empty the cart</a>
                            </div>
                            <div class="col-md-3">
                                <ul class="cart-total-list">
                                    <li>
                                        <span>Total</span>
                                        <span class="total_span"></span>
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-lg buy_all">Buy all</a>
                            </div>
                        </div>
                        <div class="gap"></div>
                    </div>
                @else
                    <div class="container" style="display: flex; justify-content: center; align-items: center;">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th>  
                                                Your shopping cart is empty
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
            @endif
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
    
    {{-- Ptoduct --}}
    <script src="{{asset('js/cart_product.js')}}"></script>
    <script type="text/javascript">
        $('.buy_all').click(function(event) {
            const total = $('.total_span').html().split('$')[1];
            $.ajax({
                url: '/g_profile/page_cart/stripe_total',
                type: 'post',
                data: {'_token': '{{ csrf_token() }}', total},
                success: function(r){
                    location.href = '{{ url('g_profile/page_cart/stripe') }}'
                }
            });
        });
    </script>
</html>
@endsection
