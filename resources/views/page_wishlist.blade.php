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
        <input type="hidden" id="wish_list_token" value="{{csrf_token()}}">
        @endsection
        
        @section('footer')
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
                    <div class="col-md-8">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Name</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Cart</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($wishlist_product as $product)
                                    @if ($product->cart === 1)
                                            <tr class="this_{{$product->Pro_product->id}}" data-id="{{$product->Pro_product->count}}">
                                                <td class="wishlist-item-image" style="height: 80px; width: 105px;">
                                                    <a class="wishlist_pr_img">
                                                        <img src="{{asset('product_photo/'.$product->Pro_product->p_photo[0]->photo)}}" alt="Image" title="Image" style="height: 100%; width: 100%;">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a>{{$product->Pro_product->name}}</a>
                                                </td>
                                                <td class="cart-item-quantity">
                                                    <div class="wishlist-description">{{$product->Pro_product->description}}</div>
                                                </td>
                                                <td class="wishlist_td">&#36; {{$product->Pro_product->price}}</td>
                                                <td class="wishlist-item-wishlist btn btn-sm move_to_cart" style="display: none;">
                                                    <a class="cart cart_this_add">Move To Cart</a>
                                                </td>
                                                <td class="wishlist-item-wishlist btn btn-sm remove_from_cart">
                                                    <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                    Remove From Cart
                                                </td>
                                                <td class="wishlist-item-remove">
                                                    <a class="fa fa-times"></a>
                                                </td>
                                            </tr>
                                        @else
                                            <tr class="this_{{$product->Pro_product->id}}" data-id="{{$product->Pro_product->count}}">
                                                <td class="wishlist-item-image" style="height: 80px; width: 105px;">
                                                    <a class="wishlist_pr_img">
                                                        <img src="{{asset('product_photo/'.$product->Pro_product->p_photo[0]->photo)}}" alt="Image" title="Image" style="height: 100%; width: 100%;">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a>{{$product->Pro_product->name}}</a>
                                                </td>
                                                <td class="cart-item-quantity">
                                                    <div class="wishlist-description">{{$product->Pro_product->description}}</div>
                                                </td>
                                                <td class="wishlist_td">&#36; {{$product->Pro_product->price}}</td>
                                                <td class="wishlist-item-wishlist btn btn-sm move_to_cart" >
                                                    <a class="cart cart_this_add">Move To Cart</a>
                                                </td>
                                                <td class="wishlist-item-wishlist btn btn-sm remove_from_cart" style="display: none;">
                                                    <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                    Remove From Cart
                                                </td>
                                                <td class="wishlist-item-remove">
                                                    <a class="fa fa-times"></a>
                                                </td>
                                            </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>	
                        <a href="#" class="btn btn-primary">Update the cart</a>
                    </div>
                </div>
                <div class="gap"></div>
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
                                <p>At nostra cum feugiat habitant eget quis condimentum sed duis aenean ante sagittis amet aptent id cras placerat laoreet senectus</p>
                            </div>
                            <div class="col-md-3">
                                <h4>Sign Up to the Newsletter</h4>
                                <div class="box">
                                    <form>
                                        <div class="form-group mb10">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <p class="mb10">Conubia aliquet ullamcorper consectetur integer nisl ac</p>
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
                                            <h5 class="thumb-list-item-title"><a href="#">Nascetur adipiscing</a></h5>
                                            <p class="thumb-list-item-desciption">Dolor est vivamus tincidunt amet</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Rutrum purus</a></h5>
                                            <p class="thumb-list-item-desciption">Posuere ipsum vulputate class fringilla</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                        </a>
                                        <div class="thumb-list-item-caption">
                                            <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                            <h5 class="thumb-list-item-title"><a href="#">Euismod magnis</a></h5>
                                            <p class="thumb-list-item-desciption">Primis condimentum conubia iaculis tincidunt</p>
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
    <script src="{{asset('js/wishlist_product.js')}}"></script>
</html>
@endsection
        
