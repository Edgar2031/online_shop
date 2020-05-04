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
        <div class="gap"></div>
		<div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if(!empty($product))
                        @foreach($product as $pro)
                            <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                                <h3>{{ __('product_shop_sidebar.add_a_eview') }}</h3>
                                <div data-id="{{ $pro->id }}">
                                    <div class="form-group">
                                        <label>Review</label>
                                        <p class="text_error" style="display: none; color: red; height: 30px; margin-bottom: 6px; justify-content: center; align-items: center; border-radius: 10px; font-size: 14px;"></p>
                                        <textarea class="text_review form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('product_shop_sidebar.rating') }}</label>
                                        <ul class="icon-list icon-list-inline star-rating star_count" id="star-rating">
                                            <li class="_star" data-value="1">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="_star" data-value="2">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="_star" data-value="3">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="_star" data-value="4">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="_star" data-value="5">
                                                <i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="submit" class="add_review btn btn-primary" value="Submit" />
                                </div>
                            </div>
                                 
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150" data-id="{{ $pro->id }}">
                                        @if($pro->p_photo)
                                            @foreach($pro->p_photo as $photo)
                                                <img src="{{ asset('product_photo/'.$photo->photo) }}" title="Gamer Chick" />
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="product-info box">
                                        <h3>{{ ucfirst($pro->name) }}</h3>
                                        <p class="product-info-price">{{ __('product_shop_sidebar.price') }} <br> ${{ $pro->price }}</p>
                                        <p class="text-smaller text-muted">{{ __('product_shop_sidebar.description') }} <br> {{ ucfirst($pro->description) }}</p>
                                        <ul class="icon-list list-space product-info-list">
                                            @switch($pro->category)
                                                @case('grocery')
                                                        <li><i class="fas fa-apple-alt"></i> {{ ucfirst($pro->category) }}</li>
                                                    @break;
                                                @case('apparel')
                                                        <li><i class="fas fa-tshirt"></i> {{ ucfirst($pro->category) }}</li>
                                                    @break;
                                                @case('electronics')
                                                        <li><i class="fas fa-tv"></i> {{ ucfirst($pro->category) }}</li>
                                                    @break;
                                                @case('another')
                                                        <li><i class="far fa-question-circle"></i> {{ ucfirst($pro->category) }}</li>
                                                    @break;
                                            @endswitch
                                        </ul>
                                        <ul class="list-inline">
                                            @if ($pro->cart === 1 && $pro->wishlist === 1) 
                                                    <li>
                                                        <a class="cart_{{ $pro->id }} this_cart btn btn-primary" style="display: none;">
                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                            To Cart
                                                        </a>
                                                        <a class="cart_{{ $pro->id }}_remove this_cart_remove btn">
                                                            <i class="fas fa-shopping-cart"></i> 
                                                            Remove From Cart
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist btn" style="display: none;">
                                                            <i class="fas fa-heart">To Wish List</i>
                                                        </a>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn">
                                                           <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                            Remove From Wish List
                                                        </a>
                                                    </li>
                                                @elseif($pro->cart === 0 && $pro->wishlist === 0)
                                                    <li>
                                                        <a class="cart_{{ $pro->id }} this_cart btn btn-primary">
                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                            To Cart
                                                        </a>
                                                        <a class="cart_{{ $pro->id }}_remove this_cart_remove btn" style="display: none;">
                                                            <i class="fas fa-shopping-cart"></i> 
                                                            Remove From Cart
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist btn" >
                                                            <i class="fas fa-heart">To Wish List</i>
                                                        </a>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn" style="display: none;">                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                            Remove From Wish List
                                                        </a>
                                                    </li>
                                                @elseif($pro->cart === 1 && $pro->wishlist === 0)
                                                    <li>
                                                        <a class="cart_{{ $pro->id }} this_cart btn btn-primary" style="display: none;">
                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                            To Cart
                                                        </a>
                                                        <a class="cart_{{ $pro->id }}_remove this_cart_remove btn">
                                                            <i class="fas fa-shopping-cart"></i> 
                                                            Remove From Cart
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist btn">
                                                            <i class="fas fa-heart">To Wish List</i>
                                                        </a>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn" style="display: none;">
                                                            <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                            Remove From Wish List
                                                        </a>
                                                    </li>
                                                @elseif($pro->cart === 0 && $pro->wishlist === 1)
                                                    <li>
                                                        <a class="cart_{{ $pro->id }} this_cart btn btn-primary">
                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                            To Cart
                                                        </a>
                                                        <a class="cart_{{ $pro->id }}_remove this_cart_remove btn" style="display: none;">
                                                            <i class="fas fa-shopping-cart"></i> 
                                                            Remove From Cart
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist btn" style="display: none;">
                                                            <i class="fas fa-heart">To Wish List</i>
                                                        </a>
                                                        <a class="wishlist_{{ $pro->id }} this_wishlist_remove btn">   <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                            Remove From Wish List
                                                        </a>
                                                    </li>
                                                @else
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#tab-1" data-toggle="tab">
                                            <i class="fa fa-comments"></i>
                                            {{ __('product_shop_sidebar.reviews') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab-2" data-toggle="tab">
                                            <i class="fa fa-comments"></i>
                                            {{ __('product_shop_sidebar.feedbeck') }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab-1">
                                        <ul class="comments-list" style="overflow: auto; height: 200px;">
                                            @if(!empty($pro->review))
                                                @foreach($pro->review as $r)
                                                    @if($r->user_id == Session::get('id'))
                                                            <li data-id="{{ $r->id }}">
                                                                <!-- REVIEW -->
                                                                <article class="comment">
                                                                    <div class="comment-inner" style="width: 95%;">
                                                                        <ul class="icon-group icon-list-rating comment-review-rate" title="rating">
                                                                            @for($i = 0; $i < $r->star; $i++)
                                                                                <li>
                                                                                    <i class="fas fa-star"></i>
                                                                                </li>
                                                                            @endfor
                                                                            <li style="float: right;">
                                                                                <button type="button" class="remove_review" style="font-family: inherit; font-size: inherit; line-height: inherit; border-radius: 85%; border: none; color: #fff; font-size: 20px; height: 22px;">×</button>
                                                                            </li>
                                                                        </ul>
                                                                        <span class="comment-author-name">
                                                                            {{ $pro->Seller->name }} {{ $pro->Seller->surname }}
                                                                            <span>{{ $r->time }}</span>
                                                                        </span>
                                                                        <p class="comment-content">{{ $r->review }}</p>
                                                                    </div>
                                                                </article>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <!-- REVIEW -->
                                                                <article class="comment">
                                                                    <div class="comment-inner" style="width: 95%;">
                                                                        <ul class="icon-group icon-list-rating comment-review-rate" title="rating">
                                                                            @for($i = 0; $i < $r->star; $i++)
                                                                                <li>
                                                                                    <i class="fas fa-star"></i>
                                                                                </li>
                                                                            @endfor
                                                                        </ul>
                                                                        <span class="comment-author-name">
                                                                            {{ $pro->Seller->name }} {{ $pro->Seller->surname }}
                                                                            <span>{{ $r->time }}</span>
                                                                        </span>
                                                                        <p class="comment-content">{{ $r->review }}</p>
                                                                    </div>
                                                                </article>
                                                            </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                        <a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out">
                                            <i class="fas fa-pencil-alt"></i> 
                                            {{ __('product_shop_sidebar.add_a_eview') }}
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                        <ul class="comments-list" style="overflow: auto; height: 200px;">
                                            @if(!empty($pro->feedbeck))
                                                @foreach($pro->feedbeck as $f)
                                                    @if($f->user_id == Session::get('id'))
                                                            <li data-id="{{ $f->id }}">
                                                                <!-- Feedback -->
                                                                <article class="comment">
                                                                    <div class="comment-inner" style="width: 95%;">
                                                                        <ul class="icon-group icon-list-rating comment-review-rate">
                                                                            <li style="float: right;">
                                                                                <button type="button" class="remove_feedback" style="font-family: inherit; font-size: inherit; line-height: inherit; border-radius: 85%; border: none; color: #fff; font-size: 20px; height: 22px;">×</button>
                                                                            </li>
                                                                        </ul>
                                                                        <span class="comment-author-name">
                                                                            {{ $pro->Seller->name }} {{ $pro->Seller->surname }}
                                                                            <span>{{ $f->time }}</span>
                                                                        </span>
                                                                        <p class="comment-content">{{ $f->feedback }}</p>
                                                                    </div>
                                                                </article>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <!-- Feedback -->
                                                                <article class="comment">
                                                                    <div class="comment-inner" style="width: 95%;">
                                                                        <span class="comment-author-name">
                                                                            {{ $pro->Seller->name }} {{ $pro->Seller->surname }}
                                                                            <span>{{ $f->time }}</span>
                                                                        </span>
                                                                        <p class="comment-content">{{ $f->feedback }}</p>
                                                                    </div>
                                                                </article>
                                                            </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <h3>{{ __('product_shop_sidebar.similar_porducts') }}</h3>
                            @if(!empty($pro->similar_product))
                                <div class="gap gap-mini"></div>
                                <div class="row row-wrap">
                                    @foreach($pro->similar_product as $si)
                                        @if ($si->cart === 1 && $si->wishlist === 1)
                                            <div class="col-md-4">
                                                <div class="product-thumb">
                                                    <header class="product-header">
                                                        <img src="{{ asset('product_photo/'.$si->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                                    </header>
                                                    <div class="product-inner">
                                                        <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$si->id) }}" class="product-title">{{ ucfirst($si->name) }}</a>
                                                        <p class="product-desciption">
                                                            {{ ucfirst($si->description) }}
                                                        </p>
                                                        <div class="product-meta">
                                                            <span class="product-time">
                                                                <i class="fa fa-clock-o"></i> 
                                                                {{ $si->time }}
                                                            </span>
                                                            <ul class="product-price-list">
                                                                <li>
                                                                    <span class="product-price">
                                                                        &#36; {{ $si->price }}
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                            <ul class="product-actions-list">
                                                                <li>
                                                                    <a class="cart_{{ $si->id }} this_cart btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-cart-arrow-down"></i> 
                                                                        To Cart
                                                                    </a>
                                                                    <a class="cart_{{ $si->id }}_remove this_cart_remove btn btn-sm">
                                                                        <i class="fas fa-shopping-cart"></i> 
                                                                        Remove From Cart
                                                                    </a>
                                                                    <a class="wishlist_{{ $si->id }} this_wishlist btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-heart">To Wish List</i>
                                                                    </a>
                                                                    <a class="wishlist_{{ $si->id }} this_wishlist_remove btn btn-sm">
                                                                       <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                        Remove From Wish List
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @elseif($si->cart === 0 && $si->wishlist === 0)
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <img src="{{ asset('product_photo/'.$si->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                                        </header>
                                                        <div class="product-inner">
                                                            <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$si->id) }}" class="product-title">{{ ucfirst($si->name) }}</a>
                                                            <p class="product-desciption">
                                                                {{ ucfirst($si->description) }}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    {{ $si->time }}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; {{ $si->price }}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_{{ $si->id }} this_cart btn btn-sm">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_{{ $si->id }}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_{{ $si->id }} this_wishlist btn btn-sm">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_{{ $si->id }} this_wishlist_remove btn btn-sm" style="display: none;">                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($si->cart === 1 && $si->wishlist === 0)
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <img src="{{ asset('product_photo/'.$si->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                                        </header>
                                                        <div class="product-inner">
                                                            <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$si->id) }}" class="product-title">{{ ucfirst($si->name) }}</a>
                                                            <p class="product-desciption">
                                                                {{ ucfirst($si->description) }}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    {{ $si->time }}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; {{ $si->price }}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_{{ $si->id }} this_cart btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_{{ $si->id }}_remove this_cart_remove btn btn-sm">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_{{ $si->id }} this_wishlist btn btn-sm">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_{{ $si->id }} this_wishlist_remove btn btn-sm" style="display: none;">                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($si->cart === 0 && $si->wishlist === 1)
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <img src="{{ asset('product_photo/'.$si->p_photo[0]->photo) }}" alt="Image" title="Image" style='height: 120px;'>
                                                        </header>
                                                        <div class="product-inner">
                                                            <a href="{{ url('g_profile/page_shop/product_shop_sidebar/'.$si->id) }}" class="product-title">{{ ucfirst($si->name) }}</a>
                                                            <p class="product-desciption">
                                                                {{ ucfirst($si->description) }}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    {{ $si->time }}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; {{ $si->price }}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_{{ $si->id }} this_cart btn btn-sm">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_{{ $si->id }}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_{{ $si->id }} this_wishlist btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_{{ $si->id }} this_wishlist_remove btn btn-sm" >                                                                        <img src="{{ asset('img/heart-broken-solid.svg') }}" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
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
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <footer class="main" id="main-footer">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>{{ __('product_shop_sidebar.copyright') }} <?php date_default_timezone_set("Asia/Yerevan"); echo(date('Y')); ?> {{ __('product_shop_sidebar.all_rights_reserved') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let scrollCount = $('.comments-list')[0].scrollHeight;
            $('.comments-list').stop().animate({scrollTop : scrollCount});
        });
        $('.popup-text').click(function() {
            $('.text_review').empty();
            $('.star_count').attr('data-value', '');
            $('._star').removeClass('selected');
            $('.mfp-wrap').css('display', 'block');
            $('.mfp-bg').css('display', 'block');
        });

        $('.this_cart').click(function() {
            const cart_id = Number($(this).attr('class').split(' ')[0].split('_')[1]);
            const btn = $(this).parent().find('.this_cart_remove');
            const is = $(this);  
            $.ajax({
                url: '/g_profile/page_cart/add',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {cart_id},
                success: function(r){
                        $(is).css({
                            display: 'none'
                        });
                        $(btn).css({
                            display: 'block'
                        });
                }
            })
        });

        $('.this_cart_remove').click(function() {
            const cart_id_remove = Number($(this).attr('class').split(' ')[0].split('_')[1]);
            const btn = $(this).parent().find('.this_cart');
            const is = $(this); 
            $.ajax({
                url: '/g_profile/page_cart/remove',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {cart_id_remove},
                success: function(r){
                        $(is).css({
                            display: 'none'
                        });
                        $(btn).css({
                            display: 'block'
                        });
                }
            })
        });

        $('.this_wishlist').click(function() {
            const wishlist_id = Number($(this).attr('class').split(' ')[0].split('_')[1]);
            const btn = $(this).parent().find('.this_wishlist_remove');
            const is = $(this);  
            $.ajax({
                url: '/g_profile/page_wishlist/add',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {wishlist_id},
                success: function(r){
                        $(is).css({
                            display: 'none'
                        });
                        $(btn).css({
                            display: 'block'
                        });
                }
            })
        });

        $('.this_wishlist_remove').click(function() {
            const wishlist_id_remove = Number($(this).attr('class').split(' ')[0].split('_')[1]);
            const btn = $(this).parent().find('.this_wishlist');
            const is = $(this); 
            $.ajax({
                url: '/g_profile/page_wishlist/remove',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {wishlist_id_remove},
                success: function(r){
                        $(is).css({
                            display: 'none'
                        });
                        $(btn).css({
                            display: 'block'
                        });
                }
            })
        });

        $('._star').click(function(event) {
            const val = $(this).attr('data-value');
            $(this).parent().attr('data-value', val);
        });

        $('.add_review').click(function() {
            const text = $(this).parent().find('.text_review').val();
            const star_count = $('.star_count').attr('data-value');
            const id = $(this).parent().attr('data-id');

            if (text == '' && star_count == undefined) {
                $('.text_review').css('border', '1px solid red');
                $('.star_count').parent().css('border', '1px solid red');
            }else if(text == ''){
                $('.text_review').css('border', '1px solid red');
                $('.star_count').parent().css('border', '1px solid #d9d9d9');
            }else if(star_count == undefined){
                $('.star_count').parent().css('border', '1px solid red');
                $('.text_review').css('border', '1px solid #d9d9d9');
            }else {
                $('.text_review').css('border', '1px solid #d9d9d9');
                $('.star_count').parent().css('border', '1px solid #d9d9d9');
                $('.text_error').css('display', 'none').text('');
                $.ajax({
                    url: '/g_profile/page_shop/product_shop_sidebar/add_review',
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {id, text, star_count},
                    success: function(data){
                            if (data) {
                                console.log(1)
                                $(text).empty();
                                $(star_count).attr('data-value', '');
                                $('._star').removeClass('selected');
                                $('.mfp-wrap').css('display', 'none');
                                $('.mfp-bg').css('display', 'none');
                                let star = '';
                                for (var i = 0; i < star_count; i++) {
                                    star+='<li><i class="fas fa-star"></i></li>'
                                }
                                $('.comments-list').append(`
                                                            <li data-id="${data.id}">
                                                                <article class="comment">
                                                                    <div class="comment-inner" style="width: 95%;">
                                                                        <ul class="icon-group icon-list-rating comment-review-rate" title="rating">
                                                                            ${star}
                                                                            <li style="float: right;">
                                                                                <button type="button" class="remove_review" style="font-family: inherit; font-size: inherit; line-height: inherit; border-radius: 85%; border: none; color: #fff; font-size: 20px; height: 22px;">×</button>
                                                                            </li>
                                                                        </ul>
                                                                        <span class="comment-author-name">${data.name} ${data.surname}
                                                                            <span><?php echo(date('Y:m:d h:i:s')); ?></span>
                                                                        </span>
                                                                        <p class="comment-content">${text}</p>
                                                                    </div>
                                                                </article>
                                                            </li>
                                `)  
                                let scrollCount = $('.comments-list')[0].scrollHeight;
                                $('.comments-list').stop().animate({scrollTop : scrollCount});
                            }
                    },
                    error: function(reject){
                        var response = $.parseJSON(reject.responseText);
                        if (response.success === false){
                            if (reject.status === 400){
                                $.each(response.errors, function (key, val) {
                                    switch (key) {
                                        case 'text':
                                            console.log(val[0])
                                            $('.' + key + '_error').css('display', 'flex').text(val[0]);
                                            break;
                                    }
                                });
                            }
                        }
                    }
                });
            }       
        });
        
        $(document).on('click', '.remove_review', function() {
            const id = $(this).parent().parent().parent().parent().parent().attr('data-id');
            const rem = $(this).parent().parent().parent().parent().parent();
            $.ajax({
                    url: '/g_profile/page_shop/product_shop_sidebar/remove_review',
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {id},
                    success: function(data){
                        $(rem).remove();
                    }
            })
        });
    </script>
</html>
@endsection