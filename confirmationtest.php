<?php
if(isset($_GET['hospital_id']))
{
	session_start();
	$output='';
	$hospital_id = $_GET['hospital_id'];
	$connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
	$query = "SELECT hospital_name,nominal_fee from `table 1` where Srno='$hospital_id'";
	$result = mysqli_query($connect,$query);
	$output.='<form action="payment.php" method="post" role="form" id="searchForm" class="form-horizontal">';
    while($row=mysqli_fetch_array($result))
	{
		
	$output.='<div class="form-group">
	 <label class="col-md-3 control-label">Hospital Name:</label>
	 <div class="col-md-8">
<input type="text" name="hospitalname" value="'.$row['hospital_name'].'" class="form-control" id="hospitalname" readonly/>
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">Nominal Fee:</label>
	 <div class="col-md-8">
<input type="text" name="nominalfee" value="'.$row['nominal_fee'].'" class="form-control" id="nominalfee" readonly/>
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">Name:</label>
	 <div class="col-md-8">
<input type="text" name="username" value="'.$_SESSION['username'].'" class="form-control" id="username" readonly/>
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">Email Id:</label>
	 <div class="col-md-8">
     <input type="text" name="emailid"  class="form-control" id="emailid" />
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">Phone number:</label>
	 <div class="col-md-8">
<input type="text" name="phonenumber"  class="form-control" id="phonenumber" />
</div>
</div>

<center><input type="submit" id="makepayement" name="payment" class="btn btn-success" value="MAKE PAYEMENT" /></center>';
	}
	
$output.='</form>';

echo $output;
	
}
else
{
	echo "not working";
}
?>
