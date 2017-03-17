/*  THIS PHP IS TO ADD HOSPITAL TO DATABASE AS PER USER REQUEST */

<?php
                 // including "connection.php" to provide connection to database //
                      require 'connection.php'; 
					  
                //                selecting the database "csv_db" to work       //
                      $dbname = 'csv_db';          
               
			   //   php function to select database                            //                                          
                    mysqli_select_db($con,$dbname);                                                                                                     


                 //   variables to accept values from page "Admin.php" starts     //

$srno                  =$_POST['srno'];                        // "$srno" gets the "id" of hospital being extracted                         
$hospital_name         = $_POST['hospital_name'];             //  "$hospital_name" gets the "name" of hospital being extracted
$hospital_category     = $_POST['hospital_category'];        //  "$hospital_category" gets the "category" of hospital being extracted 
$hospitalcaretype      = $_POST['hospitalcaretype'];        //  "$hospitalcaretype" gets the "type" of hospital being extracted
$sysofmedicine         = $_POST['sysofmedicine'];          //  "$sysofmedicine" gets the "medicine type" of hospital being extracted
$hospital_address      = $_POST['hospital_address'];      //  "$hospital_address" gets the "address" of hospital being extracted
$state                 = $_POST['state'];                //  "$state" gets the "state" of hospital being extracted
$district              = $_POST['district'];            //  "$district" gets the "district" of hospital being extracted
$sub_district          = $_POST['sub_district'];       //  "$sub_district" gets the "sub_district" of hospital being extracted
$pincode               = $_POST['pincode'];           //  "$pincode" gets the "pincode" of hospital being extracted
$telephone             = $_POST['telephone'];        //  "$telephone" gets the "telephone number" of hospital being extracted
$mobilenumber          = $_POST['mobilenumber'];    //  "$mobilenumber" gets the "mobile number" of hospital being extracted
$emergencynum          = $_POST['emergencynum'];           //  "$emergencynum" gets the "emergency number" of hospital being extracted
$ambulancephoneno      = $_POST['ambulancephoneno'];       //  "$ambulancephoneno" gets the "ambulance phone number" of hospital being extracted
$tollfree              = $_POST['tollfree'];                //  "$tollfree" gets the "toll free number" of hospital being extracted
$helpline              = $_POST['helpline'];              //  "$helpline" gets the "helpline number" of hospital being extracted
$hospitalfax           = $_POST['hospitalfax'];            //  "$hospitalfax" gets the "fax number" of hospital being extracted
$hospitalPrimaryEmail  = $_POST['hospitalPrimaryEmail']; //  "$hospitalPrimaryEmail" gets the "Primary email" of hospital being extracted
$hospitalSecondaryEmail= $_POST['hospitalSecondaryEmail']; //  "$hospitalSecondaryEmail" gets the "Secondary Email" of hospital being extracted
$website               = $_POST['website'];                //  "$website" gets the "website" of hospital being extracted
$specialities          = $_POST['specialities'];          //  "$specialities" gets the "specialities" of hospital being extracted
$latitude              = $_POST['lat'];                  //  "$latitude" gets the "latitude" of hospital being extracted
$longitude             = $_POST['long'];                //  "$longitude" gets the "longitude" of hospital being extracted
$facilities            = $_POST['facilities'];         //  "$facilities" gets the "facilities" of hospital being extracted
$totalbeds             = $_POST['totalbeds'];         //  "$totalbeds" gets the "total number of beds" of hospital being extracted

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