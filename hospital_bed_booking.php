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

<style>
#content
{
width:100%;
height:10%;
postion:relative;
}
body{
font-family:verdana;
font-size: 15px;
         }
		 div#SearchHospitalform{
			 background-color:white;
			 border:1px solid blue;
			 width:200 px;
			 box-shadow:1px 0px 15px blue;
		 }
		 input{
		 display:block;
		 margin:18px;
		 
		 }
		 div#SearchHospital_header{
		 background-color:blue;
		 text-align:center;
		 font-size:22px;
		 font-weight:bold;
		 color:white;
		 padding:20px;
		
		 }
		 div#SearchHospital_content{
		 display:flex;
		 
		 }
		 input[type=text]{
		 font-size:15px;
		 padding:18px;
		 border-radius:20px;
		 border:1px solid blue;
		 width:90%;
		 }
		 input[type=submit]{
		 background-color:pink;
		 padding:5px 18px 5px 10px;
		 border-radius:20px;
		 border:1px solid green;
		 color:white;
		 font-weight:bold;
		 position:center;
		 width:50%;
		 }

</style> 
</head>
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
<br><br>

<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">                                                 <!--header -->
<h3 class="modal-title" style="background-color:blue;
         text-align:center;
		 font-size:22px;
		 font-weight:bold;
		 color:white;
		 padding:20px;
		">SEARCH HOSPITAL</h3>
</div>
<div class="modal-body">                                                     <!-- body -->
<form action="Hospital_Location.php" method="post" role="form">
<input type="text" name="lookinto" placeholder="ENTER YOUR PINCODE...." class="form-control" />
<!--<input type="submit" name="look_for" value=">>" />-->
<button type="submit" name="look_for" class="btn btn-success" data-toggle="modal" data-target="#searchhospital">SEARCH HOSPITAL</button>
</form>
</div>
</div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<div class="modal fade" id="searchbydetails">
<div class="modal-content">
<div class="modal-header">
SEARCH BY DETAILS
</div>
<div class="modal-body">
<form action="SearhResult.php" action="post" role="form">
<input 
</form>
</div>
</div>
</div>

<!--
<div id="SearchHospitalform">
<div id="SearchHospital_header">
SEARCH HOSPITAL
</div>
<br><br>
<div id="SearchHospital_content">
<form action="SearchResult.php" method="POST">
<input type="text" name="lookinto" placeholder="SEARCH FOR HOSPITAL HERE" />
<input type="text" name="lookinto" placeholder="SEARCH FOR HOSPITAL HERE" />
<input type="text" name="lookinto" placeholder="SEARCH FOR HOSPITAL HERE" />
<input type="submit" name="look_for" value=">>" />
</form>
</div>
</div>
-->
</body>
</html>


