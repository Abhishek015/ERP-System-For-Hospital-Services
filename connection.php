<?php
$server ='localhost';
$username='abhishek';
$password='alvordavigne';
$con = mysqli_connect($server,$username,$password);
if(!$con)
{
	echo "failed to connect";
}
?>