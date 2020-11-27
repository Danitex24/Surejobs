 <?php
	include("connection.php");
	//include("auth.php");
	$id=$_GET["id"];
	$select=mysqli_query($connection, "SELECT * FROM company_info WHERE cname='$id'")or die(mysqli_error($connection));
		$fetch=mysqli_fetch_array($select);
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

	$update=mysqli_query($connection,"UPDATE company_info SET cname='$cname',address='$address',city='$city',state='$state',contactno='$contactno',website='$website',email='$email',username='$username',password='$password',entrydate='entrydate' WHERE cname='$id'") or die(mysqli_error($connection));
		if($update){
		echo"<script>alert('company information updated successfuly thank you')
		location='viewstudent.php'
		</script>";

	}else
	echo"<script>alert('company information not updated Pls make sure you provide  us with correct data')</script>";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<title>company info update</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="header">
	<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
				<h4>Carfully fill out the form with correct informations</h4>
	<form method="post" >
		<table>
			
				<tr>
					<td>
						Company name:
					</td>
				
					<td>
						<input type="text" name="cname" value="<?php echo $fetch['cname']; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Address:
					</td>
				
					<td>
						<input type="text" name="address" value="<?php echo $fetch['address']; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						City:
					</td>
				
					<td>
						<input type="text" name="city" value="<?php echo $fetch['city']; ?>" >
					</td>
				</tr>
				
				<tr>
					<td>
						State:
					</td>
				
					<td>
						<input type="text" name="state" value="<?php echo $fetch['state']; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Contact Number:
					</td>
				
					<td>
						<input type="text" name="contactno" value="<?php echo $fetch['contactno']; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Website:
					</td>
				
					<td>
						<input type="text" name="website" value="<?php echo $fetch['website']; ?>" >
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
				
					<td>
						<input type="email" name="email" value="<?php echo $fetch['email']; ?>" >
					</td>
				</tr>
				
				<tr>
					<td>
						User Name:
					</td>
				
					<td>
						<input type="text" name="username" value="<?php echo $fetch['username']; ?>"  readonly="yes">
					</td>
				</tr>
				<tr>
					<td>
						Password:
					</td>
				
					<td>
						<input type="text" name="password" value="<?php echo $fetch['password']; ?>" readonly="yes" >
					</td>
				</tr>
				<tr>
					<td>
						Entry Date:
					</td>
				
					<td>
						<input type="text" name="entrydate" value="<?php echo $fetch['entrydate']; ?>" readonly="yes">
					</td>
				</tr>
				<tr>
					<td>
						            
					</td>
				<td>
					<input type="submit" onclick="alert('Your information has been submited succesfully thank you')"; name="send" value="Update">
				</td>
				</tr>

		</table>
	</form>
	
</body>
</html>