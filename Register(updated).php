
<?php
include 'connection.php';
$dbname = 'registration';
if(!(mysqli_select_db($con,$dbname)))
{
echo "connection to database failed";
}
if(isset($_POST['member_name']) and isset($_POST['member_address']) and isset($_POST['member_pin']) and isset($_POST['member_aadhar']) and isset($_POST['member_password']))
{     $username = $_POST['member_name'];
      $address  = $_POST['member_address'];
	  $pin= $_POST['member_pin'];
	  $aadhar= $_POST['member_aadhar'];
	  $password=$_POST['member_password'];
	  $repeatpassword=$_POST['member_repeat_password'];
	  $encrypted_pass = md5($password);
	  
$query = "INSERT into user_details (username,user_address,user_pin,user_aadhar,user_password) VALUES ('".$username."','".$address."','".$pin."','".$aadhar."','".$encrypted_pass."')";
$execute = mysqli_query($con,$query);
if(!$execute)
{
echo '<script type="text/javascript"> if(confirm("REGISTRATION FAILED , TRY AGAIN")) {window.location="mainmenu.php";} </script>';
}
else
{
echo '<script type="text/javascript"> if(confirm("REGISTRATION COMPLETED")) {window.location="mainmenu.php";} </script>';
}
}
else
{
echo "error".mysqli_error($con);
}

?>