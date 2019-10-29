<?php
	include("connection.php");
	include("auth.php");
	$id=$_GET["id"];
	$select=mysqli_query($connection, "SELECT * FROM jobseekers WHERE mname='$id'")or die(mysqli_error($connection));
	//fetch record from database
	$fetch=mysqli_fetch_array($select);

if(isset($_POST ['send'])){
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

	$update=mysqli_query($connection,"UPDATE jobseekers SET sname='$sname',fname='$fname',mname='$mname',gender='$gender',dob='$dob',address='$address',state='$state',localgovt='$localgovt',mobileno='$mobileno', email='$email',entrydate='entrydate' WHERE mname='$gender'") or die(mysqli_error($connection));
		if($update){
		echo"<script>alert('User information updated successfuly thank you')
		location='viewjobseekers.php'
		</script>";

	}else
	echo"<script>alert('User information not updated Pls make sure you provide  us with correct data')</script>";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<title>User info update</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="header">
	<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
				<h4>Carfully fill out the form with correct informations</h4>
	<form class="form" method="POST">
		
		<table >

			<tr>
				<td>
					Sur Name:
				</td>
			
				<td>
					<input type="text" value="<?php echo $fetch['sname']; ?>" name="sname" size="30" required="required">
				</td>
			</tr>
			<tr>
				<td>
					First Name:
				</td>

				<td>
					<input type="text" value="<?php echo $fetch['fname']; ?>"  name="fname" size="30" required="required">
				</td>
			</tr>
			<tr>

				<td>
					Middle Name:
				</td>
			
				<td>
					<input type="text" value="<?php echo $fetch['mname']; ?>"  name="mname" size="30" required="required">
				</td>
			</tr>
			<tr>
				<td>
					Gender:	
								
				</td>
			
				<td>
					<input type="radio" name="gender" value="m" required />Male
					<input type="radio" name="gender" value="f" required /> Female
				</td>
			</tr>
			<tr>
				<td>
					DOB:
				</td>
			
				<td>
					<input type="text" value="<?php echo $fetch['dob']; ?>"  name="dob" size="30" required="required">
				</td>
			</tr>

			<tr>
				<td>
					Address:
				</td>
			
					<td>
						<input type="text"  value="<?php echo $fetch['address']; ?>" name="address" size="30" required="required">
					</td>
			</tr>
			<tr>
				<td>
					State:
				</td>
			
				<td>
					<input type="text"  value="<?php echo $fetch['state']; ?>" name="state" size="30" required="required">
				</td>
			</tr>
			<tr>
				<td>
					Local Govt:
				</td>
			
				<td>
					<input type="text" value="<?php echo $fetch['localgovt']; ?>"  name="localgovt" size="30" required="required">
				</td>
			</tr>

			<tr>
				<td>
					Mobile Number:
				</td>
			
				<td>
					<input type="text" value="<?php echo $fetch['mobileno']; ?>"  name="mobileno" size="30" required="required">
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
			
				<td>
					<input type="text" value="<?php echo $fetch['email']; ?>"  name="email" size="30" required="required">
				</td>
			</tr>
			<tr>
				<td>
					Entry Date:
				</td>

				<td>
					<input type="text" value="<?php echo $fetch['entrydate']; ?>"  name="entrydate" size="30" required="required">
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
</body>
</html>