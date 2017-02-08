
<?php
include 'connection.php';
$dbname = 'registration';
if(!(mysqli_select_db($con,$dbname)))
{
echo "connection to database failed";
}
if(isset($_POST['member_name']) and isset($_POST['member_address']) and isset($_POST['member_pin']) and isset($_POST['member_aadhar']) and isset($_POST['member_password']) and isset($_POST['member_button']))
{     $username = $_POST['member_name'];
      $address  = $_POST['member_address'];
	  $pin= $_POST['member_pin'];
	  $aadhar= $_POST['member_aadhar'];
	  $password=$_POST['member_password'];
	  $repeatpassword=$_POST['member_repeat_password'];
	  $encrypted_pass = md5($password);
	  if(!($password == $repeatpassword))
	  {
	  echo "password is not matching , try again";
	  }
$query = "INSERT into user_details (username,user_address,user_pin,user_aadhar,user_password) VALUES ('".$username."','".$address."','".$pin."','".$aadhar."','".$encrypted_pass."')";
$execute = mysqli_query($con,$query);
if(!$execute)
{
echo "data failed";
}
}

?>