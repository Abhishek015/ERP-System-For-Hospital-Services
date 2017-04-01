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
		">PAYMENT DETAILS</h3>
</div>
<div class="modal-body">                                                     <!-- body -->
<form action="payment.php" method="post" role="form" id="searchForm" class="form-horizontal">
<div class="form-group">
	 <label class="col-md-3 control-label">Hospital Name</label>
	 <div class="col-md-8">
<input type="text" name="hospital_name" class="form-control" id="searchPin"/>
</div>
</div>
<!--<input type="submit" name="look_for" value=">>" />-->
<button type="button" name="look_for" class="btn btn-success" data-toggle="modal" data-target="#searchhospital" id="searchButton">SEARCH HOSPITAL</button>
</form>
</div>
</div>
</div>
<?php
if(isset($_GET['hospital_id']))
{
	echo "working";
}
else
{
	echo "not working";
}
?>

</body>
</html>
