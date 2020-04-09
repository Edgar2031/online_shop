<template>
	<div>
		<!-- sidebar -->
	    <nav id="adminNav" class="main-sidebar p-collapsing-sidebar sidebar-fixed sidebar-left">
	        <div class="stick-toogler">
	            <div class="toggler-wrapper">
	                <button class="p-collapsing-toggler toggler-secondary" data-collapsing="partially" data-collapsing-target="#adminNav" type="button">
	                    <span class="icon-menu-tgr">
	              <span class="menu-icon_line"></span>
	                    <span class="menu-icon_line"></span>
	                    <span class="menu-icon_line"></span>
	                    </span>
	                </button>
	            </div>
	        </div>
	        <div class="d-flex align-items-center">
	            <div class="logo-wrapper px-4 d-flex">
	                <div class="theme-logo">
	                    <div class="logo-cont">
	                        <img src="assets/img/logo-icon.png" class="logo-icon" alt="Logo">
	                        <img src="assets/img/logo.png" class="logo" alt="Logo">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="main-sidebar-inner" data-scrollbar="sidebar">
	            <ul class="sidebar-nav sidebar-nav-light-hover list-unstyled text-unset small-3 fw-600 content-list">
	                <li class="nav-item text-light transition active">
	                    <a href="#" aria-expanded="false" data-toggle="collapse" class="sbr-collapse nav-link nav-link-border collapsed collapser collapser-active">
	                        <div class="link-icon-collapse icon-home fw-700"></div>
	                        <div class="p-collapsing-title">Dashboard</div>
	                    </a>
	                    <div class="collapse nav-collapse collapse show">
	                        <ul class="list-unstyled">
	                            <li class="nav-item active">
									<router-link to="/admin" class="p-collapsing-title nav-link">
						                <span>Home</span>
									</router-link>
						        </li>
						        <li class="nav-item active">
									<router-link to="/admin/users" class="p-collapsing-title nav-link">
						                <span>Users</span>
									</router-link>
						        </li>
						        <li class="nav-item active">
									<router-link to="/admin/produts" class="p-collapsing-title nav-link">
						                <span>Products</span>
									</router-link>
						        </li>
	                        </ul>
	                    </div>
	                </li>
	                <li class="nav-item text-light transition">
	                    <a href="#" aria-expanded="false" data-toggle="collapse" class="sbr-collapse nav-link nav-link-border collapser collapser-active open">
	                        <div class="link-icon-collapse icon-copy-file"></div><span class="p-collapsing-title">App pages</span>
	                    </a>
	                    <div class="collapse nav-collapse collapse show">
	                        <ul class="list-unstyled">
	                            <li class="nav-item">
	                                <a href="chat.html" class="p-collapsing-title nav-link">
	                                    <span>Chat</span>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                </li>
	            </ul>
	        </div>
	    </nav>
	    <!-- /.sidebar -->

	    <!-- main -->
	    <div class="main-container">

	        <!-- header -->
	        <header class="main-header">
	            <!-- nav -->
	            <nav class="main-navbar navbar navbar-expand-lg navbar-dark navbar-affix">
	                <div class="ml-auto px-4 pl-lg-9">
	                    <ul class="nav sec-nav navbar-nav flex-row">
	                        <li class="nav-item dropdown">
	                            <a class="nav-link text-capitalize d-none d-md-inline-flex align-items-center h-100 small-2" href="#" id="dropdownLang_02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <img class="img-lang mr-3" src="assets/img/icons/flag/us.svg" alt="USA">
	                                <div class="lh-1 fw-400">
	                                    English
	                                </div>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right shadow-1 py-3 position-absolute mt-1" aria-labelledby="dropdownAdmin">
	                                <a class="dropdown-item d-flex align-items-center py-1" href="#">
	                                    <img class="img-lang mr-3" src="assets/img/icons/flag/us.svg" alt="USA"> English
	                                </a>
	                                <a class="dropdown-item d-flex align-items-center py-1" href="#">
	                                    <img class="img-lang mr-3" src="assets/img/icons/flag/gr.svg" alt="GR"> German
	                                </a>
	                                <a class="dropdown-item d-flex align-items-center py-1" href="#">
	                                    <img class="img-lang mr-3" src="assets/img/icons/flag/fr.svg" alt="FR"> France
	                                </a>
	                            </div>
	                        </li>
	                        <li class="user-item nav-item dropdown">
	                            <a class="user-link nav-link d-inline-flex align-items-center h-100 small-1 pl-1 pl-sm-3 pr-0" href="#" id="dropdownAdmin_02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <img class="user-avatar rounded-circle mr-sm-3" src="assets/img/avatar/1.jpg" alt="Avatar">
	                                <div class="d-none d-sm-block lh-1">
	                                    <span class="small-5 fw-300">Welcome,</span>
	                                    <div class="lh-5 text-primary">Paul Chappell</div>
	                                </div>
	                                <span class="icon-chevron-down small-8 ml-3"></span>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right shadow-1 py-3 position-absolute mt-2" aria-labelledby="dropdownAdmin">
	                                <div class="px-5 text-center">
	                                    <div class="img-md position-relative br-n bp-c bs-c ar-1_1 mx-auto rounded-circle mb-3" style="background-image: url(assets/img/avatar/1.jpg)">
	                                        <span class="position-absolute b-0 r--1 text-light small-6 d-block bg-primary p-2 rounded-circle lh-1"><input type="file" class="custom-file-input position-absolute l-0 t-0 b-0 h-auto" id="customFile"><i class="fas fa-pen"></i></span>
	                                    </div>
	                                    <div class="lh-5 small-2 fw-500">Paul Chappell</div>
	                                    <hr class="my-4">
	                                </div>
	                                <a class="dropdown-item" href="#"><span class="icon-user mr-2"></span>My Profile</a>
	                                <a class="dropdown-item" href="#"><span class="icon-envelope mr-2"></span>Messages</a>
	                                <a class="dropdown-item" href="#"><span class="icon-cog mr-2"></span>Settings</a>
	                                <a class="dropdown-item" href="#"><span class="icon-power-on mr-2"></span>Logout</a>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
	            </nav>
	            <!-- /.nav -->
	        </header>
	        <!-- /.header -->

	        <!-- main content -->
	        <main class="main-content overflow-hidden">
	            <!-- inner-body -->
	            <div id="dashboard" class="inner-body overflow-hidden">
	                <!-- content-header -->
	                <div class="container-fluid pt-7 pb-3">
	                    <div class="row flex-wrap align-items-center py-3">
	                        <div class="col mb-4 mb-md-0">
	                            <div class="text-light">
	                                <h3 class="fw-100 mb-1">Welcome back, Paul!</h3>
	                                <span class="text-info">Dashboard</span>
	                            </div>
	                        </div>
	                        <div class="col-12 col-md-auto">
	                            <div class="d-flex flex-wrap">
	                                <div class="panel-dropdown dropdown mr-auto">
	                                    <button class="tep-btn btn dropdown-toggle ml-auto" type="button" id="timePanelTab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                        <span class="d-flex pr-3">
	                        <span class="d-flex align-items-center pr-3 border-right lead-3">
	                          <span class="icon-calendar-alt"></span>
	                                        </span>
	                                        <span class="d-block lh-3 py-1 pl-3">
	                          <span class="d-block mb-1">Feb 1 - Feb 29, 2020</span>
	                                        <span class="small-3 fw-300">Compared Jan 1 - Jan 30, 2020</span>
	                                        </span>
	                                        </span>
	                                    </button>
	                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="timePanelTab">
	                                        <a class="dropdown-item" href="#">
	                                            <div class="lh-3 py-1">
	                                                <span class="d-block mb-1">Junary, 2020</span>
	                                            </div>
	                                        </a>
	                                        <a class="dropdown-item" href="#">
	                                            <div class="lh-3 py-1">
	                                                <span class="d-block mb-1">February, 2020</span>
	                                            </div>
	                                        </a>
	                                        <a class="dropdown-item" href="#">
	                                            <div class="lh-3 py-1">
	                                                <span class="d-block mb-1">March, 2020</span>
	                                            </div>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /.content-header -->

	                <!-- container -->
	                <div class="container-fluid">
	                    <!-- panel-cards-->
	                    <div>
	                        <div class="row mb-4">
	                            <div class="col d-flex align-items-center py-1">
	                                <ul class="panel-tab-group flex-nowrap nav nav-tabs" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active" id="day-tab" data-toggle="tab" href="#day" role="tab" aria-controls="day" aria-selected="true">Day</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" id="week-tab" data-toggle="tab" href="#week" role="tab" aria-controls="week" aria-selected="false">Week</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" id="month-tab" data-toggle="tab" href="#month" role="tab" aria-controls="month" aria-selected="false">Month</a>
	                                    </li>
	                                </ul>
	                                <div class="pl-4">
	                                    <span class="d-none d-xl-block">Time Zone: (GMT + 02:00)</span>
	                                </div>
	                            </div>
	                            <div class="col-12 col-md-auto d-none d-md-block py-1">
	                                <div class="d-flex flex-wrap align-items-center justify-content-end">
	                                    <div class="fw-500 mr-4">Show value In:</div>
	                                    <div class="panel-dropdown dropdown">
	                                        <button class="tep-btn btn dropdown-toggle ml-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                            <span class="flex-1">USD</span>
	                                        </button>
	                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
	                                            <a class="dropdown-item" href="#">Last month</a>
	                                            <a class="dropdown-item" href="#">Last 3 months</a>
	                                            <a class="dropdown-item" href="#">Last year</a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-content" id="defaultTabContent">
	                            <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="day-tab">
	                                <!-- panel-card -->
	                                <div class="card-row row mb-7">
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lp-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Daily Sales</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">78.4$</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-01" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lp-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Transactions</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">240+</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-02" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lg-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Visits</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">101.3K</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-03" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Total Sales</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">205.9$</h3>
	                                                    <span class="small"><span class="text-danger fw-600">+ 12%<i class="fas fa-arrow-down ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-04" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- /.panel-card -->
	                            </div>
	                            <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="week-tab">
	                                <!-- panel-card -->
	                                <div class="card-row row mb-7">
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lp-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Conversion</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">78.4</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-05" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lp-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Completed orders</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">2405+</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-06" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lg-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Successful transactions</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">620+</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-07" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Impressions</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">52.2K</h3>
	                                                    <span class="small"><span class="text-danger fw-600">+ 12%<i class="fas fa-arrow-down ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-08" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- /.panel-card -->
	                            </div>
	                            <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab">
	                                <!-- panel-card -->
	                                <div class="card-row row mb-7">
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lp-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Sales Grow</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">78.4K</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-09" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lp-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Profit Grow</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">78.4K</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-10" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-6 mb-lg-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Orders Grow</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">25K</h3>
	                                                    <span class="small"><span class="text-success fw-600">+ 41%<i class="fas fa-arrow-up ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-11" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="card-item col-md-6 col-lp-3 mb-3">
	                                        <div class="main-card card text-light">
	                                            <div class="mb-2">
	                                                <span class="text-uppercase fw-600 text-glow-white-sm">Member Grow</span>
	                                            </div>
	                                            <div class="d-flex align-items-center w-100">
	                                                <div class="flex-1">
	                                                    <h3 class="fw-300 mb-0">78 234</h3>
	                                                    <span class="small"><span class="text-danger fw-600">+ 12%<i class="fas fa-arrow-down ml-1"></i></span></span>
	                                                </div>
	                                                <div class="w-50" style="height: 50px;">
	                                                    <canvas id="chart-sm-12" height="49"></canvas>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- /.panel-card -->
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /.panel-cards -->

	                    <!-- panel-row -->
	                    <div class="panel-row row gutters-y mb-0">
	                        <!-- income -->
	                        <div class="panel-col col-lp-8">
	                            <div class="panel-card panel">
	                                <header class="panel-header align-items-center">
	                                    <div>
	                                        <h5 class="title text-glow-white-sm mb-0">Income</h5>
	                                    </div>
	                                    <div class="panel-header-nav ml-auto">
	                                        <a data-toggle="collapse" href="#collapseIncome" role="button" aria-expanded="false" aria-controls="collapseDayStat" class="nav-item mr-3">
	                                            <span class="icon-minus"></span>
	                                        </a>
	                                        <a data-toggle="refresh" class="nav-item mr-3"><span class="icon-refresh"></span></a>
	                                        <a data-toggle="remove" class="nav-item"><span class="icon-close"></span></a>
	                                    </div>
	                                </header>
	                                <div class="collapse show" id="collapseIncome">
	                                    <div class="panel-body">
	                                        <div id="achart-income"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.income -->

	                        <!-- day stats -->
	                        <div class="panel-col col-xl-6 col-lp-4">
	                            <div class="panel-card panel">
	                                <header class="panel-header align-items-center">
	                                    <div>
	                                        <h5 class="title mb-0">Day stats</h5>
	                                    </div>
	                                    <div class="panel-header-nav ml-auto">
	                                        <a data-toggle="collapse" href="#collapseDayStat" role="button" aria-expanded="false" aria-controls="collapseDayStat" class="nav-item mr-3">
	                                            <span class="icon-minus"></span>
	                                        </a>
	                                        <a data-toggle="refresh" class="nav-item mr-3"><span class="icon-refresh"></span></a>
	                                        <a data-toggle="remove" class="nav-item"><span class="icon-close"></span></a>
	                                    </div>
	                                </header>
	                                <div class="collapse show" id="collapseDayStat">
	                                    <div class="panel-body">
	                                        <div class="py-2 mb-1">
	                                            <div id="chart-radialBar_A"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.day stats -->

	                        <!-- browser statistics -->
	                        <div class="panel-col col-xl-6 col-lp-4">
	                            <div class="panel-card panel">
	                                <header class="panel-header align-items-center">
	                                    <div>
	                                        <h5 class="title text-glow-white-sm mb-0">Browser Statistics</h5>
	                                    </div>
	                                    <div class="panel-header-nav ml-auto">
	                                        <a data-toggle="collapse" href="#browserStatistics" role="button" aria-expanded="false" aria-controls="collapseDayStat" class="nav-item mr-3">
	                                            <span class="icon-minus"></span>
	                                        </a>
	                                        <a data-toggle="refresh" class="nav-item mr-3"><span class="icon-refresh"></span></a>
	                                        <a data-toggle="remove" class="nav-item"><span class="icon-close"></span></a>
	                                    </div>
	                                </header>
	                                <div class="collapse show" id="browserStatistics">
	                                    <div class="panel-body">
	                                        <div class="mb-6">
	                                            <div class="d-flex align-items-center mb-3 small-1 fw-500">
	                                                <span class="panel-icon-g fab fa-chrome mr-3"></span>
	                                                <div class="lh-1">
	                                                    <span class="d-block mb-1">Google Chrome</span>
	                                                    <span class="small text-primary fw-600">10:30 PM</span>
	                                                </div>
	                                                <span class="d-flex align-items-center ml-auto">95%<i class="fas fa-arrow-up text-success small-4 ml-1"></i></span>
	                                            </div>
	                                            <div class="progress w-100 my-0" style="height: 5px;">
	                                                <div class="progress-bar bg-gradient-progress-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="mb-6">
	                                            <div class="d-flex align-items-center mb-3 small-1 fw-500">
	                                                <span class="panel-icon-g fab fa-firefox mr-3"></span>
	                                                <div class="lh-1">
	                                                    <span class="d-block mb-1">Firefox</span>
	                                                    <span class="small text-primary fw-600">11:03 PM</span>
	                                                </div>
	                                                <span class="d-flex align-items-center ml-auto">87%<i class="fas fa-arrow-up text-success small-4 ml-1"></i></span>
	                                            </div>
	                                            <div class="progress w-100 my-0" style="height: 5px;">
	                                                <div class="progress-bar bg-gradient-progress-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="mb-6">
	                                            <div class="d-flex align-items-center mb-3 small-1 fw-500">
	                                                <span class="panel-icon-g fab fa-safari mr-3"></span>
	                                                <div class="lh-1">
	                                                    <span class="d-block mb-1">Safari</span>
	                                                    <span class="small text-primary fw-600">8:21 PM</span>
	                                                </div>
	                                                <span class="d-flex align-items-center ml-auto">52%<i class="fas fa-arrow-up text-success small-4 ml-1"></i></span>
	                                            </div>
	                                            <div class="progress w-100 my-0" style="height: 5px;">
	                                                <div class="progress-bar bg-gradient-progress-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="mb-6">
	                                            <div class="d-flex align-items-center mb-3 small-1 fw-500">
	                                                <span class="panel-icon-g fab fa-opera mr-3"></span>
	                                                <div class="lh-1">
	                                                    <span class="d-block mb-1">Opera</span>
	                                                    <span class="small text-primary fw-600">11:07 PM</span>
	                                                </div>
	                                                <span class="d-flex align-items-center ml-auto">31%<i class="fas fa-arrow-up text-success small-4 ml-1"></i></span>
	                                            </div>
	                                            <div class="progress w-100 my-0" style="height: 5px;">
	                                                <div class="progress-bar bg-gradient-progress-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100">
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="mb-6">
	                                            <div class="d-flex align-items-center mb-3 small-1 fw-500">
	                                                <span class="panel-icon-g fab fa-edge mr-3"></span>
	                                                <div class="lh-1">
	                                                    <span class="d-block mb-1">Edge</span>
	                                                    <span class="small text-primary fw-600">7:31 PM</span>
	                                                </div>
	                                                <span class="d-flex align-items-center ml-auto">29%<i class="fas fa-arrow-up text-success small-4 ml-1"></i></span>
	                                            </div>
	                                            <div class="progress w-100 my-0" style="height: 5px;">
	                                                <div class="progress-bar bg-gradient-progress-primary" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="mb-2">
	                                            <div class="d-flex align-items-center mb-3 small-1 fw-500">
	                                                <span class="panel-icon-g fab fa-internet-explorer mr-3"></span>
	                                                <div class="lh-1">
	                                                    <span class="d-block mb-1">Internet Explorer</span>
	                                                    <span class="small text-primary fw-600">7:31 PM</span>
	                                                </div>
	                                                <span class="d-flex align-items-center ml-auto">12%<i class="fas fa-arrow-up text-success small-4 ml-1"></i></span>
	                                            </div>
	                                            <div class="progress w-100 my-0" style="height: 5px;">
	                                                <div class="progress-bar bg-gradient-progress-primary" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.browser statistics -->

	                        <!-- location -->
	                        <div class="panel-col col-xl-6 col-lp-4">
	                            <div class="panel-card panel">
	                                <header class="panel-header align-items-center">
	                                    <div>
	                                        <h5 class="title mb-0">Location</h5>
	                                    </div>
	                                    <div class="panel-header-nav ml-auto">
	                                        <a data-toggle="collapse" href="#collapseLocation" role="button" aria-expanded="false" aria-controls="collapseLocation" class="nav-item mr-3">
	                                            <span class="icon-minus"></span>
	                                        </a>
	                                        <a data-toggle="refresh" class="nav-item mr-3"><span class="icon-refresh"></span></a>
	                                        <a data-toggle="remove" class="nav-item"><span class="icon-close"></span></a>
	                                    </div>
	                                </header>
	                                <div class="collapse show" id="collapseLocation">
	                                    <div class="panel-body">
	                                        <div id="chart-radar"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.location -->

	                        <!-- users -->
	                        <div class="panel-col col-xl-6 col-lp-4">
	                            <div class="panel-card panel">
	                                <header class="panel-header align-items-center">
	                                    <div>
	                                        <h5 class="title mb-0">Users</h5>
	                                    </div>
	                                    <div class="panel-header-nav ml-auto">
	                                        <a data-toggle="collapse" href="#collapseUsers" role="button" aria-expanded="false" aria-controls="collapseUsers" class="nav-item mr-3">
	                                            <span class="icon-minus"></span>
	                                        </a>
	                                        <a data-toggle="refresh" class="nav-item mr-3"><span class="icon-refresh"></span></a>
	                                        <a data-toggle="remove" class="nav-item"><span class="icon-close"></span></a>
	                                    </div>
	                                </header>
	                                <div class="collapse show" id="collapseUsers">
	                                    <div class="panel-body">
	                                        <div id="achart-pie" class="pt-3 pb-8"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.users -->

	                        <!-- purchase history -->
	                        <div class="panel-col col-12">
	                            <div class="panel-card panel">
	                                <header class="panel-header align-items-center">
	                                    <div>
	                                        <h5 class="title mb-0">Purchase History</h5>
	                                    </div>
	                                    <div class="panel-header-nav ml-auto">
	                                        <a data-toggle="collapse" href="#collapsePurchaseHistory" role="button" aria-expanded="false" aria-controls="collapsePurchaseHistory" class="nav-item mr-3">
	                                            <span class="icon-minus"></span>
	                                        </a>
	                                        <a data-toggle="refresh" class="nav-item mr-3"><span class="icon-refresh"></span></a>
	                                        <a data-toggle="remove" class="nav-item"><span class="icon-close"></span></a>
	                                    </div>
	                                </header>
	                                <div class="collapse show" id="collapsePurchaseHistory">
	                                    <div class="panel-body p-0">
	                                        <div class="panel-list-sc list-unstyled" data-scrollbar="scroll">
	                                            <div>
	                                                <table class="table table-borderless mb-0">
	                                                    <thead>
	                                                        <tr>
	                                                            <th scope="col" class="pl-6 py-3">Order</th>
	                                                            <th scope="col" class="py-3">Сlient</th>
	                                                            <th scope="col" class="py-3">Product</th>
	                                                            <th scope="col" class="py-3">Location</th>
	                                                            <th scope="col" class="py-3">Total</th>
	                                                            <th scope="col" class="py-3">Status</th>
	                                                            <th scope="col" class="py-3">Action</th>
	                                                        </tr>
	                                                    </thead>
	                                                    <tbody>
	                                                        <tr>
	                                                            <th scope="row" class="pl-6">#3416</th>
	                                                            <td>
	                                                                <div class="d-flex align-items-center">
	                                                                    <span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
	                                                                    <small class="ml-3 small-2">semVIper</small>
	                                                                </div>
	                                                            </td>
	                                                            <td>Mintaka 8 Max</td>
	                                                            <td>321,418</td>
	                                                            <td>$104,142</td>
	                                                            <td><a href="#" class="d-flex align-items-center small-2 fw-500"><i class="fas fa-circle text-glow-warning text-warning small-8 mr-2"></i>Moving</a></td>
	                                                            <td>
	                                                                <div class="panel-dropdown-menu dropdown">
	                                                                    <button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                                        <i class="fas fa-ellipsis-h"></i>
	                                                                    </button>
	                                                                    <div class="dropdown-menu dropdown-menu-right panel-dropdown-menu" aria-labelledby="navbar-dropdown">
	                                                                        <ul class="list-unstyled">
	                                                                            <li><a href="#" class="dropdown-item">Edit</a></li>
	                                                                            <li><a href="#" class="dropdown-item">Delete</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <th scope="row" class="pl-6">#6227</th>
	                                                            <td>
	                                                                <div class="d-flex align-items-center">
	                                                                    <span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
	                                                                    <small class="ml-3 small-2">Clman. prod</small>
	                                                                </div>
	                                                            </td>
	                                                            <td>NISi 6</td>
	                                                            <td>321,418</td>
	                                                            <td>$104,142</td>
	                                                            <td><a href="#" class="d-flex align-items-center small-2 fw-500"><i class="fas fa-circle text-glow-success text-success small-8 mr-2"></i>Pending</a></td>
	                                                            <td>
	                                                                <div class="panel-dropdown-menu dropdown">
	                                                                    <button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                                        <i class="fas fa-ellipsis-h"></i>
	                                                                    </button>
	                                                                    <div class="dropdown-menu dropdown-menu-right panel-dropdown-menu">
	                                                                        <ul class="list-unstyled">
	                                                                            <li><a href="#" class="dropdown-item">Edit</a></li>
	                                                                            <li><a href="#" class="dropdown-item">Delete</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <th scope="row" class="pl-6">#2731</th>
	                                                            <td>
	                                                                <div class="d-flex align-items-center">
	                                                                    <span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
	                                                                    <small class="ml-3 small-2">RDN</small>
	                                                                </div>
	                                                            </td>
	                                                            <td>Commodo</td>
	                                                            <td>321,418</td>
	                                                            <td>$104,142</td>
	                                                            <td><a href="#" class="d-flex align-items-center small-2 fw-500"><i class="fas fa-circle text-glow-danger text-danger small-8 mr-2"></i>Canceled</a></td>
	                                                            <td>
	                                                                <div class="panel-dropdown-menu dropdown">
	                                                                    <button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                                        <i class="fas fa-ellipsis-h"></i>
	                                                                    </button>
	                                                                    <div class="dropdown-menu dropdown-menu-right panel-dropdown-menu">
	                                                                        <ul class="list-unstyled">
	                                                                            <li><a href="#" class="dropdown-item">Edit</a></li>
	                                                                            <li><a href="#" class="dropdown-item">Delete</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <th scope="row" class="pl-6">#7437</th>
	                                                            <td>
	                                                                <div class="d-flex align-items-center">
	                                                                    <span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
	                                                                    <small class="ml-3 small-2">IIios</small>
	                                                                </div>
	                                                            </td>
	                                                            <td>TempusX</td>
	                                                            <td>321,418</td>
	                                                            <td>$104,142</td>
	                                                            <td><a href="#" class="d-flex align-items-center small-2 fw-500"><i class="fas fa-circle text-glow-warning text-warning small-8 mr-2"></i>Moving</a></td>
	                                                            <td>
	                                                                <div class="panel-dropdown-menu dropdown">
	                                                                    <button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                                        <i class="fas fa-ellipsis-h"></i>
	                                                                    </button>
	                                                                    <div class="dropdown-menu dropdown-menu-right panel-dropdown-menu">
	                                                                        <ul class="list-unstyled">
	                                                                            <li><a href="#" class="dropdown-item">Edit</a></li>
	                                                                            <li><a href="#" class="dropdown-item">Delete</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <th scope="row" class="pl-6">#4853</th>
	                                                            <td>
	                                                                <div class="d-flex align-items-center">
	                                                                    <span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
	                                                                    <small class="ml-3 small-2">ATOS</small>
	                                                                </div>
	                                                            </td>
	                                                            <td>Porta VII</td>
	                                                            <td>321,418</td>
	                                                            <td>$104,142</td>
	                                                            <td><a href="#" class="d-flex align-items-center small-2 fw-500"><i class="fas fa-circle text-glow-warning text-warning small-8 mr-2"></i>Moving</a></td>
	                                                            <td>
	                                                                <div class="panel-dropdown-menu dropdown">
	                                                                    <button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                                        <i class="fas fa-ellipsis-h"></i>
	                                                                    </button>
	                                                                    <div class="dropdown-menu dropdown-menu-right panel-dropdown-menu">
	                                                                        <ul class="list-unstyled">
	                                                                            <li><a href="#" class="dropdown-item">Edit</a></li>
	                                                                            <li><a href="#" class="dropdown-item">Delete</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <th scope="row" class="pl-6">#8162</th>
	                                                            <td>
	                                                                <div class="d-flex align-items-center">
	                                                                    <span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
	                                                                    <small class="ml-3 small-2">Secrt</small>
	                                                                </div>
	                                                            </td>
	                                                            <td>Odio+</td>
	                                                            <td>321,418</td>
	                                                            <td>$104,142</td>
	                                                            <td><a href="#" class="d-flex align-items-center small-2 fw-500"><i class="fas fa-circle text-glow-success text-success small-8 mr-2"></i>Pending</a></td>
	                                                            <td>
	                                                                <div class="panel-dropdown-menu dropdown">
	                                                                    <button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                                        <i class="fas fa-ellipsis-h"></i>
	                                                                    </button>
	                                                                    <div class="dropdown-menu dropdown-menu-right panel-dropdown-menu">
	                                                                        <ul class="list-unstyled">
	                                                                            <li><a href="#" class="dropdown-item">Edit</a></li>
	                                                                            <li><a href="#" class="dropdown-item">Delete</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                            </td>
	                                                        </tr>
	                                                    </tbody>
	                                                </table>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /.purchase history -->
	                    </div>
	                    <!-- /.panel-row -->
	                </div>
	                <!-- /.container -->
	            </div>
	            <!-- /.inner-body -->
	            <!-- footer -->
	            <footer class="footer panel">
	                <div class="footer-body text-primary">
	                    <div class="row no-gutters align-items-center">
	                        <div class="col-12 col-sm-auto">
	                            <div class="text-center text-sm-left fw-400 mb-2 mb-sm-0">
	                                2020 © Mintaka
	                            </div>
	                        </div>
	                        <div class="col-12 col-sm">
	                            <div class="nav nav-bold-style justify-content-center justify-content-sm-end text-uppercase mx--4">
	                                <a class="nav-link" href="#">About</a>
	                                <a class="nav-link" href="#">Terms of use</a>
	                                <a class="nav-link" href="#">Privacy Policy</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </footer>
	            <!-- /.footer -->
	        </main>
	        <!-- /.main content -->
	    </div>
	    <!-- /.main -->
		
		<router-view></router-view>
	</div>
</template>
<script>
	export default {

	}
</script>