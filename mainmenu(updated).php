<!DOCTYPE HTML>
<html>
<head>
<title>NAVIGATION</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- bbotstrap validator css -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/css/bootstrapvalidator.min.css" rel="stylesheet" />
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js" type="text/javascript"></script>

<style>
.contactus
{
background-image:url("Background-Nurse.jpg");
position:relative; 
width:80%; 
height:10%;
border:1px solid red;
background-repeat: no-repeat;
}
.contactusinner
{
position:relative; 
width:50%; 
height:500px;
padding:10px;
border:1px solid red;

}
.contactusinner2
{
position:relative; 
width:50%; 
height:300px;
padding:1px;
border:1px solid red;
float: right;

}
.fadein {
 position:relative; 
width:100%; 
height:332px; 
}
.fadein img {
 position:absolute; 
left:0;
 top:0; 
width:100%; 
height:332px;
padding:1px;
border:1px solid red;
 }
#menu {
	width: 200px;
	margin-top: 10px;
}
	
#menu li a {
	text-decoration: none;
	height: 32px;
  	height: 24px;
}
	
#menu li a:link, #menu li a:visited {
	color: #777;
	display: block;
	background:url("http://www.cssportal.com/vertical-menus/images/menu8.gif");
	padding: 8px 0 0 20px;
}
	
#menu li a:hover {
	color: #257EB7;
	background:url("http://www.cssportal.com/vertical-menus/images/menu8.gif");
	padding: 8px 0 0 25px;
}
#menu li a:active {
	color: #fff;
	background:url("http://www.cssportal.com/vertical-menus/images/menu8.gif");
	padding: 8px 0 0 25px;
}

#menu ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
</style>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script>
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});
</script>
<style>
input[type=text],input[type=email],textarea
{
display:flex;
border:1px solid silver;
border-radius:10px;
padding:20px;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
width:100%;
}

textarea
{
height:200px;
}
input:focus , textarea:focus
{
border:2px solid pink;
}
div#glob_content
{
background:pink;
border-radius:4px;
border:3px dashed pink;
max-width:100%;
margin:0 auto;
}
div#form_content
{
padding:50px;
}
div#title
{
background-color:pink;
color:white;
font-weight:bold;
text-align:center;
text-transform:uppercase;
padding:20px;
font-size:20px;
}
input[type=submit]
{
padding:5px 10px 5px 10px;
background-color:green;
border-radius:4px;
border:2px solid pink;
color:white;
font-weight:bold;
font-size:15px;
}
</style>
	
