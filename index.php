<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Result</h2>
	</div>
	
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success'])
					?>
				</h3>
			</div>
		<?php endif ?>
		
		<?php if (isset($_SESSION['username'])): ?>
			<div class="large-3 columns" style="text-align:right;">
			<p><a href="index.php?logout='1'" style="color: red;" >Logout</a></p>
			</div>
			
			<div class="large-9 columns">

			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
			<p>Welcome to Student result system! You can view your provisional results for courses in your current study and your past results.<br>
			<br>
			<br>
			<div class="large-12 columns">
			<h2>Your Courses</h2> 
			</div>
			<br>
			<br>
			<br>
			<p>software development:&nbsp;&nbsp; 59%</P>

		<?php endif?>
	</div>
	
</body>
</html>