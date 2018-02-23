<?php
session_start();
require'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" href="css/style.css">
</head>


<body style=background-color:#95a5a6>
<div id="main-wrapper">
<center>
	<h2>LOGIN FORM</h2>
	<img src="imgs/stu.png" class="stu"/>
</center>
 <form  class="myform" action="index.php" method="post">
	<label><b>USERNAME:</b></label></br><br>
	<center><input name="username" type="text" class="inputvalues" placeholder="Type your username" required/></center><br>
    <label><b>PASSWORD:</b></label><br><br>
	<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
	<input name="login" type="submit" id="login_btn" value="Login"/><br><br>
	<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
 </form>
 <?php
	if(isset($_POST['username']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$query="select * from user WHERE username='$username' AND password='$password'";
		
		$query_run = mysql_query($con,$query);
		if (mysql_num_rows($query_run)>0)
		{
			//valid
			$_SESSION['username']= $username;
			header('location:homepage.php');
		}
		else
		{
			//invalid
			echo'<script type="text/javascript"> alert("Invalid credentials") </script>';
		}
	}
	
		
 
 ?>
</div>
</body>
</html>
