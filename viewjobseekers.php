<?php
	include("connection.php");
	//include("auth.php");
	$select=mysqli_query($connection, "SELECT * FROM jobseekers")or die (mysqli_error($connection));
	?>

<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>viewu users</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
<body>
	<header class="header">
		<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
		<h2 style="text-align: center; color: green; font-family: Tahoma; font-size: 14px;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<nav class="topnav">
			<ul>
				<li>
					<a href="updatecompany.php">Manage Companies</a>
					<a href="#">Manage News</a>
					<a href="create_user.php">Create User</a>
					<a href="deleteuser.php">Delete User</a>
				</li>
			</ul>
		</nav>
		<section>
			
	
		<table border="1" cellpadding="10" padding"10" align="center" >
		<tr style="background: #003300; color: white;">
			
			<th >Id</th>
		
					<th>Sur Name</th>
		
						<th>First Name</th>
		
							<th>Middle Name</th>
	
								<th>Gender</th>
		
									<th>Date of Birth</th>
		
										<th>Address</th>
		
										<th>State</th>
		
									<th>Local Govt.</th>
	
								<th>Mobile Number</th>

							<th>Email</th>

						<th>Entry Date</th>

					<th>Update</th>
	
				<th>Delete</th>
		</tr>
		<?php while ($rows=mysqli_fetch_array($select)) {?>
	
			<tr>
				<td><?php echo $rows['id'] ?></td>
						<td><?php echo $rows['sname'] ?></td>
							<td><?php echo $rows['fname'] ?></td>
								<td><?php echo $rows['mname'] ?></td>
									<td><?php echo $rows['gender'] ?></td>
										<td><?php echo $rows['dob'] ?></td>
											<td><?php echo $rows['address'] ?></td>
										<td><?php echo $rows['state'] ?></td>
									<td><?php echo $rows['localgovt'] ?></td>
								<td><?php echo $rows['mobileno'] ?></td>
							<td><?php echo $rows['email'] ?></td>
						<td><?php echo $rows['entrydate'] ?></td>

				<td><a href="manageuser.php?id=<?php echo $rows['mname'] ?>" onclick (" return comfirm ('Are you sure you want to update user information?')); ">Update</a></td>
				<td><a href="deleteuser.php?id=<?php echo $rows['mname'] ?>" <a href="deletelink" onclick="return confirm ('Are you sure you really want to delete this User?')">Delete</a></td>
						<?php	} ?>
					<?php	 ?>
				</section>
		 
	</body>
			
</html>