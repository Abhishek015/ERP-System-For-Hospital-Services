<?php

$con= mysqli_connect('localhost','abhishek','alvordavigne');
mysqli_select_db($con,'contact_database');
$s= "INSERT INTO contact(name,email,phone,message)values ('$_POST[name]','$_POST[email]',$_POST[phone],'$_POST[message]')";
//mysqli_query($con,$s);
if(!mysqli_query($con,$s))
{
	mysqli_error($con);
	header("refresh:2; url=mainmenu.php");
}
else
{
	echo "data entered" ;
	header("refresh:2; url=mainmenu.php");
}


?>