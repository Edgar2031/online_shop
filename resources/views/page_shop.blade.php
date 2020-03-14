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
        {{-- Csrf Token --}}
        <input type="hidden" id="all_pro" value="{{csrf_token()}}">
        @endsection
        
        @section('footer')

            <!-- SEARCH AREA -->
            <form class="search-area form-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 clearfix">
                            <label>
                                <i class="fa fa-search"></i>
                                <span>I am searching for</span>
                            </label>
                            <div class="search-area-division search-area-division-input">
                                <input class="form-control" type="text" placeholder="Travel Vacation" />
                            </div>
                        </div>
                        <div class="col-md-3 clearfix">
                            <label>
                                <i class="fa fa-map-marker"></i>
                                <span>In</span>
                            </label>
                            <div class="search-area-division search-area-division-location">
                                <input class="form-control product_val" type="text" placeholder="Boston" />
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
                            <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                                <li class="active"><a href="#"><i class="fa fa-ticket"></i>All</a>
                                </li>
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
                                <li><a href="#"><i class="fa fa-home"></i>Home & Garden</a>
                                </li>
                                <li><a href="#"><i class="fa fa-plane"></i>Travel</a>
                                </li>
                            </ul>
                            <div class="sidebar-box">
                                <h5>Filter By Price</h5>
                                <input type="text" id="price-slider">
                            </div>
                            <div class="sidebar-box">
                                <h5>Product Feature</h5>
                                <ul class="checkbox-list">
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" class="i-check">On Sale</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" class="i-check">New</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" class="i-check">Ending Soon</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" class="i-check">High Rating</label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" class="i-check">Free Shipping</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-box">
                                <h5>Recent Viewed</h5>
                                <ul class="thumb-list">
                                    <li>
                                        <a href="#">
                                            <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                            <p class="thumb-list-item-price">$391</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                            <p class="thumb-list-item-price">$382</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/waipio_valley_70x70.jpg" alt="Image Alternative text" title="waipio valley" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                            <p class="thumb-list-item-price">$469</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-sort">
                                    <select id="sort_pro">
                                      <option value="name">Name</option>
                                      <option value="time" selected>Date</option>
                                      <option value="price">Price</option>
                                    </select>
                                    <select id="sort_az">
                                      <option value="ASC" selected>A - Z</option>
                                      <option value="DESC">Z - A</option>
                                    </select>
                                    <button class="sort_btn">Sort</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-7">
                                <div class="product-view pull-right">
                                    <a class="fa fa-th-large active" href="#"></a>
                                    <a class="fa fa-list" href="category-page-thumbnails-shop-horizontal.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row row-wrap product_append">

                            <!-- <div class="col-md-4">
                                <div class="product-thumb">
                                    <header class="product-header"><span class="product-label label label-info">Featured</span>
                                        <img src="img/nikon_prime_love_800x600.jpg" alt="Image Alternative text" title="Nikon Prime love" />
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
                                        <h5 class="product-title">Best Camera Lenthes</h5>
                                        <p class="product-desciption">Iaculis parturient sollicitudin parturient ad odio torquent tincidunt</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$56</span>
                                                </li>
                                                <li><span class="product-old-price">$125</span>
                                                </li>
                                                <li><span class="product-save">Save 45%</span>
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
                                    <header class="product-header"><span class="product-label label label-danger">Hot</span>
                                        <img src="img/aspen_lounge_chair_800x600.jpg" alt="Image Alternative text" title="Aspen Lounge Chair" />
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
                                        <h5 class="product-title">Aspen Lounge Chair</h5>
                                        <p class="product-desciption">Iaculis parturient sollicitudin parturient ad odio torquent tincidunt</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$57</span>
                                                </li>
                                                <li><span class="product-old-price">$179</span>
                                                </li>
                                                <li><span class="product-save">Save 32%</span>
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
                                        <span class="product-label label label-success">New</span>
                                        <img src="img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
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
                                        <h5 class="product-title">Hot Summer Collection</h5>
                                        <p class="product-desciption">Iaculis parturient sollicitudin parturient ad odio torquent tincidunt</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">$232</span>
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
                            </div> -->
                        </div>
                        <ul class="pagination">
                            <li class="prev disabled">
                                <a href="#"></a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li class="next">
                                <a href="#"></a>
                            </li>
                        </ul>
                        <div class="gap"></div>
                    </div>
                </div>

            </div>


            <!-- //////////////////////////////////
    	//////////////END PAGE CONTENT///////// 
    	////////////////////////////////////-->



            <!-- //////////////////////////////////
    	//////////////MAIN FOOTER////////////// 
    	////////////////////////////////////-->

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
                                <p>Parturient ipsum fringilla arcu bibendum rutrum consequat vulputate a netus id penatibus quam facilisi donec eu dictum tempor dis natoque</p>
                            </div>
                            <div class="col-md-3">
                                <h4>Sign Up to the Newsletter</h4>
                                <div class="box">
                                    <form>
                                        <div class="form-group mb10">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <p class="mb10">Duis feugiat in quam dictumst parturient luctus</p>
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
                                            <h5 class="thumb-list-item-title"><a href="#">Pellentesque vitae</a></h5>
                                            <p class="thumb-list-item-desciption">Interdum sem facilisis dapibus pellentesque</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Inceptos metus</a></h5>
                                            <p class="thumb-list-item-desciption">Dapibus integer est aliquet felis</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Consectetur metus</a></h5>
                                            <p class="thumb-list-item-desciption">At libero rhoncus quam feugiat</p>
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
                                <p>Copyright © 2014, Your Store, All Rights Reserved</p>
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
    
    {{-- Ptoduct --}}
    <script src="{{asset('js/product.js')}}"></script>
    <script src="{{asset('js/range.js')}}"></script>
</html>
@endsection
        
