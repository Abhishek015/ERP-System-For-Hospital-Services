<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" > 
<div class="container">
<a href="#" class="navbar-brand">HOSPITAL BED BOOKING</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="#">WELCOME <?php 
session_start();
echo $_SESSION['username'];?></a></li>
<li><a href="logout.php">LOG-OUT</a></li>
</ul>
</div>
</div>
</div>
<br><br><br>

<?php

date_default_timezone_set("Asia/Kolkata");
$hospital_name = $_SESSION['product_name'];
$price = $_SESSION['price'];
$name = $_SESSION['name'];
$phonenumber = $_SESSION['phonenumber'];
$email = $_SESSION['email'];
$payment_id =$_GET['payment_id'];
$payment_request_id = $_GET['payment_request_id'];
$date = date("Y/m/d");
$time = date("h:i:sa");
$connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
$query = "INSERT into booking_record  (payment_id,payment_request_id,username,emailid,phonenumber,date,time,hospital_name,nominal_fee) values ('".$payment_id."','".$payment_request_id."','".$name."','".$email."','".$phonenumber."','".$date."','".$time."','".$hospital_name."','".$price."')";
$query_out = "SELECT * from booking_record where payment_id='$payment_id'";
$execute = mysqli_query($connect,$query);
$execute_out = mysqli_query($connect,$query_out);
if($execute)
{
	echo '<div class="alert alert-success">
  <strong>Success!</strong> Your Payement is successfull , your payement details are below :
</div>';
}
$output='';
$output.= '<div class="table-responsive">
	<table class="table table-bodered">';
$output.='<th>PaymentId</th><th>PaymentRequestId</th><th>HospitalName</th><th>amountPaid</th><th>customerName</th><th>customerEmail</th><th>customerPhone</th>';
while($row = mysqli_fetch_array($execute_out))
{
	$output.='<tr><td >'.$row['payment_id'].'</td><td >'.$row['payment_request_id'].'</td><td>'.$row['hospital_name'].'</td><td>'.$row['nominal_fee'].'</td><td>'.$row['username'].'</td><td>'.$row['emailid'].'</td><td>'.$row['phonenumber'].'</td></tr>';
		
}
$output.='</table></div>';
echo $output;
?>
<center><a href="mainmenuIntermediate.php" class="btn btn-success">HOME </a>
</body>
</html>