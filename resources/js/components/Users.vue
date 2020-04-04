<template>
	<div>
		<h1>Home</h1>
		<div v-for="u in users" :key = 'u.id'>
			<h3>{{ u.name }}</h3>
			<h5>{{ u.surname }}</h5>
			
		</div>
	</div>
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
			}
	}
</script>