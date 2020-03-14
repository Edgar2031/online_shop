$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loading").fadeOut(); 
	$(".l-ing").delay(400).fadeOut("slow");
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