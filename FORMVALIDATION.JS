
                 /********** form validation for hospital bed booking webpage starts ***************************************************************/
function validatePincode(id)       /** to check whether pincode entered is empty and add glyphicon-remove or glyphicon-remove accordingly **/
{
	if($("#"+id).val()=="")                    /** if empty return false and add glyphicon-remove symbol **/
	{
		var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 6 DIGIT PINCODE</div>');
		return false;
		
	}
	else                                         /** if not empty return true and add glyphicon-ok symbol **/
	{
		var div = $("#"+id).closest("div");
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
		
	}
	
}

	
function validateRegexNum(id)  /** checking whether pincode entered is number or not and length 6  **/
 {
	 var regex = /^[0-9]{6}$/;     /** using regular expression to allow only numbers **/
	 if(!($("#"+id).val().match(regex)))
	 {                                                     /** if its not number of length 6 returns false with glyphicon-remove symbol **/
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 6 DIGIT PINCODE</div>');
		return false;
		 
	 }
	 else                                                   /** else returns true with glyphicon-ok symbol **/
	 {
		 var div = $("#"+id).closest("div");
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
 }
 $(document).ready(
function()
{
	$('#searchButton').click(function()
  {
	  if(!validateRegexNum("searchPin"))       /** function call to check its empty or not **/
	  {
		  return false;
	  }
	  if(!validatePincode("searchPin"))         /** function call to check whether input is number of length 6 or not **/
	  {
		  return false;
	  }
	  $("#searchForm").submit();                         /** finally submitting form **/
  }
  );
}
);
        /*************************************************** form validtaion of bed booking page ends ********************************************/

		
		/************************************************** form validtaion of login page starts *************************************************/
function validateLogin(id)                /** function to check whether username or password is empty or not **/
{
	if($("#"+id).val()=="")
	{
		var div = $("#"+id).closest("div");        /** if its empty returns false and add glyphicon-remove symbol **/
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">VALUE CANNOT BE EMPTY</div>');
		return false;
	}
	else
	{
		var div = $("#"+id).closest("div");
		div.removeClass("has-error");          /** else it returns true and add glyphicon-ok symbol **/
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	}
}
$(document).ready(
function()
{
	$('#loginAdminButton').click(function() /** fire functions when login button clicked  **/
  {
	  if(!validateLogin("adminUser"))       /** checks username empty or not **/
	  {
		  return false;
	  }
	   if(!validateLogin("adminPass"))    /** checks password empty or not **/
	  {
		  return false;
	  }
	  $("form#adminForm").submit();   /** submitting form **/
  });	

}
);


function validateLogin(id)
{
	if($("#"+id).val()=="")
	{
		var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">VALUE CANNOT BE EMPTY</div>');
		return false;
	}
	else
	{
		var div = $("#"+id).closest("div");
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	}
}
$(document).ready(
function()
{
	$('#loginButton').click(function()
  {
	  if(!validateLogin("loginUser"))
	  {
		  return false;
	  }
	   if(!validateLogin("loginPass"))
	  {
		  return false;
	  }
	  $("form#loginForm").submit();
  });	

}
);
                          /**************************************** form validation of login page ends ************************************************/

			/******************************************************* form validation of contactus form starts ******************************************/
function validateContactUser(id)
{
	 var regex = /^[A-Za-z]+$/;   /** variable regex which will accept more than one character **/
	 if(!($("#"+id).val().match(regex)))
	 {                                    /** if input is not as per regex returns false and add glyphicon-remove symbol **/
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">only alphabets allowed</div>');
		
		return false;
		 
	 }
	 else
	 {                                           /** else input is as per regex and function returns true and add glyphicon-ok symbol**/
		 var div = $("#"+id).closest("div");
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
	
}
function validateContactEmail(id) /** validating email address **/
{
	 var regex = /^[a-zA-Z0-9.!#$%&’*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]{3,}(?:\.[a-zA-Z0-9-]{3,})*$/; /** regular expression to check emailaddress is entered in correct form **/
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div"); /** if email address is not in correct form return false and add glyphicon-remove symbol **/
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">INVALID EMAIL ID</div>');
		
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div");  /** else return true and add glyphicon-ok symbol **/
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
	
}
function validateContactMessage(id) /** validating message entered by user **/
{
	 var regex = /^[A-Za-z]+(.*)$/; /** allowing message one or more character **/
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");  /** if doesn't matches regex return false and add glyphicon-remove symbol **/
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">INVALID MESSAGE</div>');
		
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div");     /** else return true and add glyphicon-ok symbol **/
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
	
}

function validateRegexPhoneNum(id) /** validating phone number **/
 {
	 var regex = /^[0-9]{10}$/; /** regular expression to allow only 10 digit numbers **/
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback"); /** fails to match regular expression returns false and add glyphicon-remove symbol **/
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 10 DIGIT PHONE NUMBER</div>');
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div");
		div.removeClass("has-error");      /** else return true and add glyphicon-ok symbol **/
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
 }

function validateContact(id) /** checks whether input is empty **/
{
	if($("#"+id).val()=="")
	{
		var div = $("#"+id).closest("div");    /* if empty return false and add glyphicon-remove symbol */
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">VALUE CANNOT BE EMPTY</div>');
		return false;
	}
	else
	{
		var div = $("#"+id).closest("div");
		div.removeClass("has-error");             /* else return true and add glyphicon-ok symbol */
		
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	}
}
$(document).ready(
function()
{
	$('#contactButton').click(function() /* fire contact us all validating functions on clicking "send" button */
  {
	  if(!validateContact("contactUser"))
	  {
		  return false;
	  }
	  if(!validateContactUser("contactUser"))
	  {
		  return false;
	  }
	  if(!validateContact("contactEmail"))
	  {
		  return false;
	  }
	  if(!validateContactEmail("contactEmail"))
	  {
		  return false;
	  }
      if(!validateContact("contactPhone"))
	  {
		  return false;
	  }
	  if(!validateRegexPhoneNum("contactPhone"))
	  {
		  return false;
	  }
      if(!validateContact("contactMessage"))
	  {
		  return false;
	  }
      if(!validateContactMessage("contactMessage"))
	  {
		  return false;
	  }
	   
	  $("form#contactForm").submit(); /* submitting the form */
  });	

}
);
          /***************************************** form validtaion contact us page ends ********************************************************/

		  /**************************************** form validtaion of registertation page starts ***********************************************/
function validateRegexNumAadhar(id) /** validating aadhar card number **/
 {
	 var regex = /^[0-9]{8}$/; /** regular expression to accept only numbers **/
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");  /* if it doesn't match the regex return false and add glyphicon-remove symbol */
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 8 DIGIT NUMBERS</div>');
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div");  /* else return true and add glyphicon-ok symbol */
		div.removeClass("has-error");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
	 
 }
 function validateRegexNum(id) /** validating pincode as user registers **/
 {
	 var regex = /^[0-9]{6}$/;  /** pincode to enter only numbers and length 6 digit **/
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback"); /** if it doesn't match regex return false and add glyphicon-remove symbol **/
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 6 DIGIT NUMBERS</div>');
		return false;
		 
	 }
	 else
	 {                                                 /** else return true and add glyphicon-ok symbol **/
		 var div = $("#"+id).closest("div");
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
 }
function validateRegisteration(id)         /** validating if input fields are empty **/
{
	if($("#"+id).val()=="")
	{
		var div = $("#"+id).closest("div");      /** if input field is empty return false and add glyphicon-remove symbol **/
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">VALUE CANNOT BE EMPTY</div>');
		return false;
	}
	else
	{
		var div = $("#"+id).closest("div");  /** else return true and return glyphicon-ok symbol **/
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	}
}
function validatePassword(id) /** confirm password validation **/
{
	if($("#"+id).val()!= $("#registerPassword").val())
	{
		var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback"); /* if password doesn't match return false and add glyphicon-remove symbol **/
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">PASSWORD DON\'T MATCH , TRY AGAIN !!! </div>');
		return false;
	}
	else
	{
		var div = $("#"+id).closest("div");   /** else it returns true and add glyphicon-ok symbol **/
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');

		return true;
	}
}
function validateUser(id) /** restriction on username **/
{
	 var regex = /^[A-Za-z]{3,}[0-9]*$/; // regular expression that allow 3 or more character followed by numbers 
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");  // if doesn't match restriction . it returns false and add glyphicon-remove symbol
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">only alphabets first then numbers allowed</div>');
		
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div"); // else it matches and returns true and add glyphicon-ok symbol 
		div.removeClass("has-error");
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
	
}
function validateRegexPassword(id) // restricting password for strong password
{
	var regex = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/; // regex to allow user enter strong password
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback"); /** if it doesn't match given condition it returns false and add glyphicon-remove symbol **/
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">2 UPPERCASE , 3 lowercase ,2 numerals , 1 special-char !@#$&* allowed only</div>');
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div");
		div.removeClass("has-error");         /** else it returns true and add glyphicon-ok symbol **/
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
}
function validateRegexAddress(id) // validating address
{
	var regex = /^[A-Za-z0-9](.*)$/; // regex to allow numbers or alphabets first then followed by any cjharacter 
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");  // if it doesn't match required regex then return false and add glyphicon-remove symbol
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">INVALID ADDRESS</div>');
		return false;
		 
	 }
	 else
	 {
		 var div = $("#"+id).closest("div");
		div.removeClass("has-error");  // else it returns true and add glyphicon-ok symbol 
		//div.addClass("has-success");
		div.addClass("has-success has-feedback");
		$('#glypcn'+id).remove();
		$('#name_error').remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
		return true;
	 }
}
$(document).ready(
function()
{
	$('#registrationButton').click(function() // register button fires all validating function 
  {
	  if(!validateRegisteration("registerUser"))
	  {
		  return false;
	  }
	  if(!validateUser("registerUser"))
	  {
		  return false;
	  }
	  if(!validateRegisteration("registerAddress"))
	  {
		  return false;
	  }
	  if(!validateRegexAddress("registerAddress"))
	  {
		  return false;
	  }
	  if(!validateRegisteration("registerPincode"))
	  {
		  return false;
	  }
	  if(!validateRegexNum("registerPincode"))
	  {
		  return false;
	  }
	 	   if(!validateRegisteration("registerAadhar"))
	  {
		  return false;
	  }
	  if(!validateRegexNumAadhar("registerAadhar"))
	  {
		  return false;
	  }
	  
	  if(!validateRegisteration("registerPassword"))
	  {
		   return false;
	  }
	  if(!validateRegisteration("registerConfirmPassword"))
	  {
		   return false;
	  }
	  if(!validateRegexPassword("registerPassword"))
	  {
		  return false;
	  }
	  if(!validatePassword("registerConfirmPassword"))
	  {
		  return false;
	  }  
	  $("#registrationForm").submit(); // submits form when all function return true
  });	

}
);

           /********************************************** form validtaion of registration page ends ***************************************************/
