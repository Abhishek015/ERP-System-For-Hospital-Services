/*  This  is javascript function to create toggle forms in ADMIN PANEL */
$(function() {
    
	/* using JQUERY to make it atoggle button between forms 
	   "addHospital-form-link" is the button id 
	   "addHospital-form" loads with delay of 100ms
	   "regsiter-form" fades out
	   "register-form-link" is removed from being "active"
	   "addHospital-form-link" is current "active"
	                                               */
    $('#addHospital-form-link').click(function(e) {
    	$("#addHospital-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	
	
	/* using JQUERY to make it atoggle button between forms 
	   "register-form-link" is the button id 
	   "register-form" loads with delay of 100ms
	   "addHospital-form" fades out
	   "addHospital-form-link" is removed from being "active"
	   "register-form-link" is current "active"
	                                               */
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#addHospital-form").fadeOut(100);
		$('#addHospital-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
