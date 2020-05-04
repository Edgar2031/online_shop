<template>
	<!-- container -->
    <div class="container-fluid">
        <!-- panel-row -->
        <div class="panel-row row gutters-y mb-0">
			<!-- purchase history -->
			<div class="panel-col col-12">
				<div class="panel-card panel">
					<header class="panel-header align-items-center">
						<div>
						  	<h5 class="title mb-0">Users</h5>
						</div>
						<div class="panel-header-nav ml-auto">
							<a data-toggle="refresh" class="nav-item mr-3" @click="refresh_user">
								<span class="icon-refresh"></span>
							</a>
							<a data-toggle="remove" class="nav-item close">
								<span class="icon-close"></span>
							</a>
						</div>
					</header>
					<!-- shop-search -->
					<div class="col-12">
						<div class="shop-search h-100">
							<div class="input-light h-100" v-on:submit.prevent="noop">
								<div class="input-group h-100">
									<div class="input-group-prepend border-0 input-group-prepend">
										<span class="input-group-text lead-1 pl-4">
											<span class="icon-search"></span>
										</span>
									</div>
									<input type="text" placeholder="Search Here" aria-label="Search" class="input_search form-control form-control-lg h-100" v-on:keyup="search">
								</div>
							</div>
						</div>
	                </div>
					<!-- /.shop-search -->
					<div class="collapse show" id="collapsePurchaseHistory">
						<div class="panel-body p-0">
					 		<div class="panel-list-sc list-unstyled" data-scrollbar="scroll">
					  			<div>
					    			<table class="table table-borderless mb-0">
										<thead>
											<tr>
												<th scope="col" class="pl-6 py-3">Name</th>
												<th scope="col" class="py-3">Surname</th>
												<th scope="col" class="py-3">Email</th>
												<th scope="col" class="py-3">Age</th>
												<th scope="col" class="py-3">Online - Offline</th>
												<th scope="col" class="py-3">Block</th>
												<th scope="col" class="py-3">Action</th>
											</tr>
										</thead>
										<tbody v-for="u in users" :key = 'u.id'>
											<tr>
												<th scope="row" class="pl-6">{{ u.name }}</th>
												<td>
													<div class="d-flex align-items-center">
														<span class="icon-table-cust d-none d-lp-inline icon-building lead-2"></span>
														<small class="ml-3 small-2">{{ u.surname }}</small>
													</div>
												</td>
												<td>{{ u.email }}</td>
												<td>{{ u.age }}</td>
												<td>
													<a v-if="u.online_offline === 1" class="d-flex align-items-center small-2 fw-500">
														<i class="fas fa-circle text-glow-success text-success small-8 mr-2"></i>
														Online
													</a>
													<a v-else-if="u.online_offline === 0" class="d-flex align-items-center small-2 fw-500">
														<i class="fas fa-circle text-glow-danger text-danger small-8 mr-2"></i>
														Offline
													</a>
												</td>
												<td>
													<a v-if="u.block == 0" class="d-flex align-items-center small-2 fw-500">
														<i class="fas fa-circle text-glow-success text-success small-8 mr-2"></i>
														No Block
													</a>
													<a v-else-if="u.block === 'permanent'" class="d-flex align-items-center small-2 fw-500">
														<i class="fas fa-circle text-glow-danger text-danger small-8 mr-2"></i>
														Block Permanent 
													</a>
													<a v-else class="d-flex align-items-center small-2 fw-500">
														<i class="fas fa-circle text-glow-warning text-warning small-8 mr-2"></i>
														Temporary ({{ u.block }})
													</a>
												</td>
												<td>
													<div class="panel-dropdown-menu dropdown">
														<button class="btn text-warning dropdown-toggle no-carret bc-t p-0" type="button" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fas fa-ellipsis-h"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right panel-dropdown-menu" aria-labelledby="navbar-dropdown">
															<ul class="list-unstyled">
																<li v-if="u.block == 0" @click="block_3_day(u.id)">
																	<a class="dropdown-item">
																		Block 3 day
																	</a>
																</li>
																<li v-if="u.block == 0" @click="block_one_week(u.id)">
																	<a class="dropdown-item">
																		Block one week
																	</a>
																</li>
																<li v-if="u.block == 0" @click="block_1_month(u.id)">
																	<a class="dropdown-item">
																		Block 1 month
																	</a>
																</li>
																<li v-if="u.block == 0" @click="block_permanent(u.id)">
																	<a class="dropdown-item">
																		Block permanent 
																	</a>
																</li>
																<li v-if="u.block != 0" @click="remove_block(u.id)">
																	<a class="dropdown-item">
																		Remove block
																	</a>
																</li>
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
</template>
<script>
	export default {
			data(){
				return {
					users: [] 
				}
			},
			created(){
				this.axios.get('/api/admin/getUsers').then(r => {
					this.users = r.data;
				});
			},
			methods:{
				refresh_user(){
					this.axios.get('/api/admin/refresh_user').then(r => {
						this.users = r.data;
					});
				},
				block_3_day(id){
					this.axios.get(`/api/admin/block_3_day/${id}`).then(r => {
						this.users = r.data;
					});
				},
				block_one_week(id){
					this.axios.get(`/api/admin/block_one_week/${id}`).then(r => {
						this.users = r.data;
					});
				},
				block_1_month(id){
					this.axios.get(`/api/admin/block_1_month/${id}`).then(r => {
						this.users = r.data;
					});
				},
				block_permanent(id){
					this.axios.get(`/api/admin/block_permanent/${id}`).then(r => {
						this.users = r.data;
					});
				},
				remove_block(id){
					this.axios.get(`/api/admin/remove_block/${id}`).then(r => {
						this.users = r.data;
					});
				},
				search: function(e){
					if (e.keyCode === 13) {
				    	var search = $('.input_search').val();
				    	if (search == '') {
				    		this.axios.get('/api/admin/refresh_user').then(r => {
								this.users = r.data;
							});
				    	}else {
				    		this.axios.get(`/api/admin/user_search/${search}`).then(r => {
								this.users = r.data;
							});
				    	}
				    }
				}
			}
	}
</script>