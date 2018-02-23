<?php
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION PAGE</title>
<link rel="stylesheet" href="css/style.css">
</head>


<body style=background-color:#95a5a6>
<div id="main-wrapper">
<center>
	<h2>REGISTRATION FORM</h2>
	<img src="imgs/stu.png" class="stu"/>
</center
 <form  class="myform" action="register.php" method="post">
	<label><b>USERNAME:</b></label></br><br>
	<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
    <label><b>PASSWORD:</b></label><br><br>
	<input name="password" type="password" class="inputvalues" placeholder=" Your password" required/><br>
	<label><b>CONFIRM PASSWORD:</b></label><br><br>
	<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your password" required/><br><br>
	<input name="submit_btn" type="submit" id="signup_btn" value="Sign up"/><br><br>
	<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
 </form>
 
 <?php
	if (isset($_POST['submit_btn']))
	{
		//echo  '<script type="text/javascript"> alert("signup button clicked") </script>';
		$username = $_POST("username");
		$password = $_POST("password");
		$cpassword = $_POST("cpassword");
		
		
		if($password==$cpassword)
		{
			$query= "select * from user WHERE username='$username'";
			$query_run = mysqli_query($con,$query);
			
			if(mysql_num_rows($query_run)>0)
			{
				echo'<script type="text/javascript"> alert("user already exists.... try another usernames") </script>';
			}
				{
	      
			 	$query= "insert into user values('$username','$password')";
				$query_run= mysql_query($con,$query);
				if(query_run)
				{
					echo'<script type="text/javascript"> alert("User registered....go to login page to login") </script>';
				}
			else
			{
			echo '<script type="text/javascript"> alert("Error!") </script>';
			}
				}		
				
			
	    }
			else
			{
				echo '<script type="text/javascript"> alert("Error!") </script>';
			}
	}
	
 ?>
</div>
</body>
</html>
