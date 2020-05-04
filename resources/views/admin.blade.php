<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="user-id" content="{{ Session::get('admin_id') }}">
    <title>Arduix</title>

    <!-- CSS -->
    <link href="{{ asset('assets/css/fonts/fontawesome/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fonts/theme.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- JQVMAP -->
    <link href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- Fonts -->
    <link href="{{ asset('assets/fonts/inter/inter.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">   
        .apexcharts-legend {  
            display: flex;  
            overflow: auto; 
            padding: 0 10px;   
        } 
        .apexcharts-legend.position-bottom, .apexcharts-legend.position-top { 
            flex-wrap: wrap 
        } 
        .apexcharts-legend.position-right, .apexcharts-legend.position-left { 
            flex-direction: column; 
            bottom: 0;  
        } 
        .apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {  
            justify-content: flex-start;    
        } 
        .apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {   
            justify-content: center;    
        } 
        .apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right { 
            justify-content: flex-end;  
        } 
        .apexcharts-legend-series {   
            cursor: pointer;    
            line-height: normal;    
        } 
        .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{  
            display: flex;  
            align-items: center;    
        } 
        .apexcharts-legend-text { 
            position: relative; 
            font-size: 14px;    
        } 
        .apexcharts-legend-text *, .apexcharts-legend-marker * {  
            pointer-events: none;   
        } 
        .apexcharts-legend-marker {   
            position: relative; 
            display: inline-block;  
            cursor: pointer;    
            margin-right: 3px;  
        } 

        .apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series {
            display: inline-block;  
        } 
        .apexcharts-legend-series.no-click {  
            cursor: auto;   
        } 
        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
            display: none !important;   
        } 
        .inactive-legend {    
            opacity: 0.45;  
        }
    </style>
</head>
<body class="body">
    <!-- main --> 
	<div id="app"></div>
	<!-- /.main -->

    <!-- offcanvas - search -->
    <div id="offcanvas-search" class="offcanvas h-auto py-4" data-animation="slideDown" data-scrollbar="offcanvas">
        <div class="row align-items-center">
            <div class="col-2 col-sm-1 order-last">
                <button type="button" data-toggle="offcanvas-close" class="close float-right mr-lg-6 text-light o-1 lead-2 fw-100" data-dismiss="offcanvas" aria-label="Close">
                    <span aria-hidden="true" class="icon-close"></span>
                </button>
            </div>
            <form class="col-10 col-sm-11 col-lg-10 mx-auto input-rounded form-inline position-relative w-100 mt-0">
                <div class="input-group bg-none border-0 w-100">
                    <input class="form-control form-control-lg rounded-0 bg-none pl-0 h-auto fw-600" type="text" aria-label="Search" placeholder="Search for..." style="text-align: center;">
                </div>
            </form>
        </div>
    </div>
    <!-- /.offcanvas - search -->



    <!-- preloader -->
    <div class="preloaderWrapper">
        <div class="preloader"></div>
    </div>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{ mix('js/app.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Chart.js -->
    <script src="{{ asset('assets/plugins/chart/Chart.min.js') }}" id="_chartJS_min"></script>
    <script src="{{ asset('assets/plugins/chart/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/chartjs-plugin-annotation.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/chartjs-plugin-labels.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>

    <!-- RangeSlider -->
    <script src="{{ asset('assets/plugins/rangeslider/rangeslider.min.js') }}" id="_rangeJS_min"></script>

    <!-- Moment -->
    <script src="{{ asset('assets/plugins/lib/moment/moment.min.js') }}"></script>

    <!-- User JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}" id="_mainJS" data-plugins="load"></script>

    <!-- Modules -->
    <script src="{{ asset('assets/js/modules.js') }}"></script>

    <script type="text/javascript">
        $('.logo-cont').append(`<img src="{{ asset('img/white-logo.png') }}" class="logo-icon">`);
        $('.lang').after(`
                        <li class="nav-item dropdown">
                            <a class="nav-link text-capitalize d-none d-md-inline-flex align-items-center h-100 small-2" href="#" id="dropdownLang_02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-lang mr-3" src="{{ asset('assets/img/icons/flag/us.svg') }}" alt="USA">
                                <div class="lh-1 fw-400">
                                    English
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow-1 py-3 position-absolute mt-1" aria-labelledby="dropdownAdmin">
                                <a class="dropdown-item d-flex align-items-center py-1" href="#">
                                    <img class="img-lang mr-3" src="{{ asset('assets/img/icons/flag/us.svg') }}" alt="USA">
                                    English
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-1" href="#">
                                    <img class="img-lang mr-3" src="{{ asset('assets/img/icons/flag/gr.svg') }}" alt="GR">
                                    German
                                </a>
                            </div>
                        </li>`);

        $(document).on('click', '.p-collapsing-toggler', function() {
            $('.main-header').css('left', '8rem');
            $(this).addClass('p_main');
        });

        $(document).on('click', '.p_main', function() {
            $('.main-header').css('left', '20rem');
            $(this).removeClass('p_main');
        });

        $('._li').click(function() {
            $('._li').removeClass('active');
            $(this).addClass('active');
        });

        $('.date').prepend(`
                        <button class="tep-btn btn dropdown-toggle ml-auto" type="button" id="timePanelTab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex pr-3">
                                <span class="d-flex align-items-center pr-3 border-right lead-3">
                                    <span class="icon-calendar-alt"></span>
                                </span>
                                <span class="d-block lh-3 py-1 pl-3">
                                    <span class="d-block mb-1"><?php date_default_timezone_set('Asia/Yerevan'); echo date("F j, Y"); ?></span>
                                    <span class="small-3 fw-300"><?php echo date("G:i:s"); ?></span>
                                </span>
                            </span>
                        </button>`);

        $('.close').click(function() {
            $(this).parent().parent().parent().parent().remove();
        });
    </script>
</html>

                                