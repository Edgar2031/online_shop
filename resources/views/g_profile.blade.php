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
        @endsection
        
        @section('footer')
            <!-- TOP AREA -->
            <div class="top-area">
                <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
                    <div>
                        <div class="bg-holder">
                            <img src="img/branding__ipad_interactive_design_1200x480.jpg" alt="Image Alternative text" title="Branding  iPad Interactive Design" />
                            <div class="vert-center text-white text-center slider-caption">
                                <h2 class="text-uc">New Bloke Collection</h2>
                                <p class="text-bigger">Enim gravida tempus tincidunt posuere consequat vehicula</p>
                                <p class="text-hero">Save up to 40%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-holder">
                            <img src="img/hot_mixer_1200x480.jpg" alt="Image Alternative text" title="Hot mixer" />
                            <div class="vert-center text-white text-center slider-caption">
                                <h2 class="text-uc">Modern DJ Sets</h2>
                                <p class="text-bigger">Lorem curae sociis volutpat facilisis varius vehicula</p>
                                <p class="text-hero">Save up to 50%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-holder">
                            <img src="img/iphone_5_ipad_mini_ipad_3_1200x480.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                            <div class="vert-center text-white text-center slider-caption">
                                <h2 class="text-uc">Gatgets Giveaway</h2>
                                <p class="text-bigger">Commodo natoque tristique laoreet tellus ad id</p>
                                <p class="text-hero">Save up to 70%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP AREA -->

            <!-- SEARCH AREA -->
            <form class="search-area form-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 clearfix">
                            <label><i class="fa fa-search"></i><span>I am searching for</span>
                            </label>
                            <div class="search-area-division search-area-division-input">
                                <input class="form-control" type="text" placeholder="Travel Vacation" />
                            </div>
                        </div>
                        <div class="col-md-3 clearfix">
                            <label><i class="fa fa-map-marker"></i><span>In</span>
                            </label>
                            <div class="search-area-division search-area-division-location">
                                <input class="form-control" type="text" placeholder="Boston" />
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END SEARCH AREA -->
            
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="sidebar-left">
                            <h3 class="mb20 text-center">I am looking for</h3>
                            <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                                <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink</a>
                                </li>
                                <li><a href="#"><i class="fa fa-calendar"></i>Events</a>
                                </li>
                                <li><a href="#"><i class="fa fa-female"></i>Beauty</a>
                                </li>
                                <li><a href="#"><i class="fa fa-bolt"></i>Fitness</a>
                                </li>
                                <li><a href="#"><i class="fa fa-headphones"></i>Electronics</a>
                                </li>
                                <li><a href="#"><i class="fa fa-image"></i>Furniture</a>
                                </li>
                                <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a>
                                </li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping</a>
                                </li>
                                <li><a href="#"><i class="fa fa-home"></i>Home & Graden</a>
                                </li>
                                <li><a href="#"><i class="fa fa-plane"></i>Travel</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <h1 class="mb20 text-center">Weekly Featured <small><a href="#">View All</a></small></h1>
                        <div class="row row-wrap">
                            <div class="col-md-4">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                                    </header>
                                    <div class="product-inner">
                                        <ul class="icon-group icon-list-rating" title="3.7/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-title">Green Furniture Pack</h5>
                                        <p class="product-desciption">Senectus ut luctus rhoncus proin mattis aenean cubilia</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$177</span>
                                                </li>
                                            </ul>
                                            <ul class="product-actions-list">
                                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                                </li>
                                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer" />
                                    </header>
                                    <div class="product-inner">
                                        <ul class="icon-group icon-list-rating" title="3/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-title">Modern DJ Set</h5>
                                        <p class="product-desciption">Senectus ut luctus rhoncus proin mattis aenean cubilia</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$190</span>
                                                </li>
                                            </ul>
                                            <ul class="product-actions-list">
                                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                                </li>
                                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                                    </header>
                                    <div class="product-inner">
                                        <ul class="icon-group icon-list-rating" title="4.1/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-title">Awesome Vacation</h5>
                                        <p class="product-desciption">Senectus ut luctus rhoncus proin mattis aenean cubilia</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$135</span>
                                                </li>
                                            </ul>
                                            <ul class="product-actions-list">
                                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                                </li>
                                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
                <div class="row row-wrap">
                    <div class="col-md-4">
                        <div class="product-banner">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="product-banner-inner">
                                <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-banner">
                            <img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                            <div class="product-banner-inner">
                                <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-banner">
                            <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                            <div class="product-banner-inner">
                                <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
                <h1 class="mb20 text-center">New Arrivals <small><a href="#">View all</a></small></h1>
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Playstation Accessories</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$119</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header"><span class="product-label label label-success">New</span>
                                <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Best Pasta</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$264</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-cutlery"></i>food & drink</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.9/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Violin Lessons</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$167</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.8/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Awesome Vacation</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$166</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header"><span class="product-label label label-warning">Best Seller</span>
                                <img src="img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.3/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Hot Summer Collection</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$281</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Beach Holidays</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$210</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header"><span class="product-label label label-danger">Hot</span>
                                <img src="img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Diving with Sharks</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$138</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class="product-header"><span class="product-label label label-info">Featured</span>
                                <img src="img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.5/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Modern DJ Set</h5>
                                <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$257</span>
                                        </li>
                                    </ul>
                                    <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
                <div class="row row-wrap">
                    <div class="col-md-4">
                        <div class="sale-point"><i class="fa fa-truck sale-point-icon"></i>
                            <h5 class="sale-point-title">Fast & Free Shipping</h5>
                            <p class="sale-point-description">Sapien quis fames congue ultricies himenaeos metus maecenas nam conubia suscipit lacinia facilisis pulvinar orci</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-point"><i class="fa fa-tags sale-point-icon"></i>
                            <h5 class="sale-point-title">Best Discounts</h5>
                            <p class="sale-point-description">In eget lacinia pulvinar habitasse vehicula turpis luctus sagittis montes interdum posuere parturient nostra odio</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-point"><i class="fa fa-money sale-point-icon"></i>
                            <h5 class="sale-point-title">Guaranteed Refund</h5>
                            <p class="sale-point-description">Ridiculus lacinia erat semper mattis auctor arcu per etiam aptent consequat interdum tristique habitasse aenean</p>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>


            <!-- ========== END PAGE CONTENT ========== -->



            <!-- ========== MAIN FOOTER ========== -->

            <footer class="main" id="main-footer">
                <div class="footer-top-area">
                    <div class="container">
                        <div class="row row-wrap">
                            <div class="col-md-3">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="logo" title="logo" class="logo">
                                </a>
                                <ul class="list list-social">
                                    <li>
                                        <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                                    </li>
                                </ul>
                                <p>Enim proin pharetra interdum praesent mus eros sit ipsum potenti enim faucibus nascetur ante nostra ligula tempus turpis senectus hac</p>
                            </div>
                            <div class="col-md-3">
                                <h4>Sign Up to the Newsletter</h4>
                                <div class="box">
                                    <form>
                                        <div class="form-group mb10">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <p class="mb10">Eget scelerisque adipiscing varius mollis dis sed</p>
                                        <input type="submit" class="btn btn-primary" value="Sign Up" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h4>Couponia on Twitter</h4>
                                <!-- START TWITTER -->
                                <div class="twitter-ticker" id="twitter-ticker"></div>
                                <!-- END TWITTER -->
                            </div>
                            <div class="col-md-3">
                                <h4>Recent News</h4>
                                <ul class="thumb-list">
                                    <li>
                                        <a href="#">
                                            <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Tortor leo</a></h5>
                                            <p class="thumb-list-item-desciption">Risus est tellus odio dignissim</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Mollis nulla</a></h5>
                                            <p class="thumb-list-item-desciption">Ultrices non leo vivamus eros</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Nunc praesent</a></h5>
                                            <p class="thumb-list-item-desciption">Fames cras gravida nam lacinia</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <p>Copyright © <?php date_default_timezone_set("Asia/Yerevan"); echo(date('Y')); ?>, Your Store, All Rights Reserved</p>
                            </div>
                            <div class="col-md-6 col-md-offset-2">
                                <div class="pull-right">
                                    <ul class="list-inline list-payment">
                                        <li>
                                            <img src="img/payment/american-express-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                        <li>
                                            <img src="img/payment/cirrus-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                        <li>
                                            <img src="img/payment/discover-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                        <li>
                                            <img src="img/payment/ebay-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                        <li>
                                            <img src="img/payment/maestro-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                        <li>
                                            <img src="img/payment/mastercard-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                        <li>
                                            <img src="img/payment/visa-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                        </li>
                                    </ul>
                                </div>
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