@extends('Layout.menu_layout')
@section('header')
<!DOCTYPE HTML>
<html>
    <head>  
        <meta name="keywords" content="Koupon HTML5 Template" />
        <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
        <meta name="author" content="Tsoy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- Date --}}
        <meta name="date" content="@php date_default_timezone_set('Asia/Yerevan'); echo date('Y-m-d h:i:s');  @endphp">
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
        {{-- Font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('css/scss/style.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;display=swap">
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
        <input type="hidden" id="all_pro" value="{{csrf_token()}}">
        @endsection
        
        @section('footer')
        <div class="head">
            <!-- SEARCH AREA -->
            <div class="search-area form-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 clearfix" style="display: inline-block;">
                            <div class="search-area-division search-area-division-input">
                                <input class="form-control product_val" type="text" placeholder="{{ __('page_shop.searching') }}" style="padding-left: 10px;">
                            </div>
                        </div>
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
                        </div>
                        <div class="range" style="display: inline-block;">
                            <div class="values" style="display: inline-block; width: 48%;">
                                <div>
                                    $ <span id="first"></span>
                                </div> 
                                    - 
                                <div>
                                    $ <span id="second"></span>
                                </div>
                            </div>
                            <div class="slider" data-value-0="#first" data-value-1="#second" data-range="#third"></div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-block btn-white search-btn" type="submit">{{ __('page_shop.search') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SEARCH AREA -->

            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="sidebar-left">
                            <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                                <li data-id="all" class="search_li active search_data_id">
                                    <a>
                                        <i class="fab fa-atlassian"></i>
                                        {{ __('page_shop.all') }}
                                    </a>
                                </li>
                                <li data-id="grocery" class="search_li">
                                    <a>
                                        <i class="fas fa-apple-alt"></i>
                                        {{ __('page_shop.grocery') }}
                                    </a>
                                </li>
                                <li data-id="apparel" class="search_li">
                                    <a>
                                        <i class="fas fa-tshirt"></i>
                                        {{ __('page_shop.apparel') }}
                                    </a>
                                </li>
                                <li data-id="electronics" class="search_li">
                                    <a>
                                        <i class="fas fa-tv"></i>
                                        {{ __('page_shop.electronics') }}
                                    </a>
                                </li>
                                <li data-id="another" class="search_li">
                                    <a>
                                        <i class="far fa-question-circle"></i>
                                        {{ __('page_shop.another') }}
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="row row-wrap product_append">
                            {{-- product append --}}
                        </div>
                        {{-- <ul class="pagination">
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
                        </ul> --}}
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
            <footer class="main" id="main-footer">
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <p>{{ __('page_shop.copyright') }} <?php date_default_timezone_set("Asia/Yerevan"); echo(date('Y')); ?>, {{ __('page_shop.all_rights_reserved') }}</p>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

    <script type="text/javascript">
        $('.slider').each(function(e) {
            var slider = $(this),
                width = slider.width(),
                handle,
                handleObj;

            let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('viewBox', '0 0 ' + width + ' 83');

            slider.html(svg);
            slider.append($('<div>').addClass('active').html(svg.cloneNode(true)));

            slider.slider({
                range: true,
                values: [1800, 7800],
                min: 500,
                step: 5,
                minRange: 1000,
                max: 12000,
                create(event, ui) {

                    slider.find('.ui-slider-handle').append($('<div />'));

                    $(slider.data('value-0')).html(slider.slider('values', 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('value-1')).html(slider.slider('values', 1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('range')).html((slider.slider('values', 1) - slider.slider('values', 0)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));

                    setCSSVars(slider);
                },
                start(event, ui) {

                    $('body').addClass('ui-slider-active');

                    handle = $(ui.handle).data('index', ui.handleIndex);
                    handleObj = slider.find('.ui-slider-handle');
                },
                change(event, ui) {
                    setCSSVars(slider);
                },
                slide(event, ui) {

                    let min = slider.slider('option', 'min'),
                        minRange = slider.slider('option', 'minRange'),
                        max = slider.slider('option', 'max');

                    if(ui.handleIndex == 0) {
                        if((ui.values[0] + minRange) >= ui.values[1]) {
                            slider.slider('values', 1, ui.values[0] + minRange);
                        }
                        if(ui.values[0] > max - minRange) {
                            return false;
                        }
                    } else if(ui.handleIndex == 1) {
                        if((ui.values[1] - minRange) <= ui.values[0]) {
                            slider.slider('values', 0, ui.values[1] - minRange);
                        }
                        if(ui.values[1] < min + minRange) {
                            return false;
                        }
                    }

                    $(slider.data('value-0')).html(ui.values[0].toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('value-1')).html(ui.values[1].toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('range')).html((slider.slider('values', 1) - slider.slider('values', 0)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));

                    setCSSVars(slider);
                },
                stop(event, ui) {

                    $('body').removeClass('ui-slider-active');

                    let duration = .6,
                        ease = Elastic.easeOut.config(1.08, .44);

                    TweenMax.to(handle, duration, {
                        '--y': 0,
                        ease: ease
                    });

                    TweenMax.to(svgPath, duration, {
                        y: 42,
                        ease: ease
                    });

                    handle = null;

                }
            });

            var svgPath = new Proxy({
                x: null,
                y: null,
                b: null,
                a: null
            }, {
                set(target, key, value) {
                    target[key] = value;
                    if(target.x !== null && target.y !== null && target.b !== null && target.a !== null) {
                        slider.find('svg').html(getPath([target.x, target.y], target.b, target.a, width));
                    }
                    return true;
                },
                get(target, key) {
                    return target[key];
                }
            });

            svgPath.x = width / 2;
            svgPath.y = 42;
            svgPath.b = 0;
            svgPath.a = width;

            $(document).on('mousemove touchmove', e => {
                if(handle) {

                    let laziness = 4,
                        max = 24,
                        edge = 52,
                        other = handleObj.eq(handle.data('index') == 0 ? 1 : 0),
                        currentLeft = handle.position().left,
                        otherLeft = other.position().left,
                        handleWidth = handle.outerWidth(),
                        handleHalf = handleWidth / 2,
                        y = e.pageY - handle.offset().top - handle.outerHeight() / 2,
                        moveY = (y - laziness >= 0) ? y - laziness : (y + laziness <= 0) ? y + laziness : 0,
                        modify = 1;

                    moveY = (moveY > max) ? max : (moveY < -max) ? -max : moveY;
                    modify = handle.data('index') == 0 ? ((currentLeft + handleHalf <= edge ? (currentLeft + handleHalf) / edge : 1) * (otherLeft - currentLeft - handleWidth <= edge ? (otherLeft - currentLeft - handleWidth) / edge : 1)) : ((currentLeft - (otherLeft + handleHalf * 2) <= edge ? (currentLeft - (otherLeft + handleWidth)) / edge : 1) * (slider.outerWidth() - (currentLeft + handleHalf) <= edge ? (slider.outerWidth() - (currentLeft + handleHalf)) / edge : 1));
                    modify = modify > 1 ? 1 : modify < 0 ? 0 : modify;

                    if(handle.data('index') == 0) {
                        svgPath.b = currentLeft / 2  * modify;
                        svgPath.a = otherLeft;
                    } else {
                        svgPath.b = otherLeft + handleHalf;
                        svgPath.a = (slider.outerWidth() - currentLeft) / 2 + currentLeft + handleHalf + ((slider.outerWidth() - currentLeft) / 2) * (1 - modify);
                    }

                    svgPath.x = currentLeft + handleHalf;
                    svgPath.y = moveY * modify + 42;

                    handle.css('--y', moveY * modify);

                }
            });

        });

        function getPoint(point, i, a, smoothing) {
            let cp = (current, previous, next, reverse) => {
                    let p = previous || current,
                        n = next || current,
                        o = {
                            length: Math.sqrt(Math.pow(n[0] - p[0], 2) + Math.pow(n[1] - p[1], 2)),
                            angle: Math.atan2(n[1] - p[1], n[0] - p[0])
                        },
                        angle = o.angle + (reverse ? Math.PI : 0),
                        length = o.length * smoothing;
                    return [current[0] + Math.cos(angle) * length, current[1] + Math.sin(angle) * length];
                },
                cps = cp(a[i - 1], a[i - 2], point, false),
                cpe = cp(point, a[i - 1], a[i + 1], true);
            return `C ${cps[0]},${cps[1]} ${cpe[0]},${cpe[1]} ${point[0]},${point[1]}`;
        }

        function getPath(update, before, after, width) {
            let smoothing = .16,
                points = [
                    [0, 42],
                    [before <= 0 ? 0 : before, 42],
                    update,
                    [after >= width ? width : after, 42],
                    [width, 42]
                ],
                d = points.reduce((acc, point, i, a) => i === 0 ? `M ${point[0]},${point[1]}` : `${acc} ${getPoint(point, i, a, smoothing)}`, '');
            return `<path d="${d}" />`;
        }

        function setCSSVars(slider) {
            let handle = slider.find('.ui-slider-handle');
            slider.css({
                '--l': handle.eq(0).position().left + handle.eq(0).outerWidth() / 2,
                '--r': slider.outerWidth() - (handle.eq(1).position().left + handle.eq(1).outerWidth() / 2)
            });
        }
    </script>

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
        
