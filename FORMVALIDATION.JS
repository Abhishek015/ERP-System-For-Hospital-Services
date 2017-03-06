
                 /********** form validation for hospital bed booking webpage starts ***************************************************************/
function validatePincode(id)
{
	if($("#"+id).val()=="")
	{
		var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 6 DIGIT PINCODE</div>');
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

	
function validateRegexNum(id)
 {
	 var regex = /^[0-9]{6}$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 6 DIGIT PINCODE</div>');
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
	$('#searchButton').click(function()
  {
	  if(!validateRegexNum("searchPin"))
	  {
		  return false;
	  }
	  if(!validatePincode("searchPin"))
	  {
		  return false;
	  }
	  $("#searchForm").submit();
  }
  );
}
);
        /*************************************************** form validtaion of bed booking page ends ********************************************/

		
		/************************************************** form validtaion of login page starts *************************************************/
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
	$('#loginAdminButton').click(function()
  {
	  if(!validateLogin("adminUser"))
	  {
		  return false;
	  }
	   if(!validateLogin("adminPass"))
	  {
		  return false;
	  }
	  $("form#adminForm").submit();
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
	 var regex = /^[A-Za-z]+$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">only alphabets allowed</div>');
		
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
function validateContactEmail(id)
{
	 var regex = /^[a-zA-Z0-9.!#$%&’*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]{3,}(?:\.[a-zA-Z0-9-]{3,})*$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">INVALID EMAIL ID</div>');
		
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
function validateContactMessage(id)
{
	 var regex = /^[A-Za-z]+(.*)$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">INVALID MESSAGE</div>');
		
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

function validateRegexPhoneNum(id)
 {
	 var regex = /^[0-9]{10}$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 10 DIGIT PHONE NUMBER</div>');
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

function validateContact(id)
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
	$('#contactButton').click(function()
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
	   
	  $("form#contactForm").submit();
  });	

}
);
          /***************************************** form validtaion contact us page ends ********************************************************/

		  /**************************************** form validtaion of registertation page starts ***********************************************/
function validateRegexNumAadhar(id)
 {
	 var regex = /^[0-9]{8}$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 8 DIGIT NUMBERS</div>');
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
 function validateRegexNum(id)
 {
	 var regex = /^[0-9]{6}$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">ONLY VALID 6 DIGIT NUMBERS</div>');
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
function validateRegisteration(id)
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
function validatePassword(id)
{
	if($("#"+id).val()!= $("#registerPassword").val())
	{
		var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">PASSWORD DON\'T MATCH , TRY AGAIN !!! </div>');
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
function validateUser(id)
{
	 var regex = /^[A-Za-z]{3,}[0-9]*$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">only alphabets first then numbers allowed</div>');
		
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
function validateRegexPassword(id)
{
	var regex = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">2 UPPERCASE , 3 lowercase ,2 numerals , 1 special-char !@#$&* allowed only</div>');
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
function validateRegexAddress(id)
{
	var regex = /^[A-Za-z0-9](.*)$/;
	 if(!($("#"+id).val().match(regex)))
	 {
		 var div = $("#"+id).closest("div");
		div.addClass("has-error has-feedback");
		div.removeClass("has-success");
		$('#glypcn'+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
		div.append('<div id="name_error"  style="color:red; font-size:12px">INVALID ADDRESS</div>');
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
	$('#registrationButton').click(function()
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
	  $("#registrationForm").submit();
  });	

}
);

           /********************************************** form validtaion of registration page ends ***************************************************/
