$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".circles, .loading").fadeOut(250); 
	$(".l_ing").delay(500).fadeOut("slow");
});


/*------------------
	wishlist
--------------------*/
$('.icon-wishlist').on('click', function(){
	$(this).toggleClass('in-wishlist');
});

/*------------------
	cart
--------------------*/
$('.icon-cart').on('click', function(){
	$(this).toggleClass('in-cart');
});


// Range brightness
$('#range_brightness').change(function() {
	$('.head, .main').css('filter','brightness(' + $('#range_brightness').val() + '%)');
});


