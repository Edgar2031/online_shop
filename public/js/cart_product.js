$(document).ready(function() {
	const cart_token = $('#cart_token').val();

	// Total
	function total(){		
		var total = 0;
		let cart_td = 0;
		for (cart in $('.cart_td')) {
			if ($('.cart_td')[cart].textContent != undefined) {			
				cart_td =+ $('.cart_td')[cart].textContent.split('$')[1];
				total += cart_td;
			}else {
				continue;
			}
		}
		$('.total_span').html('&#36; ' + total + '.00'); 
	}
	total();

	// Add Wish List
	$('.move_to_wish_list').click(function(){
		const it = $(this);
		const btn = $(this).parent().find('.remove_from_wish_list');
		const wish_list_this_id = Number($(this).parent().attr('class').split(' ')[0].split('_')[1]);
		$.ajax({
	        url: '/g_profile/page_cart/wish_list_this_add_cart',
	        type: 'post',
	        data: {'_token': cart_token, wish_list_this_id},
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
	$('.remove_from_wish_list').click(function(){
		const it = $(this);
		const btn = $(this).parent().find('.move_to_wish_list');
		const wish_list_this_id = Number($(this).parent().attr('class').split(' ')[0].split('_')[1]);
		$.ajax({
	        url: '/g_profile/page_cart/wish_list_this_remove_cart',
	        type: 'post',
	        data: {'_token': cart_token, wish_list_this_id},
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

	$('.fa-times').click(function() {      	
		const this_cart = $(this).parent().parent();
		const cart_remove_this_id = Number($(this).parent().parent().attr('class').split(' ')[0].split('_')[1]);
		$.ajax({
	        url: '/g_profile/page_cart/remove_this',
	        type: 'post',
	        data: {'_token': cart_token, cart_remove_this_id},
	        success: function(r){
	        	$(this_cart).remove();
	        }
	    })
	});


	// Item quantity control (shopping cart)
	$(".cart-item-minus").click(function() {
	    var currentVal = parseInt($(this).next(".cart-quantity").val());
	    if (currentVal == "NaN") currentVal = 0;
	    if (currentVal > 0) {
	        $(this).next(".cart-quantity").val(currentVal - 1);
	        $(this).next(".cart-quantity").html(currentVal - 1);
	    }
	});

	$(".cart-item-plus").click(function() {
	    const cart_count_val =+ $(this).parent().parent().attr('data-id');
	    var currentVal = parseInt($(this).prev(".cart-quantity").val());

	    if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;
	    	if (currentVal != cart_count_val) {	    		
			    $(this).prev(".cart-quantity").val(currentVal + 1);
			    $(this).prev(".cart-quantity").html(currentVal + 1);
	    	}
	});

	$('.cart-item-minus').click(function() {
		const this_td = $(this);
		const cart_count_val =+ $(this).parent().find('input').val();
		const cart_count_this_id = Number($(this).parent().parent().attr('class').split(' ')[0].split('_')[1]);
		if (cart_count_val === 0) {
			$.ajax({
		        url: '/g_profile/page_cart/this_count_minus_0',
		        type: 'post',
		        data: {'_token': cart_token, cart_count_this_id},
		        success: function(r){
		        	const price =+ $(this_td).parent().parent().find('.cart_td').attr('data-id');
		        	$(this_td).parent().parent().find('.cart_td').html('&#36; ' + price * cart_count_val + '.00');
		        	total();
		        }
		    })
		}else {
			$.ajax({
		        url: '/g_profile/page_cart/this_count_minus_1',
		        type: 'post',
		        data: {'_token': cart_token, cart_count_this_id, cart_count_val},
		        success: function(r){
		        	const price =+ $(this_td).parent().parent().find('.cart_td').attr('data-id');
		        	$(this_td).parent().parent().find('.cart_td').html('&#36; ' + price * cart_count_val + '.00');
		        	total();
		        }
		    })
		}
	});

	$('.cart-item-plus').click(function() {
		const this_td = $(this);
		const cart_count_val =+ $(this).parent().find('input').val();
		const cart_count_this_id = Number($(this).parent().parent().attr('class').split(' ')[0].split('_')[1]);
		if (cart_count_val == 1) {
			$.ajax({
		        url: '/g_profile/page_cart/this_count_plus_0',
		        type: 'post',
		        data: {'_token': cart_token, cart_count_this_id},
		        success: function(r){
		        	const price =+ $(this_td).parent().parent().find('.cart_td').attr('data-id');
		        	$(this_td).parent().parent().find('.cart_td').html('&#36; ' + price * cart_count_val + '.00');
		        	total();
		        }
		    })
		}else {
			$.ajax({
		        url: '/g_profile/page_cart/this_count_plus_1',
		        type: 'post',
		        data: {'_token': cart_token, cart_count_this_id, cart_count_val},
		        success: function(r){
		        	const price =+ $(this_td).parent().parent().find('.cart_td').attr('data-id');
		        	$(this_td).parent().parent().find('.cart_td').html('&#36; ' + price * cart_count_val + '.00');
		        	total();
		        }
		    })
		}
	});

	// Empty the cart
	$('.empty_the_cart').click(function() {
		$.ajax({
	        url: '/g_profile/page_cart/empty_the_cart',
	        type: 'post',
	        data: {'_token': cart_token},
	        success: function(r){
	        	$('.gap').after(`
								<div class="container" style="display: flex; justify-content: center; align-items: center;">
			                        <div class="row">
			                            <div class="col-md-8">
			                                <table class="table cart-table">
			                                    <thead>
			                                        <tr>
			                                            <th>  
			                                                Your shopping cart is empty
			                                            </th>
			                                        </tr>
			                                    </thead>
			                                </table>
			                            </div>
			                        </div>
			                    </div>
	        	`);
	        	$('.con_empty').remove();
	        	total();
	        }
	    })
	});


});