<?php
	include("connection.php");
	
	if(isset($_POST ['send'])){
		$school=$_POST['school'];
			$qualification=$_POST['qualification'];
				$passyear=$_POST['passyear'];
					$enrollno=time().rand();
						$entrydate=$_POST['entrydate'];
						$hubbie=$_POST['hubbie'];
					$workingexperience=$_POST['workingexperience'];
				$sname=$_POST['sname'];
			$fname=$_POST['fname'];
		$mname=$_POST['mname'];
	$gender=$_POST['gender'];
		//create an insert command to insert record into education info of jobseekers//
	
		$insert=mysqli_query($connection,"INSERT INTO edu_info_of_jobseeker(school, qualification, passyear, enrollno, entrydate, hubbie, workingexperience, sname, fname, mname, gender)VALUES('$school','$qualification','$passyear','$enrollno','$entrydate','$hubbie','$workingexperience','$sname','$fname','$mname', '$gender')")or die(mysqli_error($connection));
		
		if($insert){
			echo "<script>alert('information inserted')</script>";
		}else{
			echo  "<script>alert('Information  not inserted please cheach your record!')</script>";
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
	<a href="home.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<nav class="topnav">
			<ul>
				<li>
					<a href="#">Search for job</a>
					<a href="view_allvacancies.php">View all vacancies</a>
					<a href="jobseekers.php">Register</a>
					<a href="login.php">Login here</a>
					<a href="adminlogin.php">Admin</a>
					
				</li>
			</ul>
		</nav>
	<section class="main_content" >
		<h4 style="background-color: grey; color: red; width: 345px; text-align: center; height: 30px; padding: 8px;">Carfully fill out the form with correct informations</h4>
	<form class="form" method="post" >
		<table align="center">
				<tr>
					<td>
						School:
					</td>
				
					<td>
						<input type="text" name="school">
					</td>
				</tr>
				<tr>
					<td>
						Qualification:
					</td>
				
					<td>
						<input type="text" name="qualification" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Pass Yeear:
					</td>
				
					<td>
						<input type="text" name="passyear" >
						
					</td>
				</tr>
				
				<tr>
					<td>
						Entry Date:
					</td>
				
					<td>
						<input type="text" name="entrydate">
					</td>
				</tr>
				<tr>
					<td>
						Hubbie:
					</td>
				
					<td>
						<input type="text" name="hubbie">
					</td>
				</tr>
				<tr>
					<td>
						Working Experience:
					</td>
				
					<td>
						<input type="text" name="workingexperience">
					</td>
				</tr>
				<tr>
					<td>
						Sur Name:
					</td>
				
					<td>
						<input type="text" name="sname">
					</td>
				</tr>
				<tr>
					<td>
						First Name:
					</td>
				
					<td>
						<input type="text" name="fname">
					</td>
				</tr>
				<tr>
					<td>
						Middle Name:
					</td>
				
					<td>
						<input type="text" name="mname">
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
				
					<td>
						<input type="radio" name="gender" value="m">Male
						<input type="radio" name="gender" value="f">Female
					</td>
				</tr>
					<td>
						            
					</td>
				<td>
					<input type="submit" onclick="alert('Your information has been submited succesfully thank you')"; name="send" value="submit">
				</td>
				</tr>

		</table>
	</form>
</section>
	
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