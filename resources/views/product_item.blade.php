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
        <!-- Fontawesome --> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
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
                    @if(!empty($my_product))
                        @foreach($my_product as $pro)
                            <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                                <h3>Add a Review</h3>
                                <div data-id="{{ $pro->id }}">
                                    <div class="form-group">
                                        <label>Review</label>
                                        <p class="text_error" style="display: none; color: red; height: 30px; margin-bottom: 6px; justify-content: center; align-items: center; border-radius: 10px; font-size: 14px;"></p>
                                        <textarea class="text_review form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
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
                                                <img class="dletete_this" src="{{ asset('product_photo/'.$photo->photo) }}">
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="dletete_this">
                                        <ul>
                                            @foreach($pro->p_photo as $photo)
                                                <li>
                                                    <a style="background-color: #3d94f6; border-radius: 28px; border: 1px solid #337fed; cursor: pointer; color: #ffffff; font-family: Arial; padding: 4px 8px; text-decoration: none; text-shadow: 0px 1px 0px #1570cd;" href="{{ url('g_profile/my_product/product_item/delete_photo/'.$pro->id.'/'.$photo->id) }}">X</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                                
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="product-info box">
                                        <h3>{{ ucfirst($pro->name) }}</h3>
                                        <p class="product-info-price">Price <br> ${{ $pro->price }}</p>
                                        <p class="text-smaller text-muted">Description <br> {{ ucfirst($pro->description) }}</p>
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
                                    </div>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#tab-0" data-toggle="tab">
                                            <i class="fas fa-pencil-alt"></i>
                                            Change
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab-1" data-toggle="tab">
                                            <i class="fa fa-comments"></i>
                                            Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab-2" data-toggle="tab">
                                            <i class="fa fa-comments"></i>
                                            Feedbeck
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab-0">
                                        <ul class="comments-list row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="{{url('/g_profile/product_item/'.$pro->id.'/modify')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="">{{ __('g_product.name') }}</label>
                                                                {{ $errors->first('pro_name_my') }}
                                                                <input type="text" value="{{ old('pro_name_my') }}" name="pro_name_my" placeholder="{{$pro->name}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">{{ __('g_product.count') }}</label>
                                                                {{ $errors->first('pro_count_my') }}
                                                                <input type="text" value="{{ old('pro_count_my') }}" name="pro_count_my" placeholder="{{$pro->count}}" class="form-control">
                                                            </div>
                                                            <div class="form-group" style="position: relative;">
                                                                <label for="">{{ __('g_product.price') }}</label>
                                                                <label class="price_lab">USA</label>
                                                                {{ $errors->first('pro_price_my') }}
                                                                <input type="text" value="{{ old('pro_price_my') }}" name="pro_price_my" placeholder="{{$pro->price}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">{{ __('g_product.description') }}</label>
                                                                {{ $errors->first('pro_description_my') }}
                                                                <textarea style="resize: none;" type="text" value="{{ old('pro_description_my') }}" name="pro_description_my" placeholder="{{$pro->description}}" class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">{{ __('g_product.product_category') }}</label>
                                                                {{ $errors->first('pro_category_my') }}
                                                                <div class="select">
                                                                    <select name="pro_category_my" id="slct" class="select_category" value="{{ old('pro_category_my') }}">
                                                                        <option ></option>
                                                                        <option value="grocery">
                                                                            <i class="fas fa-apple-alt"></i>
                                                                            {{ __('g_product.grocery') }}
                                                                        </option>
                                                                        <option value="apparel">
                                                                            <i class="fas fa-tshirt"></i>
                                                                            {{ __('g_product.apparel') }}
                                                                        </option>
                                                                        <option value="electronics">
                                                                            <i class="fas fa-tv"></i>
                                                                            {{ __('g_product.electronics') }}
                                                                        </option>
                                                                        <option value="another">
                                                                            {{ __('g_product.another') }}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">{{ __('g_product.photo') }}</label>
                                                                {{ $errors->first('pro_photo_my') }}
                                                                <input type="file" value="{{ old('pro_photo_my') }}" name="pro_photo_my[]" multiple="" class="form-control">
                                                            </div>
                                                            <input type="submit" value="Change" class="btn btn-primary">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tab-1">
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
                            <h3>Similar Porducts</h3>
                            @if(!empty($pro->similar_product))
                                <div class="gap gap-mini"></div>
                                <div class="row row-wrap">
                                    @foreach($pro->similar_product as $si)
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                <p>Copyright © <?php date_default_timezone_set("Asia/Yerevan"); echo(date('Y')); ?>, Your Store, All Rights Reserved</p>
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
    
    {{-- Ptoduct Remove --}}
    <script src="{{asset('js/moify_pro.js')}}"></script>
</html>
@endsection