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
					 <link rel="stylesheet" href="AdminPaneltemp.css">

					 <!---------------------------- ADDING THE JAVASCRIPT FILE OF ADMIN PANEL -------------------------------------->
					 <script src="AdminPaneltemp.js"></script>
					 <script src="AdminPaneltempnew.js"></script>

					 </head>


					 <body>
					 <!--------------------------- ADDING THE BOOTSTRAP NAVBAR TO THE PAGE STARTS ----------------------------------------->
<div class="navbar navbar-inverse navbar-fixed-top" > <!-- adding navbar with black colour at top of webpage -->
<div class="container">
<a href="#" class="navbar-brand">ADMIN PANEL</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"><!-- for making menubar responsive -->
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse">  <!--ading content to menubar -->
<ul class="nav navbar-nav navbar-right">   
<li class="active"><a href="#">WELCOME 
<?php 
//session_start();
echo $_POST['adminname'];                     // session created as admin logged in 
?>
</a></li>
<li><a href="logout.php">LOG-OUT</a></li>      <!-- logout button -->
</ul>
</div>
</div>
</div><br><br><br><br>
                  <!------------------------- ADDING THE BOOTSTRAP NAVBAR TO THE PAGE ENDS ---------------------------------------------->
<div id="wrap">
<div class="container_left" >      <!------------------------ ADDING CONTAINER FOR FORMS ---------------------------------------->
        <div class="row">
			<div class="col-md-6 col-md-offset-3"> <!------------------- ADDING DIMENSION FOR THE PANEL -------------->
				<div class="panel panel-addHospitalPanel">
					<div class="panel-heading">    <!------------------------ ADDING HEADING TO PANEL STARTS --------------->
						<div class="row">
							<div class="col-xs-6">    <!--------------------------- DIMENSION OF AddHospital SECTION ----------------->
								<a href="#" class="active" id="addHospital-form-link">Add Hospital</a>
							</div>
							<div class="col-xs-6">     <!-------------------------- DIMENSION FOR Register SECTION ------------------------->
								<a href="#" id="register-form-link">UPDATE BED</a>
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
								<form id="register-form" action="?" method="get" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="pincode" id="pincodeSearch" tabindex="1" class="form-control" placeholder="Enter Pincode" value="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="button" name="register-submit" id="register-submit" tabindex="2" class="form-control btn btn-register" value="Search">
											</div>
										</div>
									</div>
									<script>
									$('#register-submit').click(function()
									{
										var pincode = $('input#pincodeSearch').val();
										$.ajax({
											url:"response.php",
											data:{pincode:pincode},
											success:function(data)
											{
												$('#response').html(data);
											}
										});
									});
									</script>
									<div id="response">
							        
									</div>
								</form>
								<!-- CONFIRMATION MODAL -->
								<div  class="modal fade" id="updateBed" role="dialog" >

								<div class="modal-dialog">

								<div class="modal-content">

								<div class="modal-header">                                                 <!--header -->

								<button type="button" class="close" data-dismiss="modal">&times;</button>

								<h3 class="modal-title">UPDATE STATUS</h3>


								</div>

								<div class="modal-body" id="updateBedbody">  
								

								</div>

								</div>

								</div>

								</div>
								
                                <!-- CONFIRMATION MODAL ENDS -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				  

<div class="container_right" >      <!------------------------ ADDING CONTAINER FOR FORMS ---------------------------------------->
        <div class="row">
			<div class="col-md-6 col-md-offset-3"> <!------------------- ADDING DIMENSION FOR THE PANEL -------------->
				<div class="panel panel-addHospitalPanel">
					<div class="panel-heading">    <!------------------------ ADDING HEADING TO PANEL STARTS --------------->
						<div class="row">
							<div class="col-xs-6">    <!--------------------------- DIMENSION OF AddHospital SECTION ----------------->
								<a href="#" class="active" id="EditDetails-form-link">Edit Details</a>
							</div>
							<div class="col-xs-6">     <!-------------------------- DIMENSION FOR Register SECTION ------------------------->
								<a href="#" id="BookingRecord-form-link">BOOKING RECORD</a>
							</div>
							
						</div>
						<hr>
					</div> <!------------------------------------------------- ADDING HEADING TO PANEL ENDS -------------------->
					<div class="panel-body">   <!------------------------------ ADDING PANEL BODY STARTS ----------------------------->
						<div class="row">
							<div class="col-lg-12">
							   
							   <!------------------------------------- ADDING FORM CONTENTS STARTS -------------------------------------------->
								
								<form id="EditDetails-form" action="?" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="pincode" id="pincodeSearchEditDetails" tabindex="1" class="form-control" placeholder="Enter Pincode" value="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="button" name="register-submit" id="pincodeSearchEditDetails-submit" tabindex="2" class="form-control btn btn-register" value="Search">
											</div>
										</div>
									</div>

									<script>
									$('#pincodeSearchEditDetails-submit').click(function()
									{
										var pincode = $('input#pincodeSearchEditDetails').val();
										$.ajax({
											url:"responseDetails.php",
											data:{pincode:pincode},
											success:function(data)
											{
												$('#responseDetails').html(data);
											}
										});
									});
									</script>
									<div id="responseDetails">
							        
									</div>

								</form>
								<!------------------------------------------- ADDING FORM CONTENTS ENDS -------------------------------------------->
								<div  id ="BookingRecord-form" class="table-responsive">
	                              <table class="table table-bodered">
                      <th>PaymentId</th><th>PaymentRequestId</th><th>HospitalName</th><th>amountPaid</th><th>customerName</th><th>customerEmail</th><th>customerPhone</th>
                              <?php $connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
							 $query_out = "SELECT * from booking_record";
							 $execute_out = mysqli_query($connect,$query_out);
							 $output='';
							 while($row = mysqli_fetch_array($execute_out))
{
	$output.='<tr><td >'.$row['payment_id'].'</td><td >'.$row['payment_request_id'].'</td><td>'.$row['hospital_name'].'</td><td>'.$row['nominal_fee'].'</td><td>'.$row['username'].'</td><td>'.$row['emailid'].'</td><td>'.$row['phonenumber'].'</td></tr>';
		
}
echo $output;
?>    
								  </table></div>
								<!-- CONFIRMATION MODAL -->
								<div  class="modal fade" id="updateBed" role="dialog" >

								<div class="modal-dialog">

								<div class="modal-content">

								<div class="modal-header">                                                 <!--header -->

								<button type="button" class="close" data-dismiss="modal">&times;</button>

								<h3 class="modal-title">UPDATE STATUS</h3>


								</div>

								<div class="modal-body" id="updateBedbody">  
								

								</div>

								</div>

								</div>

								</div>
								
                                <!-- CONFIRMATION MODAL ENDS -->
							</div>
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
