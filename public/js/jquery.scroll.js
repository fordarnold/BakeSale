/* jquery scroll script */
jQuery(window).scroll(function () {
	if (scroll >= 1) {
		$('#logo-image').attr('src','../images/logo-monogram.png');
		$('.scroll-element').addClass('padding-on-header');
	}
	if (scroll < 1) {
		$('.scroll-element').removeClass('padding-on-header');
		$('#logo-image').attr('src','../images/logo.svg');
	}
});