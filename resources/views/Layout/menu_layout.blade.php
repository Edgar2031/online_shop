@yield('header')
    <div class="global-wrap">
        <div class="demo_changer" id="demo_changer">
            <div class="demo-icon fas fa-sliders-h"></div>
            <div class="form_holder">
                <div class="line"></div>
                <p>{{ __('menu.color_scheme') }}</p>
                <div class="predefined_styles" id="styleswitch_area">
                    <a href="page-my-account-settingsc392.html?default=true" class="styleswitch" style="background:#2A8FBD"></a>
                    <a href="#" data-source="apple" class="styleswitch" style="background:#56AD48"></a>
                    <a href="#" data-source="pink" class="styleswitch" style="background:#FF0066"></a>
                    <a href="#" data-source="teal" class="styleswitch" style="background:#1693A5"></a>
                    <a href="#" data-source="gold" class="styleswitch" style="background:#FBB829"></a>
                    <a href="#" data-source="downy" class="styleswitch" style="background:#6dcda7"></a>
                    <a href="#" data-source="atlantis" class="styleswitch" style="background:#8cc732"></a>
                    <a href="#" data-source="red" class="styleswitch" style="background:#FF0000"></a>
                    <a href="#" data-source="violet" class="styleswitch" style="background:#D31996"></a>
                    <a href="#" data-source="pomegranate" class="styleswitch" style="background:#F02311"></a>
                    <a href="#" data-source="violet-red" class="styleswitch" style="background:#F23A65"></a>
                    <a href="#" data-source="mexican-red" class="styleswitch" style="background:#9b2139"></a>
                    <a href="#" data-source="victoria" class="styleswitch" style="background:#544AA1"></a>
                    <a href="#" data-source="orient" class="styleswitch" style="background:#025D8C"></a>
                    <a href="#" data-source="jgger" class="styleswitch" style="background:#420943"></a>
                    <a href="#" data-source="de-york" class="styleswitch" style="background:#8CCA91"></a>
                    <a href="#" data-source="blaze-orange" class="styleswitch" style="background:#FF6600"></a>
                    <a href="#" data-source="hot-pink" class="styleswitch" style="background:#FF5EAA"></a>
                </div>
                <div class="container_brightness">
                    <div class="brightness-box">
                        <i class="bx bx-sun"></i>
                        <input type="range" id="range_brightness" min="5" max="100" value="100">
                        <i class='bx bxs-sun'></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- =============== MAIN HEADER =============== -->
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- MAIN NAVIGATION -->
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="active">
                                    <a href="{{ url('/g_profile') }}" style="background: #333;">
                                        <img src="img/white-logo.png" alt="Arduix" title="Arduix" style='height: 35px; width: 100px; cursor: pointer;'>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('g_profile/page_shop') }}">{{ __('menu.shop') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('g_profile/my_account_settings') }}">{{ __('menu.profile') }}</a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('g_profile/my_account_settings') }}"> 
                                                {{ __('menu.my_account') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('g_profile/my_account_settings') }}"> 
                                                {{ __('menu.settings') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('g_profile/product') }}"> 
                                                {{ __('menu.add_product') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('g_profile/my_orders_history') }}"> 
                                                {{ __('menu.orders_history') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('g_profile/my_product') }}"> 
                                                {{ __('menu.my_product') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                    <div class="col-md-6">
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">
                            <li class="shopping-cart">
                                <a href="{{ url('g_profile/page_cart') }}"> 
                                    {{ __('menu.cart') }}
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                {{-- <div class="shopping-cart-box">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                                <h5>New Glass Collection</h5>
                                                <span class="shopping-cart-item-price">$150</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/gamer_chick_70x70.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                                <h5>Playstation Accessories</h5>
                                                <span class="shopping-cart-item-price">$170</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a href="page-cart.html">
                                                <i class="fa fa-shopping-cart"></i> 
                                                View Cart
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-checkout.html">
                                                <i class="fa fa-check-square"></i> 
                                                Checkout
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </li>
                            <li>
                                <a href="{{ url('g_profile/page_wishlist') }}"> 
                                    {{ __('menu.wishlist') }}
                                    <i class="bx bx-heart-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/g_logout') }}"> 
                                    {{ __('menu.logout') }}
                                    <i class="bx bx-log-out-circle"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
@yield('footer')
