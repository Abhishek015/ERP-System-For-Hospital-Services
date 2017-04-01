<?php
if(isset($_GET['pincode']))
{
	$output='';
	$connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
	if(!$connect)
	{
		echo "connection error";
	}
	$sql = "select Srno,hospital_name,totalbeds from `table 1` where pincode='".$_GET['pincode']."'";
	$result = mysqli_query($connect,$sql);
	$output.='<div class="table-responsive">
	<table class="table table-bodered">';
	$output.='<tr>
		<th> Serial number </th>
		<th> Hospital Name </th>
		<th> Available Beds </th>
<th>Discharged</th>	<th>Action</th>	</tr>';
	while($row=mysqli_fetch_array($result))
	{
		
		$output.='<tr><td>'.$row['Srno'].'</td>
		<td>'.$row['hospital_name'].'</td>
		<td>'.$row['totalbeds'].'</td>
		<td id="discharge_test"><input type="text" name="discharge" id="dischargedNumber'.$row['Srno'].'" size=3/></td><td><button type="button" name="'.$row['Srno'].'" id="updateBedButton'.$row['Srno'].'" class="btn btn-info lg " data-toggle="modal" data-target="#updateBed" >ADD</button></td><script>
	$("#updateBedButton'.$row['Srno'].'").click(function()
		 {  
		 var serial_num = $(this).attr("name");
		 var discharge_num = $("#dischargedNumber'.$row['Srno'].'").val();
		     $.ajax({
				 url:"ajaxtest.php",
				 data:{serial_num:serial_num,discharge_num:discharge_num},
				 success:function(data)
				 {
					 $("#updateBedbody").html(data);
				 }
			 });
		 });
		</script></tr>';
		
	}
	$output.="</table></div>";
	$output.="";
	echo $output;
}
else
{
	echo "wrong";
}
 
?>