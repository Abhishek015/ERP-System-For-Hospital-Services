                          <!----------------------    WEBPAGE FOR SENDING AUTOMATED MAIL TO ADMIN --------------------------------------->
<!DOCTYPE html>
<html>
<head>
<title> MAIL TO ADMIN </title>
                          <!------------------------ ADDING BOOTSTRAP FILES TO MAKE PAGE RESPONSIVE STARTS ------------------------------------>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

                         <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

                                 <!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                           <!----------------------- ADDING BOOTSTRAP FILES ENDS --------------------------------------------------------------->

						   
<style>         <!-------------------------------------------- ADDING CSS TO PAGE STARTS ---------------------------------------------------------->

              

			 body{       <!-- adding css to body , making font style to verdana and font size to 15px -->

			 font-family:verdana;

			 font-size: 15px;
               }
		 div#SearchHospitalform{  <!-- adding css to search hospital form background colour to white , border 1px which is solid and blue in colour and 200 px in width -->
			 background-color:white;
			 border:1px solid blue;
			 width:200 px;
			 box-shadow:1px 0px 15px blue;
		 }
		 input{           <!-- styling the input tag , the text entered must be bold and margin with border will be 18px -->
		 display:block;
		 margin:18px;
		 
		 }
		 div#SearchHospital_header{ <!-- styling the header of search hospital form , background color blue , content will be centre/bold/white , font-size 22px  -->
		 background-color:blue;
		 text-align:center;
		 font-size:22px;
		 font-weight:bold;
		 color:white;
		 padding:20px;
		
		 }
		 div#SearchHospital_content{ <!-- styling the main content of search hospital form , it is set to "flex" , so content will be adjusted as per form container-->
		 display:flex;
		 
		 }
		 input[type=text]{ <!-- styling the text inside input field its font size to be 15px , padding will be 18 px input box will be curved by 20px , have border and 90% width-->
		 font-size:15px;
		 padding:18px;
		 border-radius:20px;
		 border:1px solid blue;
		 width:90%;
		 }
		 input[type=submit]{<!-- styling the submit button , background color pink , have padding , button is curved 20px , green border , content in white,it will be bold/centre/width 50% -->
		 background-color:pink;
		 padding:5px 18px 5px 10px;
		 border-radius:20px;
		 border:1px solid green;
		 color:white;
		 font-weight:bold;
		 position:center;
		 width:50%;
		 }

</style>    <!--------------------------------------------- ADDING CSS TO PAGE ENDS ----------------------------------------------------->
</head>
<body>
      <!--------------------------------------------------------- CREATING BOOTSTRAP NAVBAR FOR WEBPAGE STARTS -------------------------------------->
<div class="navbar navbar-inverse navbar-fixed-top" > <!-- creating navbar with black colour fixed at top -->
<div class="container">                                <!-- creating a container -->
<a href="#" class="navbar-brand">HOSPITAL BED BOOKING</a> <!-- adding the title of page to the navbar -->
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"> <!-- adding a toggle button so that menubar gets fit in smartphones -->
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse"> <!-- adding contents to nmenubar -->
<ul class="nav navbar-nav navbar-right"> <!-- adding contents from right -->
<li class="active"><a href="#">WELCOME 
<?php session_start(); echo $_SESSION['username'];?>
</a></li>
<li><a href="logout.php">LOG-OUT</a></li>
</ul>
</div>
</div>
</div>
<br><br>
   <!------------------------------------------------------ CREATING BOOTSTRAP NAVBAR FOR WEBPAGE ENDS --------------------------------------------------->
<div class="modal-dialog modal-lg">    <!------------------------------CREATING AUTOMATED MAIL PANEL AS BOOTSTRAP MODAL STARTS---------------------------------->
<div class="modal-content">             <!-- adding contents to modal starts -->
<div class="modal-header">                             <!--modal header with css -->
<h3 class="modal-title" style="background-color:blue;
         text-align:center;
		 font-size:22px;
		 font-weight:bold;
		 color:white;
		 padding:20px;
		">SEND MAIL</h3>
</div>
<div class="modal-body">       <!-- modal body containg form -->                                              <!-- body -->
<form action="mail_test.php" method="post" role="form" id="searchForm" class="form-horizontal">
<div class="form-group">
	 <label class="col-md-3 control-label">USERNAME </label>
	 <div class="col-md-8">
<input type="text" name="user" value=<?php echo $_SESSION['username']; ?> class="form-control" id="mailUser" readonly /><!-- username textbox which is readonly-->
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">EMAIL </label>
	 <div class="col-md-8">
<input type="text" name="email" placeholder="ENTER YOUR EMAIL" class="form-control" id="mailEmail"/><!--email textbox to enter -->
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">PINCODE </label>
	 <div class="col-md-8">
<input type="text" name="pincode" placeholder="ENTER PINCODE TO REQUEST" class="form-control" id="mailPincode"/><!-- pincode textbox to enter -->
</div>
</div>


<button type="submit" name="send" class="btn btn-success" data-toggle="modal"  id="mailButton">SEND MAIL TO ADMIN</button<!-- adding button to send mail-->
</form>
</div>
</div>
</div>
    <!-------------------------------------------- MAIL PANEL MODAL ENDS -------------------------------------------------->
</body>
</html>