<style>
body
{
font-family:verdana;
font-size:16px;
}
#navi
{
width:100%;
height:700px;
<!--background:url(http://chennaionline.com/images/gallery/2013/September/20130928033919/Top-10-Hospitals-in-India-01.jpg);-->
<!--background-size:cover;-->
}
#navi img
{
width:100%;
position:absolute;
min-height:700px;
}
#nav_wrapper
{
height:80px;
width:100%;
background:#377D7A;
margin-left:auto;
margin-right:auto;
margin-top:40px;

#nav_wrapper ul li:hover
{
background:blue;

transition:all 0.45s;
overflow:hidden;
}
#nav_wrapper ul li
{
list-style:none;
display:inline;
font-weight:bold;
padding:10px;

}
#nav_wrapper a
{
color:white;
}
}
#content
{
width:100%;
height:100%;
postion:relative;

}
</style>
</head>
<body>

<div id="navi">

<div class="fadein">
  <img src="AIIMS Campus.jpg" />
  <img src="apollo-hospital-image.jpg" />
  <img src="fortis-hospital.jpg" />
  
</div>
<div id="content">
<div class="navbar navbar-inverse navbar-fixed-top" > 
<div class="container">
<a href="#" class="navbar-brand">MEDICITY</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="#">HOME</a></li>
<li ><button type="button" class="btn btn-success" data-toggle="modal" data-target="#contactWindow">CONTACT US</button></li>
<li><button type="button" class="btn btn-success" data-toggle="modal" data-target="#popupWindow">LOGIN/REGISTER</button></li>
<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminWindow">ADMIN</button></li>
<li><p id="welcome_user"></p></li>
</ul>
</div>
</div>
</div>
</div>
</div>

<!----------------------------------------------------------------- ADMIN PORTION STARTS --------------------------------------------------------------------->
<div class="modal fade" id="adminWindow">
  <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">LOGIN </h3>
			
         </div>

         <div class="modal-body">
		    <form action="Admintemp.php" method="post" class="form-horizontal" id="adminForm" >
			<div class="form-group">
               <label class="col-md-3 control-label"> username</label>
                         <div class="col-md-8">
                  <input type="text" name="adminname" placeholder="USERNAME" class="form-control" id="adminUser"/>
                      </div>
                      </div>
					  <div class="form-group">
               <label class="col-md-3 control-label"> password</label>
                         <div class="col-md-8">
                  <input type="password" name="adminpassword" placeholder="PASSWORD" class="form-control" id="adminPass"/>
                      </div>
                      </div>
					 <center> <button type="submit" id="loginAdminButton" class="btn btn-success">LOGIN</button></center>
                 </form>
         </div>
      </div>
  </div>
</div>
<script>

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
</script>
<!---------------------------------------------------------------- ADMIN PORTION ENDS ------------------------------------------------------------------------>
 
 <!---------------------------------------------------------------- GOOGLE MAP INTEGRATION START --------------------------------------------------------->
 <div class="contactus">
  <ul>
  <li>
 <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAfd88w2k8g0IGtJ0RZ8yT2dzRNc9QDCPA'></script>
<div style='overflow:hidden;height:300px;width:100%;'>
<div id='gmap_canvas' style='height:300px;width:500px;'></div>
<div><small><a href="http://www.embedgooglemaps.com">Generate your Google map here, quick and easy!</a></small>
</div><div><small><a href="https://binaireoptieservaringen.nl/">Lees hier ervaringen van diverse binaire opties aanbieders</a></small></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
<script type='text/javascript'>
function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(28.6139391,77.20902120000005),mapTypeId: google.maps.MapTypeId.ROADMAP};
map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.6139391,77.20902120000005)});
infowindow = new google.maps.InfoWindow({content:'<strong>Our Location</strong><br>New Delhi , India<br>'});
google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>  
<div id="map" style="width:40%;height:500px"></div>
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(28.6139391,77.20902120000005 ),
    zoom: 5
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
</li>  
</ul>
</div>

<!---------------------------------------------------------------GOOGLE MAP INTEGRATION FINISH--------------------------------------------------------->

<!-------------------------------------------------------------- MODAL LOGIN STARTS --------------------------------------------------------------------------------->
 <div  class="modal fade" id="popupWindow">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">                                                 <!--header -->
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">LOGIN </h3>
</div>
<div class="modal-body">                                                     <!-- body -->
<form id="loginForm" action="validate.php" method="post" role="form" class="form-horizontal">
<div class="form-group">
<label class="col-md-3 control-label"> username</label>
<div class="col-md-8">
<input type="text" name="username" placeholder="USERNAME" class="form-control" id="loginUser"/>

</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label"> password</label>
<div class="col-md-8">
<input type="password" name="password" placeholder="password" class="form-control" id="loginPass" />
</div>
</div>
<table><tr><td>
<input type="checkbox" name="remember" value="1" ></td><td>&nbsp;Remember Me</td></tr></table>  <br>
<button type="submit" id="loginButton" class="btn btn-success">LOGIN</button><b> new here ? </b> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popupRegister">REGISTER</button>
</form>
</div>
</div>
</div>
</div>
<script>

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
</script>
<!---------------------------------------------------------- MODAL LOGIN FINISHES ---------------------------------------------------------------------------->
<!---------------------------------------------------------- MODAL CONTACT STARTS ---------------------------------------------------------------------------->

