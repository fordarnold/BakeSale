/* jquery scroll script */
jQuery(window).scroll(function() {
	if ($(window).scrollTop() >= 100) 
	{
		$('.scroll-element').addClass('padding-on-header');
	}
	if ($(window).scrollTop() < 100) 
	{
		$('.scroll-element').removeClass('padding-on-header');
	}
});