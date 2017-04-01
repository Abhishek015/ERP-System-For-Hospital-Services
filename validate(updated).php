<html lang="en">
<head>
  <title>VALIDATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include 'connection.php'; 
	$dbname='registration';
	if(!(mysqli_select_db($con,$dbname)))
	{
		echo "failed";
	}
	
if( isset($_POST['username'])and isset($_POST['password']))
{   
    $result_username=" ";
	$result_password=" ";
    $username=$_POST['username'];
	$password=md5($_POST['password']);
	$query = "SELECT username ,user_password from user_details where username='$username'and user_password='$password'";
	$execute = mysqli_query($con,$query);
	if(mysqli_num_rows($execute)>0)
	{
		    $query_result= mysqli_fetch_assoc($execute);
			$result_username=$query_result['username'];
			$result_password=$query_result['user_password'];
	}
	
	if($result_username==$username and $result_password==$password)
		{
			if(isset($_POST['remember']))
			{
				setcookie('username',$username,time()+60*60*10);
				
			}
			    session_start();
				$_SESSION['username'] = $username;
				header('location: mainmenuIntermediate.php');
		}
		else
		{
			//header('location: mainmenu.php');
			//echo "error here line 45";
			echo '<script type="text/javascript"> if(confirm("invalid username /login password combination")) {window.location="mainmenu.php";} </script>';
			//header('location: mainmenu.php');
		}
	
}
else
{
	//header('location: mainmenu.php');
	echo "error here line 52";
}
?>
</body>
</html>