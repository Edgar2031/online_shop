<template>
	<div class="container-fluid mb-4">
		<div class="row no-gutters panel-top-line panel-fill rounded">
			<div class="col-12">
			  <!-- shop-search -->
			  <div class="shop-search h-100">
			    <div v-on:submit.prevent="noop" class="input-light h-100">
					<div class="input-group h-100">
						<div class="input-group-prepend border-0 input-group-prepend">
							<span class="input-group-text lead-1 pl-4">
								<span class="icon-search"></span>
							</span>
						</div>
						<input v-on:keyup="search" type="text" placeholder="Search Here" aria-label="Search" class="input_search form-control form-control-lg h-100">
					</div>
			    </div>
			  </div>
			  <!-- /.shop-search -->
			</div>
			<div class="col-12">
				<div class="row no-gutters panel-top-line">
					<div class="col-lp-10 pl-lp-0 char-sFill">
						<div class="pt-6 px-5">
							<div class="tab-content" id="minimalTabContent">
								<div class="tab-pane fade show active" id="mode-simple" role="tabpanel" aria-labelledby="content-mode-simple-tab">
									<div class="row shop-list" v-for="p in products" :key = 'p.id'>

										<!-- item -->
										<div class="col-12 shop-item">
											<div class="d-xl-flex">
												<div class="mb-6 mb-xl-0 mr-xl-4 position-relative">
													<img v-bind:src="'http://localhost:8000/product_photo/' + p.p_photo[0].photo" class="img-shop-item-v rounded">
													<span class="badge badge-warning position-absolute l--2 t-2 text-uppercase fw-600 ls-1 rounded-2 small-6"></span>
												</div>
												<div class="flex-1 mb-6 mb-xl-0 mr-xl-5">
													<a href="#" class="lead-2 fw-600 d-block lh-3 mb-3">
														{{ p.name }}
													</a>
													<a class="text-success mb-2 d-block" href="#">
														<span class="icon-star-favorite"></span>
														<span class="icon-star-favorite"></span>
														<span class="icon-star-favorite"></span>
														<span class="icon-star-favorite"></span>
														<span class="icon-star-shape-favorite"></span>
													</a>
													<p class="lh-7 small-2 mb-4">{{ p.description }}</p>
													<div>
														<span class="small-2 mr-3">
															<span class="text-secondary mr-1">Added:</span>
															<a class="text-success text-dotted"> 	
																{{ p.time }}
															</a>
														</span>
													</div>
												</div>
												<div>
													<div class="d-flex align-items-center h-100">
														<div class="text-xl-center">
															<h4 class="emce-price mb-5">${{ p.price }}</h4>
															<a @click="delete_prod(p.id)" class="btn btn-danger d-flex align-items-center mb-4">
																Delete
															</a>
															<a @click="confirm_prod(p.id)" class="btn btn-outline-primary d-flex align-items-center">
																Confirm
															</a>
														</div>
													</div>
												</div>
											</div>
											<hr class="my-7">
										</div>
										<!-- /.item -->
									</div>
								</div>
							</div>
							<!-- pagination -->
							<!-- <div class="py-6 py-md-8">
								<nav aria-label="Page navigation">
									<ul class="pagination justify-content-center mb-0">
										<li class="page-item d-none d-md-inline">
											<a class="page-link" href="#" aria-label="Previous">
												<span class="icon-chevron-left small-7" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">4</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">5</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">...</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">104</a>
										</li>
										<li class="page-item d-none d-md-inline">
											<a class="page-link" href="#" aria-label="Next">
												<span class="icon-chevron-right small-7" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
 -->							<!-- /.pagination -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
			data(){
				return {
					products: [] 
				}
			},
			created(){
				this.axios.get('/api/admin/getProducts').then(r => {
					this.products = r.data;
				});
			},
			methods:{
				confirm_prod(x){
					this.axios.get(`/api/admin/confirm_prod/${x}`).then(r => {
						this.products = this.products.filter(a=> a.id != x);
					});
				},
				delete_prod(x){
					this.axios.get(`/api/admin/delete_prod/${x}`).then(r => {
						this.products = this.products.filter(a=> a.id != x);
					});
				},
				search: function(e){
					if (e.keyCode === 13) {
				    	var search = $('.input_search').val();
				    	if (search == '') {
				    		this.axios.get('/api/admin/product').then(r => {
								this.products = r.data;
							});
				    	}else {
				    		this.axios.get(`/api/admin/product_search/${search}`).then(r => {
								this.products = r.data;
							});
				    	}
				    }
				}
			}
	}
</script>