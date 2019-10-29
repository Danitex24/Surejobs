<?php
	include("connection.php");
	//session_start();
	if(isset($_POST['login'])){
		$id=$_POST['username'];
		$pass=$_POST['password'];
		$select=mysqli_query($connection,"SELECT * FROM jobseekers WHERE username='$id' AND password='$pass' ") or die (mysqli_error($connection));
		//fetch the person's information from database
		$fetch=mysqli_fetch_array($select,MYSQLI_ASSOC);
				// if fetch record >0, session start per login
		 if ($fetch['username']==$id and $fetch['password']==$pass ) {
		 	$_SESSION['id']=$id;

		 //if fetch record match do something
			echo"<script>alert('you are now login thank you')
				location='index.php';
				</script>";
			}else{
		//if fetch record dont match with infor pass the person to login page
				echo"<script>alert('password & username not recognise pls check your entry')
				location='login.php';
				</script>";	}

	}
	?>

		
<!DOCTYPE html>
<html lang="en" >
<head >
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head >
<body>	
	<header class="header" >
	<a href="home.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal </h2>
</header>

					<div style=" background: black; color: darkgreen; font-family: Tahoma; text-align:center; padding: 10;">
							<a href="login.php">Click here to Login</a>  OR
							<a href="jobseekers.php">Register</a>
							<h2 >Pleas scroll down and login</h2>
					</div>


    						 <br><br><br>

					<form class="form" method="post">
						<table align="center">
								<td>
									Enter username:
								</td>
								<td>
									<input type="text" name="username" size="30" required="yes">
								</td>
							</tr>
								<tr>
								<td>
									Enter password:
								</td>
								<td>
									<input type="password" name="password" size="30" required="yes">
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
								<td >
									<input type="submit" name="login" value="Login">
								</td>
							</tr>
						</table>
					</form>
		
		</body>
		</html>