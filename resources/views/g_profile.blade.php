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
        <link rel="stylesheet" href="{{asset('css/boxicons_min.css')}}">
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
                <div class="container">
                    <div class="gap gap-small"></div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-banner">
                                <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                <div class="product-banner-inner">
                                    <h5>{{ __('g_profile.playstation_accsories') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-banner">
                                <img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                <div class="product-banner-inner">
                                    <h5>{{ __('g_profile.canon_cameras') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-banner">
                                <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                                <div class="product-banner-inner">
                                    <h5>{{ __('g_profile.glass_collections') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div>
                    <h1 class="mb20 text-center">{{ __('g_profile.new_products') }} <small><a href="{{ url('g_profile/page_shop') }}">{{ __('g_profile.view_all') }} </a></small></h1>
                    <div class="row row-wrap">
                        @foreach($product as $pro)
                            @if ($pro->cart === 1 && $pro->wishlist === 1)
                                    <div class="col-md-4">
                                        <div class="product-thumb">
                                            <header class="product-header">
                                                <span class="product-label label label-info">{{ __('g_profile.new') }}</span>
                                                <img src="{{ asset('product_photo/'.$pro->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                            </header>
                                            <div class="product-inner">
                                                <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$pro->id) }}" class="product-title">{{ $pro->name }}</a>
                                                <p class="product-desciption">
                                                    {{ $pro->desciption }}
                                                </p>
                                                <div class="product-meta">
                                                    <span class="product-time">
                                                        <i class="fa fa-clock-o"></i> 
                                                        {{ $pro->time }}
                                                    </span>
                                                    <ul class="product-price-list">
                                                        <li>
                                                            <span class="product-price">
                                                                &#36; {{ $pro->price }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <ul class="product-actions-list">
                                                        <li>
                                                            <a class="cart_{{ $pro->id }} this_cart btn btn-sm" style="display: none;">
                                                                <to_carti class="fas fa-cart-arrow-down"></i> 
                                                                {{ __('g_profile.to_cart') }}
                                                            </a>
                                                            <a class="cart_{{ $pro->id }}_remove this_cart_remove btn btn-sm">
                                                                <i class="fas fa-shopping-cart"></i> 
                                                                {{ __('g_profile.remove_from_cart') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist btn btn-sm" style="display: none;">
                                                                <i class="fas fa-heart"></i>
                                                                {{ __('g_profile.to_wish_list ') }}
                                                           </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn btn-sm">
                                                               <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                {{ __('g_profile.temove_from_wish_list') }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($pro->cart === 0 && $pro->wishlist === 0)
                                    <div class="col-md-4">
                                        <div class="product-thumb">
                                            <header class="product-header">
                                                <span class="product-label label label-info">{{ __('g_profile.new') }}</span>
                                                <img src="{{ asset('product_photo/'.$pro->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                            </header>
                                            <div class="product-inner">
                                                <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$pro->id) }}" class="product-title">{{ $pro->name }}</a>
                                                <p class="product-desciption">
                                                    {{ $pro->desciption }}
                                                </p>
                                                <div class="product-meta">
                                                    <span class="product-time">
                                                        <i class="fa fa-clock-o"></i> 
                                                        {{ $pro->time }}
                                                    </span>
                                                    <ul class="product-price-list">
                                                        <li>
                                                            <span class="product-price">
                                                                &#36; {{ $pro->price }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <ul class="product-actions-list">
                                                        <li>
                                                            <a class="cart_{{ $pro->id }} this_cart btn btn-sm">
                                                                <i class="fas fa-cart-arrow-down"></i> 
                                                                {{ __('g_profile.to_cart') }}
                                                            </a>
                                                            <a class="cart_{{ $pro->id }}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                <i class="fas fa-shopping-cart"></i> 
                                                                {{ __('g_profile.remove_from_cart') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist btn btn-sm">
                                                                <i class="fas fa-heart"></i>
                                                                {{ __('g_profile.to_wish_list') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn btn-sm" style="display: none;">                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                {{ __('g_profile.temove_from_wish_list') }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($pro->cart === 1 && $pro->wishlist === 0)
                                    <div class="col-md-4">
                                        <div class="product-thumb">
                                            <header class="product-header">
                                                <span class="product-label label label-info">{{ __('g_profile.new') }}</span>
                                                <img src="{{ asset('product_photo/'.$pro->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                            </header>
                                            <div class="product-inner">
                                                <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$pro->id) }}" class="product-title">{{ $pro->name }}</a>
                                                <p class="product-desciption">
                                                    {{ $pro->desciption }}
                                                </p>
                                                <div class="product-meta">
                                                    <span class="product-time">
                                                        <i class="fa fa-clock-o"></i> 
                                                        {{ $pro->time }}
                                                    </span>
                                                    <ul class="product-price-list">
                                                        <li>
                                                            <span class="product-price">
                                                                &#36; {{ $pro->price }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <ul class="product-actions-list">
                                                        <li>
                                                            <a class="cart_{{ $pro->id }} this_cart btn btn-sm" style="display: none;">
                                                                <to_carti class="fas fa-cart-arrow-down"></i> 
                                                                {{ __('g_profile.to_cart') }}
                                                            </a>
                                                            <a class="cart_{{ $pro->id }}_remove this_cart_remove btn btn-sm">
                                                                <i class="fas fa-shopping-cart"></i> 
                                                                {{ __('g_profile.remove_from_cart') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist btn btn-sm">
                                                                <i class="fas fa-heart"></i>
                                                                {{ __('g_profile.to_wish_list') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn btn-sm" style="display: none;">                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                {{ __('g_profile.temove_from_wish_list') }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($pro->cart === 0 && $pro->wishlist === 1)
                                    <div class="col-md-4">
                                        <div class="product-thumb">
                                            <header class="product-header">
                                                <span class="product-label label label-info">{{ __('g_profile.new') }}</span>
                                                <img src="{{ asset('product_photo/'.$pro->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                            </header>
                                            <div class="product-inner">
                                                <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$pro->id) }}" class="product-title">{{ $pro->name }}</a>
                                                <p class="product-desciption">
                                                    {{ $pro->desciption }}
                                                </p>
                                                <div class="product-meta">
                                                    <span class="product-time">
                                                        <i class="fa fa-clock-o"></i> 
                                                        {{ $pro->time }}
                                                    </span>
                                                    <ul class="product-price-list">
                                                        <li>
                                                            <span class="product-price">
                                                                &#36; {{ $pro->price }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <ul class="product-actions-list">
                                                        <li>
                                                            <a class="cart_{{ $pro->id }} this_cart btn btn-sm">
                                                                <i class="fas fa-cart-arrow-down"></i> 
                                                                {{ __('g_profile.to_cart') }}
                                                            </a>
                                                            <a class="cart_{{ $pro->id }}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                <i class="fas fa-shopping-cart"></i> 
                                                                {{ __('g_profile.remove_from_cart') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist btn btn-sm" style="display: none;">
                                                                <i class="fas fa-heart"></i>
                                                                {{ __('g_profile.to_wish_list') }}
                                                            </a>
                                                            <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn btn-sm" >                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                {{ __('g_profile.temove_from_wish_list') }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            @endif
                        @endforeach
                    </div>
                    <div class="gap"></div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="sale-point"><i class="fa fa-truck sale-point-icon"></i>
                                <h5 class="sale-point-title">{{ __('g_profile.fast_&_free_shipping') }}</h5>
                                <p class="sale-point-description">{{ __('g_profile.sapien_quis') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sale-point"><i class="fa fa-tags sale-point-icon"></i>
                                <h5 class="sale-point-title">{{ __('g_profile.best_discounts') }}</h5>
                                <p class="sale-point-description">{{ __('g_profile.in_eget') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sale-point"><i class="fa fa-money sale-point-icon"></i>
                                <h5 class="sale-point-title">{{ __('g_profile.guaranteed_refund') }}</h5>
                                <p class="sale-point-description">{{ __('g_profile.ridiculus') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div>
                </div>

                <!-- ========== MAIN FOOTER ========== -->
                <footer class="main" id="main-footer">
                    <div class="footer-copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>{{ __('g_profile.copyright') }} <?php date_default_timezone_set("Asia/Yerevan"); echo(date('Y')); ?>, {{ __('g_profile.all_rights_reserved') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- ========== END MAIN  FOOTER ========== -->
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
</html>
@endsection

