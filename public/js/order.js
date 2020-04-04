$(document).ready(function() {
	$('.order_remove').click(function() {
		const remove = $(this);
		const order_id = $(this).parent().parent().attr('data-id').split('_')[1];
		$.ajax({
			url: '/g_profile/my_orders_history/remove',
			type: 'post',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: {order_id},
			success: function(data){
				if (data){
					if (data.success === true) $(remove).parent().parent().remove();
				}	
			},
			error: function (reject) {
				if (reject) return false;
			}
		})
	});
});