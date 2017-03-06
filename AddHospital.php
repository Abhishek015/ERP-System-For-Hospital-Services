/*  THIS PHP IS TO ADD HOSPITAL TO DATABASE AS PER USER REQUEST */

<?php
                 // including "connection.php" to provide connection to database //
                      require 'connection.php'; 
					  
                //                selecting the database "csv_db" to work       //
                      $dbname = 'csv_db';          
               
			   //   php function to select database                            //                                          
                    mysqli_select_db($con,$dbname);                                                                                                     


                 //   variables to accept values from page "Admin.php" starts     //

$srno                  =$_POST['srno'];                                     
$hospital_name         = $_POST['hospital_name'];
$hospital_category     = $_POST['hospital_category'];
$hospitalcaretype      = $_POST['hospitalcaretype'];
$sysofmedicine         = $_POST['sysofmedicine'];
$hospital_address      = $_POST['hospital_address'];
$state                 = $_POST['state'];
$district              = $_POST['district'];
$sub_district          = $_POST['sub_district'];
$pincode               = $_POST['pincode'];
$telephone             = $_POST['telephone'];
$mobilenumber          = $_POST['mobilenumber'];
$emergencynum          = $_POST['emergencynum'];
$ambulancephoneno      = $_POST['ambulancephoneno'];
$tollfree              = $_POST['tollfree'];
$helpline              = $_POST['helpline'];
$hospitalfax           = $_POST['hospitalfax'];
$hospitalPrimaryEmail  = $_POST['hospitalPrimaryEmail'];
$hospitalSecondaryEmail= $_POST['hospitalSecondaryEmail'];
$website               = $_POST['website'];
$specialities          = $_POST['specialities'];
$latitude              = $_POST['lat'];
$longitude             = $_POST['long'];
$facilities            = $_POST['facilities'];
$totalbeds             = $_POST['totalbeds'];

                       //   variables to accept values from page "Admin.php" ends     //
					   
                      // +++++++++++++++ $sql variable to store sql query to add Hospital values to database starts +++++++++++++++++  //

					  $sql = "INSERT INTO `table 1` (Srno,hospital_name,hospital_category,hospitalcaretype,sysofmedicine,hospital_address,state,district,sub_district,pincode,telephone,mobilenumber,emergencynum,ambulancephoneno,tollfree,helpline,hospitalfax,hospitalPrimaryEmail,hospitalSecondaryEmail,website,specialities,lat,longi,facilities,totalbeds) VALUES ('".$srno."','".$hospital_name."','".$hospital_category."','".$hospitalcaretype."','".$sysofmedicine."','".$hospital_address."','".$state."','".$district."','".$sub_district."','".$pincode."','".$telephone."','".$mobilenumber."','".$emergencynum."','".$ambulancephoneno."','".$tollfree."','".$helpline."','".$hospitalfax."','".$hospitalPrimaryEmail."','".$hospitalSecondaryEmail."','".$website."','".$specialities."','".$latitude."','".$longitude."','".$facilities."','".$totalbeds."')";
                     
					 // ---------------- $sql variable to store sql query to add Hospital values to database ends -------------------  //

                     //++++++++++++++++++ Executing the written query starts+++++++++++++++++++++++++++++++++++++++ //					  

					 $execute = mysqli_query($con,$sql);
                     
					 //------------------Executing the written query ends----------------------------------------- //
					 
                     //+++++++++++++++++++++++ verifying the execute query starts +++++++++++++++++++++++++++++++//
					 if(!$execute)
					 {
	
	                     echo "data not entered";
	                 }

					 else

					 {
	
	                    echo "data entered";
                     }
                     //--------------------  verifying the execute query ends ---------------------------------------//
?>