$(document).ready(function() {
	$('.dletete_this').click(function(event) {
		const parent = $(this).parent();
		const photo_id = $(this).parent().attr('data-id');
		const token = $('#token').val();
		$.ajax({
	        url: '/g_profile/my_product/product_item/delete_photo',
	        type: 'post',
	        data: {'_token': token,photo_id},
	        success: function(r){
	        	parent.remove();
	        } 
    	})
	});
});