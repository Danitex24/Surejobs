<?php
	include("connection.php");

	$id=time().rand();
	if(isset($_POST ['send'])){
	$cname=$_POST['cname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$contactno=$_POST['contactno'];
	$website=$_POST['website'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$entrydate=$_POST['entrydate'];
	
		$insert=mysqli_query($connection,"INSERT INTO company_info(id, cname, address, city, state, contactno, website, email, username, password, entrydate)VALUES('$id','$cname','$address', '$city','$state','$contactno','$website','$email','$username', '$password','$entrydate')")or die(mysqli_error($connection));
		
		if($insert){
			echo "<script>alert('Applied information inserted')</script>";
		}else{
			echo  "<script>alert('Information  not inserted please cheach your record!')</script>";
		}
	}
	?>

<!DOCTYPE html>
<html lang="en" >
<head >
	<title>Company Application Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="header">
	<a href="index.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;"">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<h1>Company Application Form</h1>
		<h4>Carfully fill out the form with correct informations</h4>
<form class="form" method="post" >
		<table>
			
				<tr>
					<td>
						Company name:
					</td>
				
					<td>
						<input type="text" name="cname">
					</td>
				</tr>
				<tr>
					<td>
						Address:
					</td>
				
					<td>
						<input type="text" name="address">
					</td>
				</tr>
				<tr>
					<td>
						City:
					</td>
				
					<td>
						<input type="text" name="city">
					</td>
				</tr>
				
				<tr>
					<td>
						State:
					</td>
				
					<td>
						<input type="text" name="state">
					</td>
				</tr>
				<tr>
					<td>
						Contact Number:
					</td>
				
					<td>
						<input type="text" name="contactno">
					</td>
				</tr>
				<tr>
					<td>
						Website:
					</td>
				
					<td>
						<input type="text" name="website">
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
				
					<td>
						<input type="email" name="email">
					</td>
				</tr>
				
				<tr>
					<td>
						User Name:
					</td>
				
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>
						Password:
					</td>
				
					<td>
						<input type="text" name="password">
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
						            
					</td>
				<td>
					<input type="submit" onclick="alert('Your information has been submited succesfully thank you')"; name="send" value="Register">
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