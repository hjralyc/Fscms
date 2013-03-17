// JavaScript Document
$(document).ready(function() {
	$('#topmenu').dcMegaMenu({
		rowItems: '3',
		speed: 'fast'
	});    //$('.navi').horizontalNav({});
	$("#gototop").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#gototop').fadeIn();
			} else {
				$('#gototop').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#gototop').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});