<template>
	<!-- container -->
    <div class="container-fluid">

        <!-- panel-row -->
        <div class="panel-row row gutters-y mb-0">
			<!-- users -->
			<div class="panel-col col-xl-6 col-lp-4">
                <div class="panel-card panel">
					<header class="panel-header align-items-center">
						<div>
							<h5 class="title text-glow-white-sm mb-0">Users Online - Offline</h5>
						</div>
						<div class="panel-header-nav ml-auto">
							<a data-toggle="refresh" class="nav-item mr-3" @click="refresh_user_online_offline">
								<span class="icon-refresh"></span>
							</a>
							<a data-toggle="remove" class="nav-item">
								<span class="icon-close"></span>
							</a>
						</div>
					</header>
					<div class="collapse show" id="browserStatistics">
						<div class="panel-body">
							<div class="pt-3 pb-8" style="width: 155px;">
								<div class="apexcharts-legend center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px -10px 20px; position: absolute; top: 15px;">
									<div class="apexcharts-legend-series" style="margin: 10px;" rel="1" data:collapsed="false">
										<span class="apexcharts-legend-marker" style="background: rgb(0, 255, 0) none repeat scroll 0% 0%; color: rgb(0, 255, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span>
										<span class="apexcharts-legend-text" style="color: rgb(255, 255, 255); font-size: 14px; font-family: Inter, sans-serif;" rel="1" i="0" data:default-text="USA%20-%2044" data:collapsed="false">Online - {{ user_online_offline.online }}</span>
									</div>
									<div class="apexcharts-legend-series" style="margin: 10px;" rel="2" data:collapsed="false">
										<span class="apexcharts-legend-marker" style="background: rgb(255, 0, 0) none repeat scroll 0% 0%; color: rgb(255, 0, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span>
										<span class="apexcharts-legend-text" style="color: rgb(255, 255, 255); font-size: 14px; font-family: Inter, sans-serif;" rel="2" i="1" data:default-text="China%20-%2055" data:collapsed="false">Offline - {{ user_online_offline.offline }}</span>
									</div>
									<div class="apexcharts-legend-series" style="margin: 10px;" rel="3" data:collapsed="false">
										<span class="apexcharts-legend-marker" style="background: rgb(255, 255, 250) none repeat scroll 0% 0%; color: rgb(255, 255, 250); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="3" data:collapsed="false"></span>
										<span class="apexcharts-legend-text" style="color: rgb(255, 255, 255); font-size: 14px; font-family: Inter, sans-serif;" rel="3" i="2" data:default-text="Singapore%20-%2041" data:collapsed="false">Users - {{ user_online_offline.online + user_online_offline.offline }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.users -->   

			<!-- admin -->
			<div class="panel-col col-xl-6 col-lp-4">
                <div class="panel-card panel">
                  	<header class="panel-header align-items-center">
	                    <div>
	                      	<h5 class="title mb-0">Admin Online - Offline</h5>
	                    </div>
	                    <div class="panel-header-nav ml-auto">
							<a data-toggle="refresh" class="nav-item mr-3" @click="refresh_admin_online_offline">
								<span class="icon-refresh"></span>
							</a>
							<a data-toggle="remove" class="nav-item close">
								<span class="icon-close"></span>
							</a>
	                    </div>
                  	</header>
                  	<div class="collapse show" id="collapseLocation">
                    	<div class="panel-body">
							<div class="pt-3 pb-8" style="width: 155px">
								<div class="apexcharts-legend center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px -10px 20px; position: absolute; top: 15px;">
									<div class="apexcharts-legend-series" style="margin: 10px;" rel="1" data:collapsed="false">
										<span class="apexcharts-legend-marker" style="background: rgb(0, 255, 0) none repeat scroll 0% 0%; color: rgb(0, 255, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span>
										<span class="apexcharts-legend-text" style="color: rgb(255, 255, 255); font-size: 14px; font-family: Inter, sans-serif;" rel="1" i="0" data:default-text="USA%20-%2044" data:collapsed="false">Online - {{ admin_online_offline.online }}</span>
									</div>
									<div class="apexcharts-legend-series" style="margin: 10px;" rel="2" data:collapsed="false">
										<span class="apexcharts-legend-marker" style="background: rgb(255, 0, 0) none repeat scroll 0% 0%; color: rgb(255, 0, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span>
										<span class="apexcharts-legend-text" style="color: rgb(255, 255, 255); font-size: 14px; font-family: Inter, sans-serif;" rel="2" i="1" data:default-text="China%20-%2055" data:collapsed="false">Offline - {{ admin_online_offline.offline }}</span>
									</div>
									<div class="apexcharts-legend-series" style="margin: 10px;" rel="3" data:collapsed="false">
										<span class="apexcharts-legend-marker" style="background: rgb(255, 255, 250) none repeat scroll 0% 0%; color: rgb(255, 255, 250); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="3" data:collapsed="false"></span>
										<span class="apexcharts-legend-text" style="color: rgb(255, 255, 255); font-size: 14px; font-family: Inter, sans-serif;" rel="3" i="2" data:default-text="Singapore%20-%2041" data:collapsed="false">Admin - {{ admin_online_offline.online + admin_online_offline.offline }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.admin -->    
        </div>
        <!-- /.panel-row -->
    </div>
  	<!-- /.container -->
</template>
<script>
	export default {
			data(){
				return {
					user_online_offline: [],
					admin_online_offline: [] 
				}
			},
			created(){
				this.axios.get('/api/admin/user_online_offline').then(r => {
					this.user_online_offline = r.data;
				});
				this.axios.get('/api/admin/admin_online_offline').then(r => {
					this.admin_online_offline = r.data;
				});
			},
			methods:{
				refresh_user_online_offline(){
					this.axios.get(`/api/admin/refresh_user_online_offline`).then(r => {
						this.user_online_offline = r.data;
					});
				},
				refresh_admin_online_offline(){
					this.axios.get(`/api/admin/refresh_admin_online_offline`).then(r => {
						this.admin_online_offline = r.data;
					});
				}
			}
	}
</script>