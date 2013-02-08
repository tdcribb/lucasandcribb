$(document).ready(function() {

	$('#page').fadeIn(1000);

	$('.twitter').mouseenter(function() {
		$('.t-white').hide();
		$('.t-grey').show();
	}).mouseleave(function() {
		$('.t-grey').hide();
		$('.t-white').show();
	});

	$('.facebook').mouseenter(function() {
		$('.f-white').hide();
		$('.f-grey').show();
	}).mouseleave(function() {
		$('.f-grey').hide();
		$('.f-white').show();
	});

});