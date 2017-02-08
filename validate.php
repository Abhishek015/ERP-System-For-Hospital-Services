<?php
include 'connection.php'; 
	$dbname='registration';
	if(!(mysqli_select_db($con,$dbname)))
	{
		echo "failed";
	}
	
if( isset($_POST['username'])and isset($_POST['password']))
{ $username=$_POST['username'];
	$password=md5($_POST['password']);
	$query = "SELECT * from user_details where username='$username'and user_password='$password'";
	$execute = mysqli_query($con,$query);
	if(mysqli_num_rows($execute)==0)
	{
		//echo "failed here";
		//header('location: mainmenu.php');
	}
	else{
			$query_result= mysqli_fetch_assoc($execute);
			$result_username=$query_result['username'];
			$result_password=$query_result['user_password'];
		}
	

	if(empty($username) or empty($password))
	{
		//header('location: mainmenu.php');
		echo "error here line 27";
	}
	else
	{
		if($result_username==$username and $result_password==$password)
		{
			if(isset($_POST['remember']))
			{
				setcookie('username',$username,time()+60*60*10);
				
			}
			    session_start();
				$_SESSION['username'] = $username;
				header('location: hospital_bed_booking.php');
		}
		else
		{
			//header('location: mainmenu.php');
			//echo "error here line 45";
			echo '<script type="text/javascript"> if(confirm("invalid username /login password combination")) {window.location="mainmenu.php";} </script>';
			//header('location: mainmenu.php');
		}
	}
}
else
{
	//header('location: mainmenu.php');
	echo "error here line 52";
}
?>