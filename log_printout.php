<?php 
include ("connection.php");
//include("auth.php");
$id=$_POST['username'];
		$pass=$_POST['password'];
		$select=mysqli_query($connection,"SELECT * FROM jobseekers WHERE username='$id' AND password='$pass' ") or die (mysqli_error($connection));
	while $fetch=mysqli_fetch_array($select);

if (isset($_POST['send'])) {
$sname=$_POST['enrollno']; 
$select=mysqli_query($connection," SELECT * FROM edu_info_of_jobseeker WHERE enrollno='$sname'")or die(mysqli_error($connection));
$fetch=mysqli_fetch_array($select);
if ($sname=$fetch['enrollno']==['password']){
	$_SESSION['id']=$enrollno;

		header("location:printout.php");
}else{
	echo "your are not login please check you enrollno code!";
	}
}
}

?>

<!DOCTYPE html>
<html lang="en" >
<head >
	<title>home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head >
<body>	<div>
	<header class="header" >
	<a href="index.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<nav class="topnav">
			<ul>
				<li>
					<a href="#">Search for job</a>
					<a href="view_allvacancies.php">View all vacancies</a>
					<a href="jobseekers.php">Register</a>
					<a href="logout.php">Log Out</a>
					<a href="adminlogin.php">Admin</a>
					
				</li>
			</ul>
		</nav>
		<section class="main_content" >


<div align="center" style="padding: 50px;">
<h1 style="  background: grey; color: white; text-align: center; width: 250px; ">Enrollment Number:</h1>
<form method="post" >
	<table >
		<tr>
			<td>
				<input type="text" name="enrollno" size="45" placeholder="Enter your enroll number">
			</td>
		</tr>
			<td>
				<input type="submit" name="login" value="submit">
			</td>
	</table>
</form>

</div>
</section>
</div>

	<footer class="footer">
		<ul>
			<li>
			<a href="#">Facebook page</a> |
				<a href="#">Twitter</a> |
				<a href="#">Youtube</a> |
				<a href="#">Contact Us</a> |
				<a href="mailto:free2naijakings@gmail.com">Email</a>
			</li>
		</ul>
		copyright surejobs @ 2018
	</footer>

</body>
</html>




