<template>
	<div>
		<h1>product</h1>
		<div v-for="p in products" :key = 'p.id'>
			<h3>{{ p.name }}</h3>
			<h5>{{ p.price }}</h5>
			<button @click="confirm_prod(p.id)">confirm</button>
			<button @click="delete_prod(p.id)">delete</button>
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
				}
			}
	}
</script>