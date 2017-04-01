$(function() {
$('#EditDetails-form-link').click(function(e) {
		$("#EditDetails-form").delay(100).fadeIn(100);
 		$("#BookingRecord-form").fadeOut(100);
		$('#BookingRecord-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#BookingRecord-form-link').click(function(e) {
		$("#BookingRecord-form").delay(100).fadeIn(100);
 		$("#EditDetails-form").fadeOut(100);
		$('#EditDetails-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
});