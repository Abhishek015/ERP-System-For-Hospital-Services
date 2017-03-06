                                      <!------------- CREATING AN ADMIN PANEL ---------------------->
<!DOCTYPE html>
<html>
<head>
                     <!-------------------------------  ADDING BOOTSTRAP TO MAKE WEB PAGE RESPONSIVE STARTS ---------------------------------->

					 <meta name="viewport" content="width=device-width, initial-scale=1">

					 <link href="css/bootstrap.min.css" rel="stylesheet">

					 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

					 <!-- Latest compiled and minified CSS -->

					 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


					 <!-- Optional theme -->

					 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


					 <!-- Latest compiled and minified JavaScript -->


					 
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                     
					 <!-------------------------- ADDING  BOOTSTRAP TO MAKE WEB PAGE RESPONSIVE ENDS ---------------------------->
                     
					 <!---------------------------- ADDING THE CSS FILE OF ADMIN ------------------------------------------------->
					 <link rel="stylesheet" href="AdminPanel.css">

					 <!---------------------------- ADDING THE JAVASCRIPT FILE OF ADMIN PANEL -------------------------------------->
					 <script src="AdminPanel.js"></script>

					 </head>


					 <body>
					 <!--------------------------- ADDING THE BOOTSTRAP NAVBAR TO THE PAGE STARTS ----------------------------------------->
<div class="navbar navbar-inverse navbar-fixed-top" > 
<div class="container">
<a href="#" class="navbar-brand">ADMIN PANEL</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="#">WELCOME 
<?php 
//session_start();
echo $_POST['adminname'];
?>
</a></li>
<li><a href="logout.php">LOG-OUT</a></li>
</ul>
</div>
</div>
</div>
                  <!------------------------- ADDING THE BOOTSTRAP NAVBAR TO THE PAGE ENDS ---------------------------------------------->
				  

<div class="container">      <!------------------------ ADDING CONTAINER FOR FORMS ---------------------------------------->
        <div class="row">
			<div class="col-md-6 col-md-offset-3"> <!------------------- ADDING DIMENSION FOR THE PANEL -------------->
				<div class="panel panel-addHospitalPanel">
					<div class="panel-heading">    <!------------------------ ADDING HEADING TO PANEL STARTS --------------->
						<div class="row">
							<div class="col-xs-6">    <!--------------------------- DIMENSION OF AddHospital SECTION ----------------->
								<a href="#" class="active" id="addHospital-form-link">Add Hospital</a>
							</div>
							<div class="col-xs-6">     <!-------------------------- DIMENSION FOR Register SECTION ------------------------->
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div> <!------------------------------------------------- ADDING HEADING TO PANEL ENDS -------------------->
					<div class="panel-body">   <!------------------------------ ADDING PANEL BODY STARTS ----------------------------->
						<div class="row">
							<div class="col-lg-12">
							   
							   <!------------------------------------- ADDING FORM CONTENTS STARTS -------------------------------------------->
								<form id="addHospital-form" action="AddHospital.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="srno" id="srno" tabindex="0" class="form-control" placeholder="Enter Hospital serial number" >
									</div>
									<div class="form-group">
										<input type="text" name="hospital_name" id="hospital_name" tabindex="1" class="form-control" placeholder="Enter Hospital Name" >
									</div>
									<div class="form-group">
										<input type="text" name="hospital_category" id="hospital_category" tabindex="2" class="form-control" placeholder="Enter Hospital Category">
									</div>
									<div class="form-group">
										<input type="text" name="hospitalcaretype" id="hospitalcaretype" tabindex="3" class="form-control" placeholder="Enter Hospital Care Type">
									</div>
									<div class="form-group">
										<input type="text" name="sysofmedicine" id="sysofmedicine" tabindex="4" class="form-control" placeholder="System of Medicine">
									</div>
									<div class="form-group">
										<input type="text" name="hospital_address" id="hospital_address" tabindex="5" class="form-control" placeholder="Enter Hospital Address">
									</div>
									<div class="form-group">
										<input type="text" name="state" id="state" tabindex="6" class="form-control" placeholder="Enter Hospital State">
									</div>
									<div class="form-group">
										<input type="text" name="district" id="district" tabindex="7" class="form-control" placeholder="Enter Hospital District">
									</div>
									<div class="form-group">
										<input type="text" name="sub_district" id="sub_district" tabindex="8" class="form-control" placeholder="Enter Hospital SubDistrict">
									</div>
									<div class="form-group">
										<input type="text" name="pincode" id="pincode" tabindex="9" class="form-control" placeholder="Enter Hospital Pincode">
									</div>
									<div class="form-group">
										<input type="text" name="telephone" id="telephone" tabindex="10" class="form-control" placeholder="Enter Hospital Telephone">
									</div>
									<div class="form-group">
										<input type="text" name="mobilenumber" id="mobilenumber" tabindex="11" class="form-control" placeholder="Enter Hospital MobileNumber">
									</div>
									<div class="form-group">
										<input type="text" name="emergencynum" id="emergencynum" tabindex="12" class="form-control" placeholder="Enter Hospital EmergencyNumber">
									</div>
									<div class="form-group">
										<input type="text" name="ambulancephoneno" id="ambulancephoneno" tabindex="13" class="form-control" placeholder="Enter Hospital ambulancephoneno">
									</div>
									<div class="form-group">
										<input type="text" name="tollfree" id="tollfree" tabindex="14" class="form-control" placeholder="Enter Hospital tollfree">
									</div>
									<div class="form-group">
										<input type="text" name="helpline" id="helpline" tabindex="15" class="form-control" placeholder="Enter Hospital helpline">
									</div>
									<div class="form-group">
										<input type="text" name="hospitalfax" id="hospitalfax" tabindex="16" class="form-control" placeholder="Enter Hospital fax">
									</div>
									<div class="form-group">
										<input type="text" name="hospitalPrimaryEmail" id="hospitalPrimaryEmail" tabindex="17" class="form-control" placeholder="Enter Hospital PrimaryEmail">
									</div>
									<div class="form-group">
										<input type="text" name="hospitalSecondaryEmail" id="hospitalSecondaryEmail" tabindex="18" class="form-control" placeholder="Enter Hospital SecondaryEmail">
									</div>
									<div class="form-group">
										<input type="text" name="website" id="website" tabindex="19" class="form-control" placeholder="Enter Hospital Website">
									</div>
									<div class="form-group">
										<input type="text" name="specialities" id="specialities" tabindex="20" class="form-control" placeholder="Enter Hospital Specialist">
									</div>
									<div class="form-group">
										<input type="text" name="lat" id="lat" tabindex="21" class="form-control" placeholder="Enter Hospital Latitute">
									</div>
									<div class="form-group">
										<input type="text" name="long" id="long" tabindex="22" class="form-control" placeholder="Enter Hospital Longitude">
									</div>
									<div class="form-group">
										<input type="text" name="facilities" id="facilities" tabindex="23" class="form-control" placeholder="Enter Hospital Facilities">
									</div>
									<div class="form-group">
										<input type="text" name="totalbeds" id="totalbeds" tabindex="24" class="form-control" placeholder="Enter Hospital total beds">
									</div>
									
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="AddHospital-submit" id="AddHospital-submit" tabindex="25" class="form-control btn btn-addHospital" value="Add Hospital">
											</div>
										</div>
									</div>
									
								</form>
								<!------------------------------------------- ADDING FORM CONTENTS ENDS -------------------------------------------->
								<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	                                            <!---------------------------- ADDING BODY OF PANEL ENDS ------------------------------------------>
</body>
</html>
