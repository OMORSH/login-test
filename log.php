<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body background="t.jpg">
<div id="main-wrapper">
<center><h2><b>Login Form</b></h2>
<img src="snap.jpg" class="snap">
</center> 	
	<form class="myform" action="log.php" method="post">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your Username" required ><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required ><br>
		<input name="login" type="submit" id="Login_btn" value="Login"><br> 
		<a href="register.php"> <input type="button" id="register_btn" value="Register">
	</form>	
	<?php
	if(isset($_POST['login']))
	{
	  $username = $_POST['username'];
	  $password = $_POST['password'];

	  $query="select * from user WHERE username ='$username' AND password= '$password'";
		$query_run = mysqli_query($con, $query);
		if (mysqli_num_rows($query_run)>0)
		{
			$_SESSION['username'] = $username;
			header('location:home.php');
		}
		else
		{
			echo '<script type= "text/javascript"> alert("Invalid credentials") </script>';
		}
	}
	?>
	</div>
</body>
</html>