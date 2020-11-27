<?php
	include("connection.php");
if(isset($_POST ['send'])){
	$id=time().rand();
	$ajid=time().rand();
	$status="active";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$entrydate=$_POST['entrydate'];
	$role=$_POST['role'];
	
	
	$insert=mysqli_query($connection,"insert into create_user (id, ajid, status, entrydate, role, username, password) values('$id', '$ajid','$status','$entrydate','$role','$username','$password')")or die (mysqli_error($connection));
		
		if($insert){
		echo"<script>alert('user successfull created thank you')
		location='admin.php';</script>";

	}else
	echo"<script>alert('user not created  you are not athourise to perform this function pls contact the admin for full access')</script>";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Jobseekers_application_form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="header">
	<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
	
	<h2 class="title" align="center">Create user</h2>
	<form class="form" method="POST">
		<table align="center" >
			<tr>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="username" placeholder="Enter username here!" required="yes" >
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password" placeholder="Enter user password here!" required="yes" >
				</td>
			</tr>
			
			<tr>
				<td>
					Entrydate:
				</td>
				<td>
					<input type="text" name="entrydate" required="yes">
				</td>
			</tr>
			<tr>
				<td>
					Role:
				</td>
				<td>
					<select name="role">
						<option>Staff</option>
						<option>user</option>
					</select>
				</td>
			</tr>
				
			<tr>
				<td>
					  
				</td>
				<td>
					<input type="Submit" name="send" value="Submit" />
				</td>
			</tr>
		</table>
	</form>

	<footer class="footer">
		<ul>
			<li>
			<a href="#">Facebook page</a>
				<a href="#">Twitter</a>
				<a href="#">Youtube</a>
				<a href="#">Contact Us</a>
			</li>
		</ul>
		copyright surejobs @ 2018
	</footer>
</body>
</html>