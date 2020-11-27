 <?php
include("connection.php");
//include("auth.php");
//select infor from data base
$id=$_GET["id"];
$select=mysqli_query($connection, "SELECT * FROM jobseekers where id='$id'")or die (mysqli_error($connection));
$jobseekers=mysqli_fetch_array($select); 
		if($id==""){ ?>
		<p style="color:red">page got an empty id</p>
		
				?>
				<p style="color:red">User does not exist</p>
				<?php }else{
					
					?>


<!DOCTYPE html>
<html lang="en" >
<head >
	<title>index</title>
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
					<a href="jobseekers.php">Register here</a>
					<a href="logout.php">Logout</a>
					<a href="log_printout.php">Printout Details</a>
					<a href="appliedjob.php">Apply for Job</a>
					<a href="view_allvacancies.php">View all vacancies</a>
					<a href="updateprofile.php?username=<?php echo $id['id'] ?>">Update Profile</a>
				</li>
			</ul>
		</nav>
	</div>




		<table border="1px" align="center" style="width: 500px; padding: 5px; font-family: Tahoma; font-size: 14px; text-align: center;">
				<tr>
					<th class="left">Surname</th>
					<td class="right"><?php echo $jobseekers['sname']; ?> </td>
				</tr>
					
				<tr>
					<th class="left">First Name</th>
					<td class="right"><?php echo $jobseekers['fname']; ?> </td>
				</tr>
					
				<tr>
					<th class="left">Middle Name</th>
					<td class="right"><?php echo $jobseekers['mname']; ?> </td>
				</tr>
					
				<tr>
					<th class="left">Gender</th>
					<td class="right"><?php echo $jobseekers['gender'] ?> </td>
				</tr>
				
				<tr>
					<th class="left">Date of Birth</th>
					<td class="right"><?php echo $jobseekers['dob'] ?> </td>
				</tr>
				
				<tr>
					<th class="left">Address</th>
					<td class="right"><?php echo $jobseekers['address'] ?> </td>
				</tr>
				
				<tr>
					<th class="left">State</th>
					<td class="right"><?php echo $jobseekers['state'] ?> </td>
				</tr>
				
				<tr>
					<th class="left">Local Govt</th>
					<td class="right"><?php echo $jobseekers['localgovt'] ?> </td>
				</tr>
				
				<tr>
					<th class="left">Mobile Number</th>
					<td class="right"><?php echo $jobseekers['mobileno'] ?> </td>
				</tr>

				<tr>
					<th class="left">Email</th>
					<td class="right"><?php echo $jobseekers['email'] ?> </td>
				</tr>

				<tr>
					<th class="left">Entry Date</th>
					<td class="right" readonly="yes"><?php echo $jobseekers['entrydate'] ?> </td>
				</tr>

				<tr>
					<th class="left">User Name</th>
					<td class="right"><?php echo $jobseekers['username'] ?> </td>
				</tr>

				<tr>
					<th class="left">Password</th>
					<td class="right"><?php echo $jobseekers['password'] ?> </td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="updateprofile.php?id=<?php echo $jobseekers['id'] ?>" onclick (" return comfirm ('Are you sure you want to update user information?')); ">Update profile</a></td>
					</tr>
			</table>
				
				<?php }//end of else for if mysqli_num_rows

		//end of else for if $stdid!=""
		?>

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

