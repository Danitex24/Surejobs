<?php
	include("connection.php");

	if(isset($_POST ['send'])){
		$id=time().rand();
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$localgovt=$_POST['localgovt'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$entrydate=$_POST['entrydate'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
		$insert=mysqli_query($connection,"INSERT INTO jobseekers (id, sname, fname, mname, gender, dob, address, state, localgovt, mobileno, email, entrydate,username,password)VALUES('$id','$sname','$fname','$mname','$gender','$dob','$address','$state','$localgovt', '$mobileno','$email','$entrydate','$username','$password')")or die(mysqli_error($connection));

		
		if($insert and $insert){
			echo "<script>alert('Applied information inserted')
			location='login.php'; </script>";
		}else{
			echo  "<script>alert('Information  not inserted please check your record!')</script>";
		}
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
	<a href="home.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<h4 style="background-color: white; color: red; width: 320px; text-align: center; font-family: Tahoma; size: 10px;">Carfully fill out the form with correct informations</h4>
<form  class="form"  method="post" >
		<table align="center">
				<tr>
					<td>
						Surname:
					</td>
				
					<td>
						<input type="text" name="sname" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						First Name:
					</td>
				
					<td>
						<input type="text" name="fname" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Middle Name:
					</td>
				
					<td>
						<input type="text" name="mname" required="yes">
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
				<tr>
					<td>
						Date of Birth:
					</td>
					<td >
						<select name="dob" required="yes">
							<option value="1990-01-01">
								1990-01-01
							</option>
							<option>
								1991-01-01
							</option>
							<option>
								1992-01-01
							</option>
							<option>
								1993-01-01
							</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Address:
					</td>
				
					<td>
						<input type="text" name="address" required="">
					</td>
				</tr>
				<tr>
					<td>
						State:
					</td>
				
					<td>
						<input type="text" name="state" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Local Govt:
					</td>
				
					<td>
						<input type="text" name="localgovt" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Mobile Number:
					</td>
				
					<td>
						<input type="text" name="mobileno" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
				
					<td>
						<input type="text" name="email" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Entry Date:
					</td>
				
					<td>
						<input type="text" name="entrydate" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Enter username:
					</td>
					<td>
						<input type="text" name="username" required="yes">
					</td>
					</tr>
					<tr>
						<td>
							Enter password:
						</td>
							<td>
								<input type="password" name="password" required="yes">
							</td>
					</tr>
		<tr>
			<td>
        <form action="cv_uploader.php" method="post" enctype="multipart/form-data">  
        	<td>
    		<input type="file" name="fileToUpload"/>  
    		<input type="submit" value="Upload Photo" name="submit"/>  
			</td>
    		</td>
    	</tr> 



				<tr>
					<td>
						            
					</td>
				<td>
					<input type="submit" onclick="alert('Click  OK to proceed you data submition')"; name="send" value="Register">
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