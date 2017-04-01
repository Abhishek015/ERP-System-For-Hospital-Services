<?php
$connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
if(isset($_GET['serial_num'])&&isset($_GET['discharge_num']))
{
	$serial_num = $_GET['serial_num'];
	$discharge_num=$_GET['discharge_num'];
	$query="update `table 1` SET totalbeds=totalbeds+'$discharge_num' WHERE Srno='$serial_num'";
	if(!$query)
	{
		echo "query check kr";
	}
	$output = mysqli_query($connect,$query);
	if($output)
	{
		echo "<B>BEDS UPDATED SUCCESFULLY</B>";
	}
	else
	{
		echo "<B> SOMETHING WRONG </B>";
	}
}
else
{
	echo "wrong";
}
?>