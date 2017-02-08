<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfd88w2k8g0IGtJ0RZ8yT2dzRNc9QDCPA"></script>
</head> 
<body>
  <div id="map" style="width: 1300px; height: 600px;"></div>

  <script type="text/javascript">
   var locations = [
      <?php
$pincode=$_POST['lookinto'];
$con = mysqli_connect('localhost','abhishek','alvordavigne')or die("cannot connect");
mysqli_select_db($con,'csv_db') or die("cannot find database");

////////////Search the rows in the markers table
$query = "SELECT hospital_name,hospital_address,pincode,lat,longi,state,district FROM `table 1` WHERE pincode='$pincode'";
$result = mysqli_query($con,$query);
if (!$result) {
  die("Invalid query: " . mysqli_error($con));
}
/////////////$hospital_name=array();
while($output=mysqli_fetch_assoc($result))
{
$hospital_name[]=$output['hospital_name'];
$latitude[]=$output['lat'];
$longitude[]=$output['longi'];
$hospital_address[]=$output['hospital_address'];
//$pincode[]=$output['pincode'];
// $hospital_category[]=$output['hospital_category'];
// $hospital_care_type[]=$output['hospitalcaretype'];
// $system_of_medicine[]=$output['sysofmedicine'];
$state[]=$output['state'];
$district[]=$output['district'];
// $facilities[]=$output['facilities'];
// $total_beds[]=$output['totalbeds'];
}
$final=array();
for($i=0;$i<=(count($hospital_name)-1);$i++)
{
	if(!empty($hospital_name[$i]) && !empty($latitude[$i]) && !empty($longitude[$i]) && !empty($hospital_address[$i]) && !empty($state[$i]) && !empty($district[$i]))
	{
		$final=array($hospital_name[$i],$latitude[$i],$longitude[$i],$hospital_address[$i],$state[$i],$district[$i]);
	echo json_encode($final).',';
	}
	
}

////////////////////////echo '['.json_encode($hospital_name).','.json_encode($latitude).','.json_encode($longitude).']';
 ?>

    ];

	var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(locations[1][1],locations[1][2]),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });


    
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent('<b>HOSPITAL NAME:</b> '+locations[i][0]+'<br><b>HOSPITAL ADDRESS:</b> '+locations[i][3]+'<br><b>STATE:</b> '+locations[i][4]+'<br><b>DISTRICT:</b> '+locations[i][5]+'<br><br><button type="button" class="btn btn-success" data-toggle="modal" data-target="#HospitalBook">BOOK BED</button>');
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  <!---------------------------------------------------------------------MODAL-------------------------------------------------------------------------->
 <div  class="modal fade" id="HospitalBook">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">                                                 <!--header -->
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">BED BOOKING</h3>
</div>
<div class="modal-body">  

</div>
</div>
</div>
</div>

  <!---------------------------------------------------------------------MODAL FINISH ------------------------------------------------------------------>

  </body>
</html>