<template>
	<div>
	    <!-- sidebar -->
	    <nav id="adminNav" class="main-sidebar p-collapsing-sidebar sidebar-fixed sidebar-left">
		    <div class="stick-toogler">
		        <div class="toggler-wrapper">
					<button class="p-collapsing-toggler toggler-secondary" data-collapsing="partially" data-collapsing-target="#adminNav" type="button" style="display: inline-block;">
						<span class="icon-menu-tgr">
						  <span class="menu-icon_line"></span>
						  <span class="menu-icon_line"></span>
						  <span class="menu-icon_line"></span>
						</span>
					</button>
		          	<!-- header -->
                    <header class="main-header" style="display: inline-block;">
                        <!-- nav -->
                        <nav class="main-navbar navbar navbar-expand-lg navbar-dark navbar-affix">
                          <div class="ml-auto px-4 pl-lg-9">
                            <ul class="nav sec-nav navbar-nav flex-row">
                              
								<li class="nav-item lang">
									<a href="#" data-toggle="offcanvas" data-target="#offcanvas-search" class="nav-link lead-2 pl-2 pl-md-3"><span class="icon-search"></span></a>
								</li>
								<li class="user-item nav-item dropdown">
									<a class="user-link nav-link d-inline-flex align-items-center h-100 small-1 pl-1 pl-sm-3 pr-0" href="#" id="dropdownAdmin_02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									      <div class="d-none d-sm-block lh-1">
									        <span class="small-5 fw-300">Welcome, {{ profile.name }}</span>
									        <div class="lh-5 text-primary">{{ profile.name }} {{ profile.surname }}</div>
									      </div>
									      <span class="icon-chevron-down small-8 ml-3"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow-1 py-3 position-absolute mt-2" aria-labelledby="dropdownAdmin">
									  <div class="px-5 text-center">
									    <div class="lh-5 small-2 fw-500">{{ profile.name }} {{ profile.surname }}</div>
									    <hr class="my-4">
									  </div>
									  <a class="dropdown-item" href="/g_logout"><span class="icon-power-on mr-2"></span>Logout</a>
									</div>
								</li>
                            </ul>
                          </div>
                        </nav>
                        <!-- /.nav -->
                    </header>
                    <!-- /.header -->
		        </div>
		    </div>
		    <div class="d-flex align-items-center">
		        <div class="logo-wrapper px-4 d-flex">
		        	<div class="theme-logo">
			            <div class="logo-cont">
							<!-- logo -->
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
		                <li class="nav-item _li active">
		                  <router-link to="/admin" class="p-collapsing-title nav-link">
		                    <span>Home</span>
		                  </router-link>
		                </li>
		                <li class="nav-item _li">
		                  <router-link to="/admin/produts" class="p-collapsing-title nav-link">
		                    <span>Product</span>
		                  </router-link>
		                </li>
		                <li class="nav-item _li">
		                  <router-link to="/admin/users" class="p-collapsing-title nav-link">
		                    <span>User</span>
		                  </router-link>
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

	      

	      <!-- main content -->
	      <main class="main-content overflow-hidden">
	        <!-- inner-body -->
	        <div id="dashboard" class="inner-body overflow-hidden">
	          <!-- content-header -->
	          <div class="container-fluid pt-7 pb-3">
	            <div class="row flex-wrap align-items-center py-3">
	              <div class="col mb-4 mb-md-0">
	                <div class="text-light">
	                  <h3 class="fw-100 mb-1">Welcome back, {{ profile.name }}!</h3>
	                </div>
	              </div>
	              <div class="col-12 col-md-auto">
	                <div class="d-flex flex-wrap">
	                  <div class="panel-dropdown dropdown date">

	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	          <!-- /.content-header -->
	          	<!-- Start Show -->
					<router-view></router-view>
		        <!-- End Show -->
	        </div>
	        <!-- /.inner-body -->
	        <!-- footer -->
	        <footer class="footer panel">
	          <div class="footer-body text-primary">
	            <div class="row no-gutters align-items-center">
	              <div class="col-12 col-sm-auto">
	                <div class="text-center text-sm-left fw-400 mb-2 mb-sm-0">
	                  2020 © Arduix
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
		
  	</div>
</template>
<script>
	export default {
			data(){
				return {
					profile: [] 
				}
			},
			created(){
				var id = $('meta[name="user-id"]').attr('content');
				this.axios.get(`/api/admin/profile/${id}`).then(r => {
					this.profile = r.data;
				});
			}
	}
</script>