<?php
require 'config.php';

	if(isset($_POST['submit_btn']))
	{
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $cpassword = $_POST['cpassword'];

	  if($password==$cpassword)
	 {
		 $encrypted_password = md5($password);
		$query="select * from user WHERE username ='$username'";
		$query_run = mysqli_query($con, $query);

		if(mysqli_num_rows($query_run)>0 )
		{
			echo '<script type= "text/javascript"> alert("User already exists... try another username") </script>';
		} 
		else 
		{
			$query="insert into user values ('$username', '$password', '$encrypted_password')";
			$query_run = mysqli_query($con, $query);
		
			if($query_run)
			{
				echo '<script type= "text/javascript"> alert("User Registered... Go to login page to login") </script>';
			}
			else
			{
				//echo '<script type= "text/javascript"> alert("ERROR!") </script>';
				echo mysqli_error($con);
	 		}
		}
	 }
	 else
	 {
		echo '<script type= "text/javascript"> alert("Password and confirm password does not match") </script>';
	 }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title> 
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body background="t.jpg">
<div id="main-wrapper">
		<center><h2><b>Registration Form</b></h2>
			<img src="snap.jpg" class="snap">
		</center>
		<form class="myform" action="register.php" method="post">
		<label>Username</label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your Username" required><br>
		<label>Password</label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required><br>
		<label>Confirm Password</label>
		<input name="password" type="password" class="inputvalues" placeholder="Confirm your Password" required><br>
		<input name="submit_btn" type="submit" id="signup_btn" value="Sign up"> <br> 
		<a href="log.php"> <input type="button" id="back_btn" value="Back"></a>
	</form>
	
</div>
</body>
</html>