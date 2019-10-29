<?php

	include("connection.php");
	//include("auth.php");
	//session_start();

	if(isset($_POST['login'])){
		$user=$_POST['id'];
		$pass=$_POST['password'];
		//select the persons record from the admin table
		$select=mysqli_query($connection,"SELECT * FROM create_user WHERE username='$user' AND password='$pass'")or die(mysqli_error($connection));
		$fetch=mysqli_fetch_array($select);
		if($user==$fetch['username'] and $pass==$fetch['password']){
		
			$_SESSION['loggin']=1;
			$_SESSION['logged']=true;
			$_SESSION['id']=$fetch['id'];
			$_SESSION['role']=$fetch['role'];

			if($fetch['role']=="Staff"){
				header("location:admin.php");
			}else
			if($fetch['role']=="user"){
				header("location:index.php");
			}else{
				$msg="invalid username or password ";
			}
			
		}
	
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

		<div align="center">
				<h1 style="  background: darkblue; color: green; text-align: center; width: 315px; font-family: Tahoma; font-size: 16px;">Welcome to Admin control pannel please login</h1>
					<form method="post">
						<table>
							<th colspan="2"><?php if(isset($msg)) echo "$msg"; ?> </th>
							<tr>
								<td>Enter username:</td>
								<td>
									<input type="text" name="id" size="30" required="yes">
								</td>
								</tr>
														<tr>
								<td>Enter password:</td>
								<td>
									<input type="password" name="password" size="30" required="yes">
								</td>
								</tr>
								<tr>
									<td>
										
									</td>
								<td>
									<input type="submit" name="login" value="Login">
								</td>
							</tr>
						</table>
					</form>
				</div>
		</body>
</html>