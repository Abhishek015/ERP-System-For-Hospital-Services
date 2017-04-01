<?php
if(isset($_GET['Srno']))
{
$srno                  = $_GET['Srno'];                        // "$srno" gets the "id" of hospital being extracted                         
$hospital_name         = $_GET['hospital_name'];             //  "$hospital_name" gets the "name" of hospital being extracted
$hospital_category     = $_GET['hospital_category'];        //  "$hospital_category" gets the "category" of hospital being extracted 
$hospitalcaretype      = $_GET['hospitalcaretype'];        //  "$hospitalcaretype" gets the "type" of hospital being extracted
$sysofmedicine         = $_GET['sysofmedicine'];          //  "$sysofmedicine" gets the "medicine type" of hospital being extracted
$hospital_address      = $_GET['hospital_address'];      //  "$hospital_address" gets the "address" of hospital being extracted
$state                 = $_GET['state'];                //  "$state" gets the "state" of hospital being extracted
$district              = $_GET['district'];            //  "$district" gets the "district" of hospital being extracted
$sub_district          = $_GET['sub_district'];       //  "$sub_district" gets the "sub_district" of hospital being extracted
$pincode               = $_GET['pincode'];           //  "$pincode" gets the "pincode" of hospital being extracted
$telephone             = $_GET['telephone'];        //  "$telephone" gets the "telephone number" of hospital being extracted
$mobilenumber          = $_GET['mobilenumber'];    //  "$mobilenumber" gets the "mobile number" of hospital being extracted
$emergencynum          = $_GET['emergencynum'];           //  "$emergencynum" gets the "emergency number" of hospital being extracted
$ambulancephoneno      = $_GET['ambulancephoneno'];       //  "$ambulancephoneno" gets the "ambulance phone number" of hospital being extracted
$tollfree              = $_GET['tollfree'];                //  "$tollfree" gets the "toll free number" of hospital being extracted
$helpline              = $_GET['helpline'];              //  "$helpline" gets the "helpline number" of hospital being extracted
$hospitalfax           = $_GET['hospitalfax'];            //  "$hospitalfax" gets the "fax number" of hospital being extracted
$hospitalPrimaryEmail  = $_GET['hospitalPrimaryEmail']; //  "$hospitalPrimaryEmail" gets the "Primary email" of hospital being extracted
$hospitalSecondaryEmail= $_GET['hospitalSecondaryEmail']; //  "$hospitalSecondaryEmail" gets the "Secondary Email" of hospital being extracted
$website               = $_GET['website'];                //  "$website" gets the "website" of hospital being extracted
$specialities          = $_GET['specialities'];          //  "$specialities" gets the "specialities" of hospital being extracted
$latitude              = $_GET['lat'];                  //  "$latitude" gets the "latitude" of hospital being extracted
$longitude             = $_GET['longi'];                //  "$longitude" gets the "longitude" of hospital being extracted
$facilities            = $_GET['facilities'];         //  "$facilities" gets the "facilities" of hospital being extracted
$totalbeds             = $_GET['totalbeds'];         //  "$totalbeds" gets the "total number of beds" of hospital being extracted
$nominal_fee           = $_GET['nominal_fee'];
	$connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
	$query="UPDATE `table 1` SET Srno='$srno',hospital_name='$hospital_name',hospital_category='$hospital_category',hospitalcaretype='$hospitalcaretype',sysofmedicine='$sysofmedicine',hospital_address='$hospital_address',state='$state',district='$district',sub_district='$sub_district',pincode='$pincode',telephone='$telephone',mobilenumber='$mobilenumber',emergencynum='$emergencynum',ambulancephoneno='$ambulancephoneno',tollfree='$tollfree',helpline='$helpline',hospitalfax='$hospitalfax',hospitalPrimaryEmail='$hospitalPrimaryEmail',hospitalSecondaryEmail='$hospitalSecondaryEmail',website='$website',specialities='$specialities',lat='$latitude',longi='$longitude',facilities='$facilities',totalbeds='$totalbeds',nominal_fee='$nominal_fee' where Srno='$srno'";
	
	$execute=mysqli_query($connect,$query);
    if($execute)
	{
		echo "done";
	}		
}
?>