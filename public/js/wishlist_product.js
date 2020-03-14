$(document).ready(function() {
	const wish_list_token = $('#wish_list_token').val();

	// Add Cart
	$('.move_to_cart').click(function(){
		const it = $(this);
		const btn = $(this).parent().find('.remove_from_cart');
		const cart_this_id = Number($(this).parent().attr('class').split(' ')[0].split('_')[1]);
		$.ajax({
	        url: '/g_profile/page_cart/cart_this_add_cart',
	        type: 'post',
	        data: {'_token': wish_list_token, cart_this_id},
	        success: function(r){
	        	$(it).css({
                    display: 'none'
                });
                $(btn).css({
                    display: 'block'
                });
	        }
	    })
	})

	// Remove From Cart
	$('.remove_from_cart').click(function(){
		const it = $(this);
		const btn = $(this).parent().find('.move_to_cart');
		const cart_this_id = Number($(this).parent().attr('class').split(' ')[0].split('_')[1]);
		$.ajax({
	        url: '/g_profile/page_cart/cart_this_remove_cart',
	        type: 'post',
	        data: {'_token': wish_list_token, cart_this_id},
	        success: function(r){
	        	$(it).css({
                    display: 'none'
                });
                $(btn).css({
                    display: 'block'
                });
	        }
	    })
	})

	// Remove From Wish List
	$('.fa-times').click(function() {      	
		const this_cart = $(this).parent().parent();
		const wish_list_remove_this_id = Number($(this).parent().parent().attr('class').split(' ')[0].split('_')[1]);
		$.ajax({
	        url: '/g_profile/page_cart/remove_this_wish_list',
	        type: 'post',
	        data: {'_token': wish_list_token, wish_list_remove_this_id},
	        success: function(r){
	        	$(this_cart).remove();
	        }
	    })
	});
});