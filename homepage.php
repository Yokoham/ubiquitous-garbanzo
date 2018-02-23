<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="css/style.css">
</head>


<body style=background-color:#95a5a6>
<div id="main-wrapper">
<center>
	<h2>HOME PAGE</h2>
	<h3>WELCOME 
		<?php echo $_SESSION['username'] ?>
	</h3>
	<img src="imgs/stu.png" class="stu"/>
</center>
 <form  class="myform" action="homepage.php" method="post">
	<input name='logout' type="submit" id="logout_btn" value="Log out"/><br>
	
 </form>
	<?php
		if (isset($_POST['logout']))
		{ 
			session_destroy();
			header('location:index.php');
		}
	?>
</div>
</body>
</html>
