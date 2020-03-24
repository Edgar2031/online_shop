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
        <div class="head">
        <div class="gap"></div>
        @foreach($my_product as $pro)                         
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-page-meta box">
                                <h4>{{$pro->name}}</h4>
                                <p>{{$pro->description}}</p>
                                <a class="btn btn-primary btn-lg btn-block">&#36; {{$pro->price}}</a>
                                <ul class="list product-page-meta-info">
                                    <li>
                                        <ul class="list product-page-meta-price-list">
                                            <li>
                                                <span class="product-page-meta-title">Count</span>
                                                <span class="product-page-meta-price">{{$pro->count}}</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="product-page-meta-title">Time Left to Buy</span>
                                        <!-- COUNTDOWN -->
                                        <div data-countdown="Aug 25, 2013 10:45:00" class="countdown countdown-inline"></div>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row row-no-gutter" id="popup-gallery">
                            @foreach($pro->p_photo as $pro_photo)
                                <div class="col-md-4" data-id='{{ $pro_photo->id }}'>
                                    <!-- HOVER IMAGE -->
                                    <a class="hover-img popup-gallery-image" href="{{asset('product_photo/'.$pro_photo->photo)}}" data-effect="mfp-zoom-out">
                                        <img src="{{asset('product_photo/'.$pro_photo->photo)}}" >
                                        <i class="fas fa-compress-arrows-alt hover-icon"></i>
                                    </a>
                                    <button class="dletete_this" style="height: 40px; width: 30px; float: right; margin-right: 40px; background: #000; border: none; color: #fff;">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                        <div class="gap gap-small"></div>
                        <div class="tabbable">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#tab-1" data-toggle="tab">
                                        <i class="fa fa-tag"></i>
                                        The Deal
                                    </a>
                                </li>
                                <li>
                                    <a href="#google-map-tab" data-toggle="tab">
                                        <i class="fa fa-map-marker"></i>
                                        Location
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-3" data-toggle="tab">
                                        <i class="fa fa-comments"></i>
                                        Comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-4" data-toggle="tab">
                                        <i class="fa fa-info"></i>
                                        The Company
                                    </a>
                                </li>
                            </ul>  
                            <form action="{{url('g_profile/product_item/'.$pro->id.'/modify')}}" method="post" enctype="multipart/form-data"> 
                                {{csrf_field()}} 
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <div class="row text-smaller">
                                                <div class="col-md-4">
                                                    {{ $errors->first('pro_name_my') }}
                                                    <input type="text" value="{{ old('pro_name_my') }}" name="pro_name_my" placeholder="{{$pro->name}}">

                                                    {{ $errors->first('pro_count_my') }}
                                                    <input type="text" value="{{ old('pro_count_my') }}" name="pro_count_my" placeholder="{{$pro->count}}">

                                                    {{ $errors->first('pro_price_my') }}
                                                    <input type="text" value="{{ old('pro_price_my') }}" name="pro_price_my" placeholder="{{$pro->price}}">

                                                    {{ $errors->first('pro_description_my') }}
                                                    <textarea type="text" value="{{ old('pro_description_my') }}" name="pro_description_my" placeholder="{{$pro->description}}"></textarea> 

                                                    {{ $errors->first('pro_photo_my') }}
                                                    <input type="file" value="{{ old('pro_photo_my') }}" name="pro_photo_my[]" multiple="">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="google-map-tab">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div id="map-canvas" style="width:100%; height:300px;"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="list">
                                                    <li>Anchorage</li>
                                                    <li>1947 E 5th Ave</li>
                                                    <li>Anchorage, Alaska 99501</li>
                                                    <li>907-522-8699</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3">
                                        <!-- START COMMENTS -->
                                        <ul class="comments-list">
                                            <li>
                                                <!-- COMMENT -->
                                                <article class="comment">
                                                    <div class="comment-author">
                                                        <img src="img/gamer_chick_50x50.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                                    </div>
                                                    <div class="comment-inner"><span class="comment-author-name">Joseph Watson</span>
                                                        <p class="comment-content">Magnis feugiat sed pellentesque vel facilisis natoque pellentesque mauris vivamus nostra condimentum interdum dui turpis netus gravida gravida ultrices dolor</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 45</a>
                                                    </div>
                                                </article>
                                                <ul>
                                                    <li>
                                                        <!-- COMMENT -->
                                                        <article class="comment">
                                                            <div class="comment-author">
                                                                <img src="img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29" />
                                                            </div>
                                                            <div class="comment-inner"><span class="comment-author-name">Oliver Ross</span>
                                                                <p class="comment-content">Porttitor turpis ante auctor tincidunt augue condimentum neque sed augue arcu pellentesque per quis</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 31</a>
                                                            </div>
                                                        </article>
                                                        <ul>
                                                            <li>
                                                                <!-- COMMENT -->
                                                                <article class="comment">
                                                                    <div class="comment-author">
                                                                        <img src="img/afro_50x50.jpg" alt="Image Alternative text" title="Afro" />
                                                                    </div>
                                                                    <div class="comment-inner"><span class="comment-author-name">Joe Smith</span>
                                                                        <p class="comment-content">Mollis a congue sociosqu eget ullamcorper tempus blandit accumsan sociis facilisi vel suscipit habitant arcu ridiculus eget nam integer inceptos commodo aptent amet dapibus ut ut dis urna</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 10</a>
                                                                    </div>
                                                                </article>
                                                                <ul>
                                                                    <li>
                                                                        <!-- COMMENT -->
                                                                        <article class="comment">
                                                                            <div class="comment-author">
                                                                                <img src="img/bubbles_50x50.jpg" alt="Image Alternative text" title="Bubbles" />
                                                                            </div>
                                                                            <div class="comment-inner"><span class="comment-author-name">Neil Davidson</span>
                                                                                <p class="comment-content">Porta urna cursus ullamcorper sit velit eu aptent consectetur scelerisque nisl conubia metus arcu sollicitudin lobortis mi senectus eget ultricies blandit phasellus litora sociosqu phasellus proin</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 29</a>
                                                                            </div>
                                                                        </article>
                                                                        <ul>
                                                                            <li>
                                                                                <!-- COMMENT -->
                                                                                <article class="comment">
                                                                                    <div class="comment-author">
                                                                                        <img src="img/me_with_the_uke_50x50.jpg" alt="Image Alternative text" title="Me with the Uke" />
                                                                                    </div>
                                                                                    <div class="comment-inner"><span class="comment-author-name">Richard Jones</span>
                                                                                        <p class="comment-content">Luctus ut praesent imperdiet etiam vel dapibus tristique nulla hendrerit sociis</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 13</a>
                                                                                    </div>
                                                                                </article>
                                                                            </li>
                                                                        </ul>
                                                                        <li>
                                                                            <!-- COMMENT -->
                                                                            <article class="comment">
                                                                                <div class="comment-author">
                                                                                    <img src="img/amaze_50x50.jpg" alt="Image Alternative text" title="AMaze" />
                                                                                </div>
                                                                                <div class="comment-inner"><span class="comment-author-name">Joseph Hudson</span>
                                                                                    <p class="comment-content">Nisi eget dictum dui dapibus felis conubia lacinia posuere orci interdum aliquet felis ipsum tellus aenean nibh hac suscipit suspendisse nulla platea dis malesuada vulputate</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 0</a>
                                                                                </div>
                                                                            </article>
                                                                        </li>
                                                                    </li>
                                                                </ul>
                                                                <li>
                                                                    <!-- COMMENT -->
                                                                    <article class="comment">
                                                                        <div class="comment-author">
                                                                            <img src="img/chiara_50x50.jpg" alt="Image Alternative text" title="Chiara" />
                                                                        </div>
                                                                        <div class="comment-inner"><span class="comment-author-name">Ava McDonald</span>
                                                                            <p class="comment-content">Nisi iaculis aptent sollicitudin ridiculus luctus bibendum nibh adipiscing tempus congue consequat auctor ut nisl</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 21</a>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                        </ul>
                                                        <li>
                                                            <!-- COMMENT -->
                                                            <article class="comment">
                                                                <div class="comment-author">
                                                                    <img src="img/andrea_50x50.jpg" alt="Image Alternative text" title="Andrea" />
                                                                </div>
                                                                <div class="comment-inner"><span class="comment-author-name">Sarah Slater</span>
                                                                    <p class="comment-content">Vehicula fames tempor non risus habitant potenti tortor sociis tellus cras sodales</p><span class="comment-time">15 seconds ago</span><a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a><a class="comment-like" href="#"><i class="fa fa-heart"></i> 24</a>
                                                                </div>
                                                            </article>
                                                            <ul></ul>
                                                </ul>
                                        </ul>
                                        <!-- END COMMENTS -->
                                        <div class="text-center"><a class="btn btn-primary"><i class="fa fa-pencil"></i> Leave a Comment</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-4">
                                        <h3>Company Name</h3>
                                        <p>Morbi amet fermentum potenti duis vulputate primis velit vel in felis nascetur habitant venenatis lacinia adipiscing malesuada ultrices torquent euismod a viverra augue sociis vehicula iaculis sem nullam urna sem lectus cras amet mattis sem fringilla tempus dis eros phasellus mollis augue ornare curabitur non tempus facilisis duis dictumst sit</p>
                                        <p>Auctor sodales suspendisse nullam facilisi magnis pretium malesuada sit cum id dapibus ac est ullamcorper suscipit per senectus ultricies et diam eu massa orci habitasse nostra elit phasellus mus euismod elementum nisl nulla et blandit cras torquent aliquam tempor malesuada egestas montes dolor integer vehicula et curae auctor turpis dictumst</p><a class="btn btn-primary">Company Website <i class="fa fa-external-link"></i></a>
                                    </div>
                                </div>
                                <button>Save</button>
                            </form>
                        
                        </div>
                        <div class="gap gap-small"></div>
                        <h3 class="mb20">Top Deals For You <small><a href="#">see all</a></small></h3>
                        <div class="row row-wrap">
                            <a class="col-md-4" href="#">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                    </header>
                                    <div class="product-inner">
                                        <ul class="icon-group icon-list-rating" title="4.9/5 rating">
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
                                        <p class="product-desciption">Mi taciti leo integer iaculis volutpat semper integer</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$76</span>
                                                </li>
                                                <li><span class="product-old-price">$177</span>
                                                </li>
                                                <li><span class="product-save">Save 43%</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gap gap-small"></div>
                    </div>
                </div>
            </div>
        @endforeach
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
    
    {{-- Ptoduct Remove --}}
    <script src="{{asset('js/moify_pro.js')}}"></script>
</html>
@endsection