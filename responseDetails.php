<?php
if(isset($_GET['pincode']))
{
	$output='';
	$connect = mysqli_connect("localhost","abhishek","alvordavigne","csv_db");
	if(!$connect)
	{
		echo "connection error";
	}
	$sql = "select * from `table 1` where pincode='".$_GET['pincode']."'";
	$result = mysqli_query($connect,$sql);
	$output.='<div class="table-responsive">
	<table class="table table-bodered">';
	$output.='<tr>
		<th> Serial number </th>
		<th> Hospital Name </th>
		<th>Hospital Category</th>
		<th>Hospital Care Type</th>
		<th>System Of Medicine</th>
		<th>Hospital Address</th>
		<th>State</th>
		<th>District</th>
		<th>Sub District</th>
		<th>Pincode</th>
		<th>Telephone Number</th>
		<th>mobile number</th>
		<th>Emergency number</th>
		<th>Ambulance number </th>
		<th>Toll Free</th>
		<th>HelpLine</th>
		<th>Hospital Fax</th>
		<th>Hospital Primary Email</th>
		<th>Hospital Secondary Email</th>
		<th>Website</th>
		<th>Specialities</th>
		<th>Lattitude</th>
		<th>Longitude</th>
		<th>Facilities</th>
		<th>Total number of beds</th>
		<th>Nominal Fee</th>
		<th>Action</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		
		$output.='<tr><td>'.$row['Srno'].'</td>
		<td>'.$row['hospital_name'].'</td>
		<td>'.$row['hospital_category'].'</td>
		<td >'.$row['hospitalcaretype'].'</td><td>'.$row['sysofmedicine'].'</td><td>'.$row['hospital_address'].'</td><td>'.$row['state'].'</td><td>'.$row['district'].'</td><td>'.$row['sub_district'].'</td><td>'.$row['pincode'].'</td><td>'.$row['telephone'].'</td><td>'.$row['mobilenumber'].'</td><td>'.$row['emergencynum'].'</td><td>'.$row['ambulancephoneno'].'</td><td>'.$row['tollfree'].'</td><td>'.$row['helpline'].'</td><td>'.$row['hospitalfax'].'</td><td>'.$row['hospitalPrimaryEmail'].'</td><td>'.$row['hospitalSecondaryEmail'].'</td><td>'.$row['website'].'</td><td>'.$row['specialities'].'</td><td>'.$row['lat'].'</td><td>'.$row['longi'].'</td><td>'.$row['facilities'].'</td><td>'.$row['totalbeds'].'</td><td>'.$row['nominal_fee'].'</td><td id="editsaveButton"><button type="button" id="editDetails'.$row['Srno'].'" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-pencil"></span> Edit 
        </button></td><script>$("#editDetails'.$row['Srno'].'").click(function(){
			$("td").attr("contenteditable","true");
			$("td#editsaveButton").attr("contenteditable","false");
			$(this).attr("id","saveDetails'.$row['Srno'].'");
			$(this).attr("class","btn btn-success btn-sm");
			$(this).html("Save");
			$("#saveDetails'.$row['Srno'].'").click(function(){
				var currentRow = $(this).closest("tr");
		 var Srno=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
         var hospital_name=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
		 var hospital_category=currentRow.find("td:eq(2)").text();
		 var hospitalcaretype=currentRow.find("td:eq(3)").text();
		 var sysofmedicine=currentRow.find("td:eq(4)").text();
		 var hospital_address=currentRow.find("td:eq(5)").text();
		 var state=currentRow.find("td:eq(6)").text();
		 var district=currentRow.find("td:eq(7)").text();
		 var sub_district=currentRow.find("td:eq(8)").text();
		 var pincode=currentRow.find("td:eq(9)").text();
		 var telephone=currentRow.find("td:eq(10)").text();
		 var mobilenumber=currentRow.find("td:eq(11)").text();
		 var emergencynum=currentRow.find("td:eq(12)").text();
		 var ambulancephoneno=currentRow.find("td:eq(13)").text();
		 var tollfree=currentRow.find("td:eq(14)").text();
		 var helpline=currentRow.find("td:eq(15)").text();
		 var hospitalfax=currentRow.find("td:eq(16)").text();
		 var hospitalPrimaryEmail=currentRow.find("td:eq(17)").text();
		 var hospitalSecondaryEmail=currentRow.find("td:eq(18)").text();
		 var website=currentRow.find("td:eq(19)").text();
		 var specialities=currentRow.find("td:eq(20)").text();
		 var lat=currentRow.find("td:eq(21)").text();
		 var longi=currentRow.find("td:eq(22)").text();
		 var facilities=currentRow.find("td:eq(23)").text();
		 var totalbeds=currentRow.find("td:eq(24)").text();
		 var nominal_fee=currentRow.find("td:eq(25)").text();
         //var totalbeds=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
		 //var hospital_address=currentRow.find("td:eq(3)").text();
		 //var hospital_category=currentRow.find("td:eq(4)").text();
          var data=Srno+"\n"+hospital_name+"\n"+totalbeds+"\n"+hospital_address+"\n"+hospital_category;
         //alert(data);
         $.ajax({
			 url:"updateDatabase.php",
			 data:{Srno:Srno,hospital_name:hospital_name,hospital_category:hospital_category,hospitalcaretype:hospitalcaretype,sysofmedicine:sysofmedicine,hospital_address:hospital_address,state:state,district:district,sub_district:sub_district,pincode:pincode,telephone:telephone,mobilenumber:mobilenumber,emergencynum:emergencynum,ambulancephoneno:ambulancephoneno,tollfree:tollfree,helpline:helpline,hospitalfax:hospitalfax,hospitalPrimaryEmail:hospitalPrimaryEmail,hospitalSecondaryEmail:hospitalSecondaryEmail,website:website,specialities:specialities,lat:lat,longi:longi,facilities:facilities,totalbeds:totalbeds,nominal_fee:nominal_fee},
			 success:function(data)
			 {
				 alert(data);
			 }
		  });
			});
		});</script></tr>';
		
	}
	$output.="</table></div>";

	echo $output;
}
else
{
	echo "wrong";
}
 
?>