// Go to Top
// Scroll Event
$(window).on('scroll', function(){
	var scrolled = $(window).scrollTop();
	if (scrolled > 10) $('.go-top').addClass('active');
	if (scrolled < 10) $('.go-top').removeClass('active');
});  

// Click Event
$('.go-top').on('click', function() {
	$("html, body").animate({ scrollTop: "0" }, 500);
});