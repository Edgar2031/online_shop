<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arduix</title>

    <!-- CSS -->
    <link href="{{ asset('assets/css/fonts/fontawesome/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fonts/theme.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- JQVMAP -->
    <link href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="assets/img/favicon.png">

    <!-- Fonts -->
    <link href="{{ asset('assets/fonts/inter/inter.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body">
{{ Session::get('id') }}
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
                    <input class="form-control form-control-lg rounded-0 bg-none pl-0 h-auto fw-600" type="text" aria-label="Search" placeholder="Search for...">
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
	<script src="{{ mix('js/app.js') }}"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/plugins/chart/Chart.min.js" id="_chartJS_min"></script>
    <script src="assets/plugins/chart/Chart.bundle.min.js"></script>
    <script src="assets/plugins/chart/chartjs-plugin-annotation.js"></script>
    <script src="assets/plugins/chart/chartjs-plugin-labels.js"></script>

    <!-- apexcharts -->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- RangeSlider -->
    <script src="assets/plugins/rangeslider/rangeslider.min.js" id="_rangeJS_min"></script>

    <!-- Moment -->
    <script src="assets/plugins/lib/moment/moment.min.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>

    <!-- Modules -->
    <script src="assets/js/modules.js"></script>
</html>