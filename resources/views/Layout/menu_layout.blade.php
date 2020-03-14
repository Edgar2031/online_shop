@yield('header')
    <div class="global-wrap">
        <div class="demo_changer" id="demo_changer">
            <div class="demo-icon fa fa-sliders"></div>
            <div class="form_holder">
                <div class="line"></div>
                <p>Color Scheme</p>
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
            </div>
        </div>

        <!-- =============== MAIN HEADER =============== -->
        <div class="top-main-area text-center">
            <div class="container">
                <a href="{{url('/g_profile')}}" class="logo mt5">
                    <img src="img/white-logo.png" alt="Arduix" title="Arduix" />
                </a>
            </div>
        </div>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="active">
                                    <a href="index.html">Home</a>
                                    <ul>
                                        <li class="active"><a href="index-shop-layout-1.html">Shop Layout</a>
                                            <ul>
                                                <li class="active"><a href="index-shop-layout-1.html">Layout 1</a>
                                                </li>
                                                <li><a href="index-shop-layout-2.html">Layout 2</a>
                                                </li>
                                                <li><a href="index-shop-layout-3.html">Layout 3</a>
                                                </li>
                                                <li><a href="index-shop-layout-4.html">Layout 4</a>
                                                </li>
                                                <li><a href="index-shop-layout-5.html">Layout 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index-coupon-layout-1.html">Coupon Layout</a>
                                            <ul>
                                                <li><a href="index-coupon-layout-1.html">Layout 1</a>
                                                </li>
                                                <li><a href="index-coupon-layout-2.html">Layout 2</a>
                                                </li>
                                                <li><a href="index-coupon-layout-3.html">Layout 3</a>
                                                </li>
                                                <li><a href="index.html">Layout 4</a>
                                                </li>
                                                <li><a href="index-coupon-layout-5.html">Layout 5</a>
                                                </li>
                                                <li><a href="index-coupon-layout-6.html">Layout 6</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index-header-layout-1.html">Headers</a>
                                            <ul>
                                                <li><a href="index-header-layout-1.html">Layout 1</a>
                                                </li>
                                                <li><a href="index-header-layout-2.html">Layout 2</a>
                                                </li>
                                                <li><a href="index-header-layout-3.html">Layout 3</a>
                                                </li>
                                                <li><a href="index-header-layout-4.html">Layout 4</a>
                                                </li>
                                                <li><a href="index-header-layout-5.html">Layout 5</a>
                                                </li>
                                                <li><a href="index-header-logged-user.html">Logged User</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('g_profile/page_shop')}}">Shop</a>
                                </li>
                                <li>
                                    <a href="product-shop-sidebar.html">Product </a>
                                    <ul>
                                        <li><a href="product-shop-sidebar.html">Shop</a>
                                            <ul>
                                                <li><a href="product-shop-sidebar.html">Sidebar</a>
                                                </li>
                                                <li><a href="product-shop-sidebar-left.html">Sidebar Left</a>
                                                </li>
                                                <li><a href="product-shop-centered.html">Centered</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="product-coupon-default.html">Coupon</a>
                                            <ul>
                                                <li><a href="product-coupon-default.html">Default</a>
                                                </li>
                                                <li><a href="product-coupon-meta-right.html">Meta right</a>
                                                </li>
                                                <li><a href="">Gallery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="features-typography.html">Features</a>
                                    <ul>
                                        <li><a href="features-typography.html">Typography</a>
                                        </li>
                                        <li><a href="features-elements.html">Elements</a>
                                        </li>
                                        <li><a href="features-grid.html">Grid</a>
                                        </li>
                                        <li><a href="features-icons.html">Icons</a>
                                        </li>
                                        <li><a href="features-image-hover.html">Image Hovers</a>
                                        </li>
                                        <li><a href="features-sliders.html">Sliders</a>
                                        </li>
                                        <li><a href="features-media.html">Media</a>
                                        </li>
                                        <li><a href="features-lightbox.html">Lightbox</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog-sidebar-right.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-sidebar-right.html">Sidebar Right</a>
                                        </li>
                                        <li><a href="blog-sidebar-left.html">Sidebar Left</a>
                                        </li>
                                        <li><a href="blog-full-width.html">Full Width</a>
                                        </li>
                                        <li><a href="post-sidebar-right.html">Post</a>
                                            <ul>
                                                <li><a href="post-sidebar-right.html">Sidebar Right</a>
                                                </li>
                                                <li><a href="post-sidebar-left.html">Sidebar Left</a>
                                                </li>
                                                <li><a href="post-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page-full-width.html">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="{{url('g_profile/my_account_settings')}}">My Account</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('g_profile/my_account_settings')}}">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('g_profile/product')}}">Address Book</a>
                                                </li>
                                                <li>
                                                    <a href="page-my-account-orders.html">Orders History</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('g_profile/my_product')}}">Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page-full-width.html">Full Width</a>
                                        </li>
                                        <li>
                                            <a href="page-sidebar-right.html">Sidebar Right</a>
                                        </li>
                                        <li>
                                            <a href="page-sidebar-left.html">Sidebar Left</a>
                                        </li>
                                        <li>
                                            <a href="page-faq.html">Faq</a>
                                        <li>
                                            <a href="page-search.html">Search</a>
                                            <ul>
                                                <li>
                                                    <a href="page-search-black.html">Black</a>
                                                </li>
                                                <li>
                                                    <a href="page-search-white.html">White</a>
                                                </li>
                                                <li>
                                                    <a href="page-search-sticky.html">Sticky</a>
                                                </li>
                                                <li>
                                                    <a href="page-search-no-search.html">No Search</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page-contact.html">Contact</a>
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
                                <a href="{{url('g_profile/page_cart')}}">
                                    My Cart 
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <div class="shopping-cart-box">
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
                                </div>
                            </li>
                            <li>
                                <a href="{{url('g_profile/page_wishlist')}}">
                                    Wish list
                                    <i class="bx bx-heart-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/g_logout')}}">
                                    Logout
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