<div  class="modal fade" id="contactWindow">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">                                                 <!--header -->
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">CONTACT US </h3>
</div>
<div class="modal-body">                                                     <!-- body -->
<form method="post" action="contactUsDB.php" id="contactForm">
<div class="form-group">
<label class="col-md-3 control-label">NAME </label>
<div class="col-md-8">
<input type="text" name="name" placeholder="enter name" class="form-control" id="contactUser"/><br>
</div>
</div>
<BR>
<div class="form-group">
<label class="col-md-3 control-label">EMAIL </label>
<div class="col-md-8">
<input type="email" name="email" placeholder="enter email" class="form-control" id="contactEmail" /><br>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">PHONE NUMBER </label>
<div class="col-md-8">
<input type="text" name="phone" placeholder="enter phone" class="form-control" id="contactPhone"/><br>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">MESSAGE </label>
<div class="col-md-8">
<textarea name="message" placeholder="message" class="form-control" id="contactMessage" ></textarea><br>
</div>
</div>
<center><BUTTON type="submit" id="contactButton" class="btn btn-success">CONTACT US </button></center>
</form>
</div>
</div>
</div>
</div>

<script>
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
</script>

<!---------------------------------------------------------- MODAL CONTACT FINISHES -------------------------------------------------------------------------->

<!---------------------------------------------------------- MODAL REGISTRATION STARTS ----------------------------------------------------------------------->
<div class="modal fade" id="popupRegister">
<div class="modal-dialog">
<div class="modal-content">
<div class ="modal-header">
<h3>REGISTRATION 
<button type="button" class="close" data-dismiss="modal">&times;</button> </h3>
</div>
<div class="modal-body">
     <form id="registrationForm" name="registrationForm" action="Register.php" method="post" role="form" class="form-horizontal">
	 <div class="form-group">
	 <label class="col-md-3 control-label">NAME </label>
	 <div class="col-md-8">
	 <input type="text" name="member_name" placeholder="Enter Name" class="form-control" id="registerUser" /><br>
	 </div>
	 </div>
	 <div class="form-group">
	 <label class="col-md-3 control-label">ADDRESS </label>
	 <div class="col-md-8">
	 <input type="text" name="member_address" placeholder="Enter Address" class="form-control" id="registerAddress"/><br>
	 </div>
	 </div>
	 <div class="form-group">
	 <label class="col-md-3 control-label">PINCODE </label>
	 <div class="col-md-8">
	 <input type="text" name="member_pin" placeholder="Enter pin" class="form-control" id="registerPincode" /><br>
	 </div>
	 </div>
     <div class="form-group">
	 <label class="col-md-3 control-label">AADHAR NUMBER </label>
	 <div class="col-md-8">
	 <input type="text" name="member_aadhar"  placeholder="Enter Adhar card number"class="form-control" id="registerAadhar" /><br>
	 </div>
	 </div>
      <div class="form-group">
	 <label class="col-md-3 control-label">SELECT PASSWORD</label>
	 <div class="col-md-8">
     <input type="password" name="member_password" placeholder="Enter password" class="form-control" id="registerPassword"/><br>
	 </div>
	 </div>
     <div class="form-group">
	 <label class="col-md-3 control-label">CONFIRM PASSWORD</label>
	 <div class="col-md-8">
	 <input type="password" name="member_repeat_password" placeholder="Enter password again" class="form-control" id="registerConfirmPassword" /><br>
	 </div>
	 </div>
	 <center><BUTTON type="submit" id="registrationButton" class="btn btn-success">REGISTER </button></center>
	 </form>
	 </div>
 </div>
 </div>
 </div>
 <script>

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
</script>
<!---------------------------------------------------------MODAL REGISTRATION FINISHES ----------------------------------------------------------------------->
</body>
</html>
